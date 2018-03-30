<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>

<style>
.header {
  position: relative;
  width: 100vw; 
  height: 600px;    
}
.header .center {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 90%;
    transform:translate(-50%,-50%);
    z-index: 5; 
  padding: 1rem;
}
.header .left {
  position: absolute;
    top: 50%;
    left: 50%;
    width: 90%;
    transform:translate(-50%,-50%);
    z-index: 5; 
  padding: 1rem;
}
.header .right {
  position: absolute;
    top: 50%;
    left: 50%;
    width: 90%;
    transform:translate(-50%,-50%);
    z-index: 5; 
  padding: 1rem;
}
.header .scroll {
  position: absolute;
  top: 95%;
  left: 50%;
  transform:translate(-50%,-50%);
  color: #fff;
  font-size: 1.5rem;
}
/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
.header .center {
  width: 50%;
}
.header .left {
  position: absolute;
  top: 20%;
  left: 10%;
  width: 40%;
  height: 60%;
  transform:translate(0, 0);
  padding: 1rem;
}
.header .right {
  position: absolute;
  top: 20%;
  left: 50%;
  width: 40%;
  height: 60%;
  transform:translate(0, 0);
  padding: 1rem;
}
.delay {
  animation-delay: 0.6s;
}
}

#header3 {
background: #355c7d;  
  background: 
    linear-gradient( 
      to left,
      rgba(214, 109, 117, 0.8), /* #d66d75 */
      rgba(226, 149, 135, 0.7) /* #e29587 */
    ),
    /*url('https://cdn.stocksnap.io/img-thumbs/960w/IZJKSG1FLK.jpg') no-repeat left top;
  background-size: cover;  
    z-index: 0;*/ /* bottom layout */
}
#header3 .right {
    display: none;
}
#header3 .caption {
    z-index: 5; 
  text-align: center;
  color: #fff;
}
#header3 .caption .title {
    margin-bottom: 1.5rem;
} 
#header3 .caption .text {
    margin-bottom: 1.5rem;
} 
#header3 .caption .action {
    margin-bottom: 1rem;
    padding-left: 3rem;
    padding-right: 3rem;
}
/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
#header3 .caption {
  text-align: left;
}
#header3 .right {
  display: block;
}
}

/*tiles*/
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
  font-family: 'Roboto', Arial, sans-serif;
  margin: 0;
  color: #555555;
  background-color: #f5f7fa;
  text-align: center;
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
  padding-right: 5%; 
  padding-left: 5%;
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
    background-image: url(http://img.apwcontent.com/sites/apw-migration/design/newhf/categoryimg/auto_body_parts_-and-_mirrors.png);
    background-size: auto;
    background-position: center;
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

</style>

<header class="header" id="header3">
    <div class="left">
        <div class="caption animated bounceInLeft">
            <h2 class="title display-3">Body</h2>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
        </div>  
    </div>
    
    <div class="right animated bounceInLeft delay">
      <img src="http://www.3benefitsof.com/wp-content/uploads/2013/07/car-service.png" alt="" class="img-fluid">
    </div>
    <i class="scroll fa fa-angle-double-down"></i>
</header>

<body>
<div class="site-content cf">
<div class="services cf" id="showcase">
<div class="title-arch">Body<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p></div>

<?php foreach ($getData as $data) { ?>
      <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2><?php echo $data['name']; ?></h2>
              <hr />
              <p><?php echo $data['description']; ?></p>
              <p><?php echo $data['tag']; ?></p>
            <a href="<?php echo base_url() ?>index.php/HCauto_Controller/showDetail/<?php echo($data['ID']); ?>">Show me more</a>
          </div>
        </div>
      </div>
<?php 
    }
?>
      </div>
    </div>
  </div>
</div>
</body>
</body>
</html>