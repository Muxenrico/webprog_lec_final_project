

<?php $__env->startSection('document_title', 'My Profile'); ?>

<?php $__env->startSection('body'); ?>

<div class="p-5 m-5">
    <div class="border col-6 mx-auto d-flex flex-column justify-content-center align-items-center p-3 m-5">
        <p id="title" class="fs-1 fw-bold">My Profile</p>
        <form class="d-flex flex-column justify-content-center align-items-center">
            <?php echo csrf_field(); ?>
            
            <button type="button" class="btn btn-dark" disabled><?php echo e($currUser->type); ?></button>
            <h5 class="mt-3">Username : <?php echo e($currUser->username); ?></h5>
            <span><?php echo e($currUser->email); ?></span>
            <span class="mt-1">Address : <?php echo e($currUser->address); ?></span>
            <span class="mt-1">Phone : <?php echo e($currUser->phone_number); ?></span>

            <div class="row p-3 d-flex justify-content-center align-items-center">
                <div class="col">
                    <form>
                        
                        <?php echo csrf_field(); ?>
                        <a href="/editPassword2" type="submit" class="btn btn-outline-primary">Edit Password</a>
                    </form>
                </div>
            </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbaradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/adminProfilePage.blade.php ENDPATH**/ ?>