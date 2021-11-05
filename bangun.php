<?php 
	if (isset($_POST['proses'])) {
		# code...
		$n = $_POST['angka'];
		/*for ($i=0; $i<=$n ; $i++) { 
			# code...
			for ($j=0 ;$j<=$i ; $j++) { 
				# code...
				echo "*";
			}echo "<br>";
		}*/

		/*for ($i=$n; $i>=0 ; $i--) { 
			# code...
			for ($a=1; $a<=$i ; $a++) { 
				# code...
				echo "&nbsp;&nbsp;";
			}for ($j=$n; $j>$i ; $j--) { 
				# code...
				echo "*";
			}for ($x=$n+1; $x>$i ; $x--) { 
				# code...
				echo "*";
			}echo "<br>";
		}
*/	
		echo "<p align='center'>";
		for ($i=0; $i<=$n ; $i++) { 
			# code...
			for ($a=$i; $a>=0 ; $a--) { 
				# code...
				print("*");
			}
			echo "<br>";
		}
		for ($i=0; $i<=$n ; $i++) { 
			# code...
			for ($j=$i; $j<=$n-1 ; $j++) { 
				# code...
				print("*");
			}
			echo "<br>";
		}
		echo "</p>";
	}else{
		echo "Inputkan Terlebih Dahulu";
	}
?>