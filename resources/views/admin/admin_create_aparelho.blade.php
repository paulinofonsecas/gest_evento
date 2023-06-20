@include('layouts.admin.header', ['pageTitle' => 'Aparelhos'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="col-6">
                <h2 class="card-title">Criar produto</h2>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('aparelhos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="input-group input-group-outline mb-4">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" required autofocus
                            autocomplete="username" />

                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o aparelho"></textarea>
                    </div>

                    <div class="input-group input-group-outline mb-4">
                        <label for="precoAluger">Preço de aluguer</label>
                        <input type="number" name="precoAluger" class="form-control" id="precoAluger"
                            placeholder="Preço de aluger">

                    </div>

                    <div class="input-group input-group-outline mb-4">
                        <label for="imageFile">Imagem do aparelho</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="imageFile" class="custom-file-input" id="imagefile">
                                <label class="custom-file-label" for="imageFile">Escolha o
                                    arquivo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
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
