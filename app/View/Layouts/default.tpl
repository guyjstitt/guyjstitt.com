<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html class="no-js">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="My Website" />
  <meta property="og:type" content="personal" />
  <meta property="og:url" content="http://guyjstitt.com" />
  <meta property="og:image" content="http://guyjstitt.com/img/guyjstitt.PNG" />
  <meta property="og:description" content="Welcome to my personal website" />

  <title>My Website</title>

  {{ html.css('bootstrap.min') }}
  {{ html.css('scrolling-nav') }}
  {{ html.css('socialIcons') }}
  {{ html.css('home') }}
  {{ html.css('intro') }}
  {{ html.css('slider') }}
  {{ html.css('about') }}
  
        <link rel="stylesheet" href="css/font-awesome.css">

  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200,400italic,600,600italic' rel='stylesheet' type='text/css'>
 


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">My Website</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top" ajaxed=""></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about" ajaxed"">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services" ajaxed="">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" ajaxed="">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            {% include 'Pages/home.tpl' %}
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            {% include 'About/index.tpl' %}
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section portfolio" >
        <div class="container">
            
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
        </div>
    </section>

  {{ html.script('jquery-1.11.1.min') }}
  {{ html.script('jquery.easing.min') }}
  {{ html.script('libs/bootstrap.min') }}
  {{ html.script('scrolling-nav') }}
  {{ html.script('share') }}
  {{ html.script('slider') }}
  {{ html.script('waypoints.min') }}
</body>
</html>
