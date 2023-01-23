

<?php $__env->startSection('document_title', 'Edit Password'); ?>

<?php $__env->startSection('body'); ?>

    <div class="p-5 m-5">
        <div class="border pb-5 pt-5 col-6 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Update Password</p>
            
            <form class="col-6" enctype="multipart/form-data" action="/updatePassword2" method="POST" class="mb-5">
                
                <?php echo csrf_field(); ?>

                <?php echo method_field('PATCH'); ?>

                <div class="form-group mb-3 w-100">
                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="5-20 characters">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                    <input name="inputNewPassword" type="password" class="form-control" id="exampleInputPassword2" placeholder="5-20 characters">
                  </div>

                <div class="mb-2">
                    
                    <?php if($errors->any()): ?>
                    <p class="text-danger"><?php echo e($errors->first()); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-success mb-1 w-100">Save Update</button>
                </div>
            </form>
            <div class="form-group mb-3 col-6">
                <a href="/a-profile" type="submit" class="btn btn-outline-danger">Back</a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbaradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/editAdminPasswordPage.blade.php ENDPATH**/ ?>