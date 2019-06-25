<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 4:02 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - VOLUNTEER LIST
            </h1>
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
                        <th>Purpose</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td><?php echo e($key+1); ?></td>
                            <?php //Lấy tên?>
                            <td><?php echo e($vol->firstname); ?></td>
                            <?php //Lấy họ?>
                            <td><?php echo e($vol->lastname); ?></td>
                            <?php //Lấy mục đích?>
                            <td><?php echo e($vol->purpose); ?></td>
                            <?php //Lấy số điện thoại?>
                            <td><?php echo e($vol->phone); ?></td>
                            <?php //Lấy email?>
                            <td><?php echo e($vol->email); ?></td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-danger" href="<?php echo e($vol->volunteer_id); ?>/edit-volunteer">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="<?php echo e($vol->volunteer_id); ?>/delete-volunteer">delete</a></>
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