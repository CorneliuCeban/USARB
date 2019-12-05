<?php
	if (! empty( $_SESSION['user_id'] ) ) {
		if ($_SESSION['user_id'] == 1 ) {
			echo "aici va fi totalurile la vinzari vazut dor de Administrator Saitului";
		}else{
			echo "aici va fi rezumat la comenzile clientilor";
		}			
	}
?>