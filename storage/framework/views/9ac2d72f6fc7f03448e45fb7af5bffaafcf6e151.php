

<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center">
    <h4 class="text-muted text-uppercase mr-3 text-nowrap"> Adicionar produto </h4>
    <div class="border-bottom border-secondary w-100"></div>
</div>

<div class="container">
    <form autocomplete="off" method="POST" action="<?php echo e(route('produtos.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="valor_antes" value="0">
        <input type="hidden" name="desconto" value="0">
        <input type="hidden" name="imagem_path" value="nodef">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="m-0 d-block"> Tipo do produto </label>
                    <select class="form-control" name="tipo">
                        <option value="1">Emagrecimento</option>
                        <option value="2">Performace</option>
                        <option value="3">Longevidade</option>
                        <option value="4">Saúde e bem-estar</option>
                        <option value="5">Cosméticos</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="m-0 d-block"> Nome do produto </label>
                    <input type="text" class="form-control" minlength="2" required onkeyup="mascaraNome(event)" name="nome" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="m-0 d-block"> Imagem do produto </label>
                    <input type="file" value="" required name="input_img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label class="m-0 d-block"> Valor do produto </label>
                    <input type="text" class="form-control" required minlength="1" maxlength="5" onkeyup="soQuebrado(event)" name="valor" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="m-0 d-block"> Parcelas maxima </label>
                    <select class="form-control" name="parcelas">
                        <option value="1">Somente à vista</option>
                        <option value="2">2x</option>
                        <option value="3">3x</option>
                        <option value="4">4x</option>
                        <option value="5">5x</option>
                    </select>
                </div>
            </div>
        </div>
       
        <div class="form-group">
            <label class="m-0 d-block"> Descrição do produto </label>
            <textarea class="form-control" maxlength="199" minlength="5" required name="descricao"></textarea>
        </div>
        <hr>
        <div class="form-group">
            <a href=<?php echo e(route('produtos.index')); ?> class="btn btn-link mr-2"> Cancelar </a>
            <button class="btn btn-primary" type="submit">Salvar produto</button>
        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\vendalaravel\resources\views/produtos/create.blade.php ENDPATH**/ ?>