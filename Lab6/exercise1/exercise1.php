<html>
<title>Exercise 1</title>
<body>
<style>
table, th, td, tr{
	border:1px solid;
}
</style>
<table>
	<?php 
	for($i=1; $i<=100; $i++) {
		echo"<tr>";
		for($j=1; $j<=100; $j++) {
			echo('<td>'. $j*$i.'</td>');
		}
		echo('</tr>');
	} ?>

</table>
</body>
</html>
