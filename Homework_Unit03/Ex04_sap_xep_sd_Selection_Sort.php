<?php 
	$arr= array(2, 3, 8, 1, 7, 9, 6, 12, 15, 13);
	echo "Mảng đã cho là: ";
	for ($i=0; $i < count($arr) ; $i++) { 
		# code...
		echo "\t" .$arr[$i];
	}

	echo "<br> Mảng sau khi sắp xếp là: ";
	for ($i=0; $i < count($arr)-1 ; $i++) { 
		# code...
		$min= $i;
		for ($j=$i+1; $j < count($arr); $j++) { 
			# code...
			
			if($arr[$j]<$arr[$min]){
				$min=$j;
			}
		}
		if ($min!=$i) {
			# code...
			$temp= $arr[$i];
			$arr[$i]=$arr[$min];
			$arr[$min]=$temp;
		}
	}
	for ($i=0; $i < count($arr) ; $i++) { 
		# code...
		echo "\t" .$arr[$i];
	}
?>