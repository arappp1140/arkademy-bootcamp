<?php
for($i=0; $i<10; $i++) {
	for($j=0; $j<10; $j++) {
		if ($i == $j || ($i == 1 && $j == 1))
			echo 'P';
		else 
			echo '=';
	}
	echo '<br/>';
}
