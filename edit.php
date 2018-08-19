<?php include ("koneksi.php")?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="desain.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Web Perikanan</h1>
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a href="home.html">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="jenis_gurami.html">Jenis Gurami</a>
                        </li>
                        <li class="dropdown">
                            <a href="olahan.html">Olahan Gurami</a>
                        </li>                   
                        <li class="dropdown">
                            <a href="budidaya.html">Budidaya Gurami</a>
                                <div class="dropdown-content">
                                    <a href="perawatan.html">Perawatan Ikan</a>
                                </div>
                        </li>
                        <li class="dropdown">
                            <a href="pakan.html">Jenis Pakan</a>
                        </li>
                        <li class="dropdown">
                            <a href="perhitungan.html">Perhitungan</a>
                        </li>
                        <li class="dropdown">
                            <a href="pemasaran.html">Pemasaran</a>
                        </li>
                        <li>
                            <form style="margin: 0px 20px" >
                                <input type="text" name="Search" placeholder="Search...">
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>

            <form method="POST"  action="edit_aksi.php"> 
                <Table width="50%"callspacing="0" collpadding="0" align="center">
                    <?php 
                        include "koneksi.php";
                        $id_ikan = $_GET['id_ikan'];
                        $tampil="select * from produksi where id_ikan = '$id_ikan'";
                        $hasil=mysqli_query($koneksi,$tampil);
                        while($data = mysqli_fetch_array($hasil)){
                    ?>
                    <Th colspan="5" align="Center"><h2 style="background-color:PowderBlue" align="center">Input Data Olahan Gurame</h2></Th>
                       <tr align="lift">
                            <td>ID ikan</td>
                            <td><input type="text1" name="id_olahan" value="<?php echo $data['id_ikan']; ?>" style="margin-left:40px" disabled></td>                   
                        </tr>   
                        <tr align="lift">
                            <td>jenis ikan</td>
                            <td><input type="text1" name="nama_olahan" value="<?php echo $data['jenis_ikan']; ?>" style="margin-left:40px"></td>                 
                        </tr>   
                        <tr align="lift">
                            <td>harga jual</td>
                            <td><input type="text1" name="jenis_olahan" value="<?php echo $data['harga_jual']; ?>" style="margin-left:40px"></td>                    
                        </tr>   
                        <tr align="lift">
                            <td>Harga beli</td>
                            <td><input type="text1" name="harga" value="<?php echo $data['harga_beli']; ?>" style="margin-left:40px"></td>                   
                        </tr>   
                       <tr align="lift">
                            <td></td>
                            <td><input type="submit" value="Simpan" name="simpan"></td>                 
                        </tr>
                    <?php 
                        } 
                    ?>               
                </Table>
            </form>
            <Table width="50%"callspacing="0" collpadding="0" align="center">
                <tr align="lift">
                    <td>
                        <?php 
                        if(isset($_GET['pesan'])){
                            $pesan = $_GET['pesan'];
                            if($pesan == "input"){
                                echo "Data berhasil di input.";
                            }else if($pesan == "update"){
                                echo "Data berhasil di update.";
                            }else if($pesan == "hapus"){
                                echo "Data berhasil di hapus.";
                            }
                        }
                        ?>
                    </td>                   
                </tr>
            </Table>
           
            <Table width="50%"callspacing="0" collpadding="0" align="center">
                <Th colspan="6" align="Center"><h2 style="background-color:PowderBlue" align="center">Data Olahan Gurame</h2></Th>
                    <tr>
                        <th>ID ikan</th>
                        <th>jenis ikan</th>
                        <th>harga jual</th>
                        <th>Harga beli</th>   
                    </tr>

                    <?php 
                        include "koneksi.php";
                        $tampil="select * from produksi";
                        $hasil=mysqli_query($koneksi,$tampil);
                        while($data = mysqli_fetch_array($hasil)){
                    ?>
                
                    <tr>
                        <td><?php echo $data['id_ikan']; ?></td>
                        <td><?php echo $data['jenis_ikan']; ?></td>
                        <td><?php echo $data['harga_jual']; ?></td>
                        <td><?php echo $data['harga_beli']; ?></td>
                      
                        <td>
                            <a class="edit" href="edit.php?id_ikan=<?php echo $data['id_ikan']; ?>">Edit</a> |
                            <a class="hapus" href="hapus.php?id_ikan=<?php echo $data['id_ikan']; ?>">Hapus</a>                   
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>        
            </Table>
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
