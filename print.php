<?php
    include("layout/header.php");
    include("data/config.php");
?>

<div class="container" classname="table-responsive"><br/><br/><br/><br/><br/><br/>
        <form method="GET" action="print.php" class="form-inline">
            <section class="base">
                <h2 class="text-center">Form Pencarian</h2><br/><br/>
                <div class="row">
                    <div class="col-12"><!--left side -->
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Kata Pencarian : </label><br/>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="kata_cari" autofocus="" placeholder="Cari Nama Pemohon, No Buku / Plat, Nama Jenazah" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />                                
                                <button type="submit" class="btn btn-danger mb-4"> Cari</button>
                            </div>
                        </div>
                </div>
            </section>
        </form>
        <br/><br/>
        
        <table id="example" class="table table-hover table table-striped table-bordered w-auto">
            <thread>
                <tr>
                    <th scope="col" class="text-center bg-warning">No ID</th>
                    <th scope="col" class="text-center bg-warning">No Buku / Plat</th>
                    <th scope="col" class="text-center bg-warning">Nama Pemohon</th>
                    <th scope="col" class="text-center bg-warning">Alamat Pemohon</th>
                    <th scope="col" class="text-center bg-warning">Nama Jenazah</th>
                    <th scope="col" class="text-center bg-warning">Tanggal Lahir Jenazah</th>
                    <th scope="col" class="text-center bg-warning">Tanggal Wafat Jenazah</th>
                    <th scope="col" class="text-center bg-warning">Usia Jenazah</th>
                    <th scope="col" class="text-center bg-warning">Lokasi Makam</th>
                    <th scope="col" class="text-center bg-warning">Ijin Berlaku</th>
                    <th scope="col" class="text-center bg-warning">Iji Berakhir</th>
                    <th scope="col" class="text-center bg-warning">Cetak</th>
                </tr>
            </thread>
            <tbody>
                <?php 
                //untuk meinclude kan koneksi

                    //jika kita klik cari, maka yang tampil query cari ini
                    if(isset($_GET['kata_cari'])) {
                        //menampung variabel kata_cari dari form pencarian
                        $kata_cari = $_GET['kata_cari'];

                        //jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
                        //jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
                        $query = "SELECT * FROM data_ijin_makam WHERE nobuku_plat like '%".$kata_cari."%' OR nama_pemohon like '%".$kata_cari."%' OR nama_jenazah like '%".$kata_cari."%' ORDER BY id ASC";
                    } else {
                        //jika tidak ada pencarian, default yang dijalankan query ini
                        $query = "SELECT * FROM data_ijin_makam ORDER BY id ASC";
                    }
                    

                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
        
                <tr>
                <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center"><?php echo $row['nobuku_plat']; ?></td>
                    <td class="text-center"><?php echo $row['nama_pemohon']; ?></td>
                    <td class="text-center"><?php echo $row['alamat_pemohon']; ?></td>
                    <td class="text-center"><?php echo $row['nama_jenazah']; ?></td>
                    <td class="text-center"><?php echo $row['tgl_lhr_jnz']; ?></td>
                    <td class="text-center"><?php echo $row['tgl_wft_jnz']; ?></td>
                    <td class="text-center"><?php echo $row['usia_jenazah']; ?></td>
                    <td class="text-center"><?php echo $row['lokasi_makam']; ?></td>
                    <td class="text-center"><?php echo $row['ijin_berlaku']; ?></td>
                    <td class="text-center"><?php echo $row['ijin_akhir']; ?></td>
                    <td><a href="maslakone/suratmakam.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-print fa-3x"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table><br/><br/>
    </div>
</div>