<div class="shrink-0 flex items-center">
    <a href="{{ route('evento.index') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
    </a>
</div>

<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('evento.index')" :active="request()->routeIs('evento.index')">
        {{ __('Eventos') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('catalogo')" :active="request()->routeIs('catalogo')">
        {{ __('Catalogo de aparelhos') }}
    </x-nav-link>
</div>
