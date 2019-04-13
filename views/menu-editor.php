<?php 
    require('header.php');
    include('nav.php');
    
    require('../controllers/WebPagesController.php');
    require('../controllers/MenuController.php');

    $ActivePages = loadActivePages();
    $menuitem = loadMenuItems();
    $menudropdown = loadMenuDropdown();

    $noOfMenuItems = countItemsInMenu();

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
                                        <a href="<?php echo $prevwmenitm['PageLink'];?>" class="defmenprev-item" id="<?php echo $itm_prvmnu ?>" onmouseover="hoverinmnuprv('<?php echo $itm_prvmnu ?>')" onmouseout="hoveroutmnuprv('<?php echo $itm_prvmnu ?>')" >      
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

                                            <tr class="men-itm default-men-itm" id="<?php echo $listmenitm ?>" onclick="selectMenuItem('<?php echo $listmenitm ?>', <?php echo $menitm['MenuItemID'] ?>)" onmouseover="showmnuitemborder('<?php echo $listmenitm ?>')" onmouseout="hidemnuitemborder('<?php echo $listmenitm ?>')">
                                                <td> <?php echo $menitm['ItemName'];?> </td>
                                            </tr>

                                        <?php
                                        } else{  
                                        ?>
                                                  
                                            <tr class="men-itm" id="<?php echo $listmenitm ?>" onclick="selectMenuItem('<?php echo $listmenitm ?>', <?php echo $menitm['MenuItemID'] ?>)" onmouseover="showmnuitemborder('<?php echo $listmenitm ?>')" onmouseout="hidemnuitemborder('<?php echo $listmenitm ?>')">
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
                        <?php if($noOfMenuItems < 6) { ?>
                        <div class="ibox-footer" style="text-align: center">
                           <button class="btn btn-info" onclick="clickAddMenuItem();" > <i class="fas fa-plus"></i> Add New Item </button> 
                        </div>
                        <?php } ?>
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
                            <div class="ibox-title" id="__page-title">  </div>
                            <div> 
                                <button class="btn delete-btn" onclick="deleteMenuItem()"> Remove from Menu <i class="fas fa-times"></i> </button> 
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="form-group">

                                <input type="hidden" name="edit_link_ID" id="_editID" value="">

                                <label>Position</label>
                                <select class="form-control" name="edit_link_position" id="__editPosition">
                                     <?php if(isset($menuitem)){foreach($menuitem as $prevwmenitm){ ?>
                                        <option value="<?php echo $prevwmenitm['Position']+1; ?>">After <?php echo $prevwmenitm['ItemName'];?> </option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="edit_link_type" id="sttcordrpdwnA" onchange="staticordropdownA();">
                                    <option selected disabled hidden>Static or Dropdown</option>
                                    <option value="Static">Static</option>
                                    <option value="Dropdown">Dropdown</option>                                    
                                </select>
                            </div>
                            <div id="chosenstaticA">
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" id="pageorcustomlinkA1" onchange="ifcustomlinkA1();" name="edit_link_type_static_page">
                                        <option selected disabled hidden>Select Page</option>                                        
                                        <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                            <option value="<?php echo $page['WebPageID'];?>" > <?php echo $page['PageTitle'];?> </option>
                                        <?php }} ?>
                                        <option value="__custom_link__">Custom Link</option>
                                    </select>
                                </div>
                                <div id="chosencustomlinkA1">
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" id="edit_displaynameA" name="edit_link_type_static_page_custom_name" placeholder="Display Name">
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>
                                            <div class="input-group-icon">
                                                <div class="input-icon"><i class="fa fa-link"></i></div>
                                                <input class="form-control" id="edit_url1" type="text" name="edit_link_type_static_page_custom_url" placeholder="url">
                                            </div>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                                                                                              
                            <div id="chosendropdownA">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" id="edit_displaynameB" name="edit_link_type_dropdown_name" type=" text" placeholder="Display Name">
                                </div>
                                Dropdown list
                                <div class="col-md-11 offset-md-1">
                                    <ul class="list-group">
                                    </ul>
                                    
                                    <div class="adddrpform">
                                        <div class="form-group">
                                            <label>Choose Page</label>
                                            <select class="form-control" id="pageorcustomlinkA2" name="edit_link_type_dropdown_item_page" onchange="ifcustomlinkA2();">
                                                <option selected disabled hidden>Select Page</option>

                                                <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                                    <option value="<?php echo $page['WebPageID'];?>" > <?php echo $page['PageTitle'];?> </option>
                                                <?php }} ?>
                                                
                                                <option value="__custom_link__">Custom Link</option>

                                            </select>
                                        </div>
                                        <div id="chosencustomlinkA2">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text" name="edit_link_type_dropdown_item_page_custom_name" placeholder="Display Name">
                                            </div>
                                            <div class="form-group">
                                                <label>URL or Link</label>
                                                <div class="input-group-icon">
                                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                                    <input class="form-control" type="text" name="edit_link_type_dropdown_item_page_custom_url" placeholder="url">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <button onclick="addEditDropdownPage()"> Add to List </button>
                                    </div>                                     
                                </div>                                
                            </div>                            
                        </div>
                        <div class="ibox-footer" style="text-align: right;">
                            <button class="btn btn-success" style="margin-right: 20px;" onclick="editMenu()"> Save Changes </button>
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
                                <select class="form-control" name="new_link_position">
                                    <option selected hidden value="2">After Home</option>

                                    <?php if(isset($menuitem)){foreach($menuitem as $prevwmenitm){ ?>
                                        <option value="<?php echo $prevwmenitm['Position']+1; ?>">After <?php echo $prevwmenitm['ItemName'];?> </option>
                                    <?php }} ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="new_link_type" id="sttcordrpdwnB" onchange="staticordropdownB('sttcordrpdwnB');">
                                    <option selected disabled hidden>Static or Dropdown</option>
                                    <option value="Static">Static</option>
                                    <option value="Dropdown">Dropdown</option>                                    
                                </select>
                            </div>
                            <div id="chosenstaticB">
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" id="pageorcustomlinkB1" name="new_link_type_static_page" onchange="ifcustomlinkB1();">
                                        <option selected disabled hidden>Select Page</option>                                                                              
                                        <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                            <option value="<?php echo $page['WebPageID'];?>" > <?php echo $page['PageTitle'];?> </option>
                                        <?php }} ?>
                                        <option value="__custom_link__">Custom Link</option>
                                    </select>
                                </div>
                                <div id="chosencustomlinkB1">
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text"  placeholder="Display Name" name="new_link_type_static_page_custom_name">
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>
                                            <div class="input-group-icon">
                                                <div class="input-icon"><i class="fa fa-link"></i></div>
                                                <input class="form-control" type="text" name="new_link_type_static_page_custom_url" placeholder="url">
                                            </div>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                                                                                              
                            <div id="chosendropdownB">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="new_link_type_dropdown_name" placeholder="Display Name">
                                </div>
                                Dropdown list
                                <div class="col-md-11 offset-md-1">
                                    <ul class="list-group">
                                    </ul>
                                    
                                    <div class="adddrpform">
                                        <div class="form-group">
                                            <label>Choose Page</label>
                                            <select name="new_link_type_dropdown_item_page" class="form-control" id="pageorcustomlinkB2" onchange="ifcustomlinkB2();">
                                                <option selected disabled hidden>Select Page</option>
                                                
                                                <?php if(isset($ActivePages)){foreach($ActivePages as $page){ ?>
                                                    <option value="<?= $page['WebPageID']?>"> <?php echo $page['PageTitle'];?> </option>
                                                 <?php }} ?>    

                                                <option  value="__custom_link__">Custom Link</option>
                                            </select>
                                        </div>
                                        <div id="chosencustomlinkB2">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="new_link_type_dropdown_item_page_custom_name" class="form-control" type="text" placeholder="Display Name">
                                            </div>
                                            <div class="form-group">
                                                <label>URL or Link</label>
                                                <div class="input-group-icon">
                                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                                    <input name="new_link_type_dropdown_item_page_custom_url" class="form-control" type="text" placeholder="url">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <button onclick="addNewDropdownPage()"> Add to List </button>
                                    </div>                                     
                                </div>                                
                            </div>                            
                        </div>
                        <div class="ibox-footer" style="text-align: right;">
                            <button onclick="createMenu()" class="btn btn-success" style="margin-right: 20px;"> Submit </button>
                        </div>
                    </div>

                </div>
            </div>                

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  