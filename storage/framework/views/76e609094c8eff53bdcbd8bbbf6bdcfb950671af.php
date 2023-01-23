

<?php $__env->startSection('method'); ?>
    
    method="GET"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('method_field'); ?>
    
    <?php echo method_field('GET'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action'); ?>
    
    action='/productDetail/<?php echo e($currProduct->id); ?>'
<?php $__env->stopSection(); ?>

<?php $__env->startSection('productImage'); ?>
    <?php echo e($currProduct->image); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('productName'); ?>
    <?php echo e($currProduct->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('productDescription'); ?>
    <?php echo e($currProduct->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('productPrice'); ?>
    <?php echo e($currProduct->price); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('productStock'); ?>
    <?php echo e($currProduct->stock); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('showProductDetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Chrome Downloads\Project WebProg\WebProg_Project_Final\resources\views/productDetail.blade.php ENDPATH**/ ?>