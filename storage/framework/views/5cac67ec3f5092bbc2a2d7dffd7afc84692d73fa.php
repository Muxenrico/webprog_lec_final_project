

<?php $__env->startSection('document_title', 'Search'); ?>

<?php $__env->startSection('body'); ?>

    <div class="d-flex flex-column align-items-center mt-4">
        <div class="mt-5">
            <p id="title" class="fs-1 fw-bold">Search Your Favorite Clothes!</p>
        </div>
    </div>

    <form class="d-flex m-5" action="<?php echo e(url('/m-view/search')); ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-2">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100 text-black bg-light mb-3" style="width: 100%">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/clothes/'.$product->image)); ?>" alt="Image Not Found" style="width: 100%; height:70%">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                        <p class="card-text">Rp<?php echo e(number_format($product->price,0,'.', '.')); ?></p>
                        <div class="">
                            <a href="/m-productDetail/<?php echo e($product->id); ?>" type="submit" class="btn btn-primary">More Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="m-5 d-flex justify-content-center">
        <?php echo e($products->withQueryString()->links()); ?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Component.navbarmember', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/memberSearchPage.blade.php ENDPATH**/ ?>