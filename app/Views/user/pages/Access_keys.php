<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="">Api Keys</h4>
                <button class="btn float-end btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Add Key</button>
                <p class="mt-3">You can generate several access keys here, e.g. if you want to use the same Gender-API.com account in several projects but with separated keys.</p>
            </div>
            <div class="card-body">
                <!-- inbuilt key -->
                <!-- foreach  -->
                <?php if(empty($keys)): ?>
                    
                    <p class="text-center text-muted font-size-16">No Access Keys Created</p>

                <?php endif; ?>

                <?php foreach($keys as $key): ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                               <p>Created At: <?php $pieces = explode(" ", $key['key_created_at']); echo $pieces[0]; ?> </p>
                            </div>
                            <div class="col-lg-6">
                               <p>  Created By: <?= session()->get('user_name'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 float-end mt-4">
                               
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p>Key Label</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?= $key['key_label']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-8">
                               <h4 class="mb-3">
                                Key:</br><span class="text-muted mb-3 lh-1 d-block text-truncate mt-2" > <?= $key['key_key']; ?></p></span>
                                </h4>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <button onclick="delete_key(<?= $key['key_id']; ?>,'<?= $key['key_key']; ?>')" class="btn btn-danger float-end">
                                    revoke Key
                                </button>
                                <button class="btn btn-secondary float-start" onclick="copykey('<?= $key['key_key']; ?>');">
                                    copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- end foreach -->

                <!-- inbuilt key -->
                
            </div>
        </div>
    </div>
</div>




<!-- modal -->
 <!--  Large modal example -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Key Label</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>This Key Label Will Be Used for ease of access  to your account , Its advisable to name each key by its project name</p>
                                                        <br>
                                                        Key Label: 
                                                    <input type="text" placeholder="gender_key_food_app" id="key_label" class="form-control">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-2">
                                                            <button id="save_key" class="btn btn-secondary float-end">
                                                                Save Key
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

    $("#save_key").click(function (e) { 
        e.preventDefault();
        let key_label = $("#key_label").val();
        if(key_label != "")
        {
           new_key(key_label);
        }else{
            alertify.error("cannot have a blank key label")
        }

    });

function new_key(a)
{
    $.ajax({
        type: "get",
        url: "<?= base_url('/functions'); ?>/new_key?key_label="+a,
        data: false,
        dataType: false,
        success: function (response) {
            if(response=="success")
            {
                alertify.success('Access Key Created');
                setTimeout(() => {
                    location.reload();
                }, 800);
            }
        }
    });
}
</script>



<script>
    function delete_key(id,key)
    {
        var data = {
            'key_id': id,
            'key_key': key
        }
        $.ajax({
            type: "post",
            url: "<?= base_url('/functions'); ?>/delete_key",
            data: data,
            dataType: false,
            success: function (response) {
                if(response=="success")
                {
                    alertify.success('access key deleted')
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


<script>
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