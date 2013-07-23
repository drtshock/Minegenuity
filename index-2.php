<?php include "header.php" ?>
    <section id="feature_slider" class="">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('img/backgrounds/landscape.png') repeat-x top center;">
            <a href="gallery.php"><img class="asset left-40 sp600 t100 z1" src="img/pl.png" /></a>
            <div class="info">
                <h2>Welcome to SwarloCraft.</h2>
            </div>
        </article>
        <article class="slide" id="ideas" style="background: url('img/backgrounds/aqua.jpg') repeat-x top center;">
            <div class="info">
                <h2>We love our players.</h2>
            </div>
            <img class="asset left-240 sp600 t100 z3" src="img/pl.png" />
        </article>
        <article class="slide" id="tour" style="background: url('img/backgrounds/color-splash.jpg') repeat-x top center;">
            <img class="asset left-300 sp600 t100 z1" src="img/pl.png" />
            <div class="info">
                <h2>Fully Featured</h2>
                <a href="features.html">PLAY</a>
            </div>
        </article>
        <article class="slide" id="responsive" style="background: url('img/backgrounds/indigo.jpg') repeat-x top center;">
            <img class="asset left-402 sp600 t100 z3" src="img/pl.png" />
            <div class="info">
                <h2>
                     <strong>Fun</strong><br>
                     Family<br>
                     Friends
                </h2>                
            </div>
        </article>        
    </section>

    <div id="showcase">
        <div class="container">
            <div class="section_header">
                <h3>Gameplay like no other</h3>
            </div>            
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="span4 feature first">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service1.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Awesome Servers</h6>
                            <p>Experience an amazing minecraft experience.
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service2.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Professional Quality</h6>
                            <p>
                            Well managed servers, professional admins, high end servers.
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature last">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service3.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Fun</h6>
                            <p>
                                Join a server and have a great time.
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
