

<?php $__env->startSection('method'); ?>
    
    method="GET"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('method_field'); ?>
    
    <?php echo method_field('GET'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action'); ?>
    
    action='/m-productDetail/<?php echo e($currProduct->id); ?>'
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

<?php echo $__env->make('showMemberProductDetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Linggar Nusantara\OneDrive\Documents\WebProg_Project_Final v.1.2\WebProg_Project_Final\resources\views/memberProductDetail.blade.php ENDPATH**/ ?>