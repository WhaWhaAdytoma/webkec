<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
<h1>Halaman Utama</h1>
<h1>Selamat Datang di 
	<?php echo $nama ?>, Alamat
<?php echo $alamat ?></h1>
<h2><?php echo $identitas ?></h2>
<a href="<?php echo base_url() ?>index.php/login/logout">Logout</a><br><br>





<?php
echo form_open('dashboard/input');
$att_kode = array('name' => 'kode', 'placeholder'=>'Masukan Kode',
                 'type' => 'text', 'style'=>'width:250px');
echo form_input($att_kode);echo "<br>";

$att_nama_mk = array('name' => 'nama_mk', 'placeholder'=>'Masukan Nama Mata Kuliah',
                 'type' => 'text', 'style'=>'width:250px');
echo form_input($att_nama_mk);echo "<br>";

$att_semester = array('name' => 'semester', 'placeholder'=>'Masukan Semester',
                 'type' => 'text', 'style'=>'width:250px');
echo form_input($att_semester);echo "<br>";

$att_sks = array('name' => 'sks', 'placeholder'=>'Masukan Jumlah SKS',
                 'type' => 'text', 'style'=>'width:250px');
echo form_input($att_sks);echo "<br>";

$att_nilai_minimal_lulus = array('name' => 'nilai_minimal_lulus', 'placeholder'=>'Masukan Nilai Minimal Lulus',
                 'type' => 'text', 'style'=>'width:250px');
echo form_input($att_nilai_minimal_lulus);echo "<br>";

$att_submit = array('type' => 'submit', 'value'=>'simpan');
echo form_input($att_submit);
?>

<!--  kode	nama_mk	semester	sks	nilai_minimal_lulus-->
<table border="1">
	<tr>
		<th>No</th><th>Kode</th><th>Nama Mata Kuliah</th><th>Semester</th><th>SKS</th><th>Nilai Minimal Lulus</th><th>Action</th>
	</tr>
<?php 
$no=1;
foreach ($matakuliah->result() as $data) {
	echo "<tr><td>$no</td>
	          <td>$data->kode</td>
	          <td>$data->nama_mk</td>
	          <td>$data->semester</td>
	          <td>$data->sks</td>
	          <td>$data->nilai_minimal_lulus</td>
	          <td>
	            <a href='".base_url()."index.php/dashboard/edit/$data->kode'>Edit</a>|
	            <a href='".base_url()."index.php/dashboard/hapus/$data->kode'>Hapus</a>
	          </td>
	       </tr>";
	$no++;
}
 ?>
 </table>
</body>
</html>