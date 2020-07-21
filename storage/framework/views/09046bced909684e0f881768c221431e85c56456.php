

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href=<?php echo e(route('produtos.index')); ?>>Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
    </ol>
</nav>

<div class="d-flex align-items-center">
    <h4 class="text-muted text-uppercase mr-3"> Carrinho </h4>
    <div class="border-bottom border-secondary w-100"></div>
</div>

<div class="table-responsive">

    <?php if(session('carrinho')): ?>

    <table class="table table-striped" id="listaCarrinho">
        <h2> Teste </h2>

    <?php endif; ?>

</div>

<hr>
<div class="d-flex justify-content-between">
    <div style="width: 200px">
        <input type="text" class="form-control" placeholder="Digite o cupom">        
    </div>
    <div style="width: 200px">
        <button type="button" class="btn btn-primary btn-block" onclick="location.reload()">Atualizar lista</button>
    </div>
</div>
<hr>

<div class="d-flex justify-content-end mb-5">
    <div style="width: 350px;">
        
        <h5 class="bg-secondary text-center py-3"> 
            Carrinho totais
        </h5>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Total</th>
                    <td> <p id="carrinhoTotal">zero</p> </td>           
                </tr>
                <tr>
                    <th scope="row">Subtotal</th>
                    <td> <p id="carrinhoSubtotal">zero</p> </td>           
                </tr>
            </tbody>
          </table>
          <hr>
          <button type="button" class="btn btn-primary btn-block"> Finalizar compra </button>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/carrinho/inicio.blade.php ENDPATH**/ ?>