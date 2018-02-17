<?php
session_start() ;

include('inc/header.php') ;

if(isset($_SESSION['name'])){
include('inc/nav2.php')   ;    
}
else{
    
    header("location: index.php") ;
}


?>


  <section id="showcase" >
    <div class="pic-overlay">

      <!-- Inner Showcase -->
      <div class="showcase-inner ">
        <div class="container ">
            <div id="in-between" class="text-center mt-5 pt-5">
              <h1 class="display-1"><strong>USICT</strong></h1>
              <br><br>
              <p class="my-3"><span class="sky p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, explicabo.</span></p>
              <p class="p-1 my-3 "><span class="sky p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nisi.</span></p>
              <p class="p-1 my-3"><span class="sky p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, suscipit qui, Lorem ipsum.</span></p>
            </div>
            <div class="col-lg-4 "></div>
        </div>
      </div>
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



<?php include('inc/footer.php') ;
?> 