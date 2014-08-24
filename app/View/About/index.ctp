<body>
<div class="container">
      <div class="page-header">
        <h1>About Me!</h1>
      </div>
      <div class="row border-bottom">

    <div class ="col-md-6">

        <ul class ="social">
          <li><a href="https://www.facebook.com/guyjstitt" class = "facebook" target = "_blank"> facebook sprite </a></li>
          <li><a href="https://twitter.com/GuyjStitt" class = "twitter" target ="_blank">twitter sprite</a></li>
          <li><a href="https://plus.google.com/106859996232584782611/posts" class = "google" target ="_blank">google sprite</a></li>
          <li><a href="http://www.linkedin.com/pub/guy-stitt/43/472/146" class = "linkedin" target ="_blank">linkedin sprite</a></li>
          
        </ul>

        <p class="clear-left">I'm starting my Senior year at the <span class= "my-label">University of Louisville</span> majoring in Computer Information Systems, with a concentration in Web-Development, and a minor in Management. I'm currently a <span class= "my-label">Front-end Web Developer</span> intern at CBS Interactive. I work directly on Cnet.com. I was the Project Manager and Web Developer of the team that developed a <span class= "my-label">Case Management System</span> for Restorative Justice Louisville. I'm also employed as a Software/Web Developer at RJL. I also have experience as a Supervisor at UPS, where I managed the entire Rollerbed truck operation. My goal is to continue developing my skill set as a Web Developer to become an invaluable asset to a company.</p>
   
     
      
       
    </div>

   <div class = "col-md-6 progress-bars">
    <div>
    	<h3>PHP</h3>
	   	<div class="progress progress-success">
	    	<div class="bar" style="float: left; width: 0%; background-color:#AA1801; color:#AA1801; " data-percentage="90"></div>
	    </div>
	</div>
	<div>
		<h3>Sass CSS</h3>
	    <div class="progress progress-success">
	    <div class="bar" style="float: left; width: 0%; background-color:#AA1801; color:#AA1801;" data-percentage="80"></div>
		</div>
	</div>
	<div>
		<h3>JavaScript</h3>
	    <div class="progress progress-success">
	    <div class="bar" style="float: left; width: 0%; background-color:#AA1801; color:#AA1801;" data-percentage="75"></div>
	    </div>
	</div>
	<div>
		<h3>Symfony, CakePHP</h3>
	    <div class="progress progress-success">
	    <div class="bar" style="float: left; width: 0%; background-color:#AA1801; color:#AA1801;" data-percentage="80"></div>
	    </div>
	</div>
       
     </div>
     
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Site is currently under construction. I will be adding more over time!</p>
      </div>
    </div>
   </div>
</body>
   <script>
    setTimeout(function(){

        $('.progress .bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");

            //TODO: left and right text handling

            var current_perc = 0;

            var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }

                me.text((current_perc)+'%');

            }, 10);

        });

    },300);
</script>
