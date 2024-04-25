
<?php $__env->startSection('title'); ?>
    update exam
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    
<a href="<?php echo e(route('adminhome')); ?>" class="   btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input m-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('exam.all')); ?>" class="btn btn-primary input m-1 form-control loginPass">all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h6>
    <?php echo e($msg); ?>

</h6>

<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($exam['title']); ?>" name="title">
    </div>
       
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update title</button>
</form>
<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
 
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="<?php echo e($exam['start']); ?>" name="start">
    </div>

   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update start</button>
</form>
<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    
    
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="<?php echo e($exam['end']); ?>" name="end">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update end time</button>
</form>
<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
 
    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="<?php echo e($exam['sDate']); ?>" name="sDate">
    </div>

   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update start date</button>
</form>
<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>

    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="<?php echo e($exam['eDate']); ?>" name="eDate">
    </div>

    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update end date</button>
</form>
<form method="post" action="<?php echo e(route('exam.update',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled ><?php echo e($exam['year_id']); ?></option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update year</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/update.blade.php ENDPATH**/ ?>