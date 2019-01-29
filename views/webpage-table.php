<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="far fa-window-restore"></i> Pages </h3>
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Site Pages</div>
                                <div> <a href="add-article.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Add New Page </button> </a> </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="far fa-window-maximize"></i> Published Pages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-file-signature"></i> Pending Approval</a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1">

                                         <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $lnkid = "showpgelnk1";?> <!-- TO BE ADDED: $lnkid will increment every <tr> -->

                                                <tr onmouseover="showpgelnks('<?php echo $lnkid ?>')" onmouseout="hidepgelnks('<?php echo $lnkid ?>')">                                                  
                                                    <td> <div class="pagetabletitle"> Montessori Campus </div> 
                                                        <div class="pagetableminlink" id="<?php echo $lnkid ?>"> 
                                                            <a href=""> Edit </a> |  <a href=""> View </a> | <a href="" class="page-deletelink"> Delete </a> 
                                                        </div>
                                                    </td>
                                                    <td>Reed Richards</td>
                                                    <td>07/08/2018</td>
                                                </tr> 

                                                                   <!-- Just here to catch attention--> 
                                                <?php $lnkid++; ?> <!-- Exactly what i said from the first comment -->
                                                                    <!-- Just here to catch attention-->

                                                <tr onmouseover="showpgelnks('<?php echo $lnkid ?>')" onmouseout="hidepgelnks('<?php echo $lnkid ?>')">                                                    
                                                    <td> <div class="pagetabletitle"> North Campus </div> 
                                                        <div class="pagetableminlink" id="<?php echo $lnkid ?>"> 
                                                            <a href=""> Edit </a> |  <a href=""> View </a> | <a href="" class="page-deletelink"> Delete </a> 
                                                        </div>
                                                    </td>
                                                    <td>Ben Grimm</td>
                                                    <td>03/01/2018</td>
                                                </tr>

                                                                   <!-- Just here to catch attention--> 
                                                <?php $lnkid++; ?> <!-- Exactly what i said from the first comment -->
                                                                    <!-- Just here to catch attention-->

                                                <tr onmouseover="showpgelnks('<?php echo $lnkid ?>')" onmouseout="hidepgelnks('<?php echo $lnkid ?>')">                                                    
                                                    <td> <div class="pagetabletitle"> Talamban Campus </div> 
                                                        <div class="pagetableminlink" id="<?php echo $lnkid ?>"> 
                                                            <a href=""> Edit </a> |  <a href=""> View </a> | <a href="" class="page-deletelink"> Delete </a> 
                                                        </div>
                                                    </td>
                                                    <td>Susan Storm</td>
                                                    <td>01/19/2018 </td>
                                                </tr>

                                                                   <!-- Just here to catch attention--> 
                                                <?php $lnkid++; ?> <!-- Exactly what i said from the first comment -->
                                                                    <!-- Just here to catch attention-->

                                                <tr onmouseover="showpgelnks('<?php echo $lnkid ?>')" onmouseout="hidepgelnks('<?php echo $lnkid ?>')">
                                                    <td> <div class="pagetabletitle"> South Campus </div> 
                                                        <div class="pagetableminlink" id="<?php echo $lnkid ?>"> 
                                                            <a href=""> Edit </a> |  <a href=""> View </a> | <a href="" class="page-deletelink"> Delete </a> 
                                                        </div>
                                                    </td>
                                                    <td>Johnny Storm</td>
                                                    <td>11/12/2017</td>
                                                </tr>                                              
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2">

                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th>Photo</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 30px;"> <a class="btn btn-artvw" href="#" role="button"> <i class="fas fa-check"></i> Approve </a>  </td>
                                                    <td style="text-align: center;"> <img src="../assets/img/posts/sliman-vst.jpg" class="img-artvw"> </td>
                                                    <td>Siliman University Siliman University Visitors</td>
                                                    <td>Reed Richards</td>
                                                    <td>10/18/2018</td>
                                                    <td> 
                                                        
                                                        <a class="btn btn-primary" href="#" role="button"> View </a>
                                                        <a class="btn btn-rptusr" href="#" role="button"> <i class="fas fa-trash-alt"></i> </a>
                                                    </td>
                                                </tr>                                                                                               
                                            </tbody>
                                        </table> 

                                    </div>                                   
                                </div><br></div>
                        </div>                  
                    </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  