
<?php $__env->startSection('title'); ?>
    add question
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

<?php echo e($msg); ?>

<div>
    <a href="<?php echo e(route('question.add_discriptive_form',$exam['id'])); ?>" class="btn btn-warning input mt-1 form-control loginPass">add a daiscriptive Question</a>
</div>
<form  method="post" action="<?php echo e(route('question.add_multi_choice',$exam['id'])); ?>">
    <?php echo csrf_field(); ?>
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="question" name="question">
        </div> 
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="mark" name="mark">
        </div>
        
        <label>add answers</label>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct1" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans1" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true"  name="correct2" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans2" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct3" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans3" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct4" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans4" aria-label="Text input with checkbox">
                  </div>
            </div>

        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="exam_id" name="exam_id" value="<?php echo e($exam['id']); ?>" hidden>
        </div>
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add question</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/question/addMultiChoice.blade.php ENDPATH**/ ?>