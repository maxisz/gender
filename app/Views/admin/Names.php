<?php $this->extend('/admin/partials/Skeletone'); ?>

<?php $this->section('content'); ?>
<style>
        .file-upload {
  background-color: #ffffff;
  width: 99%;
  margin: 0 auto;
  padding: 10px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1992FF;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #1992Fd;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 60%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1992FF;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1992FF;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
   
</style>
<div class="row">
    <div class="co-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                    <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Data names</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" id="names_count" data-target="<?= count($names); ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <!-- <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div> -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                 
                    <div class="col-xl-4 col-md-6">
                            <!-- na -->
                            <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>

                            <form method="post" enctype="multipart/form-data">
                                    <!-- <input type="file" id="csv" class="form-control" accept=".csv">
                                    <button class="btn btn-primary float-end">Upload</button> -->
                           
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' id="csv" accept=".csv,.csv" />
                                <div class="drag-text">
                                <h3>Drag and drop a csv file to upload</h3>
                                </div>
                            </div>
                            </form>
                            <div class="file-upload-content">
                                <!-- <iframe class="file-upload-image" src="#" ></iframe> -->
</br>                              <div id="prv"></div>
                                <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded file</span></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- na -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                   
                                    <button class="btn-danger btn float-end">Clear Data</button>
                                </div>
                                

                            </div>
                            <div class="card" id="card" style="display:none;"> 
                                    <div class="card-body">
                                   
                                   <p class="text-muted text-center" id="progress"></p>
                                 </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
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
                            <!-- <th>Name Id</th> -->
                            <th>first name</th>
                            <th>second name</th>
                            <th>gender</th>
                            <th>Contry</th>
                            <!-- <th>Actions</th> -->

                        </tr>
                    </thead>


                    <tbody>
                        <?php if(empty($names)): ?>
                            
                            <p class="text text-muted text-center font-size-16">No records found</p>
                        
                        <?php else: ?>
                       
                        <?php for($i=0;$i<80;$i+=1): ?>
                        <tr>
                            <!-- <td></td> -->
                            <td><?= $names[$i]['first_name'] ?></td>
                            <td><?= $names[$i]['second_name'] ?></td>
                            <td><?= $names[$i]['gender'] ?></td>
                            <td><?= $names[$i]['country'] ?></td>
                            
                    
                            
                            <!-- <td><a href="#">View Invoice</a></td> -->
                        </tr>
                        <?php endfor; ?>
                        <?php endif; ?>
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
    $("#csv").on("change",function(e){
        e.preventDefault();
        $("#card").css("display","block");
       $("#progress").html('Data is uploading...Kindly be patient');
      alertify.success("be patient as we process")
        setTimeout(() => {
            var formData = new FormData();
        formData.append('file', $('#csv')[0].files[0])
        
        console.log(formData)
        $.ajax({
            type: "POST",
            url: "<?= base_url('/functions'); ?>/upload",
            data:  formData,
            async:false,
            enctype:"multipart/form-data",
            processData:false,
            contentType:false,
            success: function (response) {
                if(response=='success')
                {
                    alertify.success('succesfully uploaded');
                    $("#progress").html('Data Uploaded Succesfully');
                    // setTimeout(() => {
                    //     location.reload();
                    // }, 800);
                }else{
                    alertify.error(response)
                }
            },error: function(e){
                console.log(e)
            }
        });
        }, 2000);
       
    })
</script>

<?php $this->endSection();?>