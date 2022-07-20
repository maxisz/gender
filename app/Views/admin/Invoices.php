<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Invoice Management</h4>
                                <p class="card-title-desc">Here you can manage all the site invoices
                                </p>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>trnx id</th>
                                            <th>amount</th>
                                            <th>user</th>
                                            <th>email</th>
                                            <th>time</th>
                                            <th>status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php if(empty($transactions)): ?>
                                            
                                            <p class="text text-muted text-center font-size-16">No transactions found</p>

                                        <?php endif; ?>
                                        <?php foreach($transactions as $transaction): ?>
                                        <tr>
                                            <td><?= $transaction->trnx_id ?></td>
                                            <td><?= $transaction->amount/100 ?></td>
                                            <td><?= $transaction->user_name ?></td>
                                            <td><?= $transaction->user_email ?></td>
                                            <td><?= $transaction->transaction_date ?></td>
                                            <td><?= $transaction->status ?></td>
                                    
                                            
                                            <td><a href="<?= base_url('/admin/invoice/'.$transaction->trnx_id); ?>/">View Invoice</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

<?php $this->endSection(); ?>
