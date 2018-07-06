<?php
    error_reporting(0) ; 
include 'koneksi.php'
?>


<html lang="en"> 
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="icon" type="images/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  
	<link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="utf-8">
      <title> Daftar Hotel</title>
	  <style type="text/css">
		form {
			width:250px;
			margin:50px auto;
		}
		.search {
			padding:8px 15px;
			background:rgba(50, 50, 50, 0.2);
			border:0px solid #dbdbdb;
		}
		
		.button:hover  {
			background-color:#fafafa;
			color:#207cca;
		}
				  
		::-webkit-input-placeholder { /* For WebKit browsers */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		::-moz-placeholder { /* For Mozilla Firefox 19+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-ms-input-placeholder { /* For Internet Explorer 10+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}	  
	</style>
	
   </head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
<form action = "" method = "POST" >
    <input class="search" name = "query" type="text" placeholder="Cari Bedasarkan Bintang.." required>
	
</form> 

<div class="container">
	<h1>Daftar Hotel</h1>
	<table class="highlighted-column">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Bintang</th>
				<th>ID</th>
			</tr>
		</thead>

    <?php
    $no = 1 ; 
    $query = $_POST ['query']; 
    if ($query != '') {
        $select = mysqli_query ($conn, "SELECT * FROM tb_hotel WHERE Bintang LIKE '".$query."' "); 
    }

    else {
        $select = mysqli_query ($conn, "SELECT * FROM tb_hotel");    
    }
        if (mysqli_num_rows($select)) {
        while ($baris = mysqli_fetch_array($select)) {
?>


<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $baris['Nama'] ?> </td>
<td> <?php echo $baris['Alamat'] ?> </td>
<td> <?php echo $baris['Bintang'] ?> </td>
<td> <?php echo $baris['ID'] ?> </td>
</tr>
     <?php }} else{
        echo '<tr> <td colspan = "5"> tidak ada data </td></tr>' ; 
     } ?>


    


    </table>
    <BR><BR><BR>
    <a href="https://kuyhotel.000webhostapp.com/20180531/index.php"> <button type="button" class="btn btn-default">Refresh</button>
    <a href="https://kuyhotel.000webhostapp.com/20180531/index.html"><button type="button" class="btn btn-default">Home</button>
    
    
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html> 