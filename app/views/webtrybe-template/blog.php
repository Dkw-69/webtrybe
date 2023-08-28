<?php $this->view('webtrybe-template/header', $data); ?>

    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Blog</span>
                        <h2>Latest From Our Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-paddingr">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 col-sm-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php if(is_array($data['blogs'])): ?>
                            <?php foreach($data['blogs'] as $_blog): ?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img img-fluid" src="<?=$_blog->image;?>" alt="">
                                        <h6 class="blog_item_date">
                                            <p><?=$_blog->date;?></p>
                                        </h6>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="<?=ROOT.'single_blog/'.$_blog->url_address?>/">
                                            <h2><?=$_blog->title;?></h2>
                                        </a>
                                        <p class="blog-content"><?=$_blog->content;?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        <?php endif;?> 

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <?php $this->view('webtrybe-template/footer', $data); ?>