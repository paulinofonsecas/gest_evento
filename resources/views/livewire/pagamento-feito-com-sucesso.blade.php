@include('layouts.header', ['pageTitle' => 'Evento'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="card">
        </div>
        <div class="card-text text-center">
                <div class="card-img ">
                    <img class="img-fluid" src="{{ asset('storage/sucess_img.png') }}"
                    width="150px" height="150px">
                <p class="h3">Parabens!</p>
                <p class="h5">Seu pagamento foi aceite</p>
                <p class="h5">Em breve a nossa equipe entrará em contacto.</p>
            </div>
            <a class="btn btn-link" href="{{ route('dashboard') }}">Voltar a tela inicial</a>
        </div>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
        </div>
    </div>
</main>

@include('layouts.footer')
