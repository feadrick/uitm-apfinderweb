<?php $__env->startSection('headtitle'); ?>
    Academic program list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="ui celled grid">
    <div class="wide column ">
      <div class="results">
      <?php if(count($ap)!=0): ?>
        <div class="ui middle aligned animated list">
          <?php $__currentLoopData = $ap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academic_program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="content">
            <div class="header" style="color:white;"><?php echo e($academic_program->course_name); ?></div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php else: ?>
      <label style="color:white"><h4>No Result</h4></label>
      <?php endif; ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>