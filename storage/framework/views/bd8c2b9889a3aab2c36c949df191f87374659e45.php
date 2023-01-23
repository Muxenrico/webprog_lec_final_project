

<?php $__env->startSection('document_title', 'Home'); ?>

<?php $__env->startSection('body'); ?>

    <div class="d-flex flex-column align-items-center mt-4">
        <div class="mt-5">
            <p id="title" class="fs-1 fw-bold">Check What You've Bought!</p>
        </div>
    </div>

    <div class="col cols-row-1 colds-row-md-4 g-4 m-5">
        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card text-black bg-light row m-3 mx-auto">
                <div class="w-100 m-3" style="width: 100%">
                    <h4 class="mb-3" class="card-title"><?php echo e(date("Y-m-d", strtotime($t->created_at))); ?></h4>
                    <?php
                        $total_price = 0
                    ?>
                        <?php $__currentLoopData = $transaction_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ti->transaction_id == $t->id): ?>
                                <p>• <?php echo e($ti->transaction_qty); ?> pc(s) <?php echo e($ti->name); ?> : Rp<?php echo e(number_format($ti->transaction_qty * $ti->price,0,'.', '.')); ?></p>
                                <?php
                                    $total_price += ($ti->transaction_qty * $ti->price)
                                ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h4 class="card-body">Total Price: Rp<?php echo e(number_format($total_price,0,'.', '.')); ?></h4>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbarmember', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\College\5th Semester Material\Web Programming\Project\WebProg_Project_Final v1.3\resources\views/historyTransactionsPage.blade.php ENDPATH**/ ?>