<?php
	$br="<br>";
	$txtAccount=$_POST["txtAccount"];
	$txtPassword=$_POST["txtPassword"];
	$txtName=$_POST["txtName"];
	$rbSex=$_POST["rbSex"];
	$txtMail=$_POST["txtMail"];
	$txtAddress=$_POST["txtAddress"];

	$currentTime=time(); //TimeStamp
	$serverHost="localhost";
	$serverAccount="root";
	$serverPassword="";
	$serverDatabase="tang";
	
	$conn=new mysqli($serverHost,$serverAccount,$serverPassword,$serverDatabase);
	
	if(mysqli_connect_error() ){
		echo "connect error".$br;
		exit;
	}
	
	mysqli_query($conn,"SET NAMES UTF8");
	$sql="insert into employee (userName,userAccount,userPassword,registerTime,sex,email,address) values(?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('sssiiss',$txtName,$txtAccount,$txtPassword,$currentTime,$rbSex,$txtMail,$txtAddress);
	$stmt->execute();
	$stmt->close();
	$conn->close();

?>