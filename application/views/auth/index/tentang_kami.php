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
width: 300px;
height: 250px;
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

<div class="jumbotron jumbotron-fluid mb-0" style="background:linear-gradient(35deg, #6588A6, #012626, #01401C, #012611, #517339)">
  <div class="container">
        <h4 class="text-warning"><b>Tentang Kami</b></h4>
        <div class="row">
        
            <div class="col-md-4 mb-0">
            
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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
                            <div class="card" style="width:20rem;">
                                <img class="card-img-top img- fluid" src="<?= base_url();?>assets/image/header.jpg" alt="card image">
                                <div class="card-body">
                                    <h4 class="card-title">Card Title</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:20rem;">
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