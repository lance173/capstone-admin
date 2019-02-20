<?php 
    require('header.php');
    include('nav.php');
?>
  <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuSliderEditor'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div class="inpage-alerts">
                    <div class="alert alert-success">
                        Slider changed successfully.
                    </div>
                </div>
            </div>


            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-angle-left"></i> <i class="fas fa-angle-right"></i> Edit Home Slider </h3>
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

                        <div class="container">

                          <div class="row" style="margin-top: 50px;">
                            <div class="col-md-5 offset-1">
                              <h4> First Slide </h4>
                              <a href="#fileupload1" id="fileupload1">
                                <div class="slide-editimgonclick">
                                  <img class="slide-displayimg" src="../assets/img/slider/usc-jb-lrc.jpg" id="output_image-slide1">
                                  <div class="hoveronimg">
                                    <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                  </div>
                                </div>
                              </a> 
                              <input id="upload-file1" type="file" accept="image/*" onchange="preview_imageslide1(event)" />
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="" class="slide-title" value="USC LIBRARY WEBSITE VERSION 2.0"  >
                              <textarea class="slide-desc" cols="7"> This is a description for the first slide. </textarea>
                              <br>                            
                            </div>
                          </div>

                          <div class="row" style="margin-top: 50px;">
                            <div class="col-md-5 offset-1">
                              <h4> Second Slide </h4>
                              <a href="#fileupload2" id="fileupload2">
                                <div class="slide-editimgonclick">
                                  <img class="slide-displayimg" src="http://placehold.it/1900x1080" id="output_image-slide2">
                                  <div class="hoveronimg">
                                    <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                  </div>
                                </div>
                              </a> 
                              <input id="upload-file2" type="file" accept="image/*" onchange="preview_imageslide2(event)" />
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="" class="slide-title" value="Second Slide"  >
                              <textarea class="slide-desc" cols="7"> This is a description for the second slide. </textarea>
                              <br>                            
                            </div>
                          </div>
                      
                          <div class="row" style="margin-top: 50px;">
                            <div class="col-md-5 offset-1">
                              <h4> Third Slide </h4>
                              <a href="#fileupload3" id="fileupload3">
                                <div class="slide-editimgonclick">
                                  <img class="slide-displayimg" src="http://placehold.it/1900x1080" id="output_image-slide3">
                                  <div class="hoveronimg">
                                    <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                  </div>
                                </div>
                              </a> 
                              <input id="upload-file3" type="file" accept="image/*" onchange="preview_imageslide3(event)" />
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="" class="slide-title" value="Third Slide"  >
                              <textarea class="slide-desc" cols="7"> This is a description for the third slide. </textarea>
                              <br>                            
                            </div>
                          </div>

                          <div style="margin-top: 10px; padding-bottom: 50px;"> 
                            <center> <button class="btn btn-lg btn-success" style="margin-bottom: 10px;"> Save Changes </button> <button class="btn btn-lg btn-warning" style="margin-bottom: 10px;"> Discard </button> </center>
                          </div>
                          

                        </div>                  
                  </div>  
                </div> 
            </div>                 

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  