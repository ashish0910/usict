<?php 
session_start() ;
require_once('inc/header.php') ;

if(isset(($_SESSION['name']))){
        require_once('inc/nav2.php') ;
     
    
    
    }
    else{
        require_once('inc/navbar.php') ; 
    }
   

?>

<?php
                    
                if(isset($_POST["create_comment"])){
                    $comment_author  = $_POST["comment_author"];
                    $comment_email   = $_POST["comment_email"];
                    $comment_content = $_POST["comment_content"];
                    $the_post_id     = $_GET['id'];
                    
                    // insert new comment into comments table
                    $query = "INSERT INTO comments (comment_post_id, comment_date, comment_author, comment_email, comment_content, comment_status)";
                    
                    $query .= "VALUES ($the_post_id, now(), '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved')";
                    
                    $create_comment_query = mysqli_query($conn,$query);
                    if(!$create_comment_query){
                        die("Query Failed: " . mysqli_error($conn));
                    }
                    
                    
                }
                

                ?>



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

if(isset($_GET['id'])){
   
    $id=$_GET['id'] ;
    $blog_query="select * from posts where id='$id'";
    $blog_result=mysqli_query($conn,$blog_query) ;
    
    while($brow=mysqli_fetch_assoc($blog_result)){
   
    $blog_title=$brow['title'] ;
    $blog_author=$brow['author'] ;
    $blog_content=$brow['content'] ;
    $blog_image=$brow['image'] ;
    $blog_summary=$brow['summary'] ;
    $blog_date=$brow['date'] ;
    $blog_id=$brow['id'] ; 



}}


?>

      <br>
      <br>
      <br>
      <br>

      <div class="col-md-8 container">
       <h2>
                    <a href="#"><?php echo $blog_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $blog_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $blog_date ;?></p>
                <hr>
                <a href="post.php?p_id=<?php echo $blog_id; ?>">
                <img class="img-responsive" src="img/<?php echo $blog_image ;?>" alt="" style="width:800px;height:300px;">
                </a>
                <hr>
                <p><?php echo $blog_content; ?>...</p>
                <hr>

                                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post" action="">
                       <div class="form-group">
                          <label for="comment_author">Name</label>
                           <input name="comment_author" type="text" class="form-control" placeholder="Your name">
                       </div>
                        <div class="form-group">
                          <label for="comment_email">Email Address</label>
                           <input name="comment_email" class="form-control" type="email" placeholder="example@example.com">
                       </div>
                       
                        <div class="form-group">
                           <label for="comment_content">Comment</label>
                            <textarea class="form-control" rows="3" name="comment_content" placeholder="Enter content here.."></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->   
                
                  <?php
                // QUERY to select all approved comments for this post.
                    $query = "SELECT * FROM comments WHERE comment_post_id = '$id' ";
                    $query .= "AND comment_status = 'approved' ";
                    $query .= "ORDER BY comment_date DESC";
                    $select_comment_query = mysqli_query($conn,$query);
                    if(!$select_comment_query){
                        die("ERROR: " . mysqli_error($conn));
                    }
                
                    
                
                
                    
                    while($row = mysqli_fetch_assoc($select_comment_query)){
                        $comment_date    = $row['comment_date'];
                        $comment_content = $row['comment_content'];
                        $comment_author = $row['comment_author'];
                    
                    
                    
                    ?>
                <br>
                   <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small>Published on: <?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content; ?>
                    </div>
                </div>
                <br><br>
                <?php } //endwhile ?>
                                
                 
                                                            



<?php
require_once('inc/footer.php') ;

?>