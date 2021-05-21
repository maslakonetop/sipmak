<?php
    include("../data/config.php");
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
<title>SipMak</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="57x57" href="../assets/images/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../assets/images/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../assets/images/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/images/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../assets/images/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../assets/images/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../assets/images/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../assets/images/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../assets/images/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon/favicon-16x16.png">
<link rel="manifest" href="../assets/images/icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="base.min.css"/>
<link rel="stylesheet" href="fancy.min.css"/>
<link rel="stylesheet" href="main.css"/>
<script src="compatibility.min.js"></script>
<script src="theViewer.min.js"></script>
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
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">SURAT IZIN</div><div class="t m0 x2 h3 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nomor : <?php echo $data["nobuku_plat"];?>.1/01.25.01.2021</div><div class="t m0 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">TENTANG</div><div class="t m0 x4 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">PEMAKAMAN JENAZAH / PENGABUAN MAYAT</div><div class="t m0 x5 h4 y5 ff2 fs2 fc0 sc0 ls0 ws0">Dasar<span class="_ _0"> </span>:</div><div class="t m0 x6 h4 y6 ff2 fs2 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Peraturan <span class="_ _2"> </span>Daerah <span class="_ _2"> </span>Nomor <span class="_ _2"> </span>26 <span class="_ _2"> </span>Tahun <span class="_ _2"> </span>2003 <span class="_ _2"> </span>tentang <span class="_ _2"> </span>Ketertiban, <span class="_ _2"> </span>Kebersihan <span class="_ _2"> </span>dan </div><div class="t m0 x7 h4 y7 ff2 fs2 fc0 sc0 ls0 ws0">Keindahan;</div><div class="t m0 x6 h4 y8 ff2 fs2 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Peraturan <span class="_ _3"> </span>Daerah <span class="_ _3"> </span>Kabupaten <span class="_ _3"> </span>Cilacap <span class="_ _3"> </span>Nomor <span class="_ _3"> </span>5 <span class="_ _3"> </span>Tahun <span class="_ _3"> </span>2012 <span class="_ _3"> </span>tentang <span class="_ _3"> </span>Pengelolaan <span class="_ _3"> </span>dan </div><div class="t m0 x7 h4 y9 ff2 fs2 fc0 sc0 ls0 ws0">Retribusi Pelayanan Pemakaman dan Pengabuan Mayat di Kabupaten Cilacap.</div><div class="t m0 x6 h4 ya ff2 fs2 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Peraturan <span class="_ _4"> </span>Daerah <span class="_ _4"> </span>Kabupaten <span class="_ _4"> </span>Cilacap <span class="_ _4"> </span>Nomor <span class="_ _4"> </span>29 <span class="_ _4"> </span>Tahun <span class="_ _4"> </span>2018 <span class="_ _4"> </span>tentang <span class="_ _4"> </span>perubahan </div><div class="t m0 x7 h4 yb ff2 fs2 fc0 sc0 ls0 ws0">Peraturan <span class="_ _5"> </span>Daerah <span class="_ _5"> </span>Kabupaten <span class="_ _5"> </span>Cilacap <span class="_ _5"> </span>Nomor <span class="_ _5"> </span>91 <span class="_ _5"> </span>Tahun <span class="_ _5"> </span>2016 <span class="_ _5"> </span>tentang <span class="_ _5"> </span>Pembentukan </div><div class="t m0 x7 h4 yc ff2 fs2 fc0 sc0 ls0 ws0">Organisasi dan Tata Kerja Dinas Daerah Kabupaten Cilacap;</div><div class="t m0 x8 h2 yd ff1 fs0 fc0 sc0 ls0 ws0">MENGIZINKAN</div><div class="t m0 x5 h4 ye ff2 fs2 fc0 sc0 ls0 ws0">Kepada<span class="_ _6"> </span>:</div><div class="t m0 x6 h4 yf ff2 fs2 fc0 sc0 ls0 ws0">Nama<span class="_ _7"> </span>:  <?php echo $data["nama_pemohon"];?> </div><div class="t m0 x6 h4 y10 ff2 fs2 fc0 sc0 ls0 ws0">Alamat<span class="_ _8"> </span>:  <?php echo $data["alamat_pemohon"];?></div><div class="t m0 x6 h4 y11 ff2 fs2 fc0 sc0 ls0 ws0">Untuk<span class="_ _9"> </span>: <span class="ff1">Pemakaman Jenazah</span></div><div class="t m0 x9 h4 y12 ff2 fs2 fc0 sc0 ls0 ws0">Nama Jenazah<span class="_ _a"> </span>:  <?php echo $data["nama_jenazah"];?></div><div class="t m0 x9 h4 y13 ff2 fs2 fc0 sc0 ls0 ws0">Tanggal Lahir<span class="_ _b"> </span>:  <?php echo $data["tgl_lhr_jnz"];?></div><div class="t m0 x9 h4 y14 ff2 fs2 fc0 sc0 ls0 ws0">Tanggal Wafat<span class="_ _c"> </span>:  <?php echo $data["tgl_wft_jnz"];?><span class="_ _d"> </span>Umur : <?php echo $data["usia_jenazah"];?> Tahun</div><div class="t m0 x9 h4 y15 ff2 fs2 fc0 sc0 ls0 ws0">Tempat Makam<span class="_ _e"> </span>:  <?php echo $data["lokasi_makam"];?></div><div class="t m0 x9 h4 y17 ff2 fs2 fc0 sc0 ls0 ws0">Izin Berlaku<span class="_ _f"> </span>:  <?php echo $data["ijin_berlaku"];?> s/d <?php echo $data["ijin_akhir"];?>  (dua tahun)</div><div class="t m0 x5 h4 y18 ff2 fs2 fc0 sc0 ls0 ws0">Ketentuan<span class="_ _10"> </span>:</div><div class="t m0 x6 h4 y19 ff2 fs2 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Membayar <span class="_ _11"></span>retribusi <span class="_ _11"></span>sesuai <span class="_ _11"></span>Peraturan <span class="_ _11"></span>Daerah <span class="_ _11"></span>Kabupaten <span class="_ _11"></span>Cilacap <span class="_ _11"></span>nomor <span class="_ _11"></span>5 <span class="_ _11"></span>Tahun <span class="_ _11"></span>2012 </div><div class="t m0 x7 h4 y1a ff2 fs2 fc0 sc0 ls0 ws0">tentang <span class="_ _12"> </span>Pengelolaan <span class="_ _12"> </span>dan <span class="_ _12"> </span>Retribusi <span class="_ _12"> </span>Pelayanan <span class="_ _12"> </span>Pemakaman <span class="_ _12"> </span>dan <span class="_ _12"> </span>Pengabuan <span class="_ _12"> </span>Mayat <span class="_ _12"> </span>di </div><div class="t m0 x7 h4 y1b ff2 fs2 fc0 sc0 ls0 ws0">Kabupaten Cilacap;</div><div class="t m0 x6 h4 y1c ff2 fs2 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Memelihara kerapihan / kebersihan makam dan tidak mengganggu makam yang lain;</div><div class="t m0 x6 h4 y1d ff2 fs2 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Wajib <span class="_ _11"></span>mengurus <span class="_ _11"></span>izin <span class="_ _11"></span>pe<span class="_ _13"></span>mbuatan <span class="_ _11"></span>hiasan <span class="_ _11"></span>/ <span class="_ _11"></span>kijing <span class="_ _3"></span>makam, <span class="_ _11"></span>apabila <span class="_ _11"></span>akan <span class="_ _11"></span>dibangun <span class="_ _11"></span>bentuk </div><div class="t m0 x7 h4 y1e ff2 fs2 fc0 sc0 ls0 ws0">hiasan <span class="_ _3"> </span>/ <span class="_ _3"> </span>kijing <span class="_ _3"> </span>disesuaikan <span class="_ _3"> </span>dengan <span class="_ _3"> </span>bentuk <span class="_ _12"> </span>standar <span class="_ _3"> </span>yang <span class="_ _3"> </span>ditentukan <span class="_ _3"> </span>oleh <span class="_ _3"> </span>pejabat <span class="_ _3"> </span>yang </div><div class="t m0 x7 h4 y1f ff2 fs2 fc0 sc0 ls0 ws0">berwenang;                                                                                                                                                               <span class="_ _14"></span>                                                                                                                                                        <span class="_ _14"></span>                                                                                                                                                         <span class="_ _14"></span>                                                                                                        </div><div class="t m0 x6 h4 y20 ff2 fs2 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>Wajib didaftar ulang setiap 2 tahun, apabila diperpanjang;</div><div class="t m0 x6 h4 y21 ff2 fs2 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Pemegang <span class="_ _2"> </span>izin <span class="_ _15"> </span>yang <span class="_ _2"> </span>melimpahkan <span class="_ _15"> </span>izin <span class="_ _2"> </span>kepada <span class="_ _15"> </span>orang <span class="_ _2"> </span>lain, <span class="_ _15"> </span>maka <span class="_ _2"> </span>orang <span class="_ _15"> </span>yang </div><div class="t m0 x7 h4 y22 ff2 fs2 fc0 sc0 ls0 ws0">mendapatkan pelimpahan izin wajib mengajukan permohonan pelimpahan izin;</div><div class="t m0 x6 h4 y23 ff2 fs2 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Izin tidak berlaku apabila :</div><div class="t m0 x7 h4 y24 ff2 fs2 fc0 sc0 ls0 ws0">a.<span class="_ _15"> </span>Izin diperoleh secara<span class="_ _13"></span> tidak sah;</div><div class="t m0 x7 h4 y25 ff2 fs2 fc0 sc0 ls0 ws0">b.<span class="_ _15"> </span>Pemegang <span class="_ _13"></span>izin <span class="_ _13"></span>melanggar ketentuan-ketentuan <span class="_ _13"></span>yang di<span class="_ _13"></span>atur dalam <span class="_ _13"></span>Peraturan Daerah </div><div class="t m0 xb h4 y26 ff2 fs2 fc0 sc0 ls0 ws0">Kabupaten <span class="_ _16"> </span>Cilacap <span class="_ _16"> </span>nomor <span class="_ _16"> </span>5 <span class="_ _16"> </span>Tahun <span class="_ _16"> </span>2012 <span class="_ _16"> </span>tentang <span class="_ _16"> </span>Pengelolaan <span class="_ _16"> </span>dan <span class="_ _16"> </span>Retribusi </div><div class="t m0 xb h4 y27 ff2 fs2 fc0 sc0 ls0 ws0">Pelayanan Pemakaman dan Pengabuan Mayat di Kabupaten Cilacap;</div><div class="t m0 x7 h4 y28 ff2 fs2 fc0 sc0 ls0 ws0">c.<span class="_ _17"> </span>Lokasi <span class="_ _18"> </span>izin <span class="_ _18"> </span>tempat <span class="_ _18"> </span>pemakaman <span class="_ _18"> </span>dibutuhkan <span class="_ _18"> </span>untuk <span class="_ _18"> </span>kepentingan <span class="_ _18"> </span>Pemerintah <span class="_ _18"> </span>atau </div><div class="t m0 xb h4 y29 ff2 fs2 fc0 sc0 ls0 ws0">kepentingan umum;</div><div class="t m0 x7 h4 y2a ff2 fs2 fc0 sc0 ls0 ws0">d.<span class="_ _15"> </span>Izin tidak didaftar ulang/dipe<span class="_ _13"></span>rpanjang.</div><div class="c xc y2b w2 h5"><div class="t m0 xd h6 y2c ff1 fs1 fc0 sc0 ls0 ws0">Tembusan:                                                                                                         </div><div class="t m0 xd h3 y2d ff2 fs1 fc0 sc0 ls0 ws0">1. Bupati Cilacap;</div><div class="t m0 xd h3 y2e ff2 fs1 fc0 sc0 ls0 ws0">2. Kepala BPPKAD Kab. Cilacap;</div><div class="t m0 xd h3 y2f ff2 fs1 fc0 sc0 ls0 ws0">3. Camat Cilacap Selatan;</div><div class="t m0 xd h3 y30 ff2 fs1 fc0 sc0 ls0 ws0">4. Lurah Tambakreja. </div></div><div class="c xe y2b w3 h5"><div class="t m0 xf h3 y31 ff2 fs1 fc0 sc0 ls0 ws0">Ditetapkan di   : Cilacap</div><div class="t m0 xf h3 y32 ff2 fs1 fc0 sc0 ls0 ws0">Pada Tanggal  : <?php echo $data["ijin_berlaku"];?></div><div class="t m0 x10 h3 y33 ff2 fs1 fc0 sc0 ls0 ws0">a.n.BUPATI CILACAP</div><div class="t m0 xc h3 y34 ff2 fs1 fc0 sc0 ls0 ws0">KEPALA DINAS PERUMAHAN</div><div class="t m0 x11 h3 y35 ff2 fs1 fc0 sc0 ls0 ws0">KAWASAN PERMUKIMAN DAN PERTANAHAN</div><div class="t m0 x12 h3 y36 ff2 fs1 fc0 sc0 ls0 ws0">u.b.</div><div class="t m0 x13 h3 y37 ff2 fs1 fc0 sc0 ls0 ws0">KEPALA BIDANG KAWASAN PERMUKIMAN</div><div class="t m0 x14 h6 y38 ff1 fs1 fc0 sc0 ls0 ws0">KUSNADI, S.IP, MM.</div><div class="t m0 x15 h3 y39 ff2 fs1 fc0 sc0 ls0 ws0">Pembina</div><div class="t m0 x16 h3 y3a ff2 fs1 fc0 sc0 ls0 ws0">NIP. 19681111 198903 1 007</div></div><div class="c x17 y3b w4 h7"><div class="t m0 x18 h8 y3c ff1 fs3 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN CILACAP</div><div class="t m0 x19 h9 y3d ff1 fs4 fc0 sc0 ls0 ws0">DINAS PERUMAHAN, KAWASAN PERMUKIMAN, </div><div class="t m0 x1a h9 y3e ff1 fs4 fc0 sc0 ls0 ws0">DAN PERTANAHAN</div><div class="t m0 x10 h4 y3f ff2 fs2 fc0 sc0 ls0 ws0">Jalan Bromo Timur Nomor 13 Telp. (0282) 535093 Fax.(0282) 535093</div><div class="t m0 x1b h4 y40 ff2 fs2 fc0 sc0 ls0 ws0">Website : http://www.disperkimt</div><div class="t m0 x1c h4 y41 ff2 fs2 fc0 sc0 ls0 ws0">a.cilacapkab.go.id, E-mail : disperkimtacilacap@gmail.com</div><div class="t m0 x1d ha y42 ff1 fs5 fc0 sc0 ls0 ws0">C I L A C A P</div><div class="t m0 x1e h4 y43 ff2 fs2 fc0 sc0 ls0 ws0">Kode Pos 53222</div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div class="loading-indicator">

</div>
</body>
</html>
