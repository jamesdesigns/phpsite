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
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="application/ld+json" src="js/destinations.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/greeting.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.thing').slick({
                dots: true,
                arrows: false,
                cssEase: 'ease-out',
                speed: 300,
                autoplay: false,
                // autoplaySpeed: 1000
            });
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "TravelAgency",
            "name": "Cabot Cruises", 
            "description": "Cabot Cruises is a travel agency providing superior service with amazing deals on our online travel website.",
            "openingHours": "Mo-Fr 09:00-16:30",
            "telephone": "+18665771000",
            "faxNumber": "+18665775555",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "500 South Collins Avenue Suite 100",
              "addressLocality": "Miami",
              "addressRegion": "FL",
              "postalCode": "33410"
            },
            "image": "http://uxpays.com/DGM3740-HTML5-Template/img/CC-Logo-MD.svg",
            "priceRange": "$500 to $10000"
          }
    </script>
</body>
</html>