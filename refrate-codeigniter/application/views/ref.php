<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/refrate-codeigniter/application/views/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 10px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="/refrate-codeigniter/application/views/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/refrate-codeigniter/application/views/css/main.css">
        <link rel="stylesheet" href="/refrate-codeigniter/application/views/css/style.css">
        

        <script src="/refrate-codeigniter/application/views/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
   <div id="wrap" class="span6 offset4">
        <header > 
              <!-- logo -->
              <a href="/referate/ref.html"><h1 class="logo"></h1></a>
              <!-- navigation -->
              <nav class="navWrapper">
                  <ul class="nav">
                      <li><a href="#">find a ref</a><span><input name="search" type="text" id="searchText" value="Howard Webb">  <input type="button" value="find" id="searchGo" /></span></li>
<!--
                      <li><a href="#">upcoming games</a></li>
                      <li class="last"><a href="help.html">Help</a></li>
-->
                  </ul>
              </nav>
              <div class="clear"></div>
         </header>

        <div class="container span6">
        	<!-- Referee's Bio -->
        	<section>
	                <article>
		              <figure class="span3" id="photoFrame"><img src="/refrate-codeigniter/application/views/css/images/webb.jpg" width="150" height="150" id="photo" alt="Howard Webb" title="Howard Webb"></figure>
		              <?php foreach($records as $row):?>
		              <div class="span3 referee_details">
		                  <h2>FULL NAME</h2>
		                  <p><?php echo $row ->ref_name;?></p>
		                  <!-- birth info -->
		                  <h2>DATE OF BIRTH</h2> 
		                  <p><?php echo $row ->ref_DOB;?></p>
		          
		                  <h2>NATIONALITY</h2>
		                  <p><?php echo $row ->ref_nationality;?></p>
		      
		                  <h2>DAY JOB</h2> 
		                  <!--<p>Police Office</p>-->
						  <p><?php echo $row ->ref_job;?></p>
						  <?php endforeach;?>
						  
		      
		                  <h2>LEAGUE</h2> 
		                  <p>UEFA Champions League, FIFA World Cup 2010, English Premier League</p>
		              </div>
		             
		             </article>
	              <div class="clear"></div>
	              <div class="divider"></div>
        	</section>
           
           <!--Rating -->
           <section class="mainRating">
                <article>
                  <h1>VOTES</h1>
                  <section class="buttonWrapper">
                      <span class="speechBubble green"></span>
                  </section>
                  <section class="ratingTotal">
					  <?php //Rating
						  $likes = 256;
						  $dislikes = 152;
						  $percentage_l = $likes / ($likes+$dislikes) * 100;
						  $percentage_d = $dislikes / ($likes+$dislikes) * 100;
						  echo "<span class=\"ratingBarLikes\"><span class=\"detailTextWhite\">".round($percentage_l)."%</span></span>";
						  echo "<span class=\"ratingBarDislike\"><span class=\"detailTextWhite\">".round($percentage_d)."%</span></span>";
					  ?>
                  </section>
      
                  <span class="speechBubble red"></span>
                  <div class="clear"></div>

                </article>
            </section>
            <div class="divider"></div>

            
            <!--Commentary -->
            <section>
	          <article class="comments" >
	              <header>WORDS FROM THE PITCH</header>
		              <ul class="news">
		                    <li>
		                        <h2>RYAN GIGGS </h2>
		                        <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/><span>GOAL.COM</span></p>
		                    </li>
		                    <li>
		                        <h2>DIEGO MARADONNA</h2>
		                        <p> &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&quot;<span>GOAL.COM</span></p>
		                    </li>
		                    <li>
		                        <h2>ALEX FERGUSON</h2>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br/><span>GOAL.COM</span></p>
		                    </li>
		                   
		            </ul>
	            </article>
            </section>
            <div class="clearfix"></div>
            <button class="btn btn-large btn-block load-button" type="button">More</button>

            <footer class="span6">
              <span class="logo"></span>
              <p>
                  <a href="#" title ="Find a Referee">Find a Ref</a>
                  <a href="#" title ="Upcoming Game" >Upcoming Game</a>
                  <a href="help.html" title ="Help" >Help</a>
                  <a href="#" title ="FAQ" >FAQ</a>
                  <a href="#" title ="Contact US">Contact Us</a>
              </p>
          
              <p>&copy; Refrate - 2013 </p>
          </footer>
        </div> <!-- /container -->
   </div><!-- End of wrapper -->
        <!--===============================-->
        <!--Javascript-->
        <!--===============================-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/refrate-codeigniter/application/views/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="/refrate-codeigniter/application/views/js/vendor/bootstrap.min.js"></script>
        <script src="/refrate-codeigniter/application/views/js/main.js"></script>

    </body>
</html>
