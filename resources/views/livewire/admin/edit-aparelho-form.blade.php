@include('layouts.admin.header', ['pageTitle' => 'Editar aparelho'])

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row pr-4 mb-4">
            <div class="card card-primary card-outline">
                <form method="post" action="{{ route('admin_update_aparelho', ['id' => $aparelho->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body col-8">
                        <p class="h2 mb-4">Alterar informações do pacote</p>
                        <div class="row">
                            <img src="{{ url('/storage/aparelhos/' . $aparelho->image_url) }}"
                                style="height: 283.027px; width: 250px; object-fit: cover" alt="img-blur-shadow"
                                class="img-fluid shadow-lg border-radius-lg">

                            <div class="col justify-content-start">
                                <div class="input-group input-group-outline my-3">
                                    <input value="{{ $aparelho->nome }}" id="nome" class="form-control"
                                        type="text" name="nome" required autofocus autocomplete="username" />
                                </div>

                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o aparelho">{{ $aparelho->descricao }}</textarea>

                                </div>

                                <div class="input-group input-group-outline my-3">
                                    <input value="{{ $aparelho->preco_de_aluguer }}" type="number"
                                        name="preco_de_aluguer" class="form-control" id="precoAluger"
                                        placeholder="Preço de aluger">

                                </div>

                                <div class="input-group input-group-outline my-3">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="imageFile" class="custom-file-input"
                                                id="imagefile">
                                            <label class="custom-file-label" for="imageFile">Escolha o
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-start">
                                <a href="{{ route('aparelhos.index') }}" class="btn btn-danger mx-3 mt-4">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary mx-3 mt-4">Enviar</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
    </div>
</main>

@include('layouts.admin.footer')
