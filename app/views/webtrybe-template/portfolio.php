<?php $this->view('webtrybe-template/header', $data); ?>

    <main>
        <!-- Slider Area Start-->
        <div class="services-area">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center mb-80">
                            <span>Portfolio</span>
                            <h2>Some of Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- Projects start-->
        <div class="tips-triks-area tips-padding" style="padding-top: 10px; padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <?php if(is_array($data['projects'])): ?>
                        <?php foreach($data['projects'] as $portfolio_projects): ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <a href="<?=ROOT.'single_project/'.$portfolio_projects->url_adress?>/">
                                    <div class="single-tips mb-50">
                                        <div class="tips-img">
                                            <img src="<?=$portfolio_projects->image?>" alt="">
                                        </div>
                                        <div class="tips-caption">
                                            <h5 class="ml-2"><?=$portfolio_projects->title?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif;?> 
                </div>
            </div>
        </div>


        <!-- Projects End-->

        <!-- Generating Start -->
        <div class="generating-area visite-padding2">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>Generating New Revenue For Your Business</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-chart"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>For All Business Sizes</h4>
                                <p>
                                    Whether you are a small business or a big business, a website
                                    makes sure that your online customers can easily reach you.
                                </p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-social-media-marketing"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>Superior results</h4>
                                <p>
                                   We guarantee you a well built website for your business that has 
                                   beautiful UI and good user experience,making your business stand out. 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>We walk with you</h4>
                                <p>
                                    You get updates on how your website's construction is going. We make 
                                    sure that you are completely satisfied every step of the way. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-growth"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>Significant ROI</h4>
                                <p>
                                    Invest money in getting a good website & you get
                                    a good ROI.Our websites raise revenue thus getting 
                                    good return on your investment. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Generating End -->
        <!-- have-project Start-->
        <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>Have a project in mind?</h2>
                                <p>
                                    Whether your project is big or small, get in touch with us 
                                    and we will get it done! We handle all projects with professionalism.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                            <div class="wantToWork-btn f-right">
                                <a href="<?=ROOT?>contact" class="btn btn-ans">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->

    </main>
  
<?php $this->view('webtrybe-template/footer', $data); ?>