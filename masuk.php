
<body style="background-color: #FF9933;">

	<center><h2 style="font-family: Century Gothic; text-shadow: 20%">Profile and Travelling</h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><li><b>Photo</b></li></td>
			<td> <input type="file" name="photo" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="hobi[]" value="Acting">Acting <br>
				<input type="checkbox" name="hobi[]" value="Backpacking">Backpacking Travel 
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="hobi[]" value="Football">Football
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Swimming">Swimming<br>
				<input type="checkbox" name="hobi[]" value="Ballet">Ballet
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Dancing">Dancing<br>
				<input type="checkbox" name="hobi[]" value="Music">Music
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Programming">Programming<br>
				<input type="checkbox" name="hobi[]" value="Other Hobby">Other Hobby
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="genre[]" value="Horror">Horror<br>
				<input type="checkbox" name="genre[]" value="Action">Action 
			</td>
			<td>
				<input type="checkbox" name="genre[]" value="Anime">Anime<br>
				<input type="checkbox" name="genre[]" value="Thriller">Thriller
			</td>
			<td>
				<input type="checkbox" name="genre[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Travelling Destination :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="destin[]" value="Bali">Bali<br>
				<input type="checkbox" name="destin[]" value="Raja Ampat">Raja Ampat 
			</td>
			<td>
				<input type="checkbox" name="destin[]" value="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="destin[]" value="Bangka Belitung">Bangka Belitung
			</td>
			<td>
				<input type="checkbox" name="destin[]" value="Labuan Bajo">Labuan Bajo
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td align="right"><input type="submit" name="submit" value="Submit"></td>
		</tr>	

		</ul>
	</table>

<?php
	if(isset($_POST['submit'])) {
		$hobby = $_POST['hobi'];
		$genre = $_POST['genre'];
		$destin = $_POST['destin'];
		$foto = $_FILES["photo"]["name"];

		echo "<br><br><br>";
		echo "<hr>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Result of Your Choice</h3></td>
	</tr>	
	<tr>
		<td><b>Hobby</b></td>
		<td align="center">
			<?php
				foreach ($hobby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Genre</b></td>
		<td align="center">
			<?php
				foreach ($genre as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Destination</b></td>
		<td align="center">
			<?php
				foreach ($destin as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar</td>
		<td>
			<?php
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$foto' style='width:200px;height:200px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>


</body>
