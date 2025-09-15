<?php
include('header.php');



if (count($_FILES) > 0) {
    $signimage = addslashes(file_get_contents($_FILES['sign']['tmp_name']));
    $signimagetype = getimageSize($_FILES['sign']['tmp_name']);
    $stampimage = addslashes(file_get_contents($_FILES['stamp']['tmp_name']));
    $stampimagetype = getimageSize($_FILES['stamp']['tmp_name']);
    $topleftimage = addslashes(file_get_contents($_FILES['statelogo']['tmp_name']));
    $topleftimagetype = getimageSize($_FILES['statelogo']['tmp_name']);
    $toprightimage = addslashes(file_get_contents($_FILES['formlogo']['tmp_name']));
    $toprightimagetype = getimageSize($_FILES['formlogo']['tmp_name']);

    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $date = date('d-m-Y H:i:s');
    $state = mysqli_real_escape_string($conn,$_POST['state']) ;
    $hospital = mysqli_real_escape_string($conn,$_POST['hospital']) ;
    $govten = mysqli_real_escape_string($conn,$_POST['govten']) ;
    $govtlocal = mysqli_real_escape_string($conn,$_POST['govtlocal']) ;
    $topleftlocal = mysqli_real_escape_string($conn,$_POST['topledtlocal']) ;
    $toprightlocal = mysqli_real_escape_string($conn,$_POST['topformlocal']) ;
    $dept = mysqli_real_escape_string($conn,$_POST['dept']) ;
    $deptlocal = mysqli_real_escape_string($conn,$_POST['deptlocal']) ;
    $hospitalname = mysqli_real_escape_string($conn,$_POST['hospitalname']) ;
    $hospitalnamelocal = mysqli_real_escape_string($conn,$_POST['hospitalnamelocal']) ;
    $birthlanglocal = mysqli_real_escape_string($conn,$_POST['birthlanglocal']) ;
    $lineonelocal = mysqli_real_escape_string($conn,$_POST['lineonelocal']) ;
    $lineone = mysqli_real_escape_string($conn,$_POST['lineone']) ;
    $linetwolocal = mysqli_real_escape_string($conn,$_POST['linetwolocal']) ;
    $linetwo = mysqli_real_escape_string($conn,$_POST['linetwo']) ;
    $namelocal = mysqli_real_escape_string($conn,$_POST['namelocal']) ;
    $genderlocal = mysqli_real_escape_string($conn,$_POST['genderlocal']) ;
    $doblocal = mysqli_real_escape_string($conn,$_POST['doblocal']) ;
    $poblocal = mysqli_real_escape_string($conn,$_POST['poblocal']) ;
    $mnamelocal = mysqli_real_escape_string($conn,$_POST['mnamelocal']) ;
    $fnamelocal = mysqli_real_escape_string($conn,$_POST['fnamelocal']) ;
    $birthaddresslocal = mysqli_real_escape_string($conn,$_POST['birthaddresslocal']) ;
    $permanentaddresslocal = mysqli_real_escape_string($conn,$_POST['permanentaddresslocal']) ;
    $regnolocal = mysqli_real_escape_string($conn,$_POST['regnolocal']) ;
    $regdatelocal = mysqli_real_escape_string($conn,$_POST['regdatelocal']) ;
    $remarkslocal = mysqli_real_escape_string($conn,$_POST['remarkslocal']) ;
    $doilocal = mysqli_real_escape_string($conn,$_POST['doilocal']) ;
    $ialocal = mysqli_real_escape_string($conn,$_POST['ialocal']) ;
    $registrarlocal = mysqli_real_escape_string($conn,$_POST['registrarlocal']) ;
    $registrar = mysqli_real_escape_string($conn,$_POST['registrar']) ;
    $reghospitallocal = mysqli_real_escape_string($conn,$_POST['reghospitallocal']) ;
    $reghospital = mysqli_real_escape_string($conn,$_POST['reghospital']) ;
    $aadharlocal = mysqli_real_escape_string($conn,$_POST['aadharlocal']) ;
    $lastlinelocal = mysqli_real_escape_string($conn,$_POST['lastlinelocal']) ;
    $userphone = $udata['phone'];
    $sql = "INSERT INTO `portal`(`state`, `hospital`, `govten`, `govtlocal`, `dept`, `deptlocal`, `hospitalname`, `hospitalnamelocal`, `birthlanglocal`, `line1local`, `line1`, `line2local`, `line2`, `namelocal`, `genderlocal`, `doblocal`, `poblocal`, `mnamelocal`, `fnamelocal`, `birthaddresslocal`, `permanentaddresslocal`, `regnolocal`, `regdatelocal`, `remarkslocal`, `doilocal`, `ialocal`, `registrarlocal`, `registrar`, `reghospitallocal`, `reghospital`, `lastlinelocal`, `aadharlocal`, `topleftlocal`, `toprightlocal`, `signimage`, `stampimage`, `topleftimage`, `toprightimage`, `signimagetype`, `stampimagetype`, `topleftimagetype`, `toprightimagetype`, `username`) VALUES ('$state','$hospital','$govten',N'" . $govtlocal . "','$dept',N'" . $deptlocal . "','$hospitalname',N'" . $hospitalnamelocal . "',N'" . $birthlanglocal . "',N'" . $lineonelocal . "',N'" . $lineone . "',N'" . $linetwolocal . "','$linetwo',N'" . $namelocal . "',N'" . $genderlocal . "',N'" . $doblocal . "',N'" . $poblocal . "',N'" . $mnamelocal . "',N'" . $fnamelocal . "',N'" . $birthaddresslocal . "',N'" . $permanentaddresslocal . "',N'" . $regnolocal . "',N'" . $regdatelocal . "',N'" . $remarkslocal . "',N'" . $doilocal . "',N'" . $ialocal . "',N'" . $registrarlocal . "',N'" . $registrar . "',N'" . $reghospitallocal . "',N'" . $reghospital . "',N'" . $lastlinelocal . "',N'" . $aadharlocal . "',N'" . $topleftlocal . "',N'" . $toprightlocal . "','$signimage','$stampimage','$topleftimage','$toprightimage','{$signimagetype['mime']}','{$stampimagetype['mime']}','{$topleftimagetype['mime']}','{$toprightimagetype['mime']}', '$userphone')";
  
    
        $querysql = mysqli_query($conn, $sql);
        
        if ($querysql) {
            ?>
            <script>
                $(function(){
                    Swal.fire(
                        'Success',
                        'Hospital Added Successfully',
                        'success'
                    )

                });
            </script>
            <?php
        } else {
            echo  $conn->error;
            ?>
            <script>
                $(function(){
                    Swal.fire(
                        'Opps',
                        'Internal Server Error Try AGain',
                        'error'
                    )

                });
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
                    <h1 class="m-0">Add Birth Hospital</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="birth_hospital_list.php" class="btn btn-primary btn-sm">Birth Hospital List</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
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
                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="aJ3saaa9dqVqVIcyVh3fTV2Kn6NB8M1sXOcpjcAS">
                            <div class="card-body row">
                                <input type="hidden" name="cert_var" value="ahkweb">

                                <div class="col-sm-6">

                                    <label>State </label>

                                    <div class="form-group">



                                        <select id="state" class="form-control" style="text-transform:uppercase" name="state" required>
                                            <option>Select State</option>
                                            <option value="Andhra Pradesh"> Andhra Pradesh </option>
                                            <option value="Arunachal Pradesh"> Arunachal Pradesh </option>
                                            <option value="Assam"> Assam </option>
                                            <option value="Bihar"> Bihar </option>
                                            <option value="Chandigarh"> Chandigarh </option>
                                            <option value="Chhattisgarh"> Chhattisgarh </option>
                                            <option value="Delhi"> Delhi </option>
                                            <option value="Gujarat"> Gujarat </option>
                                            <option value="Haryana"> Haryana </option>
                                            <option value="Himachal Pradesh"> Himachal Pradesh </option>
                                            <option value="Jammu and Kashmir"> Jammu and Kashmir </option>
                                            <option value="Jharkhand"> Jharkhand </option>
                                            <option value="Karnataka"> Karnataka </option>
                                            <option value="Kerala"> Kerala </option>
                                            <option value="Madhya Pradesh"> Madhya Pradesh </option>
                                            <option value="Maharashtra"> Maharashtra </option>
                                            <option value="Manipur"> Manipur </option>
                                            <option value="Meghalaya"> Meghalaya </option>
                                            <option value="Odisha"> Odisha </option>
                                            <option value="Puducherry"> Puducherry </option>
                                            <option value="Punjab"> Punjab </option>
                                            <option value="Rajasthan"> Rajasthan </option>
                                            <option value="Tamil Nadu"> Tamil Nadu </option>
                                            <option value="Telangana"> Telangana </option>
                                            <option value="Tripura"> Tripura </option>
                                            <option value="Uttar Pradesh"> Uttar Pradesh </option>
                                            <option value="Uttarakhand"> Uttarakhand </option>
                                            <option value="West Bengal "> West Bengal </option>
                                        </select>

                                    </div>

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Hospital</label>
                                    <div class="form-group">
                                        <input class="form-control " value="" autocomplete="off" name="hospital" type="text" placeholder="Hospital Name / City Name" required>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Government Name</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="govten" Value="GOVERNMENT OF UTTAR PRADESH" type="text" placeholder="Govt. Name , ex -  Govt. Of Bihar" required >
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>सरकार का नाम </label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="govtlocal" Value="उत्तर प्रदेश सरकार" type="text" placeholder="सरकार का नाम , ex -  बिहार सरकार" required>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Top Left No. in Local Language </label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="topledtlocal" Value="सं. 1" type="text" placeholder=" example - सं. 1">

                                    </div>


                                </div>

                                <div class="form-group col-md-6">
                                    <label>Top Right No. in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="topformlocal" Value="प्रपत्र-5" type="text" placeholder="example - प्रपत्र-5">

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Department Name</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="dept" Value="DEPARTMENT OF MEDICAL AND HEALTH" type="text" placeholder="Dept. Name , ex - DEPARTMENT OF PLANNING AND DEVELOPMENT	"required >

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>विभाग का नाम </label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="deptlocal" Value="चिकित्सा एवं स्वास्थ्य विभाग
" type="text" placeholder="विभाग का नाम , ex - योजना और विकास विभाग"required>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Hospital Name</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="hospitalname" Value="" type="text" placeholder="Dept. Name , ex - GURU GOVIND SINGH PATNA HOSPITAL PATNA CITY" required >

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>अस्पताल का नाम </label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="hospitalnamelocal" Value="" type="text" placeholder="अस्पताल का नाम , ex -गुरु गोविंद सिंह पटना अस्पताल पटना"required>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label> Birth Certificate in Local Language - जन्म प्रमाण पत्र - स्थानीय भाषा मे </label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="birthlanglocal" Value="" type="text" placeholder="उदाहरद - जन्म प्रमाण पत्र">

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>लाइन नंबर 1</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="lineonelocal" Value="(जन्म मृत्यु रजिस्ट्रीकरण अधिनियम, 1969 की धारा 12 / 17 तथा उत्तर प्रदेश जन्म मृत्यु रजिस्ट्रीकरण नियम, 2002 के नियम 8/13 के अंतर्गत जारी किया गया )
" type="text" placeholder="(जन्म मृत्यु रजिस्ट्रीकरण अधिनियम, 1969 की धारा 12 / 17 तथा बिहार जन्म मृत्यु रजिस्ट्रीकरण नियम, 1999 के नियम 8/13 के अंतर्गत जारी किया गया )"required>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Line no. 1 </label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="lineone" Value="(ISSUED UNDER SECTION 12/17 OF THE REGISTRATION OF BIRTHS & DEATHS ACT, 1969 AND RULE 8/13 OF THE UTTAR PRADESH REGISTRATION OF BIRTHS & DEATHS RULES 2002.)" type="text" placeholder="(ISSUED UNDER SECTION 12/17 OF THE REGISTRATION OF BIRTHS & DEATHS ACT, 1969 AND RULE 8/13 OF THE BIHAR REGISTRATION OF BIRTHS & DEATHS RULES 1999.)"required>
 
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>लाइन नंबर 2</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="linetwolocal" Value="यह प्रमाणित किया जाता है निम्नलिखित सूचना जन्म के मूल अभिलेख से ली गई है जो कि नगर निगम लखनऊ तहसील लखनऊ जिला लखनऊ राज्य/संघ प्रदेश उत्तर प्रदेश,भारत के रजिस्टर में उल्लिखित है ।" type="text" placeholder="	यह प्रमाणित किया जाता है निम्नलिखित सुचना जन्म के मूल साभिलेख से ली गई है जो की गुरु गोविन्द सिंह पटना हॉस्पिटल पटना सिटी तहसील पटना सदर जिला पटना राज्य / संघ प्रदेश बिहार , भारत के रजिस्टर में उल्लिखित है ।"required>

                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                    <label>Line no. 2 </label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="linetwo" Value="THIS IS TO CERTIFY THAT THE FOLLOWING INFORMATION HAS BEEN TAKEN FROM THE ORIGINAL RECORD OF BIRTH WHICH IS THE REGISTER FOR NAGAR NIGAM LUCKNOW OF TAHSIL/BLOCK LUCKNOW OF DISTRICT LUCKNOW OF STATE/UNION TERRITORY UTTAR PRADESH, INDIA." type="text" placeholder=" THIS IS TO CERTIFY THAT THE FOLLOWING INFORMATION HAS BEEN TAKEN FROM THE ORIGINAL RECORD OF BIRTH WHICH IS THE REGISTER FOR GURU GOVIND SINGH PATNA HOSPITAL PATNA CITY OF TAHSIL/BLOCK PATNA SADAR OF DISTRICT PATNA OF STATE/UNION TERRITORY BIHAR, INDIA.	"required>

                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <label>Name in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="namelocal" Value="नाम" type="text" placeholder=" example - नाम">

                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label>Gender in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="genderlocal" Value="लिंग" type="text" placeholder="example - लिंग">

                                    </div>
                                </div>

                                </br>

                                <div class="col-sm-6">

                                    <label>Date Of Birth in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="doblocal" Value="जन्म तिथि" type="text" placeholder=" example - जन्म तिथि">

                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label>Place Of Birth in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="poblocal" Value="जन्म स्थान"type="text" placeholder="example - 	जन्म स्थान">

                                    </div>
                                </div>

                                </br>

                                <div class="col-sm-6">

                                    <label>Mother Name in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="mnamelocal" Value="माता का नाम" type="text" placeholder=" example - माता का नाम">

                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label>Father Name in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="fnamelocal" Value="पिता का नाम" type="text" placeholder="example - 	पिता का नाम">

                                    </div>
                                </div>

                                </br>


                                <div class="col-md-12">

                                    <label>ADDRESS OF PARENTS AT THE TIME OF BIRTH OF THE CHILD [ Local Language ]</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="birthaddresslocal" Value="बच्चे के जन्म के समय माता-पिता का पता" type="text" placeholder=" example -बच्चे के जन्म के समय माता-पिता का पता ">

                                    </div>

                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label>PERMANENT ADDRESS OF PARENTS</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="permanentaddresslocal" Value="माता-पिता के स्थायी पता" type="text" placeholder="example - 	माता-पिता के स्थायी पता">

                                    </div>
                                </div>

                                </br>


                                <div class="col-sm-6">

                                    <label>REGISTRATION NUMBER in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="regnolocal" Value="पंजीकरण संख्या" type="text" placeholder=" example - पंजीकरण संख्या">

                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label>DATE OF REGISTRATION in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="regdatelocal" Value="पंजीकरण तारीख" type="text" placeholder="example - पंजीकरण तारीख">

                                    </div>
                                </div>

                                </br>
                                <div class="col-sm-6">

                                    <label>Remarks in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="remarkslocal" Value="टिप्पणी" type="text" placeholder=" example - टिप्पणी">

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <label>DATE OF Issue in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="doilocal" Value="जारी करने की तिथि" type="text" placeholder="example -  जारी करने की तिथि ">

                                    </div>
                                </div>

                                </br>
                                <div class="col-sm-6">

                                    <label>ISSUING AUTHORITY in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="ialocal" Value="जारी करने वाला प्राधिकारी" type="text" placeholder=" example - जारी करने वाला प्राधिकारी">

                                    </div>

                                </div>


                                <div class="col-sm-6">
                                    <label>Registrar in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="registrarlocal" Value="" type="text" placeholder="example - उप-रजिस्ट्रार (जन्‍म एवं मृत्‍यु)">

                                    </div>
                                </div>

                                </br>
                                <div class="col-sm-6">

                                    <label>Registrar</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="registrar" Value="" type="text" placeholder=" example - SUB-REGISTRAR (BIRTH & DEATH)">

                                    </div>

                                </div>


                                <div class="col-sm-6">
                                    <label>Hospital Stamp in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="reghospitallocal" Value="" type="text" placeholder="example - गुरु गोविंद सिंह पटना अस्पताल पटना सिटी">

                                    </div>
                                </div>

                                </br>
                                <div class="col-sm-6">

                                    <label>Hospital Name as on Stamp</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="reghospital" Value="" type="text" placeholder=" example - GURU GOVIND SINGH PATNA HOSPITAL PATNA CITY">

                                    </div>

                                </div>


                                <div class="col-sm-6">
                                    <label>Aadhar Number in Local Language</label>
                                    <div class="form-group">
                                        <input class="form-control" style="text-transform:uppercase" name="aadharlocal" Value="आधार संख्या" type="text" placeholder="example - आधार संख्या">

                                    </div>
                                </div>

                                </br>
                                <div class="col-md-12">

                                    <label>Last Line in Local Language</label>

                                    <div class="form-group">

                                        <input class="form-control" style="text-transform:uppercase" name="lastlinelocal" Value="प्रत्‍येक जन्‍म एवं मृत्‍यु का पंजीकरण सुनिश्‍चित करें" type="text" placeholder="प्रत्‍येक जन्‍म एवं मृत्‍यु का पंजीकरण सुनिश्‍चित करें">

                                    </div>

                                </div>
                                <br>

                                <div class="col-sm-6">
                                    <label>State Logo </label>
                                    <div class="form-group">
                                        <input type="file" name="statelogo" class="form-control" style="text-transform:uppercase" type="file" accept="image/x-png,image/jpeg" id="stateu" />

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label>Form Logo </label>
                                    <div class="form-group">
                                        <input type="file" name="formlogo" class="form-control" style="text-transform:uppercase" id="formu" type="file" accept="image/x-png,image/jpeg" />

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Add Signature </label>
                                    <div class="form-group">
                                        <input type="file" name="sign" class="form-control" style="text-transform:uppercase" type="file" accept="image/x-png,image/jpeg" id="signu" />

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label> Add Stamp </label>
                                    <div class="form-group">
                                        <input type="file" name="stamp" class="form-control" style="text-transform:uppercase" id="stampu" type="file" name="myImage" accept="image/x-png,image/jpeg" />

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                       
                                            <button type="submit" name="savedata" class="btn btn-primary">Submit</button>
                                                
                                           
                                           

                                            

                                    </div>
                                </div>




                            </div>
                            <!-- /.card-body -->

                           
                        </form>
                    </div>




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


</body>

</html>