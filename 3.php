<?php

include("menu.php");
?>
<p>



<?php
require_once('conn.php');

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$gender = $_POST['gender'];
	$tgllhr = $_POST['tgllhr'];

	$query = "INSERT INTO data VALUES ('', '$nama', '$telp', '$gender', '$tgllhr')";

	$proses = mysql_query($query);

	if($proses){
		echo "Input Berhasil";
	}

}
?>

<form name="data" method="post">
	Nama :<br />
	<input type="text" name="nama" placeholder="Nama" required><br />
	<input type="text" name="telp" placeholder="No. Telp" required><br />
	Gender :<br />
	<label><input type="radio" name="gender" value="L">Laki-laki</label>
	<label><input type="radio" name="gender" value="P">Perempuan</label><br />
	Tanggal Lahir :<br />
	<input type="date" name="tgllhr" max="1995-12-31" value="<?php echo $data['tgllhr']?>"><br />
	<button name="simpan">Simpan</button>
</form>


<table border=1 cellspacing=0 cellpadding=0 width=600>
	<tr>
		<th>Nama</th>
		<th>Telp</th>
		<th>Gender</th>
		<th>Tgl. Lahir</th>
		<th>##</th>
	</tr>
<?php
$tampil = mysql_query("select * from data order by id asc");

while ($data = mysql_fetch_array($tampil)){
?>
	<tr>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['telp'];?></td>
		<th><?php echo $data['gender'];?></th>
		<td><?php echo $data['tgllhr'];?></td>
		<td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a> | <a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a></td>
	</tr>
	<?php
		}
	?>
</table>

<?php
include("menu.php");
?>