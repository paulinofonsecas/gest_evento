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
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                else here</a></li>
                                    </ul>
                                </div>
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
                                                    {{ $evento->descricao }}
                                                </a>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <a href={{ route('eventos.show', [$evento->id]) }}>
                                                    {{ $evento->localizacao }}
                                                </a>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge bg-gradient-@if ($evento->estadoEvento->descricao == 'Aguardando')warning @elseif ($evento->estadoEvento->descricao == 'Aprovado')success @elseif ($evento->estadoEvento->descricao == 'Rejeitado')danger @endif">{{ $evento->estadoEvento->descricao }}
                                                </span>
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
