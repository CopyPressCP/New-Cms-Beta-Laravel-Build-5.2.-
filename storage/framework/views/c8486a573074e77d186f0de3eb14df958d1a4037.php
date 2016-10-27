<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

                <?php foreach($users as $user): ?>
                <ul class="list-group">

                <li>
                        <?php echo e($user->username); ?>

                    </li>
                    <li>
                        <?php echo e($user->address); ?>

                    </li>
                    <li>
                        <?php echo e($user->city); ?>

                    </li>
                    <li>
                        <?php echo e($user->state); ?>

                    </li>
                    <li>
                        <?php echo e($user->zip); ?>

                    </li>

                </ul>

            <?php endforeach; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>