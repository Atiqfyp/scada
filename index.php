<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>SCADA System with Labview</title>
    <script src="js/jquery.js"></script>

 </head>

<style type="text/css">
  .dot {
  height: 30px;
  width: 30px;
  background-color: grey;
  border-radius: 50%;
  display: inline-block;
  font-family:  Arial, Helvetica, sans-serif;
  font-weight: bold;

}
</style>


<body>
<h1 align="center" 
    style="color: rgb(0, 132, 255);
    font-family:  Helvetica, sans-serif;" 
    >Scada System By Using Labview</h1>
<table  border="1px" width="700px" align="center"
        style="background-color: rgb(100,100,100,0.2);" 
>
<tr>
  <th     style="font-family:  Arial, Helvetica, sans-serif;
                font-style: bold;
                font-size: 20px;"
 >Bottle Filling Unit</th>
  <th  style="font-family:  Arial, Helvetica, sans-serif;
                font-style: bold;
                font-size: 20px;" >Boiler Unit</th>
</tr>
<tr>
  
  <th> <h5 align="center" id="bottles"></h5>


    <div style=" position: relative;
  text-align: center;
  color: orange;">

<img  src="fig/Filled_Com.png" alt="Filled Bottles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="Bfilled" style="
position: absolute;
top: 75%;
left: 24%;
 transform: translate(-50%, -50%);" ></div>

<img  src="fig/Empty.png" alt="Empty Bottles">
<div id="Bempty" style="
position: absolute;
top: 75%;
left: 78%;
 transform: translate(-50%, -50%);" ></div>

</div>


  </th>
  <th><?php include 'Gauges/Boiler_Pressure.php';?><?php include 'Gauges/Boiler_Temperature.php';?></th>
</tr>

<tr>
  <th></th>

</tr>

<tr >
  <th colspan="2"  style="font-family:  Arial, Helvetica, sans-serif;
                font-weight: bold;
                font-size: 20px;" >Home Automation Unit</th>

</tr>

<tr>
  <th><table align="left" width="90%" style="font-family:  Arial, Helvetica, sans-serif;
                                                                  font-weight: bold;font-size: 16px"  >
    <tr>
      <th><span class="dot" id="ir_sensor" style=" background-color: red;"></span></th>
      <th><span class="dot" id="buzzer" style=" background-color: blue;"></span></th>
    </tr>
    <tr><th>Motion<br>Detected</th><th>Buzzer</th></tr><tr></tr><br><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
      <th><span class="dot" id="photo_sensor" style=" background-color: orange;"></span></th>
      <th><span class="dot" id="light" style=" background-color: yellow;"></span></th>
    </tr>
    <tr><th>Low Light<br>Detected</th><th>Light<br>Bulb</th></tr>
  </table>

     </th>

  <th><table align="center" width="100%" style="font-family:  Arial, Helvetica, sans-serif;
                font-weight: bold;font-size: 16px">
    <tr><?php include 'Gauges/Home_Temperature.php';?><?php include 'Gauges/Home_Moisture.php';?></tr>

<tr>

      <th align="center"style="padding-left: 40px;"><span class="dot" id="fan" ></span></th>
      <th ><span class="dot" id="water_pump" ></span></th>
    </tr>
    <tr><th align="center" style="padding-left: 40px;">Fan</th><th>Water Pump</th></tr>

  </table>
    
    </th>


</tr>


</table> 
<footer align="center">
<h3 align="center" 
    style="color: rgb(0, 132, 255);
    font-family:  Helvetica, sans-serif;"

    >Group Members</h3>
<h4 align="center" style="font-family:  Arial, Helvetica, sans-serif;"
                  >M.Atiq ur Rehman &nbsp;&nbsp; &nbsp; 2016-EE-702 <br>
                  Wajeeha Younus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-EE-708<br>
                   Faizan Nasir  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 2016-EE-713 </h4>
<h3 align="center" 
    style="color: rgb(0, 132, 255);
    font-family:  Helvetica, sans-serif;"

    >Project Supervisor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engr Kashif Iqbal</h3>

<h2 align="center" style="font-family:  Arial, Helvetica, sans-serif;
             color: black; "
              >MNS University Of Engineering and Technology, Multan</h2>
</footer>




<div id='content'> </div></div>
</body>
<?//php include 'Boiler_Temperature.php';?>
<script type="text/javascript">
  
  $(document).ready(function(){4
    setInterval(function(){
        $('#content').load('read.php');

        //$("#bottles").text("Filled Bottles = "+Filled_Bottles);
        $("#Bfilled").html("<div  style='color: green;font-family:  Helvetica, sans-serif; font-size: 40px;'>"+Filled_Bottles +"</div>");
        $("#Bempty").html("<div  style='color: red;font-family:  Helvetica, sans-serif; font-size: 40px;'>"+(Bottles_To_Fill-Filled_Bottles) +"</div>");


if (Fan) {
  $("#fan").css("background-color", "green");  
}
else{
  $("#fan").css("background-color", "grey");
}
 
 if (IR_Sensor) {
  $("#ir_sensor").css("background-color", "red");  
}
else{
  $("#ir_sensor").css("background-color", "grey");
}  
 if (Buzzer) {
 $("#buzzer").css("background-color", "blue"); 
}
else{
  $("#buzzer").css("background-color", "grey"); 
}    
if (Photo_Sensor) {
  $("#photo_sensor").css("background-color", "orange");
}
else{
  $("#photo_sensor").css("background-color", "grey");
}
if (Light) {
  $("#light").css("background-color", "yellow");  
}
else{
  $("#light").css("background-color", "grey"); 
}
if (Pump) {
  $("#water_pump").css("background-color", "purple");  
}
else{
  $("#water_pump").css("background-color", "grey");
}

    }, 300);
      }); 
</script>
<?php include 'SCADA_Gauges.php';?>



</html>

 