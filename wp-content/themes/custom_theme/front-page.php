<?php get_header(); ?>

    <div class="banner-section">
                <div class="banner-inner">
                    <div class="banner-content">
                        <span class="banner-badge">
                            <span class="badge-dot"></span>
                            <?php the_field('banner_badge_title');?>
                            <!-- Official US Registered Agent -->
                        </span>
                        <h1 class="banner-title">
                            <?php the_field('banner_title'); ?>
                            <!-- Expedite Passports & Visas -->
                        </h1>
                        <p class="banner-desc">
                            <?php the_field('banner_description'); ?>
                            <!--
                             Deluxe Passport Express is officially registered with the U.S. Department of State, offering
                            fast and reliable passport and visa processing services 
                            -->
                        </p>
                        <div class="banner-actions">
                            <a href="#" class="banner-btn">
                                <img src="<?php echo  get_template_directory_uri(); ?>/images/passport-icon.svg" alt="">
                                <?php the_field('banner_button1'); ?>
                                <!-- Apply Passport -->
                            </a>
                            <a href="#" class="banner-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/apply-visa.svg" alt="">
                                <!-- Apply VISAS -->
                                 <?php the_field('banner_button2'); ?>
                            </a>
                        </div>
                    </div>

                    <div class="hero-pass">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/newo.png" alt="">
            </div>
    </div>

    <div style="padding:22px;position:absolute;width:100%;">
        <div style="background-color:white;border-radius:15px;height:150px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <ul style="display:flex;justify-content:space-evenly;padding:40px;">
                <a href="#" id="new-passport">
                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/book-saved.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu1')?>
                                <!-- NEW PASSPORT -->
                            </label>
                    </li>
                </a>
                <a href="#" id="name-change">
                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/edit-2.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <!-- NAME CHANGE -->
                                 <?php the_field('service_menu2');?>
                            </label>
                    </li>
                </a>
                <a href="#" id="child-passport">

                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/child-emoji.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu3')?>
                                <!-- CHILD PASSPORT -->
                            </label>
                    </li>
                </a>
                <a href="#" id="lost-passport">

                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/search-normal.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu4'); ?>
                                <!-- LOST PASSPORT -->
                            </label>
                    </li>
                </a>
                <a href="#" id="extend-validity">

                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu5')?>
                                <!-- EXTEND VALIDITY -->

                            </label>
                    </li>
                </a>
                <a href="#" id="passport-renewal">

                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/refresh-2.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu6')?>
                            <!-- PASSPORT RENEWAL -->

                            </label>
                    </li>
                </a>
                <a href="#" id="adding-visa-pages">

                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/document-text.svg" alt="logo">
                        <br>
                        <br>
                        <label for="">
                            <?php the_field('service_menu7')?>
                            <!-- ADDING VISA PAGES -->

                        </label>
                    </li>
                </a>
                <a href="#" id="passport-card">
                    <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cards.svg" alt="logo">
                            <br>
                            <br>
                            <label for="">
                                <?php the_field('service_menu8')?>
                                <!-- PASSPORT CARD -->
                            </label>
                    </li>
                </a>
            </ul>
        </div>

    </div>



        <div id="gallery-div">
            <div style="">
                <span class="news-badge">
                    <span class="badge-dot"></span>
                    <?php the_field('news_badge_title'); ?>
                    <!-- News & Updates -->
                </span>
            </div>
            <div>
                <h2>
                    <?php the_field('news_title'); ?>
                    <!-- Latest News & Updates -->
                </h2>
                <br>
                <p style="line-height:30px;">
                    <?php the_field('news_description'); ?>
                    <!-- Stay updated with the latest news an important announcements related to passport and visa services. Get helpful information about application updates, travel
                    requirements, and processing changes. -->
                </p>
            </div>
            
        
            <div id="box-main-container">
                <div id="box1" class="news-card news-card-text">
                    <h3>
                        <?php echo get_field('card1')['title']; ?>
                        <!-- Online Application -->

                    </h3>
                    <p>

                    <?php echo get_field('card1')['description']; ?>
                        <!-- Extensive step-by-step instructions, information and application forms for all your US Passport and travel visa needs. -->
                    </p>
                    <a href="" class="know-more">
                        <?php echo get_field('card1')['button_text']; ?>
                        <!-- Know More -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="">
                    </a>
                </div>
                <div id="box2" class="news-card news-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mobilea-app.png" alt="travel planning">
                </div>
                <div id="box3" class="news-card news-card-text">
                    <h3>
                        <?php  echo get_field('card2')['title']; ?>
                        <!-- Passport News -->
                    </h3>
                    <p>
                        <?php echo get_field('card2')['description']; ?>
                        <!-- Stay updated with the latest passport news, alerts, and important information from around the world. -->
                    </p>
                    <a href="" class="know-more">
                        <?php echo get_field('card2')['button_text'] ?>
                        <!-- Know More -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="">
                    </a>
                </div>
                
            </div>
            <br>
            <div id="box-main-container">
                <div id="box4" class="news-card news-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/passport.png" alt="US passport">
                </div>
                <div id="box5" class="news-card news-card-text">
                    <h3>
                        <?php get_field('card3')['title']?>
                        <!-- Travel News -->
                    </h3>
                    <p>Get the latest travel news, articles, alerts, guides, special offers, and information from around the world!!</p>
                    <a href="" class="know-more">
                        Know More
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="">
                    </a>
                </div>
                <div id="box6" class="news-card news-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visa.png" alt="">
                </div>
                
            </div>


            
        </div>


    <div id="testimonials" style="">
        <div>
            <span class="testimonial-badge">
                <span class="badge-dot"></span>Testimonials
            </span>

        </div>
        <div style="display:flex;justify-content:space-evenly;gap:430px;margin-top:20px;">
                    <div style="width:600px">
                        
            <h1>Trusted by
                
            Our Clients</h1>
                    </div>
            <div style="line-height:30px;">
            <p>We are proud to be trusted by our clients who rely on our commitment to quality and consistency. Our focus on delivering reliable solutions and maintaining strong relationships has helped us build long-term partnerships.</p>

            <div id="left-right-button-div">
        
                <div id="left-arrow-button">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div id="right-arrow-button">
                    <i class="bi bi-arrow-right" style="color:white;"></i>
                </div>
            
            </div>
                            
            </div>
        </div>

        <div id="cards-main-div">
                <div id="card1">
                    <div id="card1-body">
                        <div id="card1-title">
                            <div id="card1-img">
                                <img src="<?php echo get_template_directory_uri();  ?>/images/profile-pic.png" alt="">
                            </div>
                            <div id="card1-name">
                                <label for="">Sophia</label>
                                <label for="">Marketing Director</label>
                            </div>
                        </div>
                        <div id="card1-content">
                            <p>
                            “Apply for your first passport with our expert assistance and complete the entire application process quickly and smoothly.”
                            </p>
                        </div>
                        <div id="card1-rating">
                                <label for="">4.5 <i class="bi bi-star-fill star"></i></label>
                        </div>
                    </div>
                </div>

                <div id="card2">
                    <div id="card2-body">
                        <div id="card2-title">
                            <div id="card2-img">
                                <img src="<?php echo get_template_directory_uri();  ?>/images/profile-pic.png" alt="">
                            </div>
                            <div id="card2-name">
                                <label for="">Liam Carter</label>
                                <label for="">Chief Technology Officer</label>
                            </div>
                        </div>
                        <div id="card2-content">
                            <p>“Very reliable and quick service. They guided me at every step and made the whole experience stress-free.”</p>
                        </div>
                        <div id="card2-rating">
                            <label for="">4.5 <i class="bi bi-star-fill star"></i></label>
                        </div>
                    </div>
                </div>

                <div id="card3">
                    <div id="card3-body">
                        <div id="card3-title">
                            <div id="card3-img">
                                <img src="<?php echo get_template_directory_uri();  ?>/images/profile-pic.png" alt="">
                            </div>
                            <div id="card3-name">
                                <label for="">Samavis</label>
                                <label for="">Product Manager</label>
                            </div>
                        </div>
                        <div id="card3-content">
                            <p>“Great experience working with them. The team is responsive, knowledgeable, and delivers exactly what they promise.”</p>
                        </div>
                        <div id="card3-rating">
                            <label for="">4.5 <i class="bi bi-star-fill star"></i></label>
                        </div>
                    </div>
                </div>

                <div id="card4">
                    <div id="card4-body">
                        <div id="card4-title">
                            <div id="card4-img">
                                <img src="<?php echo get_template_directory_uri();  ?>/images/profile-pic.png" alt="">
                            </div>
                            <div id="card4-name">
                                <label for="">James Wilson</label>
                                <label for="">Marketing Director</label>
                            </div>
                        </div>
                        <div id="card4-content">
                            <p>“Professional and trustworthy service. They made the process simple and easy, and I would definitely recommend them.”</p>
                        </div>
                        <div id="card4-rating">
                            <label for="">4.5 <i class="bi bi-star-fill star"></i></label>
                        </div>
                    </div>
                </div>
        </div>

    </div>



    <div id="faq-main-div">
        <div id="faq-main-body">
            <div id="faq-header">
                    <div id="faq-badge">
                            <span class="faq-badge">
                            <span class="badge-dot"></span> F.A.Q
                            </span>
                    </div>
            </div>
                <div id="faq-content">
                    <div id="faq-title">
                            <h1>Comman Questions</h1>
                    </div>
                    <div id="faq-paragraph">
                        <p>Browse through our frequently asked questions to gain clarity on our services, process, and policies.</p>
                        <p> We aim to provide you with a smooth and transparent experience.</p>
                    </div>
                    
                </div>
                <div id="questions-main-div">
                    
                        <div id="question-outer-div1">
                            <div  id="question-outer2-div1">
                                <div>
                                    <b>What documents are required for a new passport?</b>
                                </div>
                                <div>
                                    <i class="bi bi-plus-lg" id="plus1"></i>
                                    <i class="bi bi-dash-lg" id="dash1"></i>
                                </div>
                            </div>
                            
                            <div id="question-inner-div1">
                                You typically need proof of citizenship, valid identification, a recent passport photo, and the completed application form. Requirements may vary by application type.
                            </div>
                        </div>

                        <div id="question-outer-div2">
                            <div id="question-outer2-div2">
                                <div>
                                    <b>How long does it take to process a passport?</b>
                                </div>
                                <div>
                                    <i class="bi bi-plus-lg" id="plus2"></i>
                                    <i class="bi bi-dash-lg" id="dash2"></i>
                                </div>
                            </div>
                        <div id="question-inner-div2">
                            Passport processing time depends on the application type, but we help ensure the process is completed as quickly and smoothly as possible.
                            </div>
                        </div>

                        <div id="question-outer-div3">
                            <div id="question-outer2-div3">
                                <div>
                                    <b>Can I apply for a child passport through your service?</b>
                                </div>
                                <div>
                                    <i class="bi bi-plus-lg" id="plus3"></i>
                                    <i class="bi bi-dash-lg" id="dash3"></i>
                                </div>
                            </div>
                            <div id="question-inner-div3">
                                Yes. We can guide you through the child passport requirements, parental consent documents, and application process.
                            </div>
                        </div>


                        <div id="question-outer-div4">
                            <div id="question-outer2-div4">
                                <div>
                                    <b>Do you help with visa applications?</b>

                                </div>
                                <div>
                                    <i class="bi bi-plus-lg" id="plus4"></i>
                                    <i class="bi bi-dash-lg" id="dash4"></i>
                                </div>
                            </div>
                            <div id="question-inner-div4">
                            Yes. Our team provides guidance on visa forms, supporting documents, and submission requirements for your destination.
                            </div>
                        </div>

                        <div id="question-outer-div5">
                            <div id="question-outer2-div5">
                                <div>
                                    <b>Can you assist with passport renewal?</b>
                                </div>
                                <div>
                                    <i class="bi bi-plus-lg" id="plus5"></i>
                                    <i class="bi bi-dash-lg" id="dash5"></i>
                                </div>
                            </div>
                            <div id="question-inner-div5">
                            Yes. We assist with renewal eligibility, required documents, photos, and application preparation.
                            </div>
                        </div>


                </div>
        </div>
    </div>


<?php get_footer(); ?>
<script>
    
    $(document).ready(function(){
        $("#question-outer-div1").click(function(){
            $("#question-outer-div1").toggleClass('question-outer-div-bg-color');
            $("#question-inner-div1").slideToggle(250)
            $("#question-inner-div2").slideUp();
            $("#question-inner-div3").slideUp();
            $("#question-inner-div4").slideUp();
            $("#question-inner-div5").slideUp();
            
            
            $("#question-outer-div2").removeClass('question-outer-div-bg-color');
            $("#question-outer-div3").removeClass('question-outer-div-bg-color');
            $("#question-outer-div4").removeClass('question-outer-div-bg-color');
            $("#question-outer-div5").removeClass('question-outer-div-bg-color');
            $("#dash2").css('display','none')
            $("#plus2").css('display','block');
            $("#dash3").css('display','none')
            $("#plus3").css('display','block');
            $("#dash4").css('display','none')
            $("#plus4").css('display','block');
            $("#dash5").css('display','none')
            $("#plus5").css('display','block');

            $("#plus1").toggle();
            $("#dash1").toggle();
            
            
        })

        $("#question-outer-div2").click(function(){
            $("#question-inner-div1").slideUp();
            $("#question-outer-div2").toggleClass('question-outer-div-bg-color');
            $("#question-inner-div2").slideToggle(250);
            $("#question-inner-div3").slideUp();
            $("#question-inner-div4").slideUp();
            $("#question-inner-div5").slideUp();

            $("#question-outer-div1").removeClass('question-outer-div-bg-color');
            $("#question-outer-div3").removeClass('question-outer-div-bg-color');
            $("#question-outer-div4").removeClass('question-outer-div-bg-color');
            $("#question-outer-div5").removeClass('question-outer-div-bg-color');
            $("#dash1").css('display','none')
            $("#plus1").css('display','block');
            $("#dash3").css('display','none')
            $("#plus3").css('display','block');
            $("#dash4").css('display','none')
            $("#plus4").css('display','block');
            $("#dash5").css('display','none')
            $("#plus5").css('display','block');

            $("#plus2").toggle();
            $("#dash2").toggle();
            


        })

        $("#question-outer-div3").click(function(){
            $("#question-inner-div1").slideUp();
            $("#question-inner-div2").slideUp();
            $("#question-outer-div3").toggleClass('question-outer-div-bg-color');
            $("#question-inner-div3").slideToggle(250);
            $("#question-inner-div4").slideUp();
            $("#question-inner-div5").slideUp();

            $("#question-outer-div1").removeClass('question-outer-div-bg-color');
            $("#question-outer-div2").removeClass('question-outer-div-bg-color');
            $("#question-outer-div4").removeClass('question-outer-div-bg-color');
            $("#question-outer-div5").removeClass('question-outer-div-bg-color');

            $("#dash1").css('display','none')
            $("#plus1").css('display','block');
            $("#dash2").css('display','none')
            $("#plus2").css('display','block');
            $("#dash4").css('display','none')
            $("#plus4").css('display','block');
            $("#dash5").css('display','none')
            $("#plus5").css('display','block');
            
            $("#plus3").toggle();
            $("#dash3").toggle();
        })

        $("#question-outer-div4").click(function(){
            $("#question-inner-div1").slideUp();
            $("#question-inner-div2").slideUp();
            $("#question-inner-div3").slideUp();
            $("#question-outer-div4").toggleClass('question-outer-div-bg-color');
            $("#question-inner-div4").slideToggle(250);
            $("#question-inner-div5").slideUp();

            $("#question-outer-div1").removeClass('question-outer-div-bg-color');
            $("#question-outer-div2").removeClass('question-outer-div-bg-color');
            $("#question-outer-div3").removeClass('question-outer-div-bg-color');
            $("#question-outer-div5").removeClass('question-outer-div-bg-color');
            $("#dash1").css('display','none')
            $("#plus1").css('display','block');
            $("#dash2").css('display','none')
            $("#plus2").css('display','block');
            $("#dash3").css('display','none')
            $("#plus3").css('display','block');
            $("#dash5").css('display','none')
            $("#plus5").css('display','block');

            $("#plus4").toggle();
            $("#dash4").toggle();
        })

        $("#question-outer-div5").click(function(){
            $("#question-inner-div1").slideUp();
            $("#question-inner-div2").slideUp();
            $("#question-inner-div3").slideUp();
            $("#question-inner-div4").slideUp();
            $("#question-outer-div5").toggleClass('question-outer-div-bg-color');
            $("#question-inner-div5").slideToggle(250);

            $("#question-outer-div1").removeClass('question-outer-div-bg-color');
            $("#question-outer-div2").removeClass('question-outer-div-bg-color');
            $("#question-outer-div3").removeClass('question-outer-div-bg-color');
            $("#question-outer-div4").removeClass('question-outer-div-bg-color');
            $("#dash1").css('display','none')
            $("#plus1").css('display','block');
            $("#dash2").css('display','none')
            $("#plus2").css('display','block');
            $("#dash3").css('display','none')
            $("#plus3").css('display','block');
            $("#dash4").css('display','none')
            $("#plus4").css('display','block');

            $("#plus5").toggle();
            $("#dash5").toggle();
        })

        
    })
</script>

