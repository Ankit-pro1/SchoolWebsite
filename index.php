<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">
    <title>School Website</title>
    <!-- Minified Bootstrap CSS  File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/myStyle.css">

</head>

<body>
    <!---------------------- Navigation Bar ------------------->
    <?php 
      include 'headerNav.php'  ; 
    ?>
    <!--------------X-------- Navigation Bar --------X----------->



    <!---------------------- Carousel-Hero Section ------------------->
    <div class="container-fluid">
        <div class="row">
            <div id="my-carousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                    <li data-target="#my-carousel" data-slide-to="2"></li>
                    <li data-target="#my-carousel" data-slide-to="3"></li>
                    <li data-target="#my-carousel" data-slide-to="4"></li>
                </ul>

                <!-- slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Images/img1.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>India's Best School</h1>
                            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti cupiditate <br> reprehenderit! Perferendis, nulla temporibus.</p>
                            <div class="carousel-btn">
                                <button class="btn-black"> Know More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/img2.jpg" alt="Chicago">
                        <div class="carousel-caption">
                            <h1>India's Best School</h1>
                            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti cupiditate <br> reprehenderit! Perferendis, nulla temporibus.</p>
                            <div class="carousel-btn">
                                <button class="btn-black"> Know More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/img3.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>India's Best School</h1>
                            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti cupiditate <br> reprehenderit! Perferendis, nulla temporibus.</p>
                            <div class="carousel-btn">
                                <button class="btn-black"> Know More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/img4.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>India's Best School</h1>
                            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti cupiditate <br> reprehenderit! Perferendis, nulla temporibus.</p>
                            <div class="carousel-btn">
                                <button class="btn-black"> Know More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/img5.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>India's Best School</h1>
                            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti cupiditate <br> reprehenderit! Perferendis, nulla temporibus.</p>
                            <div class="carousel-btn">
                                <button class="btn-black"> Know More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#my-carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#my-carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>
    <!--------------X-------- Carousel ----------X--------->

    <!-----------------------About us Section ----------------->
    <?php 
        include 'aboutUs.php' ;
    ?>
    <!-------------xx----------About us Section ---------xx-------->

    <!---------------------- Faculty Section ----------------->
    <section class="faculty padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Our Faculty</h1>
                </div>
                <div class="owl-carousel">
                    <div>
                        <div class="card">
                            <img src="./Images/t1.jpg" alt="Profile2" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 1</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t2.jpg" alt="Profile4" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 2</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t3.jpg" alt="Profile5" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 3</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t4.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 4</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t5.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 5</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t6.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 6</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t2.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 7</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t1.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 8</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="./Images/t9.jpg" alt="Profile3" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title">Teacher 9</h4>
                                <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum doloribus, omnis architecto autem tempora!</p>
                                <button class="btn-black">Know more</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-------------XX--------- Faculty Section -----------XX------>

    <!----------------------- FAQ Section --------------------->
    <section class="faq padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">FAQ</h1>
                </div>
                <div class="col-md-6">
                    <div id="accordian1">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseOne">What if we do not have a computer or internet access in our home?</button>
                            </div>
                            <div class="card-body collapse" id="collapseOne" data-parent = "#accordian1">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo">Will state assessments be given this year?</button>
                            </div>
                            <div class="card-body collapse" id="collapseTwo" data-parent = "#accordian1">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseThree">How will the needs of ESOL students be met?</button>
                            </div>
                            <div class="card-body collapse" id="collapseThree" data-parent = "#accordian1">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordian2">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseFour">Will every class in the Virtual School Program have a teacher?</button>
                            </div>
                            <div class="card-body collapse" id="collapseFour" data-parent = "#accordian2">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseFive">What if we do not have a computer or internet access in our home?</button>
                            </div>
                            <div class="card-body collapse" id="collapseFive" data-parent = "#accordian2">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseSix">How will course offerings be determined?</button>
                            </div>
                            <div class="card-body collapse" id="collapseSix" data-parent = "#accordian2">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque libero voluptate nesciunt ipsam ullam dolor fuga culpa veniam distinctio assumenda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------XX---------- FAQ Section ----------XX----------->


    <!------------------------- Contact Us ----------------------->
    <section class="contact-us padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Contact Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <form action="userinfomation.php" method="post">
                       <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="user" class="form-control" required>
                       </div>
                       <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="email" class="form-control" required>
                       </div>
                       <div class="form-group">
                           <label>Phone Number</label>
                           <input type="tel" name="phone" class="form-control" required>
                       </div>
                       <div class="form-group">
                           <label>Comment</label>
                           <textarea name="comment" id="" cols="30" rows="4" class="form-control" required></textarea>
                       </div>
                       <button type="submit" class="btn btn-black btn-block">Submit</button>
                   </form>
                </div>
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6999.8652663386!2d77.19830207481075!3d28.6916617295779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdf2e05dab29%3A0xbcd39ecb4ec235a3!2sVijay%20Nagar%2C%20Delhi%2C%20110009!5e0!3m2!1sen!2sin!4v1612902956247!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-------------XX------------ Contact Us -----------XX------------>
    
    <!------------------------ Footer Section ------------------------->
    <section class="text-center footer">
        <p>Copyright &copy 2021. This Website is creates by <a href="https://ankit-pro1.github.io/PortfolioWebsite/">Ankit Kumar</a></p>
    </section>
    <!--------------XX---------- Footer Section ---------XX---------------->


    <!-- JQuery Library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper Js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel Js File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- My External JS File -->
    <script src="./js/myMain.js"></script>

</body>

</html>