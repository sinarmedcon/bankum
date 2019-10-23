<br>
    <br>

<style>

.image-flip:hover .backside, .image-flip.hover .backside {
-webkit-transform: rotateY(0deg);
-moz-transform: rotateY(0deg);
-o-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
transform: rotateY(0deg);
}
 
.image-flip:hover .frontside, .image-flip.hover .frontside {
-webkit-transform: rotateY(180deg);
-moz-transform: rotateY(180deg);
-o-transform: rotateY(180deg);
transform: rotateY(180deg);
}
 
.image-flip {
margin-bottom:200px;
width: 200px;
height: 200px;
}
 
.mainflip {
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-ms-transition: 1s;
-moz-transition: 1s;
-moz-transform: perspective(1000px);
-moz-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
position: relative;
}
 
.frontside, .backside {
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
-ms-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-moz-transition: 1s;
-moz-transform-style: preserve-3d;
-o-transition: 1s;
-o-transform-style: preserve-3d;
-ms-transition: 1s;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
position: absolute;
top: 0;
left: 0;
}
 
.frontside {
-webkit-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
z-index: 2;
}
 
.backside {
background: white;
-webkit-transform: rotateY(-180deg);
-moz-transform: rotateY(-180deg);
-o-transform: rotateY(-180deg);
-ms-transform: rotateY(-180deg);
transform: rotateY(-180deg);
}
 
.card, .card-img-top {
border-radius: 0;
}


</style>


<div class="jumbotron jumbotron-fluid mb-0" style="background:linear-gradient(to top right, #2B1C8C, #433DF2, #3B42D9, #5C73F2, #0D0D0D)">

    <div class="container">
    
        <h3 class="display-4" style="background: linear-gradient(to right, #F2E205, #F2B705, #D98E04, #BF7839, #BF0404);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;"><b>Tentang Bankum</b></h3>
        <p class="lead" style="background: linear-gradient(to right, #F2E205, #F2B705, #D98E04, #BF7839, #BF0404);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;"><b>Kami hadir untuk menjawab tantangan permasalahan layanan hukum di Indonesia</b></p>
    <p class="text-white"><b>Visi : </b>Menjadi perusahaan penyedia layanan bantuan dan jasa hukum nomor 1 dan terpercaya di Indonesia.</p>
    <p class="text-white"><b>Misi : </b></p>
    <ul>
    
        <li class="text-white">Memberikan kemudahan untuk masyarakat luas menemukan Bantuan dan Layanan hukum sesuai dengan aturan dan perundang-undangan yang berlaku.</li>
        <li class="text-white">Memberdayakan praktisi hukum khususnya di daerah agar mendapatkan kesempatan dan kesejahteraan yang sama.</li>
        <li class="text-white">Menyediakan layanan hukum yang cepat, efisien, dan profesional untuk memenuhi kebutuhan sesuai dengan kemampuan masyarakat.</li>
        <li class="text-white">Memberikan layanan diskusi, informasi, konsultasi, edukasi, berita hukum, serta menyajikan peraturan dan undang-undang secara gratis agar terciptanya masyarakat sadar hukum.</li>
    
    </ul>

    
    </div>

</div>


<div class="jumbotron jumbotron-fluid mb-0 bg-white">
  <div class="container">

  <h3 class="display-4 mb-5" style="background: linear-gradient(to right, #262F40, #4C5973, #818DA6, #BFC7D9);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;"><b>Tentang Tim Kami</b></h3>

        <div class="row">
        
            <div class="col-md-4 mb-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

            <div class="col-md-4 mb-0 mt-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>


            <div class="col-md-4 mb-0 mt-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </div>

        <!-- next flip -->
        <div class="row">
        
            <div class="col-md-4 mb-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

            <div class="col-md-4 mb-0 mt-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>


            <div class="col-md-4 mb-0 mt-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card shadow" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card shadow" style="width:20rem;">
                                <div class="card-header">
                                    This is a Header
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is a card component with header and footer.</p>
                                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                                </div>
                                <div class="card-footer">
                                    This is a Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </div>


  </div>
</div>
