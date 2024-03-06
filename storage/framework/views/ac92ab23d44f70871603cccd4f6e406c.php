
<?php $__env->startSection('title'); ?>
<?php echo e($logedinuser['name']); ?> home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('userhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input mt-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>
    <a href="<?php echo e(route('updateuser_form',$logedinuser['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass">update my data</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link3'); ?>
    <a href="" class="btn btn-success input mt-1 form-control loginPass">delete my account</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h1>
    user home  مش هيدخل غير الامتحان اللي وقته شغال
</h1>
<div class="container m-4 bg-success text-light">
    <h5>exams</h5>
    <div class="row">
        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3  ">
            <div class="card bg-light m-2">
                <h6>title :<?php echo e($exam['title']); ?></h6>
                <p>starts at: <?php echo e($exam['start']); ?>   ,  ends at: <?php echo e($exam['end']); ?></p>
                <a href="<?php echo e(route('exam.show',$exam['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass">دحيح وهحل الامتحان</a>
                <a href="<?php echo e(route('show_student_ans',$exam['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass">درجتي كام يا عالم</a>
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
my exams
 all exams student can enter button gitin


 
all exam student entered with his deree

    table student degree     exam title
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/user/home.blade.php ENDPATH**/ ?>