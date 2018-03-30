<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company Profile</title>

    <!-- Bootstrap core CSS -->
    
    <link href="<?php echo base_url().'/assets/company_profile/vendor/bootstrap/css/custom.css'; ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url().'/assets/company_profile/vendor/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'/assets/company_profile/css/agency.min.css'; ?>" rel="stylesheet">

    <style>
        .sidenav {
            height: 100%;
            width: 100px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 100px;
            
        }

        .sidenav a {
            padding: 50px 8px 6px 16px;
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 100px; /* Same as the width of the sidenav */
            /*font-size: 28px;*/ /* Increased text to enable scrolling */
            /*padding: 0px 10px;*/
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

  </head>

  <body>
  
    <div class="sidenav">
      <a href="#vision">Vision</a>
      <a href="#mission">Mission</a>
      <a href="#about">About</a>
      <a href="#staff">Staff</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="main">

      <img class="header_image" src="<?php echo base_url().'/assets/company_profile/img/header-bg.jpg'; ?>" alt="">
      <!-- vision -->
      <section id="vision">
        <div class="container">
          <?php foreach ($datas as $d) {?>
            <?php if ($d['id'] == 1): ?>
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase"><?php echo $d['type'];?></h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
              </div>
              <div class="row text-center">
                <?php echo $d['description'];?>
              </div>
            <?php endif ?>
          <?php }  ?>
        </div>
      </section>

    <!-- Mission -->
      <section id="mission">
        <div class="container">
          <?php foreach ($datas as $d) {?>
            <?php if ($d['id'] == 2): ?>
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase"><?php echo $d['type'];?></h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
              </div>
              <div class="row text-center">
                <?php echo $d['description'];?>
              </div>
            <?php endif ?>
          <?php }  ?>
        </div>
      </section>

      <!-- About -->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">About</h2>
            </div>
          </div>
          <?php foreach ($about as $a) {?>
          <div class="row">
            <div class="col-lg-12">
              <ul class="timeline">
                <!-- odd id -->
                <?php if ($a['id']%2 > 0): ?>
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/'.$a['img']; ?>" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4><?php echo $a['date'] ?></h4>
                      <h4 class="subheading"><?php echo $a['title'] ?></h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted"><?php echo $a['description'] ?></p>
                    </div>
                  </div>
                </li>
                <?php endif ?>
                <!-- even id -->
                <?php if ($a['id']%2 == 0): ?>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php echo base_url().'/assets/company_profile/img/about/'.$a['img']; ?>" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4><?php echo $a['date'] ?></h4>
                      <h4 class="subheading"><?php echo $a['title'] ?></h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted"><?php echo $a['description'] ?></p>
                    </div>
                  </div>
                </li>
                <?php endif ?>
        <?php }  ?>
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

      <!-- staff -->
      <section class="bg-light" id="staff">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Our Amazing Staff</h2>
              <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
          </div>
          <div class="row">
            <?php foreach ($staffs as $s) {?>  
            <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="<?php echo base_url().'/assets/company_profile/img/staffs/'.$s['img']; ?>" alt="">
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
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'/assets/company_profile/img/partners/'.$p['img']; ?>" style="width: 150px; height: 50px;">
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

          <div class="row">
            <div class="div2">
              <?php foreach ($datas as $d) {?>
                <?php if ($d['id'] == 3): ?>
                  <h4 class="service-heading" ><?php echo $d['type'];?></h4>
                  <p class="text-muted"><?php echo $d['description'];?></p>
                <?php endif ?>
              <?php }  ?>
            </div>
            <div class="div2">
              <?php foreach ($datas as $d) {?>
                <?php if ($d['id'] == 4): ?>
                  <h4 class="service-heading" ><?php echo $d['type'];?></h4>
                  <p class="text-muted"><?php echo $d['description'];?></p>
                <?php endif ?>
              <?php }  ?>
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


    </div>


  </body>

</html>
