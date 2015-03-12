<?php
include("menu.php");

	if(isset($_POST['go'])){
		$angka = $_POST['angka'];
		$bil 	= $_POST['bilangan'];

		if($bil=="cacah"){
			echo "<p> {$angka} bilangan cacah :<br />";
			for($i=0;$i<$angka;$i++){
				echo $i."<br />";
			}
		}//cacah

		
		if ($bil=="genap") {
			echo "<p> {$angka} bilangan genap :<br />";

			for($i=0;$i<$angka;$i++){
				echo ($i*2)."<br />";
			}

		}//genap


		if ($bil=="ganjil") {
			echo "<p> {$angka} bilangan ganjil :<br />";
			for($i=1;$i<=$angka;$i++){
				echo ($i*2-1)."<br />";
			}
		}//ganjil

	}
?>
<p>


<form method="post">
	<input name="angka" type="number" value="<?php if(isset($angka)) echo $angka;?>" required>
	<select name="bilangan">
		<option value="cacah" <?php if(isset($bil) && ($bil=="cacah")) echo "selected"; ?>>cacah</option>
		<option value="ganjil" <?php if(isset($bil) && ($bil=="ganjil")) echo "selected"; ?>>ganjil</option>
		<option value="genap" <?php if(isset($bil) && ($bil=="genap")) echo "selected"; ?>>genap</option>
	</select>
	<button name="go">go</button>
</form>
<?php
include("menu.php");
?>