
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
<p>update the question</p>
<form method="post" action="<?php echo e(route('question.update_multiChoice',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['question']); ?>" name="question">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update question</button>
</form>
<p>update the correct answer</p>
<form method="post" action="<?php echo e(route('question.update_multiChoice',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="row">
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct1" value="true"  <?php echo e($question['correct1']=='true'? 'checked':''); ?> aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox"><?php echo e($question['ans1']); ?></lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct2" value="true" <?php echo e($question['correct2']=='true'? 'checked':''); ?> aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control"  aria-label="Text input with checkbox"><?php echo e($question['ans2']); ?></lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct3" value="true" <?php echo e($question['correct3']=='true'? 'checked':''); ?> aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox"><?php echo e($question['ans3']); ?></lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct4" value="true" <?php echo e($question['correct4']=='true'? 'checked':''); ?> aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox"><?php echo e($question['ans4']); ?></lable>
            </div>
        </div>
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update the correct answer</button>
</form>
 

<p>update the mark</p>
<form method="post" action="<?php echo e(route('question.update_multiChoice',$question['id'])); ?>" style="display: inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="<?php echo e($question['mark']); ?>" name="mark">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update mark</button>
</form>



    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/update_multi_choice.blade.php ENDPATH**/ ?>