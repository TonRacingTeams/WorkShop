<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>


<!-- <script>
		$(function(){
    //  alert('hellow');
			$("#search").click(function(){
				var Item_ID=$("#Item_ID").val();


        //  alert('hellow');
				$.post("search_frmlaw_files.php",{
					Item_ID:Item_ID
				},
				function(output){
					$("#show").html(output).slideDown();
				});
			});
		});
	</script> -->





<script>
		$(function(){
    //  alert('hellow');
			$("#search").click(function(){
				var start=$("#start").val();
				var end=$("#end").val();
        var Item_ID=$("#Item_ID").val();
        var Case_ID=$("#Case_ID").val();



				$.post("search_frmlaw_files.php",{
					start:start,
					end:end,
          Item_ID:Item_ID,
          Case_ID:Case_ID
				},
				function(output){
					$("#show").html(output).slideDown();
				});
			});
		});
	</script>




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
    <?php include('header.php')?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('navbar.php')?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ຄະດີອາຍາ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄະດີອາຍາ</li>
            
            </ol>
          </div>


          


          
          <!-- <divo class="row"> -->
            <!-- Datatables -->
            <!-- <divo class="col-lg-12"> -->

            <!-- <formo action="app/add_frmLaw_file.php" name="frmAdd" method="POST" enctype='multipart/form-data'> -->
            <!-- <divo class="card mb-0" style='border: 2px solid #057c0c; border-radius: 8px;'>
             <divo class="card-header py-0 d-flex flex-row align-items-center justify-content-between"> -->
                

              
               
                  <!-- <div class="col-lg-3"> -->
                  <!-- <lable>ລຳດັບ</lable>
                  <input type="text" class="form-control" id="item_Cnt"  placeholder="ລຳດັບ"  name="item_Cnt" required>
                  </div> -->

                  <!-- <div class="col-lg-3">
                  <lable>ຊື່(ພາສາລາວ)</lable>
                  <input type="text" class="form-control" id="Law_Name"  placeholder="ຊື່(ພາສາລາວ)"  name="Law_Name" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຊື່(ພາສາອັງກິດ)</lable>
                  <input type="text" class="form-control" id="Law_NmE"  placeholder="ຊື່(ພາສາອັງກິດ)"  name="Law_NmE" required>
                  </div> -->

                  <!-- <div class="col-lg-3">
                  <lable>ຊື່ຟາຍເອກະສານ</lable>
                  <input type="file" class="form-control" id="File_Name"  placeholder="ຊື່ຟາຍເອກະສານ"  name="File_Name" required>
                  </div> -->




                  <!-- <div class="input-group">

                  <div class="col-lg-3">
                  <lable>ເລກທີກອງປະຊຸມ</lable>
                  <input type="text" class="form-control" id="Item_ID"  placeholder="ເລກທີກອງປະຊຸມ"  name="Item_ID" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ວັນເດືອນປີ</lable>
                  <input type="text" class="form-control" id="Item_Date"  placeholder="ວັນເດືອນປີ"  name="Item_Date" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຈຳນວນຜູ້ເຂົ້າຮ່ວມ</lable>
                  <input type="text" class="form-control" id="Person_Cnt"  placeholder="ຈຳນວນຜູ້ເຂົ້າຮ່ວມ"  name="Person_Cnt" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຈຳນວນຄະດີຖະແຫຼງ</lable>
                  <input type="text" class="form-control" id="Case_Cnt"  placeholder="ຈຳນວນຄະດີຖະແຫຼງ"  name="Case_Cnt" required>
                  </div>




                  
                <div class="col-lg-3"><br>
                <button type="submit" class="btn btn-primary"  >ບັນທືກ </button>
                <a href="basic-FrmLaw_Files.php" class="btn btn-danger">ຍົກເລີກ</a>
               
                </div>
                </div>
                </form>
                </div><br>

                </div><br> -->












             <div class="card mb-0">
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
             
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຂໍ້ມູນແຕ່ວັນເດືອນປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>


                  

                  <div class="col-lg-2">
                   <lable>ລະຫັດກອງປະຊຸມສານ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ລະຫັດຄະດີ</lable>
                    <input type="text" class="form-control " id="Case_ID"   name="Case_ID" >	
                  </div>


                <div class="col-lg-2"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                <a href="app/add_Frmlaw_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                </div>
                </div>
                </div><br>

                </div>


                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 163%">
                <thead>
                <tr>
               


                <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລະຫັດກອງປະຊຸມສານ</th>
                <th>ວັນເດືອນປີເຂົ້າຮ່ວມປະຊູມ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຫາວ່າ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຈຳເລີຍ</th>
                <th>ຜົນການຕັດສິນຂອງສານ </th>
                <th>ຜູ້ຖະແຫຼງຕໍ່ສານ</th>

               
                </tr>
                </thead>
                   
                <?php
               include 'server/connect.php';
                        
             
               $sql = "SELECT * FROM KHT_CanMeetingAY_Case";


              //  $sql = "SELECT Person_Cnt, Case_Cnt, Case_ID, Problem, Request_Crim, Request_Civil, Related_Pers, Solv_Name, Pers_Name
              //  FROM KHT_CanMeetingAY
              //  FULL JOIN KHT_CanMeetingAY_Case
              //  ON KHT_CanMeetingAY.Item_ID = KHT_CanMeetingAY_Case.Item_ID;";


               $query = sqlsrv_query( $conn, $sql );

             
               while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
               {
              
                ?>

                

                <tbody id="users">
                <tr>


                <td align='center'>
           
                <a href="cv/<?PHP echo $result["Item_ID"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_file.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_files.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>



                
                
                <td><?PHP echo $result["Item_ID"]; ?></td>
                

                <?php
                $date=$result["Item_Date"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>


                <td><?PHP echo $result["Case_ID"]; ?></td>
                <td><?PHP echo $result["Problem"]; ?></td>
                <td><?PHP echo $result["Request_Crim"]; ?></td>
                <td><?PHP echo $result["Request_Civil"]; ?></td>




                <td><?PHP echo $result["Respond_Civil"]; ?></td>
                <td><?PHP echo $result["Related_Pers"]; ?></td>
                <td><?PHP echo $result["Solv_Name"]; ?></td>
                <td><?PHP echo $result["Pers_Name"]; ?></td>


                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>
              
                </div>
              <!-- ໂຄດເດີ່ມ -->

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