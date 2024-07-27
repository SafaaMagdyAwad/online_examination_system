
<?php $__env->startSection('title'); ?>
    all exams
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link"><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<table class="table">
    <thead>
       <tr>
       <th scope="col">exam id</th>
       <th scope="col">title</th>
       <th scope="col">start_time</th>
       <th scope="col">year_id</th>
       <th scope="col">end time</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($exam['id']); ?></th>
            <td><?php echo e($exam['title']); ?></td>
            <td><?php echo e($exam['start']); ?></td>
            <td><?php echo e($exam['year_id']); ?></td>
            <td><?php echo e($exam['end']); ?></td>
            
            <td>
                <div class="row">
                    
                    <a href="<?php echo e(route('exam.show',$exam['id'])); ?>" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">view exam</a>
                <a href="<?php echo e(route('students_degrees',$exam['id'])); ?>" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">view students degrees</a>
                
               
                
                <form method="POST" style="display: inline" action="<?php echo e(route('exam.delete',$exam['id'])); ?>"  >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                </div>
            </td>
       </tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
       
   </tbody>
</table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/all.blade.php ENDPATH**/ ?>