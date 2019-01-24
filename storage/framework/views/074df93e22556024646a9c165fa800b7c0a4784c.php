<?php $__env->startSection('content'); ?>
<div class='container py-3'>
    <div class='row'>
        <div class='col-12'>
            <div class='temp-steam'>
                <img src="asset/img/home/lorem-steam.jpg" alt="" class='img-fluid'>
                <img src="asset/img/logo-mm88sport-trans.png" alt="" class='logomm88sport'>
                <img src="asset/img/home/banner-steam.jpg" alt="" class='bannerSteam'>
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>