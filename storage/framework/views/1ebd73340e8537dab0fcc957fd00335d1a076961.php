

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href=<?php echo e(route('produtos.index')); ?>>Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
</nav>


<div class="d-flex align-items-center">
    <h4 class="text-muted text-uppercase mr-3"> Login </h4>
    <div class="border-bottom border-secondary w-100"></div>
</div>
<br>


<div class="row">
    <div class="col-md-6">
        <h4 class="text-muted"> Tenho Cadastro </h4>
        <p class="text-muted">Insira o seus dados para efetuar o login.</p>
        <form  autocomplete="off" method="POST" action="<?php echo e(route('login.verificar')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="d-block m-0 text-muted">E-mail</label>
                <input type="text" name="email" class="form-control" value="teste@spigreen.com">
            </div>
            <div class="form-group">
                <label class="d-block m-0 text-muted">Senha</label>
                <input type="password" name="password" class="form-control" value="asd123">
            </div>
            <div class="form-group">
                <a href="#">Esqueci meu cadastro.</a>
                <button type="submit" class="btn btn-dark btn-block"> Entrar </button>
            </div>
        </form>        
    </div>
    <div class="col-md-6">
        <h4 class="text-muted"> Novo Cliente </h4>
        <p class="text-muted">Preencha seu e-mail para continuar seu cadastro.</p>
        <div class="form-group bg-white px-3 py-4 border shadow rounded">
            <label class="d-block m-0">E-mail</label>
            <input type="text" class="form-control">            
            <button type="button" class="btn btn-primary btn-block mt-3">Continuar</button>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/login/index.blade.php ENDPATH**/ ?>