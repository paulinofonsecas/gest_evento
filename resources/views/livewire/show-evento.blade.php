@include('layouts.header', ['pageTitle' => 'Evento'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row mt-4 mb-2">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-2">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="flex-row">
                            <h3 class=" card-title">Evento agendado</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('evento.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group input-group-static mb-2">
                                    <label class="h6" for="descricao">Data do evento</label>
                                    <input disabled id="Data do evento" style="font-size: 13pt" class="form-control"
                                        type="date" name="data_evento" data-="{{ $evento->data_evento }}" required
                                        autofocus autocomplete="username" value="{{ $evento->data_evento }}" />
                                </div>
                                <div class="input-group input-group-static mb-2">
                                    <label class="h6" for="descricao">Data de término</label>
                                    <input disabled id="Data de termino" style="font-size: 13pt" class="form-control"
                                        type="date" name="data_termino" required autofocus autocomplete="username"
                                        value="{{ $evento->data_termino }}" />
                                </div>
                                <div class="input-group input-group-static mb-2">
                                    <label class="h6" for="descricao">Descrição</label>
                                    <textarea disabled style="font-size: 13pt" class="form-control" name="descricao" id="descricao" rows="3"
                                        placeholder="Descreva o seu evento">{{ $evento->descricao }}</textarea>
                                </div>

                                <div class="input-group input-group-static mb-2">
                                    <label class="h6" for="precoAluger">Localização</label>
                                    <input disabled value="{{ $evento->localizacao }}" type="text" name="localizacao"
                                        style="font-size: 13pt" class="form-control" id="precoAluger" required
                                        placeholder="Localização do evento">
                                </div>
                                <div class="input-group input-group-static mb-2">
                                    <label class="h6" for="precoAluger">Pacote</label>
                                    <input disabled value="{{ $evento->pacote->nome }}" type="text"
                                        name="localizacao" style="font-size: 13pt" class="form-control"
                                        id="precoAluger">
                                </div>

                                <div class="">
                                    <h4>Estado da solicitação</h4>
                                    <br>
                                    <?php
                                    $labelEstadoEvento = '';
                                    if ($evento->estadoEvento->id == 1) {
                                        $labelEstadoEvento = 'warning';
                                    } elseif ($evento->estadoEvento->id == 2) {
                                        $labelEstadoEvento = 'success';
                                    } elseif ($evento->estadoEvento->id == 3) {
                                        $labelEstadoEvento = 'secondary';
                                    } elseif ($evento->estadoEvento->id == 4) {
                                        $labelEstadoEvento = 'info';
                                    } elseif ($evento->estadoEvento->id == 5) {
                                        $labelEstadoEvento = 'danger';
                                    } elseif ($evento->estadoEvento->id == 6) {
                                        $labelEstadoEvento = 'dark';
                                    } else {
                                        $labelEstadoEvento = 'light';
                                    }
                                    ?>
                                    <span class="badge bg-gradient-{{ $labelEstadoEvento }}">
                                        @if ($evento->estadoEvento->id == 2)
                                            {{ 'Efetue o pagamento' }}
                                        @else
                                            {{ $evento->estadoEvento->descricao }}
                                        @endif
                                    </span>
                                </div>
                                <br>
                                <div>
                                    @if ($evento->estadoEvento->id == 2)
                                        <a href="{{ route('evento.meioPagamento', [$evento->id]) }}"
                                            class="btn btn-outline-primary btn-lg w-100">Adicionar meio de
                                            pagamento</a>
                                        <a href="{{ route('evento.cancelar', [$evento->id]) }}"
                                            class="btn btn-outline-danger btn-lg w-100">Cancelar evento</a>
                                    @endif

                                    @if ($evento->estadoEvento->id == 1)
                                        <a href="{{ route('evento.cancelar', [$evento->id]) }}"
                                            class="btn btn-outline-danger btn-lg w-100">Cancelar evento</a>
                                    @endif

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
