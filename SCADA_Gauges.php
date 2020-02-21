<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <style>body {
        padding: 0;
        margin: 0;
        background: none;
        
    }</style>

</head>
<body onload='animateGauges()'>



<script  src="js/gauge.min.js"></script>

<script>

var timers = [];
function animateGauges() {
    
    Boiler_P = document.gauges[0];
    Boiler_T =document.gauges[1];
    Home_T =document.gauges[2];
    Home_M=document.gauges[3];
        timers.push(setInterval(function() {

            Boiler_T.value=New_Temperature;
            Boiler_P.value = New_Pressure;
            Home_T.value = Tem_Sensor;
            Home_M.value = Moisture_Sensor;


        }, Boiler_T.animation.duration + 50));
    }



</script>

</body>
</html>

