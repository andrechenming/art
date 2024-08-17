<?php
	$br="<br>";
	echo "帳號:".$_POST["userAccount"]."<br>";
	echo "密碼:".$_POST["userPassword"]; 
	/*$serverHost="localhost";
	$serverAccount="root";
	$serverPassword="";
	$serverDatabase="tang";

	if(!@mysql_connect($serverHost,$serverAccount,$serverPassword)){
			echo "connect error".$br;
			exit;
	}
	else
		echo "connect success".$br;
	
	//資料庫連線採UTF8
	mysql_query("SET NAMES utf8");
	
	//選擇資料庫
	if(!@mysql_select_db($serverDatabase))
			die("無法使用資料庫");*/


?>  
