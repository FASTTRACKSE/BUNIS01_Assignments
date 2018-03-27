<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'/assets/company_profile/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/assets/company_profile/vendor/bootstrap/css/custom.css'; ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url().'/assets/company_profile/vendor/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'/assets/company_profile/css/agency.min.css'; ?>" rel="stylesheet">

  </head>

  <body id="page-top">
  	<div id="divblock"></div>
  	<img class="header_image" src="<?php echo base_url().'/assets/company_profile/img/header-bg.jpg'; ?>" alt="">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url().'/assets/company_profile/img/logo.png'; ?>" style="height: 50%; width: 50%;" >HCAuto</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#vision">Vision</a>
            </li><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#mission">Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <!-- <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#vision">Tell Me More</a>
        </div>
      </div>
    </header> -->

    <!-- vision -->
    <section id="vision">
      <div class="container">
        <?php foreach ($vision as $v) {?>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php echo $v['type'];?></h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row text-center">
          <?php echo $v['description'];?>
        </div>
        <?php }  ?>
      </div>
    </section>

	<!-- Mission -->
    <section id="mission">
      <div class="container">
        <?php foreach ($mission as $m) {?>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php echo $m['type'];?></h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
       <div class="row text-center">
          <?php echo $m['description'];?>
        </div>
        <?php }  ?>
      </div>
    </section>

    <!-- About , ??? -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">/*Want to include this section? or delete it?*/</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/1.jpg'; ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/2.jpg'; ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/3.jpg'; ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/4.jpg'; ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <?php foreach ($staffs as $s) {?>  
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url().'/assets/company_profile/img/team/'.$s['img']; ?>" alt="">
              <h4><?php echo $s['name'] ?></h4>
              <p class="text-muted"><?php echo $s['job'] ?></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="<?php echo "http://".$s['twitter']; ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php echo "http://".$s['facebook']; ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php echo "http://".$s['linkedin']; ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <?php } ?>
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
          </div>
      </div>
    </section>

    
    <!-- Partners -->
    <section class="py-5">
      <div class="container">
        <div class="row">
    	  <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Partners</h2>
        </div>
        <?php foreach ($partners as $p) {?>  
          <div class="col-md-2 col-sm-4">
            <a href= "<?php echo "http://".$p['link']; ?>"  >
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'/assets/company_profile/img/partners/'.$p['img']; ?>" alt="">
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
    


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="div1">
        	<div class="div2">
            <?php foreach ($customercare as $cc) {?>
	        	<h4 class="service-heading"><?php echo $cc['type'];?></h4>
	            <p class="text-muted"><?php echo $cc['description'];?></p>
            <?php } ?>
        	</div>
        	<div class="div2">
        		<?php foreach ($technicalsupport as $ts) {?>
            <h4 class="service-heading"><?php echo $ts['type'];?></h4>
              <p class="text-muted"><?php echo $ts['description'];?></p>
            <?php } ?>
        	</div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; HCAuto.vn 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-wechat"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'/assets/company_profile/vendor/jquery/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/company_profile/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().'/assets/company_profile/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url().'/assets/company_profile/js/jqBootstrapValidation.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/company_profile/js/contact_me.js'; ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url().'/assets/company_profile/js/agency.min.js'; ?>"></script>

  </body>

</html>
