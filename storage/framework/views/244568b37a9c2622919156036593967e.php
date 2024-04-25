
<?php $__env->startSection('link'); ?>
    <a href="/" class="nav-link">back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    forgot password
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<p><?php echo e($msg); ?></p>
<form method="post" action="<?php echo e(route('forgot_password')); ?>">
    <?php echo csrf_field(); ?> 
    <div>
        <label htmlFor='password' class='text-white'>email</label>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/auth/forgetpassword.blade.php ENDPATH**/ ?>