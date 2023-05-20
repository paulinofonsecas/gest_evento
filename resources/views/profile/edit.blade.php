<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="p-4">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </x-slot>

        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <form
                            @if (Auth::user()->is_admin) method="GET"
                            action="{{ route('admin_dashboard') }}"
                        @else
                         action="{{ route('dashboard') }}" @endif>
                            <x-primary-button class="mb-3">{{ __('Voltar') }}</x-primary-button>
                            <div class="mb-3"></div>
                            <div class="mb-3"></div>
                            <div class="mb-3"></div>
                        </form>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
