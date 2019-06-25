<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/27/2019
 * Time: 9:25 AM
 */
?>

<?php $__env->startSection('content'); ?>

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

<?php //Hiển thị form sửa?>
<p><a class="btn btn-primary" href="<?php echo e(url('master/data-event')); ?>">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
    <center><div class="page-header"><h4>Edit Event</h4></div></center>
    <form action="<?php echo e(url('master/update-event')); ?>" method="post">
        <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>" />
        <input type="hidden" id="id" name="id" value="<?php echo $getEventById[0]->id; ?>" />
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" maxlength="255" value="<?php echo e($getEventById[0]->title); ?>" required />
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Location" maxlength="255" value="<?php echo e($getEventById[0]->location); ?>" required />
        </div>
        <div class="form-group">
            <label for="start">Start Day</label>
            <input type="date" class="form-control" id="start" name="start" placeholder="Start Day" maxlength="255" value="<?php echo e($getEventById[0]->start); ?>" required />
        </div>
        <div class="form-group">
            <label for="end">End Day</label>
            <input type="date" class="form-control" id="end" name="end" placeholder="End Day" maxlength="11" value="<?php echo e($getEventById[0]->end); ?>" required />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description" required><?php echo e($getEventById[0]->description); ?></textarea>
        </div>
        <center><button type="submit" class="btn btn-primary">SAVE</button></center>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>