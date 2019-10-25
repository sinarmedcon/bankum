<br>
    <br>

<div class="jumbotron jumbotron-fluid mb-0 bg-danger" style="background-image:url('https://localhost/bankum/assets/image/bg-beauty.jpg'); background-repeat:no-repeat;">
    <div class="container">
        <div class="row">
        
            <div class="col-md-6">
            
                <h1 class="text-white"><b>Selamat Datang Kembali</b></h1>
                <p class="lead text-white">Silakan masuk untuk membagikan informasi dan ide-ide menarik Anda seputar hukum di Indonesia.</p>
            
            </div>


            <div class="col-md-6">
            
                <div class="card rounded">

                <h3 class="text-danger card-title text-center mt-3 mb-3"><b>Masuk</b></h3>

                    <div class="container">

                        <form action="proses_masuk" method="post">
                    
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-danger">Username</label>
                                <?php if(form_error('username')){?>
                                
                                    <div class="text-warning small"><?= form_error('username');?></div>

                                <?php
                                }
                                ?>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan memberikan username Anda Kepada siapapun</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-danger">Kata Sandi</label>
                                <?php if(form_error('password')){?>
                                
                                    <div class="text-warning small"><?= form_error('password');?></div>

                                <?php
                                }
                                ?>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kata sandi akun anda">
                            </div>

                            <div class="text-center">
                            
                                <button type="submit" class="btn btn-outline-danger mt-3 mb-3 masuk">Masuk</button>
                            
                            </div>
                        
                        </form>

                    </div>

                </div>
            
            </div>
        
        </div>
    </div>
</div>

<script src="<?= base_url();?>assets/js/jquery.js"></script>

