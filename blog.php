<?php 
      session_start();
      require_once('inc/header.php') ; 
        



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
        $log=1 ;
        
    
    }
    else{
        require_once('inc/navbar.php') ; 
        
        }
    ?>


<br><br><br><br>

<?php 
    
$pquery="select * from posts" ;
$presult=mysqli_query($conn,$pquery);  

    
?>

           <div class="col-md-8 container">
               <h1 class="page-header">
                <small>Blogs...</small>
                </h1>
               
                <?php
                
              
                
while($prow=mysqli_fetch_assoc($presult)){
   
    $post_title=$prow['title'] ;
    $post_author=$prow['author'] ;
    $post_content=$prow['content'] ;
    $post_image=$prow['image'] ;
    $post_summary=$prow['summary'] ;
    $post_date=$prow['date'] ;
    $post_id=$prow['id'] ; 
                   
                    ?>

                <!-- HTML/PHP for displaying POSTS -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                <hr>
                <a href="post.php?p_id=<?php echo $post_id; ?>">
                <img class="img-responsive" src="img/<?php echo $post_image ?>" alt="" style="width:800px;height:300px;">
                </a>
                <hr>
                <p><?php echo $post_summary ?>...</p>
                <a class="btn btn-primary" href="blogview.php?id=<?php echo $post_id ; ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                    
                    
                <?php }// end while and end if ?>
                
                
                

                

            </div>
    
</div>



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