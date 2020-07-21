<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Spigreen - Store</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom_style.css')); ?>" rel="stylesheet">

    
</head>
<body>

    <div class="navegador bg-dark shadow navegador-toggle navegador-off" id="navegador">

        <div class="bg-primary d-flex justify-content-between pl-4 pr-2 py-3">
            <div>                
                <?php if(Auth::check()): ?>
                <h3 class="h4 text-dark mb-0"> Olá <?php echo e(Auth::user()['name']); ?>. </h3>
                <a href="#" class="text-dark">  Seja bem vindo. </a>                        
                <?php else: ?>
                <h3 class="h4 text-dark mb-0"> Olá visitante. </h3>
                <a href=<?php echo e(route('login.index')); ?> class="text-dark"> Faça seu cadastro aqui! </a>                        
                <?php endif; ?>                   
            </div>            
            <button type="button" class="btnToggleSideBar btn btn-primary text-white"> <i class="fas fa-times"></i> </button>
        </div>

        <div>
            <a href="#" class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-home mr-3"></i> Pagina inicial </a>
            <a href=<?php echo e(route('login.index')); ?> class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-sign-in-alt mr-3"></i> Entrar </a>
            <a href="#" class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-headset mr-3"></i> Atendimento </a>

            <p class="h5 text-white py-3 px-4"> Categorias </p>

            <a href="#" class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-boxes mr-3"></i> Combo </a>
            <a href="#" class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-leaf mr-3"></i> Produtos </a>
            <a href="#" class="py-3 px-4 d-block text-white w-100  border-info border-bottom"> <i class="fas fa-asterisk mr-3"></i> Atendimento </a>
        </div>

    </div>

    <div class="painel-navegador painel-off btnToggleSideBar" id="panelnav"></div>

    <div class="position-fixed w-100 bg-white border-bottom" style="left: 0;z-index:5;">  
        <div class="bg-primary w-100 d-none d-md-block">
            <div class="container">
            
                <div class="d-flex justify-content-between align-items-center py-1">
                    <?php if(Auth::check()): ?>
                    <a href=<?php echo e(route('conta.index')); ?> class="small text-dark m-0"><i class="fas fa-user mr-1"></i>  Olá <?php echo e(Auth::user()['name']); ?>, seja bem vindo. </a>                
                    <?php else: ?>
                    <a href=<?php echo e(route('login.index')); ?> class="small text-dark m-0"><i class="fas fa-user mr-1"></i>  Olá, faça seu cadastro aqui! </a>                
                    <?php endif; ?>  
                                    
                    <div>
                        <a href="#" class="small text-dark m-0 mr-1"><i class="fab fa-whatsapp mr-1"></i> (65) 3041-2000</a>
                        <a href="#" class="small text-dark m-0 mr-1"><i class="fas fa-phone mr-1"></i> Fale conosco</a>
                        <a href="#" class="small text-dark m-0 mr-1"><i class="fas fa-question-circle  mr-1"></i>Ajuda</a>
                        <a href="#" class="small text-dark m-0 mr-1"><i class="fas fa-user mr-1"></i>Meus Pedidos</a>

                        <?php if(Auth::check()): ?>
                        <a href=<?php echo e(route('login.logout', [1])); ?> class="small text-dark m-0"><i class="fas fa-sign-out-alt mr-1"></i>Sair</a>
                        <?php else: ?>
                        <a href=<?php echo e(route('login.index')); ?> class="small text-dark m-0"><i class="fas fa-sign-in-alt mr-1"></i>Entrar</a>
                        <?php endif; ?>                        
                    </div>
                </div>
     
             </div>   
        </div>       
        <div class="container py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <div>
                    <button type="button" class="btnToggleSideBar btn btn-link btn-lg"> <i class="fas fa-bars"></i> </button>
                    <img src="<?php echo e(asset('img/ativo.png')); ?>" class="nav-img" alt="produto icone">      
                </div>

                <div class="position-relative d-none d-md-inline-block">                    
                    <div class="input-group">
                        <input class="form-control py-2 border-right-0 border" type="search" value="" placeholder="Pesquisar...">
                        <span class="input-group-append">
                            <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                        </span>
                    </div> 
                    <div class="position-absolute d-flex justify-content-between w-100" style="bottom: -22px">
                        <a href="#" class="small text-secondary"> Combos </a>               
                        <a href="#" class="small text-secondary"> Produtos </a>               
                        <a href="#" class="small text-secondary"> Acessorios </a>               
                    </div>                        
                </div>
                
                <?php $total = 0 ?>
                <?php if(session('carrinho')): ?>
                    <?php $__currentLoopData = session('carrinho'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $detalhes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                        <?php $total += $detalhes['quantidade'] ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div>
                    <a href=<?php echo e(route('carrinho.index')); ?> class="bg-primary rounded-circle p-3 d-inline-block position-relative" style="width: 50px; height: 50px;">
                        <span class="badge badge-pill badge-dark position-absolute p-2" style="left: -13px;top: -8px; width:30px;height:30px;"><?php echo e($total); ?></span>
                        <i class="fas fa-shopping-cart text-white"></i>
                    </a>  
                    <a href="#" class="bg-primary rounded-circle p-3 d-none d-md-inline-block" style="width: 50px; height: 50px;">
                        <i class="fas fa-users text-white"></i>
                    </a>
                </div>
            </div>            
        </div>   
        
        <div class="container d-block d-md-none mb-1">                    
            <div class="input-group">
                <input class="form-control py-2 border-right-0 border" type="search" value="" placeholder="Pesquisar...">
                <span class="input-group-append">
                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                </span>
            </div>                       
        </div>
    </div>

    
        <div style="width: 100%; min-height: 100vh;padding-top: 130px">                      
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>    
</body>

<script>
    $(".btnToggleSideBar").click(function (e) {
        e.preventDefault();
        $( "#navegador" ).toggleClass( "navegador-off" );
        $( "#panelnav" ).toggleClass( "painel-off" );
    });
</script>


</html><?php /**PATH C:\projetos\vendalaravel\resources\views/layouts/default.blade.php ENDPATH**/ ?>