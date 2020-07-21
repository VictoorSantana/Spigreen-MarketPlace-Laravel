

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href=<?php echo e(route('produtos.index')); ?>>Produtos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Minha conta</li>
    </ol>
</nav>


<div class="d-flex align-items-center">
    <h4 class="text-muted text-uppercase mr-3 text-nowrap"> Minha conta </h4>
    <div class="border-bottom border-secondary w-100"></div>
</div>
<br>


<div class="row">
    <div class="col-md-3 mb-3">
        <ul class="list-group border-left border-primary">
            <li class="list-group-item active">Planos de carreira</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Pontos de Rede</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Meus Pedidos</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Mensagens</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Material de Apoio</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Minhas Avaliações</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Dados Cadastrais</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Meus Endereços</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Redefinir Senha</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Visualizar rede</li>
            <li class="list-group-item btn btn-light text-left rounded-0">Financeiro</li>
        </ul>
    </div>
    <div class="col-md-9 mb-3">
        <div class="bg-white shadow border rounded p-3 w-100 mb-3">
            <h4 class="h5 text-muted m-0">Seu Plano: KIT ADESÃO OURO</h4>
        </div>
        <div class="bg-white shadow border rounded p-3 w-100">
            <h5 class="text-secondary"> Relatório » Plano de carreira </h5>
            <hr>
            <div class="d-flex">
                <select class="form-control mr-1" style="width: 150px"><option value="">Selecione o mês</option><option value="01">Janeiro</option><option value="02">Fevereiro</option><option value="03">Março</option><option value="04">Abril</option><option value="05">Maio</option><option value="06">Junho</option><option selected="" value="07">Julho</option><option value="08">Agosto</option><option value="09">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option>                                            </select>
                <select class="form-control mr-1" style="width: 150px">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020" selected>2020</option>
                </select>
                <button type="button" class="btn btn-dark" style="width: 150px">Filtrar</button>
            </div>
            <div class="px-2 py-1 bg-success my-3">
                <p class="text-white m-0 w-100">Status atual: Ativo</p>
            </div>


            <div class="d-flex justify-content-between flex-wrap">
                <div class="card text-dark bg-light mb-3" style="min-width: 13rem;">
                    <div class="card-header text-center">Graduação anterior</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Sem graduação</h5>
                        <p class="card-text text-center">...</p>
                    </div>
                </div>                    
                <div class="card text-dark bg-light  mb-3" style="min-width: 13rem;">
                    <div class="card-header text-center">Sua graduação</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Sem graduação</h5>
                        <p class="card-text text-center">...</p>
                    </div>
                </div>                                
                <div class="card text-dark bg-light  mb-3" style="min-width: 13rem;">
                    <div class="card-header text-center">Maior graduação</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Sem graduação</h5>
                        <p class="card-text text-center">...</p>
                    </div>
                </div>                
            </div>


            <div class="d-flex justify-content-between flex-wrap">
                <small class="text-muted text-center d-block"> <b>300 PP:</b> Pontuação pessoal</small>
                <small class="text-muted text-center d-block"> <b> 0 PA:</b> Pontuações de adesão</small>
                <small class="text-muted text-center d-block"> <b>0 PR:</b> Pontuação de recompra</small>
                <small class="text-muted text-center d-block"> <b>300</b> Total de pontos no período</small>                
            </div>
            <hr>
            <small>Obs.: Os pontos de carreira são calculados utilizando o horário de Brasília.</small>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/conta/index.blade.php ENDPATH**/ ?>