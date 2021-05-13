<?php 
session_start();
if(isset($_POST['submit'])){
	
	 include('../config/DbFunction.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->login($_POST['id'],$_POST['password']);
}
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Management Login </title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/jquery.validate.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .content{
            padding:8% 25%;
            height: 100vh;
            background-image: url("./images/abstract_design_background_3007.jpg");
            background-position: center;
            background-size: cover;
            
            
            
        }
        .text1{
            display: flex;
            justify-content: center;
            
            padding-bottom: 5%;
            color: rgb(7, 26, 82);
            
            
        
        }
        .left{
            background-image: url("./images/eezy_71-01.jpg");
            background-position: center;
            background-size: cover;
        }
        .bttn{
            border: none;
            border-radius: 30px;
            width:100%;
           
        }
        .inp{
            border: 2px solid lightblue;
            border-radius: 30px;
            

        }
        

    


    </style>

</head>

<body>
<div class="container-fluid content">
        <h1 class="text1"><b>Student Management System</b></h1>
        <div class="row">
          <div class="col left">
            
          </div>
          <div class="col ">
           
            
            <h3>
               Welcome Back :) Administrator
            </h3>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Administrator Login Id</label>
                    <input type="text" class="form-control inp" id="id" name="id" placeholder="Please, Enter the Admin ID" aria-describedby="emailHelp">
                    
                  </div>
                  <br>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Administrator Password</label>
                    <input type="password" class="form-control inp" placeholder="Please, Enter the admin password" id="password" name="password" value="">
                  </div>
                  <br>
                  
                  <button type="submit" class="btn btn-primary bttn" name="submit" value="login">Login</button>

                </div>
            </form>
          </div>
        
            
        </div>

    </div>

     





    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
 <script src="../dist/jquery-1.3.2.js" type="text/javascript"></script>
 <script src="../dist/jquery.validate.js" type="text/javascript"></script>
 <script type="text/javascript">
            
            jQuery(function(){
                jQuery("#id").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid id"
                });
                jQuery("#password").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid password"
                });
                
            });
            
        </script>
</body>

</html>
