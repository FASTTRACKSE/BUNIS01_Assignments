<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo(base_url()); ?>index.php/Homepage/"><img class="logoHeader" src="<?php echo(base_url()); ?>assets/newspart/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">

          <div class="dropdown">
            <a class="nav-link" href="<?php echo(base_url()); ?>index.php/CompanyProfile">Company Profile</a>
            
            <!-- <div class="dropdown-content">
                <a href="<?php echo(base_url()); ?>index.php/CompanyProfile#vision">Vision</a>
                <a href="<?php echo(base_url()); ?>index.php/CompanyProfile#mission">Mission</a>
                <a href="<?php echo(base_url()); ?>index.php/CompanyProfile#team">Organization Chart</a>
                <a href="<?php echo(base_url()); ?>index.php/CompanyProfile#contact">Contacts</a>
            </div> -->
          </div>

        </li>

        <li class="nav-item">
          
          <div class="dropdown">
            <a class="nav-link" href="<?php echo(base_url()); ?>index.php/NewsController/viewNews">News & Events</a>
            
            <div class="dropdown-content">
                <a href="<?php echo(base_url()); ?>index.php/NewsController/viewPromoProg">Promotion Program</a>
                <a href="<?php echo(base_url()); ?>index.php/NewsController/viewTechCons">Technical Consulting</a>
                <a href="<?php echo(base_url()); ?>index.php/NewsController/viewAutoNews">Automotive News</a>
            </div>
          </div>

        </li>

        <li class="nav-item">
          
          <div class="dropdown">
            <a class="nav-link" href="<?php echo(base_url()); ?>index.php/Product_Controller/index">Products</a>
            
            <div class="dropdown-content">
                <a href="<?php echo(base_url()); ?>index.php/Product_Controller/index">Insurance</a>
                <a href="<?php echo(base_url()); ?>index.php/Product_Controller/carparts">Car Parts</a>
                <a href="<?php echo(base_url()); ?>index.php/Product_Controller/oilandfluid">Oils and Fluids</a>
                <a href="<?php echo(base_url()); ?>index.php/Product_Controller/accessory">Accessory</a>
                <a href="<?php echo(base_url()); ?>index.php/Product_Controller/usedcars">Used Cars (Buy and Sell)</a>
            </div>
          </div>

        </li>
        <li class="nav-item">
         
          <div class="dropdown">
            <a class="nav-link" href="<?php echo(base_url()); ?>index.php/HCauto_Controller/view">Services</a>
            
            <div class="dropdown-content">
                <a href="<?php echo(base_url()); ?>index.php/HCauto_Controller/showEngine">Engine</a>
                <a href="<?php echo(base_url()); ?>index.php/HCauto_Controller/showElectrical">Electrical</a>
                <a href="<?php echo(base_url()); ?>index.php/HCauto_Controller/showBody">Body</a>
                <a href="<?php echo(base_url()); ?>index.php/HCauto_Controller/showCarRescue">Car Rescue</a>
                <a href="<?php echo(base_url()); ?>index.php/HCauto_Controller/showD2D">Door to Door Delivery</a>
            </div>
          </div>

        </li>
      </ul>
    </div>
  </div>
</nav>