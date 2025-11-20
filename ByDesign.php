
<html>
<head>
<title>ByDesign</title>
<link rel="icon" href="/wp-content/uploads/2023/12/favicon-32x32-1.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/radio/js/no.rightclick.select.js"></script>
<style>
body {
 width: 700px;
 height: 400px;
 top: 0px;
 left: 0px;
 color: #00FFFF;
 font-weight: bold;
 font-size:20px;
 background: transparent;

}

.ByDesign {

  background: url(https://i.imgur.com/xlQwqvF.png) no-repeat;
  background-repeat: no-repeat;
  background-position: 0px center;
  position: relative;S
  box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);
  background-size: cover;
  overflow: hidden;
  position: relative;
  width: 700px;
  height: 400px;
  border-radius: 6px;

}







#animation{
    position: absolute;
    left: 8px;
    top: 353px;
    width: 77.6%;
     border-radius: 14px;
}
#animation1{
    position: absolute;
    left: 8px;
    top: 378px;
    width: 77.6%;
     border-radius: 14px;
}
#animation2{
    position: absolute;
    left: 500px;
    top: 190px;
    width: 77.6%;
     border-radius: 14px;
}
#animation3{
    position: absolute;
    left: -280px;
    top: 174px;
    width: 77.6%;
     border-radius: 14px;
}
#animation4{
    position: absolute;
    left: -530px;
    top: -80px;
    width: 77.6%;
     border-radius: 14px;
}


 #apple,
#twitter,
#github,
#facebook {
  height: 25px;
  width: 20px;
  font-size: 1.7em;
  background-color: #;
  animation: animate 5s linear infinite;
  text-shadow: 0 0 25px #ffffff, 0 0 50px #ff0000, 0 0 50px #ffffff,
  0 0 150px #ff0000;
}
#twitter {
  animation-delay: 0.3s;
}
#facebook {
  animation-delay: 0.7s;
}
#github {
  animation-delay: 0.1s;
}

@keyframes animate {
  from {
    filter: hue-rotate(0deg);
  }
  to {
    filter: hue-rotate(360deg);
  }
}
.data {
    position: absolute;

    font-size: 18px;
    left: 278px;
    top: 320px;
    color: #00FFFF;
    width: 371px;
    height: 21px;
    z-index: 16;
    border: 1px;
    font-weight: bold

}


#Clock {
    position: absolute;
    top: 198px;
    left:325px;
    width: 71px;
    color: #00FFFF;
    font-size: 18px;
    height: 24px;
    font-weight: bold
}



</style>
      <style>
#audioControl img {
position: fixed;
top: 37px;
left: 300px;
width: 35px;
height: 35px;
}

#pause {
display: none;
}
</style>
</head>
<body>
<div class="ByDesign">
<div id="animation1">
<iframe src="/radio/now-playing_jony" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="50px" width="740px" allowfullscreen></iframe>
</div>
<div id="animation2">
<img src="https://i.imgur.com/vAseWkM.gif" id="Image11" alt="" width="180" height="150"></div>
<div>
<div style=" position: fixed;  top: 8px; left:10px;" >
<iframe src="/radio/webradio2/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="300px" width="1590px" allowfullscreen></iframe>
</div>
<div style=" position: fixed;  top: 300px; left:260px;" >
<font color="#00FFFF"><font size="3"><b>Reset</b></font></font>
</div>
<div style=" position: fixed;  top: 300px; left:435px;" >
<font color="#00FFFF"><font size="3"><b>Stop</b></font></font>
</div>
<div style=" position: fixed;  top: 230px; left:438px;" >
<font color="#00FFFF"><font size="3"><b>Play</b></font></font>
</div>
<div style=" position: fixed;  top: 230px; left:258px;" >
<font color="#00FFFF"><font size="3"><b>Player</b></font></font>
</div>






<span id="Clock"></span>
<script language="JavaScript">
<!--
var Elem = document.getElementById("Clock");
function Horario(){
var Hoje = new Date();
var Horas = Hoje.getHours();
if(Horas < 10){
Horas = "0"+Horas;
}
var Minutos = Hoje.getMinutes();
if(Minutos < 10){
Minutos = "0"+Minutos;
}
var Segundos = Hoje.getSeconds();
if(Segundos < 10){
Segundos = "0"+Segundos;
}
Elem.innerHTML = Horas+":"+Minutos+":"+Segundos;
}
window.setInterval("Horario()",1000);
//-->
</script>
<div id="data" class="data">
<script language="javascript">

var fecha=new Date();
var diames=fecha.getDate();
var diasemana=fecha.getDay();
var mes=fecha.getMonth() +1 ;
var ano=fecha.getFullYear();

var textosemana = new Array (7);
textosemana[0]="Sunday";
textosemana[1]="Monday";
textosemana[2]="Tuesday";
textosemana[3]="Wednesday";
textosemana[4]="Thursday";
textosemana[5]="Friday";
textosemana[6]="Saturday";

var textomes = new Array (12);
textomes[1]="January";
textomes[2]="February";
textomes[3]="March";
textomes[4]="April";
textomes[5]="May";
textomes[6]="June";
textomes[7]="July";
textomes[8]="August";
textomes[9]="September";
textomes[10]="Ottobre";
textomes[11]="November";
textomes[12]="December";

document.write("" + textosemana[diasemana] + " " + diames + "  " + textomes[mes] + "  " + ano + "<br>");
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script language="javascript" type="text/javascript">
$(document).ready(function(e){


 $("#reset").click(function(){
      document.location.reload(true);
});
 });
</script>
</div>
</div>
 <div id="animation">
<marquee behavior="scroll" direction="left" scrollamount="4" scrolldelay="20" onmouseover="this.stop()" onmouseout="this.start()" width="800" >html5 player More info xat.com/fondos :ByDesign ID 1515147447</marquee>
<div>
<div style="z-index: 80; position: fixed;  top:-70px; left:345px;">
<iframe src="/radio/server-xoris-cover2_jony/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="300px" width="400px" allowfullscreen></iframe>
<div>
<div style=" position: fixed;  top: 125px; left:20px;" >
<iframe src="/radio/cover2_shoutcas4.php" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="250px" width="250px" allowfullscreen></iframe>
</div>
<div style="z-index: 80; position: fixed;  top:320px; left:20px;">
<iframe src="/radio/artist_song_title_jony" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100px" width="400px" allowfullscreen></iframe>
</div>
<div id="animation3">
<font color="#00ffff"><font size="4"><b>Artist Cover</b></font></font>
<div>
<div style="z-index: 80; position: fixed;  top:100px; left:540px;">
<iframe src="/radio/A48FM-RADIO-name-text.php/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="80px" width="200px" allowfullscreen></iframe>
<div>

<div style="z-index: 80; position: fixed;   top:137px; left:335px;">
<iframe src="/radio/online1" style="border:0px #ffffff none;" name="online" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="40px" width="100px" allowfullscreen></iframe>
</div>

<div style=" position: fixed;  top: 258px; left:265px;" >
<a href id="reset"><i class="fa fa-refresh" id="apple" title="Reset Player"></i></a>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>


		var message="ByDesign-RADIO NO CLICK HEAR!!!";

		function clickIE4(){
		if (event.button==2){
		alert(message);
		return false;
		}
		}

		function clickNS4(e){
		if (document.layers||document.getElementById&&!document.all){
		if (e.which==2||e.which==3){
		alert(message);
		return false;
		}
		}
		}

		if (document.layers){
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
		}
		else if (document.all&&!document.getElementById){
		document.onmousedown=clickIE4;
		}

		document.oncontextmenu=new Function("alert(message);return false")
</script>
<script>


		function disableselect(e){
		return false
		}
		function reEnable(){
		return true
		}
		document.onselectstart=new Function ("return false")
		if (window.sidebar){
		document.onmousedown=disableselect
		document.onclick=reEnable
		}
</script>


</body>
</html>