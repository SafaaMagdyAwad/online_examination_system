
<?php $__env->startSection('title'); ?>
    all students results
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input mt-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>





<table class="table">
    <thead>
       <tr>
       <th scope="col">student id</th>
       <th scope="col">name</th>
       <th scope="col">degree</th>
       
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($student['id']); ?></th>
            <td><?php echo e($student['student_name']); ?></td>
            <td><?php echo e($student['total_mark']); ?></td>
            
            
            
       </tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
       
   </tbody>
</table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/all_results.blade.php ENDPATH**/ ?>