<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                            <div class="mb-4">
                                                <img src="<?= base_url('/public/assets/images/logo-sm.png'); ?>" alt="" height="60"><span class="logo-txt">Gender APi</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="mb-4">
                                                <h4 class="float-end font-size-16">Invoice #<?= $invoice['trnx_id']; ?></h4>
                                            </div>
                                        </div>
                                    </div>


                                    <p class="mb-1">1874 County Line Road City, FL 33566</p>
                                    <p class="mb-1"><i class="mdi mdi-email align-middle mr-1"></i>info@<?= base_url(); ?></p>
                                    <p><i class="mdi mdi-phone align-middle mr-1"></i> 012-345-6789</p>
                                </div>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h5 class="font-size-15 mb-3">Billed To:</h5>
                                            <h5 class="font-size-14 mb-2"><?= $user['user_name']; ?></h5>
                                            <p class="mb-1"><?= session()->get('user_email'); ?></p>
                                            <p class="mb-1"><?= $user['user_country'].' '.$user['user_address_line']; ?></p>
                                            <p class="mb-1"><?= $user['user_street']; ?></p>
                                            <!-- <p>337-256-9134</p> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <div>
                                                <h5 class="font-size-15">Order Date:</h5>
                                                <p><?= $invoice['transaction_date']; ?></p>
                                            </div>

                                            <div class="mt-4">
                                                <h5 class="font-size-15">Payment Method:</h5>
                                                <p class="mb-1">Razor Pay</p>
                                                <p><?= session()->get('user_email'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-2 mt-3">
                                    <h5 class="font-size-15">Order summary</h5>
                                </div>
                                <div class="p-4 border rounded">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;">No.</th>
                                                    <th>Item</th>
                                                    <th class="text-end" style="width: 120px;">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1"><?= $invoice['package_name']; ?></h5>
                                                        <p class="font-size-13 text-muted mb-0">Subscription Upgrade</p>
                                                    </td>
                                                    <td class="text-end"><?= $invoice['amount']/100; ?></td>
                                                </tr>

                                            
                                        
                                                <tr>
                                                    <th scope="row" colspan="2" class="border-0 text-end">
                                                        Tax</th>
                                                    <td class="border-0 text-end">$0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2" class="border-0 text-end">Total</th>
                                                    <td class="border-0 text-end">
                                                        <h4 class="m-0"><?= $invoice['amount']/100; ?></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-print-none mt-3">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i>print</a>
                                        <!-- <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a> -->
                                    </div>
                                  
                                    <div class="float-sart">
                                    <a href="<?= $_SERVER['HTTP_REFERER']; ?>" class="btn btn-primary w-md waves-effect waves-light">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


<?php $this->endSection(); ?>
