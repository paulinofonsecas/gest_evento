@include('layouts.header', ['pageTitle' => 'Evento'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="flex-row">
                            <h2 class=" card-title">Evento sadf agendado</h2>
                        </div>
                        <div class="card-body mt-3">
                            <form action="{{ route('evento.update', [$evento->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Data do evento</label>
                                        <input id="Data do evento" class="form-control" type="date"
                                            name="data_evento" data-="{{ $evento->data_evento }}" required autofocus
                                            autocomplete="username" value="{{ $evento->data_evento }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Data de término</label>
                                        <input id="Data de termino" class="form-control" type="date"
                                            name="data_termino" required autofocus autocomplete="username"
                                            value="{{ $evento->data_termino }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Descrição</label>
                                        <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o seu evento">{{ $evento->descricao }}</textarea>
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label for="precoAluger">Localização</label>
                                        <input value="{{ $evento->localizacao }}" type="text" name="localizacao"
                                            class="form-control" id="precoAluger" required
                                            placeholder="Localização do evento">
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label for="pacote">Pacote</label>
                                        <select
                                            class="block form-control font-medium text-sm text-gray-700border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            required name="pacote_id" id="pacote" style="width: 100%">
                                            @foreach ($pacotes as $pacote)
                                                {{ $selected = $pacote->id == $evento->pacote_id ? 'selected' : '' }}
                                                <option {{ $selected }} value="{{ $pacote->id }}">
                                                    {{ Str::upper($pacote->nome) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="descricao">Descrição (Opcional)</label>
                                        <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o aparelho"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <a href="{{ route('evento.show', $evento->id) }}" class="btn btn-default"
                                        data-dismiss="modal">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

@include('layouts.footer')
