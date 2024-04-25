
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

<?php if(count($discriptiveQuestions)===0): ?>
    <h5>you have solved all discriptive questions or exam still dont contain discriptive questions</h5>
<?php else: ?>
        <?php $__currentLoopData = $discriptiveQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discriptiveQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="<?php echo e(route('store_stu_ans',$exam['id'])); ?>">
        
        <?php echo csrf_field(); ?>
        
        <div>
            <label for=""><?php echo e($discriptiveQuestion['question']); ?></label>

        </div>
        <div>
            <label>your answer</label>
            <input type="text"  name="student_ans">
        </div>
        
        
        <div>
            <input type="text"  name="question" value="<?php echo e($discriptiveQuestion['question']); ?>" hidden>
        </div>
        <div>
            <input type="textarea"  name="ans" value="<?php echo e($discriptiveQuestion['ans']); ?>" hidden>
        </div>
        <div>
            <label><?php echo e($discriptiveQuestion['mark']); ?> marks</label>
            <input type="textarea"  name="full_mark" value="<?php echo e($discriptiveQuestion['mark']); ?>" hidden>
        </div>
        <div>
            <input type="textarea"  name="mark" value="0" hidden>
        </div>
        
        <div>
            <input name="exam_id" value="<?php echo e($exam['id']); ?>" hidden>
        </div>
        
        <div>
            <input name="question_id" value="<?php echo e($discriptiveQuestion['id']); ?>" hidden>
        </div>
        <div>
            <input name="student_id" value="<?php echo e($logedinuser['id']); ?>" hidden>
        </div>

        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">submit this answer</button>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(count($multiChoiceQuestions)===0): ?>
    <h5>you have solved all multi choice questions or exam still dont contain multi choice questions </h5>
<?php else: ?>
        <?php $__currentLoopData = $multiChoiceQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiChoiceQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="post" action="<?php echo e(route('store_stu_ans_multi',$exam['id'])); ?>">
        
                <?php echo csrf_field(); ?>
                
                <div>
                    <label for=""><?php echo e($multiChoiceQuestion['question']); ?></label>

                </div>
                
                
                
                <div>
                    <input type="text"  name="question" value="<?php echo e($multiChoiceQuestion['question']); ?>" hidden>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="<?php echo e($multiChoiceQuestion['ans1']); ?>" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox"><?php echo e($multiChoiceQuestion['ans1']); ?></lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="<?php echo e($multiChoiceQuestion['ans2']); ?>" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox"><?php echo e($multiChoiceQuestion['ans2']); ?></lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="<?php echo e($multiChoiceQuestion['ans3']); ?>" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox"><?php echo e($multiChoiceQuestion['ans3']); ?></lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="student_ans" value="<?php echo e($multiChoiceQuestion['ans4']); ?>" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox"><?php echo e($multiChoiceQuestion['ans4']); ?></lable>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="textarea"  name="mark" value="0" hidden>
                </div>
                <div>
                    <input type="textarea"  name="ans" value="changible" hidden>
                </div>
                <div>
                    <label><?php echo e($multiChoiceQuestion['mark']); ?> marks</label>
                    <input type="textarea"  name="full_mark" value="<?php echo e($multiChoiceQuestion['mark']); ?>" hidden>
                </div>
            
                
                <div>
                    <input name="exam_id" value="<?php echo e($exam['id']); ?>" hidden>
                </div>
                
                <div>
                    <input name="question_id" value="<?php echo e($multiChoiceQuestion['id']); ?>" hidden>
                </div>
                <div>
                    <input name="student_id" value="<?php echo e($logedinuser['id']); ?>" hidden>
                </div>

                <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">submit this answer</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<a href="<?php echo e(route('show_student_ans',$exam['id'])); ?>"  class="btn btn-primary input mt-1 form-control loginPass"> show my answers</a>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/exam/show_for_user.blade.php ENDPATH**/ ?>