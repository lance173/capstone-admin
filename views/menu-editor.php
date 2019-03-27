<?php 
    require('header.php');
    include('nav.php');
    
    require('../controllers/WebPagesController.php');
    require('../controllers/MenuController.php');

    $ActivePages = loadActivePages();
    $menuitem = loadMenuItems();
    $menudropdown = loadMenuDropdown();
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuMnBarEditor');
    </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            
            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-window-maximize"></i> Edit Menu Bar </h3>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>


            <div class="row">
                <div class="col-md-11 mnurow"> 
                  
                    <div class="menubar-preview">
                                   
                        <?php 
                            $itm_prvmnu = "itemfromprevmenu1";
                            if(isset($menuitem)){foreach($menuitem as $prevwmenitm){   

                                if($prevwmenitm['Type']=='Static'){

                                    if($prevwmenitm['MenuItemID']==1){
                                    ?>
                                        <a href="<?php echo $prevwmenitm['PageLink'];?>" id="<?php echo $itm_prvmnu ?>" onmouseover="hoverinmnuprv('<?php echo $itm_prvmnu ?>')" onmouseout="hoveroutmnuprv('<?php echo $itm_prvmnu ?>')" style="background-color: #FFB041;">      
                                                <?php echo $prevwmenitm['ItemName'];?> 
                                        </a> 
                                    <?php
                                        } else{
                                    ?>
                                        <a href="<?php echo $prevwmenitm['PageLink'];?>" id="<?php echo $itm_prvmnu ?>" onmouseover="hoverinmnuprv('<?php echo $itm_prvmnu ?>')" onmouseout="hoveroutmnuprv('<?php echo $itm_prvmnu ?>')">      
                                                <?php echo $prevwmenitm['ItemName'];?> 
                                        </a>               
                                               

                        

                        <?php
                          } } elseif($prevwmenitm['Type']=='Dropdown') {                                                  
                        ?>

                        <div class="drpdwn-prvw">
                            <button class="dropbtn" id="<?php echo $itm_prvmnu ?>" onmouseover="hoverinmnuprv('<?php echo $itm_prvmnu ?>')" onmouseout="hoveroutmnuprv('<?php echo $itm_prvmnu ?>')" > <?php echo $prevwmenitm['ItemName'];?>
                              <i class="fa fa-caret-down"></i>
                            </button>

                            <div class="drpdwn-prvw-content">

                                <?php 
                                    if(isset($menudropdown)){foreach($menudropdown as $mndrpdn){  

                                    if($mndrpdn['MenuID']==$prevwmenitm['MenuItemID']){
                                ?>

                                        <a href="<?php echo $mndrpdn['PageLink'];?>"><?php echo $mndrpdn['DropItemName'];?></a>

                                <?php 
                                    } 

                                }} 
                                ?>

                            </div>
                        </div> 

                        <?php 
                            } 
                            $itm_prvmnu ++;
                        }}
                        ?>
                    </div>
                </div>
            </div> 

            <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title"> <i class="fas fa-bars"></i> &nbsp; Menu Items </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table" id="menuitems-table" style="margin-bottom: 0px;">                            
                                <tbody>

                                    

                                    <?php
                                        $listmenitm = "clickmnitm1";   
                                        if(isset($menuitem)){foreach($menuitem as $menitm){ 
                                            $unqid = $menitm['MenuItemID']; 
                                    ?>

                                        <?php
                                        if($menitm['MenuItemID']== 1 ){
                                        ?>                                        

                                            <tr class="men-itm" id="<?php echo $listmenitm ?>" style="background-color: #6ba3ff; border: 3px solid #6ba3ff; color: #FFF;" onclick="selectMenuItem('<?php echo $listmenitm ?>')" onmouseover="showmnuitemborder('<?php echo $listmenitm ?>')" onmouseout="hidemnuitemborder('<?php echo $listmenitm ?>')">
                                                <td> <?php echo $menitm['ItemName'];?> </td>
                                            </tr>

                                        <?php
                                        } else{  
                                        ?>
                                                  
                                            <tr class="men-itm" id="<?php echo $listmenitm ?>" onclick="selectMenuItem('<?php echo $listmenitm ?>')" onmouseover="showmnuitemborder('<?php echo $listmenitm ?>')" onmouseout="hidemnuitemborder('<?php echo $listmenitm ?>')">
                                                <td> <?php echo $menitm['ItemName'];?> </td>
                                            </tr>

                                    <?php 
                                        } 
                                        $listmenitm++;
                                        }} 
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="ibox-footer" style="text-align: center">
                           <button class="btn btn-info" onclick="addAmenuItem();" > <i class="fas fa-plus"></i> Add New Item </button> 
                        </div>
                    </div>
                </div>

                
                <div class="col-md-7" >

                    <!-- If 'Home' is Selected -->
                    <div class="ibox" id="home_mnuitmform">
                        <div class="ibox-head">
                            <div class="ibox-title"> Home </div>
                        </div>
                        <div class="ibox-body">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control" disabled>
                                    <option selected >Beginning</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" disabled>
                                    <option selected>Static</option>
                                </select>                                                                   
                            </div>
                            <div>
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" disabled>
                                        <option selected>Custom Link</option>
                                    </select>
                                </div>
                                <div>
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" value="Home" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>                                            
                                            <input class="form-control" type="text" value="capstone-user/index.php" disabled>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                
                        </div>                        
                    </div>

                    <!-- Selected Menu Item to edit -->
                    <div class="ibox" id="mnuitmform" style="display: none;">
                        <div class="ibox-head">
                            <div class="ibox-title"> Edit </div>
                            <div> <a href="#"> <button class="btn add-btn2"> <i class="far fa-edit"></i> Edit</button> </a> <a href="#"> <button class="btn delete-btn"> Remove from Menu <i class="fas fa-times"></i> </button> </a> </div>
                        </div>
                        <div class="ibox-body">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control">
                                    <option selected>After Home</option>
                                    <option>After Libraries</option>
                                    <option>After Other Services</option>
                                    <option>After Linkages</option>
                                    <option>After Electronic Resources</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" id="sttcordrpdwnA" onchange="staticordropdownA();">
                                    <option selected disabled hidden>Static or Drop-down</option>
                                    <option>Static</option>
                                    <option>Drop-down</option>                                    
                                </select>
                            </div>
                            <div id="chosenstaticA">
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" id="pageorcustomlinkA1" onchange="ifcustomlinkA1();">
                                        <option selected disabled hidden>Select Page</option>                                        
                                        <option>Linkages</option>
                                        <option>Custom Link</option>
                                    </select>
                                </div>
                                <div id="chosencustomlinkA1">
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="Display Name">
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>
                                            <div class="input-group-icon">
                                                <div class="input-icon"><i class="fa fa-link"></i></div>
                                                <input class="form-control" type="text" placeholder="url">
                                            </div>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                                                                                              
                            <div id="chosendropdownA">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Display Name">
                                </div>
                                Drop-down list
                                <div class="col-md-11 offset-md-1">
                                    <div class="drpdwn-list">
                                        <button class="btn drpitm-btn"> Link 1 </button>
                                        <button class="btn drpitm-btn"> Link 2 </button>
                                        <button class="btn drpitm-btn"> Link 3 </button>
                                    </div>
                                    <button class="btn adddrp-btn"> <i class="fas fa-plus"></i> Add new drop-down item </button>
                                    <div class="adddrpform">
                                        <div class="form-group">
                                            <label>Choose Page</label>
                                            <select class="form-control" id="pageorcustomlinkA2" onchange="ifcustomlinkA2();">
                                                <option selected disabled hidden>Select Page</option>
                                                <option>Linkages</option>
                                                <option>Custom Link</option>
                                            </select>
                                        </div>
                                        <div id="chosencustomlinkA2">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text" placeholder="Display Name">
                                            </div>
                                            <div class="form-group">
                                                <label>URL or Link</label>
                                                <div class="input-group-icon">
                                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                                    <input class="form-control" type="text" placeholder="url">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <button> Add to List </button>
                                    </div>                                     
                                </div>                                
                            </div>                            
                        </div>
                        <div class="ibox-footer" style="text-align: right;">
                            <button class="btn btn-success" style="margin-right: 20px;"> Save Changes </button>
                        </div>
                    </div>

                    <!-- Add a new Menu Item -->
                    <div class="ibox" id="addnew_mnuitmform" style="display: none;" >
                        <div class="ibox-head">
                            <div class="ibox-title"> Add New </div>                        
                        </div>
                        <div class="ibox-body">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control">
                                    <option selected hidden value="2">After Home</option>

                                    <?php 
                                        $valOfPostn = 2;
                                        if(isset($menuitem)){foreach($menuitem as $prevwmenitm){
                                    ?>
                                        <option value="<?php echo $valOfPostn ?>">After <?php echo $prevwmenitm['ItemName'];?> </option>
                                    <?php $valOfPostn++;
                                     }} ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" id="sttcordrpdwnB" onchange="staticordropdownB('sttcordrpdwnB');">
                                    <option selected disabled hidden>Static or Drop-down</option>
                                    <option value="Static">Static</option>
                                    <option value="Drop-down">Drop-down</option>                                    
                                </select>
                            </div>
                            <div id="chosenstaticB">
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" id="pageorcustomlinkB1" onchange="ifcustomlinkB1();">
                                        <option selected disabled hidden>Select Page</option>                                                                              
                                        <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                            <option value="<?php echo $page['WebPageID'];?>" > <?php echo $page['PageTitle'];?> </option>
                                        <?php }} ?>
                                        <option>Custom Link</option>
                                    </select>
                                </div>
                                <div id="chosencustomlinkB1">
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="ItemNameStc" placeholder="Display Name">
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>
                                            <div class="input-group-icon">
                                                <div class="input-icon"><i class="fa fa-link"></i></div>
                                                <input class="form-control" type="text" name="PageLink" placeholder="url">
                                            </div>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                                                                                              
                            <div id="chosendropdownB">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="ItemNameDD" placeholder="Display Name">
                                </div>
                                Drop-down list
                                <div class="col-md-11 offset-md-1">
                                    <div class="drpdwn-list">
                                        <button class="btn drpitm-btn"> Link 1 </button>
                                        <button class="btn drpitm-btn"> Link 2 </button>
                                        <button class="btn drpitm-btn"> Link 3 </button>
                                    </div>
                                    <button class="btn adddrp-btn"> <i class="fas fa-plus"></i> Add new drop-down item </button>
                                    <div class="adddrpform">
                                        <div class="form-group">
                                            <label>Choose Page</label>
                                            <select class="form-control" id="pageorcustomlinkB2" onchange="ifcustomlinkB2();">
                                                <option selected disabled hidden>Select Page</option>
                                                
                                                <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                                    <option> <?php echo $page['PageTitle'];?> </option>
                                                 <?php }} ?>    

                                                <option>Custom Link</option>
                                            </select>
                                        </div>
                                        <div id="chosencustomlinkB2">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text" placeholder="Display Name">
                                            </div>
                                            <div class="form-group">
                                                <label>URL or Link</label>
                                                <div class="input-group-icon">
                                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                                    <input class="form-control" type="text" placeholder="url">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <button> Add to List </button>
                                    </div>                                     
                                </div>                                
                            </div>                            
                        </div>
                        <div class="ibox-footer" style="text-align: right;">
                            <button class="btn btn-success" style="margin-right: 20px;"> Submit </button>
                        </div>
                    </div>

                </div>
            </div>                

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  