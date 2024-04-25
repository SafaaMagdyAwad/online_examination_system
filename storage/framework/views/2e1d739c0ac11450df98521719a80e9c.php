
<?php $__env->startSection('link'); ?>
    <a href="">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    forgot password
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<p><?php echo e($msg); ?></p>
<form method="post" action="<?php echo e(route('vCode',[$user])); ?>">
    <?php echo csrf_field(); ?>

    <div>
        <label htmlFor='password' class='text-white'>enter vertivication code</label>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="vertification code" name="userVCode">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" name="vCode" value=<?php echo e($vCode); ?> hidden>
    </div>
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/auth/vertivication_code.blade.php ENDPATH**/ ?>