<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 9:12 AM
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - ALERT
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
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Telephone</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Status</th>
                        <th>Edit/
                        Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $help): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td><?php echo e($key+1); ?></td>
                            <?php //Lấy vĩ độ?>
                            <td><?php echo e($help->lat); ?></td>
                            <?php //Lấy kinh độ?>
                            <td><?php echo e($help->lng); ?></td>
                            <?php //Lấy số điện thoại?>
                            <td><?php echo e($help->phone); ?></td>
                            <?php //Lấy tên?>
                            <td><?php echo e($help->firstname); ?></td>
                            <?php //Lấy họ?>
                            <td><?php echo e($help->lastname); ?></td>
                            <?php //Lấy họ?>
                            <td><?php echo e($help->status); ?></td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="<?php echo e($help->id); ?>/edit">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="<?php echo e($help->id); ?>/delete">delete</a></td>
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
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>