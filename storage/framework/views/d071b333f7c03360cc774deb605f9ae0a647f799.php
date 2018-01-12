<?php $__env->startSection('content'); ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('moderator-access')): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                    <?php if($post->tags()->count()>0): ?>
                        , oznake:
                        <?php $__currentLoopData = $post->tags->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/public/tags/<?php echo e($tag); ?>"><?php echo e($tag); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </p>
                    <div class="kldfjlf">
                        <?php echo str_limit($post->body, 500); ?>

                    </div>
            </div>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <div class="text-center">
        <?php echo e($posts->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>