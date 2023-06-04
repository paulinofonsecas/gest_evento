@include('layouts.admin.header', ['pageTitle' => 'Eventos'])
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Eventos</h6>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <a href="" class="btn btn-link ">Atualizar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cliente</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Descrição</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Localização</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estado</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $evento)
                                        <tr>
                                            <td>
                                                <a href={{ route('eventos.show', [$evento->id]) }}>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $evento->user->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href={{ route('eventos.show', [$evento->id]) }}>
                                                    @if (strlen($evento->descricao) > 30)
                                                                {{ substr($evento->descricao, 0, 30) }}...
                                                            @else
                                                                {{ $evento->descricao }}
                                                            @endif
                                                </a>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <a href={{ route('eventos.show', [$evento->id]) }}>
                                                    @if (strlen($evento->descricao) > 30)
                                                                {{ substr($evento->localizacao, 0, 30) }}...
                                                            @else
                                                                {{ $evento->localizacao }}
                                                            @endif
                                                </a>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge bg-gradient-@if ($evento->estadoEvento->id == 1)warning @elseif ($evento->estadoEvento->id == 2)success @elseif ($evento->estadoEvento->id == 3)danger @elseif ($evento->estadoEvento->id == 4)warning @endif">{{ $evento->estadoEvento->descricao }}
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="d-flex mx-auto">
                                                    <a class="btn btn-link text-info ms-auto border-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        href="{{ route('eventos.edit', [$evento->id]) }}"
                                                        title="Editar">
                                                        <i class="fa-solid fa-file-pen fa-xl"></i>
                                                    </a>
                                                    <a class="btn btn-link text-danger me-auto border-0"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Editar">
                                                        <i class="fa-solid fa-trash fa-xl"></i>
                                                    </a>
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
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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

@include('layouts.admin.footer')
