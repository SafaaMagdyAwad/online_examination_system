
<?php $__env->startSection('title'); ?>
     exam results
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('userhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input mt-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h1 hidden><?php echo e($all=0); ?></h1>

<table class="table">
    <thead>
       <tr>
       <th scope="col">question</th>
       <th scope="col">answer</th>
       <th scope="col">your answer</th>
       <th scope="col">mark</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($question['question']); ?></th>
            <td><?php echo e($question['ans']); ?></td>
            <td><?php echo e($question['student_ans']); ?></td>
            <td><?php echo e($question['mark']); ?></td>
            <h1 hidden><?php echo e($all=$all+$question['full_mark']); ?></h1>
            
       </tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
       
   </tbody>
</table>

<?php echo e($total_mark); ?>/<?php echo e($all); ?>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/user/exam_results.blade.php ENDPATH**/ ?>