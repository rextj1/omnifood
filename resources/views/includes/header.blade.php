<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div col-sm-12>
                        <img src="{{asset('img/logo-white.png')}}" alt="omnifood logo" class="logo"> 
                   
               
                        <ul class="main-nav js--main-nav">
                            <li><a href="#features">Food delivery</a></li>
                            <li><a href="#works">How it works</a></li>
                            <li><a href="#cities">Our cities</a></li>
                            <li><a href="#plans">Sign up</a></li>
                        </ul>
                

              
                        <div class="hero-text-box">
                            <h1>Goodbye junk food. <br> Hello super healthy meals.</h1>
                            <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a> 
                            <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
                        </div>
                    </div>
                        
                 
                   
                </div>

               
            </div>          
        </nav>
        
    </header>

    <section class="section-features js--section-features" id="features">
        <div class="container">
            <h2>Get food fast &mdash; not fast food</h2>
            <p class="long-copy">
                Hello, we're Omnifood, your new premium food delivery service.Â We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
            </p>
       

        <div class="container js--wp-1">
            <div class="row">
                <div class="col-sm-3 box">
                    <i class="ion-ios-infinite-outline icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                        Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                    </p>
                </div>
                <div class="col-sm-3 box">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                    </p>
                </div>
                <div class="col-sm-3 box">
                    <i class="ion-ios-nutrition-outline icon-big"></i>
                    <h3>100% organic</h3>
                    <p>
                        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                    </p>
                </div>
                <div class="col-sm-3 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>
            </div>
        </div>
        </div>   
    </section>

    <section class="section-meals">
        <div class="row">
            <div class="col-sm-12">
                <ul class="meals-showcase clearfix">
                    <li>
                        <figure class="meal-photo">
                            <img src="img/1.jpg" alt="Korean bibimbapÂ with egg and vegetables">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/3.jpg" alt="Chicken breast steak with vegetables">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/4.jpg" alt="Autumn pumpkin soup">
                        </figure>
                    </li>
                
                    <li>
                        <figure class="meal-photo">
                            <img src="img/5.jpg" alt="Paleo beef steak with vegetables">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/6.jpg" alt="Healthy baguette with egg and vegetables">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/7.jpg" alt="Burger with cheddar and bacon">
                        </figure>
                    </li>
                    <li>
                        <figure class="meal-photo">
                            <img src="img/8.jpg" alt="Granola with cherries and strawberries">
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
      
    </section>

    <section class="section-steps" id="works">
        <div class="container">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
   
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 steps-box">
                    <img src="img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
                </div>
                <div class="col-lg-6  steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn-app"><img src="img/download-app.svg" alt="App Store Button"></a>
                        
                        <a href="#" class="btn-app"><img src="img/download-app-android.png" alt="Play Store Button"></a>
                    </div>
                   
                </div>
            </div>
        </div>           
        </div>
    </section>

    <section class="section-cities" id="cities">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>We're currently in these cities</h2>
 
                    <div class="container js--wp-3">
                        <div class="row">
                            <div class="col-sm-3 box">
                                <img src="img/lisbon-3.jpg" alt="Lisbon">
                                <h3>Lisbon</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i>
                                    1600+ happy eaters
                                </div>
                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i>
                                    60+ top chefs
                                </div>
                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i>
                                    <a href="#">@omnifood_lx</a>
                                </div>
                            </div>
                            <div class="col-sm-3 box">
                                <img src="img/san-francisco.jpg" alt="San Francisco">
                                <h3>San Francisco</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i>
                                    3700+ happy eaters
                                </div>
                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i>
                                    160+ top chefs
                                </div>
                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i>
                                    <a href="#">@omnifood_sf</a>
                                </div>
                            </div>
                            <div class="col-sm-3 box">
                                <img src="img/berlin.jpg" alt="Berlin">
                                <h3>Berlin</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i>
                                    2300+ happy eaters
                                </div>
                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i>
                                    110+ top chefs
                                </div>
                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i>
                                    <a href="#">@omnifood_berlin</a>
                                </div>
                            </div>
                            <div class="col-sm-3 box">
                                <img src="img/london.jpg" alt="London">
                                <h3>London</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i>
                                    1200+ happy eaters
                                </div>
                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i>
                                    50+ top chefs
                                </div>
                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i>
                                    <a href="#">@omnifood_london</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>     
    </section>

    <section class="section-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Our customers can't live without us</h2>
                </div>

                <div class="col-sm-4">
                    <blockquote>
                        Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                        <cite><img src="img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col-sm-4">
                    <blockquote>
                        Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                        <cite><img src="img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col-sm-4">
                    <blockquote>
                        I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                        <cite><img src="img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                    </blockquote>
                </div>
                               
            </div>
            
        </div>
    </section>

    <section class="section-plans js--section-plans" id="plans">
        <div class="container">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>/ month</span></p>
                            <p class="plan-price-meal">That's only 13.30$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$149 <span>/ month</span></p>
                            <p class="plan-price-meal">That's only 14.90$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">19$ <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>.</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <section class="section-form">
        <div class="container">
            <h2>We're happy to hear from you</h2>
      
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" action="#" class="contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <input type="text" name="name" id="name" placeholder="Your name" required>
                                </div>
                            </div>  
                        </div>
        
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>
                            </div>                
                        </div>
        
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label for="find-us">How did you find us?</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <select name="find-us" id="find-us">
                                        <option value="friends" selected>Friends</option>
                                        <option value="search">Search engine</option>
                                        <option value="ad">Advertisement</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>                   
                        </div>
        
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label>Newsletter?</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <input type="checkbox" name="news" id="news" checked> Yes, please
                                </div>
                            </div>                   
                        </div>
        
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label>Drop us a line</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                            </div>                  
                        </div>
        
                        <div class="container">
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <input type="submit" value="Send it!">
                                </div>
                            </div>                 
                        </div>
                        
                    </form>
                </div>
            </div>
       
            
        </div>
    </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-googleplus"></i></a></li>
                        <li><a href="#"><i class="fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>         
        </div>

        <div class="container">
            <p>
                Copyright &copy; 2015 by Omnifood. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>