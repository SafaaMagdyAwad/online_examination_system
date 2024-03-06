
<?php $__env->startSection('title'); ?>
    update question
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    
<a href="<?php echo e(route('adminhome')); ?>" class="   btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input m-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('exam.all')); ?>" class="btn btn-success input m-1 form-control loginPass">all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h6>
    <?php echo e($msg); ?>

</h6>

<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['question']); ?>" name="question">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update question</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['s1']); ?>" name="s1">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update s1</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['s2']); ?>" name="s2">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update s2</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['s3']); ?>" name="s3">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update s3</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['s4']); ?>" name="s4">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update s4</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['ans']); ?>" name="ans">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update ans</button>
</form>
<form method="post" action="<?php echo e(route('question.update',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['mark']); ?>" name="mark">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update mark</button>
</form>



    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/update.blade.php ENDPATH**/ ?>