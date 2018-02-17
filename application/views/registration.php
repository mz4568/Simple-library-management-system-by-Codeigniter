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

   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>homeController/about.html">About Us</a></li>
        <li><a href="<?php echo base_url();?>homeController/registration.html">Registration</a></li>
        <li><a href="<?php echo base_url();?>homeController/login.html">Login</a></li>
        
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
   <br> <br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>User-Registration</h2>
          <hr>
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
          <form method="post" action="<?php echo base_url();?>registration_controller/registration_information.html">
            <div class="form-group">
             <label for="exampleInputText">First Name</label>
             <input type="text" class="form-control" name='first_name'id="exampleInputText" placeholder="First Name">
             <input type="hidden" class="form-control" name='type'value="<?php echo "user";?>">
             <input type="hidden" class="form-control" name='status'value="<?php echo "1";?>">
            </div>
            <div class="form-group">
             <label for="exampleInputText">Middle Name</label>
             <input type="text" class="form-control" name='middle_name' id="exampleInputText" placeholder="Middle Name">
            </div>
             <div class="form-group">
             <label for="exampleInputText">Last Name</label>
             <input type="text" class="form-control" name='last_name' id="exampleInputText" placeholder="Last Name">
            </div>
             <div class="form-group">
             <label for="exampleInputText">Address</label>
             <input type="text" class="form-control" name='address' id="exampleInputText" placeholder="Address">
            </div>
             <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" name='email' id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="Password">
             
            </div>
              <button type="submit" class="btn btn-success">Registration</button>
           
            
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