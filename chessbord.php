<!DOCTYPE html>
<html>
<head>
	<title>Chess board</title>
</head>
<style >
	table
	{
		border:1px solid black;
	}
	td{

		border:1px solid black;
		padding: 40px;
		letter-spacing: 0;
	}
	.a{

		background-color: black;
	}


</style>
<body>
	<form method="post" action="#">
		Enter No. Of Row & Coloum
		<br>
		<input type="number" name="num">
		<input type="submit" name="submit" value="submit">
	</form>
	<table>

	<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['num'];
		for ($i=1; $i <=$a ; $i++) 
		{   echo "<tr>";

	      for ($j=1; $j<=$a; $j++)
	      {  
	      	if ((($i+$j)%2)==0) 
	      	{
	      		
	      		echo "<td class='a'></td>";
	      	}
	      	else
	      	{
	      	     echo "<td></td>";
	      	}
	      	
	      }



			echo "</tr>";
		}

		    
	}


	?>
	</table>

</body>
</html>