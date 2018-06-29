<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<!--  kode	nama_mk	semester	sks	nilai_minimal_lulus-->

<?php
foreach ($matakuliah as $d) {
	echo form_open('dashboard/aksi_edit');
	/*$att_hidden = array('type'=>'hidden','name'=>'id' );
	echo form_input($att_hidden,$d->id);*/

	$att_hidden = array('type'=>'hidden','name'=>'kode' );
	echo form_input($att_hidden,$d->kode);

/*	$att_kode = array('name' => 'kode', 'placeholder'=>'Masukan Kode',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_kode,$d->kode);echo "<br>";*/

	$att_nama_mk = array('name' => 'nama_mk', 'placeholder'=>'Masukan Nama Mata Kuliah',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nama_mk,$d->nama_mk);echo "<br>";

	$att_semester = array('name' => 'semester', 'placeholder'=>'Masukan Semester',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_semester,$d->semester);echo "<br>";

	$att_sks = array('name' => 'sks', 'placeholder'=>'Masukan SKS',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_sks,$d->sks);echo "<br>";

	$att_nilai_minimal_lulus = array('name' => 'nilai_minimal_lulus', 'placeholder'=>'Masukan Nilai Minimal Lulus',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nilai_minimal_lulus,$d->nilai_minimal_lulus);echo "<br>";

	$att_submit = array('type' => 'submit', 'value'=>'simpan');
	echo form_input($att_submit);
}
?>
</body>
</html>