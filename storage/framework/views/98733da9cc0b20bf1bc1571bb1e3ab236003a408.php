<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 7:49 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/Dangerzone.css')); ?>">
    <div class="h-section dangerzone">
        <div class="col-lg-12 dangerframe">
            <div class="row">
                <div class="col-lg-6 dangerpic">
                    <img src="<?php echo e(url('images/dangerzone1.jpg')); ?>" class="card-img-top">
                </div>
                <div class="col-lg-6 dangertitle">
                    <h2><u>UNSAFE AREA</u></h2>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #1: Tran Duy Hung Street, Cau Giay Town, Ha Noi City.</p>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #2: Hoang Cau Street, Dong Da Town, Ha Noi City.</p>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #3: Ho Tung Mau Street, Nam Tu Liem Town, Ha Noi City.</p>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #4: Phu My Street, Hoai Duc Town, Ha Noi City.</p>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #5: Lang Street, Cau Giay Town, Ha Noi City.</p>
                    <p><i class="fas fa-hand-point-right" id="arrow"></i>&emsp;Danger Area #6: Ton That Thiep Street, Ba Dinh Town, Ha Noi City.</p>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>