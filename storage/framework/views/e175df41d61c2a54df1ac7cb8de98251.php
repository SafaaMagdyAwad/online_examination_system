
<?php $__env->startSection('title'); ?>
    all admins
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('exam.all')); ?>" class="nav-link">all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-success">
    <div class="container">
        <div class="card bg-success text-light">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3"><?php echo e($exam['title']); ?></div>
                        <div class="col-3">year: <?php echo e($exam['year_id']); ?></div>
                        <div class="col-3">start time: <?php echo e($exam['start']); ?></div>
                        <div class="col-3">end tine: <?php echo e($exam['end']); ?></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">

                        <a href="<?php echo e(route('exam.update_form',$exam['id'])); ?>" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">update  data</a>
                        <a href="<?php echo e(route('question.add_discriptive_form',$exam['id'])); ?>" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">add questions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<table class="table">
    <thead>
       <tr>
       <th scope="col"> id</th>
       <th scope="col">question</th>
       <th scope="col">ans</th>
       <th scope="col">mark</th>
       
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $multiChoiceQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiChoiceQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($multiChoiceQuestion['id']); ?></th>
            <td><?php echo e($multiChoiceQuestion['question']); ?></td>
            <td><?php echo e($multiChoiceQuestion['ans']); ?></td>
            <td><?php echo e($multiChoiceQuestion['mark']); ?></td>
            
            
            <td>

                    
                <a href="<?php echo e(route('question.update_multiChoice_form',$multiChoiceQuestion['id'])); ?>" class=" btn btn-warning input mt-1 form-control loginPass">update  question</a>
                
                <form method="POST" style="display: inline" action="<?php echo e(route('deleteMutiChoice',[$multiChoiceQuestion['id']])); ?>"  >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                
            </td>
       </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $discriptiveQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discriptiveQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($discriptiveQuestion['id']); ?></th>
            <td><?php echo e($discriptiveQuestion['question']); ?></td>
            <td><?php echo e($discriptiveQuestion['ans']); ?></td>
            <td><?php echo e($discriptiveQuestion['mark']); ?></td>
            
            
            <td>

                    
                <a href="<?php echo e(route('question.update_discriptive_form',[$discriptiveQuestion['id']])); ?>" class=" btn btn-warning input mt-1 form-control loginPass">update  question</a>
                
                <form method="POST" style="display: inline" action="<?php echo e(route('deleteDiscriptive',[$discriptiveQuestion['id']])); ?>"  >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                
            </td>
       </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
   </tbody>
</table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/show_for_admin.blade.php ENDPATH**/ ?>