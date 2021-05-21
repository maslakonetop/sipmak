<?php
    include("layout/header.php");
    include("data/config.php");

    function tanggal_indo($tanggal)
    {
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split 	  = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        return $tgl_indo;
    }
    if (isset($_GET['id'])) {
        // ambil nilai id dari url dan disimpan dalam variabel $id
        $kodebuku = ($_GET["id"]);
    
        // menampilkan data dari database yang mempunyai id=$id
        $query = "SELECT * FROM data_ijin_makam WHERE id='$kodebuku'";
        $result = mysqli_query($koneksi, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if(!$result){
          die ("Query Error: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($result);
        $tanggal = date('Y-m-d', strtotime($data['ijin_berlaku']));
          // apabila data tidak ada pada database maka akan dijalankan perintah ini
           if (!count($data)) {
              echo "<script>alert('Data tidak ditemukan pada database');window.location='databaru.php';</script>";
           }
    } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='print.php';</script>";
    }  
?>
</head>

<body>
    <div class="container-fluid"><br/><br/><br/><br/>
        <form method="POST" action="data/proses_edit_pemutihan.php">
        <section class="base">
        <h2 class="title text-center">Form Permohonan Pemutihan Ijin Makam A/N <?php echo $data['nama_pemohon']?> (<?php echo $data['nobuku_plat']?>)</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                    <div class="form-group row">
                            <label class="text-dark col-sm-3 col-form-label">No ID</label>
                            <div class="col-sm-3">
                                <input type="text" name="id" value="<?php echo $data['id']; ?>" readonly />
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                            </div>
                            <label class="text-dark col-sm-3 col-form-label">No Buku / Plat</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="nobuku_plat" value="<?php echo $data['nobuku_plat']; ?>" readonly/>
                                <input type="hidden" class="form-control" name="nobuku_plat" value="<?php echo $data['nobuku_plat']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Nama Jenazah</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_jenazah" class="form-control" id="lname" required="" value="<?php echo $data['nama_jenazah']; ?>" readonly>
                                <input type="hidden" name="nama_jenazah" class="form-control" id="lname" required="" value="<?php echo $data['nama_jenazah']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Lokasi Makam</label>
                        
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="lokasi_makam" value="<?php echo $data['lokasi_makam']; ?>" readonly/>
                                <input type="hidden" class="form-control" name="lokasi_makam" value="<?php echo $data['lokasi_makam']; ?>" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Biaya</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="biaya" required="" value="Rp <?php echo number_format($data['biaya'],0,',','.'); ?>" readonly/>
                                <input type="hidden" class="form-control" name="biaya" required="" value="Rp <?php echo number_format($data['biaya'],0,',','.'); ?>" />    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Ijin Berlaku Lama</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="ijin_berlaku" required=""value="<?php echo tanggal_indo($tanggal, true) ?>" readonly />                                    
                                </div>                 
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Ijin Berlaku Baru</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="ijin_berlaku1" required=""value="<?php echo date('d F Y', strtotime('+3 years')); ?>" readonly />
                                <input type="hidden" class="form-control" name="ijin_berlaku" required=""value="<?php echo date('Y-m-d')?>" />
                                <input type="hidden" class="form-control" name="ijin_akhir" required=""value="<?php echo date('Y-m-d', strtotime('+3 years')); ?>" />
                                </div>                 
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Biaya</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="biaya" required=""value="<?php echo $data['biaya'];?>" readonly />
                                    <input type="hidden" class="form-control" name="biaya" required=""value="<?php echo $data['biaya'];?>"  />                                    
                                </div>                 
                        </div>
                    </div>                       
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_pemohon" class="form-control" id="fname" value="<?php echo $data['nama_pemohon']; ?>" readonly>
                                <input type="hidden" name="nama_pemohon" class="form-control" id="fname" value="<?php echo $data['nama_pemohon']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Nomor Induk Kependudukan (NIK)</label>
                            <div class="col-sm-6">
                                <input type="text" name="nik" class="form-control" id="fname" value="<?php echo $data['NIK']; ?>" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-6 col-form-label">No HP Pemohon</label>
                            <div class="col-sm-6">
                                <input type="number" name="nohp_pemohon" class="form-control" required="" id="lname" value="<?php echo $data['nohp_pemohon'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usia_jenazah" class="col-sm-6 col-form-label">Usia Jenazah (Tahun)</label>
                            <div class="col-sm-3">
                                <input type="text" name="usia_jenazah" class="form-control" id="lname" value="<?php echo $data['usia_jenazah']; ?>" readonly>
                                <input type="hidden" name="usia_jenazah" class="form-control" id="lname" value="<?php echo $data['usia_jenazah']; ?>">
                            </div>
                            <div class="col-sm-3">
                                <label class="col-sm-3 col-form-label">Tahun</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Status Bayar</label>
                            <div class="col-sm-6">
                                <input type="text" name="status_bayar" class="form-control" id="fname" value="BELUM BAYAR" readonly>
                                <input type="hidden" name="status_bayar" class="form-control" id="fname" value="BELUM BAYAR">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-6 col-form-label">Metode Pembayaran</label>
                            
                                <div class="col-sm-6">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="metode_pembayaran" required="">
                                        <option disabled selected>Pilih...</option>
                                        <?php
                                        $query = "SELECT metode_bayar FROM metode_bayar";
                                        $result = mysqli_query($koneksi, $query);                                
                                            while(list($category) = mysqli_fetch_row($result)){
                                            $option1 = '<option value="'.$category.'">'.$category.'</option>';
                                            echo ($option1);
                                            }
                                        ?>
                                        </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit"><i class="fas fa-save"></i> Simpan</button>
                            </div>                            
                    </div><!--right side -->
                </div><!-- form for teacher/student-->
            </section>
        </form>
    </div>
<?php
    include("layout/footer.php");
?>
</body>
