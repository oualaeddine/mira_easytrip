<?php
	$conn = mysqli_connect("mira.cirnfgihqidi.eu-west-3.rds.amazonaws.com", "mira", "miramira", "mira");

	$sql ="SELECT * FROM data WHERE `id_carrefour`='".$_POST['numc_send']."' ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		echo ("<img src='lib/img/consultation.jpg'>");
		$row = mysqli_fetch_assoc($result) ;
		echo "<table cellpadding='1' cellspacing='20' border='0'><tr><th>Voie a</th><td>  </td></tr>";	

		echo "<tr><th>Densité de traffic</th><td>";
		if ($row['v1']==="0")
			echo "faible";
		elseif ($row['v1']==="1") 
	 		echo "moyenne";
	 	elseif ($row['v1']==="2")
	 		echo "forte";
		echo "</td></tr>";

		echo "<tr><th>Feux de couleur</th><td>";
		if ($row['far']==="1")
			echo "rouge";
		elseif ($row['fao']==="1") 
	 		echo "orange";
	 	elseif ($row['fav']==="1")
	 		echo "vert";
		echo "</td></tr>";




		echo "<tr><th>Voie b</th><td>  </td></tr>";	

		echo "<tr><th>Densité de traffic</th><td>";
		if ($row['v2']==="0")
			echo "faible";
		elseif ($row['v2']==="1") 
	 		echo "moyenne";
	 	elseif ($row['v2']==="2")
	 		echo "forte";
		echo "</td></tr>";

		echo "<tr><th>Feux de couleur</th><td>";
		if ($row['fbr']==="1")
			echo "rouge";
		elseif ($row['fbo']==="1") 
	 		echo "orange";
	 	elseif ($row['fbv']==="1")
	 		echo "vert";
		echo "</td></tr>";	
	
	 
	}else {
		echo "Carrefour n'existe pas";
	}
?>