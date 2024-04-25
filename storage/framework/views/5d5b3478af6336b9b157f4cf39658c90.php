
<?php $__env->startSection('title'); ?>
    update my data
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>
<?php if($logedinuser['admin']==1): ?>
    
<a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
<?php endif; ?>
<?php if($logedinuser['admin']==0): ?>
    
<a href="<?php echo e(route('userhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
<?php endif; ?>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h6>
    <?php echo e($msg); ?>

</h6>

<form method="post" action="<?php echo e(route('updateuser',$user['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($user['name']); ?>" name="name">
    </div>
       
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update name</button>
</form>
<form method="post" action="<?php echo e(route('updateuser',$user['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="<?php echo e($user['email']); ?>" name="email">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update email</button>
</form>
<form method="post" action="<?php echo e(route('updateuser',$user['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    
    
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="<?php echo e($user['national_id']); ?>" name="password">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update password</button>
</form>
<form method="post" action="<?php echo e(route('updateuser',$user['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled ><?php echo e($user['year_id']); ?></option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update year</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/user/update.blade.php ENDPATH**/ ?>