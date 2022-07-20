<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Manage Notification Settings</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formrow-customCheck" >
                        <label class="form-check-label" for="formrow-customCheck">Subscribe to our email newsletter with useful tips for developers, news and valuable resources. You may unsubscribe from these communications at any time.</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formrow-customCheck" checked>
                        <label class="form-check-label" for="formrow-customCheck" checked>Receive a notification when no more credits are available</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formrow-customCheck" checked>
                        <label class="form-check-label" for="formrow-customCheck" >Receive a monthly overview with your usage stats</label>
                    </div>
                </div>
                <div class="mt-4">

                    <button class="btn btn-info">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>