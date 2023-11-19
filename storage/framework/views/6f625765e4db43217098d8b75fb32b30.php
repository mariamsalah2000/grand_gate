<?php $__env->startSection('content'); ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('all.add_benefit')); ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('benefits.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong><?php echo e(trans('all.Name')); ?></strong></label>
                                <input type="text" placeholder="<?php echo e(trans('all.Name')); ?>" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="icon"><strong><?php echo e(trans('all.Icon')); ?></strong></label>
                                <br>
                                <button class="form-control" role="iconpicker" id="icon_picker" data-rows="3" data-cols="6"></button>
                            </div>
                            <input type="hidden" name="icon" value="">

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
<?php $__env->startSection('script'); ?>
<script>
    $('#icon_picker').on('change',function(e){
        var icon = e.icon;
        $('input[name=icon]').val(icon);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mariam\iwan\resources\views/backend/benefits/create.blade.php ENDPATH**/ ?>