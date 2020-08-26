<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'style.css'?>
</head>
<body>
<div class="qq">
<h2>Love Calculator</h2>
<form name="ff" method="POST">
<input type="text" class="in1" name="p1" placeholder="your name">
<input type="text" class="in2" name="p2" placeholder="love name">
<button onclick="hh()" name="bab"> chech your love</button>
<input type="text" placeholder="love percentage" class="in4"  name="p3">
<h4></h4>
<input type="text" class="in3" class="s12" placeholder="**Ganesh.......): ...........stay single stay home stay safe">
</form>
<h1>+</h1>
</div>
<script type="text/javascript">
function hh()
{
var s1=ff.p1.value;
var s2=ff.p2.value;
if(s1=="")
{
alert("enter your name");
}
else if(s1.length<4)
{
alert("min num of charectes are 3");
}
else if(s2=="")
{
alert("enter your love name");
}
else if(s2.length<4)
{
alert("min num of charectes are 3");
}
if((s1!="")&&(s2!=""))
{
var v=(Math.floor((Math.random()*100))+"%");
ff.p3.value=v;
}
}
</script>
</body>
</html>
<?php 
include 'connection.php';
if(isset($_POST['bab']))
{
$r1=$_POST['p1'];
$r2=$_POST['p2'];
$r3=$_POST['p3'];
$query="insert into lovecal(bname,gname,per)values('$r1','$r2','$r3')";
$res=mysqli_query($con,$query);
}
?>
