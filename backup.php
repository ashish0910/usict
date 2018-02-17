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
    
if(isset($log)){
    echo "WELCOME,".$_SESSION['name'] ;
}
    
?>
<?php 
    
$pquery="select * from posts" ;
$presult=mysqli_query($conn,$pquery);  
while($prow=mysqli_fetch_assoc($presult)){
   
    $post_title=$prow['title'] ;
    $post_author=$prow['author'] ;
    $post_content=$prow['content'] ;
    $post_image=$prow['image'] ;
    $post_summary=$prow['summary'] ;

}
    
?>

<div class="container">
    
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
<!--              <strong class="d-inline-block mb-2 text-primary">World</strong>-->
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $post_title ; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo "By ".$post_author ; ?></div>
              <p class="card-text mb-auto"><?php echo $post_summary ; ?></p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/<?php echo $post_image ; ?>" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
      </div>
    
            <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
      </div>
    
          <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;"> 
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
      </div>
    
          <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
      </div>
    
          <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/blog.jpeg" alt="Card image cap" style="width:200px;height:250px;">
          </div>
        </div>
      </div>
    
    
    
    
    
    
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