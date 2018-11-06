<?php $__env->startSection('headtitle'); ?>
    Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <label style="color:white"><h4>Result</h4></label>
 <div class="ui celled grid">
    <div class="wide column ">
      <div class="results">

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>