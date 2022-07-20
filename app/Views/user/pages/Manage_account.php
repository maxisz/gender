<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex">
                <!-- <h4 class="card-title mb-0 flex-grow-1">Plans</h4> -->

                <div class="flex-shrink-0 align-self-end">
                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded monthly active" id="monthly" data-bs-toggle="pill" href="#month" role="tab" aria-controls="month" aria-selected="true">Update Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded yearly" id="yearly" data-bs-toggle="pill" href="#year" role="tab" aria-controls="year" aria-selected="false">Account/Subscription</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link px-3 rounded monthly " id="onetime" data-bs-toggle="pill" href="#onetime" role="tab" aria-controls="time" aria-selected="false">One Time</a>
                        </li> -->
                    </ul>
                </div>
        </div>
        <!-- end cad head -->
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="month" role="tabpanel" aria-labelledby="monthly">
                    <!-- account form -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    First Name
                                    <input type="text" class="form-control" value="<?php $pieces = explode(" ", $user['user_name']); echo $pieces[0]; ?>" id="user_first_name">
                                </div>
                                <div class="col-lg-6">
                                    Last Name
                                    <input type="text" class="form-control" value="<?= $pieces[1]; ?>" id="user_last_name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    Your Company 
                                    <input type="text" class="form-control" placeholder="company" value="<?= $user['user_company']; ?>" id="user_company">
                                </div>
                               
                                <div class="col-lg-6">
                                Your Phone
                                    <input type="text" class="form-control" id="user_phone" value="<?= $user['user_phone']; ?>">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    Street
                                    <input type="text" class="form-control" placeholder="street" value="<?= $user['user_street']; ?>" id="user_street">
                                </div>
                                <div class="col-lg-6">
                                    Optional Address Line
                                    <input type="text" class="form-control" placeholder="Address" value="<?= $user['user_address_line']; ?>" id="user_address_line">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    Country
                                    <select name="country" id="user_country" class="form-select">
                                        <option value="<?= $user['user_country']; ?>"><?= $user['user_country']; ?></option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    Vat No
                                    <input type="text" class="form-control" placeholder="vat number" value="<?= $user['user_vat_number']; ?>" id="user_vat_number">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <button id="savebutton" class="btn  btn-info float-end">Save</button>
                        </div>
                    
                    </div>
                </div>
                <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="yearly">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4  class="text font-size-18">Active Subscription</h4>
                                </div>
                                <div class="card-body">
                                    <p>you are currently Subscribed to the followind package: </p>

                                    <?php if($user['user_member_name']== 'free'): ?>

                                        <div class="p-3">
                                        <p>You are currently subscribed to free membership and you cannot cancle it</p>
                                        </div>
                                        <div class="mt-2">
                                        <button class="btn btn-secondary" disabled>cancel subscription</button>
                                        </div>
                                    <?php else: ?>
                                    <div class="p-3">
                                        <p><?= $user['user_member_name']; ?></p>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn btn-secondary" onclick="cancelSubscription()">cancel subscription</button>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4  class="text font-size-18">Delete Account</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-center">Click on the following button to cancel your account. This cannot be undone. All your settings and private data will be erased. </p>
                                    <div class="col-lg-12">
                                        <div class="col-sm-12 d-flex justify-content-center align-content-center">

                                            <button onclick="deleteAccount();"class="btn-lg btn btn-danger text-center">
                                                Delete Account
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
        <!-- end col -->
</div>
    <!-- end row -->


<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $.ajax({
        type: "get",
        url: "https://trial.mobiscroll.com/content/countries.json",
        data: false,
        dataType: false,
        success: function (response) {
            response.forEach(resp => {
                html = '<option value="'+resp['text']+'">'+resp['text']+'</option>';
                $("#user_country").append(html)
                console.log(resp['text'])
            })
        }
    });
</script>



<script>
    $("#savebutton").click(function (e) { 
        e.preventDefault();
        update_info();
        
    });
    function update_info()
    {
        let name = $("#user_first_name").val()+' '+$("#user_last_name").val();
        user_company = $("#user_company").val();
        user_street =  $("#user_street").val();
        user_address_line =  $("#user_address_line").val();
        user_country = $("#user_country").val();
        user_country_code = 'procc';
        user_vat_number = $("#user_vat_number").val();
        user_phone = $("#user_phone").val();
        var data = {
            'user_name' : name,
            'user_company' : user_company,
            'user_street' : user_street,
            'user_country' : user_country,
            'user_country_code': user_country_code,
            'user_vat_number' : user_vat_number,
            'user_address_line':user_address_line,
            'user_phone': user_phone
        };
        $.ajax({
            type: "post",
            url: "<?= base_url('/functions'); ?>/save_billing_info",
            data: data,
            dataType: false,
            success: function (response) {
                if(response =="success")
                {
                    alertify.success('billing info updated');
                }else{
                    alertify.error('billing info not saved');
                }
            }
        });
    }
</script>


<script>
    function cancelSubscription()
    {
        swal({
			title: "Are you sure?",
			text: "Once canceled, you will not be able to recover this plan!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				
				$.ajax({
                    type: "get",
                    url: "<?= base_url('/functions'); ?>/cancelsubscription",
                    data:false,
                    dataType: false,
                    success: function (response) {
                        if(response == "success")
                        {
                            alertify.success("suscription canceled")
                            setTimeout(() => {
                                location.reload();
                            }, 800);
                        } else 
                        {
                            alertify.error(response)
                        }
                    }
                });
			} 
			});
    }
</script>
<script>
    function deleteAccount()
    {
        swal({
			title: "Are you sure?",
			text: "Once Deleted, you will not be able to recover this account!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				$.ajax({
                    type: "get",
                    url: "<?= base_url('/functions'); ?>/deleteaccount",
                    data:false,
                    dataType: false,
                    success: function (response) {
                        if(response == "success")
                        {
                            alertify.success("Account Deleted")
                            setTimeout(() => {
                                location.reload();
                            }, 800);
                        } else 
                        {
                            alertify.error(response)
                        }
                    }
                });
			} 
			});
    }
</script>
<?php $this->endSection(); ?>