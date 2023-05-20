<!-- Modal -->

<!--implementa o modal  -->
<!--  -->
<!--[  -->
<!--    'titleModal' => 'exampleModal',  -->
<!--    'title' => 'Eliminar pedido',  -->
<!--    'content' => 'Tem certeza que deseja eliminar o pedido?',  -->
<!--    'route' => route('eventos.destroy', [$evento->id]),  -->
<!--    'method' => 'DELETE',  -->
<!--    'action' => 'Eliminar pedido',  -->
<!--    'color' => 'danger',  -->
<!--    'type' => 'button',  -->
<!--    'icon' => 'fa fa-trash',  -->
<!--    'other' => '',  -->
<!--    'close' => 'Cancelar',  -->
<!--    ])  -->

<!-- implementa o modal com base nas informações acima -->
<!-- Dica: use variaveias para que o modal seja reutilizavel -->
<!-- Modal -->

<div class="modal fade" id="{{ $titleModal }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $content }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary"
                    data-bs-dismiss="modal">{{ $close }}</button>
                <form action="{{ $route }}" method="POST">
                    @csrf
                    @method($method)
                    <button type="{{ $type }}" class="btn bg-gradient-primary">{{ $action }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
