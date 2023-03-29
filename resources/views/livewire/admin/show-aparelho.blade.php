<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="py-7">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="mt-3 row-9">{{ $aparelho->nome }}</h3>
                                <div class="card-tools">
                                    <div class="row">
                                        <a href="{{ route('admin_catalogo') }}"
                                            class="col px-5 mx-2 btn btn-block btn-primary">Voltar</a>
                                        <a href="{{ url('admin/aparelho/edit/' . $aparelho->id) }}"
                                            class="col px-5 mx-2 btn btn-block btn-warning">Editar</a>
                                        <a href="{{ url('admin/aparelho/delete/' . $aparelho->id) }}"
                                            class="col px-5 mx-2 btn btn-block btn-danger">Excluir</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="callout callout-info">
                                    <h5>Descrição</h5>
                                    <p>{{ '     ' . $aparelho->descricao }}</p>
                                </div>
                                <div class="callout callout-info">
                                    <h5>Preço</h5>
                                    <p>{{ '     ' . $aparelho->preco_de_aluguer }} Kz</p>
                                </div>
                                @if ($aparelho->image_url)
                                    <img class="img-fluid pad px-12" style=" max-width: 70%;"
                                        src="{{ url('/storage/aparelhos/' . $aparelho->image_url) }}" alt="Photo">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
