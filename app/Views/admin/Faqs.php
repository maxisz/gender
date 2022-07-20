<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Frequently Asked Questions</h4>
                                <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Add Faq</button>
                                <p class="card-title-desc">Here you can ad questions and answers you need to appear on the frontend site
                                </p>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>Description</th>
                                            <th>action</th>

                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                      
                                        <?php foreach($faqs as $faq): ?>
                                        <tr>
                                            <td><?= $faq['faq_id']; ?></td>
                                            <td><?= $faq['faq_title']; ?></td>
                                            <td><?= $faq['faq_description']; ?></td>
                                                 
                                            <td><button class="btn btn-secondary btn-sm"data-bs-toggle="modal" data-bs-target=".faq-<?= $faq['faq_id']; ?>">Edit</button> / <button onclick="ddelete(<?= $faq['faq_id']; ?>)" class="btn btn-sm btn-danger">Delete</button></td>
                                        </tr>

                                        <!-- modal -->
                                            <!-- modal -->
                                             <!--  Large modal example -->
                                             <div class="modal fade faq-<?= $faq['faq_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="faq-<?= $faq['faq_id']; ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="faq-<?= $faq['faq_id'] ?>">Edit Faq</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <!-- form -->
                                                                <div class="mb-3">
                                                                    <label for="plan-name" class="form-label">title</label>
                                                                    <input class="form-control" type="text" id="<?=$faq['faq_id']; ?>title"  value="<?=$faq['faq_title']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <label  class="form-label">description</label>
                                                                    <textarea class="form-control"  id="<?=$faq['faq_id']; ?>description"  value=""><?= $faq['faq_description']; ?></textarea>
                                                                    </div>
                                                                    
                                                                    <!-- form -->
                                                            <div class="row">
                                                                <div class="col-lg-12 mt-2">
                                                                    <button onclick="saveChanges(<?=$faq['faq_id']; ?>)" class="btn btn-secondary float-end">
                                                                        Save Changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- end modal -->


                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <!-- modal -->
 <!--  Large modal example -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">New Faq</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <!-- form -->
                        <div class="mb-3">
						<label for="plan-name" class="form-label">title</label>
						<input class="form-control" type="text" id="title"  value="">
						</div>
                        <div class="mb-3">
						<label for="plan-name" class="form-label">Description</label>
						<textarea class="form-control" type="text" id="description"  value=""></textarea>
						</div>
						
                        <!-- form -->
                <div class="row">
                    <div class="col-lg-12 mt-2">
                        <button onclick="newFaq();" class="btn btn-secondary float-end">
                            Add
                        </button>
                    </div>
                </div>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    function newFaq()
    {
        title = $("#title").val();
        description = $("#description").val();
        if(title != '' && description != '')
        {
            var data = {
                'title' : title,
                'description':description
            }
            $.ajax({
                type: "post",
                url: "<?= base_url('/functions'); ?>/newfaq",
                data: data,
                dataType:false,
                success: function (response) {
                    if(response =='success')
                    {
                        alertify.success('faq added');
                        setTimeout(() => {
                            location.reload();
                        }, 800);
                    }else{
                        alertify.error(response)
                    }
                }
            });

        }else{
            alertify.error('fill all fields')
        }
    }
</script>

<script>
    function saveChanges(id)
    {
        title = $("#"+id+"title").val();
        description = $("#"+id+"description").val();
        if(title != '' && description != '')
        {
            var data = {
                'id': id,
                'title' : title,
                'description':description
            }
            $.ajax({
                type: "post",
                url: "<?= base_url('/functions'); ?>/updatefaq",
                data: data,
                dataType:false,
                success: function (response) {
                    if(response =='success')
                    {
                        alertify.success('faq updated');
                        setTimeout(() => {
                            location.reload();
                        }, 800);
                    }else{
                        alertify.error(response)
                    }
                }
            });

        }else{
            alertify.error('fill all fields')
        }
    }
</script>


<script>
    function ddelete(id)
    {
        var data = { 'id': id }
        $.ajax({
                type: "post",
                url: "<?= base_url('/functions'); ?>/deletefaq",
                data: data,
                dataType:false,
                success: function (response) {
                    if(response =='success')
                    {
                        alertify.success('faq updated');
                        setTimeout(() => {
                            location.reload();
                        }, 800);
                    }else{
                        alertify.error(response)
                    }
                }
            });
    }
</script>

<?php $this->endSection(); ?>