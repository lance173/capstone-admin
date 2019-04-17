            <?php include('edit-accountmodal.php'); ?>
            <footer class="page-footer">
                <div class="font-13 "> <b>USC LIBRARY SYSTEM WEBSITE 2.0</b> - All rights reserved © 2019.  </div>
                <div class="px-4"> ACERO • QUIOBE • JALUAG • SASEDOR </div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div> <!-- CONTENT WRAPPER found in any page  -->
    </div> <!-- PAGE WRAPPER found in nav.php -->

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="../assets/js/post-customjs.js"></script>
    <script src="../assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    

    <!-- PAGE LEVEL PLUGINS-->
    
    <script src="../assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
   
    
    
    <script src="../assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
            });
        })

        
        //Reported Users DataTables
        $(function() {
            $('#reports-table').DataTable({
                pageLength: 10,
            });
        })

        //Activity Log DataTables
        $(function() {
            $('#activitylog-table').DataTable({
                pageLength: 10,
            });
        })

    </script>  
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script> 
    <script src="../assets/js/scripts/charts_flot_demo.js" type="text/javascript"></script>

</body>

</html>