<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Usertype;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', [
            'usertypes' => Usertype::all(),
            'is_admin' => 'false',
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'bi' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        // se existir a repetição do BI retornar uma mensagem de erro
        if (User::where('bi', $request->bi)->exists()) {
            return redirect()->back()->withErrors(['bi' => 'O BI que está tentando inserir já existe']);
        }

        // se existir a repetição do email retornar uma mensagem de erro
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'O email que está tentando inserir já existe']);
        }
        if ($request->role == 'admin') {
            $type_id = UserType::ADMIN;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'bi' => $request->bi,
            'type_id' => $type_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        if ($request->role == 'admin') {
            if ($user->type_id == Usertype::ADMIN || $user->type_id == Usertype::GERENTE) {
                return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        Auth::login($user);
        $user = Auth::user();

        if ($user->type_id == Usertype::ADMIN || $user->type_id == Usertype::GERENTE) {
            return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
