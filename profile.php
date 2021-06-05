<?php
	require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='main.css'/>
	<title>Profile Submission</title>
	<h1><center><div class ="form">Create Your Profile Page</div></center></h1>	
</head>
<body>
<form class ="form-inline" method="POST">
<div class ="container">
	<div class="mydiv">
		<h2><i><u>Personal :</u></i></h2> 		
		<lable for="first name"><b>First Name :</b></lable>
		<input type="text" class ="input" name="fname" placeholder="Enter First Name"required="">
	     &nbsp&nbsp&nbsp&nbsp&nbsp
		<label for="Lastname"><b>Last Name :</b></label>
		<input type="text" class ="input" name="lname" placeholder="last name"  required>
		<br><br>
		<lable for="Gender"><b>Gender :</b></lable> 
		<span>Female</span> 
		<input type="radio"  name="gender" value="female">
		&nbsp&nbsp
		<span>male</span>
		<input type="radio" name="gender" value="male">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label for="email"><b>Email :</b></label>
		<input type="email" class ="input" name="email" required>
		<br><br>
		<label for="Phone"><b>Phone No. :</b></label>
		<input type="text" name="pnumber" class ="input"placeholder="Phone">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label for="state"><b>State :</b></label>
		<select name="state">
		<option value="maharastra">Maharashtra</option>
		<option value="goa">Goa</option>
		<option value="gujrat">Gujrat</option> 
		</select>
		<br><br>
		<label for="city"><b>City :</b></label>
		<input type="text" name="city" class ="input" placeholder="city eg.dhule" required>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label for="photo"><b>Photo :</b></label>
		<input type="file" name="uploadedfiles" multiple accept='image/*' required />
	</div>
	<div class="mydiv">
		<h2><i><u>Education :</u></i></h2>
		<label for="Graduation"><b>Graduation :</b></label>
		<select name ="graduation" required="">
		<option value="MCS">MCS</option>
		<option value="MCA">MCA</option>
		<option value="MBA">MBA</option>
		</select>
		<br><br>
		<label for="percent"><b>Graduation Grade/Percentage :</b></label>
		<input type="text" class="input" name="perc" placeholder="in %">
		<br><br>
		<label for="Graduation year"><b>Graduation Year :</b></label>
		<select name ="year" required="">
		<option value="2020">2020</option>
		<option value="2019">2019</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		</select>
		<br><br>
		<label for="specialization"><b>Specialization :</b></label>
		<input type="text" name="special"class="input" placeholder="Specialization"  required>
		<br><br>
		<label for="college"><b>College/University :</b></label>
		<input type="text" name="clg" class="input" placeholder="Name of University/college"required="">
	</div>
	<div class="mydiv">
		<h2><i><u>Skills :</u></i></h2>
		<label for="Primary"><b>Primary :</b></label>
		<input type="text" name="primary" class="input"placeholder="Primary Skills" required>
		<br><br>
		<label for="secondary"><b>secondary :</b></label>
		<input type="text" name="second" class ="input"placeholder="secondary Skills">
		<br><br>
		<label for="certification"><b>Certification :</b></label>
		<input type="text" name="certi" class="input"placeholder="mention your Certification">
	</div>	
	<div class="mydiv">
		<h2><i><u>Pitch :</u></i></h2>
		<label for="pitch"><b>Pitch :</b></label>
		<textarea name="pit" rows="4" cols="50" placeholder="write something" required>
		</textarea>
	</div>
	<center><input type="submit" name="btn" class="btn" value="Create"></center>
</div>
</form>
<?php
error_reporting(0);
if(isset($_POST["btn"]))
{
	$file_name=$_FILES['uploadedfiles']['name'];
	$file_stores = "userphoto/".$file_name;
	$file_tem_loc=$_FILES['photo']['tmp_name'];
	move_uploaded_file($file_tem_loc,$file_stores);
	$con=connect_to_database("pixel6");//function call 
	$query="insert into profileinfo (`firstname`, `lastname`, `gender`, `email`, `phone`, `state`, `city`, `photo`, `graduation`, `grade`, `year`, `special`, `college`, `primary`, `secondary`, `certificate`, `pit`) values('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["pnumber"]."','".$_POST["state"]."','".$_POST["city"]."','$dest_path','".$_POST["graduation"]."','".$_POST["perc"]."','".$_POST["year"]."','".$_POST["special"]."','".$_POST["clg"]."','".$_POST["primary"]."','".$_POST["second"]."','".$_POST["certi"]."','".$_POST["pit"]."')";
	if (mysqli_query($con, $query))
	{   
		header("Location:userprofile.php?firstname='".$_POST["fname"]."'&Lastname='".$_POST["lname"]."'");
	}
	else
	{
		echo "Error: " . $query . "<br>" . mysqli_error($con);
	}
	mysqli_free_result ($query);
	disconnect_from_database ($con);
}
?>
</body>
</html>