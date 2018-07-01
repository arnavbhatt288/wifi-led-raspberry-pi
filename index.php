<html>
<br>
<head>
<link href="site.css" rel="stylesheet">
<div align="center"> <h1><font color="white">LED Control</font></h1>
</div>
</head>
<body background="/Images/image.png">
<?php
if (isset($_POST['LEDON']))
{
system("cd /home/pi && sudo python ledon.py");
}
if (isset($_POST['LEDOFF']))
{
system("cd /home/pi && sudo python ledoff.py");
}
if (isset($_POST['LED1ON']))
{
system("cd /home/pi && sudo python led1on.py");
}
if (isset($_POST['LED1OFF']))
{
system("cd /home/pi && sudo python led1off.py");
}
?>
<br>
<body>
<div align="center">
<form method="post">
<p><font color="white" size="6">LED 1</font></p> <button id="search" class="btn" name="LEDON"><h4>Turn On</h4></button>&nbsp;
<button id="search" class="btn" name="LEDOFF"><h4>Turn Off</h4></button><br><br>

<p><font color ='white', size="6">LED 2</font></p> <button id="search" class="btn" name="LED1ON"><h4>Turn On</h4></button>
<button id="search" class="btn" name="LED1OFF"><h4>Turn Off</h4></button><br><br>

</form>
<div>
</body>
</html>
      