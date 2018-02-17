
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
    <script src="<?php echo base_url();?>resource/js/jquery.min.js" type="text/javascript"></script>
   
  </head>
 
   <body>
     
     <script>
           $(document).ready(function(){
           $("#studentID").change(function(){
           var zm=$("#studentID").val();   
           $.ajax({
             type:"POST",  
             url:"<?php echo base_url();?>issue_controller/getAllName/"+zm,
             success:function(data){
                $("#name").html(data);
             }
           });
           });  
              
          }); 
        </script>    
     <script>
           $(document).ready(function(){
           $("#department").change(function(){
           var mz=$("#department").val();   
           $.ajax({
             type:"POST",  
             url:"<?php echo base_url();?>issue_controller/getAllBook/"+mz,
             success:function(data){
                $("#book").html(data);
             }
           });
           });  
              
          }); 
        </script>  
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
         <div class="alert alert-info">
             <h4 style="text-align: center"> Issue book </h4>
             
         </div>
         
          <form method="post" action="<?php echo base_url();?>book_controller/issue_book_info.html">
             
             <div class="form-group">
             <label >Student ID</label>
             <input type="text" class="form-control" name='student_id'id="studentID" placeholder="Student ID">
            </div>
            <div class="form-group">
             <label >Student Name</label>
             <select name="student_name"  class="form-control" id="name">
                
             </select>
            </div>
             
             <div class="form-group">
             <label >Department Name</label>
             <select name="dep_name"  class="form-control" id="department">
                 <option value=""> Select One </option>
                 <?php foreach($dep_list_info as $depData){?>
                 <option value="<?php echo $depData->dep_id;?>"> <?php echo $depData->department_name;?> </option>      
                <?php } ?>
             </select>
            </div>
             <div class="form-group">
             <label >Book Name</label>
             <select name="book_name"  class="form-control" id="book">
                
             </select>
            </div>
             
              <button type="submit" class="btn btn-success btn-lg btn-block">Issue Book</button>
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

   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>