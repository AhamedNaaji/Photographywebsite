<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Pricing</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 1rem 0;
    }

    header nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      margin: 0;
      padding: 0;
    }

    header nav ul li {
      margin: 0 1rem;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    header nav ul li a:hover {
      text-decoration: underline;
    }

    main {
      padding: 2rem;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1rem 0;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    /* Pricing Styles */
    .pricing {
      text-align: center;
      padding: 2rem 0;
    }

    .pricing h1 {
      margin-bottom: 2rem;
      font-size: 2.5rem;
      color: #333;
    }

    .pricing-table {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .pricing-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      width: 300px;
      text-align: left;
      transition: transform 0.3s ease-in-out;
    }

    .pricing-card:hover {
      transform: scale(1.05);
    }

    .pricing-card h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #333;
    }

    .pricing-card .price {
      font-size: 2rem;
      color: #e67e22;
      margin-bottom: 1rem;
    }

    .pricing-card ul {
      list-style: none;
      padding: 0;
      margin: 0 0 1.5rem;
    }

    .pricing-card ul li {
      margin: 0.5rem 0;
    }

    .pricing-card .btn {
      display: block;
      background-color: #e67e22;
      color: #fff;
      text-align: center;
      padding: 0.75rem;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .pricing-card .btn:hover {
      background-color: #d35400;
    }
  </style>
  <script>
    // JavaScript to hide the page loader once the page has fully loaded
    window.addEventListener('load', function() {
      document.getElementById('page-loader').style.display = 'none';
    });
  </script>
</head>

<body>
  <!-- Page Loader-->
  <div id="page-loader">
    <div class="page-loader-body">
      <div class="cssload-spinner">
        <div class="cssload-cube cssload-cube0"></div>
        <div class="cssload-cube cssload-cube1"></div>
        <div class="cssload-cube cssload-cube2"></div>
        <div class="cssload-cube cssload-cube3"></div>
        <div class="cssload-cube cssload-cube4"></div>
        <div class="cssload-cube cssload-cube5"></div>
        <div class="cssload-cube cssload-cube6"></div>
        <div class="cssload-cube cssload-cube7"></div>
        <div class="cssload-cube cssload-cube8"></div>
        <div class="cssload-cube cssload-cube9"></div>
        <div class="cssload-cube cssload-cube10"></div>
        <div class="cssload-cube cssload-cube11"></div>
        <div class="cssload-cube cssload-cube12"></div>
        <div class="cssload-cube cssload-cube13"></div>
        <div class="cssload-cube cssload-cube14"></div>
        <div class="cssload-cube cssload-cube15"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <!-- Top Banner-->
    <!-- Page header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.html">
                    <div class="brand__name"><img class="brand__logo-dark" src="images/Lismore1.png" alt="" width="237" height="35" /><img class="brand__logo-light" src="images/Lismore1.png" alt="" width="237" height="35" />
                    </div>
                  </a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-element">

                </div>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="index.php">Home<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="Gallery.php">Gallery<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="Pricing.php">Pricing<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="about-me.php">About Me<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="contact-us.php">Contact Us<span></span><span></span><span></span><span></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
      <div class="shell">
        <h1 class="breadcrumbs-custom__title">Pricing</h1>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.php">Home</a></li>
          <li class="active">Pricing</li>
        </ul>
      </div>
    </section>
    <!-- Page Content-->
    <main>
      <section class="pricing">
        <h1>Find the right plan</h1>
        <section class="pricing">
          <h1>Pricing Plans</h1>
          <div class="pricing-table">
            <div class="pricing-card">
              <h2>Basic</h2>
              <p class="price">$99</p>
              <ul>
                <li>1 Hour Session</li>
                <li>10 Edited Photos</li>
                <li>Online Gallery</li>
              </ul>
              <a href="#" class="btn">Select Plan</a>
            </div>
            <div class="pricing-card">
              <h2>Standard</h2>
              <p class="price">$199</p>
              <ul>
                <li>2 Hour Session</li>
                <li>20 Edited Photos</li>
                <li>Online Gallery</li>
                <li>1 Print</li>
              </ul>
              <a href="#" class="btn">Select Plan</a>
            </div>
            <div class="pricing-card">
              <h2>Premium</h2>
              <p class="price">$299</p>
              <ul>
                <li>3 Hour Session</li>
                <li>30 Edited Photos</li>
                <li>Online Gallery</li>
                <li>5 Prints</li>
                <li>1 Photo Book</li>
              </ul>
              <a href="#" class="btn">Select Plan</a>
            </div>
          </div>
        </section>
      </section>
    </main>
  </div>
</body>

</html>