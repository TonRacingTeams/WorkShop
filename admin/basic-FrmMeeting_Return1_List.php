<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>


<script>
		$(function(){
    //  alert('hellow');
			$("#search").click(function(){
				var aa=$("#start").val();
				var bb=$("#end").val();
        var sentenceID=$("#sentenceID").val();

        //  alert('hellow');
				$.post("search_cancel1.php",{
					start:aa,
					end:bb,
          sentenceID:sentenceID
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
            <h5>ນັກໂທດທົ່ວໄປທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດທັງໝົດ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ນັກໂທດທົ່ວໄປທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດທັງໝົດ</li>
            
            </ol>
          </div>


            <?php
             
            ?>
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-5">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-5">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>


                  <div class="col-lg-2">
                   <lable>ເລກນັບ</lable>
                    <input type="text" class="form-control " id="sentenceID"   name="sentenceID" >	
                  </div>

                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>

                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນປີ)</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນນເດືອນ)</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>
                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ)</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>

               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $stmt = "SELECT * FROM KHT_Sentence WHERE 1=1";
                $query  = sqlsrv_query($conn,$stmt);
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>

                <td align='center'><?PHP echo $result["Khet_ID"]; ?></td>
                <td align='center'><?PHP echo $result["sentenceID"]; ?></td>
                <?php
                $date=$result["Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>


                <?php
                $date=$result["birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Timetake"]; ?></td>
                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Village"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Last_time"]; ?></td>
                <td align='center'><?PHP echo $result["N_year"]; ?></td>
                <td align='center'><?PHP echo $result["N_month"]; ?></td>
                
                 


                <td align='center'><?PHP echo $result["Date_for"]; ?></td>
                <td align='center'><?PHP echo $result["amnesty"]; ?></td>
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Total1"]; ?></td>
                <td align='center'><?PHP echo $result["Paid1"]; ?></td>
                <td align='center'><?PHP echo $result["slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft1"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                



                <?php
                $date=$result["Sen_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>

              </div>
			  
			  
			  
              <div class="mid" id='show_data'>
			          <div class="col-lg-12">
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລະຫັດ</th>
                <th>ໝວດທີ</th>
                <th>ມາດຕາການກະທຳຜິດ</th>
                <th>ເນື້ອໃນ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $stmt = "SELECT * FROM KHT_Sentence WHERE 1=1";
                $query  = sqlsrv_query($conn,$stmt);
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>

                <td align='center'><?PHP echo $result["Khet_ID"]; ?></td>
                <td align='center'><?PHP echo $result["sentenceID"]; ?></td>
                <?php
                $date=$result["Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>


                <?php
                $date=$result["birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Timetake"]; ?></td>
                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Village"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Last_time"]; ?></td>
                <td align='center'><?PHP echo $result["N_year"]; ?></td>
                <td align='center'><?PHP echo $result["N_month"]; ?></td>
                
                 


                <td align='center'><?PHP echo $result["Date_for"]; ?></td>
                <td align='center'><?PHP echo $result["amnesty"]; ?></td>
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Total1"]; ?></td>
                <td align='center'><?PHP echo $result["Paid1"]; ?></td>
                <td align='center'><?PHP echo $result["slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft1"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                



                <?php
                $date=$result["Sen_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>
              </div>
            </div>
			
			
			
			
			<br><br>
			
	  		 <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
             
            
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລະດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຫາວ່າ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ຜູ້ຮັບຜິດຊອບທາງແພ່ງ</th>
                <th>ຈຳເລີຍ</th>
                <th>ຄຳອະພີພາກສາຂອງສານ</th>
                <th>Cnt</th>
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $stmt = "SELECT * FROM KHT_Sentence WHERE 1=1";
                $query  = sqlsrv_query($conn,$stmt);
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>

                <td align='center'><?PHP echo $result["Khet_ID"]; ?></td>
                <td align='center'><?PHP echo $result["sentenceID"]; ?></td>
                <?php
                $date=$result["Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>


                <?php
                $date=$result["birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Timetake"]; ?></td>
                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Village"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Last_time"]; ?></td>
                <td align='center'><?PHP echo $result["N_year"]; ?></td>
                <td align='center'><?PHP echo $result["N_month"]; ?></td>
                
                 


                <td align='center'><?PHP echo $result["Date_for"]; ?></td>
                <td align='center'><?PHP echo $result["amnesty"]; ?></td>
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Total1"]; ?></td>
                <td align='center'><?PHP echo $result["Paid1"]; ?></td>
                <td align='center'><?PHP echo $result["slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft1"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                



                <?php
                $date=$result["Sen_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>

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