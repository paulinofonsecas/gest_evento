    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="card-title">Aparelhos</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row flex-wrap">
                                @foreach ($aparelhos as $aparelho)
                                    <div class="col-3 card card-outline card-primary mr-3 mt-3">
                                        <a href="{{ url('aparelho/' . $aparelho->id) }}">
                                            <div class="card-header">
                                                <h6>{{ Str::limit($aparelho->nome, 25, '...') }}</h6>
                                            </div>
                                        </a>
                                        <div class="card-body p-3">
                                            <div class="card-subtitle">
                                                {{ Str::limit($aparelho->descricao, 25, '...') }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
