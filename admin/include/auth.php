<?php
session_start();
if(isset($_SESSION['user_type'])&&!empty($_SESSION['user_type']))
{
	if($_SESSION['user_type']==='2')
		header("Location: ../client/index.php");
}
else
{
	header('Location: ../index.php');
}

