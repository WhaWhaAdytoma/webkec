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
    width: 20%;
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
    width: 20%;
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

<!-- ================= -->
<body>

<nav class="navbar" style="background-color: #1f7a1f"> <!-- warna navbar -->
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#ffffff">Kampoong English Course</a>
    </div>
   <!--  <ul class="nav navbar-nav" >
      <li class="active"><a href="#" style="color:#ffffff">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul> -->
    <ul class="nav navbar-nav navbar-right" style="color:#ffffff">
      <li><a href="#" style="color:#ffffff"><span class="glyphicon glyphicon-user" ></span> Akun Saya</a></li>
      <li><a href="#" style="color:#ffffff"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<!-- body -->
<div class="row">
	  <div class="col-sm-3">
	    <!-- sidebar -->
			<div class="sidenav1">
				<h3 style="font-weight: bold; text-align: center; color: #ffffff">Menu Utama </h3>
			</div>

			<div class="sidenav">
			 
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 200px" >Admin</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 200px" >Guru</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 200px" >Siswa</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 200px" >Kategori Program</button>  </a>  
			  <a href=""><button type="button" class="btn btn-default active" style="background: #29a329; color: #ffffff; width: 200px" >Materi</button>  </a>  
			</div>
	  </div>
	  <div class="col-sm-9"> 	
			<!-- container -->

			<div class="container">
				<div class="jumbotron" style="width: 80%">
				  <h3 style="font-weight: bold; ">Daftar Admin</h3>
				   <button type="button" class="btn btn-primary">+Tambah Admin</button>
				</div>
			</div>
	  </div>
 </div>


</body>
</html>
