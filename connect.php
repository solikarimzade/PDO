<?php 
	$db = new PDO('mysql:host=localhost;dbname=pdotest;charset=utf8', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	   // $stmt = $db->query("SELECT * FROM user");
	   // $json=$stmt->fetchAll(PDO::FETCH_ASSOC) ;
	   // echo json_encode($json);

	 // $query="select* FROM `user`";
	 // $run=$db->query($query);
	 // foreach ($run as $key) {
	 // 	var_dump($run);
	 // }
	
	// getData($db);

	//then much later
	// try {
	//    getData($db);
	// } catch(PDOException $ex) {
	  
	// }





	 $query="select * from `user`";
	 $run=$db->query($query);
	 // while($fetch=$run->fetch(PDO::FETCH_ASSOC)){
	 // 	var_dump($fetch);
	 // }

	 $fetch=$run->fetchALL(PDO::FETCH_ASSOC);
	 // var_dump($fetch);

	$run=$db->query($query);
	$cnt=$run->rowCount();
	// echo $cnt;

	$insert="insert INTO `user` (name,username) VALUES ('apple','appleId')";
	$run=$db->query($insert);
	if($run){
		// echo $db->lastInsertId();
	}

	$update="UPDATE `user` set username='sony' where `username`='appleId' ";

	$run=$db->exec($update);
	// echo $run;

	$query="select * from `user` where id=? and username=?";

	$prepare=$db->prepare($query);
	$prepare->execute(array(1,'shima1'));
	$fetch=$prepare->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($fetch);
	
	$insert="insert into `user` (username,name) values (?,?)";
	$prepare=$db->prepare($insert);
	$run=$prepare->execute(array("sumsong","song"));
	// echo $db->lastInsertId();

	$update="update `user` set username=? where id=?";
	$prepare=$db->prepare($update);
	$run=$prepare->execute(array('kambiz',1));
	echo $run;


?>