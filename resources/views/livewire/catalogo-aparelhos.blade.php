@include('layouts.header', ['pageTitle' => 'Aparelhos'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <p class="h2">Catalogo de aparelhos</p>
        <div class="row py-4">
            @foreach ($aparelhos as $aparelho)
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4 py-5">
                    <div class="card" >
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ url('/storage/aparelhos/' . $aparelho->image_url) }}"
                                    style="height: 283.027px; width: 100%; object-fit: cover" alt="img-blur-shadow"
                                    class="img-fluid shadow-lg border-radius-lg">
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="font-weight-normal mt-3">
                                <a href="javascript:;">{{ $aparelho->nome }}</a>
                            </h5>
                            <p class="mb-0">
                                {{ $aparelho->descricao }}
                            </p>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer d-flex">
                            <p class="font-weight-normal my-auto">{{ $aparelho->preco_de_aluguer }} Kz</p>
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto"></i>
                            <p class="text-sm my-auto">Barcelona, Spain</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
    </div>
</main>
@include('layouts.footer')
