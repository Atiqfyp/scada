<?php 

include('connect_db.php');


if( isset($_GET['Auto_Mode']) && isset($_GET['Bottles_To_Fill'])  && isset($_GET['Buzzer']) && isset($_GET['Enter_Pressure']) && isset($_GET['Enter_Temperature']) && isset($_GET['Fan']) && isset($_GET['Filled_Bottles']) && isset($_GET['IR_Sensor']) && isset($_GET['Light']) && isset($_GET['Moisture_Sensor']) && isset($_GET['New_Pressure']) && isset($_GET['New_Temperature']) && isset($_GET['Photo_Sensor']) && isset($_GET['Pump']) && isset($_GET['Reset_Bottles']) && isset($_GET['Start']) && isset($_GET['Tem_Sensor']) )
  {
$Auto_Mode=$_GET['Auto_Mode'];
$Bottles_To_Fill=$_GET['Bottles_To_Fill'];
$Buzzer=$_GET['Buzzer'];
$Enter_Pressure=$_GET['Enter_Pressure'];
$Enter_Temperature=$_GET['Enter_Temperature'];
$Fan=$_GET['Fan'];
$Filled_Bottles=$_GET['Filled_Bottles'];
$IR_Sensor=$_GET['IR_Sensor'];
$Light=$_GET['Light'];
$Moisture_Sensor=$_GET['Moisture_Sensor'];
$New_Pressure=$_GET['New_Pressure'];
$New_Temperature=$_GET['New_Temperature'];
$Photo_Sensor=$_GET['Photo_Sensor'];
$Pump=$_GET['Pump'];
$Reset_Bottles=$_GET['Reset_Bottles'];
$Start=$_GET['Start'];
$Tem_Sensor=$_GET['Tem_Sensor'];





$sql = "UPDATE  opc_variables SET Auto_Mode='$Auto_Mode' , Bottles_To_Fill='$Bottles_To_Fill'
 , Buzzer='$Buzzer' , Enter_Pressure='$Enter_Pressure' , Enter_Temperature='$Enter_Temperature'
  , Fan='$Fan' , Filled_Bottles='$Filled_Bottles' , IR_Sensor='$IR_Sensor' , Light='$Light' , Moisture_Sensor='$Moisture_Sensor' , New_Pressure='$New_Pressure' , New_Temperature='$New_Temperature' , Photo_Sensor='$Photo_Sensor' , Pump='$Pump' , Reset_Bottles='$Reset_Bottles' , Start='$Start' , Tem_Sensor='$Tem_Sensor' ";


mysqli_query($conn,$sql);

}
else
echo "Error Occcured";
 ?>