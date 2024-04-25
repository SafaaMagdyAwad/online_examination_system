
<?php $__env->startSection('title'); ?>
    add admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<p>
    passwors is the national id 
    email name@CSEAdmin
</p>

<form method="post" action="<?php echo e(route('add_user')); ?>">
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
   
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="national_id" name="national_id">
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="admin" name="admin" value=1 hidden >
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="year_id" name="year_id" value=10 hidden>


        <input type="text" class="input mt-1 form-control loginPass"  name="msg" value="admin was added successfully" hidden>
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add admin</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/add_admin.blade.php ENDPATH**/ ?>