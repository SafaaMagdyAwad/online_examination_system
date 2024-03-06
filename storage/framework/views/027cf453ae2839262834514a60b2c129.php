
<?php $__env->startSection('title'); ?>
    add question
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input m-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('exam.all')); ?>" class="btn btn-success input m-1 form-control loginPass">all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo e($msg); ?>


<form method="post" action="<?php echo e(route('question.add',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="question" name="question">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="s1" name="s1">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="s2" name="s2">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="s3" name="s3" >
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="s4" name="s4">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="ans" name="ans">
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="mark" name="mark">
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="exam_id" name="exam_id" value="<?php echo e($exam['id']); ?>" hidden>
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add question</button>
</form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/add.blade.php ENDPATH**/ ?>