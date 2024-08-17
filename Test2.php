<?php
	include("database.php");
	$memDao=new MemberDAO();
	$item=$memDao->getById(1);
	foreach($item as $f){
		echo $f.",";
		
	}
	echo "<br>";
	
	$memDao=new MemberDAO();
	$list=$memDao->getByWhere("db_account='tangning' and db_password='123456'");
	foreach($list as $item){
		foreach($item as $f){
			echo $f.",";
		}
		echo "<br>";
	}
	
?>