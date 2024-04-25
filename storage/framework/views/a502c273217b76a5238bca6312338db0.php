
<?php $__env->startSection('title'); ?>
    add student
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo e($msg); ?>


<form method="post" action="<?php echo e(route('add_user')); ?>">
    <?php echo csrf_field(); ?>
    <p>
        passwors is the national id 
        email name@CSE
    </p>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="national_id" name="national_id">
    </div>
   
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="admin" name="admin" value=0 hidden >
    </div>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >select student acadimic year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
    <input type="text" class="input mt-1 form-control loginPass"  name="msg" value="admin was added successfully" hidden>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add user</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/add_user.blade.php ENDPATH**/ ?>