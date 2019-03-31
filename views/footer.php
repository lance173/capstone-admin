            <?php include('edit-accountmodal.php'); ?>
            <footer class="page-footer">
                <div class="font-13 "> <b>USC LIBRARY SYSTEM 2.0</b> - All rights reserved © 2018.  </div>
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
    <script src="../assets/js/scripts/chartjs_demo.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
   
    <script src="../assets/vendors/Flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="../assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js" type="text/javascript"></script>
    <script src="../assets/vendors/Flot/jquery.flot.selection.js" type="text/javascript"></script>
    <script src="../assets/vendors/flot-orderBars/js/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="../assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
            });
        })

        //Articles DataTables
        $(function() {
            $('#publishedarticles-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#pendingarticles-table').DataTable({
                pageLength: 10,
            });
        })

        //Webpages DataTables
        $(function() {
            $('#activepages-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#pagebin-table').DataTable({
                pageLength: 10,
            });
        })

        //Students Users DataTables
        $(function() {
            $('#allstudents-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#clearedstudents-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#blockedstudents-table').DataTable({
                pageLength: 10,
            });
        })

        //Admin Users DataTables
        $(function() {
            $('#alladmins-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#systemadmins-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#editors-table').DataTable({
                pageLength: 10,
            });
        })
        $(function() {
            $('#authors-table').DataTable({
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