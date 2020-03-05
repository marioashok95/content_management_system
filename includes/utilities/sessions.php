<?php
session_start();

function errorMessage()
{
	if(isset($_SESSION['errorMessage']))
	{
		$result="<div class='alert alert-danger'>";
		$result.=htmlentities($_SESSION['errorMessage']);
		$result.="</div>";

		$_SESSION['errorMessage']=null;

		return $result;
	}
}



function successMessage()
{
	if(isset($_SESSION['successMessage']))
	{
		$result="<div class='alert alert-success'>";
		$result.=htmlentities($_SESSION['successMessage']);
		$result.="</div>";

		$_SESSION['successMessage']=null;

		return $result;
	}
}