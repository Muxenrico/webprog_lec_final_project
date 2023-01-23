

<?php $__env->startSection('document_title', 'Product Details'); ?>

<?php $__env->startSection('body'); ?>

    <div class="p-5 m-5">
        <div class="border col-8 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row mx-auto justify-content-md-center">
                <div class="col align-items-center m-3 mx-auto">
                    <img src="<?php echo e(asset('images/clothes/'.$currProduct->image)); ?>" class="img-fluid img-thumbnail" alt="...">
                </div>
                <form enctype="multipart/form-data" <?php echo $__env->yieldContent('method'); ?> <?php echo $__env->yieldContent('action'); ?> class="col m-5 mx-auto pt-5">
                    
                    <?php echo csrf_field(); ?>
                    
                    <?php echo $__env->yieldContent('method_field'); ?>

                    <div class="border-bottom">
                        <div class="col">
                            <h1 for="ProductName"><?php echo $__env->yieldContent('productName'); ?></h1>
                        </div>
                        <div class="col">
                            <h3 for="ProductPrice"><?php echo $__env->yieldContent('productPrice'); ?></h2>
                        </div>
                    </div>
                    <div class="col">
                        <p for="ProductDescription"><?php echo $__env->yieldContent('productDescription'); ?></p>
                    </div>
                    <div class="col">
                        <p for="ProductStock"><?php echo $__env->yieldContent('productStock'); ?></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbarmember', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Chrome Downloads\Project WebProg\WebProg_Project_Final\resources\views/showProductDetail.blade.php ENDPATH**/ ?>