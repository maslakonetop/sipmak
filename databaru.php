<?php
    include("layout/header.php");
    include("data/config.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<style>
        body {
            background: #EECDA3;
            background: -webkit-linear-gradient(to top, #EF629F, #EECDA3);
            background: linear-gradient(to top, #EF629F, #EECDA3);
        }

        .has-error label,
        .has-error input,
        .has-error textarea {
            color: red;
            border-color: red;
        }

        .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: red;
        }
    </style>
<body>
    <div class="container"><br/><br/><br/><br/><br/><br/>
        <form method="POST" action="data/proses_tambah.php">
            <?php
                $query = "SELECT nobuku_plat FROM data_ijin_makam ORDER BY nobuku_plat DESC LIMIT 1";
                $result = mysqli_query($koneksi, $query);
                $data = mysqli_fetch_assoc($result);
            ?>
            <section class="base">
                <h2 class="text-center">Form Permohonan Ijin Baru</h2><br/><br/>
                <div class="row">
                    <div class="col-6"><!--left side -->
                        <div class="form-group row">
                            <label for="fname" class="col-sm-6 col-form-label">No Buku / Plat</label>
                            <div class="col-sm-3">
                                <input type="text"name="nobuku_plat" class="form-control" id="fname" value="<?php echo $data['nobuku_plat']+1 ?>">
                            </div>
                            <label for="fname" class="col-sm-3 col-form-label blink blink-one"> Nomor Mohon Diingat</label>    
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Nomor Induk Kependudukan (NIK)</label>
                            <div class="col-sm-6">
                                <input type="number" name="NIK" class="form-control" id="lname" minlength="16" maxlength="16" required>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Alamat Pemohon</label>
                            <div class="col-sm-6">
                                <input type="text" name="alamat_pemohon" class="form-control" id="lname" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Nama Jenazah</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_jenazah" class="form-control" id="lname" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Tanggal Wafat Jenazah</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_wft_jnz" class="form-control" id="lname" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="lname" class="col-sm-6 col-form-label">Lokasi Makam</label>
                        
                        <div class="col-sm-6">
                                <select name="lokasi_makam" class="custom-select" required="">
                                <option disabled selected>Pilih...</option>
                                <?php
                                $query = "SELECT DISTINCT(lokasi_makam) FROM data_ijin_makam";
                                $result = mysqli_query($koneksi, $query);                                
                                    while(list($category) = mysqli_fetch_row($result)){
                                    $option = '<option value="'.$category.'">'.$category.'</option>';
                                    echo ($option);
                                    }
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Harga</label>
                            <div class="col-sm-3">
                            <label for="lname" class="col-sm-3 col-form-label">Rp. </label>    
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="biaya" class="form-control" id="fname" value="">    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Ijin Berlaku</label>
                                <div class="col-sm-6">
                                    <input type="date" name="ijin_berlaku" class="form-control" id="fname" value="">
                                </div>                 
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Status Ijin</label>
                            <div class="col-sm-6">
                                <input type="text" name="status_ijin" class="form-control" id="lname" required="" value="IJIN BARU">
                            </div>                        
                        </div>
                    </div>                       
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_pemohon" class="form-control" id="fname" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-6 col-form-label">No HP Pemohon</label>
                            <div class="col-sm-6">
                                <input type="number" name="nohp_pemohon" class="form-control" id="lname" value="628XXXXXXXXX">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Tanggal Lahir Jenazah</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_lhr_jnz" class="form-control" id="lname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usia_jenazah" class="col-sm-6 col-form-label">Usia Jenazah (Tahun)</label>
                            <div class="col-sm-3">
                                <input type="text" name="usia_jenazah" class="form-control" id="lname" value="">
                            </div>
                            <div class="col-sm-3">
                                <label class="col-sm-3 col-form-label">Tahun</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-6 col-form-label">Keterangan Jenazah</label>
                            <div class="col-sm-6">
                                <select name="keterangan" class="custom-select" required="">
                                <option disabled selected>Pilih...</option>
                                <?php
                                $query = "SELECT DISTINCT keterangan FROM data_ijin_makam";
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
                            <label for="email" class="col-sm-6 col-form-label">Status Bayar</label>
                            <div class="col-sm-6">
                                <input type="text" name="status_bayar" class="form-control" id="fname" value="BELUM BAYAR">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Sampai Dengan</label>
                            <div class="col-sm-6">
                                <input type="date" name="ijin_akhir" class="form-control" id="fname" value="">
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
    </div><br/><br/>    
    <?php
        include("layout/footer.php");
    ?>
</body>