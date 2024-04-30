<!doctype html>
<html class="no-js" lang="en">


<?php 
include("header.php");
?>

<body>

    <div class="main-wrapper main-wrapper-3">
        <?php 
        include("navbar.php");
        ?>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icofont-close-line"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Awesome Mobile</a></h4>
                                <span> 1 × ₹49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Smart Watch</a></h4>
                                <span> 1 × ₹49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>₹170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.php">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.php">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu start -->
        <div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icofont-close-line"></i></a>
                <div class="mobile-menu-content-area sidebar-content-100-percent">
                    <div class="mobile-search">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icofont-search-1"></i></button>
                        </form>
                    </div>
                    <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                    <nav>
                                        <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about-us.php">About Us</a></li>
                                                    <!-- <li><a href="shop.php">shop</a></li> -->
                                                    <!-- <li class="has-sub-menu"><a href="shop.php">shop</a>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="#">Categories</a></li>
                                                            <li><a href="#">Products</a></li>
                                                            
                                                        </ul>
                                                    </li> -->
                                                    <li class="has-sub-menu"><a href="#">shop</a>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="mobile.php">Mobile Accessories</a></li>
                                                            <li><a href="books.php">Books</a></li>
                                                            <li><a href="attar.php">Attars</a></li>
                                                            <li><a href="mats.php">Prayer Mats</a></li>
                                                            <li><a href="abayas.php">Abayas</a></li>
                                                            <li><a href="niche-items.php">Niche Items </a> </li>
                                                            
                                                                                
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-no-sidebar.php">Blog</a></li>
                                                    <!-- <li><a href="blog-no-sidebar.php">Blog</a>

                                                        <ul class="sub-menu-width">
                                                            <li><a href="blog.php">Blog Page</a></li>
                                                            <li><a href="blog-no-sidebar.php">Blog No sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                                            <li><a href="blog-details.php">Blog Details</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <!-- <li class="has-sub-menu"><a href="#">Blog</a>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="blog.php">Blog Page</a></li>
                                                            <li><a href="blog-no-sidebar.php">Blog No sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                                            <li><a href="blog-details.php">Blog Details</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li><a href="contact-us-2.php">Contact Us</a></li>
                                            <!-- <li><a href="index.php">Home</a>
                                                <ul class="mega-menu-style-1 mega-menu-width1 menu-negative-mrg1">
                                                    
                                                    <li class="mega-menu-sub-width33"><a class="menu-title" href="#">Home Group #01</a>
                                                        <ul>
                                                            <li><a href="index.php">Home Multipurpose</a></li>
                                                            <li><a href="index-megashop.php">Home Mega Shop</a></li>
                                                            <li><a href="index-fashion.php">Home Fashion</a></li>
                                                            <li><a href="index-fashion-2.php">Home Fashion 2 </a></li>
                                                            <li><a href="index-automobile.php">Home Automobile</a></li>
                                                            <li><a href="index-furniture.php">Home Furniture</a></li>
                                                            <li><a href="index-electric.php">Home Electric</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width33"><a class="menu-title" href="#">Home Group #02</a>
                                                        <ul>
                                                            <li><a href="index-electric-2.php">Home Electric 2</a></li>
                                                            <li><a href="index-handcraft.php">Home Hand Craft</a></li>
                                                            <li><a href="index-book.php">Home Book</a></li>
                                                            <li><a href="index-book-2.php">Home Book 2</a></li>
                                                            <li><a href="index-cake.php">Home cake</a></li>
                                                            <li><a href="index-organic.php">Home Organic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width33"><a class="menu-title" href="#">Home Group #03</a>
                                                        <ul>

                                                            <li><a href="index-flower.php">Home Flower</a></li>
                                                            <li><a href="index-treeplant.php">Home Tree plant</a></li>
                                                            <li><a href="index-pet-food.php">Home Pet Food</a></li>
                                                            <li><a href="index-kids.php">Home Kids</a></li>
                                                            <li><a href="index-kids-2.php">Home Kids 2</a></li>
                                                            <li><a href="index-kids-3.php">Home Kids 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.php">Shop</a>
                                                <ul class="mega-menu-style-1 mega-menu-width2 menu-negative-mrg2">
                                                    <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Layout</a>
                                                        <ul>
                                                            <li><a href="shop.php">Shop Grid Style 1</a></li>
                                                            <li><a href="shop-2.php">Shop Grid Style 2</a></li>
                                                            <li><a href="shop-3.php">Shop Grid Style 3</a></li>
                                                            <li><a href="shop-4.php">Shop Grid Style 4</a></li>
                                                            <li><a href="shop-5.php">Shop Grid Style 5</a></li>
                                                            <li><a href="shop-6.php">Shop Grid Style 6</a></li>
                                                            <li><a href="shop-list.php">Shop List Style 1</a></li>
                                                            <li><a href="shop-list-no-sidebar.php">Shop List Style 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Product Layout</a>
                                                        <ul>
                                                            <li><a href="product-details.php">Product Layout 1</a></li>
                                                            <li><a href="product-details-2.php">Product Layout 2</a></li>
                                                            <li><a href="product-details-3.php">Product Layout 3</a></li>
                                                            <li><a href="product-details-4.php">Product Layout 4</a></li>
                                                            <li><a href="product-details-5.php">Product Layout 5</a></li>
                                                            <li><a href="product-details-6.php">Product Layout 6</a></li>
                                                            <li><a href="product-details-7.php">Product Layout 7</a></li>
                                                            <li><a href="product-details-8.php">Product Layout 8</a></li>
                                                            <li><a href="product-details-9.php">Product Layout 9</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Pages</a>
                                                        <ul>
                                                            <li><a href="my-account.php">My Account</a></li>
                                                            <li><a href="checkout.php">Check Out</a></li>
                                                            <li><a href="cart.php">Shopping Cart</a></li>
                                                            <li><a href="wishlist.php">Wishlist</a></li>
                                                            <li><a href="order-tracking.php">Order Tracking</a></li>
                                                            <li><a href="compare.php">Compare</a></li>
                                                            <li><a href="store.php">Store</a></li>
                                                            <li><a href="empty-cart.php">Empty Cart</a></li>
                                                            <li><a href="login-register.php">login / register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width40">
                                                        <div class="banner-menu-content-wrap default-overlay">
                                                            <a href="product-details.php"><img src="assets/images/menu/banner-header-1.jpg" alt="banner"></a>
                                                            <div class="banner-menu-content">
                                                                <h2>New <br>Collections</h2>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="sub-menu-width">
                                                    <li><a href="about-us.php">About Us</a></li>
                                                    <li><a href="contact-us.php">Contact Us</a></li>
                                                    <li><a href="contact-us-2.php">Contact Us 2</a></li>
                                                    <li><a href="404.php">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.php">Collections</a></li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="sub-menu-width">
                                                    <li><a href="blog.php">Blog Page</a></li>
                                                    <li><a href="blog-no-sidebar.php">Blog No sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-details.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.php">Contact</a></li> -->
                                        </ul>
                        </nav>
                    </div>
                    <div class="mobile-curr-lang-wrap">
                        <div class="single-mobile-curr-lang">
                            <a class="mobile-language-active" href="#">Language <i class="icofont-simple-down"></i></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Hindi </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="aside-contact-info">
                        <ul>
                            <li><i class="icofont-clock-time"></i>Monday - Friday: 9:00 - 19:00</li>
                            <li><i class="icofont-envelope"></i>Info@example.com</li>
                            <li><i class="icofont-stock-mobile"></i>(+55) 254. 254. 254</li>
                            <li><i class="icofont-home"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Unveiling the Alluring World of Attars</h2>
                    <!-- <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p> -->
                    <a href="index.php">Home</a>/<a href="blog-no-sidebar.php">Blogs</a>/<a href="attar_blog.php">Attars</a>
                </div>
            </div>
            <!-- <div class="breadcrumb-img-1">
                <img src="assets/images/about/breadcrumb-1.png" alt="">
            </div>
            <div class="breadcrumb-img-2">
                <img src="assets/images/about/breadcrumb-2.png" alt="">
            </div> -->
        </div>
        <div class="blog-area pt-160 pb-160">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="blog-details-wrap ml-20">
                            <div class="blog-details-content">
                                <div class="blog-details-img">
                                    <img src="assets/images/blog/blog-11.jpg" alt="blog">
                                </div>
                                <h3>Unveiling the Alluring World of Attars:<br> A Journey for the Senses</h3>
                                <!-- <div class="blog-meta-5">
                                    <ul>
                                        <li>By by John Snow</li>
                                        <li>-</li>
                                        <li>April 17,2019</li>
                                    </ul>
                                </div> -->
                                <p>In the realm of fragrance, attars hold a unique and captivating place. These natural essential oils, meticulously crafted from flowers, herbs, and other botanical wonders, transcend the realm of mere perfume. Attars are an olfactory experience, a symphony of aromas that can transport you to faraway lands, evoke cherished memories, and even influence your mood and well-being.</p>
                                <h4>A Rich History Steeped in Tradition:</h4>
                                <p>The history of attars dates back centuries, with their origins tracing back to ancient civilizations like Egypt, Persia, and India. These fragrant elixirs were not just considered luxurious personal adornments, but also played a significant role in religious ceremonies, medicinal practices, and social customs. Skilled artisans, known as attars, perfected the art of extracting and blending essential oils, creating unique and coveted fragrances.</p>
                                <h4>The Art of Distillation: Capturing Nature's Essence:</h4>
                                <p>The process of creating attars is an intricate dance between science and artistry. Traditional methods involve steam distillation, where plant materials are gently steamed, releasing their volatile aromatic compounds. These fragrant vapors are then condensed, resulting in a precious oil that captures the very essence of the plant. Different parts of the plant, like flowers, leaves, or roots, can be used, each yielding a distinct aroma profile.</p>
                                <div class="blog-dec-midle-content">
                                    <img src="assets/images/blog/blog-11b.jpg" alt="blog"><br><br>
                                    <h4>Aromatic Delights: Exploring the Diverse World of Attar Scents:</h4>
                                    <p>The world of attars offers a captivating array of fragrances, each with its own unique character. Floral notes like rose, jasmine, and lavender evoke feelings of romance and serenity. Citrusy essential oils like bergamot and grapefruit provide an invigorating burst of freshness. Earthy scents like sandalwood and vetiver offer a grounding and calming experience.</p>
                                    <h4>Beyond Fragrance: The Therapeutic Power of Attars:</h4>
                                    <p>Attars have long been valued for their therapeutic properties in various cultures. Certain essential oils possess calming and stress-relieving properties, while others can promote alertness and focus. The use of attars in aromatherapy continues to gain popularity, offering a natural approach to promoting well-being and managing various ailments.</p>
                                    <h4>Choosing Your Perfect Attar: A Guide for Beginners:</h4>
                                    <p>If you're new to the world of attars, navigating the vast array of scents and choosing the right one for you can feel overwhelming. Here are a few tips to get you started:</p>
                                
                                    <div class="service-area pt-45 pb-30">
                                        <div class="container">

                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="service-wrap service-bg-color-1 service-wrap-ptb-1 text-center mb-30" >
                                                        <!-- <img class="inject-me" src="assets/images/icon-img/happiness.svg" alt=""> -->
                                                        <h4 style="font-weight:600">Consider <br> Your Preferences</h4>
                                                        <p style="width:100%">Do you gravitate towards floral, citrusy, or earthy scents? Reflect on the types of fragrances you generally enjoy when choosing an attar.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="service-wrap service-bg-color-2 service-wrap-ptb-2 text-center mb-30" >
                                                        <!-- <img class="inject-me" src="assets/images/icon-img/shipping-car.svg" alt=""> -->
                                                        <h4 style="font-weight:600">Start Simple</h4><br>
                                                        <p style="width:100%" >Option for single-note attars if you're a beginner. Once you become familiar with individual scents, you can explore more complex blends.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="service-wrap service-bg-color-3 service-wrap-ptb-3 text-center mb-30">
                                                        <!-- <img class="inject-me" src="assets/images/icon-img/trusty.svg" alt=""> -->
                                                        <h4 style="font-weight:600">Sample Wisely</h4><br>
                                                        <p style="width:100%">Many online retailers offer sample sets, allowing you to experiment with different attars before committing to a full bottle.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="service-wrap service-bg-color-4 service-wrap-ptb-3 text-center mb-30">
                                                        <!-- <img class="inject-me" src="assets/images/icon-img/support-expart.svg" alt=""> -->
                                                        <h4 style="font-weight:600">Consult with an Expert</h4>
                                                        <p style="width:100%">Don't hesitate to reach out to a knowledgeable attar seller who can guide you based on your preferences and desired benefits.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="quote-content quote-content-mrg text-center">
                                    <h5>“Highly customizable. Excellent design. Customer services has exceeded my expectation. They are quick to answer and even when they don’t know the answer right away. They’ll work with you towards a solution”</h5>
                                    <div class="blog-name">
                                        <span>Michael Franklin</span>
                                    </div>
                                </div> -->
                                <h4>Embracing the Ritual: Applying Your Attar:</h4>
                                <p>Attars are traditionally applied to pulse points like the wrists, neck, and behind the ears. The warmth of your body helps to activate the essential oils and diffuse the fragrance throughout the day. A small dab is all you need, as attars are typically more concentrated than conventional perfumes.</p>
                                <h4>More Than Just a Scent: A Journey of Self-Discovery:</h4>
                                <p>Attars offer more than just an olfactory delight; they provide an opportunity for self-discovery. Exploring different aromas can spark memories, evoke emotions, and even influence your mood and energy levels. As you delve deeper into the world of attars, you embark on a personal journey, learning about different plant essences and their unique properties.</p>
                                <p>Incorporating attars into your daily routine can be a mindful and enriching experience. Whether you seek a calming sanctuary after a long day or a touch of invigorating energy to kickstart your morning, there's an attar waiting to be discovered. So, take a deep breath, explore the captivating world of attars, and unlock a new dimension of olfactory and personal exploration.</p>

                            </div>
                            <!-- <div class="blog-details-tag-social">
                                <div class="blog-details-tag">
                                    <ul>
                                        <li>Tags : </li>
                                        <li><a href="#">Computer,</a></li>
                                        <li><a href="#">Design,</a></li>
                                        <li><a href="#">Technology.</a></li>
                                    </ul>
                                </div>
                                <div class="blog-details-social">
                                    <ul>
                                        <li>Share this post :</li>
                                        <li><a class="facebook" href="#"><i class="icon-social-facebook-square"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="icon-social-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="icon-social-instagram"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="next-prev-wrap">
                                <div class="next-wrap next-prev-conent">
                                    <h4><a href="#">Brighten Up <br>Dull Tired Skin</a></h4>
                                    <a href="#">Prev Post</a>
                                </div>
                                <div class="prev-wrap next-prev-conent">
                                    <h4><a href="#">Beauty Pageants Should You <br> Let Your Teen Enter Them</a></h4>
                                    <a href="#">Next Post</a>
                                </div>
                            </div>
                            <div class="blog-comments-area">
                                <h4 class="blog-details-title">4 Comment</h4>
                                <div class="blog-comments-wrap">
                                    <div class="single-blog-bundel">
                                        <div class="single-blog-comment mb-40">
                                            <div class="blog-comment-img">
                                                <img alt="" src="assets/images/blog/user1.png">
                                            </div>
                                            <div class="blog-comment-content">
                                                <p>“Theme is very flexible and easy to use. Perfect for us. Customer support has been excellent and answered every question we've thrown at them</p>
                                                <div class="comment-name-reply">
                                                    <h5>35 mins ago, 15 November 2019 </h5>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-blog-comment child-blog-comment ml-80">
                                            <div class="blog-comment-img">
                                                <img alt="" src="assets/images/blog/user2.png">
                                            </div>
                                            <div class="blog-comment-content">
                                                <p>“This theme is indeed a great purchase. Support center is also helpful and quick to answer. No issues so far.”</p>
                                                <div class="comment-name-reply">
                                                    <h5>35 mins ago, 15 November 2019</h5>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-blog-bundel">
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-img">
                                                <img alt="" src="assets/images/blog/user3.png">
                                            </div>
                                            <div class="blog-comment-content">
                                                <p>“Exceptional service, beautiful and straightforward theme! Can't recommend enough.”</p>
                                                <div class="comment-name-reply">
                                                    <h5>35 mins ago, 15 November 2019</h5>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-blog-bundel">
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-img">
                                                <img alt="" src="assets/images/blog/user4.png">
                                            </div>
                                            <div class="blog-comment-content">
                                                <p>“Highly customizable. Excellent design. Customer services has exceeded my expectation. They are quick to answer and even when they don't know the answer right away. They'll work with you towards a solution.”</p>
                                                <div class="comment-name-reply">
                                                    <h5>35 mins ago, 15 November 2019</h5>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3>Leave a Reply </h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Name *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Email *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Website" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="leave-form">
                                                <textarea placeholder="Your Comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-submit">
                                        <input type="submit" value="Post Comment">
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-search mb-70">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search Post">
                                <button class="button-search"><i class="icofont-search-1"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Popular Post </h4>
                            <div class="sidebar-post-wrap mt-45 mb-70">
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="attar_blog.php"><img src="assets/images/blog/blog-11.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="attar_blog.php">Unveiling the Alluring World of Attars</a></h4>
                                        <!-- <span>19 Augs, 2019 - by John </span> -->
                                    </div>
                                </div>
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="books_blog.php"><img src="assets/images/blog/blog-10.png" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="books_blog.php">The Enduring Power of Books</a></h4>
                                        <!-- <span>19 Augs, 2019 - by John </span> -->
                                    </div>
                                </div>
                                <!-- <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.php"><img src="assets/images/blog/blog-sidebar-3.png" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.php">New Suite</a></h4>
                                        <span>19 Augs, 2019 - by John </span>
                                    </div>
                                </div>
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="blog-details.php"><img src="assets/images/blog/blog-sidebar-4.png" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="blog-details.php">Beautiful Flower</a></h4>
                                        <span>19 Augs, 2019 - by John </span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Categories</h4>
                            <div class="sidebar-widget-categori mt-45 mb-70">
                                <ul>
                                    <li><a href="#">Clothing</a> </li>
                                    <li><a class="active" href="#">Watches</a> </li>
                                    <li><a href="#">Accessories</a> </li>
                                    <li><a href="#"> Big & Tall </a> </li>
                                    <li><a href="#">Contemporary</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Tags</h4>
                            <div class="sidebar-widget-tag mt-50 mb-70">
                                <ul>
                                    <li><a href="#">Beauty</a> </li>
                                    <li><a href="#">Life Style</a> </li>
                                    <li><a href="#">Design</a> </li>
                                    <li><a href="#">Technology</a> </li>
                                    <li><a href="#">Fashion</a> </li>
                                    <li><a href="#">Furniture</a> </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Archives </h4>
                            <div class="sidebar-widget-archives mt-45">
                                <select class="nice-select nice-select-style-3 cart-tax-select">
                                    <option> June 2019 </option>
                                    <option> December 2018 </option>
                                    <option> November 2018 </option>
                                    <option> October 2017 </option>
                                    <option>August 2019</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <?php 
        include('footer.php')
        ?>
    </div>

    <!-- All JS is here
============================================ -->
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/countdown.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/instafeed.js"></script>
<script src="assets/js/plugins/svg-injector.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/mouse-parallax.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/dking-preview/dking/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 19:31:54 GMT -->
</html>