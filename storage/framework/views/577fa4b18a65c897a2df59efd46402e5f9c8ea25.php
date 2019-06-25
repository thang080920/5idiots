<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 10:17 AM
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - STORY
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
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Edit/Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td><?php echo e($key+1); ?></td>
                            <?php //Lấy tiêu đề?>
                            <td><?php echo e($story->title); ?></td>
                            <?php //Lấy tác giả?>
                            <td><?php echo e($story->author); ?></td>
                            <?php //Lấy loại?>
                            <td><?php echo e($story->category); ?></td>
                            <?php //Lấy nội dung?>
                            <td><?php echo e($story->text); ?></td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="<?php echo e($story->story_id); ?>/edit-story">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="<?php echo e($story->story_id); ?>/delete-story">delete</a></td>
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