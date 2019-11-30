<?php
session_start();
if(isset($_SESSION['user_type'])&&!empty($_SESSION['user_type']))
{
	if($_SESSION['user_type']==='1')
		header("Location: ../admin/index.php");

}
else
{
	header('Location: ../index.php');
}

