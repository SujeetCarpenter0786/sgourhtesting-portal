<?php
include('header.php');
if (isset($_POST['sam']) && $_POST['sam'] == "sameer") {

}

if (isset($_POST['sam']) && $_POST['sam'] == "sameer") {
  
    $panno = mysqli_real_escape_string($conn,$_POST['panno']);
    $aadhaar = mysqli_real_escape_string($conn,$_POST['aadhaar']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    
    


    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $dateof_issue = date('d-m-y h:i:s');
    $dateof_update = date('d-m-y h:i:s');
    $username = $_SESSION['phone'];
    // Birth fee 
    
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $dateof_issue = date('d-m-y h:i:s');
    $dateof_update = date('d-m-y h:i:s');
    $username = $_SESSION['phone'];
    $fee = $ahkweb['pdffee'];
    $debit_fee = $panwallet_amount - $fee;
    if($panwallet_amount > $fee){
        $ires = mysqli_query($conn,"INSERT INTO `panpdf`(`username`,`panno`, `aadhaar`, `dob`, `pdflink`, `status`) VALUES ('$username','$panno','$aadhaar','$dob','','finding')");
        $debit = mysqli_query($conn,"UPDATE `usertable` SET panwallet='$debit_fee' WHERE phone='$username'");
    
    if($ires){
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Success',
                    'Details Submitted Successfully!',
                    'success'
                )
            });
             window.setTimeout(function() {
  window.location.href = "panpdf.php";
  }, 1500);
        </script>
        <?php 
    }else{
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Opps',
                    'Internal Server Error!',
                    'error'
                )
            });
        </script>
        <?php
    }

    }else{
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Opps',
                    'Wallet Balance Insufficient ! Please Recharge ',
                    'error'
                )
            });
            window.setTimeout(function(){
                window.location.href='wallet.php';
            },1500);
            
        </script>
        <?php
    }


    
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pan Card PDF Find  </h1>
                </div><!-- /.col -->
             
                <div class="col-sm-6 text-right">
                    <a href="panpdflist.php" class="btn btn-primary btn-sm">Pan PDF List</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
             
                <div class="card-title">
                 <h3><strong>Enter beneficiary Details</strong> </h3>
                  <div class="card-title"><h4>Disclaimer :- CHARGE - ₹<?php echo $ahkweb['pdffee']; ?> , FAST SERVICE</h4>
                  <h4>Disclaimer :- Its Take Upto 2 hr to 24 hr Please Be paitent</h4>
                  <a class="btn btn-warning" href="check.php" target="_blank">Verify pan number</a>
         </div>
              </div>
              </div>
              </div>
              </div>
                 <marquee width="auto"   direction="left" height="auto" transition="0.5s" >
     <h4 class="mt-2 text-danger"><strong>PAN PDF FIND CHARGE  ₹<?php echo $ahkweb['pdffee']; ?>!</strong></h4>
</marquee>
        </div><!-- /.container-fluid -->
       
    </div>
    
   
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- form Start From here  -->
                   
                        <!-- general form elements -->
                        <div class="card card-default">


                            <!-- form start -->
                            <form action="" name="panfind" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="sam" value="sameer">
                                <div class="card-body row">
                                <div class="form-group col-md-11" >
                                    
               
              
                                        <label for="username">Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" disabled="disabled" id="username" name="username" placeholder="" value="<?php echo $_SESSION['phone'] ?>" required="">
                                       
                                    </div>

                                 

                                    <div class="form-group col-md-6">
                                        <label for="name">PAN Number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="panno" placeholder="PAN CARD NUMBER" value="" required="">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="dob">Date of Birth<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="01/01/1999" value="" required="">
                                        
                                    </div>

                                    <div class="form-group col-md-11">
                                        <label for="aadhaar">Aadhaar No.<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="aadhaar" name="aadhaar" maxlength="12"placeholder="123456789112"  value="" required="">
                                    </div>

                                
                                
                                    
                                <!-- /.card-body -->

                                <div class="card-footer text-center pt-3 pb-3 mt-2">
                                    <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>

                    <?php
                    

                    ?>


                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->

<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer> -->

<!-- Control Sidebar -->
<!-- <aside class="control-sidebar control-sidebar-dark"> -->
<!-- Control sidebar content goes here -->
<!-- </aside> -->
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function alertMessage(type, message) {
        if (type == 'error') {
            type = 'danger';
        }

        return "<div class='alert alert-" + type + " alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> " + message + " </div>";
    }
</script>

<script>
    //Date picker
    $('#d_date_of_birth').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY'
    });
    $('#d_register_date').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY'
    });


    function getHospitalsByStateId() {
        var state_id = $("#state_id").val();
        $.ajax({
            type: "POST",
            url: "http://crsorgiup.co.in/admin/getHospitalsByStateId",
            data: {
                state_id: state_id,
                "_token": "aJ3saaa9dqVqVIcyVh3fTV2Kn6NB8M1sXOcpjcAS"
            },
            beforeSend: function(data) {
                $(".main-loader").show();
            },
            success: function(response) {
                setTimeout(function() {
                    $(".main-loader").hide();
                    var obj;
                    try {
                        obj = JSON.parse(response);

                        if (obj.status == 'success') {

                            var records = obj.records;

                            var row_html = "<option value=''>Select Hospital</option>";

                            for (i = 0; i < records.length; i++) {
                                var row = records[i];
                                row_html += "<option value='" + row.id + "'>" + row.name + "</option>";
                            }
                            $("#hospital_id").html(row_html);

                        } else {

                            $.toast({
                                heading: '',
                                text: obj.message,
                                position: 'top-right',
                                stack: false,
                                icon: 'error',
                                loader: false
                            });

                        }
                    } catch (err) {

                        $.toast({
                            heading: '',
                            text: 'Some error occurred, please try again.',
                            position: 'top-right',
                            stack: false,
                            icon: 'error',
                            loader: false
                        });

                    }
                }, 100);
            },
            error: function() {
                $(".main-loader").hide();

                $.toast({
                    heading: '',
                    text: 'Some error occurred, please try again.',
                    position: 'top-right',
                    stack: false,
                    icon: 'error',
                    loader: false
                });

            }

        });
    }
</script>

<div style ="width:60px;height:60px;position:fixed;right:20px;bottom:20px;">
     <a href="https://wa.me/91MobileNo." target="_blank"><img src="https://crs.printportalfast.online/admin/uploads/whatsappimg.png" style="width:60px;height:60px;" /></a>
</div>

</body>

</html>