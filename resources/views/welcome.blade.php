<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- cds sa swipera -->
    <!-- OVAJ JE U NJEGA <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    
    <!-- CSS link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
    <!-- header pocinje -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="" class="logo"> <span>Logo</span> </a>

        <nav class="navbar">
            <a href="" >Pocetak</a>
            <a href="" >Auta</a>
            <a href="" >Usluge</a>
            <a href="" >Ocjenite nas</a>
        
            <a href="{{ route('admin') }}" >Admin</a>
            
        </nav>

        <div id="login-btn">
            <button class="btn">Login</button>
            <i class="far far-user"></i>
        </div>
    </header>
    <!-- header zavrsava -->

    <!-- login form -->

    <div class="login-form-container">

        <span class= "fas fa-times" id="close-login-form"></span>

        <form action="">
            <h3>user login</h3>
            <input type="text" placeholder="email" class="box">
            <input type="password" placeholder="password" class="box">
            <p>forgot your password <a href="#">click here</a></p>
            <input type="submit" value="login now" class="btn">
            <p>or login with</p>
            <div class="buttons">
                <a href="#" class="btn">google</a>
                <a href="#" class="btn">facebook</a>              
            </div>
            <p>don't have an account <a href="#">create one</a></p>
        </form>

    </div>


<!-- home section start -->

<section class="home" id="home">

    <h1 class="home-parallax" data-speed="-2">find you car</h1>
    <img class="home-parallax" data-speed="5" src="#" alt="">
    <a href="#" class="btn home-parallax" data-speed="7">explore cars</a>
</section>

<!-- home section ends -->

<!-- icon section start -->

<seciton class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>590+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>890+</h3>
            <p>new cars</p>
        </div>
    </div>
</seciton>

<!-- icon section ends -->

<!-- vehicles seciton starts -->

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span></h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="#1" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="#2" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="#3" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="#4" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="#5" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="#6" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="#" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price: </span> $65000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>
<!-- vehicles seciton ends -->
<!-- services section start-->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span></h1>
    
    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>
        
        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Neki tekst ide ovdje</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section end-->


<!-- featured section end-->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="#1" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#2" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#3" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#4" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>



    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="#5" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#6" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#7" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

            <div class="swiper-slide box">
                <img src="#8" alt="">
                <h3>new model</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$55,000/-</div>
                <a href="" class="btn">check out</a>
            </div>

        </div>
        
        <div class="swiper-pagination"></div>

    </div>
</section>

<!-- featured section end-->

<!-- newsletter section start-->

<section class="newsletter">

    <h3>subscribe for latest updates</h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum soluta laborum ducimus, inventore explicabo, delectus asperiores vero est tempore labore enim earum ipsam illum nihil voluptatum distinctio voluptatibus tenetur!</p>

    <form action="">
        <input type="email" placeholder="enter your email" class="box" name="" id="">
        <input type="submit" class="subscribe" name="" id="">
    </form>
</section>

<!-- newsletter section end-->


<!-- review section start-->

<section class="reviews" id="reviews">

    <h1 class="heading">client's <span>review</span></h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="1" alt="">\
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga tenetur aut quam repudiandae deserunt! Adipisci excepturi unde dolores quis.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide box">
                <img src="2" alt="">\
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga tenetur aut quam repudiandae deserunt! Adipisci excepturi unde dolores quis.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="3" alt="">\
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga tenetur aut quam repudiandae deserunt! Adipisci excepturi unde dolores quis.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="4" alt="">\
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga tenetur aut quam repudiandae deserunt! Adipisci excepturi unde dolores quis.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="5" alt="">\
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga tenetur aut quam repudiandae deserunt! Adipisci excepturi unde dolores quis.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- review section end-->

<!-- contact section start-->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23214.
        31995934923!2d17.800640960343472!3d43.339583364114134!2m3!1f0!2f0!3f0!3m
        2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43a43b6340a9%3A0x14f32b2d4e37c5a!2
        s88000%20Mostar!5e0!3m2!1shr!2sba!4v1720431033311!5m2!1shr!2sba" 
        allowfullscreen="" loading="lazy" ></iframe>

        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea placeholder="message" class="box" cols="30" rows="10" name="" id=""></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<!-- contact section end-->

<!-- footer section start-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> america </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> africa </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> australia </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> russia </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i> home </a>
            <a href="#"><i class="fas fa-arrow-right"></i> auta </a>
            <a href="#"><i class="fas fa-arrow-right"></i> services </a>
            <a href="#"><i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"><i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"><i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-phone"></i> +3073986742821 </a>
            <a href="#"><i class="fas fa-phone"></i> +3624632462821 </a>
            <a href="#"><i class="fas fa-envelope"></i> emaiul.@.com </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> mumbai, india - 40014 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"><i class="fab fa-pinterest"></i> pinterest </a>
        </div>
    </div>

</section>

<!-- footer section end-->

















<!-- SWIPER-->
<!-- OVAJ JE U NJEGA
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- moj js link -->
<script src="js/script.js"></script>

</body>
</html>