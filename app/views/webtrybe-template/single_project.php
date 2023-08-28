<?php $this->view('webtrybe-template/header', $data); ?>

    <!-- Slider Area Start-->
    <div class="services-area">
         <div class="container">
             <!-- Section-tittle -->
             <div class="row d-flex justify-content-center">
                 <div class="col-lg-8">
                     <div class="section-tittle text-center mb-80">
                         <span>Project Details</span>
                         <h1 class="text-center"><?=$data['project']->title?></h1>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Slider Area End-->

    <section style="padding-top: 10px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 col-md-6 col-sm-12">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="single-project-img" src="<?=ROOT.$data['project']->image?>">
                        </div>
                            <br>
                            <h4 class="mt-5 mb-2"><?=$data['project']->title?></h4>
                            <p><?=$data['project']->project_description?></p>
                            <a href="<?=$data['project']->link?>" target="_blank">
                            <h6 class="btn header-btn">Visit Site</h6>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->view('webtrybe-template/footer', $data); ?>