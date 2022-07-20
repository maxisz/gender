<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4> Site Optimization</h4>
            </div>
            <div class="body">
                <div class="row m-1">
                    <div class="col-6">
                        Title
                        <input type="text" id="title" class="form-control" value="<?= $setting['site_title']; ?>" >
                    </div>
                    <div class="col-6">
                        Logo
                        <input type="file"  class="form-control" id="logo" value="<?= $setting['site_logo']; ?>" disabled>
                    </div>
                </div>
                <div class="row m-1">
                    <div class="col-6">
                        Keywords
                        <input type="text" class="form-control" id="keywords"  value="<?= $setting['site_keywords']; ?>" >
                    </div>
                    <div class="col-6">
                        Description
                        <input type="text" class="form-control" id="description" value="<?= $setting['site_description']; ?>">
                    </div>
                </div>
            </div>
        </div>
        Email Setting:
    <!-- end card -->
    <div class="card">
      
        <div class="body">
                <div class="row m-1">
                    <div class="col-6">
                        SMTP Host
                        <input type="text" id="smtp_host" class="form-control" value="<?= $setting['site_smtp_host']; ?>">
                    </div>
                    <div class="col-6">
                        SMTP Port
                        <input type="text" id="smtp_port" class="form-control" value="<?= $setting['site_smtp_port']; ?>">
                    </div>
                </div>
                <div class="row m-1">
                    <div class="col-6">
                        SMTP Username
                        <input type="text" id="smtp_username" class="form-control" value="<?= $setting['site_smtp_username']; ?>">
                    </div>
                    <div class="col-6">
                        SMTP Password
                        <input type="text" id="smtp_password" class="form-control" value="<?= $setting['site_smtp_password']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    Payment Settings
    <div class="card">
      
        <div class="body">
                <div class="row m-1">
                    <div class="col-6">
                        Key_id
                        <input type="text" id="key_id" class="form-control" value="<?= $setting['site_key_id']; ?>">
                    </div>
                    <div class="col-6">
                        Key_secret
                        <input type="text" id="key_secret" class="form-control" value="<?= $setting['site_key_secret']; ?>">
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                      
                    </div>
                    <div class="col-6">
                       <button onclick="save();" class="btn btn-primary float-end">Save</button>
                    </div>
                </div>
        
            </div>
        </div>
    </div>




</div>





<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    function save()
    {
        title = $("#title").val();
        description = $("#description").val();
        keywords = $("#keywords").val();
        smtp_host = $("#smtp_host").val();
        smtp_host = $("#smtp_host").val();
        smtp_port = $("#smtp_port").val();
        smtp_username = $("#smtp_username").val();
        smtp_password = $("#smtp_password").val();
        key_id = $("#key_id").val();
        key_secret = $("#key_secret").val();

        var data =
        {
            'site_title' :title,
            'site_description' :description,
            'site_keywords' :keywords,
            'site_smtp_host' :smtp_host,
            'site_smtp_port' :smtp_port,
            'site_smtp_username' :smtp_username,
            'site_smtp_password' :smtp_password,
            'site_key_id' :key_id,
            'site_key_secret' :key_secret,
        }
        $.ajax({
            type: "post",
            url: "<?= base_url('/functions'); ?>/savesettings",
            data: data,
            dataType: false,
            success: function (response) {
                if(response == 'success'){
						alertify.success("settings saved")
						setTimeout(() => {
                            location.reload();
                        }, 800);
					}else{
						alertify.error(response);
					}
            }
        });
    }
</script>


<?php $this->endSection(); ?>
