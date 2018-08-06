<?php 
	mb_internal_encoding('UTF-8');
	$name="    nguyễn              tHu hƯơng ";
	
	echo "Chuỗi ban đầu la: $name";
	$name= str_replace('!\s+!', ' ', $name);
	$name= mb_strtolower($name);
	// $name= mb_strtoupper(strstr($name, " "));
	$data= explode(" ", $name);
	$xaumoi="";
	echo "<br> Chuỗi sau khi xử lý là: ";
	for ($i=0; $i < count($data)-1 ; $i++) { 
		# code...
		if ($data[$i]!="") {
			# code...
			echo "$xaumoi" .(mb_strtoupper($data[$i][0])) .(substr($data[$i], 1));
		}
		if($i<count($data)-2)
            {
                echo " ";
            }
        if($i==count($data)-2)
            {
                echo ".";
            }
	}
	echo "$xaumoi";
?>