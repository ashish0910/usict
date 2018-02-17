<?php require_once('inc/header.php') ;
      session_start();
      
      
      if(isset($_POST['login'])){
        $username=$_POST['username']  ;
        $password=$_POST['password']  ;  
        $query="select * from users where username='$username'" ; 
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            
            $row=mysqli_fetch_array($result) ;
            $db_username=$row['username'] ;
            $db_password=$row['password'] ;
       
            if($username==$db_username && $password==$db_password){
                $_SESSION['name']=$db_username;
                header("location: login.php") ;
            }
            else{
                $error="Invalid Username or Password" ;
            }
        
        
        }  
          else{
                              $error="Invalid Username or Password" ;

          }
      
        
      
      
      }



?>




<body id="home">


<!-- Main-Section -->

<?php
    
        if(isset(($_SESSION['name']))){
        require_once('inc/nav2.php') ;
     
    
    
    }
    else{
        require_once('inc/navbar.php') ; 
    }
    ?>


</body>
</html>

 <div class="modal fade text-dark" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
       <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalTitle">Log In</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
          <div class="modal-body">
               <center>
            <?php 
               
             if(isset($error)){
                 echo "<span style='color:red;'>$error</span>";
             }
            
            
            ?>
        </center>
               <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-info btn-block" name="login" value="Log in">
          </div>
        </form>
        </div>
      </div>
    </div>
    





















<?php 
require_once('inc/footer.php') ;
?>