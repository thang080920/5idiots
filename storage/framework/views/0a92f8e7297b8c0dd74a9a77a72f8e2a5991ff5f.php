<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 8:42 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/event.css')); ?>">
    <div class="s-section div-event1">
        <div class="container">
            <div class="col-md-5 img">
                <img src="<?php echo e(url('images/event-main.jpg')); ?>">
            </div>
            <div class="col-md-7 status">
                <h1><a href="#" class="event">Events</a> - <a href="<?php echo e(url('campaign')); ?>" class="campaign">Campaigns</a></h1>
                <span>Special, Unforgettable, Spectacular. We do 'em all!
					Make your event a memory.
				</span>
            </div>
            <hr class="s-section">
        </div>
    </div>
    <div class="s-section div-event2">
        <div class="container">
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(asset('images/event-1.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(asset('images/event-2.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(url('images/event-3.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(asset('images/event-4.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(asset('images/event-5.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="<?php echo e(asset('images/event-6.jpg')); ?>">
                    <div class="e-event-mask">
                        <a href=""><h4>Event Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('Homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>