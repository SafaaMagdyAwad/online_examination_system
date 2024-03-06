
<?php $__env->startSection('title'); ?>
    login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   
<div class="card">
    <div class="bg-<?php echo e($color); ?>">
        <?php echo e($msg); ?>

    </div>
</div>


<form method="post" action="<?php echo e(route('login')); ?>">
    
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">login</button>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/auth/login.blade.php ENDPATH**/ ?>