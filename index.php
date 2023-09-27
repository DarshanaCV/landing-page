<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script src="./js/app.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header class="main-header">


<!-- PAGE ONE -->
        <div class="layers">
            <nav>
                <div class="logo">
                    <a href="#">
                        <img src="./media/icon/logo2.png"/>
                        <div class="logoname">
                            <h3>TRAVEL VIBE</h3>
                            <i><p>tours & guides</p></i>
                        </div>
                    </a>
                </div>
                <div class="toggle">
                    <a href="#"><ion-icon name="menu"></ion-icon></a>
                </div>
                <ul class="menu">
                    <li><a href="#">DISCOVER</a></li>
                    <li><a href="#blog">BLOG</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
            </script>
            <script>
                $(function(){
                    $(".toggle").on("click",function(){
                        if($(".menu").hasClass("active")){
                            $(".menu").removeClass("active");
                            $("nav").removeClass("active");
                            $(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
                        }else{
                            $(".menu").addClass("active");
                            $("nav").addClass("active");
                            $(this).find("a").html("<ion-icon name='close-outline'></ion-icon>");
                        }
                    });
                });
            </script>

            <div class="pageone">
                <p>WELCOME TO</p>
                <h1>TRAVEL VIBE</h1>
            </div>
            <div class="layer layer1"></div> 
            <div class="layer layer2"></div>
            <div class="layer layer3"></div>
        </div>
    </header>

    <article>

<!-- PAGE TWO -->
        <div class="pagetwo"> 
            <section class="hidden">
                <h1>Tour around the world with the new destination.</h1>
                <p>We believe in a travelling experience by providing our tour plan that suits your the best! </p>
                <a href="#sec1">EXPLORE</a>
            </section>
        </div>

<!-- PAGE THREE -->
        <div class="pagethree">


            <div class="popular_tours hidden">
                <h1>POPULAR TOURS</h1>
                <p>since last three years</p>
            </div>


            <div class="cards hidden">
                <div class="card card1">
                    <img src="./media/popular tours/colosseum.jpg">
                    <a href="#">
                        <div class="cards_header1">
                            <h2>COLOSSEUM</h2>
                            <p>Rome, Italy</p>
                        </div>
                    </a>
                </div>

                <div class="card card2">
                    <img src="./media/popular tours/london.jpg">
                    <a href="#">
                        <div class="cards_header2">
                            <h2>BIG BEN</h2>
                            <p>London, England</p>
                        </div>
                    </a>
                </div>

                <div class="card card3">
                    <img src="./media/popular tours/new york2.jpg">
                    <a href="#">
                        <div class="cards_header3">
                            <h2>STATUE OF LIBERTY</h2>
                            <p>New York, US</p>
                        </div>
                    </a>
                </div>

                <div class="card card4">
                    <img src="./media/popular tours/paris.jpg">
                    <a href="#">
                        <div class="cards_header4">
                            <h2>LOUVRE MUSEUM</h2>
                            <p>Paris, France</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

<!-- PAGE FOUR -->
    <div class="pagefour hidden">
        <h1 id="about">ABOUT US</h1>
        <div class="about hidden">
            <div class="img"></div>
            <div class="aboutcard">
                <h3>Get to know us</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum eum aperiam 
                    eos recusandae repellendus placeat corporis, optio odio iste quod! Iusto
                    tempora distinctio repudiandae commodi harum eos delectus ipsa explicabo.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum eum aperiam 
                    eos recusandae repellendus placeat corporis, optio odio iste quod! 
                </p>
                <a href="#">READ MORE</a>
                <div class="aboutstats">
                    <div class="statsinfo"> <h4>500</h4><p>tours</p> </div>
                    <div class="statsinfo"> <h4>10</h4><p>years</p> </div>
                    <div class="statsinfo"> <h4>15000</h4><p>members</p> </div>
                    <div class="statsinfo"> <h4>550</h4><p>reviewes</p> </div>
                </div>
            </div>
        </div>
    </div>

<!-- PAGE FIVE -->
    <div class="pagefive hidden" id="blog">

        <div class="blogs hidden">
            <h1>READ AWESOME BLOG</h1>

            <div class="blog">
                <div class="date">
                    <h1>10</h1>
                    <p>Sep, 2023</p>
                </div>
                <p>Tips and tools for hosting in multiple languages</p>
            </div>

            <div class="blog">
                <div class="date">
                    <h1>08</h1>
                    <p>Sep, 2023</p>
                </div>
                <p>Staging your home environment for your online experience</p>
            </div>

            <div class="blog">
                <div class="date">
                    <h1>03</h1>
                    <p>Sep, 2023</p>
                </div>
                <p>Writing a clear and specific experience itinerary</p>
            </div>

            <a href="#">See All New</a>

        </div>  

        <div class="slider hidden">
            <img src="./media/forest.png" alt="forest" />
            <img src="./media/mountain_green.png" alt="green mountain" />
            <img src="./media/mountain_lake.png" alt="lake mountain" />
            <img src="./media/mountains2.png" alt="mountain" />
            <img src="./media/orange_mountain.png" alt="orange sky mountain" />
            <img src="./media/sunrays.png" alt="sunrays forest"/>
        </div>

          
    </div>
    <!-- PAGE SIX -->
    <div class="pagesix hidden">
        <video playsinline autoplay muted loop>
            <source src="./media/forest_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        <div class="videoWrapper hidden">  
            <div class="pagesix_heading">
                <h1>SEND US A REQUEST TO BOOK A COOL TRIP</h1>
            </div>
            <div class="form">
                <form method="post" action="new.php">
                    <input type="text" placeholder="NAME" name="name"><br>
                    <input type="email" placeholder="EMAIL" name="email"><br>
                    <input type="text" placeholder="MESSAGE" name="message"><br>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>
    


    <footer>
    <div class="pageseven hidden">
        <div class="footer footer1">
            <h1>Travel Vibe</h1>
            <p>1980 Haloween Street Mumbai,Maharashtra</p>
            <p>Call us: 1800-239-359</p>
            <div class="social_media">
                <div><img src="./media/icon/facebook.jpg"/></div>
                <div><img src="./media/icon/instagram.jpg"/></div>
                <div><img src="./media/icon/linkedin.jpg"/></div>                   
                <div><img src="./media/icon/pinterest.jpg"/></div>
                <div><img src="./media/icon/youtube.jpg"> </div>           
            </div>
        </div>

        <div class="footer">
            <h1>Tour</h1>
            <p>Italy</p>
            <p>London</p>
            <p>New York</p>
            <p>France</p>
        </div>

        <div class="footer">
            <h1>Company</h1>
            <p>About US</p>
            <p>Blog</p>
            <p>Discover</p>
            <p>Contact Us</p>
        </div>

        <div class="footer">
            <h1>Resources</h1>
            <p>Blog</p>
            <p>Review</p>
            <p>Help Center</p>
        </div>

        <div class="footer">
            <h1>More</h1>
            <p>Terms&Conditions</p>
            <p>Privacy Policy</p>
            <p>FAQ</p>
        </div>
    </div>
    <p>Copyright ⓒ 2023,Darshana Vaghela, darshana.vaghela@somaiya,edu</p>
</footer>    
</article>


<!-- PAGE SEVEN -->


</body>
</html>