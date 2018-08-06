<?php 
	echo "<h1>Thông tin sinh viên</h1>";
	echo("<br> <button>Thêm mới</button>" );
	echo count($_SESSION);
		for ($i=0; $i <count($_SESSION) ; $i++) { 
			# code...
			echo("<table width="100%" height="300px">")
				echo("<tr>")
					echo("<td>")
						$_SESSION[$i]['name'];
					echo("</td>")
				echo("</tr>")
			echo("</table>")
		}
	
 ?>

