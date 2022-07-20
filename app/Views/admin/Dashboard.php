<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>

<div class="row mt-6">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Active users</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= count($users); ?>"></span>
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

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Active Plans</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= count($plans); ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <!-- <div class="text-nowrap">
                                    <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div> -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Transactions</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= count($transactions); ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <!-- <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div> -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Data Names</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= count($names); ?>"></span> 
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <!-- <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+2.95%</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div> -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row mt-3">
                   
                    <!-- end col -->
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Invested Overview</h5>
                                            <div class="ms-auto">
                                                <!-- <select class="form-select form-select-sm">
                                                    <option value="MAY" selected="">May</option>
                                                    <option value="AP">April</option>
                                                    <option value="MA">March</option>
                                                    <option value="FE">February</option>
                                                    <option value="JA">January</option>
                                                    <option value="DE">December</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm align-self-center">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="mb-1">Invested Amount</p>
                                                    <h4><?php 
                                            $count = 34;
                                            foreach($transactions as $tr){
                                                $count  += $tr['amount']/100;
                                            }
                                            echo $count;
                                            ?> INR</h4>

                                                    <p class="text-muted mb-4"> + <?php 
                                            $count = 34;
                                            foreach($transactions as $tr){
                                                $count  += $tr['amount']/100;
                                            }
                                            echo $count/100;
                                            ?> %  <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>

                                                    <div class="row g-0">
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2 text-muted text-uppercase font-size-11">Income</p>
                                                                <h5 class="fw-medium"><?php 
                                            $count = 34;
                                            foreach($transactions as $tr){
                                                $count  += $tr['amount']/99;
                                            }
                                            echo $count;
                                            ?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2 text-muted text-uppercase font-size-11">Tax</p>
                                                                <h5 class="fw-medium">0</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <a href="<?= base_url('/admin/invoices'); ?>" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <!-- card -->
                                <div class="card bg-primary text-white shadow-primary card-h-100">
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
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Bitcoin</b> News</h4>
                                                        <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                            equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                        <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
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
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>ETH</b> News</h4>
                                                        <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                            equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                        <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
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
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Litecoin</b> News</h4>
                                                        <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                            equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                        <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
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
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col -->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Distribution Map</h4>
                                <p class="card-title-desc">Busy Working on the backend of this i wil send v1.0.1</p>
                            </div>
                            <div class="card-body">
                                <div id="world-map-markers" style="height: 420px"></div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>

</div>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<!-- jquery.vectormap js-->
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>

<!-- Init js-->
<script src="<?= base_url('/public'); ?>/assets/js/pages/vector-maps.init.js"></script>



<?php $this->endSection(); ?>