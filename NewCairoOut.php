<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Caffeinated Canvas</title>
    <link rel="icon" href="./image/imageCairo/rol.png" type="image/icon type">
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- HEADER -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
    
        <div class="popup" onclick="popUp()">
    
            <a href="#" class="logo">Caffeinated Canvas <i class="fas fa-mug-hot"></i></a>
    
            <span class="popuptext" id="myPopup">Welcome To Our CoffeeShop! :)</span>
    
        </div>
    
    
    
        <nav class="navbar">
    
            <div class="menu-container"> <!-- Container for navigation links -->
                <a href="#home"><ion-icon name="storefront-outline"></ion-icon>Home</a>
                <a href="#about"><ion-icon name="people-outline"></ion-icon>About</a>
                <a href="#menu"><ion-icon name="restaurant-outline"></ion-icon>Menu</a>
                <a href="#review"><ion-icon name="chatbox-outline"></ion-icon>Review</a>
                <a href="./feedback.html"><ion-icon name="star-half-outline"></ion-icon>Feedback</a>
                <a href="./view_cart.html"><ion-icon name="cart-outline"></ion-icon>View Cart</a>
            </div>
        </nav>
    
        <a href="#book" class="btn">Book a Table</a>
        <a href="./NewCairo.html" class="btn">Sign Out</a>
    </header>

    <!-- HOME -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>fresh coffee in the morning</h3>
                <a href="#menu" class="btn">buy one now</a>
            </div>

            <div class="image">
                <img src="image/home-img-1.png" class="main-home-image" alt="">
            </div>
        </div>

        <div class="image-slider">
            <img src="image/home-img-1.png" alt="">
            <img src="image/home-image-2.png" alt="">
            <img src="image/home-img-3.png" alt="">
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <h1 class="heading">about us <span>why choose us</span></h1>

        <div class="row">
            <div class="image">
                <img src="image/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Welcome to Caffeinated Canvas, where every cup tells a story and every sip sparks creativity.

                    At Caffeinated Canvas, we believe in more than just serving coffee; we're passionate about crafting experiences.
                     Our journey began with a simple idea: to create a space where people could gather, unwind, and unleash their inner artist.
                    
                    Inspired by the rich tapestry of art and culture, our coffee blends are meticulously curated to delight your senses and fuel your imagination. 
                    From the moment you step through our doors, you're greeted by the aroma of freshly roasted beans and the vibrant energy of our community.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section class="menu" id="menu">
        <h1 class="heading">our menu <span>popular menu</span></h1>

        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>Caffeinated Canvas Signature Latte</h3>
                    <p>Indulge your senses with our masterpiece, the Caffeinated Canvas Signature Latte.
                         Crafted with precision and passion, it's not just a coffee; it's an experience</p>
                    <span>89.99 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="89.99" data-name="Caffeinated Canvas Signature Latte">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info" data-target="nutritional-info-popup-1">View Nutritional Info</button>

                </div>
                
            </a>

            <a href="#" class="box">
                <img src="image/menu-2.png" alt="">
                <div class="content">
                    <h3>Decadent Mocha </h3>
                    <p>Elevate your coffee experience with our Artisan Mocha at Caffeinated Canvas.
                     Crafted with care and creativity, it's not just a beverage; it's a masterpiece in a cup.</p>
                    <span>99.99LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="99.99 LE" data-name="Decadent Mocha">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info " data-target="nutritional-info-popup-2">View Nutritional Info</button>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-3.png" alt="">
                <div class="content">
                    <h3>Classic Cappuccino </h3>
                    <p>Experience the epitome of coffee elegance with our Signature Cappuccino at Caffeinated Canvas.
                     Crafted with precision and passion, it's not just a beverage; it's a masterpiece of flavor and finesse.</p>
                    <span>80.00</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="80.00 LE" data-name="Classic Cappuccino">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info " data-target="nutritional-info-popup-3">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-4.png" alt="">
                <div class="content">
                    <h3>Hot Chocolate</h3>
                    <p>Wrap yourself in the cozy embrace of our Signature Hot Chocolate, a decadent blend of premium cocoa and velvety milk.
                        It's a comforting hug in a cup.</p>
                    <span>120.00 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="120.00 LE" data-name="Hot Choccolate">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info" data-target="nutritional-info-popup-4">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>Artisan Flat White</h3>
                    <p>Discover the perfect balance of bold espresso and velvety milk with our Artisan Flat White. This sophisticated coffee classic 
                        is a testament to simplicity and elegance, with a rich, creamy texture and a smooth, indulgent finish.</p>
                    <span>110.00 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="110.00 LE" data-name="Artisan Flat White">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info " data-target="nutritional-info-popup-5">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-6.png" alt="">
                <div class="content">
                    <h3>Velvet Macchiato </h3>
                    <p>Experience the perfect balance of boldness and subtlety with our Artisan Macchiato at Caffeinated Canvas.
                         Crafted with precision and care, it's not just a coffee; it's a symphony of flavor in a cup.</p>
                    <span>100.00 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="100.00 LE" data-name="Velvet Macchiato">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info" data-target="nutritional-info-popup-6">View Nutritional Info</button>
                </div>
            </a>
        </div>
    </section>
     <!-- Pastry --> 
    <section class="menu" id="pastry">
        <h1 class="heading">Pastry <span>popular menu</span></h1>

        <div class="box-container">
            <a href="#" class="box">
                <img src="./image/Bakery-Transparent.png" alt="A delightful Cookies">
                <div class="content">
                    <h3>Canvas Cookies</h3>
                    <p>Indulge in a palette of flavors with our signature Canvas Cookies at Caffeinated Canvas.
                     Each bite is a brushstroke of sweetness, handcrafted to perfection for a delightful treat 
                     that pairs perfectly with your favorite cup of coffee.</p>
                    <span>49.99</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="49.99 LE" data-name="Canvas Cookies">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info " data-target="nutritional-info-popup-7">View Nutritional Info</button>
                </div>
            </a>

            <a href="#" class="box">
                <img src="./image/Cup.png" alt="a delicious cupcake">
                <div class="content">
                    <h3>Canvas Cupcakes</h3>
                    <p>Satisfy your sweet cravings with a touch of artistic flair at Caffeinated Canvas.
                     Our Canvas Cupcakes are more than just desserts;
                      they're miniature masterpieces crafted to delight your taste buds and ignite your imagination.</p>
                    <span>59.99 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="59.99 LE" data-name="Canvas Cupcakes">Add to Cart</button>
                    <button id="view-nutritional-info-button" class="view-nutritional-info " data-target="nutritional-info-popup-8">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="./image/tarte.png" alt="a delicious tart">
                <div class="content">
                    <h3>Canvas Tarte </h3>
                    <p>Elevate your dessert experience with our delectable Canvas Tart at Caffeinated Canvas. 
                    Handcrafted with precision and passion, each bite is a journey of flavor and elegance that's sure to captivate your senses.</p>
                    <span>119.99 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="$119.99 LE" data-name="Canvas Tarte">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info" data-target="nutritional-info-popup-9">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="./image/Cheesecake.png" alt="Cheesecake">
                <div class="content">
                    <h3>Canvas Cheesecake:</h3>
                    <p>Experience a taste of indulgence with our decadent Canvas Cheesecake at Caffeinated Canvas.
                     Crafted with care and expertise, 
                     each slice is a symphony of creamy richness and heavenly flavors that will leave you craving more.</p>
                    <span>120.00 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="120.00 LE" data-name="Canvas Cheesecake">Add to Cart</button>
                    <button id="view-nutritional-info-button" class="view-nutritional-info " data-target="nutritional-info-popup-10">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="./image/Crepe.png" alt="Crepe">
                <div class="content">
                    <h3>Canvas Crepe</h3>
                    <p>Embark on a journey of culinary delight with our exquisite Canvas Crepe at Caffeinated Canvas.
                         Handcrafted with precision and passion,
                         each crepe is a delicate masterpiece that will transport your taste buds to the streets of Paris.</p>
                    <span>109.99 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="109.99 LE" data-name="Canvas Crepe">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info "  data-target="nutritional-info-popup-11">View Nutritional Info</button>

                </div>
            </a>

            <a href="#" class="box">
                <img src="./image/Croissant-Transparent.png" alt="Croissant">
                <div class="content">
                    <h3>Canvas Croissant</h3>
                    <p>Immerse yourself in the allure of French pastry with our Artisan Croissant at Caffeinated Canvas.
                         Handcrafted with precision and passion, each bite is a celebration of flaky perfection and timeless elegance.</p>
                    <span>49.99 LE</span>
                    <button id="add-to-cart-button" class="add-to-cart" data-price="49.99 LE" data-name="Canvas Croissant" style=" justify-content: 100px;">Add to Cart</button>
                    <button id="view-nutritional-info-button"  class="view-nutritional-info "  data-target="nutritional-info-popup-12">View Nutritional Info</button>
                </div>
            </a>
        </div>
    </section>

   <!-- REVIEW --> 
   <section class="review" id="review">
        <h1 class="heading">reviews <span>what people say</span></h1>

        <div class="swiper review-slider swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-910447cb04f7d51f3" aria-live="off" style="cursor: grab; transform: translate3d(-1806px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide box " data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 431.5px; margin-right: 20px;">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="./image/imageCairo/pic-1.jpg" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>""In the heart of bustling streets, where whispers of tradition mingle with the modern breeze,
                         there lies a sanctuary known as Caffeine Canvas. Oh, how it beckons with its symphony of aromas,
                         drawing weary souls into its embrace.
                        Amidst the tapestry of flavors, where the rich notes 
                        of arabica dance with the sweetness of freshly baked pastries, 
                        one finds solace. Here, time slows its hurried pace, allowing moments to be savored like the finest blend.</p>
                    <h3>Fairuz</h3>
                    <span>satisfied client</span>
                </div>
                <div class="swiper-slide box " data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 431.5px; margin-right: 20px;">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="./image/imageCairo/pic-2.jpg" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"At Caffeine Canvas, the pulse of the city finds its rhythm in every cup. With each sip, 
                        you're transported to a world where every flavor tells a story, and every corner invites you to linger a little longer.
                        Here, amidst the sleek décor and the aroma of freshly ground beans,
                         you find a haven from the chaos outside. It's a place where you can lose yourself in the depths of 
                         a perfectly crafted brew,
                         and where every detail is meticulously curated to delight the senses".</p>
                    <h3>Elissa</h3>
                    <span>satisfied client</span>
                </div>
                <div class="swiper-slide box" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 431.5px; margin-right: 20px;">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="./image/imageCairo/pic-3.jpg" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>""Yo, let me tell you about Caffeine Canvas! It's not just a coffee joint; it's a whole vibe,
                        a scene, man! Picture this: you walk in, and BAM! The aroma hits you like 
                        a punch of flavor right in the face. It's like you've been transported to coffee heaven, bro!
                        The place is buzzing with energy, just like me on stage! You've got people chatting, laughing,
                         maybe even jamming out to some tunes. And the staff? They're on point, always serving up the freshest brews with a smile.
                        But it's not just about the coffee, nah. They've got these insane pastries, cakes, you name it.
                        And don't even get me started on the vibes! It's like stepping into a whole new world, where every cup tells a story, and every moment is a party."</p>
                    <h3>Mohamed Ramadan</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 431.5px; margin-right: 20px;">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="./image/imageCairo/pic-4.jpg" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Caffeine Canvas epitomizes sophistication amidst the urban clamor.
                        Upon entering, one is greeted by the subtle perfume of freshly brewed coffee, promising a sensory journey.
                        The ambiance seamlessly blends comfort with refinement, creating a haven for contemplation
                        and discourse. However, it is the coffee itself that truly captivates. Each cup, meticulously
                        prepared, offers a symphony of flavors that tantalize the palate and evoke a sense of indulgence.
                        Caffeine Canvas is more than a café; it's a sanctuary for those with discerning tastes,
                        where every detail is thoughtfully curated to ensure an unparalleled experience."</p>
                    <h3>Ahmed Ezz</h3>
                    <span>satisfied client</span>
                </div>
        </section>

    <!-- BOOK -->
    <section class="book" id="book">
        <h1 class="heading">booking <span>reserve a table</span></h1>

        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number" class="box">
            <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our branches</h3>
                <a href="./NewCairoOut.html"><i class="fas fa-arrow-right"></i> New Cairo</a>
                <a href="./LondonOUT.html"><i class="fas fa-arrow-right"></i> London</a>
                <a href="./indexOut.html"><i class="fas fa-arrow-right"></i> Los Angeles</a>
         
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i> home</a>
                <a href="#about"><i class="fas fa-arrow-right"></i> about</a>
                <a href="#menu"><i class="fas fa-arrow-right"></i> menu</a>
                <a href="#review"><i class="fas fa-arrow-right"></i> review</a>
               
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +201094027697</a>
                <a href="#"><i class="fas fa-phone"></i> +201149844894</a>
                <a href="#"><i class="fas fa-envelope"></i> coffeeCanva@gmail.com</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="https://www.facebook.com/people/Caffeinated-Canvas/61558841841816/"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="https://www.instagram.com/caffienated__canvas?igsh=MWdseXZ5MXFsbW1mMg=="><i class="fab fa-instagram"></i> instagram</a>
                
            </div>
        </div>
    </section>

<!-- Nutritional Info Popups -->
<div id="nutritional-info-popup-1" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Latte.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-2" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Mocha.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-3" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Cappuchino.PNG" alt="Nutritional Information">
    </div>
</div>
<div id="nutritional-info-popup-4" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Hot Chocolate.PNG" alt="Nutritional Information">
    </div>
</div>
<div id="nutritional-info-popup-5" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Flat White.PNG" alt="Nutritional Information">
    </div>
</div>
<div id="nutritional-info-popup-6" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Caramel Macchiato.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-7" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Cookies.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-8" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/CupCake.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-9" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Tart.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-10" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/CheeseC.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-11" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Crepee.PNG" alt="Nutritional Information">
    </div>
</div>

<div id="nutritional-info-popup-12" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="./image/Croissant.PNG" alt="Nutritional Information">
    </div>
</div>
    
</body>


</html>
 <!-- SWIPER -->
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 <!-- Custom JS File Link  -->
 <script src="script.js"></script>
 <script>
     // When the user clicks on div, open the popup
     function popUp() {
       var popup = document.getElementById("myPopup");
       popup.classList.toggle("show");
     }
     </script>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>