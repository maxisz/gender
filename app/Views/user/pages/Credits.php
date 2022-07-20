<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>

  <!-- Start right Content here -->
    <!-- ============================================================== -->
                <div class="row">
            
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!-- <h4 class="card-title mb-0 flex-grow-1">Plans</h4> -->
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly" data-bs-toggle="pill" href="#month" role="tab" aria-controls="month" aria-selected="true">Subscriptions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly" data-bs-toggle="pill" href="#year" role="tab" aria-controls="year" aria-selected="false">One Time</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly " id="onetime" data-bs-toggle="pill" href="#onetime" role="tab" aria-controls="time" aria-selected="false">One Time</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="month" role="tabpanel" aria-labelledby="monthly">
                                        <div class="row">
                                        
                                            <?php foreach($plans as $plan): ?>
                                                                
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16"><?= $plan['plan_name']; ?></h5>
                                                            <h1 class="mt-3"><?= $plan['plan_price']; ?> <span class="text-muted font-size-16 fw-medium">/ <?= $plan['plan_period']; ?></span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Get <?= $plan['plan_limit']; ?> Credits</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Credits Can Be Used 
                                                                Within 1 month</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Get Access To All Api EndPoints</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Csv and Excel Upload</p>
                                                                
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                            <form action="<?=base_url('payment')?>" method="POST" >
                                                                    <!-- Note that the amount is in paise 1 INR = 1000 Paisa -->
                                                                   <input type="text" name="plan_id" value="<?= $plan['plan_id'];?>" hidden>
                                                                    <!--amount need to be in paisa-->
                                                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                                            data-key="<?=env('razorKey')?>"
                                                                            data-amount= "<?= $plan['plan_price'].'00'; ?>"
                                                                            data-buttontext="Purchase Plan"
                                                                            data-name="Gender-Api"
                                                                            data-description="Purchasing <?= $plan['plan_name']; ?> plan"
                                                                            data-image="<?= base_url('/public/assets/images/logo-light.png'); ?>"
                                                                            data-prefill.name="<?= session()->get('user_name'); ?>"
                                                                            data-prefill.email="<?= session()->get('user_email'); ?>"
                                                                            data-theme.color="#2E86C1">
                                                                    </script>
                                                                </form>
                                                                <!-- <a href="" class="btn btn-outline-primary w-100">Choose Plan</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="yearly">
                                        <div class="row">
                
                                            <!-- <div class="col-lg-3">
                                                <div class="card bg-primary mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <div class="pricing-badge">
                                                                <span class="badge">Featured</span>
                                                            </div>
                                                            <h5 class="font-size-16 text-white">Enterprise</h5>
                                                            <h1 class="mt-3 text-white">$179 <span class="text-white font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-white-50 mt-3 font-size-15">For extra large businesses or those in regulated industries</p>
                                                            <div class="mt-4 pt-2 text-white">
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Verifide
                                                                    work and
                                                                    reviews</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Project
                                                                    tracking
                                                                </p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-light w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div> -->
                                            <!-- end col -->

                                            <!-- <div class="col-lg-3">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Unlimited</h5>
                                                            <h1 class="mt-3">$199 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Verifide
                                                                    work and
                                                                    reviews</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Project
                                                                    tracking
                                                                </p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                              
                                            </div> -->
                                            <!-- end col -->
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- end row -->



        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->



<?php $this->endSection(); ?>


<?php $this->section('scripts'); ?>

<?php  if (session()->has('success')): ?>
<script>

                            
alertify.success('Subscription succesfull');

</script>
 

<?php endif; ?>
<?php $this->endSection(); ?>