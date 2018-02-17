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

  </head>
 
  <body style="background-image: url(resource/img_path/mz2.png)">
     
    <div class="container-fluid">
       <div class="col-md-12">
          <div class="alert alert-success">
              <div class="col-md-4">
                <img src="resource/img_path/mz.jpg" height="150px" width="100px"/>   
              </div>
                <div class="alert alert-success">
                 <h1> Eastern University </h1>
                 <h4> Library Management System </h4>
                </div>
              
          </div>
       </div>
        <br> <br>
         <div class="col-md-4">
           <h3> 
            <font color="green">
                <?php 
                $msg=$this->session->userdata('message');
                 if(isset($msg)) {
                     echo  $msg; 
                     $this->session->unset_userdata('message');
                 }  
                 ?>
            </font>
            </h3>
         </div>  
    
        <div class="col-md-5">
        
        </div>
        
        <div class="col-md-3">
         <div class="alert alert-danger">
             <p style="text-align: center"><a href="<?php echo base_url();?>login_controller/logout.html">LogOut </a> </p>  
           </div>  
         </div> 
    
        <div class="col-md-3">
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
        
        <div class="col-md-6">
             <br> <br> <br> <br> <br>
            <div class="alert alert-success">
                <h1 style="text-align: center"> Wellcome to EU Library </h1>
            </div>
        </div>
        
        <div class="col-md-3">
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
             <div class="alert alert-info">
                 <p> <a href="<?php echo base_url();?>issue_controller/show_issued_book.html">Issued Book List </a> </p>
             </div>
            
        </div>
        

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>