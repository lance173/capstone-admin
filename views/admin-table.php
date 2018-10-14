<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="sidebar-item-icon fa fa-user-shield"></i> Admin Users </h3>
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Line tabs</div>
                                <div> <a href="add-useradmin.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Add New Admin</button> </a> </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="fas fa-users-cog"></i> All Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-user-tie"></i> System Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-3" data-toggle="tab"><i class="fa fa-user-cog"></i> Editors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-4" data-toggle="tab"><i class="fa fa-user-edit"></i> Authors</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1">

                                         <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>                                               
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2">

                                        Display All System admins.

                                    </div>
                                    <div class="tab-pane fade"  id="tab-7-3">

                                    Display All Editors.

                                    </div>
                                    <div class="tab-pane fade"  id="tab-7-4">

                                    Display All Authors.

                                    </div>
                                </div><br></div>
                        </div>                  
                    </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  