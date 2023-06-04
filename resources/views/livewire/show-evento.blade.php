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
                                        <label class="h4" for="descricao">Data do evento</label>
                                        <input disabled id="Data do evento" style="font-size: 13pt" class="form-control"
                                            type="date" name="data_evento" data-="{{ $evento->data_evento }}"
                                            required autofocus autocomplete="username"
                                            value="{{ $evento->data_evento }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label class="h4" for="descricao">Data de término</label>
                                        <input disabled id="Data de termino" style="font-size: 13pt"
                                            class="form-control" type="date" name="data_termino" required autofocus
                                            autocomplete="username" value="{{ $evento->data_termino }}" />
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label class="h4" for="descricao">Descrição</label>
                                        <textarea disabled style="font-size: 13pt" class="form-control" name="descricao" id="descricao" rows="3"
                                            placeholder="Descreva o seu evento">{{ $evento->descricao }}</textarea>
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label class="h4" for="precoAluger">Localização</label>
                                        <input disabled value="{{ $evento->localizacao }}" type="text"
                                            name="localizacao" style="font-size: 13pt" class="form-control"
                                            id="precoAluger" required placeholder="Localização do evento">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label class="h4" for="precoAluger">Pacote</label>
                                        <input disabled value="{{ $evento->pacote->nome }}" type="text"
                                            name="localizacao" style="font-size: 13pt" class="form-control"
                                            id="precoAluger">
                                    </div>

                                    <div class="">
                                        <h4>Estado da solicitação</h4>
                                        <br>
                                        <span
                                            class="badge bg-gradient-@if ($evento->estadoEvento->id == 1) warning @elseif ($evento->estadoEvento->id == 2)success @elseif ($evento->estadoEvento->id == 3)danger @elseif ($evento->estadoEvento->id == 4)warning @elseif ($evento->estadoEvento->id == 5)primary @endif">{{ $evento->estadoEvento->descricao }}
                                        </span>
                                    </div>
                                    <div>
                                        @if ($evento->estadoEvento->id == 7)
                                            <a href="{{ route('evento.meioPagamento', [$evento->id]) }}"
                                                class="btn btn-outline-primary btn-lg w-100">Adicionar meio de
                                                pagamento</a>
                                        @endif

                                        @if ($evento->estadoEvento->id == 1)
                                            <a href="{{ route('evento.cancelar', [$evento->id]) }}"
                                                class="btn btn-outline-danger btn-lg w-100">Cancelar evento</a>
                                        @endif
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
