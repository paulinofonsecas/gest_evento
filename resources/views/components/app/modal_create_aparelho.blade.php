<!--Modal-->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ url('/admin/create_aparelho') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Criar produto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome"
                                required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva o produto"></textarea>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="precoAluger">Preço de aluguer</label>
                            <input type="number" name="precoAluger" class="form-control" id="precoAluger"
                                placeholder="Preço de aluger">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <div class="form-group">
                            <label for="periodoDeAluger">Periodo minimo de aluger</label>
                            <input type="time" name="periodoDeAluger" class="form-control" id="periodoDeAluger"
                                placeholder="periodo De Aluger">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
