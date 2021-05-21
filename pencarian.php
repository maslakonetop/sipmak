<?php
  include("layout/header.php");
  include "data/config.php";
?>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container-fluid"><br/><br/><br/><br/><br/>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered datatab" style="width: 75%;">
            <thead>
            <tr>
                <th scope="col" class="text-center bg-warning">No ID</th>
                <th scope="col" class="text-center bg-warning">No Buku / Plat</th>
                <th scope="col" class="text-center bg-warning">Nama Pemohon</th>
                <th scope="col" class="text-center bg-warning">NIK</th>
                <th scope="col" class="text-center bg-warning">Alamat Pemohon</th>
                <th scope="col" class="text-center bg-warning">NO HP Pemohon</th>
                <th scope="col" class="text-center bg-warning">Nama Jenazah</th>
                <th scope="col" class="text-center bg-warning">Usia Jenazah</th>
                <th scope="col" class="text-center bg-warning">Lokasi Makam</th>
                <th scope="col" class="text-center bg-warning">Ijin s/d</th>
                <th scope="col" class="text-center bg-warning">Biaya</th>
                <th scope="col" class="text-center bg-warning">Status Bayar</th>
                <th scope="col" class="text-center bg-warning">Keterangan</th>
                <th scope="col" class="text-center bg-warning">Status Ijin</th>
                <th scope="col" class="text-center bg-warning">Edit</th>
            </tr>
            </thead>  
            <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM data_ijin_makam ORDER BY id ASC");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) 
                {
            ?>
                <tr>
                <td class="text-center"><?php echo $data['id']; ?></td>
                    <td class="text-center"><?php echo $data['nobuku_plat']; ?></td>
                    <td class="text-center"><?php echo $data['nama_pemohon']; ?></td>
                    <td class="text-center"><?php echo $data['NIK']; ?></td>
                    <td class="text-center"><?php echo $data['alamat_pemohon']; ?></td>
                    <td class="text-center"><?php echo $data['nohp_pemohon']; ?></td>
                    <td class="text-center"><?php echo $data['nama_jenazah']; ?></td>
                    <td class="text-center"><?php echo $data['usia_jenazah']; ?></td>
                    <td class="text-center"><?php echo $data['lokasi_makam']; ?></td>
                    <td class="text-center"><?php echo $data['ijin_akhir']; ?></td>
                    <td class="text-center"><?php echo $data['biaya']; ?></td>
                    <td class="text-center"><?php echo $data['status_bayar']; ?></td>
                    <td class="text-center"><?php echo $data['keterangan']; ?></td>
                    <td class="text-center"><?php echo $data['status_ijin']; ?></td>
                    <td><a href="bayar.php?id=<?php echo $data['id'];?>"><i class="fas fa-hand-holding-usd fa-3x"></i></a></td>
                </tr>
                <?php               
                } 
                ?>
                </tbody>
                <script>
                $(document).ready(function() {
                    $('.datatab').DataTable();
                } );
                </script>
            </table>
        </div>
    
    </div>   
                
  </div><br/><br/><br/><br/> 
</body>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<?php
    include("layout/footer.php");
?>
  
</html>