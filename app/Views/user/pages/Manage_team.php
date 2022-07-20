<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="font-size-18">Manage your team</h4>
            </div>
            <div class="card-body">
                <p>Share your account with your team. Manage who can access your Gender-API account here.</p>
                <br>
                <p>Your team members: </p>
                <div class="d-flex">
                    <p class="me-3"><?= session()->get('user_email'); ?></p>
                    <p class="me-3">Status : Active</p>
                    <p class="me-3">Administrator</p>
                </div>
                <div class="col-sm-12 d-flex justify-content-center align-content-center">

                    <button class="btn-lg btn-info text-center">
                        Add Member
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

<script>
    alert("this feature will we available in the next update");
</script>

<?php $this->endSection(); ?>