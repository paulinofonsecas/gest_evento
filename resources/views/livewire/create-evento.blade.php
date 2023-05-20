@include('layouts.header', ['pageTitle' => 'Criar evento'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row pr-4 mb-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="col-6">
                        <h2 class="card-title">
                            Agendar evento
                        </h2>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('evento.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="input-group input-group-static mb-4">
                                    <label for="descricao">Data do evento</label>
                                    <input id="Data do evento" class="form-control" type="date"
                                        name="data_evento" required autofocus autocomplete="username" />
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="descricao">Data de término</label>
                                    <input id="Data de termino" class="form-control" type="date"
                                        name="data_termino" required autofocus autocomplete="username" />
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o seu evento"></textarea>
                                </div>

                                <div class="input-group input-group-static mb-4">
                                    <label for="precoAluger">Localização</label>
                                    <input type="text" name="localizacao" class="form-control" id="precoAluger"
                                        required placeholder="Localização do evento">
                                </div>

                                <div class="input-group input-group-static mb-4">
                                    <label for="pacote">Pacote</label>
                                    <select
                                        class="block font-medium text-sm text-gray-700border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                        required name="pacote_id" id="pacote" style="width: 100%">
                                        @foreach ($pacotes as $pacote)
                                            <option value="{{ $pacote->id }}">
                                                {{ Str::upper($pacote->nome) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layouts.footer')
