<center><body style="background-color: #FF9966;">

<?php
		if(isset($_POST['submit'])){
			$usid = $_POST['resti'];
			$pass = $_POST['ayu'];

			if(isset($_POST['data'])){
				$data = $_POST["data"];
			}else $data = "";

			$data.= $usid."*".$pass."||";

		}
?>

<form action="masuk.php" method="POST">
	<table>
		<tr>
			<td>Username : <input type="text" name="usid" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"><br><br></td>
		</tr>
		<tr>
	 		<td>Password : <input type="Password" name="pass" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"><br><br></td>
	 	</tr>
	 </table>
	<?php
			if(isset($data)){ ?>
				<input type="hidden" name="data" value="<?php echo $data; ?>">
				<?php
		}
				?>
					<br>
		<input type="submit" name="submit" value="LOGIN">
</form>

<?php
		if(isset($_POST['submit'])){
			$arrData = explode("||", $data);
			$arrDetail = array();
			for($x = 0; $x < count($arrData); $x++){
				array_push($arrDetail, explode("*", $arrData[$x]));
			}
			print_r($arrDetail);
			echo "<br><h3>FORM LOGIN</h3></br>
				<table border = 1>
				<tr>
					<td width = "."100px"."><b><center>Username</td>
					<td width = "."100px"."><b><center>Password</td>
				</tr>";

		for ($x = 0; $x < count($arrDetail)-1  ; $x++) { 
			echo "<tr>";
				echo "<td>";
					echo $arrDetail[$x][0];
				echo "</td>";
				echo "<td>";
					echo $arrDetail[$x][1];
				echo "</td>";
				//echo "<td>";
					//echo $arrDetail[$x][2];
				//echo "</td>";
			echo"</tr>";
		}
		echo "</table>";
		
		// echo "<br>".$data;
	}
?>

</body>
</center>
