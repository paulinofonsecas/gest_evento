<x-cliente-layout>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Lista de eventos</h3>
                                        <div class="card-tools">
                                            <a href="{{ route('evento.create') }}" class="btn btn-success">
                                                <i class="mr-2 fa-regular fa-plus"></i>
                                                Agendar evento</a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <table class="table table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Localização do evento</th>
                                                    <th>Data do evento</th>
                                                    <th>Data de termino</th>
                                                    <th>Preço</th>
                                                    <th>Estado</th>
                                                    <th>Pacote</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($eventos as $evento)
                                                    <tr>
                                                        <td>{{ $evento->id }}</td>
                                                        <td><a
                                                                href="{{ route('evento.show', [$evento->id]) }}">{{ $evento->localizacao }}</a>
                                                        </td>
                                                        <td>{{ $evento->data_evento }}</td>
                                                        <td>{{ $evento->data_termino }}</td>
                                                        <td>{{ number_format($evento->pacote->preco_de_aluguer, 2, ',', '.') }}
                                                            Kz</td>
                                                        <td>
                                                            @if ($evento->estadoEvento->descricao == 'Aguardando')
                                                                <span class="badge badge-warning">Shipped</span>
                                                            @elseif ($evento->estadoEvento->descricao == 'Aceite')
                                                                <span class="badge badge-primary">Shipped</span>
                                                            @elseif ($evento->estadoEvento->descricao == 'Finalizado')
                                                                <span class="badge badge-success">Shipped</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $evento->pacote->nome }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-cliente-layout>
