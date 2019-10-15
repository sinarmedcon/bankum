   <!-- vendor css -->
   <link rel="stylesheet" href="<?= base_url();?>assets/css/select2.min.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/daterangepicker.css" media="all">

    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/main.css" media="all">


<br>
    <br>

<div class="jumbotron jumbotron-fluid mb-0" style="background:linear-gradient(to bottom right, #C004D9, #AB05F2, #6D0FF2, #3316F2, #0D0D0D)">

    <div class="container">
    
        <h1 class="display-5 text-white">Fitur Gabung Bankum</h1>
        <p class="lead text-left text-white">Jika Anda berminat untuk bergabung menjadi mitra advokat, LBH/OBH/LKBH, maupun perusahaan anda juga bisa melakukannya mellaui fitur website kami di www.bankum.id</p>

        <div class="text-center">
            <button type="button" class="btn btn-outline-primary btn-lg shadow mt-5 mb-3 rounded" id="btn-start">Mulai</button>
        </div>
    
    </div>

</div>


<div class="jumbotron jumbotron-fluid mb-0 bg-white">

    <div class="container">
    
        <div class="text-right">
        
            <h4 class="display-6"><b>Selamat Datang Rekan Bankum</b></h4>
            <p class="lead text-muted">Silakan klik tombol Mulai di atas untuk mulai mengisi formulir pendaftaran sebagai mitra yang telah kami sediakan. Anda dapat mendaftarkan diri Anda sebagai salah satu mitra advokat kami, mendaftarkan LBH/OBH/LKBH/Komunitas Anda, maupaun perusahaan tempat Anda bekerja sebagai salah satu mitra kami.</p>

            <p class="text-muted lead"><div class="text-danger">*</div> Pastikan Anda mengisi formulir pendaftaran dengan data yang sebenar-benarnya.</p>
        
        </div>
    
    </div>

</div>

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
    
        <div class="owl-carousel owl-theme">
            <div class="item-video" data-merge="3">
            
               <!-- start -->

               <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registrasi Sebagai Mitra Advokat</h2>
     
                        <div class="row row-space">
                        
                            <div class="col-md-6">
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Nama Depan" name="nama_depan">
                                </div>
                            
                            </div>

                            <div class="col-md-6">
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Nama Belakang" name="nama_belakang">
                                </div>
                            
                            </div>
                        
                        </div>

                        <!-- email -->

                        <div class="row row-space">
                        
                            <div class="col-md-6">
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="email" placeholder="Email" name="email">
                                </div>
                            
                            </div>

                            <div class="col-md-6">
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="email" placeholder="Konfirmasi Email" name="konfirm_email">
                                </div>
                            
                            </div>
                        
                        </div>

                        <!-- end email -->

                        <!-- hp/wa -->

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="HP/WhatsApp" name="hp">
                        </div>

                        <!-- end hp/wa -->


                        <!-- tempat lahir -->

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tempat Lahir" name="tempat_lahir">
                        </div>

                        <!-- end tempat lahir -->

                        <!-- tanggal lahir & Jenis kelamin -->
                        <div class="row row-space">

                            <!-- tanggal lahir -->
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Lahir" name="tanggal_lahir">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <!-- end tanggal lahir -->

                            <!-- jenis kelamin -->
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jenis_kelamin">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end jenis kelamin -->

                        </div>

                        <!-- end tanggal lahir dan tempat lahir -->

                        <!-- alamat domisili -->

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Alamat Domisili" name="domisili">
                        </div>

                        <!-- end alamat domisili -->

                        <!-- pendidikan terakhir -->

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pendidikan">
                                    <option disabled="disabled" selected="selected">Pendidikan</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- end pendidikan terakhir -->

                        <!-- profesi -->
                        <label>Profesi saat ini (pilih beberapa kategori yang sesuai)</label>

                        <!-- hasil profesi -->

                        <textarea name="profesi" id="hasil-profesi" placeholder="Profesi Anda..." class="form-control" disabled></textarea><br>

                        <!-- end hasil profesi -->

                        <!-- advokat -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-advokat" value="Advokat" class="profesi">
                                    <p class="text-muted ml-3 small"> Advokat</p>
                                </div>
                            </div>
                        </div>
                        <!-- end advokat -->

                        <!-- paralegal -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-paralegal" value="Paralegal" class="profesi">
                                    <p class="text-muted ml-3 small"> Paralegal</p>
                                </div>
                            </div>
                        </div>
                        <!-- end paralegal -->

                        <!-- dosen -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-dosen" value="Dosen" class="profesi">
                                    <p class="text-muted ml-3 small"> Dosen</p>
                                </div>
                            </div>
                        </div>
                        <!-- end dosen -->

                        <!-- notaris -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-notaris" value="Notaris" class="profesi">
                                    <p class="text-muted ml-3 small"> Notaris</p>
                                </div>
                            </div>
                        </div>
                        <!-- end notaris -->

                        <!-- PPAT -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-PPAT" value="PPAT" class="profesi">
                                    <p class="text-muted ml-3 small"> PPAT</p>
                                </div>
                            </div>
                        </div>
                        <!-- end PPAT -->

                        <!-- mahasiswa fakultas hukum -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-mhs-fak-hukum" value="Mahasiswa Fakultas Hukum" class="profesi">
                                    <p class="text-muted ml-3 small"> Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <!-- end mahasiswa fakultas hukum -->

                        <!-- polisi -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-polisi" value="Polisi" class="profesi">
                                    <p class="text-muted ml-3 small"> Polisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- end polisi -->

                        <!-- hakim -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-hakim" value="Hakim" class="profesi">
                                    <p class="text-muted ml-3 small"> Hakim</p>
                                </div>
                            </div>
                        </div>
                        <!-- end hakim -->

                        <!-- jaksa -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-jaksa" value="Jaksa" class="profesi">
                                    <p class="text-muted ml-3 small"> Jaksa</p>
                                </div>
                            </div>
                        </div>
                        <!-- end jaksa -->

                        <!-- swasta -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-swasta" value="Swasta" class="profesi">
                                    <p class="text-muted ml-3 small"> Swasta</p>
                                </div>
                            </div>
                        </div>
                        <!-- end swasta -->

                        <!-- PNS -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-PNS" value="PNS" class="profesi">
                                    <p class="text-muted ml-3 small"> PNS</p>
                                </div>
                            </div>
                        </div>
                        <!-- end PNS -->

                        <!-- aktivis -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-aktivis" value="Aktivis" class="profesi">
                                    <p class="text-muted ml-3 small"> Aktivis</p>
                                </div>
                            </div>
                        </div>
                        <!-- end aktivis -->

                          <!-- wartawan/pers -->
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="profesi-wartawan" value="Wartawan" class="profesi">
                                    <p class="text-muted ml-3 small"> Wartawan</p>
                                </div>
                            </div>
                        </div>
                        <!-- end wartawan -->

                        <!-- lainnya -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="lainnya" value="lainnya" id="lainnya">
                                    <p class="text-muted ml-3 small"> Lainnya</p>
                                </div>
                            </div>
                        </div>
                        <!-- end lainnya -->

                        <!-- isi lainnya -->

                        <div class="input-group" id="profesi-lainnya">
                            <input class="input--style-1" type="text" placeholder="Profesi lainnya" name="profesi-lainnya">
                        </div>

                        <!-- end isi lainnya -->

                        <!-- end profesi -->


                        <!-- jasa -->
                        <label>Beritahu Kami, Jasa atau Layanan Hukum apa yang akan Kami Promosikan ?</label>

                        <!-- hasil jasa -->

                        <textarea name="jasa" id="hasil-jasa" placeholder="Jasa yang Anda Tawarkan..." class="form-control" disabled></textarea><br>

                        <!-- end hasil jasa -->

                        <!-- bantuan hukum gratis -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="bantuan-hukum-gratis" value="Bantuan Hukum Gratis" class="jasa">
                                    <p class="text-muted ml-3 small"> Bantuan Hukum Gratis</p>
                                </div>
                            </div>
                        </div>
                        <!-- end bantuan hukum gratis -->

                        <!-- perkara pidana -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="perkara-pidana" value="Perkara Pidana" class="jasa">
                                    <p class="text-muted ml-3 small"> Perkara Pidana</p>
                                </div>
                            </div>
                        </div>
                        <!-- end perkara pidana -->

                        <!-- perkara perdata -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="perkara-perdata" value="Perkara Perdata" class="jasa">
                                    <p class="text-muted ml-3 small"> Perkara Perdata</p>
                                </div>
                            </div>
                        </div>
                        <!-- end perkara perdata -->

                        <!-- perkara tata usaha negara -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="perkara-tata-usaha-negara" value="Perkara Tata Usaha Negara" class="jasa">
                                    <p class="text-muted ml-3 small"> Perkara Tata Usaha Negara</p>
                                </div>
                            </div>
                        </div>
                        <!-- end perkara tata usaha negara -->

                        <!-- program pro-bono -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="program-probono" value="Program Pro-bono" class="jasa">
                                    <p class="text-muted ml-3 small"> Program Pro-bono</p>
                                </div>
                            </div>
                        </div>
                        <!-- end program probono -->

                        <!-- konsultasi hukum -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="konsultasi-hukum" value="Konsultasi Hukum" class="jasa">
                                    <p class="text-muted ml-3 small"> Konsultasi Hukum</p>
                                </div>
                            </div>
                        </div>
                        <!-- end konsultasi hukum -->

                        <!-- penyuluhan hukum -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="penyuluhan-hukum" value="Penyuluhan Hukum" class="jasa">
                                    <p class="text-muted ml-3 small"> Penyuluhan Hukum</p>
                                </div>
                            </div>
                        </div>
                        <!-- end penyuluhan hukum -->

                        <!-- edukasi -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="edukasi" value="Edukasi" class="jasa">
                                    <p class="text-muted ml-3 small"> Edukasi</p>
                                </div>
                            </div>
                        </div>
                        <!-- end edukasi -->

                        <!-- surat perjanjian -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="surat-perjanjian" value="Surat Perjanjian" class="jasa">
                                    <p class="text-muted ml-3 small"> Surat Perjanjian</p>
                                </div>
                            </div>
                        </div>
                        <!-- end surat perjanjian -->

                        <!-- magang -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="magang" value="Magang Mahasiswa Fakultas Hukum" class="jasa">
                                    <p class="text-muted ml-3 small"> Magang</p>
                                </div>
                            </div>
                        </div>
                        <!-- end magang -->

                        <!-- jasa pendirian badan usaha -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="jasa-pendirian-badan-usaha" value="Jasa Pendirian Badan Usaha" class="jasa">
                                    <p class="text-muted ml-3 small"> Jasa Pendirian Badan Usaha</p>
                                </div>
                            </div>
                        </div>
                        <!-- end jasa pendirian badan usaha -->

                        <!-- seminar -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="seminar" value="Seminar" class="jasa">
                                    <p class="text-muted ml-3 small"> Seminar</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Seminar -->

                        <!-- diklat paralegal -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="diklat-paralegal" value="Diklat Paralegal" class="jasa">
                                    <p class="text-muted ml-3 small"> Diklat Paralegal</p>
                                </div>
                            </div>
                        </div>
                        <!-- end diklat paralegal -->

                        <!-- pendidikan khusus -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="pendidikan khusus" value="Pendidikan Khusus" class="jasa">
                                    <p class="text-muted ml-3 small"> Pendidikan Khusus</p>
                                </div>
                            </div>
                        </div>
                        <!-- end pendidikan khusus -->

                        <!-- PKPA -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="PKPA" value="PKPA" class="jasa">
                                    <p class="text-muted ml-3 small"> PKPA</p>
                                </div>
                            </div>
                        </div>
                        <!-- end PKPA -->

                        <!-- saksi ahli -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="saksi-ahli" value="Saksi Ahli" class="jasa">
                                    <p class="text-muted ml-3 small"> Saksi Ahli</p>
                                </div>
                            </div>
                        </div>
                        <!-- end saksi ahli -->

                        <!-- berita hukum -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="berita-hukum" value="Berita Hukum" class="jasa">
                                    <p class="text-muted ml-3 small"> Berita Hukum</p>
                                </div>
                            </div>
                        </div>
                        <!-- end berita hukum -->

                        <!-- diklat paralegal -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="diklat-paralegal" value="Diklat Paralegal" class="jasa">
                                    <p class="text-muted ml-3 small"> Diklat Paralegal</p>
                                </div>
                            </div>
                        </div>
                        <!-- end diklat paralegal -->

                          <!-- lainnya -->
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" value="lainnya" id="jasa-lainnya">
                                    <p class="text-muted ml-3 small"> Lainnya</p>
                                </div>
                            </div>
                        </div>
                        <!-- end lainnya -->

                        <!-- isi lainnya -->

                        <div class="input-group" id="jasa_lainnya">
                            <input class="input--style-1" type="text" placeholder="Jasa lainnya" name="jasa-lainnya">
                        </div>

                        <!-- end isi lainnya -->

                        <!-- end jasa -->

                        <!-- kategori bidang keahlian -->

                        <div class="input-group">
                            
                            <select name="bidang-keahlian" class="custom-select" id="inputGroupSelect01">
                                <option disabled="disabled" selected="selected">Kategori bidang keahlian</option>
                                <option>Adat</option>
                                <option>Administrasi Kepemerintahan</option>
                                <option>Akuntabilitas</option>
                                <option>Analisis Dampak Lingkungan</option>
                                <option>Aparatur Negara</option>
                                <option>APBN</option>
                                <option>Arbitrase</option>
                                <option>Badan Hukum & Badan Usaha</option>
                                <option>BMKG</option>
                                <option>BMN</option>
                                <option>BUMN</option>
                                <option>Ekonomi</option>
                                <option>Energi, Migas, dan Tambang</option>
                                <option>Gaji dan Tunjangan</option>
                                <option>Kehutanan</option>
                                <option>Pertanian, Perkebunan, dan Perikanan</option>
                                <option>Sumberdaya Air dan Kelautan</option>
                                <option>Lingkungan Hidup</option>
                                <option>Pertahanan</option>
                                <option>Keuangan dan Perbankan</option>
                                <option>Perdagangan dan Industri</option>
                                <option>Perdata dan Islam</option>
                                <option>Pidana</option>
                                <option>Hukum Internasional</option>
                                <option>Penegakan Hukum dan Profesi Hukum</option>
                                <option>Korupsi</option>
                                <option>HAM</option>
                                <option>Konstitusional dan Tata Negara</option>
                                <option>Pelayanan Publik</option>
                                <option>Kependudukan</option>
                                <option>Pertahanan dan Keamanan</option>
                                <option>Medis</option>
                                <option>PEMDA</option>
                                <option>Politik dan Pemilu</option>
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
                                <option>Ibadah dan Keagamaan</option>
                                <option>Kesejahteraan Rakyat</option>
                                <option>Lembaga Penjaminan</option>
                                <option>Peternakan</option>
                                <option>Kelembagaan dan Profesi</option>
                                <option>Petunjuk Pelaksanaan dan Tata Kerja</option>
                                <option>Perdata</option>
                                <option>Syariah</option>
                                <option>Perizinan</option>
                                <option>Kearsipan</option>
                                <option>Geospasial</option>
                                <option>tata Ruang</option>
                                <option>Pengembangan dan Spesialisasi SDM</option>
                                <option>Perfilman</option>
                                <option>Rehabilitasi</option>
                                <option>Modal dan Saham</option>
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

                        <!-- end kategori bidang keahlian -->

                        <!-- upload foto -->

                        <label>Upload foto (maksimal 1 MB)</label>
                        <div class="input-group">
                        
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>

                        </div>

                        <!-- end upload foto -->

                        <!-- agreement -->

                        <label>Dengan mengisi formulir ini saya setuju dan tunduk pada syarat dan ketentuan Bankum App - Bankum.id</label>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Dengan ini saya menyatakan setuju dengan <a href="" class="text-dark"><b>Syarat dan Ketentuan</b></a> Bankum App - Bankum.id, PT Aplikasi Untuk Bangsa</label>
                        </div>

                        <!-- end agreement -->

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="daftar">Daftar</button>
                        </div>

                </div>
            </div>

               <!-- end -->
            
            </div>

            <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
            <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=FBu_jxT1PkA"></a></div>
        </div>
    
    </div>

</div>

<script src="<?= base_url();?>assets/js/jquery.js"></script>
<script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>

<script>

$('.owl-carousel').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'slideInDown',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450
});

</script>

<!-- Vendor JS-->
<script src="<?= base_url();?>assets/js/select2.min.js"></script>
<script src="<?= base_url();?>assets/js//moment.min.js"></script>
<script src="<?= base_url();?>assets/js/daterangepicker.js"></script>

<!-- Main JS-->
<script src="<?= base_url();?>assets/js/global.js"></script>

<script>

    $(function(){
        $('#profesi-lainnya').hide();
        $('#lainnya').click(function(){
            $('#profesi-lainnya').toggle().addClass("animated bounceInDown");
        })
    })

</script>

<script>

    $(function(){
        $('.profesi').click(function(){
            var profesi = [];
            $('.profesi:checked').each(function(){
                if($(this).is(":checked")){
                    profesi.push($(this).val());
                }
            });
            profesi = profesi.toString();
            $('#hasil-profesi').text(profesi);
        })
    })

</script>

<script>

    $(function(){
        $('#jasa_lainnya').hide();
        $('#jasa-lainnya').click(function(){
            $('#jasa_lainnya').toggle().addClass("animated slideInDown");
        })
    })

</script>

<script>

    $(function(){
        $('.jasa').click(function(){
            var jasa = [];
            $('.jasa:checked').each(function(){
                if($(this).is(":checked")){
                    jasa.push($(this).val());
                }
            });
            jasa = jasa.toString();
            $('#hasil-jasa').text(jasa);
        })
    })

</script>

<script>

    $(function(){
        $('#daftar').hide();
        $('#customCheck1').click(function(){
            $('#daftar').toggle().addClass("animated flip");
        })
    })

</script>