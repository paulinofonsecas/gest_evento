<div class="shrink-0 flex items-center">
    <a href="{{ route('admin_dashboard') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
    </a>
</div>

<!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('admin_dashboard')" :active="request()->routeIs('admin_dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('admin_catalogo')" :active="request()->routeIs('admin_catalogo')">
        {{ __('Catalogo de pacotes') }}
    </x-nav-link>
</div>
