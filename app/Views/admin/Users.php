<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Management</h4>
                                <p class="card-title-desc">Here you can manage all the site user by adding them calls and subscriptions
                                </p>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Membership</th>
                                            <th>credits</th>
                                            <th>Calls</th>
                                            <th>Country</th>
                                            <th>Api Key</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php if(empty($users)): ?>
                                            
                                            <p class="text text-muted text-center font-size-16">No users found</p>

                                        <?php endif; ?>
                                       
                                        <?php foreach($users as $user): ?>
                                        <tr>
                                            <td><?= $user->user_name ?></td>
                                            <td><?= $user->user_email ?></td>
                                            <td><?= $user->plan_name ?></td>
                                            <td><?= $user->plan_limit ?></td>
                                            <td><?= $user->user_calls ?></td>
                                            <td><?= $user->user_country ?></td>
                                            <td><?= $user->user_api_key ?></td>
                                            <td><button class="btn btn-secondary btn-sm"data-bs-toggle="modal" data-bs-target=".user-<?= $user->user_id; ?>">Edit</button> / <button onclick="delete_user(<?= $user->user_id; ?>)" class="btn btn-sm btn-danger">Delete</button></td>
                                        </tr>


                                        <!-- modal  -->
                                             <!-- modal -->
                                             <!--  Large modal example -->
                                             <div class="modal fade user-<?= $user->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="user-<?= $user->user_id; ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="user-<?= $user->user_id; ?>">Edit User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <!-- form -->
                                                                    <div class="row">

                                                                    
                                                                    <div class="col-md-6 ">
                                                                    <label for="plan-name" class="form-label">Name</label>
                                                                    <input class="form-control" type="text" id="<?= $user->user_id; ?>name"  value="<?= $user->user_name; ?>">
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                    <label  class="form-label">email</label>
                                                                    <input class="form-control" type="text" id="<?= $user->user_id; ?>email"  value="<?= $user->user_email; ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <label  class="form-label">Plan</label>
                                                                    <select  id="<?= $user->user_id ?>plan"  class="form-select">
                                                                            <option value="<?= $user->plan_id; ?>"><?= $user->plan_name ?></option>
                                                                            <?php foreach($plans as $plan): ?>
                                                                            <option value="<?= $plan['plan_id']; ?>"><?= $plan['plan_name']; ?></option>
                                                                           <?php endforeach; ?>
                                                                    </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <label  class="form-label">calls</label>
                                                                    <input class="form-control" type="text" value="<?= $user->user_calls ?>"  id="<?= $user->user_id ?>calls">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <label  class="form-label">Credits</label>
                                                                    <input class="form-control" type="text" id="<?= $user->user_id ?>credits"  value="<?= $user->user_credits ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <label  class="form-label">Verification Key</label>
                                                                    <input class="form-control" type="text"  id="<?= $user->user_id ?>verification_key"  value="<?= $user->user_verification_key ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <label  class="form-label">Api Key</label>
                                                                    <input class="form-control" type="text" id="<?= $user->user_id ?>api_key"  value="<?= $user->user_api_key ?>">
                                                                    </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <!-- form -->
                                                            <div class="row">
                                                                <div class="col-lg-12 mt-2">
                                                                    <button onclick="savechanges(<?= $user->user_id ?>)" class="btn btn-secondary float-end">
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

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    function savechanges(id)
    {
        name = $("#"+id+"name").val();
        email = $("#"+id+"email").val();
        plan = $("#"+id+"plan").val();
        calls = $("#"+id+"calls").val();
        credits = $("#"+id+"credits").val();
        verification_key = $("#"+id+"verification_key").val();
        api_key = $("#"+id+"api_key").val();
        var data = {
        'user_id':id,
        'user_name': name,
        'user_email': email,
        'user_member_type':plan,
        'user_calls': calls,
        'user_credits': credits,
        'user_verification_key': verification_key,
        'user_api_key':api_key
        }

        $.ajax({
            type: "post",
            url: "<?= base_url('/functions'); ?>/updateuser",
            data:data,
            dataType:false,
            success: function (response) {
                if(response =='success')
                {
                    alertify.success('user Updated');
                    setTimeout(() => {
                        location.reload();
                    }, 800);
                }else{
                    alertify.error(response)
                }
            },
            error: function(e){
                console.log(e)
            }
        });

        
    }
</script>

<script>
    function delete_user(id)
    {
        swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this user!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				formdata ={
					'user_id': id
				}
				//    ajax 
				$.ajax({
				type: "post",
				url: "<?= base_url('/functions'); ?>/deleteuser",
				data: formdata,
				dataType: false,
				success: function (response) {
					if(response == 'success'){
						alertify.success("user deleted succesfully")
						setTimeout(() => {
                            location.reload();
                        }, 800);
					}else{
						salertify.error('user not deleted')
					}
				}
			});
			} 
			});
    }
</script>

<?php $this->endSection(); ?>