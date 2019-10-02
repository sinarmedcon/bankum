<br>
    <br>

    <div class="jumbotron jumbotron-fluid mb-0" style="background-image:url(https://localhost/bankum/assets/image/header.jpg)">

<div class="container">

    <br>
        <br>
            <br>
        <br>
    <br>

    <h1 class="text-white text-center"><b>KOMITMEN KAMI MEMBERIKAN LAYANAN HUKUM YANG TERBAIK</b></h1>

    <br>
        <br>
            <br>
        <br>
    <br>

</div>

</div>


<div class="jumbotron jumbotron-fluid bg-white">

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-8">
            
                <h4><b>Selamat Datang Rekan Bankum</b></h4>
                <p>Silakan klik tombol mulai disamping untuk memulai pengisian formulir pendaftaran sebagai mitra Bankum. Anda bisa mendaftarkan diri sebagai advokad maupun LBH tempat anda bekerja.</p>
            
            </div>


            <div class="col-md-4">
            
                <p class="small text-muted">Pastikan Anda mengisi keseluruhan formulir pendaftaran dengan data yang sebenar-benarnya.</p>
                <button type="button" class="btn btn-outline-dark btn-block btn-lg" id="btn-start">Mulai</button>
            
            </div>

        
        </div>
    
    </div>

</div>


<div class="jumbotron jumbotron-fluid bg-white" id="start">

    <div class="container">
    
        <div class="row">


            <div class="col-md-4">
            
                <h5><b>Gabung Sebagai Mitra LBH/OBH/LKBH/Perkumpulan</b></h5>
                <p>Silakan klik tombol di bawah ini untuk mengisi formulir pendaftaran sebagai mitra LBH/OBH/LKBH/Perkumpulan</p><br>
                <button class="btn btn-danger btn-block btn-lg mt-1" data-toggle="modal" data-target="#lbh">Gabung</button>
            
            </div>


            <div class="col-md-4">
            
                <h5><b>Gabung Sebagai Mitra Advokat</b></h5>
                <p>Silakan klik tombol di bawah ini untuk mengisi formulir pendaftaran sebagai mitra advokat</p><br><br><br>
                <button class="btn btn-primary btn-block btn-lg mb-5" data-toggle="modal" data-target="#advokat">Gabung</button>
        
            </div>
                

            <div class="col-md-4">
            
                <h5><b>Gabung Sebagai Mitra Perusahaan</b></h5>
                <p>Silakan klik tombol di bawah ini untuk mengisi formulir pendaftaran sebagai mitra perusahaan</p><br><br><br>
                <button class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#perusahaan">Gabung</button>
            
            </div>

        
        </div>
    
    </div>

</div>


<!-- advokat -->
<div class="modal fade" id="advokat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Gabung Sebagai Advokat</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="advokat" method="post">

      <div class="modal-body">
        
        <div class="container">
        
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap Sesuai Identitas</label>
                <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan">
                <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email Anda">
                <input type="text" name="konfirmasi_enail" class="form-control" placeholder="Masukan Ulang Email Anda">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">No HP/WhatsApp</label>
                <input type="text" name="hp" class="form-control" placeholder="Masukan Nomor HP Anda">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir Anda">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="custom-select">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Domisili saat ini</label>
                <input type="text" name="domisili" class="form-control" placeholder="Alamat Domisili ANda saat ini">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                <select name="pendidikan" class="custom-select">
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>D3</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Profesi saat ini (pilih beberapa kategori yang sesuai)</label>
                <div class="form-group form-check">
                    <input type="checkbox" name="advokat" class="form-check-input" value="advokat">
                    <label class="form-check-label" for="exampleCheck1">Advokat</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="paralegal" class="form-check-input" value="paralegal">
                    <label class="form-check-label" for="exampleCheck1">Paralegal</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="dosen" class="form-check-input" value="dosen">
                    <label class="form-check-label" for="exampleCheck1">Dosen</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="notaris" class="form-check-input" value="notaris">
                    <label class="form-check-label" for="exampleCheck1">Notaris</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="PPAT" class="form-check-input" value="PPAT">
                    <label class="form-check-label" for="exampleCheck1">PPAT</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="mahasiswa" class="form-check-input" value="mahasiswa fakultas hukum">
                    <label class="form-check-label" for="exampleCheck1">Mahasiswa Fak. Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="polisi" class="form-check-input" value="polisi">
                    <label class="form-check-label" for="exampleCheck1">Polisi</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="hakim" class="form-check-input" value="hakim">
                    <label class="form-check-label" for="exampleCheck1">Hakim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="jaksa" class="form-check-input" value="jaksa">
                    <label class="form-check-label" for="exampleCheck1">Jaksa</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="swasta" class="form-check-input" value="swasta">
                    <label class="form-check-label" for="exampleCheck1">Swasta</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pns" class="form-check-input" value="PNS">
                    <label class="form-check-label" for="exampleCheck1">PNS</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="aktivis" class="form-check-input" value="aktivis">
                    <label class="form-check-label" for="exampleCheck1">Aktivis</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pers" class="form-check-input" value="wartawan/pers">
                    <label class="form-check-label" for="exampleCheck1">Wartawan/Pers</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="lainnya" class="form-check-input" value="lainnya">
                    <label class="form-check-label" for="exampleCheck1">Lainnya</label>
                </div>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Beritahu Kami, Jasa atau Layanan Hukum apa yang akan Kami Promosikan ?</label>
                <div class="form-group form-check">
                    <input type="checkbox" name="bantuan_hukum" class="form-check-input" value="bantuan hukum gratis">
                    <label class="form-check-label" for="exampleCheck1">Bantuan Hukum Gratis</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="perkara_pidana" class="form-check-input" value="perkara pidana">
                    <label class="form-check-label" for="exampleCheck1">Perkara Pidana</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="perkara_perdata" class="form-check-input" value="perkara perdata">
                    <label class="form-check-label" for="exampleCheck1">Perkara Perdata</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="tu_negara" class="form-check-input" value="perkara tata usaha negara">
                    <label class="form-check-label" for="exampleCheck1">Perkara Tata Usaha Negara</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="program_pro-bono" class="form-check-input" value="program pro-bono">
                    <label class="form-check-label" for="exampleCheck1">Program Pro-bono</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="konsultasi_hukum" class="form-check-input" value="konsultasi hukum">
                    <label class="form-check-label" for="exampleCheck1">Konsultasi Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="penyuluhan_hukum" class="form-check-input" value="penyuluhan hukum">
                    <label class="form-check-label" for="exampleCheck1">Penyuluhan Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="edukasi" class="form-check-input" value="edukasi">
                    <label class="form-check-label" for="exampleCheck1">Edukasi</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="surat_perjanjian" class="form-check-input" value="surat perjanjian">
                    <label class="form-check-label" for="exampleCheck1">Surat Perjanjian</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="magang" class="form-check-input" value="magang mahasiswa fakultas hukum">
                    <label class="form-check-label" for="exampleCheck1">Magang Mahasiswa Fakultas Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="jasa_pendirian" class="form-check-input" value="jasa pendirian badan usaha">
                    <label class="form-check-label" for="exampleCheck1">Jasa Pendirian Badan Usaha</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="seminar" class="form-check-input" value="seminar">
                    <label class="form-check-label" for="exampleCheck1">Seminar</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="diklat" class="form-check-input" value="diklat paralegal">
                    <label class="form-check-label" for="exampleCheck1">Diklat Paralegal</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pendidikan" class="form-check-input" value="pendidikan khusus">
                    <label class="form-check-label" for="exampleCheck1">Pendidikan Khusus</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pkpa" class="form-check-input" value="PKPA">
                    <label class="form-check-label" for="exampleCheck1">PKPA</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="saksi" class="form-check-input" value="saksi ahli">
                    <label class="form-check-label" for="exampleCheck1">Saksi Ahli</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="berita" class="form-check-input" value="berita hukum">
                    <label class="form-check-label" for="exampleCheck1">Berita hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="jasa_lainnya" class="form-check-input" value="jasa legalitas lainnya">
                    <label class="form-check-label" for="exampleCheck1">Jasa Legalitas Lainnya</label>
                </div>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Sesuai Bidang Keahlian</label>
                <select name="keahlian" class="custom-select">
                    <option>Adat</option>
                    <option>Administrasi Pemerintahan</option>
                    <option>Akuntabilitas</option>
                    <option>Analisis Dampak Lingkungan</option>
                    <option>Aparatur Negara</option>
                    <option>APBN</option>
                    <option>Arbitrase</option>
                    <option>Badan Hukum & Badan Usaha</option>
                    <option>BMKG</option>
                    <option>BMN</option>
                    <option>BUMN</option>
                    <option>Energi, Migas & Tambang</option>
                    <option>Gaji & Tunjangan</option>
                    <option>kehutanan</option>
                    <option>Pertanian, Perkebunan, dan Perikanan</option>
                    <option>Sumberdaya Air & Kelautan</option>
                    <option>Lingkungan Hidup</option>
                    <option>Pertanahan</option>
                    <option>Keuangan & Perbankan</option>
                    <option>Perdagangan & Industri</option>
                    <option>Perdata & Islam</option>
                    <option>Pidana</option>
                    <option>Hukum Internasional</option>
                    <option>Penegakan Hukum dan Profesi Hukum</option>
                    <option>Korupsi</option>
                    <option>HAM</option>
                    <option>Konstitusional dan Tatanegara</option>
                    <option>Pelayanan Publik</option>
                    <option>Kependudukan</option>
                    <option>Pertahanan dan Keamanan</option>
                    <option>Medis</option>
                    <option>PEMDA</option>
                    <option>Politik & Pemilu</option>
                    <option>Infrastruktur</option>
                    <option>Perumahan</option>
                    <option>Transportasi</option>
                    <option>Tenaga Kerja</option>
                    <option>Pers, Telekomunikasi, dan Informatika</option>
                    <option>Pendidikan dan Kebudayaan</option>
                    <option>Narkotika</option>
                    <option>Riset dan Teknologi</option>
                    <option>Ekonomi</option>
                    <option>Kesehatan</option>
                    <option>Keuangan</option>
                    <option>Pembangunan</option>
                    <option>Ibadah & Keagamaan</option>
                    <option>kesejahteraan Rakyat</option>
                    <option>Lembaga Penjaminan</option>
                    <option>Peternakan</option>
                    <option>Organisasi Kelembagaan dan Profesi</option>
                    <option>Petunjuk Pelaksanaan dan Tata Kerja</option>
                    <option>Perdata</option>
                    <option>Syariah</option>
                    <option>Perizinan</option>
                    <option>Kearsipan</option>
                    <option>Geospasial</option>
                    <option>Tata Ruang</option>
                    <option>Pengembangan & Spesialisasi SDM</option>
                    <option>Perfilman</option>
                    <option>Rehabilitasi</option>
                    <option>Modal & Saham</option>
                    <option>Pariwisata</option>
                    <option>Surat Berharga</option>
                    <option>Investasi</option>
                    <option>PNPB</option>
                    <option>Pajak</option>
                    <option>Lembaga Keuangan</option>
                    <option>Jabatan Fungsional</option>
                    <option>Pengawasan dan Pengendalian</option>
                </select>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Upload Foto Profil (Ukuran Maksimal 1 MB)</label>
                <div class="custom-file">
                    <input type="file" name="foto" class="custom-file-input" id="customFileLangHTML">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="Pilih">Pilih File...</label>
                </div>
            </div><br>


            <p class="text-muted">Dengan Mengisi dan menekan tombol kirim di bawah ini, Saya setuju dan tunduk pada syarat dan ketentuan Bankum App - Bankum.id</p>

            <div class="form-group">
            
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="setuju" id="setuju">
                    <label class="form-check-label" for="exampleRadios1">
                        <p>Saya setuju dengan <a href="#" class="text-dark"><b>Syarat & Ketentuan</b></a> Bankum App - Bankum.id, PT. APlikasi Untuk Bangsa</p> 
                    </label>
                </div>
            
            </div>

        
        </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="btn-send">Kirim</button>
      </div>

    </form>

    </div>
  </div>
</div>


<!-- LBH -->
<div class="modal fade" id="lbh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gabung Sebagaia Mitra LBH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="lbh" method="post">

      <div class="modal-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pemohon (Perwakilan Pengurus)</label>
            <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan">
            <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email Pemohon</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda">
            <input type="email" name="confirm_email" class="form-control" placeholder="Konfirmasi ALamata Email Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">No HP/WhatsApp</label>
            <input type="text" name="hp" class="form-control" placeholder="Masukan Nomor HP/WhatsApp Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Dengan ini menyatakan pemohon sebagai : (jika memilih lainnya harus dilengkapi surat kuasa saat proses verifikasi mitra)</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="perwakilan" value="ketua" id="ketua" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ketua
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="perwakilan" value="wakil ketua" id="wakil_ketua">
                <label class="form-check-label" for="exampleRadios2">
                    Wakil Ketua
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="perwakilan" value="sekretaris" id="sekretaris">
                <label class="form-check-label" for="exampleRadios1">
                    Sekretaris
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="perwakilan" value="bendahara" id="bendahara">
                <label class="form-check-label" for="exampleRadios2">
                    Bendahara
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="perwakilan" id="rdio-lbh-as-lainnya">
                <label class="form-check-label" for="exampleRadios2">
                    Lainnya
                </label>
            </div>

            <div class="form-group" id="lbh-as-lainnya">
                <label for="exampleInputEmail1">Lainnya</label>
                <input type="text" name="perwakilan" class="form-control" placeholder="Masukan Keterangan">
            </div>

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nama LBH/OBH/LKBH</label>
            <input type="text" name="lbh" class="form-control" placeholder="Masukan Nama LBH/OBH/LKBH Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Alamat Domisili Kantor atau Sekretariat saat ini</label>
            <input type="text" name="kantor" class="form-control" placeholder="Masukan alamat kantor atau domisili">
            <small class="text-muted">contoh : jalan keadilan no.1 rt.01/rw. 02</small>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan tempat Kantor Lembaga Anda">
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten tempat Kantor Lembaga Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Provinsi</label>
            <select name="provinsi" class="custom-select">
                <?php 

                    $query = $this->db->get('provinsi')->result();
                    foreach($query as $row)
                    {
                        $provinsi = $row->nama;
                ?>

                
                        <option><?= $provinsi;?></option>
                    

                <?php
                    }

                ?>

            </select>
            
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">No. Telepon Kantor/Sekretariat</label>
            <input type="text" name="telp" class="form-control" placeholder="Masukkan nomor telepon kantor Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Website (tulis jika ada, jika tidak silakan dikosongi)</label>
            <input type="text" name="website" class="form-control" placeholder="Masukan alamat website kantor Anda">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Bentuk badan Pemberi Bantuan Hukum</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bentuk_badan" value="yayasan" id="yayasan">
                <label class="form-check-label" for="exampleRadios2">
                    yayasan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bentuk_badan" value="perkumpulan" id="perkumpulan">
                <label class="form-check-label" for="exampleRadios2">
                    Perkumpulan
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Advokat yang Terdaftar sebagai Pemberi Bantuan Hukum</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jumlah_advokat" value="belum ada" id="belum_ada">
                <label class="form-check-label" for="exampleRadios2">
                    Belum ada
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jumlah_advokat" value="1-5" id="1-5">
                <label class="form-check-label" for="exampleRadios2">
                    1 - 5
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jumlah_advokat" value="6-10" id="6-10">
                <label class="form-check-label" for="exampleRadios2">
                    6 - 10
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jumlah_advokat" value="lebih dari 10" id="lebihdari10">
                <label class="form-check-label" for="exampleRadios2">
                    Lebih dari 10
                </label>
            </div>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Akreditasi Pemberi Bantuan Hukum</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="akreditasi" value="A" id="A">
                <label class="form-check-label" for="exampleRadios2">
                    A
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="akreditasi" value="B" id="B">
                <label class="form-check-label" for="exampleRadios2">
                    B
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="akreditasi" value="C" id="C">
                <label class="form-check-label" for="exampleRadios2">
                    C
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="akreditasi" value="belum" id="belum">
                <label class="form-check-label" for="exampleRadios2">
                    Belum Terakreditasi
                </label>
            </div>
        </div>


        <div class="form-group">
                <label for="exampleInputEmail1">Layanan Hukum yang akan Diberikan</label>
                <div class="form-group form-check">
                    <input type="checkbox" name="layanan_pidana" class="form-check-input" value="pidana">
                    <label class="form-check-label" for="exampleCheck1">Pidana</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="layanan_perdata" class="form-check-input" value="perdata">
                    <label class="form-check-label" for="exampleCheck1">Perdata</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="tun" class="form-check-input" value="TUN">
                    <label class="form-check-label" for="exampleCheck1">Tata Usaha Negara (TUN)</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="layanan_semuanya" class="form-check-input" value="semuanya">
                    <label class="form-check-label" for="exampleCheck1">semuanya</label>
                </div>

            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Pilih Beberapa atau Semua Kategori</label>
                <div class="form-group form-check">
                    <input type="checkbox" name="litigasi" class="form-check-input" value="litigasi saja">
                    <label class="form-check-label" for="exampleCheck1">Litigasi saja</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="non-litigasi" class="form-check-input" value="non-litigasi saja">
                    <label class="form-check-label" for="exampleCheck1">Non-Litigasi saja</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="litigasi_non-litigasi" class="form-check-input" value="litigasi dan non-litigasi">
                    <label class="form-check-label" for="exampleCheck1">Litigasi dan Non-Litigasi</label>
                </div>

            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Program Bantuan Hukum (pilih beberapa atua ceklist semua)</label>
                <div class="form-group form-check">
                    <input type="checkbox" name="k-hukum" class="form-check-input" value="konsultasi hukum">
                    <label class="form-check-label" for="exampleCheck1">Konsultasi Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="p-hukum" class="form-check-input" value="edukasi/penyuluhan hukum">
                    <label class="form-check-label" for="exampleCheck1">Edukasi/Penyuluhan Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="i-kases" class="form-check-input" value="investigasi kasus">
                    <label class="form-check-label" for="exampleCheck1">Investigasi kasus, baik yang elektronik maupun non-elektronik</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="penelitian-h" class="form-check-input" value="penelitian hukum">
                    <label class="form-check-label" for="exampleCheck1">Penelitian Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="mediasi" class="form-check-input" value="mediasi">
                    <label class="form-check-label" for="exampleCheck1">Mediasi</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="negosiasi" class="form-check-input" value="negosiasi">
                    <label class="form-check-label" for="exampleCheck1">Negosiasi</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pm" class="form-check-input" value="pemberdayaan masyarakat">
                    <label class="form-check-label" for="exampleCheck1">Pemberdayaan masyarakat</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pp" class="form-check-input" value="pendampingan diluar pengadilan">
                    <label class="form-check-label" for="exampleCheck1">Pendampingan diluar pengadilan</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="ddh" class="form-check-input" value="drafting dokumen hukum">
                    <label class="form-check-label" for="exampleCheck1">Drafting Dokumen Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="oh" class="form-check-input" value="opini hukum">
                    <label class="form-check-label" for="exampleCheck1">Opini Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="ra" class="form-check-input" value="rekrutment advokat">
                    <label class="form-check-label" for="exampleCheck1">Rekrutment Advokat</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="rd" class="form-check-input" value="rekrutment dosen">
                    <label class="form-check-label" for="exampleCheck1">Rekrutment Dosen</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="rp" class="form-check-input" value="rekrutment paralegal">
                    <label class="form-check-label" for="exampleCheck1">Rekrutment Paralegal</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="mfh" class="form-check-input" value="rekrutment dan/atau magang mahasiswa fakultas hukum">
                    <label class="form-check-label" for="exampleCheck1">Rekrutment dan/atau Magang Mahasiswa Fakultas Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="sh" class="form-check-input" value="seminar hukum">
                    <label class="form-check-label" for="exampleCheck1">Seminar Hukum</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="saksi" class="form-check-input" value="saksi ahli">
                    <label class="form-check-label" for="exampleCheck1">Saksi Ahli</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="dp" class="form-check-input" value="diklat paralegal">
                    <label class="form-check-label" for="exampleCheck1">Diklat Paralegal</label>
                </div>
                
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Sesuai Bidang Keahlian</label>
                <select name="keahlian" class="custom-select">
                    <option>Adat</option>
                    <option>Administrasi Pemerintahan</option>
                    <option>Akuntabilitas</option>
                    <option>Analisis Dampak Lingkungan</option>
                    <option>Aparatur Negara</option>
                    <option>APBN</option>
                    <option>Arbitrase</option>
                    <option>Badan Hukum & Badan Usaha</option>
                    <option>BMKG</option>
                    <option>BMN</option>
                    <option>BUMN</option>
                    <option>Energi, Migas & Tambang</option>
                    <option>Gaji & Tunjangan</option>
                    <option>kehutanan</option>
                    <option>Pertanian, Perkebunan, dan Perikanan</option>
                    <option>Sumberdaya Air & Kelautan</option>
                    <option>Lingkungan Hidup</option>
                    <option>Pertanahan</option>
                    <option>Keuangan & Perbankan</option>
                    <option>Perdagangan & Industri</option>
                    <option>Perdata & Islam</option>
                    <option>Pidana</option>
                    <option>Hukum Internasional</option>
                    <option>Penegakan Hukum dan Profesi Hukum</option>
                    <option>Korupsi</option>
                    <option>HAM</option>
                    <option>Konstitusional dan Tatanegara</option>
                    <option>Pelayanan Publik</option>
                    <option>Kependudukan</option>
                    <option>Pertahanan dan Keamanan</option>
                    <option>Medis</option>
                    <option>PEMDA</option>
                    <option>Politik & Pemilu</option>
                    <option>Infrastruktur</option>
                    <option>Perumahan</option>
                    <option>Transportasi</option>
                    <option>Tenaga Kerja</option>
                    <option>Pers, Telekomunikasi, dan Informatika</option>
                    <option>Pendidikan dan Kebudayaan</option>
                    <option>Narkotika</option>
                    <option>Riset dan Teknologi</option>
                    <option>Ekonomi</option>
                    <option>Kesehatan</option>
                    <option>Keuangan</option>
                    <option>Pembangunan</option>
                    <option>Ibadah & Keagamaan</option>
                    <option>kesejahteraan Rakyat</option>
                    <option>Lembaga Penjaminan</option>
                    <option>Peternakan</option>
                    <option>Organisasi Kelembagaan dan Profesi</option>
                    <option>Petunjuk Pelaksanaan dan Tata Kerja</option>
                    <option>Perdata</option>
                    <option>Syariah</option>
                    <option>Perizinan</option>
                    <option>Kearsipan</option>
                    <option>Geospasial</option>
                    <option>Tata Ruang</option>
                    <option>Pengembangan & Spesialisasi SDM</option>
                    <option>Perfilman</option>
                    <option>Rehabilitasi</option>
                    <option>Modal & Saham</option>
                    <option>Pariwisata</option>
                    <option>Surat Berharga</option>
                    <option>Investasi</option>
                    <option>PNPB</option>
                    <option>Pajak</option>
                    <option>Lembaga Keuangan</option>
                    <option>Jabatan Fungsional</option>
                    <option>Pengawasan dan Pengendalian</option>
                </select>
            </div>

            <div class="form-group">
            
                <p class="small">Data yang Saya isi adalah benar dan dengan mengisi formulir ini Saya setuju dan sepakat pada syarat dan ketentuan Bankum, PT. Aplikasi Untuk Bangsa</p>
            
            </div>

            <div class="form-group">
            
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="setuju2">
                    <label class="form-check-label" for="defaultCheck1">
                        Setuju dengan <a href="#" class="text-dark"><b>Syarat dan Ketentuan</b></a> Bankum, PT Aplikasi Untuk Bangsa
                    </label>
                </div>
            
            </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" id="btn-send2">Kirim</button>
      </div>

    </form>

    </div>
  </div>
</div>




<script src="<?= base_url();?>assets/js/jquery.js"></script>

<script>

    $(function(){
        $('#start').hide();
        $('#btn-start').click(function(){
            $('#start').toggle();
        })
    })

</script>

<script>

    $(function(){
        $('#btn-send').hide();
        $('#setuju').attr("checked", false);
        $('#setuju').click(function(){
            $('#btn-send').toggle();
        })
    })

</script>

<script>

    $(function(){
        $('#lbh-as-lainnya').hide();
        $('#rdio-lbh-as-lainnya').focus(function(){
            $('#lbh-as-lainnya').show();
        })

        $('#ketua, #wakil_ketua, #sekretaris, #bendahara').focus(function(){
            $('#lbh-as-lainnya').hide();
        })
    })

</script>

<script>

    $(function(){
        $('#btn-send2').hide();
        $('#setuju2').attr("checked", false);
        $('#setuju2').click(function(){
            $('#btn-send2').toggle();
        })
    })

</script>