@include('layouts.header', ['pageTitle' => 'Evento'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="flex-row">
                            <h2 class=" card-title">Evento agendado</h2>
                            <form class="float-right btn mr-5" method="POST"
                                action="{{ route('evento.destroy', [$evento->id]) }}">
                                @if ($evento->estadoEvento->id == 1)
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn mr-2 btn-danger">Remover</button>

                                    <a href="{{ route('evento.edit', [$evento->id]) }}"
                                        class="float-right btn mr-2 btn-warning">Editar</a>
                                @endif
                            </form>
                        </div>
                        <div class="card-body mt-1">
                            <form method="POST" action="{{ route('evento.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Data do evento</label>
                                        <input disabled id="Data do evento" class="form-control" type="date"
                                            name="data_evento" data-="{{ $evento->data_evento }}" required autofocus
                                            autocomplete="username" value="{{ $evento->data_evento }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Data de término</label>
                                        <input disabled id="Data de termino" class="form-control" type="date"
                                            name="data_termino" required autofocus autocomplete="username"
                                            value="{{ $evento->data_termino }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label for="descricao">Descrição</label>
                                        <textarea disabled class="form-control" name="descricao" id="descricao" rows="3"
                                            placeholder="Descreva o seu evento">{{ $evento->descricao }}</textarea>
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label for="precoAluger">Localização</label>
                                        <input disabled value="{{ $evento->localizacao }}" type="text"
                                            name="localizacao" class="form-control" id="precoAluger" required
                                            placeholder="Localização do evento">
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label for="pacote">Estado</label>
                                        <select disabled
                                            class="block font-medium text-sm text-gray-700border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            required name="pacote_id" id="pacote" style="width: 100%">
                                            @foreach ($estados as $estado)
                                                {{ $selected = $estado->id == $evento->estado_id ? 'selected' : '' }}
                                                <option {{ $selected }} value="{{ $estado->id }}">
                                                    {{ Str::upper($estado->descricao) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label for="pacote">Pacote</label>
                                        <select disabled
                                            class="block font-medium text-sm text-gray-700border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            required name="pacote_id" id="pacote" style="width: 100%">
                                            @foreach ($pacotes as $pacote)
                                                {{ $selected = $pacote->id == $evento->pacote_id ? 'selected' : '' }}
                                                <option {{ $selected }} value="{{ $pacote->id }}">
                                                    {{ Str::upper($pacote->nome) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </form>
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
