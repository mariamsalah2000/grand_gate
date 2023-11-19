<?php $__env->startSection('content'); ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('all.add_video')); ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('videos.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong><?php echo e(trans('all.title')); ?></strong></label>
                                <input type="text" placeholder="<?php echo e(trans('all.title')); ?>" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="url"><strong><?php echo e(trans('all.url')); ?></strong></label>
                                <input type="text" placeholder="<?php echo e(trans('all.url')); ?>" name="url" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong><?php echo e(trans('all.order')); ?></strong></label>
                                <input type="number" name="order" class="form-control" placeholder="<?php echo e(trans('all.order')); ?>" value="1">
                            </div>

                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('all.Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iwan\resources\views/backend/videos/create.blade.php ENDPATH**/ ?>