<?php $__env->startSection('content'); ?>
  <h1 class="my-4"><?php echo e(@$title); ?>

    <small><?php echo e(@$subTitle); ?></small>
  </h1>

  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card mb-4">
      <img class="card-img-top" src="<?php echo e($post->featured_image ?? 'http://placehold.it/750x300'); ?>" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title"><?php echo e($post->title); ?></h2>
        <p class="card-text"><?php echo strip_tags($post->min_content); ?></p>
        <br>
        <a href="<?php echo e(url($post->link)); ?>" class="btn btn-primary ">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <?php echo e($post->created_at->format('F d,Y')); ?> by
        <a href="<?php echo e(url('author/'.$post->User->email)); ?>"><?php echo e($post->User->name); ?></a>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>
      No Post Yet :(
    </p>
  <?php endif; ?>
  





  <!-- Pagination -->
  <div class="justify-content-center mb-4">
    <?php echo $posts->links(); ?>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mihai\Desktop\Bilet_nr21\bilet_nr21\resources\views/welcome.blade.php ENDPATH**/ ?>