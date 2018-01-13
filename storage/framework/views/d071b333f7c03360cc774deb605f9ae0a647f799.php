<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row" style="margin-top:15px;">
            <?php if($post->post_thumbnail): ?>
                <div class="col-sm-4">
                    <img src="/public/uploads/<?php echo e($post->post_thumbnail); ?>" alt="Istaknuta Slika"
                         style="border:solid white 1px; height: 152px; width:190px; margin-left:-15px;">
                </div>
            <?php else: ?>
                <div class="col-sm-4">
                    <img src="/public/uploads/no_thumbnail_pic/null.png" alt="Istaknuta Slika"
                         style="border:solid white 1px; height: 152px; width:190px; margin-left:-15px;">
                </div>
            <?php endif; ?>
            <div class="col-sm-8">
                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <a href="/public/show/<?php echo e($post->id); ?>" class="blog-post-title"><?php echo e($post->title); ?></a>
                    </h2>
                    <p class="blog-post-meta">
                        <?php echo e($post->created_at->toFormattedDateString()); ?>, autor <a href="#"><?php echo e($post->user->name); ?></a>
                        <?php if($post->categories()->count()>0): ?>
                            , kategorije:
                            <?php $__currentLoopData = $post->categories->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/public/category/<?php echo e($category); ?>"><?php echo e($category); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </p>
                    <div class="kldfjlf">
                        <?php echo str_limit($post->body, 500); ?>

                    </div>
                </div>
                <hr>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="text-center">
        <?php echo e($posts->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>