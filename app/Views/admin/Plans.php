<?php $this->extend('/admin/partials/Skeletone'); ?>
<?php $this->section('content'); ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Plans Management</h4>
                                <p class="card-title-desc">Here you can manage all the site plans
                                </p>
                                <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Add Plan</button>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                          <th>plan Name</th>
                                          <th>plan Price</th>
                                          <th>plan Limit</th>
                                          <th>plan period</th>
                                          <th>plan Actions</th>

                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        
                                        <?php foreach($plans as $plan): ?>
                                        <tr>
                                            <td><?= $plan['plan_name'] ?></td>
                                            <td><?= $plan['plan_price'] ?></td>
                                            <td><?= $plan['plan_limit'] ?></td>
                                            <td><?= $plan['plan_period'] ?></td>
          
                                            
                                            <td><button class="btn btn-secondary btn-sm"data-bs-toggle="modal" data-bs-target=".plan-<?= $plan['plan_id']; ?>">Edit</button> / <button onclick="ddelet(<?= $plan['plan_id']; ?>)" class="btn btn-sm btn-danger">Delete</button></td>
                                        </tr>

                                            <!-- modal -->
                                             <!--  Large modal example -->
                                            <div class="modal fade plan-<?= $plan['plan_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="plan-<?= $plan['plan_id']; ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="plan-<?= $plan['plan_id'] ?>">New Plan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <!-- form -->
                                                                <div class="mb-3">
                                                                    <label for="plan-name" class="form-label">Name</label>
                                                                    <input class="form-control" type="text" id="<?= $plan['plan_id']; ?>name"  value="<?= $plan['plan_name']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <label  class="form-label">price</label>
                                                                    <input class="form-control" type="text" id="<?= $plan['plan_id']; ?>price"  value="<?= $plan['plan_price'] ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <label  class="form-label">Period</label>
                                                                    <select  id="<?= $plan['plan_id']; ?>period"  class="form-select">
                                                                            <option value="<?= $plan['plan_period'] ?>"><?= $plan['plan_period'] ?></option>
                                                                            <option value="Lifetime">Lifetime</option>
                                                                            <option value="yearly">Yearly</option>
                                                                            <option value="monthly">monthly</option>
                                                                    </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <label  class="form-label">Limit</label>
                                                                    <input class="form-control" type="text" value="<?= $plan['plan_limit'] ?>"  id="<?= $plan['plan_id']; ?>limit">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <label  class="form-label">excel limit</label>
                                                                    <input class="form-control" type="text" id="<?= $plan['plan_id']; ?>excel_limit"  value="<?= $plan['plan_excel_limit'] ?>">
                                                                    </div>
                                                                    <!-- form -->
                                                            <div class="row">
                                                                <div class="col-lg-12 mt-2">
                                                                    <button onclick="savechanges(<?= $plan['plan_id']; ?>)" class="btn btn-secondary float-end">
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

<!-- plan add -->

<!-- modal -->
 <!--  Large modal example -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">New Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <!-- form -->
                    <div class="mb-3">
						<label for="plan-name" class="form-label">Name</label>
						<input class="form-control" type="text" id="name"  value="">
						</div>
						<div class="mb-3">
						<label  class="form-label">price</label>
						<input class="form-control" type="text" id="price"  value="">
						</div>
						<div class="mb-3">
						<label  class="form-label">Period</label>
						<select  id="period"  class="form-select">
								<option value="Lifetime">Lifetime</option>
								<option value="yearly">Yearly</option>
								<option value="monthly">monthly</option>
						</select>
						</div>
						<div class="mb-3">
						<label  class="form-label">Limit</label>
						<input class="form-control" type="text" id="limit" >
						</div>
						<div class="mb-3">
						<label  class="form-label">excel limit</label>
						<input class="form-control" type="text" id="excel_limit"  >
						</div>
                        <!-- form -->
                <div class="row">
                    <div class="col-lg-12 mt-2">
                        <button onclick="newplan();" class="btn btn-secondary float-end">
                            Save Key
                        </button>
                    </div>
                </div>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php $this->endSection(); ?>



<?php $this->section('scripts');?>

<script>
    	function newplan(){
		name = $("#name").val();
		price = $("#price").val();
		limit = $("#limit").val();
		period = $("#period").val();
		excel_limit = $("#excel_limit").val();
		if(name != '' && price!= '' && limit!= '' && excel_limit != ''){
			var formdata = {
				plan_name : name,
				plan_price: price,
				plan_limit: limit,
				plan_excel_limit: excel_limit,
				plan_period: period
			};
			$.ajax({
				type: "post",
				url: "<?= base_url('functions'); ?>/createplan",
				data: formdata,
				dataType: false,
				success: function (response) {
					if(response == 'success'){
						alertify.success("plan Created")
						setTimeout(() => {
                            location.reload();
                        }, 800);
					}else{
						alertify.error(response);
					}
				}
			});
			//
		}else{
			alertify.error('fill all fields');
		}
		
	}
</script>

<script>
    
	function savechanges(id){
		name = $("#"+id+"name").val();
		price = $("#"+id+"price").val();
		limit = $("#"+id+"limit").val();
		period = $("#"+id+"period").val();
		excel_limit = $("#"+id+"excel_limit").val();
		if(name != '' && price!= '' && limit!= '' && excel_limit != ''){
			var formdata = {
				plan_id: id,
				plan_name : name,
				plan_price: price,
				plan_limit: limit,
				plan_excel_limit: excel_limit,
				plan_period: period,
			};
			$.ajax({
				type: "post",
				url: "<?= base_url('/functions'); ?>/updateplan",
				data: formdata,
				dataType: false,
				success: function (response) {
					if(response == 'success'){
						$("#plan"+id).modal("hide")				
						alertify.success("plan updated")
						setTimeout(() => {
                            location.reload();
                        }, 800);
					}else{
						alertify.error('plan not saved')
					}
				},error: function(e){
					console.log(e)
				}
			});
			//
		}else{
			alertify.error('please fill all fields')
		}

	}
</script>

<script>
    	function ddelet(id){
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this plan!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				formdata ={
					id: id
				}
				//    ajax 
				$.ajax({
				type: "post",
				url: "<?= base_url('/functions'); ?>/deleteplan",
				data: formdata,
				dataType: false,
				success: function (response) {
					if(response == 'success'){
						alertify.success("plan deleted succesfully")
						setTimeout(() => {
                            location.reload();
                        }, 800);
					}else{
						salertify.error('plan not deleted')
					}
				}
			});
			} 
			});
	}
</script>

<?php $this->endSection(); ?>
