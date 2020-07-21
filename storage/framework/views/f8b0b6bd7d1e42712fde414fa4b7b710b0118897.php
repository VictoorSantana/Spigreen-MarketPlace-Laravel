

<?php $__env->startSection('content'); ?>

<h1> Guia de tela </h1>
<h5 class="text-muted mb-5">  Algumas funções não estão disponível, somente para visualização. </h5>

<hr>

<h3 class="h4 text-muted"> # Na tela Spigreen Mini Store (inicial) </h3>
<p> - Selecione um dos links abaixo, 'VER LOJA', 'INSERIR PRODUTO' ou 'AJUDA'</p>

<hr>

<h3 class="h4 text-muted"> # Na tela da Loja </h3>
<p> - No lado direito superior irá ter um botão 'Carrinho' ele irá te levar a tela de lista de produtos adicionado, <b>o carrinho de compras</b>. </p>
<p> - Para visualizar o item, ou comprar, clique no botão 'Comprar' dentro do card do produto. </p>
<p> - Dentro da tela de comprar item, irá aparecer mais detalhes sobre o mesmo, clique em 'Comprar' novamente, para continuar. </p>

<hr>
<h3 class="h4 text-muted"> # Na tela do Carrinho </h3>
<p> - Irá aparecer a lista de items que você colocou no seu carrinho, com determinado preço. </p>
<p> - Abaixo irá ter o total e subtotais dos itens. </p>
<p> - Para navegar entre as telas, irá ter uns links no canto superior esquerdo, ex. <b>'Home / Produtos / Carrinho'</b></p>

<hr>
<h3 class="h4 text-muted"> # Na tela de Inserir Produto </h3>
<p> - Adicione o produto, para ser disponivel na loja </p>
<p> - Preencha o formulário, e anexe uma imagem. Logo após clique no botão 'Salvar Produto'. </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/ajuda.blade.php ENDPATH**/ ?>