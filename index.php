<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A Basic HTML5 Template</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400;500;600,700&family=Raleway&display=swap" rel="stylesheet">
</head>

<body>


    <!-- header -->
    <header class="header">
        <img src="images/Bharat-Logo-color-V4.png" class="logo">
        <ul class="main-nav">
            <li><a href="javascript:void(0)" onclick="myFunction('about')" class="">About</a></li>
            <li><a href="javascript:void(0)" onclick="myFunction('portfolio')">Portfolio</a></li>
            <li><a href="javascript:void(0)" onclick="myFunction('contact')">Contact</a></li>
        </ul>
    </header>


    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col left display-flex">
                    <div class="wrapper">
                        <h5>
                            Hello, I am
                        </h5>
                        <h1>
                            bharat<br />
                        </h1>
                        <p>
                            A young UI/UX designer with crazy for graphics & web design.
                        </p>

                        <div class="button-wrapper">
                            <a href="#" class="button"><span class="text">Hire Me</span></a>
                            <a href="#" class="button transparent"><span class="text">Portfolio</span></a>
                        </div>
                    </div>
                </div>
                <div class="col right">
                    <div class="overlay">
                        <img src="images/hero-img.png" width="100%" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col left display-flex">
                    <div class="wrapper">
                        <h3 class="section-title">
                            About Me
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="button-wrapper">
                            <a href="#" class="button transparent"><span class="text">Download CV</span></a>
                        </div>
                    </div>
                </div>
                <div class="col right">
                    <img src="images/coding-man.jpg" width="100%">
                </div>
            </div>
        </div>
        </div>
    </section>



    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <h3 class="section-title small">
                            Portfolio
                        </h3>
                        <div class="dynamic">
                            <div class="filter">
                                <div class="button-wrapper" id="all-filters">
                                    <button class="btn button filter active" onclick="filterSelection('all')">All</button>
                                    <button class="btn button filter" onclick="filterSelection('logos')">Logo</button>
                                    <button class="btn button filter" onclick="filterSelection('website')">Website</button>
                                </div>
                            </div>
                            <div class="items">
                                <div class="row multi-rows">
                                    <?php
                                    require('connection.php');
                                    $result = mysqli_query($con, "SELECT * FROM portfolio");
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<div class="column col col-4 ' . $row['category'] . '">';
                                            echo '<div class="content">';
                                            echo '<img src ="images/' . $row['image'] . '">';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-title">
                        Services
                    </h3>
                    <p class="title-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et t enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <div class="row multi-rows">
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col col-4 block">
                            <div class="content">
                                <img src="images/web.png" />
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="reviews">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-title">
                        Our Happy Clients
                    </h3>
                    <p class="title-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et t enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <q>Sed ut perspiciatis unde omnis iste natus error sit voluptatem , sed do eiusmod tempor incididunt ut labore et t enim ad minim veniam, quis nostrud exercita quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt is the most explicabo.</q>
                            <p class="author">- John Keats</p>
                        </div>
                        <div class="mySlides">
                            <q>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</q>
                            <p class="author">- Ernest Hemingway</p>
                        </div>
                        <div class="mySlides">
                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et t enim ad minim veniam, quis nostrud exercitation.</q>
                            <p class="author">- Thomas A. Edison</p>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-title">
                        Get in touch
                    </h3>
                    <p class="title-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et t enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <form class="form">
                        <div class="name">
                            <input id="name" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="email">
                            <input id="email" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="phone">
                            <input id="phone" type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="content">
                            <textarea name="content" id="" cols="10" rows="5" placeholder="Message"></textarea>
                            <button class="button" type="submit">Hire ME</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col footer-area">
                    <div class="logo">
                        <img src="images/Bharat-Logo-color-V4.png" class="logo">
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" onclick="myFunction('about')">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="myFunction('portfolio')">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="myFunction('contact')">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <img src="images/003-facebook.png" /> &nbsp; <img src="images/001-twitter.png" /> &nbsp; <img src="images/002-instagram.png" />
                    </div>
                </div>
            </div>
            <div class="row footer">
                <p>
                    Copyright © 2022 Bharat | All rights reserved
                </p>
            </div>
        </div>
    </footer>



    <!-- your content here... -->
    <script src="js/scripts.js"></script>
</body>

</html>