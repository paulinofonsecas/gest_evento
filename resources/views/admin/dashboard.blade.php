        @include('layouts.admin.header', ['pageTitle' => 'Dashboard'])
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Eventos para hoje</p>
                                    <h4 class="mb-0">{{ $numeroDeEventosMarcadosParaHoje }}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Mais detalhes</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total de eventos</p>
                                    <h4 class="mb-0">{{ $totalDeEventos }}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Mais detalhes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total de usuarios</p>
                                    <h4 class="mb-0">{{ $totalDeUsuarios }}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Mais detalhes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-4">
                    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>Eventos</h6>
                                        <p class="text-sm mb-0">
                                            <i class="fa fa-check text-info" aria-hidden="true"></i>
                                            <span class="font-weight-bold ms-1">30 finalizados</span> este mês
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-5 my-auto text-end">
                                        <div class="dropdown float-lg-end pe-4">
                                            <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                aria-labelledby="dropdownTable">
                                                <li><a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Action</a>
                                                </li>
                                                <li><a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Something
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
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <a href={{ route('eventos.show', [$evento->id]) }}>
                                                            {{ $evento->localizacao }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <a href={{ route('eventos.show', [$evento->id]) }}>
                                                            {{ $evento->estadoEvento->descricao }}
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

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-bars" class="chart-canvas" height="212" width="427"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Evento com estado Aguardando </h6>
                                <p class="text-sm ">Eventos marcados a espera de serem revistos</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <p class="mb-0 text-sm"> Data do ultimo evento agendado 13/04/2023 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line" class="chart-canvas" height="212" width="427"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Eventos com estado Confirmado </h6>
                                <p class="text-sm ">Eventos marcados e confirmados</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <p class="mb-0 text-sm"> Data do ultimo evento confirmado 13/04/2023 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mb-3">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line-tasks" class="chart-canvas" height="212"
                                            width="427"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Eventos com estado Finalizado </h6>
                                <p class="text-sm ">Eventos finalizados</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <p class="mb-0 text-sm"> Data do ultimo evento finalizado 10/04/2023 </p>
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
