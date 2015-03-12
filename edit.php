<?php
include("conn.php");

$id = $_GET['id'];
$query = "select * from data where id ='$id'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);

if(isset($_POST['update'])){
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$gender = $_POST['gender'];
	$tgl = $_POST['tgl'];
	$bln = $_POST['bln'];
	$thn = $_POST['thn'];
	$tgllhr = $_POST['tgllhr'];

	$update = "update data set nama='$nama', telp='$telp', gender='$gender', tgllhr='$tgllhr' where id='$id'";

	$proses = mysql_query($update);
	if($proses){
		header("location:3.php");
	} else {
		echo "proses gagal";
	}
}
?>

<form name="data" method="post">
	Nama :<br />
	<input type="text" name="nama" placeholder="Nama" value="<?php echo $data['nama']?>" required><br />
	<input type="text" name="telp" placeholder="No. Telp" value="<?php echo $data['telp']?>" required><br />
	Gender :<br />
	<label><input type="radio" name="gender" value="L" <?php if($data['gender']=='L') echo "checked" ?> >Laki-laki</label>
	<label><input type="radio" name="gender" value="P" <?php if($data['gender']=='P') echo "checked" ?> >Perempuan</label><br />
	Tanggal Lahir :<br />
	<input type="date" name="tgllhr" value="<?php echo $data['tgllhr']?>"><br />
	<button name="update">Simpan</button>
</form>