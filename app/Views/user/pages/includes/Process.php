 <!-- end row -->
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
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
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
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Upload Wizard</h4>
                            </div>
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="File upload">
                                                    <i class="mdi mdi-file-table"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                                    <i class="bx bx-book-bookmark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview & Download">
                                                    <i class="mdi mdi-file-send"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                    </div>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="text-center mb-4">
                                                <h5>File Selection</h5>
                                                <p class="card-title-desc">Kindly Upload an XLSX file below</p>
                                            </div>
                                            <form>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                      
                                                        <div class="card-body">

                                                            <div>
                                                            <div class="file-upload">
                                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>

                                                                <div class="image-upload-wrap">
                                                                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept=".xlsx,.xls" />
                                                                    <div class="drag-text">
                                                                    <h3>Drag and drop a file or select add File</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="file-upload-content">
                                                                    <!-- <iframe class="file-upload-image" src="#" ></iframe> -->
</br>                                                                   <div id="prv"></div>
                                                                    <div class="image-title-wrap">
                                                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="text-center mt-4">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">Send
                                                                    Files</button>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                            
                                            </form>
                                            <div id="acc" style="display:none">

                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary procc" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Company Document</h5>
                                                    <p class="card-title-desc">Fill all information below</p>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="progresspill-pancard-input" class="form-label">Select Names Column</label>
                                                                <!-- <input type="text" class="form-control" id="progresspill-pancard-input"> -->
                                                                <select name="names" class="form-select" id="names-head">
                                                                    <!-- <option value="0">name</option>
                                                                    <option value="0">name</option>
                                                                    <option value="0">name</option> -->
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="progresspill-vatno-input" class="form-label">Country</label>
                                                                <select name="names" class="form-select" id="country-head">
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary procc" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="next" id="wait">
                                                    <button class="btn btn-primary">process</button>
                                                    </li>
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary procc"  style="display:none;" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-bank-detail">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Form Processing</h5>
                                                    <p class="card-title-desc" id="info">Wait As we Process your File</p>
                                                    <input type="number" id="tracker" value="0" class="hidden" hidden>
                                                </div>
                                                <form>
                                                    <div class="row" id="preview">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Heads Up</h4>
                                                                <p class="card-title-desc">Kindly Stay patiently as we process your files it can take a bit Longer if </br>
                                                                the file has thousands of records or is bulk. We are Trying Our Best To Be as Quick As possible</p>
                                                            </div><!-- end card header -->

                                                            <div class="card-body">
                                                                <div class="progress">
                                                                    <div class="progress-bars bg-warning progress-bar-animated" role="progressbar" id="processingprogress" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div>
                                                   
                                                </form>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <!-- <li class="float-center"><a href="javascript: void(0);" id="preview-button" class="btn btn-primary" >Preview</a></li> -->
                                                    <div id="downloadbox" style="display:none;">

                                                        <li class="float-end"><a href="javascript: void(0);" id="filedownload" class="btn btn-primary">Download FIle</a></li>
                                                    </div> 
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->