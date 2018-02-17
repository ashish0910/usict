<?php
session_start();
require_once('inc/header.php') ;
require_once('inc/nav2.php')   ;
?>
<br><br><br><br>
<?php
   
    if(isset($_POST['blogcreate'])){
    $blogauthor=$_POST['blogauthor']; 
    $blogtitle=$_POST['blogtitle']; 
    $blogcategory=$_POST['blogcategory']; 
    $blogsummary=$_POST['blogsummary']; 
    $blogcontent=$_POST['blogcontent']; 
    $blogimage=$_POST['blogimage']; 

//    $cquery="INSERT INTO posts('title','author','content','category','summary','date','image') VALUES('{$blogtitle}','{$blogauthor}','{$blogcontent}','{$blogcategory}','{$blogsummary}',now(),'{$blogimage}')"; 
        $cquery="INSERT INTO `posts` (`id`, `title`, `image`, `author`, `content`, `category`, `summary`, `date`) VALUES (NULL, '$blogtitle', '$blogimage', '$blogauthor', '$blogcontent', '$blogcategory', '$blogsummary', CURRENT_TIMESTAMP)" ;
    
    $cresult=mysqli_query($conn,$cquery);
    if($cresult){
        header("location: blog.php");
    }
    
    }



?>
<div class="container">
<h1>Create Blog Here:</h1>
 <form method="post">
  <div class="form-group">
    <label for="blogauthor">Blog Author:</label>
    <input type="text" name="blogauthor" class="form-control" placeholder="author" required>
  </div>
  <div class="form-group">
    <label for="blogtitle">Blog Title:</label>
    <input type="text" name="blogtitle" class="form-control" placeholder="title" required>
  </div>
  <div class="form-group">
    <label for="blogcategory">Blog Category:</label>
    <input type="text" class="form-control" name="blogcategory" placeholder="Eg.c++,PHP,javascript." required>
  </div>
  
  <div class="form-group">
    <label for="blogsummary">Blog Summary:</label>
    <textarea class="form-control" name="blogsummary" rows="2" placeholder="Enter Summary here" required></textarea>
  </div>
  <div class="form-group">
    <label for="blogcontent">Blog Content:</label>
    <textarea class="form-control" name="blogcontent" rows="5" placeholder="Enter Content here" required></textarea>
  </div>
  <div class="form-group">
    <label for="blogimage">Image:</label>
    <input type="text" name="blogimage" class="form-control" placeholder="image in img directory">
  </div>
  <div class="form-group"> 
      <input type="submit" class="btn btn-primary" value="Create" name="blogcreate">
  </div>

</form>
</div>





<?php
require_once('inc/footer.php') ;
?>