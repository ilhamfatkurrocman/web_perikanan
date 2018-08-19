<?php include 'koneksi.php';?>

<html>
	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="desain.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sufee Admin - HTML5 Admin Template</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Web Perikanan</h1>
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a href="Admin.php">Data Transaksi</a>
                        </li>
                        <li class="dropdown">
                            <a href="datagurame.php">Data Gurame</a>
                        </li>
                        <li class="dropdown">
                            <a href="datapetani.php">Data Petani</a>
                        </li>
                        <li class="dropdown">
                            <a href="dataefisiensipakan.php">Data Efisiensi Pakan</a>
                        </li>   
                        <li class="dropdown">
                            <a href="datapendapatan.php">Data Pendapatan</a>
                        </li>               
	                    <li class="dropdown">
                            <a href="index.html">Logout</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <br>

			<div class="row">				
				<div class="col-lg-5">
					<div class="col-lg-12">
						<div class="card">
							<div class="card">
								<div class="card-header">
									<strong>INPUT DATA PENDAPATAN</strong>
								</div>
								<div class="card-body card-block">
									<form method="post" action="simpanpendapatan.php" class="form-horizontal">
										<div class="row form-group">
											<div class="col col-sm-5"><label class=" form-control-label">ID Pendapatan</label></div>
											<div class="col col-sm-5"><input type="text1" name="id_pendapatan" placeholder="Masukkan ID" class="form-control"></div>

										</div>
										<div class="row form-group">
											<div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Pendapatan Budidaya</label></div>
											<div class="col col-sm-5"><input type="text1" id="input-normal" name="pendapatan" placeholder="Masukkan Nominal" class="form-control"></div>
										</div>
										<div class="row form-group">
											<div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Modal</label></div>
											<div class="col col-sm-5"><input type="text1" id="input-normal" name="modal" placeholder="Masukkan Nominal" class="form-control"></div>
										</div>
                                            <div class="row form-group">
                                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Bulan</label></div>
                                            <div class="col col-sm-5"><input type="text1" id="input-normal" name="bulan" placeholder="Masukkan Nominal" class="form-control"></div>
                                        </div>
										<div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm" name="aksi" value="simpan">
                                                <i class="fa fa-dot-circle-o" onclick=""></i> simpan
                                            </button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="col-lg-13">
						<div class="card">
							<div class="card">
								<div class="card-header">
									<strong>DATA PENDAPATAN</strong>
								</div>
								<div class="card-body card-block">
									<table class="table">
										<thead>
											<tr>
												<th scope="col"><center>No</center></th>
												<th scope="col"><center>ID</center></th>
												<th scope="col"><center>Pendapatan Budidaya</center></th>
												<th scope="col"><center>Modal</center></th>
                                                <th scope="col"><center>Bulan</center></th>
												<th scope="col"><center>Keuntungan</center></th>
												<th scope="col"><center>Pajak</center></th>
												<th scope="col"><center>Aksi</center></th>
		
											</tr>
										</thead>

    									<tbody>
    										<?php
    										  $tampil="select * from pendapatan";
    										  $hasil=mysqli_query($connect,$tampil);
    											$no=1;
    											while($data = mysqli_fetch_array($hasil)){
    										?>
											<tr>
												<td scope="col"><center><?php echo $no;?></center></td>
												<td scope="col"><center><?php echo $data['id_pendapatan'];?></center></td>
												<td scope="col"><center><?php echo $data['pendapatan'];?></center></td>
												<td scope="col"><center><?php echo $data['modal'];?></center></td>
                                                <td scope="col"><center><?php echo $data['bulan'];?></center></td>
												<td scope="col"><center><?php echo $data['tot_untung'];?></center></td>
												<td scope="col"><center><?php echo $data['pajak'];?></center></td>
												<td> 
                                                    <a href="updatePENDAPATAN.php?kode=<?php echo $data['id_pendapatan'];?>" <!--Pakai tanda ? karena membawa parameter-->
                                                        <button type="submit" class="btn btn-primary btn-sm" name="aksi">
                                                            <i class="fa fa-dot-circle-o"></i> Edit
                                                        </button>
                                                    </a>
                                                    <a href="hapusdatapendapatan.php?id_pendapatan=<?php echo $data['id_pendapatan'];?>" <!--Pakai tanda ? karena membawa parameter-->
                                                        <button type="submit" class="btn btn-danger btn-sm" name="id_pendapatan">
                                                            <i class="fa fa-ban"></i> Hapus
                                                        </button>
                                                    </a>
                                                </td>
											</tr>
    										<?php $no++; 
                                                }
                                            ?>
    									</tbody>
    								</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <br>

            <footer class="footer1">
                <Table width="100%" callspacing="0" collpadding="0">
                    <tr align="Left">
                        <td style="width: 50%">
                            <h2 style="color:white;">Contact Person</h2>
                        </td>
                        <td style="width: 30%">
                            <h2 style="color:white;">Social Media</h2>
                        </td>
                    </tr>
                    <tr align="Left">
                        <td style="width: 75% color:white;">
                            <p style="color:white;"><br>www.budidayagurami.com<br> Kota Surabaya <br> Jawa Timur<br> Tlp / WA : 085 7071 41555</p>
                        </td>
                        <td style="width: 30%">
                            <Table width="40%"> 
                                <Tr> 
                                    <Td Rowspan ="1"><img src="gambar/fb.png" alt="fb" border="1px" width="33px"> </Td> 
                                    <Td Colspan ="2" style="color:white;"> http://www.facebook.com/budidayagurame/ </Td> 
                                </Tr> 
                                <Tr> 
                                    <Td Rowspan ="1">   <img src="gambar/tw.png" alt="tw" border="1px" width="33px"></Td> 
                                    <Td Colspan ="2" style="color:white;"> http://www.twitter.com/budidayagurame/ </Td> 
                                </Tr>
                                <Tr> 
                                    <Td Rowspan ="1"><img src="gambar/ig.png" alt="id" border="1px" width="33px"></Td> 
                                    <Td Colspan ="2" style="color:white;"> http://www.instagram.com/budidayagurame/ </Td> 
                                </Tr> 
                            </Table>
                        </td>
                    </tr>
                </Table>
            </footer>
            <footer>
                &copy; 2018 Pembudidayaan Gurami
            </footer>
        </div><!-- .wrapper -->
    </body>
</html>
