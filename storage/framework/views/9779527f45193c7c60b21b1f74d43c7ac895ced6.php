

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href=<?php echo e(route('produtos.index')); ?>>Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e($produtos->nome); ?></li>
    </ol>
</nav>

<div class="container">
    <div class="row mt-2 mb-5">
        <div class="col-md-6">
            <div class="p-2 border" style="max-width: 500px">
                <img src="<?php echo e(asset($produtos->imagem_path)); ?>" style="width: 100%" class="d-inline-block" alt="imagem do produto">
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-2" style="max-width: 500px">
                <p class="h5 text-muted font-weight-normal mt-2 mb-4"> <?php echo e($produtos->nome); ?> </p>
                <hr>
                <p class="text-muted" style="height:96px"> <?php echo e($produtos->descricao); ?> </p>
                <div>
                    <p class="m-0 d-inline-block">Marca: </p>
                    <a href="#" class="m-0 d-inline-block text-primary">Spigreen</a>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-itens-center">
                    <div>
                        <p class="text-secondary m-0"> Por apenas  </p>
                        <p class="text-primary d-inline-block m-0"> RS</p>
                        <h2 class="m-0 ml-1 text-primary d-inline-block"> <?php echo e($produtos->valor); ?> </h2>  
                        <p class="text-muted m-0 d-block"> <?php echo e($produtos->parcelas); ?>x de <?php echo e($produtos->valor / $produtos->parcelas); ?> RS.  </p>
                    </div>
                    <div>
                        <label class="text-muted"> Quantidade: </label>
                        <input type="number" class="form-control" id="qtCompra" style="width: 80px" min="1" value="1">
                    </div>
                </div>
                <hr>
                <button type="button" class="btn btn-primary btn-block" data-id="<?php echo e($produtos->id); ?>" id="btnComprarIrCarrinho" >Comprar</button>
                <div class="mt-2">
                    <label class="sr-only" for="inlineFormInputGroup">Frete</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-truck"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Calcular frete">
                    </div>
                    <p class="small text-muted"> Não sabe seu CEP? <a target="_blank" href="http://www.buscacep.correios.com.br/sistemas/buscacep/">Clique aqui</a> </p>
                </div>
            </div>
        </div>
    </div>      
</div>


<script>

$("#btnComprarIrCarrinho").click(function (e) {
    e.preventDefault();

    const id = $(this).attr("data-id");
    const qt = $('#qtCompra').val();    
    
    $.ajax({
        url: '<?php echo e(url('carrinho')); ?>' + '/'  + id + '/' + qt,
        method: "GET",
        data: null,
        success: function (response) {
            location.href = '<?php echo e(url('carrinho')); ?>';
        }
    });    
});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/produtos/show.blade.php ENDPATH**/ ?>