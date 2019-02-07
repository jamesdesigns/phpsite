<?php
$title = "Home";
include '_top.php';
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cabot Cruises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <div class="header">
            <picture>
                    <source srcset="img/CC-Logo-SM.svg" media="(max-width:35em)">
                    <source srcset="img/CC-Logo-MD.svg" media="(max-width:48em)"> 
                    <source srcset="img/CC-Logo-LG.svg">
                    <img srcset="img/CC-Logo-LG.svg" width="339" height="97" alt="My Default image">
            </picture>
            <div class="header-right"> 
                    <a class="telephone" href="tel:18665771000">1-866-577-1000</a>
                </div> 
        </div>
    </header>


    <section id="myNav">
        <div class="topnav" id="myTopnav">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                <a class="active" href="#home">Home</a>
                <a href="#">Cruises</a>
                <a href="#">Book</a>
                <div class="dropdown">
                        <button class="dropbtn">Agents 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="#">Jay Willardson</a>
                          <a href="#">Lori Reynolds</a>
                        </div>
                      </div> 
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
        </section>



<div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
                <picture class="cruise">
                    <source srcset="img/yacht3-sm.jpg" media="(max-width:35em)">
                    <source srcset="img/yacht3.jpg">
                    <img srcset="img/yacht3.jpg" alt="My Default image">
                </picture>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <picture class="cruise">
                <source srcset="img/yacht5-sm.jpg" media="(max-width:35em)">
                <source srcset="img/yacht5.jpg">
                <img srcset="img/yacht5.jpg" alt="My Default image">
            </picture>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <picture class="cruise">
                <source srcset="img/yacht1-sm.jpg" media="(max-width:35em)">    
                    <source srcset="img/yacht1.jpg">
                    <img srcset="img/yacht1.jpg" alt="My Default image">
            </picture>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <picture class="cruise">
                    <source srcset="img/yacht4-sm.jpg" media="(max-width:35em)">
                    <source srcset="img/yacht4.jpg">
                    <img srcset="img/yacht4.jpg" alt="My Default image">
                </picture>
        </div>
        <a class="prev" onclick="plusSlides(-1)"><!--&#10094;--></a>
        <a class="next" onclick="plusSlides(1)"><!-- &#10095;--></a>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
      </div>
    </section>
    <section>
    <div class="newArticles"><h1>Recent Blog Articles</h1></div>
    <div class="blogArticles">
        <a href="#">
        <div class="article1">
            <div class="description"><h2>Patio Dining</h2></div>
            <div class="date">
                <time datetime="2018-03-16 20:00">March 16, 2018</time>
            </div>
        </div>
        </a>
        <a href="#">
        <div class="article2">
            <div class="description"><h2>Gourmet Meals</h2></div>
            <div class="date">
                <time datetime="2018-05-10 20:00">May 10, 2018</time></div>
        </div>
        </a>
        <a href="#">
        <div class="article3">
            <div class="description"><h2>Snorkeling</h2></div>
            <div class="date">
            <time datetime="2018-07-04 20:00">July 4, 2018</time></div>
            </div>
        </a>  
        <a href="#">
        <div class="article4">
            <div class="description"><h2>Jungle Tours</h2></div>
            <div class="date">
                <time datetime="2018-08-01 20:00">August 1, 2018</time></div>
            </div>
        </a>
    </div>
    </section>
    <footer>
        <div class="info">
            <div class="contact">
                <h2>Contact Us</h2>
                <div class="address">
                <h3>Cabot Cruises</h3>
                <address>
                    500 South Collins Ave. Suite 100<br>
                    Miami, FL 33410
                </address>
                <br>
                <h3>Phone:</h3>
                <a href="tel:18665771000">1-866-577-1000</a>
                <br><br>
                <h3>Hours of Operation:</h3>
                <p>Monday - Friday | 9am - 4pm</p>
                </div>
            </div>
            <div class="newsletter">
                <h2>Newsletter</h2>
                <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
                <input type="text"><br>
                <button class="custom">Subscribe</button>
            </div>
            <div class="cruiseInfo">
                <h2>Why Cabot Cruises</h2>
                <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises.</p>
                <br>
                <p>We do not sell travel to residents of Hawaii and Florida because those states already live in paradise. If you are a resident of one of these states, call your congressman and tell them to change the regulations.</p></div>
        </div>
        <div class="social">
            <div class="icons">
                    <a href="#"><i class="fab fa-facebook-square pad"></i></a>
                    <a href="#"></a><i class="fab fa-youtube-square pad"></i></a>
                    <a href="#"></a><i class="fab fa-instagram pad"></i></a>
                    <a href="#"></a><i class="fab fa-pinterest-square pad"></i></a>
                    <a href="#"></a><i class="fab fa-twitter-square pad"></i></a>
            </div>
        </div>
        <div class="copyright">
                &#169; 2019 James Hooper | <a href="http://www.artistjameshooper.com" target="_blank">www.artistjameshooper.com</a>
        </div>
    </footer>
    </main>
    <script type="text/javascript" src="js/slideshow.js"></script>
    <script type="application/ld+json" src="js/destinations.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
</body>
</html>