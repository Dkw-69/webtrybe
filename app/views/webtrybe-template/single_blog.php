<?php $this->view('webtrybe-template/header', $data); ?>

       <!-- Slider Area Start-->
       <div class="services-area">
         <div class="container">
             <!-- Section-tittle -->
             <div class="row d-flex justify-content-center">
                 <div class="col-lg-8 col-sm-12">
                     <div class="section-tittle text-center mb-80">
                         <span>Blog Details</span>
                         <h2><?=$data['blog']->title?></h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding" style="padding-top: 10px;">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid card-img" src="<?=ROOT.$data['blog']->image?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?=$data['blog']->title?></h2>
                     <p><?=$data['blog']->content?></p>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<?php $this->view('webtrybe-template/footer', $data); ?>