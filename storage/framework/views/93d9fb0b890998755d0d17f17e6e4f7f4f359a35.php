

<?php $__env->startSection('method'); ?>
    
    method="GET"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('method_field'); ?>
    
    <?php echo method_field('GET'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action'); ?>
    
    
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
    Rp<?php echo e(number_format($currProduct->price,0,'.', '.')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('productStock'); ?>
    <?php echo e($currProduct->stock); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('showEditCartPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/editCartPage.blade.php ENDPATH**/ ?>