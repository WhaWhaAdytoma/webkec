<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
/*body {
    font-family: "Lato", sans-serif;

}*/


.sidenav1 { /*kuning*/
    width: 200px;
    height: 270px;
    position: fixed;
    z-index: 1;
    top: 90px;
    left: 30px;
    background: #e6b800;/*warna sidebar*/
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav1 a { /*kuning*/
    padding: 6px 8px 6px 30px;
    text-decoration: none;
    font-size: 18px;
    color: #ffffff;
    display: block;
}

.sidenav1 a:hover {/*kuning*/
    color: #ffffff;
}

.sidenav { /*hijau*/
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 150px;
    left: 50px;
    background: #29a329;/*warna sidebar*/
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 30px;
    text-decoration: none;
    font-size: 18px;
    color: #ffffff;
    display: block;
}


.sidenav a:hover {
    color: #ffffff;
}



@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .sidenav1 {padding-top: 15px;}
    .sidenav1 a {font-size: 18px;}
}
</style>
</head>


<body>
<!-- ==========navbar======= -->
<nav class="navbar" style="background-color: #1f7a1f"> <!-- warna navbar -->
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#ffffff">Kampoong English Course</a>
    </div>
    <ul class="nav navbar-nav navbar-right" style="color:#ffffff">
      <li><a href="#" style="color:#ffffff"><span class="glyphicon glyphicon-user" ></span> Akun Saya</a></li>

      <li><a href="<?php echo base_url() ?>index.php/login/logout" style="color:#ffffff"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!-- ====== -->

<!-- body -->
<div class="container">
<div class="row">
	  <div class="col-sm-2">
	    <!-- sidebar -->
			<div class="sidenav1">
				<h3 style="font-weight: bold; text-align: center; color: #ffffff">Menu Utama </h3>
			</div>

			<div class="sidenav">
			 
			  <a href=""><button type="button" class="btn btn-default active" style="background: #e6b800; color: #ffffff; width: 140px" >Admin</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 140px" >Guru</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 140px" >Siswa</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 140px" >Kategori Program</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 140px" >Materi</button>  </a>  
			</div>
	  </div>

	  <div class="col-sm-10"> 	
				<div class="jumbotron" style="width: 1000px; ">
				  <h3 style="font-weight: bold; ">Daftar Admin</h3>
				   <button type="button" class="btn btn-primary" style="background: #29a329; color: #ffffff" >+Tambah Admin</button>
				   <p></p>
          
				   <div class="table table-condensed">          
					  <table class="table" border="1" style="width: 900px">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>User ID</th>
                  <th>Email</th>
					        <th>Nama</th>
					        <th>Gender</th>
					        <th>Tanggal Lahir</th>
					        <th>Kontak</th>
					        <th>Alamat</th>
					        <th>Password</th>
					        <th>Foto</th>
					        <th>Aksi</th> 
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
                  <?php
                    $no=1;
                    foreach ($admin->result() as $data) {
                      echo "<tr><td>$no</td>
                                <td>$data->id_admin</td>
                                <td>$data->email</td>
                                <td>$data->nama</td>
                                <td>$data->jk</td>
                                <td>$data->bday</td>
                                <td>$data->kontak</td>
                                <td>$data->alamat</td>
                                <td>$data->pass</td>
                                <td>$data->foto</td>
                                <td>
                                 
                                  <a href='".base_url()."index.php/dashboard/edit/$data->id_admin'>
                                  <button type='button' class='btn btn-warning' style='width:65px'>Edit </button></a>
                                  
                                  <a href='".base_url()."index.php/dashboard/hapus/$data->id_admin'>
                                   <button type='button' class='btn btn-danger'>Hapus </button></a>
                                </td>
                             </tr>";
                      $no++;
                    }
                    ?>
					      </tr>
					    </tbody>
					  </table>
				  </div>
				</div>
			</div>
	  </div>
 </div>


</body>
</html>

