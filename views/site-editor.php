<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> Site Editor </h3>
            </div>

            <div class="row">
                <div class="col-md-12">                    
                    <div class="ibox">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                              <!-- Slide One - Set the background image for this slide in the line below -->
                              <div class="carousel-item active" style="background-image: url('../assets/img/slider/usc-jb-lrc.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                  <h3>USC LIBRARY WEBSITE VERSION 2.0</h3>
                                  <p>This is a description for the first slide.</p>
                                </div>
                              </div>
                              <!-- Slide Two - Set the background image for this slide in the line below -->
                              <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                                <div class="carousel-caption d-none d-md-block">
                                  <h3>Second Slide</h3>
                                  <p>This is a description for the second slide.</p>
                                </div>
                              </div>
                              <!-- Slide Three - Set the background image for this slide in the line below -->
                              <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                                <div class="carousel-caption d-none d-md-block">
                                  <h3>Third Slide</h3>
                                  <p>This is a description for the third slide.</p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <i class="fas fa-angle-left"></i>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <i class="fas fa-angle-right"></i>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>                  
                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  