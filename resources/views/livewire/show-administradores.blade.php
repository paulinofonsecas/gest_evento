@include('layouts.admin.header', ['pageTitle' => 'Eventos'])

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 col-md-6 mb-md-4 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h3>Administradores</h3>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <a href="{{ route('administradores.adicionarAdmin') }}"
                                    class="text-end link btn-link">Novo administrador</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">
                                            Id</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">
                                            Nome</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">
                                            BI</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">
                                            Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column ">
                                                        <h6 class="mb-0 text-sm">{{ $admin->id }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column ">
                                                        <h6 class="mb-0 text-sm">{{ $admin->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column ">
                                                        <h6 class="mb-0 text-sm">{{ $admin->email }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column ">
                                                        <h6 class="mb-0 text-sm">{{ $admin->bi }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column ">
                                                        <a href="{{ route('administradores.eliminarAdmin', $admin->id) }}"
                                                            class="danger mb-0 text-sm">
                                                            <i class="danger fa-solid fa-trash fa-xl"></i>
                                                        </a>
                                                    </div>
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

    {{-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"> --}}
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
    </div>
</main>

@include('layouts.admin.footer')
