<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<html lang="en">

<head>
</head>
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
    background-image: url(https://cms-assets.tutsplus.com/legacy-courses/CRS-96680.png);
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

.project-background{
   background-image: url(https://cms-assets.tutsplus.com/legacy-courses/CRS-96680.png);
}

</style>

<body>

<div class="site-content cf">
<div class="services cf" id="showcase">
<div class="title-arch">Our Project<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p></div>

      <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2>Body</h2>
            
              <hr />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
          </div>
        </div>
      </div>

        <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2>Electrical</h2>
            
              <hr />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
          </div>
        </div>
      </div>

        <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2>Engine</h2>
            
              <hr />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
          </div>
        </div>
      </div>

      <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2>Car Rescue</h2>
            
              <hr />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
          </div>
        </div>
      </div>

          <div class="services-item slide">
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 project wow animated animated4 fadeInLeft">
              <div class="project-hover">
              <h2>Door-to-Door Delivery</h2>
            
              <hr />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>
</body>

</html>
<script>
    $("#showcase").flickity({
	wrapAround: true,
});
</script>