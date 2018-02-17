<?php                       
     session_start() ;



      include('inc/header.php') ; 
      
    
        if(isset(($_SESSION['name']))){
        require_once('inc/nav2.php') ;
     
    
    
    }
    else{
        require_once('inc/navbar.php') ; 
    }
   
  
      


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


  
  <!-- Log In Modal Code -->
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
  

  <!-- SHOWCASE -->
   
   <section id="showcase" >
    <div class="pic-overlay">

      <!-- Inner Showcase -->
      <div class="showcase-inner ">
        <div class="container ">
            <div id="in-between" class="text-center mt-5 pt-5">
              <h1 class="display-1"><strong>USICT</strong></h1>
              <br><br>
              <p class="my-3"><span class="sky p-2">Welcome To The Unofficial Site Of USICT</span></p>
              <p class="p-1 my-3 "><span class="sky p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nisi.</span></p>
              <p class="p-1 my-3"><span class="sky p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, suscipit qui, Lorem ipsum.</span></p>
            </div>
            <div class="col-lg-4 "></div>
        </div>
      </div>
      <br>
      
      
      
  
     
     
     
      <!-- Animated Icons -->
      <!-- <section id="animate">
        <div class="container">
          <div class="row my-3 justify-content-center">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <img src="img/uhack.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>U Hack</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora recusandae laboendis ab.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <img src="img/uhack.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>U Hack</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora recusandae laboendis ab.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <img src="img/uhack.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>U Hack</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora recusandae laboendis ab.
                  </p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section> -->


    </div>
  </section>
   


<?php include('inc/footer.php') ; ?> 