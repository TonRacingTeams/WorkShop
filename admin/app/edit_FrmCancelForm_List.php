<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>


<style>
thead
{
background-color:#3366ff;
color:white;
}

input[type=date] {
 box-sizing: border-box;
 border: 1px solid #ff8c1a;
 border-radius: 8px;
}

input[type=text] {
 box-sizing: border-box;
 border: 1px solid #2764f1;
 border-radius: 8px;
}
</style>

</head>
<body id="page-top">
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">

       
        <img src="../img/logo/bbbb.png" width="100%" height="200%">
          
        <br>


          
        </div>
       
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດິຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-cancel-list.php"><B>ຄະດີອາຍາຂັ້ນລົບລ້າງ</B></a>    
            <a class="collapse-item" href="basic-returnin-list.php"><B>ຂາເຂົ້າສຳນວນຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmTouIn_List.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="basic-requestin-List.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງຄຳສັ່ງຕ່າງໆ ຂອງໄອຍະການອຸທອນ</B></a>
            <a class="collapse-item" href="basic-frmrequestrtIn-List.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-frmrequesttrueIn_List.php"><B>ຂາເຂົ້າຄຳຮ້ອງຂໍຄວາມເປັນທຳ</B></a>

          </div>
        </div>
      </li>
      


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable1" aria-expanded="true"
          aria-controls="collapseTable1">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດິຂາອອກ</B></span>
        </a>
        <div id="collapseTable1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-rmcancelqut-list.php"><B>ຄະດີອາຍາຂັ້ນລົບລ້າງ</B></a>    
            <a class="collapse-item" href="basic-frmreturnqut_List.php"><B>ຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-frmtouqut-list.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable2">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາອອກ</B></span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-frmreturnqut_list_load.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງຄຳສັ່ງຕ່າງໆ ຂອງອົງການໄອຍະການປະຊາຊຊົນຂັ້ນອຸທອນ</B></a>    
            <hr>
            <a class="collapse-item" href="basic-frmrequestrtqut_List_Load.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmNoReviseOrders_List.php"><B>ຄໍາຕົກລົງບໍ່ຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmReviseOrders_List.php"><B>ຄໍາສະເໜີ້ຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmOrderSam_List.php"><B>ໃບສະເໜີທວງສໍານວນ</B></a>
            <hr>
            <a class="collapse-item" href="basic-rrmrequesttruequt-list-load.php"><B>ຄຳຮ້ອງຂໍຄວາມເປັນທຳ</B></a>  
            <a class="collapse-item" href="basic-FrmNamsong_List.php"><B>ໜັງສືນໍາສົ່ງ</B></a>
            <a class="collapse-item" href="basic-FrmSanod_List.php"><B>ຄໍາຕົກລົງລົບລ້າງ</B></a>
            <a class="collapse-item" href="basic-FrmJangtob_List.php"><B>ໜັງສືແຈ້ງຕອບ</B></a>
         
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3" aria-expanded="true"
          aria-controls="collapseTable3">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຂາເຂົ້າບົດລາຍງານ</B></span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmReportIn_List.php"><B>ບົດລາຍງານຂໍຄໍາເຫັນທາງລົດຖະການ</B></a>    
            <a class="collapse-item" href="basic-FrmNoticeIn_List.php"><B>ຂໍ້ຕົກລົງຂອງຄະນະປະຈໍາສະພາແຫຼ່ງຊາດ</B></a> 
            <a class="collapse-item" href="basic-FrmNoticeLegalIn_List.php"><B>ແຈ້ງການຂອງກໍາມາທິການກົດໝາຍ</B></a> 
         
          </div>
        </div>
      </li>




      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable4" aria-expanded="true"
          aria-controls="collapseTable4">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຂາອອກບົດລາຍງານ</B></span>
        </a>
        <div id="collapseTable4" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmReportOut_List.php"><B>ຄຳສັ່ງແນະນຳ</B></a>    
            <a class="collapse-item" href="basic-FrmNoticeOut_List.php"><B>ໜັງສືແຈ້ງຕອບ</B></a> 
            <a class="collapse-item" href="basic-FrmNoticeLegalOut_List.php"><B>ແຈ້ງການຂອງກໍາມາທິການກົດໝາຍ ແລະ ໜັງສືນໍາສົ່ງຂອງແຕ່ລະຂັ້ນ</B></a> 
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable5" aria-expanded="true"
          aria-controls="collapseTable5">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ແບບຟອມຕ່າງໆ</B></span>
        </a>
        <div id="collapseTable5" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmDecision_List.php"><B>ແບບຟອມຄຳຖະແຫຼງ</B></a>  
            <a class="collapse-item" href="basic-FrmNoAGaint_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຄັດຄ້ານ</B></a>  
            <a class="collapse-item" href="basic-FrmAGaint_List.php"><B>ແບບຟອມຄຳສະເໜີຄັດຄ້ານ</B></a>    
            <a class="collapse-item" href="basic-FrmNoRevise_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmRevise_List.php"><B>ແບບຟອມຄຳສະເໜີຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmCancelForm_List.php"><B>ແບບຟອມຄຳຕົກລົງລົບລ້າງຄຳສັ່ງຕ່າງໆຂອງໄອຍະການປະຊາຊົນຂັ້ນອຸທອນ</B></a>
            <a class="collapse-item" href="basic-FrmNoCancelForm_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ລົບລ້າງຄຳສັ່ງຕ່າງໆຂອງໄອຍະການປະຊາຊົນຂັ້ນອຸທອນ</B></a>
            <a class="collapse-item" href="basic-FrmOrder_List.php"><B>ແບບຟອມຄຳສັ່ງແນະນຳ</B></a>
            <a class="collapse-item" href="basic-FrmOrders_List.php"><B>ແບບຟອມຈົດໝາຍທາງລັດຖະການຕ່າງໆ</B></a>
            <a class="collapse-item" href="basic-FrmReQues_List.php"><B>ແບບຟອມການທວງສຳນວນຄະດີ</B></a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable6" aria-expanded="true"
          aria-controls="collapseTable6">
          <i class="fas fa-fw fa-table"></i>
          <span>ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມ</span>
        </a>
        <div id="collapseTable6" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
        
            <a class="collapse-item" href="basic-FrmMeeting_List.php">ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນລົບລ້າງ</a>
            <a class="collapse-item" href="basic-FrmMeeting_Return_List.php">ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນຮືຟືນ</a>
         
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນພື້ນຖານ</B></span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="basic-tableYear.php"><B>ຂໍ້ມູນປະຈຳເດືອນ</B></a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage1" aria-expanded="true"
          aria-controls="collapsePage1">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນປະກອບ</B></span>
        </a>
        <div id="collapsePage1" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="javascript: window.open('basic-Data_Relation.php', 'nploojsiab page',  'top=50, left=100, width =1200, height =600');"><B>ສາຍກ່ຽວພັນຂອງລະບົບຂໍ້ມູນ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files.php"><B>ຂໍ້ມູນກ່ຽວກັບກົດໝາຍ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Labieb.php"><B>ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Other.php"><B>ຂໍ້ມູນອື່ນໆ</B></a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage2" aria-expanded="true"
          aria-controls="collapsePage2">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລະບົບລາຍງານ</span>
        </a>
        <div id="collapsePage2" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmRptCrm_Yearly.php">ສະຫຼຸບສະຖິຕິປະຈຳປີ</a>
            <a class="collapse-item" href="#">ສະຫຼຸບສະຖິຕິປະຈຳສົກປີ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage3" aria-expanded="true"
          aria-controls="collapsePage3">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລາຍງານສະຖານະການຂອງຄະດີ</span>
        </a>
        <div id="collapsePage3" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຕາມໝວດ ແລະ ມາດຕາກະທຳຜິດ</a>
            <a class="collapse-item" href="#">ສັງລວມຜົນການພິພາກສາ</a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4" aria-expanded="true"
          aria-controls="collapsePage4">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ຕິດຕາມແບບຟອມຕ່າງໆ</span>
        </a>
        <div id="collapsePage4" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຈຳນວນຄະດີຖະແຫຼງຕໍ່ສານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ແບບຟອມຄຳສະເໜີຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສະເໜີຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສັ່ງແນະນຳ</a>
            <a class="collapse-item" href="#">ຈຳນວນຈົດໝາຍລັດຖະການ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4dd" aria-expanded="true"
          aria-controls="collapsePage4dd">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ລະບົບ</B></span>
        </a>
        <div id="collapsePage4dd" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmUser.php"><B>ລາຍການຜູ້ໃຊ້ໂປຣແກຣມ</B></a>
            <a class="collapse-item" href="basic-groupLaws.php"><B>ໝວດການກະທໍາຜິດ</B></a>
            <a class="collapse-item" href="basic-LawsInsert.php"><B>ຂໍ້ຂັດແຍ່ງ</B></a>
            <a class="collapse-item" href="../logout.php"><B>ອອກຈາກໂປຣແກຣມ</B></a>
          
          </div>
        </div>
      </li>


      
  
      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="sidebar-brand-text mx-0" style="color:white; font-size: 20px;"> ອົງການໄອຍະການປະຊາຊົນເຂດ</div>
        
          <ul class="navbar-nav ml-auto">
          

           
         
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../logout.php">
                
                <span class="ml-2 d-none d-lg-inline text-white small"> ອອກຈາກລະບົບ</span>
              </a>
           
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
       

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ຟອມເພີ່ມນັກໂທດທີ່ຖືກປ່ອຍຕົວກ່ອນກຳນົດໂດຍມີເງື່ອນໄຂ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">ຟອມເພີ່ມນັກໂທດທີ່ຖືກປ່ອຍຕົວກ່ອນກຳນົດໂດຍມີເງື່ອນໄຂ</li>
            </ol>
          </div>

         
          <?php
include '../server/connect.php';
$releaseID=$_GET['releaseID'];
$sql="SELECT * FROM KHT_release WHERE releaseID='$releaseID' ";
//echo "SELECT * FROM KHT_AppInAY WHERE Item_ID='$Item_ID'";
$result=sqlsrv_query($conn,$sql);
$row=sqlsrv_fetch_array($result);
?>



          <div class="row">
            <div class="col-lg-4">
              <!-- Form Basic -->
              <div class="card mb-4">
               
                 <div class="card-body">
                  <!--<form action="saved_it_users_crm.php" name="frmAdd" method="POST"> -->

                    <div class="form-group">
                      <label for="releaseID">ລະຫັດຄະດີ</label>
                      <input type="text" name="releaseID" class="form-control" readonly value=<?=$releaseID?>><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="DTakebody">ຖືກຈັບຕົວວັນເດືອນປີ</label>
                      <input type="date" name="DTakebody" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Name">ຊື່</label>
                      <input type="text" name="Name" class="form-control" value="<?php echo $row['Name']?>"><br>
                    </div>
                   

          
                    <div class="form-group">
                      <label for="LastName">ນາມສະກຸນ</label>
                      <input type="text" name="LastName" class="form-control" value="<?php echo $row['LastName']?>"><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="Birthday">ວັນເດືອນປີເກີດ</label>
                      <input type="date" name="Birthday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Sex">ເພດ</label>
                      <input type="text" name="Sex" class="form-control" value="<?php echo $row['Sex']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Nationality">ສັນຊາດ</label>
                      <input type="text" name="Nationality" class="form-control" value="<?php echo $row['Nationality']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Job">ອາຊີບ</label>
                      <input type="text" name="Job" class="form-control" value="<?php echo $row['Job']?>"><br>
                    </div>

                    <!-- <div class="form-group">
                      <label for="addhome">ບ້ານ</label>
                      <input type="text" name="addhome" class="form-control" value="<?php echo $row['addhome']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="District">ເມືອງ</label>
                      <input type="text" name="District" class="form-control" value="<?php echo $row['District']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Province">ແຂວງ</label>
                      <input type="text" name="Province" class="form-control" value="<?php echo $row['Province']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Punish">ຂໍ້ຫາການກະທຳຜິດ</label>
                      <input type="text" name="Punish" class="form-control" value="<?php echo $row['Punish']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="wrong">ສານຕັດສີນລົງໂທດ</label>
                      <input type="text" name="wrong" class="form-control" value="<?php echo $row['wrong']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Law_Total">ທາງແພ່ງ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Law_Total" class="form-control" value="<?php echo $row['Law_Total']?>"><br>
                    </div>



                    <div class="form-group">
                      <label for="Law_paid">ທາງແພ່ງ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Law_paid" class="form-control" value="<?php echo $row['Law_paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Law_Beleft">ທາງແພ່ງ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Law_Beleft" class="form-control" value="<?php echo $row['Law_Beleft']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Total">ຄ່າປັບໄໝ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Total" class="form-control" value="<?php echo $row['Total']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Paid">ຄ່າປັບໄໝ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Paid" class="form-control" value="<?php echo $row['Paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Beleft">ຄ່າປັບໄໝ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Beleft" class="form-control" value="<?php echo $row['Beleft']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Nocount">ເລກທີ</label>
                      <input type="text" name="Nocount" class="form-control" value="<?php echo $row['Nocount']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Dday">ວັນທີໝົດໂທດ</label>
                      <input type="date" name="Dday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Remark">ໝາຍເຫດ</label>
                      <input type="text" name="Remark" class="form-control" value="<?php echo $row['Remark']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Rel_penMonth">ວັນທີ່ຖືກໂອນ</label>
                      <input type="date" name="Rel_penMonth" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div> -->

                    
                 </div> 
              </div>
            </div>


            <!-- /////////////////////////////////////2/////////////////////////////////////////////////////// -->







            <div class="col-lg-4">
              <!-- Form Basic -->
              <div class="card mb-4">
               
                 <div class="card-body">
                  <!--<form action="saved_it_users_crm.php" name="frmAdd" method="POST"> -->

                    <!-- <div class="form-group">
                      <label for="releaseID">ລະຫັດຄະດີ</label>
                      <input type="text" name="releaseID" class="form-control" readonly value=<?=$releaseID?>><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="DTakebody">ຖືກຈັບຕົວວັນເດືອນປີ</label>
                      <input type="date" name="DTakebody" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Name">ຊື່</label>
                      <input type="text" name="Name" class="form-control" value="<?php echo $row['Name']?>"><br>
                    </div>
                   

          
                    <div class="form-group">
                      <label for="LastName">ນາມສະກຸນ</label>
                      <input type="text" name="LastName" class="form-control" value="<?php echo $row['LastName']?>"><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="Birthday">ວັນເດືອນປີເກີດ</label>
                      <input type="date" name="Birthday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Sex">ເພດ</label>
                      <input type="text" name="Sex" class="form-control" value="<?php echo $row['Sex']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Nationality">ສັນຊາດ</label>
                      <input type="text" name="Nationality" class="form-control" value="<?php echo $row['Nationality']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Job">ອາຊີບ</label>
                      <input type="text" name="Job" class="form-control" value="<?php echo $row['Job']?>"><br>
                    </div> -->

                    <div class="form-group">
                      <label for="addhome">ບ້ານ</label>
                      <input type="text" name="addhome" class="form-control" value="<?php echo $row['addhome']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="District">ເມືອງ</label>
                      <input type="text" name="District" class="form-control" value="<?php echo $row['District']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Province">ແຂວງ</label>
                      <input type="text" name="Province" class="form-control" value="<?php echo $row['Province']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Punish">ຂໍ້ຫາການກະທຳຜິດ</label>
                      <input type="text" name="Punish" class="form-control" value="<?php echo $row['Punish']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="wrong">ສານຕັດສີນລົງໂທດ</label>
                      <input type="text" name="wrong" class="form-control" value="<?php echo $row['wrong']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Law_Total">ທາງແພ່ງ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Law_Total" class="form-control" value="<?php echo $row['Law_Total']?>"><br>
                    </div>



                    <div class="form-group">
                      <label for="Law_paid">ທາງແພ່ງ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Law_paid" class="form-control" value="<?php echo $row['Law_paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Law_Beleft">ທາງແພ່ງ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Law_Beleft" class="form-control" value="<?php echo $row['Law_Beleft']?>"><br>
                    </div>


                    <!-- <div class="form-group">
                      <label for="Total">ຄ່າປັບໄໝ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Total" class="form-control" value="<?php echo $row['Total']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Paid">ຄ່າປັບໄໝ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Paid" class="form-control" value="<?php echo $row['Paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Beleft">ຄ່າປັບໄໝ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Beleft" class="form-control" value="<?php echo $row['Beleft']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Nocount">ເລກທີ</label>
                      <input type="text" name="Nocount" class="form-control" value="<?php echo $row['Nocount']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Dday">ວັນທີໝົດໂທດ</label>
                      <input type="date" name="Dday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Remark">ໝາຍເຫດ</label>
                      <input type="text" name="Remark" class="form-control" value="<?php echo $row['Remark']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Rel_penMonth">ວັນທີ່ຖືກໂອນ</label>
                      <input type="date" name="Rel_penMonth" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div> -->

                    
                 </div> 
              </div>
            </div>


            <!-- /////////////////////////////////////////////3/////////////////////////////////////////////// -->
    

            <div class="col-lg-4">
              <!-- Form Basic -->
              <div class="card mb-4">
               
                 <div class="card-body">
                  <!--<form action="saved_it_users_crm.php" name="frmAdd" method="POST"> -->

                    <!-- <div class="form-group">
                      <label for="releaseID">ລະຫັດຄະດີ</label>
                      <input type="text" name="releaseID" class="form-control" readonly value=<?=$releaseID?>><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="DTakebody">ຖືກຈັບຕົວວັນເດືອນປີ</label>
                      <input type="date" name="DTakebody" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Name">ຊື່</label>
                      <input type="text" name="Name" class="form-control" value="<?php echo $row['Name']?>"><br>
                    </div>
                   

          
                    <div class="form-group">
                      <label for="LastName">ນາມສະກຸນ</label>
                      <input type="text" name="LastName" class="form-control" value="<?php echo $row['LastName']?>"><br>
                    </div>
                   

                    <div class="form-group">
                      <label for="Birthday">ວັນເດືອນປີເກີດ</label>
                      <input type="date" name="Birthday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Sex">ເພດ</label>
                      <input type="text" name="Sex" class="form-control" value="<?php echo $row['Sex']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Nationality">ສັນຊາດ</label>
                      <input type="text" name="Nationality" class="form-control" value="<?php echo $row['Nationality']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Job">ອາຊີບ</label>
                      <input type="text" name="Job" class="form-control" value="<?php echo $row['Job']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="addhome">ບ້ານ</label>
                      <input type="text" name="addhome" class="form-control" value="<?php echo $row['addhome']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="District">ເມືອງ</label>
                      <input type="text" name="District" class="form-control" value="<?php echo $row['District']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Province">ແຂວງ</label>
                      <input type="text" name="Province" class="form-control" value="<?php echo $row['Province']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Punish">ຂໍ້ຫາການກະທຳຜິດ</label>
                      <input type="text" name="Punish" class="form-control" value="<?php echo $row['Punish']?>"><br>
                    </div> -->

                    <!-- <div class="form-group">
                      <label for="wrong">ສານຕັດສີນລົງໂທດ</label>
                      <input type="text" name="wrong" class="form-control" value="<?php echo $row['wrong']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Law_Total">ທາງແພ່ງ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Law_Total" class="form-control" value="<?php echo $row['Law_Total']?>"><br>
                    </div>



                    <div class="form-group">
                      <label for="Law_paid">ທາງແພ່ງ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Law_paid" class="form-control" value="<?php echo $row['Law_paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Law_Beleft">ທາງແພ່ງ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Law_Beleft" class="form-control" value="<?php echo $row['Law_Beleft']?>"><br>
                    </div> -->


                    <div class="form-group">
                      <label for="Total">ຄ່າປັບໄໝ(ຈຳນວນລວມ)</label>
                      <input type="text" name="Total" class="form-control" value="<?php echo $row['Total']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Paid">ຄ່າປັບໄໝ(ຈ່າຍແລ້ວ)</label>
                      <input type="text" name="Paid" class="form-control" value="<?php echo $row['Paid']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Beleft">ຄ່າປັບໄໝ(ຍັງເຫຼືອ)</label>
                      <input type="text" name="Beleft" class="form-control" value="<?php echo $row['Beleft']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Nocount">ເລກທີ</label>
                      <input type="text" name="Nocount" class="form-control" value="<?php echo $row['Nocount']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Dday">ວັນທີໝົດໂທດ</label>
                      <input type="date" name="Dday" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>


                    <div class="form-group">
                      <label for="Remark">ໝາຍເຫດ</label>
                      <input type="text" name="Remark" class="form-control" value="<?php echo $row['Remark']?>"><br>
                    </div>

                    <div class="form-group">
                      <label for="Rel_penMonth">ວັນທີ່ຖືກໂອນ</label>
                      <input type="date" name="Rel_penMonth" class="form-control" value="<?php echo $row['date']?>"><br>
                    </div>



                    <div>
                    <input type="submit" value="Update" class="btn btn-success">
        <td><a href="../basic-FrmCancelForm_List.php" class="btn btn-danger">Cancle</a></td>
  
</div>

                    
                 </div> 
              </div>
            </div>
            </div>






            <!-- <div class="col-lg-6">
              <div class="card mb-4">     
                <div class="card-body">
                 
                    <div class="form-group">
                      <label for="Usr_nm">ຊື່ຜູ້ໃຊ້</label>
                      <input type="text" class="form-control" id="Usr_nm" name="Usr_nm" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="UsrPermit">ສິດໃຊ້ໂປຣແກຣມ</label>
                      <select class="form-control" id="UsrPermit" name = "UsrPermit" >
                      <option value="Administrator">Administrator</option>
                      <option value="User">User</option>
                      <option value="Visitor">Visitor</option>
                      </select>
                    </div>
                   
                      
                    <div class="form-group">
                     <label>ການໃຫ້ສິດທິ</label>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="Write_bit" name = "Write_bit" onclick="Write_bitf()">
                        <label class="custom-control-label" for="Write_bit">ຂຽນ</label>
                      </div>
                      





                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="Edit_bit" name = "Edit_bit" onclick="Edit_bits()"   
                        >
                        <label class="custom-control-label" for="Edit_bit">ແກ້ໄຂຂໍ້ມູນ</label>
                      </div>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="Delete_bit" name = "Delete_bit" onclick="Delete()"   
                        >
                        <label class="custom-control-label" for="Delete_bit">ລົບຂໍ້ມູນ</label>
                      </div>

                    </div> 

                    <button type="submit" class="btn btn-primary">ບັນທືກ</button>
                   
                    <a href='../basic-FrmCancelForm_List.php' class="btn btn-danger">ຍົກເລີກ</a> -->
                  </form>
                </div>
              </div>
          
            </div>
          </div>


        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
   </div>
  </div>

  <!-- Scroll to top -->
 <?php
 include 'head.php';
 ?>


</body>

</html>




<script>
function Write_bitf() {
	var Write_bit = document.getElementById("Write_bit");
  if (Write_bit.checked == true){
    Write_bit.value = "1";
  } else if(Write_bit.checked == false){
    Write_bit.value = "0";
  }
}



function Edit_bits() {
	var Edit_bit = document.getElementById("Edit_bit");
  if (Edit_bit.checked == true){
    Edit_bit.value = "1";
  } else if(Edit_bit.checked == false){
    Edit_bit.value = "0";
  }
}


function Delete() {
	var Delete_bit = document.getElementById("Delete_bit");
  if (Delete_bit.checked == true){
    Delete_bit.value = "1";
  } else if(Delete_bit.checked == false) {
    Delete_bit.value = "0";
  }
}



//==================================
window.onload = function() {
	var Write_bit = document.getElementById("Write_bit");
  if (Write_bit.checked == true){
    Write_bit.value = "1";
  } else if(Write_bit.checked == false){
    Write_bit.value = "0";
  }


	var Edit_bit = document.getElementById("Edit_bit");
  if (Edit_bit.checked == true){
    Edit_bit.value = "1";
  } else if(Edit_bit.checked == false){
    Edit_bit.value = "0";
  }

	var Delete_bit = document.getElementById("Delete_bit");
  if (Delete_bit.checked == true){
    Delete_bit.value = "1";
  } else if(Delete_bit.checked == false) {
    Delete_bit.value = "0";
  }

}
</script>






