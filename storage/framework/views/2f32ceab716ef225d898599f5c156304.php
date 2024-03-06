
<?php $__env->startSection('title'); ?>
    exam
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('userhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input m-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
السؤال اللي هيتحل هيتمسح متعملش  ارسال للسؤال غير وانت متاكد منه
<div class="bg-success">
    <div class="container">
        <div class="card bg-dark text-light">
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
                    

                </div>
            </div>
        </div>
    </div>
    
</div>

<?php echo e($msg); ?>

<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(route('store_stu_ans')); ?>" <?php if(false): ?>
        hidden
    <?php endif; ?>>
    
    <?php echo csrf_field(); ?>
    
    <div>
        <label for=""><?php echo e($question['question']); ?></label>
    </div>
    
    
    <div>
        <input type="radio"   name="student_answer" value="<?php echo e($question['s1']); ?>"><label><?php echo e($question['s1']); ?></label>
        <input type="radio"   name="student_answer" value="<?php echo e($question['s2']); ?>"><label><?php echo e($question['s2']); ?></label>
        <input type="radio"   name="student_answer" value="<?php echo e($question['s3']); ?>"><label><?php echo e($question['s3']); ?></label>
        <input type="radio"   name="student_answer" value="<?php echo e($question['s4']); ?>"><label><?php echo e($question['s4']); ?></label>

    </div>
    
    <div>
        <input name="exam_id" value="<?php echo e($exam['id']); ?>" hidden>
    </div>
    <div>
        <input name="question" value="<?php echo e($question['question']); ?>" hidden>
    </div>
    <div>
        <input name="student_id" value="<?php echo e($logedinuser['id']); ?>" hidden>
    </div>
    <div>
        <input name="question_id" value="<?php echo e($question['id']); ?>" hidden>
    </div>
    <div>
        <input name="question_answer" value="<?php echo e($question['ans']); ?>" hidden>
    </div>
   
    <div>
        <input name="mark" value="<?php echo e($question['mark']); ?>" hidden>
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">submit this answer</button>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(route('show_student_ans',$exam['id'])); ?>"  class="btn btn-primary input mt-1 form-control loginPass"> show my answers</a>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/show_for_user.blade.php ENDPATH**/ ?>