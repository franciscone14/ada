<?php
	session_start();
	$type = $_POST['sessionType'];

	if($type == 'start'){
		include_once "../models/dao/genericDAO.php";
		include_once "../models/dao/connectionFactory.php";
		$conFac = new connectionFactory();
		$con = $conFac->getConnection();

		$object = $_POST['object'];

		$sql = "SELECT * FROM login WHERE emailLogin = '".$object['user']."' AND senhaLogin = '".md5($object['pwd'])."'";
		$sql2 = "SELECT * FROM login WHERE codLogin = '".$object['user']."' AND senhaLogin = '".md5($object['pwd'])."'";
		$result = mysqli_query($con, $sql);
		$result2 = mysqli_query($con, $sql2);

		if(mysqli_num_rows($result) > 0){
			$fields = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$_SESSION['idLogin'] = $fields['idLogin'];
			$_SESSION['emailLogin'] = $fields['emailLogin'];
			$_SESSION['codLogin'] = $fields['codLogin'];
			$_SESSION['tipoLogin'] = $fields['tipoLogin'];
			
			// echo json_encode($fields);
			// echo "<meta http-equiv = \"refresh\" content=\"3;url=index.php\">";
			echo "true";
		}
		else if(mysqli_num_rows($result2) > 0){
			$fields = mysqli_fetch_array($result2, MYSQLI_ASSOC);
			$_SESSION['idLogin'] = $fields['idLogin'];
			$_SESSION['emailLogin'] = $fields['emailLogin'];
			$_SESSION['codLogin'] = $fields['codLogin'];
			$_SESSION['tipoLogin'] = $fields['tipoLogin'];
			
			// echo json_encode($fields);
			// echo "<meta http-equiv = \"refresh\" content=\"3;url=index.php\">";
			echo "true";
		}
		else{
			echo "false";
		}
	}
	else if($type == 'stop'){
		session_destroy();
	}
	
?>