

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


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">  </th>
            <th scope="col">  </th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor Unitário</th>
          </tr>
        </thead>
        <tbody>
         
       

    <?php $total = 0 ?>

    <?php if(session('carrinho')): ?>    
        <?php $__currentLoopData = session('carrinho'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $detalhes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $total += $detalhes['valor'] * $detalhes['quantidade'] ?>


        <tr>
            <td class="align-middle"> <button type="button" class="removerDoCarrinho btn btn-white text-danger" data-id="<?php echo e($id); ?>"> <i class="fas fa-times"></i>  </button> </td>
            <td class="align-middle"> <img src="<?php echo e(asset($detalhes['imagem_path'])); ?>" style="width:70px;height:70px" alt="imagem produto"> </td>
            <td class="align-middle"> <?php echo e($detalhes['nome']); ?> </td>
            <td class="align-middle"> <input type="number" value=<?php echo e($detalhes['quantidade']); ?> min="1" data-id="<?php echo e($id); ?>" class="atualizarDoCarrinho form-control" style="width: 80px;"></td>
            <td class="align-middle"> <?php echo e($detalhes['valor']); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endif; ?>

        </tbody>
    </table>

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
                    <td> <p><?php echo e($total); ?></p> </td>           
                </tr>
                <tr>
                    <th scope="row">Subtotal</th>
                    <td> <p><?php echo e($total); ?></p> </td>           
                </tr>
            </tbody>
          </table>
          <hr>
          <button type="button" class="btn btn-primary btn-block"> Finalizar compra </button>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/carrinho/index.blade.php ENDPATH**/ ?>