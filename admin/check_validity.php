<?php

	if(isset($_SESSION['admin_id']))
	{

	/*	$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		} */
	}
	else{
	//redirect to login
	header("Location: ./");
	die;
	}

?>