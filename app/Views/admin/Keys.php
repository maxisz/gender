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
                                            <th>key</th>
                                            <th>key user</th>
                                            <th>key created</th>
                                            <th>key label</th>
                                            <!-- <th>Action</th> -->
                                            
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php if(empty($keys)): ?>
                                            
                                            <p class="text text-muted text-center font-size-16">No transactions found</p>

                                        <?php endif; ?>
                                        <?php foreach($keys as $key): ?>
                                        <tr>
                                            <td><?= $key->key_key ?></td>
                                            <td><?= $key->user_name ?></td>
                                            <td><?= $key->key_created_at ?></td>
                                            <td><?= $key->key_label ?></td>
                                           
                                            
                                            <!-- <td><a href="#">delete Key</a></td> -->
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
