<?php $__env->startSection('document_title', 'Welcome'); ?>

<?php $__env->startSection('body'); ?>

    <div class="col-12 card">
        <img src='https://www.solidbackgrounds.com/images/1920x1080/1920x1080-black-solid-color-background.jpg' alt="Responsive image" style="width:100%;" class="card-img position-absolute opacity-50">
        <img src='https://cdn1.epicgames.com/ue/product/Screenshot/8-1920x1080-223fbe2589d7bc5b637058cbfc2ba159.png?resize=1&w=1920' alt="Responsive image" style="width:100%;" class="card-img">
        <div class="card-img-overlay text-white d-flex justify-content-center align-items-center overlay-dark">
            <div class="col text-center">
                <h1 class="text-center" style="color: white;">Welcome to <u style="text-decoration-color: #1385D8;">MaiBoutique</u></h1>
                <p class="text-center font-weight-light" style="color: white">Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>
                <a href="/sign-up" class="btn btn-primary"><u>SIGN UP NOW</u></a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.welcomenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Kuliah Semester 5\Web Programming - BE01\WebProg_Project_Final v1.0\WebProg_Project_Final\resources\views/welcomePage.blade.php ENDPATH**/ ?>