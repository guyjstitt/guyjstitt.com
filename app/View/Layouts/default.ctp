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
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="My Website" />
  <meta property="og:type" content="personal" />
  <meta property="og:url" content="http://guyjstitt.com" />
  <meta property="og:image" content="http://guyjstitt.com/img/guyjstitt.PNG" />
  <meta property="og:description" content="Welcome to my personal website" />
	<?php echo $this->Html->charset(); ?>
	<title>My Website</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('sticky-footer-navbar');
		echo $this->Html->css('bootstrap/bootstrap.min');
		echo $this->Html->css('home');
    echo $this->Html->css('socialIcons');
		echo $this->Html->script('jquery-1.11.1.min');
		echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('share');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top header-fixed" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="guyjstitt.com">My Website</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="nav-button-left"><a href="http://www.guyjstitt.com">Home</a></li>
            <li><a href="/About/index/">About</a></li>
            <li><a href="/Portfolio/index">Portfolio</a></li>
            <li><a href="/Resume/index">Resume</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<?php echo $this->fetch('content'); ?>

	<div class='footer-pad'></div>
	<div id="footer">
      <div class="container">
        <p class="text-muted">Follow me on <a href="https://www.facebook.com/guyjstitt" target = "_blank"> Facebook</a>, <a href="https://twitter.com/GuyjStitt" target ="_blank">Twitter</a>, <a href="https://plus.google.com/106859996232584782611/posts" target ="_blank">Google+</a> and <a href="http://www.linkedin.com/pub/guy-stitt/43/472/146"target ="_blank">Linkedin!</a></p>
      </div>
    </div>
</body>
</html>
