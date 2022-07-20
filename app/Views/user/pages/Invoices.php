<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="col-sm">
                                        <div class="mb-4">
                                            <button type="button" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Invoice</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-1 mb-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker-range">
                                                <span class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                end row -->

                                <div class="table-responsive">
                                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                        <thead>
                                            <tr class="bg-transparent">
                                            <?php if(empty($invoices)): ?>
                                                <th>Invoices</th>
                                            <?php else: ?>
                                                <th style="width: 30px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th style="width: 120px;">Invoice ID</th>
                                                <th>Date</th>
                                                <th>Billing Name</th>
                                                <th>Package Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <!-- <th style="width: 150px;">Download Pdf</th> -->
                                                <th style="width: 90px;">Action</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(empty($invoices)): ?>
                                        <td>

                                            
                                                    <p class="text-center">You have no Invoices</p>
                                                
                                        </td>

                                        <?php else: ?>
                                        <?php foreach($invoices as $invoice): ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>

                                                <td><a href="<?= base_url('/user/invoice'.'/'.$invoice['trnx_id']); ?>" class="text-dark fw-medium"><?= $invoice['trnx_id']; ?></a> </td>
                                                <td>
                                                <?= $invoice['transaction_date']; ?>
                                                </td>
                                                <td><?= session()->get('user_name'); ?></td>
                                                <td><?= $invoice['package_name']; ?></td>

                                                <td>
                                                <?= $invoice['amount']/100; ?>
                                                </td>
                                                <td>
                                                    <div class="badge badge-soft-success font-size-12"><?= $invoice['status']; ?></div>
                                                </td>
                                                <!-- <td>
                                                    <div>
                                                        <button type="button" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i class="bx bx-download label-icon"></i> Pdf</button>
                                                    </div>
                                                </td> -->

                                                <td>
                                                    <a href="<?= base_url('/user/invoice'.'/'.$invoice['trnx_id']); ?>">view</a>
                                                    <!-- <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="<?= base_url('/user/invoice'.'/'.$invoice['trnx_id']); ?>">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Print</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div> -->
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table responsive -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
<?php $this->endSection(); ?>
