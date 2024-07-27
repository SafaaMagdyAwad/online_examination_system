
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

<div>
    <a href="<?php echo e(route('question.add_discriptive_form',$exam['id'])); ?>" class="btn btn-warning input mt-1 form-control loginPass">add a daiscriptive Question</a>
    <a href="<?php echo e(route('question.add_multi_choice_form',$exam['id'])); ?>" class="btn btn-warning input mt-1 form-control loginPass">add a multi choice Question</a>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/add.blade.php ENDPATH**/ ?>