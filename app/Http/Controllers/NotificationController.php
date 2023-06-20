<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    // index page
    public function index()
    {
        // caso o usuario for admin, ele pode ver todas as notificações
        if (\Gate::allows('admin')) {
            $notifications = Notification::orderBy('created_at', 'desc')->get();
        }

        // caso o usuario for um cliente, ele pode ver apenas as notificações dele
        if (\Gate::allows('normal')) {
            $notifications = Notification::where('recipient_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }

        // dd($notifications);
        return view('livewire.show-notifications', compact('notifications'));
    }

    /**
     * Mark a notification as read.
     *
     * @param  \App\Models\Notification  $notification
     */
    public function markAsRead(Notification $notification)
    {
        $this->authorize('update', $notification);

        $notification->update(['read' => true]);

        return redirect()->back()->with('success', 'Notification marked as read.');
    }

    /**
     * Remove the specified notification from storage.
     *
     * @param  \App\Models\Notification  $notification
     */
    public function destroy(Notification $notification)
    {
        $this->authorize('delete', $notification);

        $notification->delete();

        return redirect()->back()->with('success', 'Notification deleted successfully.');
    }

    /**
     * Display the specified notification.
     *
     * @param  \App\Models\Notification  $notification
     */
    public function show(Notification $notification)
    {
        $notification->update(['read' => true]);

        return view('livewire.show-notification', [
            'notification' => $notification,
        ]);
    }
}
