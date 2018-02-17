 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Library Management System </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>resource/js/jquery.dataTables.css" rel="stylesheet">
    <script src="<?php echo base_url();?>resource/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>resource/js/jquery.dataTables.js"></script>
  </head>
 
   <body>
  
    <div class="container-fluid">
        <div class="col-md-12">
            <div style="text-align: center">
             <div class="alert alert-success">
                 <h1> Eastern University </h1>
                 <h4> Library Management System </h4>
             </div>
            </div>
        </div>
        <br> <br>
         <div class="col-md-4">
           
         </div>  
    
        <div class="col-md-6">
         <h3> 
              <font color="red">
          <?php
          
          $msg=$this->session->userdata('message');
          if(isset($msg)){
              echo $msg;
          $this->session->unset_userdata('message');
          }
          ?>
              </font>
          </h3>
        </div>
        
        <div class="col-md-2">
         <div class="alert alert-danger">
             <p style="text-align: center"><a href="<?php echo base_url();?>login_controller/logout.html">LogOut </a> </p>  
           </div>  
         </div> 
    
        <div class="col-md-2">
            <div class="alert alert-info">
                <p> <a href="<?php echo base_url();?>eu_controller/add_students.html"> Add Students </a> </p>
            </div>
             <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>eu_controller/student_list.html"> Students List</a> </p>
             </div>
             <div class="alert alert-info">
                <p> <a href="<?php echo base_url();?>department_controller/add_department.html"> Add Department </a> </p>
             </div>
            <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>department_controller/department_list.html"> Departments List </a> </p>
             </div>
             <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>issue_controller/issue_book.html"> Issue Book </a> </p>
             </div>
        </div>
        
        <div class="col-md-8">
            <div class="alert alert-success">
                <h4> Book List </h4>
            </div>
            <table class="display" id="zarin">
              
                    <thead>
                        <tr>
                            <th style=""> SL No </th>
                            <th style=""> Student ID </th>
                            <th style=""> Student Name </th>
                            <th style=""> Department Name </th>
                            <th style=""> Book Name </th>
                            <th style=""> Date </th>

                        </tr>
                    </thead>
                    
                    <?php
                    $i=0;
                    foreach($issuedBook_list_info as $value){ 
                    $i++;    
                        ?>
                    <tbody>
                     <td> <?php echo $i;?> </td>
                     <td> <?php echo $value->student_id;?> </td> 
                     <td> <?php echo $value->student_name;?> </td> 
                     <td> <?php echo $value->book_name;?> </td> 
                     
                     <td> 
                         <?php
                        $dep= $value->dep_name;
                        $depData=$this->department_model->dep_data($dep);
                        if(isset($depData)){
                            echo $depData->department_name;
                        }
                         ?> 
                     </td>
                     
                     <td> <?php echo $value->date;?> </td>
                 
                     </tbody>
                    <?php } ?>      
             </table>
         </div>
         
        <div class="col-md-2">
            <div class="alert alert-info">
               <p> <a href="<?php echo base_url();?>book_controller/add_book.html"> Add Book </a> </p>
            </div>
             <div class="alert alert-info">
               <p> <a href="<?php echo base_url();?>book_controller/book_list.html"> Books List </a> </p> 
             </div>
             <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>book_controller/add_author.html"> Add Author </a> </p>
             </div>
            <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>book_controller/author_list.html"> Authors List </a> </p>
             </div>
              <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>issue_controller/show_issued_book.html">Issued Book List </a> </p>
             </div>
           
        </div>
 </div> <!-- /container -->        
        <hr>
      <div class="">
          <footer style="text-align: center">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
      </div>
     <script>
   $(document).ready(function(){
   $("#zarin").DataTable();   
   }); 
  </script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>

           