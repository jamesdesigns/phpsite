<?php
$title = "Home";
include '_top.php';
?>






<!-- Start the  index.php page --------------------->
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
  

    <?php include '_bot.php' ?>