@include('layouts.admin.header', ['pageTitle' => 'Eventos'])

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row pr-4 mb-4">
            <div class="card card-primary card-outline">
                @if ($errors->any())
                    <div class="card-header">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="card-body container">
                    <p class="h2 text-center mb-3">Informações do evento</p>

                    <div class="row justify-content-center">
                        <div class="col"></div>
                        <div class="row col-lg-8 justify-content-center">
                            <div class="input-group input-group-static mb-4">
                                <label for="pacote">Estado da solicitação</label>
                                <select class="form-control primary" id="exampleFormControlSelect1" disabled
                                    name="estado_evento_id" id="estado_evento_id" style="width: 100%">
                                    @foreach ($estados as $estado)
                                        {{ $selected = $estado->id == $evento->estado_evento_id ? 'selected' : '' }}
                                        <option {{ $selected }} value="{{ $estado->id }}">
                                            {{ Str::upper($estado->descricao) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="descricao">Data do evento</label>
                                <input disabled id="Data do evento" class="form-control" type="date"
                                    name="data_evento" required autofocus value="{{ $evento->data_termino }}" />
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="descricao">Data de término</label>
                                <input disabled id="Data do evento" class="form-control" type="date"
                                    name="data_termino" required autofocus value="{{ $evento->data_termino }}" />
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="descricao">Descrição</label>
                                <textarea disabled class="form-control" name="descricao" id="descricao" rows="3"
                                    placeholder="Descreva o seu evento">{{ $evento->descricao }}</textarea>
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="precoAluger">Localização</label>
                                <input disabled value="{{ $evento->localizacao }}" type="text" name="localizacao"
                                    class="form-control" id="precoAluger" required placeholder="Localização do evento">
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="pacote">Pacote</label>
                                <select disabled class="form-control" required name="pacote_id" id="pacote"
                                    style="width: 100%">
                                    @foreach ($pacotes as $pacote)
                                        {{ $selected = $pacote->id == $evento->pacote_id ? 'selected' : '' }}
                                        <option {{ $selected }} value="{{ $pacote->id }}">
                                            {{ Str::upper($pacote->nome) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row justify-content-center">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class=" col-4 btn btn-danger mx-2">Eliminar
                                    pedido</a>
                                @include('components.my_modal', [
                                    'titleModal' => 'exampleModal',
                                    'title' => 'Eliminar pedido',
                                    'content' => 'Tem certeza que deseja eliminar o pedido?',
                                    'route' => route('eventos.destroy', [$evento->id]),
                                    'method' => 'DELETE',
                                    'action' => 'Eliminar pedido',
                                    'type' => 'submit',
                                    'icon' => 'fa fa-trash',
                                    'other' => '',
                                    'close' => 'Cancelar',
                                ])
                                <a href="{{ route('eventos.edit', [$evento->id]) }}"
                                    class=" col-4 btn btn-warning mx-2">Processar pedido</a>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                {{-- <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div> --}}

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

@include('layouts.admin.footer')
