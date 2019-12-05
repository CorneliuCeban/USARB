<?php

function getCategorie($categorie){
	$connection = new mysqli('localhost', 'root', '', 'cornelshop');
	$log = "SELECT * FROM produse WHERE categorie = '$categorie'";
		//echo $log;
        if ($result = $connection->query($log)) {
				if ($result->num_rows > 0) {
					
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo $row['model']."<br>";
					echo $row['pret']."<br>";
					echo "<br>";
				}
			} else {
				echo "nici un produs";
			}	
			$result->close();
		}
}
