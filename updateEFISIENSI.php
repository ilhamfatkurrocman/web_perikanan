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
                            <a href="home.html">Logout</a>
                        </li>
                    </ul>
                </nav>

            </header>

            <br>

 			<?php
		      $query = mysqli_query($connect, "select * from efisiensi_pakan where id_trans = '".$_GET['kode']."';");
		      $data = mysqli_fetch_array($query);
		    ?> 
						<div class="row">				
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="card">
							<div class="card">
								<div class="card-header">
									<strong>Input Data Efisiensi Pakan</strong>
								</div>
								<div class="card-body card-block">
									<form method="post" action="updatesimpanefisiensi.php" class="form-horizontal">
 										<div class="col-6">
                                            <div class="form-group">
                         						  <label for="input-normal" class="form-control-label mb-1">ID Transaksi</label>
                                                  <input type="text1" name="id_trans" placeholder="Masukkan ID Transaksi" class="form-control" value="<?php echo $data['id_trans']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                          	 	<label for="input-normal" class=" form-control-label mb-1">Bobot Ikan Pada Waktu Akhir (Wt)</label>
                                              	<input type="number" id="input-normal" name="Wt" placeholder="(g)" class="form-control" value="<?php echo $data['Wt']; ?>">
                                            </div>
                                        </div>
                                       	<div class="col-6">
                                        	<div class="form-group">
                                          		<label for="input-normal" class="form-control-label mb-1">ID Ikan</label>
                                          		<input type="text1" id="input-normal" name="id_ikan" placeholder="Masukkan ID Ikan" class="form-control" value="<?php echo $data['id_ikan']; ?>">
                                          	</div>
                                      	</div>
                                        <div class="col-6">
                                            <div class="form-group">
                                               	<label for="input-normal" class=" form-control-label mb-1">Bobot Ikan Pada Waktu Awal (Wo)</label>
                                              	<input type="number" id="input-normal" name="W0" placeholder="(g)" class="form-control" value="<?php echo $data['W0']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                              	<label for="input-normal" class=" form-control-label mb-1">ID Jenis</label>
                								<input type="text1" id="input-normal" name="id_jenis" placeholder="Masukkan ID Jenis" class="form-control" value="<?php echo $data['id_jenis']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                           		<label for="input-normal" class=" form-control-label mb-1">Jumlah Ikan Yang Mati Selama Penelitian (D)</label>
                                            	<input type="number" id="input-normal" name="D" placeholder="(Ekor)" class="form-control" value="<?php echo $data['D']; ?>">
                                            </div>                                            
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                              	<label for="input-normal" class=" form-control-label mb-1">ID Pakan</label>
                                          		<input type="text1" id="input-normal" name="id_pakan" placeholder="" class="form-control" value="<?php echo $data['id_pakan']; ?>">
                                            </div>
                                       	</div>
                                        <div class="col-6">
                                            <div class="form-group">
                               	       			<label for="input-normal" class=" form-control-label mb-1">Bobot Pakan Yang Diberikan (F)</label>
                                     			<input type="number" id="input-normal" name="F" placeholder="(g)" class="form-control" value="<?php echo $data['F']; ?>">
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                              	<label for="input-normal" class=" form-control-label mb-1">Bulan</label>
                                              	<input type="text1" id="input-normal" name="bulan" placeholder="" class="form-control" value="<?php echo $data['bulan']; ?>">
                                            </div>
                                        </div>
                          
                                </div>

										<div class="card-footer" style="text-align: center;">
											<a href="dataefisiensipakan.php?kode=<?php echo $row['id_trans'];?>" <!--Pakai tanda ? karena membawa parameter-->
											<button type="submit" class="btn btn-primary btn-sm" name="aksi" value="simpan">
												<i class="fa fa-dot-circle-o"></i> simpan
											</button>
                                        </a>
											
										</div>
									</form>

					</div>
				</div>
					<div class="col-md-12">
					<div class="col-md-12">
						<div class="card">
							<div class="card">
								<div class="card-header">
									<strong>Tabel Efisiensi Pakan</strong>
								</div>
								<div class="card-body card-block">
									<table class="table">
										<thead>
											<tr>
												<th scope="col"><center>No</center></th>
												<th scope="col"><center>ID Transaksi</center></th>
												<th scope="col"><center>ID Ikan</center></th>
												<th scope="col"><center>ID Jenis</center></th>
												<th scope="col"><center>ID Pakan</center></th>
												<th scope="col"><center>Bulan</center></th>
												<th scope="col"><center>Wt</center></th>
												<th scope="col"><center>W0</center></th>
												<th scope="col"><center>D</center></th>
												<th scope="col"><center>F</center></th>
												<th scope="col"><center>E</center></th>
                                                <th scope="col"><center>Aksi</center></th>
		
											</tr>
										</thead>

									<tbody>
										<?php
										  $tampil="select * from efisiensi_pakan";
										  $hasil=mysqli_query($connect,$tampil);
											$no=1;
											while($data = mysqli_fetch_array($hasil)){
										?>
											<tr>
												<td scope="col"><center><?php echo $no;?></center></td>
												<td scope="col"><center><?php echo $data['id_trans'];?></center></td>
												<td scope="col"><center><?php echo $data['id_ikan'];?></center></td>
												<td scope="col"><center><?php echo $data['id_jenis'];?></center></td>
												<td scope="col"><center><?php echo $data['id_pakan'];?></center></td>
												<td scope="col"><center><?php echo $data['bulan'];?></center></td>
												<td scope="col"><center><?php echo $data['Wt'];?></center></td>
												<td scope="col"><center><?php echo $data['W0'];?></center></td>
												<td scope="col"><center><?php echo $data['D'];?></center></td>
												<td scope="col"><center><?php echo $data['F'];?></center></td>
												<td scope="col"><center><?php echo $data['E'];?></center></td>

                                                    <td><a href="updateEFISISENI.php?kode=<?php echo $data['id_trans'];?>" <!--Pakai tanda ? karena membawa parameter-->
                                                    <button type="submit" class="btn btn-primary btn-sm" name="aksi" value="edit">
                                                    <i class="fa fa-dot-circle-o"></i> Edit
                                                    </button>
                                                </a>

                                                   <a href="hapusdataefisiensi.php?id_trans=<?php echo $data['id_trans'];?>" <!--Pakai tanda ? karena membawa parameter-->
                                                    <button type="submit" class="btn btn-danger btn-sm" name="id_trans">
                                                         <i class="fa fa-ban"></i> Hapus
                                                     </button>
                                                      </a>
                                                 </td>

											</tr>
										<?php $no++; }?>
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