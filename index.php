
    <html lang='en'>
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset='utf-8'/>
        <title>WAEV | Lets surf with IT</title>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta content='width=device-width, initial-scale=1' name='viewport' />
        <meta content='' name='description' />
        <meta content='' name='author' />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
       <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all' rel='sty<!DOCTYPE html>
       lesheet' type='text/css' /> -->
        <link href='../assets/global/plugins/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/simple-line-icons/simple-line-icons.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css' rel='stylesheet' type='text/css' />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href='../assets/global/plugins/dropzone/dropzone.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/dropzone/basic.min.css' rel='stylesheet' type='text/css' />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href='../assets/global/css/components.min.css' rel='stylesheet' id='style_components' type='text/css' />
        <link href='../assets/global/css/plugins.min.css' rel='stylesheet' type='text/css' />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href='../assets/layouts/layout/css/layout.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/layouts/layout/css/themes/darkblue.min.css' rel='stylesheet' type='text/css' id='style_color' />
        <link href='../assets/layouts/layout/css/custom.min.css' rel='stylesheet' type='text/css' />
        <!-- END THEME LAYOUT STYLES -->
        <link rel='shortcut icon' href='favicon.ico' /> </head>
    <!-- END HEAD -->

    <body class=''>
        <!-- BEGIN HEADER -->
        <div class='page-header navbar navbar-fixed-top'>
            <!-- BEGIN HEADER INNER -->
           <div class='page-logo'>
                    <a href='index.html'>
                        <img src='../assets/layouts/layout/img/logo.jpeg' width='180' height='25'  alt='logo' class='logo-default' /> </a>
                    
                </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class='clearfix'> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class='page-container'>
            
           
            <div class=''>
            <br>
            <div class=''>
                <div class='page-content'>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-md-12'>
                            
                            <form  action='upload.php' enctype= 'multipart/form-data' class='dropzone dropzone-file-area' id='my-dropzone' style='width: 500px; margin-top: 50px;'>

                                <h3 class='sbold'>Drop file here or click to upload</h3>

                                 </form>
                                
                                </div> &nbsp <br><br>
                                 <div align='center'>
                                <a download='CROSSFIT_NEW_DATA_31-05-2016.xls' href='../exel_file'>Dowload Excel Format</a>
                                </div> <br><br>
                                <div align='center'><button  type='button' disabled="true" id='btnUpload' col-md- class='btn btn-circle blue-madison btn-lg primary' >Next <span class='glyphicon glyphicon-arrow-right'></span></button>
                            
                        </div>
                    </div>
                </div>




            </div>
            <!-- END CONTENT -->
          
            
        </div>
        <!-- END CONTAINER -->
        <div class='page-footer'>
            <div class='page-footer-inner'> 2016 &copy.
                <a href='http://www.waev.in' title='One step solution to fitness automation' target='_blank'>WAEV Techno Services Pvt. Ltd.</a>
            </div>
            <div class='scroll-to-top'>
                <i class='icon-arrow-up'></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN CORE PLUGINS -->
        <script src='../assets/global/plugins/jquery.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/js.cookie.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/jquery.blockui.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js' type='text/javascript'></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src='../assets/global/plugins/dropzone/dropzone.min.js' type='text/javascript'></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src='../assets/global/scripts/app.min.js' type='text/javascript'></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src='../assets/pages/scripts/form-dropzone.min.js' type='text/javascript'></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src='../assets/layouts/layout/scripts/layout.min.js' type='text/javascript'></script>
        <script src='../assets/layouts/layout/scripts/script.js' type='text/javascript'></script>
        <!--<script src='http://code.jquery.com/ui/1.9.2/jquery-ui.js'></script>-->
        <script src='/js/dropzone_event.min.js'></script>
        <script type='text/javascript'>
            document.getElementById('btnUpload').onclick = function () {
                 location.href = 'process_data.php';
             };
        </script>
        <script type="text/javascript">
            
            Dropzone.options.my-dropzone = {
            maxFiles: 1,
            accept: function(file, done) {
            console.log("uploaded");
            done();
            },
            init: function() {
            this.on("maxfilesexceeded", function(file){
            alert("No moar files please!");
            });
        </script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
 
