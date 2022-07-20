<?php $this->extend('/user/Skeletone'); ?>
<?php $this->section('styles'); ?>
<script src="<?= base_url('/public'); ?>/assets/js/filesaver.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js" integrity="sha512-r22gChDnGvBylk90+2e/ycr3RVrDi8DIOkIGNhJlKfuyQM4tIRAI062MaV8sfjQKYVGjOBaZBOA87z+IhZE9DA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>


<div class="row card ">
    <div class="col-sm-12 col-lg-12 mb-4">
       <div class="row ">
            
            <div class="col col-lg-12  col-sm-12">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                    <div class="col-lg-4 m-4 h-100">
                        <img src="<?= base_url('/public/assets/images/excel.png'); ?>" style="max-height:180px; max-width:100%;" alt="my pic">
                        
                    </div>
                    <div class="col-lg-6 mt-4">
                           <div class="card">
                                <div class="card-body bg-grey h-100">
                                    <p>We support Excel (.xlsx) files with one sheet.</br>

                                        At least one column must contain a first name or an email address.</br>

                                        Each column must have a title.

                                        </p>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                               <a href="<?= base_url('/public/uploads/Gender-API-Sample.xlsx'); ?>" class="btn btn-info" download>Download Sample</a>
                                            </div>
                                            <div class="col-lg-6">
                                              
                                            </div>
                                        </div>
                                </div>
                           </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
    
    <?= $this->include('/user/pages/includes/Process'); ?>
</div>



<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>

<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var feed = new FileReader();
    reader.onload = function(e) {
      $('.image-upload-wrap').hide();
    $("#acc").removeAttr('style');
    //   $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };
    reader.readAsDataURL(input.files[0]);

    feed.readAsBinaryString(input.files[0]);
    feed.onload= (event) => {
        // console.log(event.target.result);
        let data = event.target.result;
        let workbook = XLSX.read(data,{type:"binary"});
        workbook.SheetNames.forEach(sheet=> {
            let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
            const array = []

            for (const [key, value] of Object.entries(rowObject[0])) {
                array.push([`${key}`, `${value}`]);
            }
            // console.log(array)
            let heads = 'Your File Contains the following headers </br>';
            array.forEach(head => {
                $("#country-head").append('<option value="'+head[0]+'">'+head[0]+"</option>")
                $("#names-head").append('<option value="'+head[0]+'">'+head[0]+"</option>")
                heads+= head[0]+",";
                // console.log(head[0])
            })
            
            $("#prv").html(heads)
            $("#wait").click(function (e) { 
                e.preventDefault();
                hds = [];
                  hds.push($("#names-head").val());
           hds.push($("#country-head").val());
         
           filename = input.files[0].name;
                process(rowObject,hds,array,filename)
                
            });
            // process(rowObject)
            // console.log();
        })
    }

  } else {
    removeUpload();
  }
}

function removeUpload() {
    $("#country-head").html('')
    $("#names-head").html('')
    $("#acc").css('display', 'none');
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
   

});




function process(datas,heads,array,filename)
{
    let names = heads[0];
    let countries = heads[1];
    let response_names = [];
    let count = 0;
    let length = datas.length;
    let tdata ='';
    // console.log("pheads :"+pheads)
    // start of boring table
    let th = '';
    array.forEach(arr => {
        th += '<th>'+arr[0]+'</th>';
    })
    th += "<th>ga_gender</th>";




   let prv = '<div class="row">'+
                    '<div class="col-12">'+
                        '<div class="card">'+
                            '<div class="card-header">'+
                                '<h4 class="card-title">Data Preview</h4>'+
                                '<p class="card-title-desc">We Are providing A sample of the Output Data Below</p>'+
                            '</div>'+
                           ' <div class="card-body">'+

                                '<div class="table-responsive">'+
                                    '<table class="table table-editable table-nowrap align-middle table-edits">'+
                                        '<thead>'+
                                            '<tr id="theads">'+
                                                th+
                                            '</tr>'+
                                        '</thead>'+
                                        '<tbody id="tdatas">'+
                                            '<tr data-id="1">'+
                                                '<td data-field="id" style="width: 80px">1</td>'+
                                                '<td data-field="name">David McHenry</td>'+
                                                '<td data-field="age">24</td>'+
                                                '<td data-field="gender">Male</td>'+
                                                '<td style="width: 100px">'+
                                                    '<a class="btn btn-outline-secondary btn-sm edit" title="Edit">'+
                                                        '<i class="fas fa-pencil-alt"></i>'+
                                                    '</a>'+
                                                '</td>'+
                                            '</tr>'+
                                        '</tbody>'+
                                    '</table>'+
                                '</div>'+

                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
        // end of boring table
    // alert("yoo")
    // console.log(data)
    $.ajax({
        type: "get",
        url: "<?= base_url('/functions/user_api_key'); ?>",
        data: false,
        dataType: false,
        success: function (response) {
            key = response
            datas.forEach(name => {
                let url = "<?= base_url('/api?key='); ?>"+key+"&name="+name[names];
                $.ajax({
                    type: "get",
                    url: url,
                    data: false,
                    dataType: false,
                    success: function (response) {
                        count+=1;
                        progress = count*100/length;
                        $("#processingprogress").css('width',progress+'%')
                        if(response != 'out of Access tokens' && response != 'sorry name not found' )
                        {
                            data = JSON.parse(response);
                            gender = data['gender'];
                            name['ga_gender'] = gender;
                            
                        }else{
                            name['ga_gender'] = "rather Not Say";
                            // console.log(response)
                        }
                        // console.log(response_names)
                        // data[data.length] = response_names;
                        // console.log(name)
                        // console.log(pheads)
                        if(progress==100)
                        {
                            $("#tracker").val('100')
                            $("#preview").html(prv);
                            $("#tdatas").html('');
                            $("#downloadbox").css('display','block');
                        //    console.log(data)
                          
                        preview(array,datas)

                        }
                       
                    }
                });
                
                    // console.log(data)
            })
        }
    });

            $("#preview-button").click(function (e) { 
            e.preventDefault();
            preview(array,datas)
            
        });
            $("#filedownload").click(function (e) { 
            e.preventDefault();
            xldownload(datas,filename)
            
        });

}





function preview(hds,data)
{

let html = '';
$("#info").html('Hurray We are Done Processing Your File')
hds[hds.length] = ['ga_gender','ga']
console.log(hds);
console.log(data);
var length;
// length cook
if(data.length>5)
{
    length = 5;
}else{
    length = data.length;
}

for(var i=0;i<=length-1; i+=1)
{
    html += '<tr>';
hds.forEach(hd=>{

        html += '<td data-field="name">'+data[i][hd[0]]+'</td>';
    })
    html+='</tr>'
}


    // html+= '<tr>'+data[0][hd[0]]+'</tr>';
$("#tdatas").html(html);
console.log(html)
}


const EXCEL_TYPE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=UTF-8';
const EXCEL_EXTENSION = '.xlsx';

function xldownload(data,filename)
{
    const worksheet = XLSX.utils.json_to_sheet(data);
    const workbook = {
        Sheets: {
            'data': worksheet
        },SheetNames : ['data']
    };
    const excelBuffer = XLSX.write(workbook, {bookType: 'xlsx',type:'array'});
    console.log(excelBuffer);
    
    saveAsExcel(excelBuffer,filename.replace(/\.[^/.]+$/, ""));
}

function saveAsExcel(buffer,filename)
{
    const data = new Blob([buffer], {type: EXCEL_TYPE});
    saveAs(data,filename+'_export_'+new Date().getTime()+EXCEL_EXTENSION)
}
</script>
<!-- twitter-bootstrap-wizard js -->
<script src="<?= base_url('/public'); ?>/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?= base_url('/public'); ?>/assets/libs/twitter-bootstrap-wizard/prettify.js"></script>
<!-- table editable -->
<script src="<?=base_url('/public') ?>/assets/libs/table-edits/build/table-edits.min.js"></script>
<script src="<?=base_url('/public') ?>/assets/js/pages/table-editable.int.js"></script>


<!-- form wizard init -->
<script src="<?= base_url('/public'); ?>/assets/js/pages/form-wizard.init.js"></script>

<?php $this->endSection(); ?>



<!-- asset -->

                