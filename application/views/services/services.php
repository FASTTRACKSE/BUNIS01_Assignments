<div class="container">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <style>
        html {
        box-sizing: border-box;
      }
      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }
      .cf:before,
      .cf:after {
        display: table;
        content: ' ';
      }
      .cf:after {
        clear: both;
      }
      .cf {
        *zoom: 1;
      }
      body {
        margin: 0;
        color: #555555;
        background-color: #f5f7fa;
      }
      img {
        max-width: 100%;
        height: auto;
      }
      figure {
        margin: 0;
        padding: 10px;
      }
      figure a {
        display: block;
      }
      mark {
        padding: 0 5px;
        background-color: #dddddd;
      }
      ::backdrop {
        background-color: rgba(0, 0, 0, 0.5);
      }

      .site-content {
        text-align: left;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        margin-bottom: 90px;
      }

      .card {
        width: 100%;
        background-color: #fff;
        text-align: left;
        position: relative;
        height: 100%;
        box-shadow: 0px 2px 6px 0px rgba(204,209,217,.5);
        border: 1px solid #E6E9ED;
      }

      .services {
        margin-top: 30px;
        margin-bottom: 60px;
      }
      .services-item {
        width: 33%;
        padding-right: 2%;
        padding-left: 2%;
        margin-bottom: 30px;
        float: left;
      }

      .services-meta {
        color: #AAB2BD;
        font-weight: 300;
        font-size: 11px;
        position: absolute;
        left: 7%;
        bottom: 7%;
      }
      .services-duration:before {
        display: inline-block;
        content: "•";
        padding-right: 5px;
        padding-left: 5px;
      }
      .services-caption {
        position: absolute;
        right: 5%;
        bottom: 5%;
        font-size: 18px;
        color: #AAB2BD;
        
      }

      .title-arch {
          text-align: center;
          margin: 50px 0;
          font-size: 22px;
          letter-spacing: 2px;
          text-transform: uppercase;
      }


      .project {
          width: 100%;
          height: 500px;
 /*         background-image: url(http://img.apwcontent.com/sites/apw-migration/design/newhf/categoryimg/auto_body_parts_-and-_mirrors.png);
          background-size: auto;
          background-position: center;*/
          padding: 0 !important;
          float:left;
      }



      .project-hover {
          width: 100%;
          height: 100%;
          color: #fff;
          opacity: 0;
          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
          background-color: rgba(186, 232, 2, 0.7);
          padding: 40% 30px !important;
      }

      .project-hover hr {
          height: 30px;
          width: 0;
          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
          background-color: rgba(255, 255, 255, 1);
          border: 0;
      }

      .project-hover a {
          color: rgba(255, 255, 255, 1);
          padding: 2px 22px;
          line-height: 40px;
          border: 2px solid rgba(255, 255, 255, 1);
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
      }

      .project-hover a:hover {
          border-color: rgba(51, 51, 51, 1);
          color: rgba(51, 51, 51, 1);
          background-color: red;
      }

      .project:hover .project-hover {
          opacity: 1;
      }

      .project:hover .project-hover hr {
          width: 100%;
          height: 5px;
      }

  /*    .project-background1{
         background-image: url(https://cdn1.bikebandit-images.com/website/images17/menus/aftermarket/spark-plugs.png);
         background-size: 100%;
      }

      .project-background2{
         background-image: url(http://www.freepngimg.com/download/engine/2-2-engine-picture.png);
         background-size: cover;
      }

      .project-background3{
         background-image: url(http://kamen-cars.com/tow/en/img/tow.png);
         background-size: 100% 100%;
      }

      .project-background4{
         background-image: url(https://static1.squarespace.com/static/54e4b9bae4b002fddcd4f798/t/56606e58e4b03f54f280ab72/1449160456756/transparent+mechanic+pic.png?format=500w);
         background-size: cover;
      }
*/


      </style>

      <body>

      <div class="site-content cf">
      <div class="services cf" id="showcase">
      <div class="title-arch">Our services</div>
      
<?php foreach($getData as $data){ ?>
            <div class="services-item slide">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
                    <div class="project-hover">
                    <h2><?php echo $getData['name']; ?></h2>
                  
                    <hr />
                    <p><?php echo $getData['description']; ?></p>
<<<<<<< HEAD
                    <img src="<?php echo base_url()."/assets/img/"?><?php echo $getData['picture']; ?>">
                  <a href="<?php echo base_url() ?>index.php/HCauto_Controller/showBody">Show me more</a>
                </div>
              </div>
            </div>
<?php } ?>
=======
                  <a href="<?php echo base_url() ?>HCauto_Controller/showBody">Show me more</a>
                </div>
              </div>
            </div>
<<<<<<< HEAD

      <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2><?php echo $getData['name']; ?></h2>
            
              <hr />
              <p><?php echo $getData['description']; ?></p>
            <a href="<?php echo base_url()?>HCauto_Controller/showBody">Show me more</a>
          </div>
        </div>
      </div>
=======
>>>>>>> 3ba3bcc7cacdd963be344b0a6f5bdf518f216cb3
>>>>>>> 89091526f497931e634f5297e3b94367d5904f33
              <div class="services-item slide">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project project-background1 wow animated animated4 fadeInLeft">
                    <div class="project-hover">
                    <h2><?php echo $getData['name']; ?></h2>
                  
                    <hr />
                    <p><?php echo $getData['description']; ?></p>
                  <a href="<?php echo base_url() ?>HCauto_Controller/showElectrical">See Project</a>
                </div>
              </div>
            </div>

              <div class="services-item slide">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project project-background2 wow animated animated4 fadeInLeft">
                    <div class="project-hover">
                    <h2><?php echo $getData['name']; ?></h2>
                  
                    <hr />
                    <p><?php echo $getData['description']; ?></p>
                  <a href="<?php echo base_url() ?>HCauto_Controller/showEngine">See Project</a>
                </div>
              </div>
            </div>

            <div class="services-item slide">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project project-background3 wow animated animated4 fadeInLeft">
                    <div class="project-hover">
                    <h2><?php echo $getData['name']; ?></h2>
                  
                    <hr />
                    <p><?php echo $getData['description']; ?></p>
                  <a href="<?php echo base_url() ?>HCauto_Controller/showCarRescue">See Project</a>
                </div>
              </div>
            </div>

                <div class="services-item slide">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project project-background4 wow animated animated4 fadeInLeft">
                    <div class="project-hover">
                    <h2><?php echo $getData['name']; ?></h2>
                  
                    <hr />
                    <p><?php echo $getData['description']; ?></p>
                  <a href="<?php echo base_url() ?>HCauto_Controller/showD2D">See Project</a>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
      </body>

      <script>
          $("#showcase").flickity({
        wrapAround: true,
      });
      </script>
        
</div>
