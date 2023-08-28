    <?php $this->view('webtrybe-template/header', $data); ?>
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="hero__img hero__img2 " data-animation="fadeInLeft" data-delay="1s">
                                    <img src="<?=ASSETS?>webtrybe-template/img/hero/about_hero.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption hero__caption2">
                                <h1 data-animation="fadeInLeft" data-delay=".4s">You Deserve<br> A Better Website</h1>
                                    <p data-animation="fadeInRight" data-delay=".6s">
                                        Here at webtrybe, we value our customers. Your business gets more leads as a result 
                                        of the traffic that comes from our SEO and Adwords integrations.
                                    </p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay=".8s">
                                        <a href="<?=ROOT?>contact" class="btn hero-btn">Get Free Quote</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- about shape -->
            <div class="about-shape">
                <div class="shape-left">
                    <img src="<?=ASSETS?>webtrybe-template/img/hero/about_shape1.png" alt="">
                </div>
                <div class="shape-right">
                    <img src="<?=ASSETS?>webtrybe-template/img/hero/about-sharpe2.png" alt="">
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!--Choose Best start-->
        <div class="choose-best choose-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-tittle text-center">
                            <h2>You can never go wrong with us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6">
                        <div class="single-choose text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-growth"></span>
                            </div>
                            <div class="do-caption">
                                <ul>
                                    <li>Increase your traffic</li>
                                    <li>Social Media Marketing</li>
                                    <li>Google Adwords</li>
                                    <li>24/7  support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-choose active text-center mb-30">
                            <div class="do-icon">
                                <span class="flaticon-award"></span>
                            </div>
                            <div class="do-caption">
                                <ul>
                                    <li>Wordpress Customization</li>
                                    <li>Custom Back-ends</li>
                                    <li>Theme customization</li>
                                    <li>24/7  support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-choose text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-project"></span>
                            </div>
                            <div class="do-caption">
                                <ul>
                                    <li>Secure Websites</li>
                                    <li>Professional Images</li>
                                    <li>Professional Videos</li>
                                    <li>24/7  support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Best do End-->
        <!-- Visit Stuffs Start -->
        <div class="visit-area fix visite-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Visit Some Of Our Bespoke Work</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row ">
                    <?php if(is_array($data['projects'])): ?>
                        <?php foreach($data['projects'] as $portfolio_projects): ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="single-visited mb-30">
                                    <div class="visited-img">
                                        <img src="<?=$portfolio_projects->image?>" alt="">
                                    </div>
                                    <div class="visited-cap">
                                        <a href="<?=ROOT.'single_project/'.$portfolio_projects->url_adress?>/"><h6 style="color: #ff5c97;"><?=$portfolio_projects->title?></h6></a>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach; ?>
                    <?php endif;?> 
                </div>
            </div>
        </div>
        <!-- Visit Stuffs Start -->
         <!-- Testimonial Start -->
         <div class="testimonial-area">
            <div class="container">
               <div class="testimonial-main">
                    <!-- Section-tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5  col-md-8 pr-0">
                            <div class="section-tittle text-center">
                                <h2>What Are They Saying About Us?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-md-9">
                                <div class="h1-testimonial-active">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>
                                                    Apart from being really good developers, webtrybe has great 
                                                    customer care. They respond in a timely fashion and helped us 
                                                    with any questions we had.
                                                </p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                </div>
                                            <div class="founder-text text-center">
                                                <span>Hariff</span>
                                                <p>Barber</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>
                                                    I chose webtrybe to design and build my business website and 
                                                    I don't have any regrets. I would reccommend webtrybe anytime.
                                                </p>                                            
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                </div>
                                            <div class="founder-text text-center">
                                                <span>Jeff</span>
                                                <p>Beautician</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Tips Triks Start -->
        <div class="tips-triks-area tips-padding">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Get The Latest From Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if(is_array($data['blogs'])): ?>
                        <?php foreach($data['blogs'] as $_blog): ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-tips mb-50">
                                    <div class="tips-img">
                                        <img src="<?=$_blog->image;?>" alt="">
                                    </div>
                                    <div class="tips-caption">
                                        <h4><a href="<?=ROOT.'single_blog/'.$_blog->url_address?>/"><?=$_blog->title;?></a></h4>
                                        <span>Continue Reading</span>
                                        <p><?=$_blog->date;?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Tips Triks End -->
         <!-- have-project Start-->
         <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="<?=ASSETS?>webtrybe-template/img/team/have.jpg">
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