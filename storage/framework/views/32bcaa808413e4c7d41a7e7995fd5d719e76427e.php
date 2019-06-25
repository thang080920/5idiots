<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 3:31 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - USERS
            </h1>
            <?php if( Session::has('error') ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong><?php echo e(Session::get('error')); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            <?php endif; ?>
        </section>
        <!-- Main content -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        <th>Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Telephone</th>
                        <th>User Level</th>
                        <th>Email</th>
                        <th>Edit/
                        Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td><?php echo e($key+1); ?></td>
                            <?php //Lấy tên?>
                            <td><?php echo e($user->firstname); ?></td>
                            <?php //Lấy họ?>
                            <td><?php echo e($user->lastname); ?></td>
                            <?php //Lấy số điện thoại?>
                            <td><?php echo e($user->phone); ?></td>
                            <?php //Lấy user level?>
                            <td><?php echo e($user->is_admin); ?></td>
                            <?php //Lấy email?>
                            <td><?php echo e($user->email); ?></td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="<?php echo e($user->user_id); ?>/edit-user">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="<?php echo e($user->user_id); ?>/delete-user">delete</a></>
                        </tr>
                        <?php //Kết thúc vòng lập foreach?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>