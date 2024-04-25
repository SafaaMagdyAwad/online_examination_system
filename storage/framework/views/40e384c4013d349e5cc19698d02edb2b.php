
<?php $__env->startSection('title'); ?>
    add exam
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo e($msg); ?>


<form method="post" action="<?php echo e(route('exam.create')); ?>">
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="title" name="title">
    </div>
   
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="start" name="start"  >
    </div>
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="end" name="end"  >
    </div>
    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="Start Date" name="sDate"  >
    </div>
    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="End Date" name="eDate"  >
    </div>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >select year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add exam</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/create.blade.php ENDPATH**/ ?>