
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
         <div class="alert alert-info">
             <h4 style="text-align: center"> Update Department </h4>
             
         </div>
         
           <form method="post" action="<?php echo base_url();?>department_controller/Update_dep_information.html">
             <div class="form-group">
             <label for="exampleInputText">Department Name</label>
             <input type="hidden" class="form-control" name='dep_id'id="exampleInputText" value="<?php echo $edit_dep_info->dep_id;?>">
             <input type="text" class="form-control" name='dep_name'id="exampleInputText" value="<?php echo $edit_dep_info->department_name;?>">
            </div>
             
              <button type="submit" class="btn btn-success btn-lg btn-block">Update Department</button>
           </form> 
       
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>