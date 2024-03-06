
<?php $__env->startSection('title'); ?>
<?php echo e($logedinuser['name']); ?> home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="  btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger input mt-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('add_student_form')); ?>" class="btn btn-primary input mt-1 form-control loginPass">add student</a>
<a href="<?php echo e(route('add_admin_form')); ?>" class="btn btn-success input mt-1 form-control loginPass">add admin</a>
<a href="<?php echo e(route('allstudents')); ?>" class="btn btn-danger input mt-1 form-control loginPass">all students</a>
<a href="<?php echo e(route('alladmins')); ?>" class="btn btn-dark input mt-1 form-control loginPass">all admins</a>
<a href="<?php echo e(route('exam.createForm')); ?>" class="btn btn-warning input mt-1 form-control loginPass">add exam</a>
<a href="<?php echo e(route('exam.all')); ?>" class="btn btn-primary input mt-1 form-control loginPass">all exams</a>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/home.blade.php ENDPATH**/ ?>