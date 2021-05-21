<?php
    include("data/config.php");
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
          // apabila data tidak ada pada database maka akan dijalankan perintah ini
           if (!count($data)) {
              echo "<script>alert('Data tidak ditemukan pada database');window.location='databaru.php';</script>";
           }
    } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='databaru.php';</script>";
    }
?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="assets/maslakone/base.min.css"/>
<link rel="stylesheet" href="assets/maslakone/fancy.min.css"/>
<link rel="stylesheet" href="assets/maslakone/main.css"/>
<script src="assets/maslakone/compatibility.min.js"></script>
<script src="assets/maslakone/theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title>Print Preview</title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="assets/maslakone/bg1.png"/>
                <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">KOP DINAS</div>
                <div class="t m0 x1 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0"><br/>SURAT IZIN</div>
                <div class="t m0 x2 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0"><br/>Nomor : <?php echo $data['nobuku_plat'];?>.1/001.25.01.2021</div>
                <div class="t m0 x3 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">TENTANG</div>
                <div class="t m0 x4 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0">PEMAKAMAN JENAZAH / PENGABUAN MAYAT</div>
                <div class="t m0 x5 h4 y6 ff2 fs2 fc0 sc0 ls0 ws0">Dasar<span class="_ _0"> </span>:</div>
                <div class="t m0 x6 h4 y7 ff2 fs2 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Peraturan <span class="_ _2"> </span>Daerah <span class="_ _2"> </span>Nomor <span class="_ _2"> </span>26 <span class="_ _2"> </span>Tahun <span class="_ _2"> </span>2003 <span class="_ _2"> </span>tentang <span class="_ _2"> </span>Ketertiban, <span class="_ _2"> </span>Kebersihan <span class="_ _2"> </span>dan </div>
                <div class="t m0 x7 h4 y8 ff2 fs2 fc0 sc0 ls0 ws0">Keindahan;</div>
                <div class="t m0 x6 h4 y9 ff2 fs2 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Peraturan <span class="_ _3"></span>Daerah <span class="_ _3"></span>Kabupaten <span class="_ _3"></span>Cilacap <span class="_ _3"></span>Nomor <span class="_ _3"></span>5 <span class="_ _3"></span>Tahun <span class="_ _3"></span>2012 <span class="_ _3"></span>tentang <span class="_ _3"></span>Pengelolaan <span class="_ _3"></span>dan </div>
                <div class="t m0 x7 h4 ya ff2 fs2 fc0 sc0 ls0 ws0">Retribusi Pelayanan Pemakaman dan Pengabuan Mayat di Kabupaten Cilacap.</div>
                <div class="t m0 x6 h4 yb ff2 fs2 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Peraturan <span class="_ _4"> </span>Daerah <span class="_ _4"> </span>Kabupaten <span class="_ _4"> </span>Cilacap <span class="_ _4"> </span>Nomor <span class="_ _4"> </span>29 <span class="_ _4"> </span>Tahun <span class="_ _4"> </span>2018 <span class="_ _4"> </span>tentang <span class="_ _4"> </span>perubahan </div>
                <div class="t m0 x7 h4 yc ff2 fs2 fc0 sc0 ls0 ws0">Peraturan Daerah <span class="_ _5"></span>Kabupaten Cilacap <span class="_ _5"></span>Nomor 91 <span class="_ _5"></span>Tahun 2016 <span class="_ _5"></span>tentang Pembentukan </div>
                <div class="t m0 x7 h4 yd ff2 fs2 fc0 sc0 ls0 ws0">Organisasi dan Tata Kerja Dinas Daerah Kabupaten Cilacap;</div>
                <div class="t m0 x8 h2 ye ff1 fs0 fc0 sc0 ls0 ws0">MENGIZINKAN</div>
                <div class="t m0 x5 h4 yf ff2 fs2 fc0 sc0 ls0 ws0">Kepada<span class="_ _6"> </span>:</div>
                <div class="t m0 x9 h4 y10 ff2 fs2 fc0 sc0 ls0 ws0">Nama<span class="_ _7"> </span>: <?php echo $data['nama_pemohon'];?></div>
                <div class="t m0 x9 h4 y11 ff2 fs2 fc0 sc0 ls0 ws0">Alamat<span class="_ _8"> </span>: <?php echo $data['alamat_pemohon']?></div>
                <div class="t m0 x9 h4 y12 ff2 fs2 fc0 sc0 ls0 ws0">Untuk<span class="_ _9"> </span>: <span class="ff1">Pemakaman Jenazah</span></div>
                <div class="t m0 xa h4 y13 ff2 fs2 fc0 sc0 ls0 ws0">Nama Jenazah<span class="_ _a"> </span>:  <?php echo $data['nama_jenazah']?></div>
                <div class="t m0 xa h4 y14 ff2 fs2 fc0 sc0 ls0 ws0">Tanggal Lahir<span class="_ _b"> </span>:  <?php echo $data['tgl_lhr_jnz']?></div>
                <div class="t m0 xa h4 y15 ff2 fs2 fc0 sc0 ls0 ws0">Tanggal Wafat<span class="_ _c"> </span>:  <?php echo $data['tgl_wft_jnz']?>     <span class="_ _d"> </span>Umur : <?php echo $data['usia_jenazah']?> Tahun</div>
                <div class="t m0 xa h4 y16 ff2 fs2 fc0 sc0 ls0 ws0">Tempat Makam<span class="_ _e"> </span>:  <?php echo $data['lokasi_makam']?></div>
                <div class="t m0 xa h4 y18 ff2 fs2 fc0 sc0 ls0 ws0">Izin Berlaku<span class="_ _f"> </span>:  <?php echo $data['ijin_berlaku']?> s/d <?php echo $data['ijin_akhir']?>  (dua tahun)</div>
                <div class="t m0 x5 h4 y19 ff2 fs2 fc0 sc0 ls0 ws0">Ketentuan<span class="_ _10"> </span>:</div>
                <div class="t m0 x9 h4 y1a ff2 fs2 fc0 sc0 ls0 ws0">1.<span class="_ _11"> </span>Membayar <span class="_ _12"></span>retribusi <span class="_ _12"></span>sesuai <span class="_ _12"></span>Peraturan <span class="_ _12"></span>Daerah <span class="_ _12"></span>Kabupaten <span class="_ _12"></span>Cilacap <span class="_ _12"></span>nomor <span class="_ _12"></span>5 <span class="_ _12"></span>Tahun <span class="_ _12"></span>2012 </div>
                <div class="t m0 x6 h4 y1b ff2 fs2 fc0 sc0 ls0 ws0">tentang <span class="_ _4"> </span>Pengelolaan <span class="_ _13"> </span>dan <span class="_ _13"> </span>Retribusi <span class="_ _4"> </span>Pelayanan <span class="_ _13"> </span>Pemakaman <span class="_ _4"> </span>dan <span class="_ _13"> </span>Pengabuan <span class="_ _4"> </span>Mayat <span class="_ _13"> </span>di </div>
                <div class="t m0 x6 h4 y1c ff2 fs2 fc0 sc0 ls0 ws0">Kabupaten Cilacap;</div>
                <div class="t m0 x9 h4 y1d ff2 fs2 fc0 sc0 ls0 ws0">2.<span class="_ _11"> </span>Memelihara kerapihan / kebersihan makam dan tidak mengganggu makam yang lain;</div>
                <div class="t m0 x9 h4 y1e ff2 fs2 fc0 sc0 ls0 ws0">3.<span class="_ _11"> </span>Wajib <span class="_ _12"></span>mengurus <span class="_ _12"></span>izin <span class="_ _12"></span>pe<span class="_ _5"></span>mbuatan <span class="_ _5"></span>hiasan <span class="_ _12"></span>/ <span class="_ _13"></span>kijing <span class="_ _5"></span>makam, <span class="_ _12"></span>apabila <span class="_ _13"></span>akan <span class="_ _5"></span>dibangun <span class="_ _14"></span>bentuk </div>
                <div class="t m0 x6 h4 y1f ff2 fs2 fc0 sc0 ls0 ws0">hiasan <span class="_ _14"> </span>/ <span class="_ _13"> </span>kijing <span class="_ _13"> </span>disesuaikan <span class="_ _13"> </span>dengan <span class="_ _13"> </span>bentuk <span class="_ _14"> </span>standar <span class="_ _13"> </span>yang <span class="_ _13"> </span>ditentukan <span class="_ _13"> </span>oleh <span class="_ _13"> </span>pejabat <span class="_ _14"> </span>yang </div><div class="t m0 x6 h4 y20 ff2 fs2 fc0 sc0 ls0 ws0">berwenang;                                                                                                                                                               <span class="_ _15"></span>                                                                                                                                                        <span class="_ _15"></span>                                                                                                                                                         <span class="_ _15"></span>                                                                                                        </div>
                <div class="t m0 x9 h4 y21 ff2 fs2 fc0 sc0 ls0 ws0">4.<span class="_ _11"> </span>Wajib didaftar ulang setiap 2 tahun, apabila diperpanjang;</div>
                <div class="t m0 x9 h4 y22 ff2 fs2 fc0 sc0 ls0 ws0">5.<span class="_ _11"> </span>Pemegang <span class="_ _16"> </span>izin <span class="_ _16"> </span>yang <span class="_ _16"> </span>melimpahkan <span class="_ _16"> </span>izin <span class="_ _16"> </span>kepada <span class="_ _16"> </span>orang <span class="_ _16"> </span>lain, <span class="_ _16"> </span>maka <span class="_ _16"> </span>orang <span class="_ _16"> </span>yang </div>
                <div class="t m0 x6 h4 y23 ff2 fs2 fc0 sc0 ls0 ws0">mendapatkan pelimpahan izin wajib mengajukan permohonan pelimpahan izin;</div>
                <div class="t m0 x9 h4 y24 ff2 fs2 fc0 sc0 ls0 ws0">6.<span class="_ _11"> </span>Izin tidak berlaku apabila :</div><div class="t m0 x6 h4 y25 ff2 fs2 fc0 sc0 ls0 ws0">a.<span class="_ _11"> </span>Izin diperoleh secara tidak sah;</div><div class="t m0 x6 h4 y26 ff2 fs2 fc0 sc0 ls0 ws0">b.<span class="_ _11"> </span>Pemegang izin <span class="_ _5"></span>melanggar ketentuan-ketentuan yang <span class="_ _5"></span>diatur dalam Peraturan <span class="_ _5"></span>Daerah </div>
                <div class="t m0 xc h4 y27 ff2 fs2 fc0 sc0 ls0 ws0">Kabupaten <span class="_ _17"> </span>Cilacap <span class="_ _17"> </span>nomor <span class="_ _17"> </span>5 <span class="_ _17"> </span>Tahun <span class="_ _17"> </span>2012 <span class="_ _17"> </span>tentang <span class="_ _17"> </span>Pengelolaan <span class="_ _17"> </span>dan <span class="_ _17"> </span>Retribusi </div>
                <div class="t m0 xc h4 y28 ff2 fs2 fc0 sc0 ls0 ws0">Pelayanan Pemakaman dan Pengabuan Mayat di Kabupaten Cilacap;</div>
                <div class="t m0 x6 h4 y29 ff2 fs2 fc0 sc0 ls0 ws0">c.<span class="_ _18"> </span>Lokasi <span class="_ _2"> </span>izin <span class="_ _2"> </span>tempat  pemakaman <span class="_ _2"> </span>dibutuhkan <span class="_ _2"> </span>untuk <span class="_ _2"> </span>kepentingan <span class="_ _2"> </span>Pemerintah <span class="_ _2"> </span>atau </div>
                <div class="t m0 xc h4 y2a ff2 fs2 fc0 sc0 ls0 ws0">kepentingan umum;</div>
                <div class="t m0 x6 h4 y2b ff2 fs2 fc0 sc0 ls0 ws0">d.<span class="_ _11"> </span>Izin tidak didaftar ulang/diperpanjang.</div>
                <div class="c xd y2c w2 h5"><div class="t m0 xe h6 y2d ff1 fs1 fc0 sc0 ls0 ws0"><br/>Tembusan:                                                                                                         </div>
                <div class="t m0 xe h3 y2e ff2 fs1 fc0 sc0 ls0 ws0"><br/>1. Bupati Cilacap;</div>
                <div class="t m0 xe h3 y2f ff2 fs1 fc0 sc0 ls0 ws0"><br/>2. Kepala BPPKAD Kab. Cilacap;</div>
                <div class="t m0 xe h3 y30 ff2 fs1 fc0 sc0 ls0 ws0"><br/>3. Camat Cilacap Selatan;</div>
                <div class="t m0 xe h3 y31 ff2 fs1 fc0 sc0 ls0 ws0"><br/>4. Lurah Tambakreja. </div>
                </div>
                <div class="c xf y2c w3 h5">
                    <div class="t m0 x10 h3 y32 ff2 fs1 fc0 sc0 ls0 ws0"><br/>Ditetapkan di   : Cilacap</div>
                        <div class="t m0 x10 h3 y33 ff2 fs1 fc0 sc0 ls0 ws0"><br/>Pada Tanggal  : <?php echo date('d-M-Y');?></div>
                        <div class="t m0 x11 h3 y34 ff2 fs1 fc0 sc0 ls0 ws0">a.n.BUPATI CILACAP</div>
                        <div class="t m0 x12 h3 y35 ff2 fs1 fc0 sc0 ls0 ws0">KEPALA DINAS PERUMAHAN</div>
                        <div class="t m0 x13 h3 y36 ff2 fs1 fc0 sc0 ls0 ws0">KAWASAN PERMUKIMAN DAN PERTANAHAN</div>
                        <div class="t m0 x14 h3 y37 ff2 fs1 fc0 sc0 ls0 ws0">u.b.</div>
                        <div class="t m0 x15 h3 y38 ff2 fs1 fc0 sc0 ls0 ws0">KEPALA BIDANG KAWASAN PERMUKIMAN</div>
                        <div class="t m0 x16 h6 y39 ff1 fs1 fc0 sc0 ls0 ws0">KUSNADI, S.IP, MM.</div>
                        <div class="t m0 x17 h3 y3a ff2 fs1 fc0 sc0 ls0 ws0"><br/>Pembina</div>
                        <div class="t m0 x18 h3 y3b ff2 fs1 fc0 sc0 ls0 ws0"><br/>NIP. 19681111 198903 1 007</div>
                    </div>
                </div>
                <div class="c x17 y3b w4 h7"><div class="t m0 x18 h8 y3c ff1 fs3 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN CILACAP</div><div class="t m0 x19 h9 y3d ff1 fs4 fc0 sc0 ls0 ws0">DINAS PERUMAHAN, KAWASAN PERMUKIMAN, </div><div class="t m0 x1a h9 y3e ff1 fs4 fc0 sc0 ls0 ws0">DAN PERTANAHAN</div><div class="t m0 x10 h4 y3f ff2 fs2 fc0 sc0 ls0 ws0">Jalan Bromo Timur Nomor 13 Telp. (0282) 535093 Fax.(0282) 535093</div><div class="t m0 x1b h4 y40 ff2 fs2 fc0 sc0 ls0 ws0">Website : http://www.disperkimt</div><div class="t m0 x1c h4 y41 ff2 fs2 fc0 sc0 ls0 ws0">a.cilacapkab.go.id, E-mail : disperkimtacilacap@gmail.com</div><div class="t m0 x1d ha y42 ff1 fs5 fc0 sc0 ls0 ws0">C I L A C A P</div><div class="t m0 x1e h4 y43 ff2 fs2 fc0 sc0 ls0 ws0">Kode Pos 53222</div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
                </div>
            </div>
        </div>
    </form>        
</div>
<div class="loading-indicator"></div>
</body>
</html>

