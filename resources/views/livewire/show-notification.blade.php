@if (Auth::user()->type_id == 1 || Auth::user()->type_id == 3)
    @include('layouts.admin.header', ['pageTitle' => 'Eventos'])
@else
    @include('layouts.header', ['pageTitle' => 'Eventos'])
@endif

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="text-start pt-1">
                            <h5 class="text-sm mb-0 text-capitalize">Titulo</h5>
                            <span class="mb-0 info">{{ $notification->title }}</span>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-body p-3">
                        <div class="text-start pt-1">
                            <h5 class="text-sm mb-0 text-capitalize">Titulo</h5>
                            <span class="mb-0 info">{{ $notification->title }}</span>
                        </div>

                        <div class="text-start pt-1">
                            <h5 class="text-sm mb-0 text-capitalize">Emissor</h5>
                            <span class="mb-0 info">{{ $notification->sender->name }}</span>
                        </div>

                        <div class="text-start pt-1">
                            <h5 class="text-sm mb-0 text-capitalize">Mensagem</h5>
                            <span class="mb-0 info">{{ $notification->message }}</span>

                            @if ($notification->title == '')
                            @endif

                        </div>

                        <div class="text-start pt-1">
                            <h5 class="text-sm mb-0 text-capitalize">Data</h5>
                            <span class="mb-0 info">{{ $notification->created_at }}</span>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                        <a class="link btn-link" href="{{ url()->previous() }}">Voltar</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            </div>

        </div>
    </div>
</main>
@include('layouts.admin.footer')
