<?php
	include_once 'auth.php';
?>

<html>
    <head>
        <title>Vedios</title>
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src = "http://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src = "records.js"></script>
    </head>
    <body style = "background-color:lightslategray;"> 
            <nav class = "navbar navbar-expand-sm" style = "background-color: black;">
                <ul class = "navbar-nav" style = "color: white;">
					<a href="index.php">
						<li class = "nav-item" style = "padding-left: 20px;padding-top: 15px;padding-bottom: 2px;">
							HOME
						</li>
					</a>

					<a href="videos.php">
						<li class = "nav-item" style = "padding-left: 20px;padding-top: 15px;padding-bottom: 2px;">
							Videos
						</li>
					</a>
					<a href="about_owner.php">
						<li class = "nav-item" style = "padding-left: 20px;padding-top: 15px;padding-bottom: 2px;">
							About Us
						</li>
					</a>
					<a href="pricing_plans.php">
						<li class = "nav-item" style = "padding-left: 20px;padding-top: 15px;padding-bottom: 2px;">
							Pricing Plans
						</li>
					</a>
                    </ul>
					<a href="login.php" style="margin-left: auto">
						<button class = "btn btn-success" type="button navbar-button" style = "margin-left: auto;" >Log In</button>
					</a>
					<a href="register.php">
						<button class = "btn btn-warning" type="button navbar-button" style = "margin-left: 10px;" >Register</button>
					</a>

            </nav>
            <div class = "container-fluid" style = "background-size: 100%;color: white;height: auto;">
                        <div style = "text-align: center;">
                            <h1  style = "margin: 2%;color: black;margin-top: 6%;">WELCOME TO <span style = "color: darkslategray;">FRIENDS EARN COMMUNITY</span></h1>
                            <h6 style = "color: black;"> Friends Earn is here to help those who seek easy ways to earn money online. </h6>
                            <h6 style = "color: black;">It is a platform that pays you on each ad you view.</h6>
                            <h6 style = " color:black;margin-bottom: 5%;">Simply sign up now and start making money!</h6>
                        </div>
            </div>
            <div class = "container-fluid">
                <div class = "row" style = "margin-bottom: 4%;">
                    <div class = "col-sm-12" style = "background-color: darkslategrey;text-align: center;"><h2 style = "margin: 2%;opacity:0.5;">Our Videos.</h2></div>
                    <div class = "col-sm-8 offset-sm-2" style = "align-items: center;margin-top: 4%;">
                        <video width = "100%" height = "75%" controls>
                            <source src = "break.mp4" type = "video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class = "container-fluid">
                <div class = "row">
                    <div class = "col-sm-12" style = "background-color: darkslategrey;text-align: center;"><h2 style = "margin-top:0%;opacity:0.5;">ABOUT US.</h2></div>
                </div>
                <div style = "text-align: center;">
                        <h6 style = "margin-top: 4%;"> Friends Earn Community is a recognized company that allows businesses to  </h6>
                        <h6 >advertise and convey their message to the desired audience by providing them a </h6>
                        <h6 >common platform.</h6>
                        <h6 >If you’re an individual who wants to earn extra money, just sign up and start </h6>
                        <h6 >viewing our ads to earn money after a simple process.</h6>
                        <h6 >We also allow companies to reach their audience! You just need to provide your </h6>
                        <h6 style = "margin-bottom: 4%;">advertisement and get noticed by thousands of people each day.</h6>
                    </div>
            </div> 
            <div class = "row">
                <div class = "col-sm-12" style = "background-color: darkslategrey;text-align: center;"><h2 style = "margin: 2%;opacity:0.5;">Pricing Plans</h2></div>
            </div>      
            <section id="pricing-table" class="section-padding">
                    <div class="container">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="mainHeading">
                                    <h2 class="section-title" style = "text-align: center;margin: 2%;">Select Package</h2>
                                </div>
                            </div>
                                 
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="table" style = "background-color: slategray; ">
                                        <div class="icon">
                                           <i class="fa fa-money" aria-hidden="true"></i>                          
                                        </div>
                                        <div class="title">
                                            <h3>Light Package</h3>
                                        </div>
                                        <div class="pricing-header">
                                            <p class="price-value"><sup>RS</sup>1000 <span>/Month</span></p>
                                        </div>
                                        <ul class="description">
                                            <li><strong>Total Ads</strong>30</li>
                                            <li><strong>Daily Earning</strong>1*30 = 30</li>
                                            <li><strong>Total Earning</strong> 1800</li>
                                            <li><strong>Referrals</strong> 100</li>
                                            <li><strong>For 1</strong> Month</li>
                                        </ul>
                                        <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common"  style = "background-color: darkslategray; ">Buy Now</button></a>
                                    </div>
                                </div>
                                
                              
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="table" style = "background-color: slategray; ">
                                        <div class="icon">
                                           <i class="fa fa-money" aria-hidden="true"></i>                          
                                        </div>
                                        <div class="title">
                                            <h3>Silver Package</h3>
                                        </div>
                                        <div class="pricing-header">
                                            <p class="price-value"><sup>RS</sup>2000 <span>/Month</span></p>
                                        </div>
                                        <ul class="description">
                                            <li><strong>Total Ads</strong>30</li>
                                            <li><strong>Daily Earning</strong>1.94*30 = 58.33</li>
                                            <li><strong>Total Earning</strong>3500</li>
                                            <li><strong>Referrals</strong> 200</li>
                                            <li><strong>For 1</strong> Month</li>
                                        </ul>
                                        <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common"  style = "background-color: darkslategray; ">Buy Now</button></a>
                                    </div>
                                </div>
                                
                              
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="table"  style = "background-color: slategray; ">
                                        <div class="icon">
                                           <i class="fa fa-money" aria-hidden="true"></i>                          
                                        </div>
                                        <div class="title">
                                            <h3>Gold Package</h3>
                                        </div>
                                        <div class="pricing-header">
                                            <p class="price-value"><sup>RS</sup>3000 <span>/Month</span></p>
                                        </div>
                                        <ul class="description">
                                            <li><strong>Total Ads</strong>30</li>
                                            <li><strong>Daily Earning</strong>2.7*30 = 83.33</li>
                                            <li><strong>Total Earning</strong> 5000</li>
                                            <li><strong>Referrals</strong> 300</li>
                                            <li><strong>For 1</strong> Month</li>
                                        </ul>
                                        <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common" style = "background-color: darkslategray; ">Buy Now</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="table" style = "background-color: slategray; ">
                                            <div class="icon">
                                               <i class="fa fa-money" aria-hidden="true"></i>                          
                                            </div>
                                            <div class="title">
                                                <h3>Standard Package</h3>
                                            </div>
                                            <div class="pricing-header">
                                                <p class="price-value"><sup>RS</sup>5000<span>/Month</span></p>
                                            </div>
                                            <ul class="description">
                                                <li><strong>Daily Earning</strong>4.4*30</li>
                                                <li><strong>total Earning</strong>8000</li>
                                                <li><strong>Referrals</strong>400</li>
                                                <li><strong>For 1</strong> Month</li>
                                            </ul>
                                            <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common"  style = "background-color: darkslategray; ">Buy Now</button></a>
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="table" style = "background-color: slategray; ">
                                            <div class="icon">
                                               <i class="fa fa-money" aria-hidden="true"></i>                          
                                            </div>
                                            <div class="title">
                                                <h3>Bright Package</h3>
                                            </div>
                                            <div class="pricing-header">
                                                <p class="price-value"><sup>RS</sup>10000 <span>/Month</span></p>
                                            </div>
                                            <ul class="description">
                                                <li><strong>Daily Earning</strong>8.33*30</li>
                                                <li><strong>Total Earning</strong>15000</li>
                                                <li><strong>Referrals</strong>500</li>
                                                <li><strong>For 1</strong> Month</li>
                                            </ul>
                                            <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common"  style = "background-color: darkslategray; ">Buy Now</button></a>
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="table"  style = "background-color: slategray; ">
                                            <div class="icon">
                                               <i class="fa fa-money" aria-hidden="true"></i>                          
                                            </div>
                                            <div class="title">
                                                <h3>Platinum</h3>
                                            </div>
                                            <div class="pricing-header">
                                                <p class="price-value"><sup>RS</sup>25000 <span>/Month</span></p>
                                            </div>
                                            <ul class="description">
                                                <li><strong>Daily Earn</strong>14.44*30 = 583.33</li>
                                                <li><strong>Total Earn</strong>35000</li>
                                                <li><strong>Referrals</strong>1000</li>
                                                <li><strong>For 1</strong> Month</li>
                                            </ul>
                                            <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common" style = "background-color: darkslategray; ">Buy Now</button></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                            <div class="table"  style = "background-color: slategray; ">
                                                <div class="icon">
                                                   <i class="fa fa-money" aria-hidden="true"></i>                          
                                                </div>
                                                <div class="title">
                                                    <h3>Diamond Package</h3>
                                                </div>
                                                <div class="pricing-header">
                                                    <p class="price-value"><sup>RS</sup>50000 <span>/Month</span></p>
                                                </div>
                                                <ul class="description">
                                                    <li><strong>Daily Earn</strong>38.88*30 = 1166</li>
                                                    <li><strong>Total Earn</strong>70000</li>
                                                    <li><strong>Referrals</strong>2000</li>
                                                    <li><strong>For 1</strong> Month</li>
                                                </ul>
                                                <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common" style = "background-color: darkslategray; ">Buy Now</button></a>
                                            </div>
                                        </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="table"  style = "background-color: slategray; ">
                                            <div class="icon">
                                               <i class="fa fa-money" aria-hidden="true"></i>                          
                                            </div>
                                            <div class="title">
                                                <h3>High Investment Package</h3>
                                            </div>
                                            <div class="pricing-header">            
                                                <p class="price-value"><sup>RS</sup>75000 <span>/Month</span></p>
                                            </div>
                                           <ul class="description">
                                                <li><strong>Daily Earn</strong>55.55*30 = 1666.66</li>
                                                <li><strong>Total Earn</strong>100,000</li>
                                                <li><strong>Referrals</strong>3000</li>
                                                <li><strong>For 1</strong> Month</li>
                                            </ul>
                                            <a href="https://clickpayearn.com/user/signup?plan=1"><button class="btn btn-common" style = "background-color: darkslategray; ">Buy Now</button></a>
                                        </div>
                                </div>
                </section>    
                <div class = "container-fluid">
                        <div class = "row" style = "margin-bottom: 4%;">
                            <div class = "col-sm-12" style = "background-color: darkslategrey;text-align: center;"><h2 style = "margin: 2%;opacity:0.5;">Contact Us</h2></div>
                            <div class = "col-sm-8 offset-sm-2" style = "align-items: center;margin-top: 4%;">
                                <table class = "table-striped">
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                        <th>Contact#</th>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Farhan</td>
                                        <td></td>
                                        <td>0303-7941918</td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Arslan Shah</td>
                                        <td></td>
                                        <td>0305-9372321</td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Waqar</td>
                                        <td></td>
                                        <td>0303-6913027</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
    </body>
</html>
