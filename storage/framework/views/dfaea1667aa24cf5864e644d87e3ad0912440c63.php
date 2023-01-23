

<?php $__env->startSection('document_title', 'Sign Up'); ?>

<?php $__env->startSection('body'); ?>
    <div class="p-5 m-5">
        <div class="border col-3 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Sign Up</p>
            
            <form enctype="multipart/form-data"action="<?php echo e(route('register')); ?>" method="POST" class="mb-5">
                
                <?php echo csrf_field(); ?>

                <div class="form-group mb-3 w-100">
                  <label for="exampleInputUsername1" class="form-label">Username</label>
                  <input name="inputUsername" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="inputEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3 w-100" class="form-label">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="inputPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100" class="form-label">
                    <label for="exampleInputPhoneNumber1">Phone Number</label>
                    <input name="inputPhoneNumber" type="text" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="emailHelp" placeholder="(10-13 numbers)">
                </div>
                <div class="form-group mb-4 w-100" class="form-label">
                    <label for="exampleInputAddress1">Address</label>
                    <input name="inputAddress" type="text" class="form-control" id="exampleInputAddress1" aria-describedby="emailHelp" placeholder="(min 5 letters)">
                </div>
                <div class="mb-2">
                    
                    <?php if($errors->any()): ?>
                      <p class="text-danger"><?php echo e($errors->first()); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-primary mb-1 w-100">Submit</button>
                    <small id="" class="form-text text-muted">Already Registered? <a href="<?php echo e(route('index_login')); ?>">Sign In Here</a></small>
                </div>
              </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.welcomenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Kuliah Semester 5\Web Programming - BE01\Final Project\WebProgLAB_Project_Final_2440107771_2440030323\WebProgLAB_Project_Final_2440107771_2440030323\resources\views/signupPage.blade.php ENDPATH**/ ?>