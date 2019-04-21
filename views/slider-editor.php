<?php 
    require('header.php');
    include('nav.php');

    require('../controllers/SliderController.php'); 

    $slide = loadSliderItems();

    if($_SESSION['profile']['SiteRole'] == 'Author'){
    ?>
        <script>
            window.location='restrictedpage.php';
        </script> 
    <?php
    }
?>
  <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuSliderEditor'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            
            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-angle-left"></i> <i class="fas fa-angle-right"></i> Edit Home Slider </h3>
            </div>

            <div class="row" id="notificationsection">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
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
                                <div class="carousel-item active" style="background-image: url('<?php echo $slide['FirstSlideImage']; ?>')">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h3> <?php echo $slide['FirstSlideTitle']; ?> </h3>
                                    <p> <?php echo $slide['FirstSlideDescription']; ?> </p>
                                  </div>
                                </div>
                                <!-- Slide Two - Set the background image for this slide in the line below -->
                                <div class="carousel-item" style="background-image: url('<?php echo $slide['SecondSlideImage']; ?>')">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h3> <?php echo $slide['SecondSlideTitle']; ?> </h3>
                                    <p> <?php echo $slide['SecondSlideDescription']; ?> </p>
                                  </div>
                                </div>
                                <!-- Slide Three - Set the background image for this slide in the line below -->
                                <div class="carousel-item" style="background-image: url('<?php echo $slide['ThirdSlideImage']; ?>')">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h3> <?php echo $slide['ThirdSlideTitle']; ?> </h3>
                                    <p> <?php echo $slide['ThirdSlideDescription']; ?> </p>
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
                            <form method="POST" action="../controllers/SliderController.php" enctype="multipart/form-data">
                                <div class="row" style="margin-top: 50px;">
                                        <div class="col-md-5 offset-1">
                                          <h4> First Slide </h4>
                                          <a href="#fileupload1" id="fileupload1">
                                            <div class="slide-editimgonclick">
                                              <img class="slide-displayimg" src="<?php echo $slide['FirstSlideImage']; ?>" id="output_image-slide1">
                                              <div class="hoveronimg">
                                                <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                              </div>
                                            </div>
                                          </a> 
                                          <input id="upload-file1" type="file" accept="image/*" name="firstimage" onchange="preview_imageslide1(event)" />
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="firsttitle" class="slide-title" value="<?php echo $slide['FirstSlideTitle']; ?>"  >
                                          <textarea class="slide-desc" name="firstdescription" cols="7"><?php echo $slide['FirstSlideDescription']; ?> </textarea>
                                          <br>                            
                                        </div>
                                      </div>

                                      <div class="row" style="margin-top: 50px;">
                                        <div class="col-md-5 offset-1">
                                          <h4> Second Slide </h4>
                                          <a href="#fileupload2" id="fileupload2">
                                            <div class="slide-editimgonclick">
                                              <img class="slide-displayimg" src="<?php echo $slide['SecondSlideImage']; ?>" id="output_image-slide2">
                                              <div class="hoveronimg">
                                                <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                              </div>
                                            </div>
                                          </a> 
                                          <input id="upload-file2" type="file" accept="image/*" name="secondimage" onchange="preview_imageslide2(event)" />
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="secondtitle" class="slide-title" value="<?php echo $slide['SecondSlideTitle']; ?>"  >
                                          <textarea class="slide-desc" name="seconddescription" cols="7"><?php echo $slide['SecondSlideDescription']; ?> </textarea>
                                          <br>                            
                                        </div>
                                      </div>
                                  
                                      <div class="row" style="margin-top: 50px;">
                                        <div class="col-md-5 offset-1">
                                          <h4> Third Slide </h4>
                                          <a href="#fileupload3" id="fileupload3">
                                            <div class="slide-editimgonclick">
                                              <img class="slide-displayimg" src="<?php echo $slide['ThirdSlideImage']; ?>" id="output_image-slide3">
                                              <div class="hoveronimg">
                                                <div class="editicon-slide"> <i class="fas fa-pen-square"></i> </div>
                                              </div>
                                            </div>
                                          </a> 
                                          <input id="upload-file3" type="file" accept="image/*" name="thirdimage" onchange="preview_imageslide3(event)" />
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="thirdtitle" class="slide-title" value="<?php echo $slide['ThirdSlideTitle']; ?>"  >
                                          <textarea class="slide-desc" name="thirddescription" cols="7"><?php echo $slide['ThirdSlideDescription']; ?> </textarea>
                                          <br>                            
                                        </div>
                                      </div>

                                      <div class="btns-saveNdiscard"> 
                                        <center> 
                                            <button class="btn btn-lg btn-success" type="submit" name="btnEditSlider"> Save Changes </button> 
                                            <button class="btn btn-lg btn-warning" type="reset" onclick="discardChangesOnSliderEditor()"> Discard </button> 
                                        </center>
                                      </div>  
                                </div> 
                            </form>                 
                  </div>  
                </div> 
            </div>                 

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  