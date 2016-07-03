<?php
    
	    include_once'PHPExcel/IOFactory.php';
        error_reporting(0);
        include 'reader.php';
        $excel = new Spreadsheet_Excel_Reader();
		session_start();
        date_default_timezone_set("Indian");
		$excelFile=$_SESSION['currentfile'];
        $headings = array("FirstName","firstname","firstName","first name","FIRSTNAME","first_name","Firstname","First_Name","LastName","lastname","lastName","last name","LASTNAME","last_name","Lastname","Last_Name","Mobile1","mobile1","mobile_1","MOBILE1","MOBILE_1","Mobile_1","Mob","mob","MOB","Mobile2","mobile2","Mobile_2","Email","EmailID","emailid","email_id","EmailID","EmailId","Email_ID","Email_id","DOB","DateOfBirth","Date_of_Birth","dob","dateofbirth","date_of_birth","DOJ","doj","dateofjoin","dateofjoining","doe","DateOfEnding","dateofending","DOE","Package_amt","Package amt.","Package Amt.","Package_amt","package amt","package Amt","Package Amount","package amount","package Amount","paid amount","Paid amount","PAID AMOUNT","Paid Amount","paid_amount");
		
        $empty_err="<span style='color:red'>Should not empty</span>";
        $excel->read('upload/'.$excelFile); 

        function valid($date, $format = 'j-M-Y') {
                $datetime = DateTime::createFromFormat($format, $date, new DateTimeZone('UTC'));
            $errors   = DateTime::getLastErrors();
             return ($errors['warning_count'] + $errors['error_count'] === 0);
        }

            //storing data in $excel_data array
            $rows=1;
           while($rows<=$excel->sheets[0]['numRows']) {
            $columns=1;
            while($columns<=$excel->sheets[0]['numCols']) {
               
                   if($columns==12||$columns==14||$columns==15){
                        if($rows==1){
                            $cell = isset($excel->sheets[0]['cells'][$rows][$columns]) ? $excel->sheets[0]['cells'][$rows][$columns] : '';
                            $excel_data[$rows][$columns]=$cell;
                        }
                        else{
                           $cell = date('j-M-Y', PHPExcel_Shared_Date::ExcelToPHP($excel->sheets[0]['cells'][$rows][$columns]));
                        $excel_data[$rows][$columns]=$cell;  
                        }
                        
                    }
                    else{
                        $cell = isset($excel->sheets[0]['cells'][$rows][$columns]) ? $excel->sheets[0]['cells'][$rows][$columns] : '';
                        $excel_data[$rows][$columns]=$cell;
                    }
                     
                
                $columns++;
            }  
             $rows++;
            }

            //code for validation
            $x=2;
            while($x<=$rows) {

                $y=1;
                while($y<=$columns){

                   if(in_array($excel_data[1][$y], $headings)) {
                       
                        if(!empty($excel_data[$x][$y])){
                            $cell=$excel_data[$x][$y];

                            //checking mobile1
                            if($y==5){

                               if(!preg_match('/(7|8|9)\d{9}/',$cell)){
                                    $data="<span style='color:red'>$cell</span>";
                                    $excel_data[$x][$y]=$data;
                                
                                }
                            }

                            //checking email
                            if($y==8){
                                if (!filter_var($cell, FILTER_VALIDATE_EMAIL)) {
                                    $data="<span style='color:red'>$cell</span>";
                                    $excel_data[$x][$y]=$data;
                                }
                            }

                            //checking date
                           /* if($y==12||$y==14||$y==15){
                                if(!valid($cell)){

                                    $data="<span style='color:red'>Wrong format</span>";
                                    $excel_data[$x][$y]=$data;
                                }
                            }*/

                            if($y==18||$y==19){
                                if (!preg_match('/^[0-9]{1,}/',$cell)) {

                                    $data="<span style='color:red'>$cell</span>";
                                    $excel_data[$x][$y]=$data;
                                }
                            }

          
                       }
                        
                    }

                    //checking mobile2
                    if($y==6){

                               if(!preg_match('/(7|8|9)\d{9}/',$cell)){
                                    $data="<span style='color:red'>$cell</span>";
                                    $excel_data[$x][$y]=$data;
                                
                                }
                            }
                    
                      

                  $y++;  
                }
                $x++;
            }
            
            
            

        ?>		
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
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/simple-line-icons/simple-line-icons.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css' rel='stylesheet' type='text/css' />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href='../assets/global/plugins/datatables/datatables.min.css' rel='stylesheet' type='text/css' />
        <link href='../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css' rel='stylesheet' type='text/css' />
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
                    <div class='row'> ";

                    
                    	<div class='col-md-12'>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class='portlet light portlet-fit bordered'>
                                <div class='portlet-title'>
                                    <div class='caption'>
                                        <i class='icon-settings font-red'></i>
                                        <span class='caption-subject font-red sbold uppercase'>Your Database</span>
                                    </div>
                                    
                                </div>
                                <div class='portlet-body'>
                                    <div class='table-toolbar'>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='btn-group'>
                                                    <button id='sample_editable_1_new' class='btn green'> Add New
                                                        <i class='fa fa-plus'></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class="tools"> </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="portlet-body table-both-scroll" style="overflow:auto;height: 100px width:100%">
                                    <table class='table  table-hover table-bordered' id='sample_editable_1' >

                                       <?php
                                           // print_r($excel_data);
                                             //code for excel all heading
                                              
                                        

                                            $x=1;

                                             while($x<=$rows) {
                                             echo "
                                                <thead>
                                                    <tr>
                                             ";
                                                if($x==2){

                                                    break;
                                                 }
                                                $z=1;
                                                while($z<=2){
                                                    if($z==1){
                                                     echo "<th>Edit</th>";
                                                    }
                                                    if($z==2){
                                                    echo "<th>Delete</th>";
                                                    }
                                                 $z++;
                                                }

                                                $y=1;
                                                while($y<=$columns) {
                                                    $cell = $excel_data[$x][$y];
                                             
                                                  
                                                     echo "<th>$cell</th>";  
                                                    $y++;
                                                }  
                                                echo "
                                                    </tr>
                                                </thead>

                                                ";
                                                $x++;
                                                }

                                             //code for edit & delete button
                                              echo "
                                                <tbody>
                                                    
                                                ";
                                             //code for all records in excel
                                             
                                                $x=2;
                                                while($x<=$rows) {
                                                    echo "<tr>";

                                                    $z=1;
                                                    while($z<=2){
                                                        if($z==1){
                                                             echo "<td><a class='edit' href='javascript:;''> Edit </a></td>";
                                                        }
                                                        if($z==2){
                                                        echo "<td><a class='delete' href='javascript:;''> Delete </a></td>";
                                                        }
                                                        $z++;
                                                    }
                                                        $y=1;
                                                    while($y<=$columns) {

                                                        if(in_array($excel_data[1][$y], $headings)){
                                                            
                                                            $cell = empty($excel_data[$x][$y]) ?$empty_err : $excel_data[$x][$y];
                                                                
                                                                    echo "<td>$cell</td>";
                                                        }
                                                        else{
                                                            
                                                            $cell = empty($excel_data[$x][$y]) ?'':$excel_data[$x][$y];
                                                            echo "<td>$cell</td>";
                                                        }
                                                       
                                                       $y++; 
                                                       
                                                        
                                                    }  
                                                    echo "</tr>";
                                                    $x++;
                                                }
                                             
                                                echo "
                                                    
                                                </tbody>

                                                ";
                                        ?>  
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
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
        <script src='../assets/global/scripts/datatable.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/datatables/datatables.min.js' type='text/javascript'></script>
        <script src='../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js' type='text/javascript'></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src='../assets/global/scripts/app.min.js' type='text/javascript'></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src='../assets/pages/scripts/table-datatables-editable.min.js' type='text/javascript'></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src='../assets/layouts/layout/scripts/layout.min.js' type='text/javascript'></script>
        <script src='../assets/layouts/layout/scripts/demo.min.js' type='text/javascript'></script>
        <script src='../assets/layouts/global/scripts/quick-sidebar.min.js' type='text/javascript'></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
 

 
