<?php
require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='main.css'/>
	<title></title>
</head>
<body>
<?php
	error_reporting(0);
	$name=$_GET["firstname"];
	$con=connect_to_database("pixel6");
	$q="select * from profileinfo where firstname=".$_GET["firstname"]."";
	$rs  = mysqli_query($con,$q);
	while($row = $rs->fetch_assoc())
	{
		$gender=$row["gender"];
		if($gender=="male")
		{
			$g="Mr.";
			$p="her";
			$s="he";
		}
		else
		{
			$p="his";
			$g="Miss.";
			$s="she";
		}
?>
<div class="container">	
	<center><img src="<?$row["photo"]?>"height=100 width=100/></center>
	<center><b><? echo strtoupper($row["firstname"])." ".strtoupper($row["lastname"])?></b></center>
	<p>&nbsp&nbsp&nbsp&nbsp<?php echo $g." ".$row["firstname"] ?> did <? echo $p." ".$row["graduation"]?> in <? echo $row["special"]?> from <? echo $row["college"]?> in the year <? echo $row["year"]?>. <? echo $s?> is highly skill in <? echo $row["primary"]." .".$s ?> lives in <? echo $row["city"]?> and can be contacted via <? echo $row["email"]?>.</p>
	<h2 style="font-size: 20px">PERSONAL</h2>
	<div style="border-top: solid 1px">
		<b>first Name :</b><?echo $row["firstname"]?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		<b>Email :</b><?echo $row["email"]?>
		<br><br>
		<b>Last Name :</b><?echo $row["lastname"]?>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		<b>Phone :</b><? echo $row["phone"]?>
		<br><br>
		<b>Gender :</b><?echo $row["gender"]?>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		<b>Lives In :</b><? echo $row["city"]?>
	</div>
	<br><br>
	<h2 style="font-size: 20px">Education</h2>
	<div style="border-top: solid 1px">
		<b>Graduation &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :	</b> <?echo $row["graduation"]?>       	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		<b>Pass out:</b><?echo $row["year"]?>
		<br><br>
		<b>College/University :</b><?echo $row["college"]?>
	</div>
	<br><br>
	<h2 style="font-size: 20px">Skills</h2>
	<div style="border-top: solid 1px">
		<b>Primary Skills &nbsp&nbsp&nbsp&nbsp:</b><?echo $row["primary"]?>
		<br><br>
		<b>Secondary Skills :</b><?echo $row["secondary"]?>
		<br><br>
		<b>Certificates &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?echo $row["certificate"]?>
	</div>
	<br><br>
	<h2 style="font-size: 20px"><?echo strtoupper($row["firstname"])."'"."s"?>  PITCH</h2>
	<div style="border-top: solid 1px;">
		<b>"</b><?echo $row["pit"]?><b>"</b>
	</div>
</div>
<?
	}
?>

</body>
</html>