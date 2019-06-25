

    <?php //Hiển thị story?>

    <?php $__currentLoopData = $lisstory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="stories-inner" id="stories-3">
            <div class="col-md-6 stories-1">
                <div class="stories-1-inner">
                    <h3><?php echo e($story->title); ?>.</h3>
                    <hr>
                    <span>"</span>
                    <span><?php echo e($story->text); ?>

                        </span>
                    <span>"</span>
                    <p><i><?php echo e($story->author); ?></i></p>
                    <a href="<?php echo e(url('stories')); ?>">
                        All Stories
                    </a>
                </div>
            </div>
            <div class="col-md-6 stories-2" id="stories-bg-<?php echo e($story->story_id); ?>"></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




