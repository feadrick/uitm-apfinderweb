<?php $__env->startSection('headtitle'); ?>
    Search
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section-padding" style="background-color:#008080;min-height:400px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <form action="<?php echo e(url('/getdata')); ?>" method="POST" >
                    <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option value="Mathematics">Mathematics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-8">
                            <input type="text"  name="keyword" placeholder="keyword" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                            <button type="submit" class="button white">Submit</button>    
                            </div>
                            </div>         
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="box">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">#</td>
                            <td scope="col">FACULTY NAME</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>