<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/27/2019
 * Time: 7:32 AM
 */
?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
    <!-- Content Header (Page header) -->
    <section class="col-lg-4 content-header">
        <h1>
            <u>DATA TABLE - CREATE EVENT</u>
        </h1>
    </section>
    <!-- Main content -->
    <?php //Hiển thị thông báo thành công?>
    <?php if( Session::has('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo e(Session::get('success')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    <?php endif; ?>

    <?php //Hiển thị thông báo lỗi?>
    <?php if( Session::has('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong><?php echo e(Session::get('error')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
<?php endif; ?>
    <!-- /.box-header -->

    <div class="col-lg-12 row">
        <div class="col-lg-2 form1">
        </div>
        <div class="col-lg-8 form2">
            <form class="Form" style="form-control" action="<?php echo e(url('master/create-event')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <label for="title" style="margin-top: 2vh;">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="location" style="margin-top: 2vh;">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <label for="start">Start</label>
                        <input type="date" class="form-control" id="start" name="start" placeholder="Start" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="end">End</label>
                        <input type="date" class="form-control" id="end" name="end" placeholder="End" required>
                    </div>
                    <div class="col-lg-8">
                        <label for="description">Description</label>
                        <textarea  class="form-control" id="description" name="description" placeholder="Description"></textarea>
                    </div>

                </div>
                    <div class="col-lg-8" style="margin-left: 170px;margin-top: 23px;">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 2vh;">Submit</button>
                    </div>

            </form>
        </div>
    </div>

    <!-- /.box-body -->

    <!-- /.box -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>