<?php

include("menu.php");
?>
<p>
<?php
if(isset($_POST['go'])){
	$number = $_POST['angka'];
	$satuan = $_POST['satuan'];
	$konversi = $_POST['konversi'];

	//konversi ke ton
	if(($satuan== "kg") && ($konversi=="ton")){ $hasil = ($number*0.001);}
	if(($satuan== "g") && ($konversi=="ton")){ $hasil = ($number*0.000001);}
	if(($satuan== "dg") && ($konversi=="ton")){ $hasil = ($number*0.0000001);}
	if(($satuan== "cg") && ($konversi=="ton")){ $hasil = ($number*0.00000001);}
	if(($satuan== "mg") && ($konversi=="ton")){ $hasil = ($number*0.000000001);}

	//konversi ke gram
	if(($satuan== "kg") && ($konversi=="g")){ $hasil = ($number*1000);}
	if(($satuan== "ton") && ($konversi=="g")){ $hasil = ($number*1000000);}
	if(($satuan== "dg") && ($konversi=="g")){ $hasil = ($number*0.1);}
	if(($satuan== "cg") && ($konversi=="g")){ $hasil = ($number*0.01);}
	if(($satuan== "mg") && ($konversi=="g")){ $hasil = ($number*0.001);}

	//konversi ke kilogram
	if(($satuan== "g") && ($konversi=="kg")){ $hasil = ($number*0.001);}
	if(($satuan== "ton") && ($konversi=="kg")){ $hasil = ($number*1000);}
	if(($satuan== "dg") && ($konversi=="kg")){ $hasil = ($number*0.0001);}
	if(($satuan== "cg") && ($konversi=="kg")){ $hasil = ($number*0.00001);}
	if(($satuan== "mg") && ($konversi=="kg")){ $hasil = ($number*0.000001);}

	//konversi ke desigram
	if(($satuan== "kg") && ($konversi=="dg")){ $hasil = ($number*10000);}
	if(($satuan== "ton") && ($konversi=="dg")){ $hasil = ($number*10000000);}
	if(($satuan== "g") && ($konversi=="dg")){ $hasil = ($number*10);}
	if(($satuan== "cg") && ($konversi=="dg")){ $hasil = ($number*0.1);}
	if(($satuan== "mg") && ($konversi=="dg")){ $hasil = ($number*0.01);}

	//konversi ke centigram
	if(($satuan== "kg") && ($konversi=="cg")){ $hasil = ($number*100000);}
	if(($satuan== "ton") && ($konversi=="cg")){ $hasil = ($number*100000000);}
	if(($satuan== "g") && ($konversi=="cg")){ $hasil = ($number*100);}
	if(($satuan== "dg") && ($konversi=="cg")){ $hasil = ($number*10);}
	if(($satuan== "mg") && ($konversi=="cg")){ $hasil = ($number*0.1);}

	//konversi ke miligram
	if(($satuan== "kg") && ($konversi=="mg")){ $hasil = ($number*1000000);}
	if(($satuan== "ton") && ($konversi=="mg")){ $hasil = ($number*1000000000);}
	if(($satuan== "g") && ($konversi=="mg")){ $hasil = ($number*1000);}
	if(($satuan== "dg") && ($konversi=="mg")){ $hasil = ($number*100);}
	if(($satuan== "cg") && ($konversi=="mg")){ $hasil = ($number*10);}

}
?>


<form action="" method="post">
	<input type="number" name="angka" value="<?php if(isset($number)) echo $number;?>" required>
	<select name="satuan">
		<option value="kg" <?php if(isset($satuan) && ($satuan=="kg")) echo "selected"; ?> >kg</option>
		<option value="g" <?php if(isset($satuan) && ($satuan=="g")) echo "selected"; ?> >g</option>
		<option value="ton" <?php if(isset($satuan) && ($satuan=="ton")) echo "selected"; ?> >ton</option>
		<option value="dg" <?php if(isset($satuan) && ($satuan=="dg")) echo "selected"; ?> >dg</option>
		<option value="cg" <?php if(isset($satuan) && ($satuan=="cg")) echo "selected"; ?> >cg</option>
		<option value="mg" <?php if(isset($satuan) && ($satuan=="mg")) echo "selected"; ?> >mg</option>
	</select>
=
	<input type="number" name="hasil" value="<?php echo $hasil ?>">
	<select name="konversi">
		<option value="ton" <?php if(isset($konversi) && ($konversi=="ton")) echo "selected"; ?> >ton</option>
		<option value="kg" <?php if(isset($konversi) && ($konversi=="kg")) echo "selected"; ?> >kg</option>
		<option value="g" <?php if(isset($konversi) && ($konversi=="g")) echo "selected"; ?> >g</option>
		<option value="dg" <?php if(isset($konversi) && ($konversi=="dg")) echo "selected"; ?> >dg</option>
		<option value="cg" <?php if(isset($konversi) && ($konversi=="cg")) echo "selected"; ?> >dg</option>
		<option value="mg" <?php if(isset($konversi) && ($konversi=="mg")) echo "selected"; ?> >dg</option>
		
	</select>
	<button name="go">GO</button>
</form>

<p>
<?php

include("menu.php");
?>