
<?php $__env->startSection('title'); ?>
    add question
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link"><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('exam.all')); ?>" class="nav-link">all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo e($msg); ?>

<div>
    <a href="<?php echo e(route('question.add_multi_choice_form',$exam['id'])); ?>" class="btn btn-warning input mt-1 form-control loginPass">add a multi choice Question</a>
</div>
<form  method="post" action="<?php echo e(route('question.add_discriptive',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
    
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="question" name="question">
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


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/addDiscriptive.blade.php ENDPATH**/ ?>