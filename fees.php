<?php 
session_start();
include('include/header.php');
?>
<title>Stripe Payment Gateway Integration in PHP</title>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-creditcardvalidator/1.0.0/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="script/payment.js"></script>
<?php include('include/container.php');?>
    <!-- Fonts URL -->
    <link
      href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/hover-min.css" />
    <link rel="stylesheet" href="assets/css/muzex-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link href="assets/css/style-nav.css" rel="stylesheet" />
    <link
      href="http://www.jqueryscript.net/css/jquerysctipttop.css"
      rel="stylesheet"
      type="text/css"
    />
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html {
      height: 100%;
    }

    /*Card containing 2 cards*/
    .card0 {
      margin: 40px 12px 15px 12px;
      border: 0;
      padding: 30px 0;
    }

    /*Left Side card*/
    .card1 {
      margin: 0;
      padding: 15px;
      padding-top: 25px;
      padding-bottom: 0px;
      background: #263238;
      height: 100%;
    }

    .bill-head {
      color: #ffffff;
      font-weight: bold;
      margin-bottom: 0px;
      margin-top: 0px;
      font-size: 30px;
    }

    .line {
      border-right: 1px grey solid;
    }

    .bill-date {
      color: #bdbdbd;
    }

    .red-bg {
      margin-top: 25px;
      margin-left: 0px;
      margin-right: 0px;
      background-color: #f44336;
      padding-left: 20px !important;
      padding: 25px 10px 25px 15px;
    }

    #total {
      margin-top: 0px;
      padding-left: 7px;
    }

    #total-label {
      margin-bottom: 0px;
      color: #ffffff;
      padding-left: 7px;
    }

    #heading1 {
      color: #ffffff;
      font-size: 20px;
      padding-left: 10px;
    }

    .currency {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: space-around;
    }

    .currency-symbol {
    display: flex;
    align-items: center;
    }
    .currency-symbol span {
    background: blue;
    padding: 0px 15px;
    -webkit-box-shadow: 0px 0px 29px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 29px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 29px 0px rgba(0,0,0,0.75);
}
    #heading2 {
      font-size: 27px;
      color: #d50000;
    }

    /*For font-awesome icons in Placeholder*/
    .placeicon {
      font-family: fontawesome !important;
    }

    /*Right Side Card*/
    .card2 {
      padding: 25px;
      margin: 0;
      height: 100%;
    }

    .form-card .pay {
      font-weight: bold;
    }

    .form-card input,
    .form-card textarea {
      padding: 10px 8px 10px 8px;
      border: none;
      border: 1px solid lightgrey;
      border-radius: 0px;
      margin-bottom: 25px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2c3e50;
      font-size: 14px;
      letter-spacing: 1px;
    }

    .form-card input:focus,
    .form-card textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: none;
      font-weight: bold;
      border: 1px solid gray;
      outline-width: 0;
    }

    .btn-info {
      color: #ffffff !important;
    }

    /*Imaged Radio Buttons*/
    .radio-group {
      position: relative;
      margin-bottom: 25px;
    }

    .radio {
      display: inline-block;
      width: 204;
      height: 64;
      border-radius: 0;
      background: lightblue;
      box-sizing: border-box;
      border: 2px solid lightgrey;
      cursor: pointer;
      margin: 8px 25px 8px 0px;
    }

    .radio:hover {
      box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
    }

    .radio.selected {
      box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.4);
    }

    /*Fit image in bootstrap div*/
    .fit-image {
      width: 100%;
      object-fit: cover;
    }
  </style>
  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
      <div class="topbar-one">
        <div class="container">
          <div class="topbar-one__left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <!-- /.topbar-one__left -->
          <div class="topbar-one__right">
             
              
              <!-- /.thm-btn -->
          </div>
          <!-- /.topbar-one__right -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.topbar-one -->

      <article id="container">
        <header id="main-nav">
          <h1 class="logo"><a href="index.html">ART EXPERTS INDIA</a></h1>
          <div id="bun">
            <div class="mmm-burger"></div>
          </div>
        </header>
      </article>
      <aside id="sidebar">
        <nav>
          <div id="menu" class="menu">
            <div class="menu-header"><a href="index.html">ART EXPERTS INDIA</a></div>
            <ul>
              <!-- <li class="active">
            <a href="#"><i class="fa fa-home"></i>AUTHENTICATION</a>
          </li>
          <li>
            <a href="#">AUTHENTICATION</a>
            <ul class="submenu">
              <li><a href="#"> Graphics</a></li>
              <li><a href="#"> Photoshop</a></li>
            </ul>
          </li> -->
              <li>
                <a href="authentication.html">AUTHENTICATION</a>
                <ul class="submenu">
                  <li><a href="examination.html">Examination</a></li>
                  <li>  <a href="difficult-cases.html">Difficult cases</a></li>
                  <li><a href="review-of-rejection.html">Review oF Rejection</a></li>
                  <li>
                    <a href="research.html">Research</a>
                    <ul class="submenu">
                      <li>
                        <a href="documentary-research.html">Documentary</a>
                      </li>
                      <li><a href="provenance.html">Provenance</a></li>
                      <li>
                        <a href="biographical-research.html">Biographical</a>
                      </li>
                      <li><a href="stolen.html">Stolen</a></li>
                    </ul>
                  </li>
                  <li><a href="attribution.html">Attribution</a></li>
                  <li><a href="analysis.html">Analysis </a></li>
                  <li><a href="certification.html">Certification (COA) </a></li>
                </ul>
              </li>
              <li>
                <a href="appraisal.html">APPRAISAL</a>
              </li>

              <li>
                <a href="#">SCIENTIFIC AND FORENSIC</a>
                <ul class="submenu">
                  <li><a href="scientific-tests.html">Scientific</a></li>
                  <li>
                    <a href="dating.html">Dating</a>
                    <ul class="submenu">
                      <li><a href="carbon-dating.html">Carbon dating</a></li>
                      <li>
                        <a href="dendrochronology.html">Dendrochronology</a>
                      </li>
                      <li>
                        <a href="Thermoluminescence.html">Thermoluminescence</a>
                      </li>
                      <li>
                        <a href="Pigments-analyses.html">Pigments analyses</a>
                      </li>
                      <li><a href="metals-dating.html">Metals dating</a></li>
                      <li><a href="paper-analysis.html">Paper analysis</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="forensic.html">Forensic</a>
                    <ul class="submenu">
                      <li>
                        <a href="signature.html">Signature examination</a>
                      </li>
                      <li>
                        <a href="handwriting-examination.html"
                          >Handwriting examination</a
                        >
                      </li>
                      <li>
                        <a href="language-forensics.html">Language forensics</a>
                      </li>
                      <li><a href="stamps.html">Stamps and labels</a></li>
                      <li><a href="seals.html">Seals</a></li>
                      <li><a href="tacks.html">Tacks</a></li>
                      <li>
                        <a href="stretchers-assembly.html"
                          >Stretchers assembly</a
                        >
                      </li>
                      <li><a href="wood-species.html">Wood species </a></li>
                      <li><a href="panels-boards.html">Panels Boards</a></li>
                      <li><a href="metal-sheets.html">Metal sheets</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="special-photography.html">Special photography</a>
                  </li>
                  <li><a href="x-ray.html">X-rays </a></li>
                </ul>
              </li>
              <li>
               <a href="selling.html">SELLING</a>
                <ul class="submenu">
                  <li><a href="advice.html">Advice</a></li>
                  <li><a href="help.html">Help</a></li>
                  <li><a href="brokerage.html">Brokerage</a></li>
                  <li><a href="private-treaty.html">Private Treaty</a></li>
                  <li><a href="auctioning.html">Auctioning</a></li>
                  <li><a href="online.html">Online</a></li>
                </ul>
              </li>
  <li>
                <a href="#">ARTISTS</a>
                <ul class="submenu">
                  <li>
                    <a href="#">A</a>
                    <ul class="submenu">
                      <li><a href="artist/akbar-padamsee.html">Akbar Padamsee</a></li>
                      <li><a href="artist/amrita-sher-gil.html">Amrita Sher-Gil</a></li>
                      <li><a href="artist/abanindranath-tagore.html">Abanindranath Tagore</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">B</a>
                    <ul class="submenu">
                      <li><a href="artist/b-c-sanyal.html">B C Sanyal</a></li>
                      <li><a href="artist/b-prabha.html">B Prabha</a></li>
                      <li><a href="artist/badri-narayan.html">Badri Narayan</a></li>
                      <li><a href="artist/bhupen-khakhar.html">Bhupen Khakhar</a></li>
                      <li><a href="artist/benode-behari-mukherjee.html">Benode Behari Mukherjee</a></li>
                      <li><a href="artist/bikash-bhattacharjee.html">Bikash Bhattacharjee</a></li>
                    </ul>
                  </li>                  
                  <li>
                    <a href="#">F</a>
                    <ul class="submenu">
                      <li><a href="artist/f-n-souza.html">F N Souza</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">G</a>
                    <ul class="submenu">
                      <li><a href="artist/gaganendranath-tagore.html">Gaganendranath Tagore</a></li>
                      <li><a href="artist/ganesh-pyne.html">Ganesh Pyne</a></li>                      
                    </ul>
                  </li>
                  <li>
                    <a href="#">H</a>
                    <ul class="submenu">
                      <li><a href="artist/h-a-gade.html">H A Gade</a></li>
                    </ul>
                  </li>                  
                  <li>
                    <a href="#">J</a>
                    <ul class="submenu">
                      <li><a href="artist/jamini-roy.html">Jamini Roy</a></li>
                      <li><a href="artist/jehangir-sabavala.html">Jehangir Sabavala</a></li>
                      <li><a href="artist/jagdish-swaminathan.html">Jagdish Swaminathan</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">K</a>
                    <ul class="submenu">
                      <li><a href="artist/k-h-ara.html">K H Ara</a></li>
                      <li><a href="artist/k-g-subramanyan.html">K G Subramanyan</a></li>
                      <li><a href="artist/kalipada-ghoshal.html">Kalipada Ghoshal</a></li>
                    </ul>
                  </li>                  
                  <li>
                    <a href="#">M</a>
                    <ul class="submenu">
                      <li><a href="artist/m-f-husain.html">M F Husain</a></li>
                      <li><a href="artist/manjit-bawa.html">Manjit Bawa</a></li>
                      <li><a href="artist/mukul-dey.html">Mukul Dey</a></li>
                      <li><a href="artist/manishi-dey.html">Manishi Dey</a></li>
                      <li><a href="artist/nandalal-bose.html">Nandalal Bose</a></li>
                      <li><a href="artist/maniam.html">Maniam</a></li>
                      <li><a href="artist/mohan-samant.html">Mohan Samant</a></li>

                    </ul>
                  </li>
                  <li>
                    <a href="#">N</a>
                    <ul class="submenu">
                       <li><a href="artist/n-s-bendre.html">N S Bendre</a></li>
                    </ul>
                  </li>                  
                  <li>
                    <a href="">R</a>
                    <ul class="submenu">
                      <li><a href="artist/raja-ravi-varma.html">Raja Ravi Varma</a></li>
                      <li><a href="artist/ram-kumar.html">Ram Kumar</a></li>
                      <li><a href="artist/ram-kinker-baij.html">Ram Kinker Baij</a></li>
                      <li><a href="artist/rabin-mondal.html">Rabin Mondal</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">S</a>
                    <ul class="submenu">
                      <li><a href="artist/s-h-Raza.html">S H Raza</a></li>
                      <li><a href="artist/satish-gujral.html">Satish Gujral</a></li>
                      <li><a href="artist/s-g-thakur-singh.html">S G Thakur Singh</a></li>
                      <li><a href="artist/s-l-haldankar.html">S L Haldankar</a></li>
                      <li><a href="artist/v-s-gaitonde.html">V S Gaitonde</a></li>
                      <li><a href="artist/silpi.html">Silpi</a></li>
                      <li><a href="artist/sunil-das.html">Sunil Das</a></li>
                    </ul>
                  </li>                  
                </ul>
              </li>
              <li>
                <a href="#">ABOUT US</a>
                <ul class="submenu">
                  <li><a href="index.html#our-story">Our story</a></li>
                  <li><a href="#">Locations</a></li>
                  
                </ul>
              </li>

              <li>
                <a href="#">CONTACT US</a>
                <ul class="submenu">
                  <li><a href="contact-location.html">Location</a></li>
                  <li><a href="index.html#contact">Upload your photos and documents</a></li>
                </ul>
              </li>
              <li>
                <a href="fees.php">FEES</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="contact-location.html">Travel and examinations</a>
              </li>
              <li>
                <a href="our-clients.html">Our Clients</a>
              </li>

              <li>
                <a href="reviews-testimonials.html">REVIEWS AND TESTIMONIALS </a>
              </li>

            </ul>
          </div>
        </nav>
      </aside>

      <!--<section
        class="page-header"
        style="
          background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);
        "
      >
        <div class="container">
          <h2>Fees</h2>
        </div>-->
      <!-- /.container -->
      <!--</section>-->
      <!-- /.page-header -->

      <section class="event-details">
        <div class="container">
          <div class="event-details__top">
            <h3 style="text-align: center">Fees</h3>
          </div>
          <!-- /.event-details__top -->
          <div class="row high-gutter">
            <div class="col-lg-10 mx-auto">
              <div class="event-details__main">
                <div class="event-details__image">
                  <img
                    src="assets/images/Art Expert Pictures/Fees.jpg"
                    alt=""
                  />
                </div>
                <!-- /.event-details__image -->
              </div>

              <!-- /.event-details__main -->
            </div>
            <!--.col-lg-10-->
            <div class="col-lg-10 mx-auto">
              <div class="event-details__content" style="text-align: justify">
                <p>
                  After we examine your artwork, be it in person or by viewing
                  the photos you supplied, and after we review all the
                  information you shared with us, we will suggest how to proceed
                  for its authentication and give you a firm quote for the
                  services that will be provided.
                </p>
                <p>
                  If this quote is agreeable to you, we kindly request that the
                  payment be sent prior to the beginning of the work.
                </p>
                <p>
                  If you would like to receive a proforma invoice or a service
                  agreement, please let us know and we will email it to you.
                </p>
                <p>
                  For payment with a credit card, please use the secure form
                  below.
                </p>
              </div>
              <!-- /.event-details__content -->
            </div>
            <!-- /.col-lg-6 -->

            <!--<div
              class="col-lg-12"
              style="text-align: justify; margin-top: 10px"
            >
             
            </div>-->
            <!--.col-lg-12-->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.event-details -->
      <div class="container mb-5 ">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-11  ">
            <div class="card card0 rounded-0">
              <div class="row">
                <div class="col-md-8 mx-auto col-sm-12 p-0 box">
                  <div class="card rounded-0 border-0 card2" id="paypage">
                    <div class="form-card">
                    <?php 
		if(isset($_SESSION["message"]) && $_SESSION["message"] && $_SESSION["message"] == 'failed') {
		?>			
			<div class="alert alert-danger">
			  <?php 
			  echo "Error : Payment failed!"; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php 
		} elseif(isset($_SESSION["message"]) && $_SESSION["message"]) {
		?>
			<div class="alert alert-success">
			  <?php 
			  echo $_SESSION["message"]; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php } ?>
                      <h2 id="heading2" class="text-danger text-center">
                        Payment Method
                      </h2>
                      <div class="radio-group text-center">
                        <img
                          src="https://www.goyaexperts.com/images/cc-logos.png"
                          width="464px"
                          height="44px"
                        />

                        <br />
                      </div>

                      <form action="process.php" method="POST" id="paymentForm">	
					<div class="row">
						<div class="col-md-12" style="border-right:1px solid #ddd;">
							<h4 align="center">Customer Details</h4>
							<div class="form-group">
								<label><b>Card Holder Name <span class="text-danger">*</span></b></label>
								<input type="text" name="customerName" id="customerName" class="form-control" value="">
								<span id="errorCustomerName" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Email Address <span class="text-danger">*</span></b></label>
								<input type="text" name="emailAddress" id="emailAddress" class="form-control" value="">
								<span id="errorEmailAddress" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Address <span class="text-danger">*</span></b></label>
								<textarea name="customerAddress" id="customerAddress" class="form-control"></textarea>
								<span id="errorCustomerAddress" class="text-danger"></span>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>City <span class="text-danger">*</span></b></label>
										<input type="text" name="customerCity" id="customerCity" class="form-control" value="">
										<span id="errorCustomerCity" class="text-danger"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>Zip <span class="text-danger">*</span></b></label>
										<input type="text" name="customerZipcode" id="customerZipcode" class="form-control" value="">
										<span id="errorCustomerZipcode" class="text-danger"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>State </b></label>
										<input type="text" name="customerState" id="customerState" class="form-control" value="">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>Country <span class="text-danger">*</span></b></label>
										<input type="text" name="customerCountry" id="customerCountry" class="form-control">
										<span id="errorCustomerCountry" class="text-danger"></span>
									</div>
								</div>
                <div class="col-sm-6 currency">
									<div class="form-group">
										<label><b>Amount <span class="text-danger">*</span></b></label>
										<input type="number" name="price" id="customerAmount" class="form-control">
										<span id="errorCustomerCountry" class="text-danger"></span>
									</div>
                  <div class="currency-symbol"><span>USD</span></div>
								</div>
							</div>
							<hr>
							<h4 align="center">Payment Details</h4>
							<div class="form-group">
								<label>Card Number <span class="text-danger">*</span></label>
								<input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="">
								<span id="errorCardNumber" class="text-danger"></span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Expiry Month</label>
										<input type="text" name="cardExpMonth" id="cardExpMonth" class="form-control" placeholder="MM" maxlength="2" onkeypress="return validateNumber(event);">
										<span id="errorCardExpMonth" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>Expiry Year</label>
										<input type="text" name="cardExpYear" id="cardExpYear" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardExpYear" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>CVC</label>
										<input type="text" name="cardCVC" id="cardCVC" class="form-control" placeholder="123" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardCvc" class="text-danger"></span>
									</div>
								</div>
							</div>
							<br>
							<div align="center">
							<input type="hidden" name="total_amount" value="500">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="item_details" value="Art Expert India Subscriptions">
							<input type="hidden" name="item_number" value="TS1234567">
							<input type="hidden" name="order_number" value="SKA987654321">
							<input type="button" name="payNow" id="payNow" class="btn btn-success btn-sm" onclick="stripePay(event)" value="Pay Now" />
							</div>
							<br>
						</div>
					</div>
				</form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section
        class="cta-one cta-none"
        style="background-image: url(assets/images/shapes/cta-bg-1-1.jpg)"
      >
        <div class="container text-center">
          <h3>Lorem Ipsum dolor sit amet</h3>
          <p>
            Donec a tellus congue, aliquam arcu non, convallis nunc.<br />
            Lorem Ipsum dolor sit amet
          </p>
          <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn-one">Lorem Ipsum</a
            ><!-- /.thm-btn cta-one__btn-one -->
            <a href="#" class="thm-btn cta-one__btn-two">Lorem Ipsum</a
            ><!-- /.thm-btn cta-one__btn-two -->
          </div>
          <!-- /.cta-one__btn-block -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.cta-one -->
      <section id="contact" class="contact-s">
        <div class="container">
          <div class="block-title-two text-center" >
            <span class="block-title-two__line" style="display: none"></span
            ><!-- /.block-title-two__line -->
            <h3>Contact Us</h3>
          </div>
          <!-- /.block-title-two -->
          <div class="row">            
            <div class="col-lg-6 mx-auto">
              <form action="sendemail.php" id="contact_us_form" enctype="multipart/form-data" method="post" class="contact-form-validated contact-one__form">
                <div class="row">
                  <div class="col-lg-12">
                    <input type="text" name="fullname" placeholder="Your Name*" />
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-12">
                    <input type="email"name="email" placeholder="Your Email*" />
                  </div>

                  <div class="col-lg-12 mb-4">                    
                    <!-- <div class="drop-zone">
                      <span class="drop-zone__prompt">Drop Image here or click to upload</span>
                      <input type="file" name="myFile" id="attachmentFile2" class="drop-zone__input">
                      <input type="file" name="attachmentFile" id="attachmentFile" >
                    </div> -->

                    <div class="form-group upload-image ">

                      <div class="messages-container">
                          
                          <div class="iddle">
                              <i class="fas fa-download"></i>
                              <p class="text">Upload the image<br></p>
                          </div>
                          
                          <div class="warning ">
                              <i class="fas fa-exclamation-triangle"></i>
                              <p class="text">OPS!</p>
                  
                              <div class="message-warn"></div>
                              <p class="specs-file-name"></p>
                          </div>
                  
                          <div class="success">
                              <i class="fa fa-check"></i>
                              <p class="text">File Upload<br>Success!</p>
                              <p class="specs-file-name"></p>
                          </div>
                  
                      </div>
                      
                      <input id="group_banner" type="file" class="upload-img-input-file" name="banner" multiple="false" >
                    
                    
                  </div>

                    <span class="text-center" style="font-size:12px; color:red">
                      If you are unable to attach the image then email us at 
                      <a href="mail:info@artexpertsindia.com">info@artexpertsindia.com</a>
                    </span>
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-12">
                    <textarea name="message" placeholder="Your Message"></textarea>
                  </div>
                  <!-- /.col-lg-12 -->
                  <div class="col-lg-12 text-center">
                    <input class="thm-btn contact-one__btn" value="Submit Now" name="submit" type="submit" id="contact-form-btn">
                  </div>
                <!-- /.col-lg-12 -->                   
                </div>
                  
              </form>
            </div>
            <!-- /.col-lg-8 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
          
      <footer class="site-footer  text-light"   
      style="
        background-image: url(assets/images/shapes/cta-bg-1-1.jpg);      
      ">
        <div class="site-footer__upper" style="padding-bottom:10px ; padding-top:70px ;">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="footer-widget footer-widget__links">
                  <h3 class="footer-widget__title" style="color:#fff">About Us</h3>                 
                  <ul class="footer-widget__links-list list-unstyled" >
                    <li>
                      <a href="index.html#contact" style="color:#fff">Contact Us</a>
                    </li>
                    <li>
                      <a href="contact-location.html" style="color:#fff">Address</a>
                    </li>
                    <li>
                      <a href="our-clients.html" style="color:#fff">Our Clients</a>
                    </li>
                  </ul>                
                </div>               
              </div>

              <div class="col-lg-4">
                <div class="footer-widget footer-widget__links">
                  <h3 class="footer-widget__title" style="color:#fff">Services</h3>                 
                  <ul class="footer-widget__links-list list-unstyled">
                    <li>
                      <a href="authentication.html" style="color:#fff">Authentication</a>
                    </li>
                    <li>
                      <a href="appraisal.html" style="color:#fff">Appraisal</a>
                    </li>
                    <li>
                      <a href="scientific-tests.html" style="color:#fff">Scientific Test</a>
                    </li>
                    <li>
                      <a href="help.html" style="color:#fff">Selling Help</a>
                    </li>

                  </ul>                
                </div>               
              </div>
          
              <div class="col-lg-4">
                <div class="footer-widget footer-widget__contact">
                  <h3 class="footer-widget__title" style="color:#fff">Contact Us</h3>
                  <!-- /.footer-widget__title -->
                  <h5>Address:</h5>
                  <ul style="font-size: 18px;">         
                    <li >
                      New York
                    </li>
                    <li>
                      Washington DC
                    </li>
                    <li>
                      London
                    </li>
                    <li>
                      Paris
                    </li>
                    <li>
                      Milan
                    </li>
                    <li>
                      Rome
                    </li>
                    <li>
                      Brussels
                    </li>
                    <li>
                      Mexico City
                    </li>
                    <li>
                      Los Angeles
                    </li>        

                  </ul>
                  <p style="color:#fff">Email: <a href="mailto:info@artexpertsindia.com">info@artexpertsindia.com</a></p>
                </div>
                <!-- /.footer-widget -->
              </div>
           
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.site-footer__upper -->
        <div class="site-footer__bottom" style="padding-top:5px">
          <div class="container">
            <div class="row">
              <div class="col-12 mx-auto text-center" style="padding-bottom:20px">
                <p>&copy; Copyright 2022 Art Experts India. All Rights Reserved</p>
                <a href="index.html" class="site-footer__bottom-logo">
                  <!-- <img src="assets/images/logo-footer-1.png" alt="">-->
                </a>          
              </div>
            </div>          
          </div>
          <!-- /.container -->
        </div>
        <!-- /.site-footer__bottom -->
      </footer>
      <!-- /.site-footer -->
    </div>
    <!-- /.page-wrapper -->

    <div class="search-popup">
      <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
      </div>
      <!-- /.search-popup__overlay -->
      <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
          <input
            type="text"
            name="search"
            placeholder="Type here to Search...."
          />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <!-- /.search-popup__inner -->
    </div>
    <!-- /.search-popup -->

    <div class="side-content__block">
      <div class="side-content__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
      </div>
      <!-- /.side-content__block-overlay -->
      <div class="side-content__block-inner">
        <a href="index.html">
          <!-- <img src="assets/images/logo-1-1.png" alt="" width="143">-->
        </a>
        <div class="side-content__block-about">
          <h3 class="side-content__block__title">About Us</h3>
          <!-- /.side-content__block__title -->
          <p class="side-content__block-about__text">
            Donec a tellus congue, aliquam arcu non, convallis nunc. Vivamus nec
            interdum metus, non venenatis ligula.
          </p>
          <!-- /.side-content__block-about__text -->
          <a href="#" class="thm-btn side-content__block-about__btn"
            >Get Lorem</a
          >
        </div>
        <!-- /.side-content__block-about -->
        <hr class="side-content__block-line" />
        <div class="side-content__block-contact">
          <h3 class="side-content__block__title">Contact Us</h3>
          <!-- /.side-content__block__title -->
          <ul class="side-content__block-contact__list">
            <li class="side-content__block-contact__list-item">
              <i class="fa fa-map-marker"></i>
              amet St 12, ipsum City, lorem
            </li>
            <!-- /.side-content__block-contact__list-item -->
            <li class="side-content__block-contact__list-item">
              <i class="fa fa-phone"></i>
              <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
            </li>
            <!-- /.side-content__block-contact__list-item -->
            <li class="side-content__block-contact__list-item">
              <i class="fa fa-envelope"></i>
              <a href="mailto:example@mail.com">example@mail.com</a>
            </li>
            <!-- /.side-content__block-contact__list-item -->
            <li class="side-content__block-contact__list-item">
              <i class="fa fa-clock"></i>
              Week Days: 09.00 to 18.00 Sunday: Closed
            </li>
            <!-- /.side-content__block-contact__list-item -->
          </ul>
          <!-- /.side-content__block-contact__list -->
        </div>
        <!-- /.side-content__block-contact -->
        <p class="side-content__block__text site-footer__copy-text">
          <a href="#">Art Experts</a> <i class="fa fa-copyright"></i> 2022 All
          Right Reserved
        </p>
      </div>
      <!-- /.side-content__block-inner -->
    </div>
    <!-- /.side-content__block -->

    <div class="side-menu__block">
      <a href="#" class="side-menu__toggler side-menu__close-btn"
        ><i class="fa fa-times"></i>
        <!-- /.fa fa-close --></a
      >

      <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
      </div>
      <!-- /.side-menu__block-overlay -->
      <div class="side-menu__block-inner">
        <a href="index.html" class="side-menu__logo"
          ><img src="assets/images/logo-light-1-1.png" alt="" width="143"
        /></a>
        <nav class="mobile-nav__container">
          <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">
          (c) 2022 <a href="#">Art Experts</a> - All rights reserved.
        </p>
        <div class="side-menu__social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-google-plus"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
      </div>
      <!-- /.side-menu__block-inner -->
    </div>
    <!-- /.side-menu__block -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"
      ><i class="fa fa-angle-up"></i
    ></a>

    <!-- Template JS -->

   <!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->    <!-- Custom Scripts -->
    <!-- <script src="assets/js/theme.js"></script> -->

    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $("#menu").accordion();
        $(".colors a").click(function () {
          if ($(this).attr("class") != "default") {
            $("#menu").removeClass();
            $("#menu").addClass("menu").addClass($(this).attr("class"));
          } else {
            $("#menu").removeClass();
            $("#menu").addClass("menu");
          }
        });
      });
    </script>
  </body>
  
<?php include('include/footer.php');?>
