<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
<div class="container">
    <div class="card">
        <div class="bg-dark text-light m-5">
                <a href="<?php echo e(route('login_form')); ?>" class="btn btn-warning form-control input">login</a>
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/welcome.blade.php ENDPATH**/ ?>