<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Blog</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

  </head>
 
   <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
   
        <div class="col-md-12">
               <div class="alert alert-success">
                   <h2 style="text-align: center"> Library Management System </h2>
               </div>
              
         </div>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          
          <div class="col-md-4">
              
          </div>
        <div class="col-md-4">
            <h2>User-Login</h2> 
            <hr>
            <h4>
                <font color='red'>
           
            <?php 
            $msg=$this->session->userdata('message');
            if(isset($msg)){
               echo $msg; 
            $this->session->unset_userdata('message');
            }
            ?>
                </font>
            </h4>
            <form method="post" action="<?php echo base_url();?>main_controller/main_page.html">
            
             <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control"  name='email' id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" name='password'id="exampleInputPassword1" placeholder="Password">
             
            </div>
              <button type="submit" class="btn btn-info">Login</button>
           
            
         </form> 
        </div>
          
       
        </div>

      <hr>

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