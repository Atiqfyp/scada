<?php 
include('connect_db.php');


$table  = mysqli_query($conn ,'SELECT * FROM opc_variables');
          while($row  = mysqli_fetch_array($table)){ 
/*
			echo $row['Auto_Mode'];?> <br> <?php
			echo $row['Bottles_To_Fill'];?> <br> <?php
			echo $row['Buzzer'];?> <br> <?php
			echo $row['Enter_Pressure'];?> <br> <?php
			echo $row['Enter_Temperature'];?> <br> <?php
			echo $row['Fan'];?> <br> <?php
			echo $row['Filled_Bottles'];?> <br> <?php
			echo $row['IR_Sensor'];?> <br> <?php
			echo $row['Light'];?> <br> <?php
			echo $row['Moisture_Sensor'];?> <br> <?php
			echo $row['New_Pressure'];?> <br> <?php
			echo $row['New_Temperature'];?> <br> <?php
			echo $row['Photo_Sensor'];?> <br> <?php
			echo $row['Pump'];?> <br> <?php
			echo $row['Reset_Bottles'];?> <br> <?php
			echo $row['Start'];?> <br> <?php
			*/
			$a1= $row['Tem_Sensor'];?> <br> <?php
			

			

             ?>

<script type="text/javascript">
	var Auto_Mode=<?php echo $row['Auto_Mode']; ?>;
	var Bottles_To_Fill=<?php echo $row['Bottles_To_Fill']; ?>;
	var Buzzer=<?php echo $row['Buzzer']; ?>;
	var Enter_Pressure=<?php echo $row['Enter_Pressure']; ?>;
	var Enter_Temperature=<?php echo $row['Enter_Temperature']; ?>;
	var Fan=<?php echo $row['Fan']; ?>;
	var Filled_Bottles=<?php echo $row['Filled_Bottles']; ?>;
	var IR_Sensor=<?php echo $row['IR_Sensor']; ?>;
	var Light=<?php echo $row['Light']; ?>;
	var Moisture_Sensor=<?php echo $row['Moisture_Sensor']; ?>;
	var New_Pressure=<?php echo $row['New_Pressure']; ?>;
	var New_Temperature=<?php echo $row['New_Temperature']; ?>;
	var Photo_Sensor=<?php echo $row['Photo_Sensor']; ?>;
	var Pump=<?php echo $row['Pump']; ?>;
	var Reset_Bottles=<?php echo $row['Reset_Bottles']; ?>;
	var Start=<?php echo $row['Start']; ?>;
	var Tem_Sensor=<?php echo $row['Tem_Sensor']; ?>;


	
</script>
         <?php } ?>