

<?php $__env->startSection('document_title', 'Add Item'); ?>

<?php $__env->startSection('body'); ?>
    <div class="p-5 m-5">
        <div class="border col-6 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold mt-5">Add Item</p>
            <form enctype="multipart/form-data" method='POST' action='/addItem' class="mb-5" style="width: 80%">
                
                <?php echo csrf_field(); ?>
                
                <?php echo method_field('POST'); ?>

                <div class="mb-3">
                    <label for="inputImage" class="form-label">Clothes Image</label>
                    <input name="inputImage" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 w-100">
                    <label for="InputName" class="form-label">Clothes Name</label>
                    <input name="inputName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputDescription" class="form-label">Clothes Description</label>
                    <textarea name="inputDescription" type="textarea" class="form-control" id="exampleInputDescription1" placeholder="(min 5 letters)"></textarea>
                </div>
                <div class="mb-3 w-100">
                    <label for="inputPrice" class="form-label">Clothes Price (Rp)</label>
                    <input name="inputPrice" type="text" class="form-control" id="exampleInputPrice1" placeholder="≥1000">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputStock" class="form-label">Clothes Stock</label>
                    <input name="inputStock" type="number" class="form-control" id="exampleInputStock1" placeholder="≥1">
                </div>

                <button type="submit" class="btn btn-success">Add</button>
        </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbaradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Chrome Downloads\Project WebProg\WebProg_Project_Final\resources\views/addItemPage.blade.php ENDPATH**/ ?>