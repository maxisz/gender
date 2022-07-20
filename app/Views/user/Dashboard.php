<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>

<div class="row">
                    <div class="col-xl-4 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Api Calls</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" id="user_calls" data-target="450">0</span>
                                        </h4>
                                    </div>

                                    <div class="col-6">
                                        <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                
                                <!-- <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+$20.9k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div> -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Credits</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" id="user_credit" data-target="45">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-info text-info"><?= $user['user_member_name']; ?></span>
                                    <span class="ms-1 text-muted font-size-13">Membership, Exipres on: </span>
                                    <span class="badge bg-soft-danger text-danger"><?= explode(" ",$user['user_credits_expired_at'])[0]; ?></span>
                                    <!-- if the credit expired -->
                                    <?php 
                                    $expirydate = $user['user_credits_expired_at'];
                                    if(date("Y-m-d") > $expirydate): ?>
                                        <div class="mt-4 pt-2">
                                            <form action="<?=base_url('payment')?>" method="POST" >
                                                <!-- Note that the amount is in paise 1 INR = 1000 Paisa -->
                                                <input type="text" name="plan_id" value="<?= $plan['plan_id'];?>" hidden>
                                                <!--amount need to be in paisa-->
                                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                    data-key="<?=env('razorKey')?>"
                                                    data-amount= "<?= $plan['plan_price'].'00'; ?>"
                                                    data-buttontext="Renew Plan"
                                                    data-name="Gender-Api"
                                                    data-description="Renewing <?= $plan['plan_name']; ?> plan"
                                                    data-image="<?= base_url('/public/assets/images/logo-light.png'); ?>"
                                                    data-prefill.name="<?= session()->get('user_name'); ?>"
                                                    data-prefill.email="<?= session()->get('user_email'); ?>"
                                                    >
                                                </script>
                                            </form>
                                                                    <!-- <a href="" class="btn btn-outline-primary w-100">Choose Plan</a> -->
                                        </div>
                                        
                                    <?php endif; ?>

                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->
                    <div class="col-xl-4 col-md-6">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="card-title">Api Key</h5>
                                </div>

                                <div class="row ">
                                   
                                    <div class="col-sm align-self-center ">
                                        <h4 class="">
                                        <span class="" id="user_api_key"></span>
                                        </h4>
                                    </div>
                                   
                                </div>
                                <br>
                                <br>
                                
                                <div class="row">
                                    <div class="col-lg-12 align-self-end">
                                        <button class="btn btn-md btn-info float-end" id="copy" >copy</button>
                                        <a href="<?= base_url('/user/access_keys'); ?>" class="btn btn-info float-start">Revoke & Regenerate Keys</a>
                                    </div>
                                   
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                   
                    
                </div><!-- end row-->
                <div class="row">
                    <!-- <div class="col col-xl-12 w-100"> hello</div> -->
                </div>
                <div class="row">
                    

                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="row">
                             <div class="col-xl-12">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Names Accuracy By Gender</h5>
                                            <div class="ms-auto">
                                                <!-- <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">gender<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Male</a>
                                                        <a class="dropdown-item" href="#">Unspecified</a>
                                                        <a class="dropdown-item" href="#">Female</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>

                                        <!-- <div id="sales-by-locations" data-colors='["#5156be"]' style="height: 250px"></div> -->

                                        <div class="px-2 py-2">
                                            <p class="mb-1">Male <span class="float-end">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Unspecified <span class="float-end">55%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Female <span class="float-end">85%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            
                            <!-- end col -->

                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col -->
                            <div class="col-lg-6">
                                <!-- card -->
                                <div class="bg-primary text-white shadow-primary card-h-100">
                                    <!-- card body -->
                                    <div class="card-body p-0">
                                        <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="text-center p-4">
                                                        <!-- <i class="mdi mdi-bitcoin widget-box-1-icon"></i> -->
                                                        <!-- <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-currency-btc"></i>
                                                            </span>
                                                        </div> -->
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Keys </b>Info</h4>
                                                        <p class="text-white-50 font-size-13">You can Now Generate multiple api keys to use on different
                                                            projects </p>
                                                            <a href="<?= base_url('/user/access_keys'); ?>"><button type="button" class="btn btn-light btn-sm">View details<i class="mdi mdi-arrow-right ms-1"></i></button></a>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                                <div class="carousel-item">
                                                    <div class="text-center p-4">
                                                        <!-- <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-ethereum"></i>
                                                            </span>
                                                        </div> -->
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Excel </b>Info</h4>
                                                        <p class="text-white-50 font-size-13"> We know how hard it is to process excel file, you can now upload files , select the headers and aoutofill 
                                                            the forms
                                                        </p>
                                                        <a href="<?= base_url('/user/excel'); ?>"><button type="button" class="btn btn-light btn-sm">View details<i class="mdi mdi-arrow-right ms-1"></i></button></a>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                                <div class="carousel-item">
                                                    <div class="text-center p-4">
                                                        <!-- <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-litecoin"></i>
                                                            </span>
                                                        </div> -->
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Billing </b> Info</h4>
                                                        <p class="text-white-50 font-size-13">You can upgrade to a plan that suites you , better offers for personalized 
                                                            uses </p>
                                                        <a href="<?= base_url('/user/credits'); ?>"><button type="button" class="btn btn-light btn-sm">View details<i class="mdi mdi-arrow-right ms-1"></i></button></a>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                            </div>
                                            <!-- end carousel-inner -->

                                            <div class="carousel-indicators carousel-indicators-rounded">
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carousel-indicators -->
                                        </div>
                                        <!-- end carousel -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                </div> <!-- end row-->



<?php $this->endSection('content'); ?>
<?php $this->section('scripts'); ?>
<script>

$(document).ready(function () {
    get_api_key();
    get_calls();
    get_credits();
    get_names_count();
   
    
});

function get_calls()
{
    $.ajax({
        type: "get",
        url: "<?= base_url('/functions/user_calls'); ?>",
        data: false,
        dataType: false,
        success: function (response) {
            $('#user_calls').attr("data-target", response);
   
            
        }
    });
}
</script>

<script>
    function get_credits()
    {
        $.ajax({
        type: "get",
        url: "<?= base_url('/functions/user_credits'); ?>",
        data: false,
        dataType: false,
        success: function (response) {
            $('#user_credit').attr("data-target",response);
           
        }
    });
    }
</script>


<script>
    function get_names_count()
    {
        $.ajax({
        type: "get",
        url: "<?= base_url('/functions/names_count'); ?>",
        data: false,
        dataType: false,
        success: function (response) {
            $('#names_count').attr("data-target", response);
           
        }
    });
    }
</script>
<script>
    function get_api_key()
    {
        $.ajax({
        type: "get",
        url: "<?= base_url('/functions/user_api_key'); ?>",
        data: false,
        dataType: false,
        success: function (response) {
            $('#user_api_key').html(response);
        }
    });
    }
</script>


<script>
$("#copy").click(function (e) { 
    e.preventDefault();
    key = $("#user_api_key").html();
    copykey(key);
});


function copykey(key) {

  navigator.clipboard.writeText(key).then(function() {
    alertify.success('key copied');
    /* clipboard successfully set */
  }, function() {
    alertify.error("key not copied");
    /* clipboard write failed */
  });
}
</script>

<?php $this->endSection(); ?>