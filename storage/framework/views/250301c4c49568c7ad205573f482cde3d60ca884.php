

<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center">
    <h4 class="text-muted text-uppercase mr-3"> Produtos </h4>
    <div class="border-bottom border-secondary w-100"></div>
</div>

<div class="container">

    <div class="d-flex justify-content-center flex-wrap">
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <div class="p-2 d-inline-block shadow border rounded m-3 produto" style="background-color: #fff;">
            <div class="d-block">
                <img src="<?php echo e(asset($produto->imagem_path)); ?>" style="width:253px;height:253px" alt="imagem produto">
            </div>
            <p class="h5 text-muted font-weight-normal mt-2 mb-4"> <?php echo e($produto->nome); ?> </p>
            <p class="text-secondary m-0"> Por apenas  </p>
            <p class="text-primary d-inline-block m-0"> RS</p>
            <h2 class="m-0 ml-1 text-primary d-inline-block"> <?php echo e($produto->valor); ?> </h2>        
            <p class="text-muted m-0 d-block"> <?php echo e($produto->parcelas); ?>x de RS <?php echo e($produto->valor / $produto->parcelas); ?>  </p>
            <div class="d-flex justify-content-between">
                <input type="number" class="form-control" style="width: 80px" min="1" value="1">
                <a  href="<?php echo e(route('produtos.show', [$produto->id])); ?>" class="btn btn-primary text-white text-uppercase">Comprar</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/produtos/index.blade.php ENDPATH**/ ?>