<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Change Your Password</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        Old Password
                        <input type="password"  id="old_password" class="form-control" >
                    </div>
                    <div class="col-lg-12 mb-3">
                        New Password
                        <input type="password" id="new_password" class="form-control">
                    </div>
                    <div class="col-lg-12">
                         <div class="col-sm-12 d-flex justify-content-center align-content-center">

                            <button id="savebutton" class="btn-lg btn btn-info text-center">
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>


<?php $this->section('scripts'); ?>

<script>
    
$("#savebutton").click(function (e) { 
    e.preventDefault();
    change_password();
});
    function change_password()
    {

        var data = {
            'old_password': $("#old_password").val(),
            'new_password':  $("#new_password").val()
        }
        $.ajax({
            type: "post",
            url: "<?= base_url('/functions'); ?>/change_password",
            data: data,
            dataType: false,
            success: function (response) {
                if(response == "success")
                {
                    alertify.success('password changed succesfully');
                }else{
                    alertify.error(response)
                }
            }
        });
    }
</script>

<?php $this->endSection(); ?>