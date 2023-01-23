

<?php $__env->startSection('document_title', 'Sign Up'); ?>

<?php $__env->startSection('body'); ?>
    <div class="p-5 m-5">
        <div class="border col-3 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Sign Up</p>
            <form>
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3 w-100">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3 w-100">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputPhoneNumber1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="emailHelp" placeholder="(10-13 numbers)">
                </div>
                <div class="form-group mb-4 w-100">
                    <label for="exampleInputAddress1">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress1" aria-describedby="emailHelp" placeholder="(min 5 letters)">
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-primary mb-1 w-100">Submit</button>
                    <small id="" class="form-text text-muted">Already Registered? <a href="/sign-in">Sign In Here</a></small>
                </div>
              </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.welcomenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Kuliah Semester 5\Web Programming - BE01\WebProg_Project_Final v1.0\WebProg_Project_Final\resources\views/signupPage.blade.php ENDPATH**/ ?>