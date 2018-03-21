<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Consentium</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />
<link href="magnific-popup.css" rel="stylesheet">
<link href="sidemenu.css" rel="stylesheet">
<link href="flexslider.css" rel="stylesheet" type="text/css" />
<link href="media-queries.css" rel="stylesheet">
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- Global site tag (gtag.js) - Google AdWords: 817801534 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-817801534"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-817801534');

</script>

<style>
.white-popup {
	position: relative;
	background: #252015;
	width: auto;
	max-width: 750px;
	margin: 25px auto;
	padding: 50px 25px;
}
.white-popup ul li {
	margin: 5px 0;
}
.mfp-bg {
	background: #ba933b;
}
.mfp-close-btn-in .mfp-close {
	color: #ba933b;
}
.mfp-close {
	font-size: 36px;
}
.mfp-content h2 {
	color: #ba933b;
}
.mfp-content p {color:#837c6c;}
</style>

<!-- Add sidemenu -->
<script>
(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#menuToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#aboutToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#featuresToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#roadmapToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);


(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#mediaToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#teamToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#contactToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

</script>
</head>

<body>

<!------------ Navigation start ------------>

<div id="header">
  <div class="container"> <span class="logo"><a href="#home">
    <div id="logo"></div>
    </a></span>
    <ul id="menu">
      <li><a href="#" class="token-btn">Token Sale</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#features">features</a></li>
      <li><a href="#roadmap">roadmap</a></li>
      <li><a href="#team">team</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <nav> 
      <a href="" id="menuToggle" title="show menu"> <span class="navClosed"></span> </a>
      <a href="#">TOKEN SALE</a>
      <a href="#about" id="aboutToggle" >About</a>
      <a href="#features" id="featuresToggle">Features</a> 
      <a href="#roadmap" id="roadmapToggle">Roadmap</a> 
      <a href="#team" id="teamToggle">Team</a> 
      <a href="#contact" id="contactToggle">Contact</a>
    </nav>
  </div>
</div>

<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>

<section id="home">
  <div class="background-wrap">
    <video id="video-bg-elem" preload="auto" autoplay loop muted>
      <source src="clip-background-720.mov" type="video/mp4">
      Video not supported </video>
  </div>
  <div class="content">
    <div class="coin"><img src="img/icon-c.png" width="180" height="210" alt=""></div>
    <br>
    <br>
    <h1>Platform for Communities</h1>
    <h3>Where Users Earn from Group Chats They Create</h3>
    <br>
    <br>
    <a href="https://goo.gl/zg68sa" target="_blank" class="btn light-btn">Whitepaper</a> &nbsp;&nbsp;<a href="https://i.diawi.com/t5qFwv" target="_blank"><img src="img/android-btn.png" class="android" alt=""></a>
    <br>
    <br>
    <br>
    <br>
    <div style="display:inline-block;"><a href="#about"><img src="img/main-arrow.png" width="39" height="35" alt=""></a></div>
  </div>
</section>

<!------------ Home banner end ------------> 

<!------------ About start ------------>

<section id="about">
  <div class="about-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/about-img.png" alt="">
        </div>
        <div class="col-md-6">
          <h1>Consentium</h1>
          <div class="h-line"></div>
          <h3>CONSENTIUM is a best-in-class chat application with multi-digital-currency C2C (consumer-to-consumer) transfers as well as proprietary Chat Community Monetisation Model (CCM).
          </h3>
          <br>
          <p>The bedrock of CONSENTIUM CCM engine lies in its transactional fee redistribution program as an incentive to create and cultivate strong in-app communities.</p>
          <br>
          <p>The aim of CONSENTIUM is to transcend simplistic chat applications, and develop a sustainable future-proof application that can serve to host core businesses and propagate real-world communities - becoming the go-to platform which all businesses and communities will rely on for their communicative needs.</p>
          <br>
          <p>Chat-apps should not stop short at e-commerce and remittances, but should develop to dominate as the business and community platform of the future. This is the mandate of CONSENTIUM - to emerge as the Platform for Communities.</p>
        </div>
      </div>
    </div>
  </div>
  
  <div style="background:#252015; padding:50px 0; text-align:center;">
    <div class="container">
      <h2 style="color:#b28c36;">As a Chat Application, CONSENTIUM incorporates</h2>
    </div>
  </div>
  <div style="background:#2d2617;">
  <div class="about-feature dark-feature">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>High level chat encryption</h3>
    <p>High level chat encryption via SHA-256 hash algorithm</p>
  </div>
  <div class="about-feature light-feature">
    <i class="fa fa-shield" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>Low fee & secure</h3>
    <p>Low-fee, secure C2C digital cryptocurrency transfers</p>
  </div>
  <div class="about-feature dark-feature">
    <i class="fa fa-exchange" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>Conversion</h3>
    <p>Conversion from Fiat to BTC/ETH/CONSENTIUM</p>
  </div>
  <div class="about-feature light-feature">
    <i class="fa fa-dollar" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>Multi-currency</h3>
    <p>Multi-currency crypto wallet</p>
  </div>
  <div class="about-feature dark-feature">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>CCM</h3>
    <p>Chat Community Monetisation Model (CCM) automated engine</p>
  </div>
  <div style="clear:both"></div>
  </div>
  
  <!------------ Get tokens start ------------>

  <div class="get-tokens">
    <div class="container">
    <h1>Get Tokens</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-2 col-xs-3 v-pad">
              <div class="tokens-icon">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-md-8 col-sm-10 col-xs-9 v-pad" style="text-align:left;">
              <br>
              <h3 style="color:#ba933b;">Private Sale</h3>
              <h3>25 Jan 2018 - 30 Mar 2018</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-2 col-xs-3 v-pad">
              <div class="tokens-icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-md-8 col-sm-10 col-xs-9 v-pad" style="text-align:left;">
              <br>
              <h3 style="color:#ba933b;">Presale</h3>
              <h3>31 Mar 2018</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-2 col-xs-3 v-pad">
              <div class="tokens-icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-md-8 col-sm-10 col-xs-9 v-pad" style="text-align:left;">
              <br>
              <h3 style="color:#ba933b;">Public Sale</h3>
              <h3>1 Apr 2018 - 15 Apr 2018</h3>
            </div>
          </div>
        </div>
      </div>
    <div class="tokens-container">
      <br>
      <br>
      <h2>PUBLIC SALES STARTS IN</h2>
      <br>
      <br>
      <div id="new_year"></div>
    <br>
    <ul class="countdown">
      <li class="days">
        <h3>Days</h3>
      </li>
      <li class="hrs">
        <h3>Hrs</h3>
      </li>
      <li class="mins">
        <h3>Min</h3>
      </li>
      <li class="sec">
        <h3>Sec</h3>
      </li>
    </ul>
    <br>
    <br>
    <div class="progress-container">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:83%">
      </div>
    </div>
    <ul class="progress-number">
      <li class="stats">Start</li>
      <li class="stats">1M</li>
      <li class="stats">5M</li>
      <li>12M</li>
    </ul>
    </div>
    <br>
    <br>
    <br>
    <a href="#notify" target="_blank" class="btn light-btn">Participate</a>
    </div>
    </div>
  </div>

  <!------------ Get tokens end ------------> 
  
</section>
 
<!------------ About end ------------> 

<!------------ Features start ------------> 

<section id="features">
  <div class="container">
    <h1>Features</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <h2 style="color:#ba933b;">Benefits of monetisation of community building</h2>
    <br>
    <br>
    <br>
    <!--
    <ul class="tab">
        <li><a class="tablinks active" onclick="openCity(event, 'one')">1</a></li>
        <li><a class="tablinks" onclick="openCity(event, 'two')">2</a></li>
        <li><a class="tablinks" onclick="openCity(event, 'three')">3</a></li>
        <li><a class="tablinks" onclick="openCity(event, 'four')">4</a></li>
    </ul>
    <br>
    <br>
    <br>
    <div id="one" class="tabcontent" style="display:block;">
      <h3>Incentive for users to build ‘ultra groups’, which are groups in excess of 1000 users</h3>
      <br>
      <p>By incentivising creators of community groups, a new breed of entrepreneurs will emerge that will utilise the chat-app as a means to build up their customer base for their businesses (secondary business use-case) or directly monetise on community as a business (primary business use-case).</p>
    </div>
    <div id="two" class="tabcontent">
      <h3>Entire business can be conceptualised and/or established along the lines of the chat-app</h3>
    </div>
    <div id="three" class="tabcontent">
      <h3>CONSENTIUM can be the go-to chat-app for cryptocurrency communities</h3>
      <br>
      <p>Cryptocurrency communities are tight-knit and some have grown to massive amount of users beyond 5000. The typical chat-apps for these communities are on telegram, slack or discord, none of which offer a revenue stream to the creators or developers. By virtue of being a chat-app which facilities cryptocurrency transfers between users, it is highly relevant for CONSENTIUM to be the premier community app for all cryptocurrencies. Even current cryptocurrency-based chat-apps do not offer or push for a monetisation model for their own communities.</p>
      <br>
      <p>CONSENTIUM can quickly attract creators of communities in the cryptocurrency spectrum by naturally incentivising them in their digital currency denomination for the groups that they are carefully cultivating and growing. By capturing a large market share of cryptocurrency communities, CONSENTIUM will develop into one of the most important crypto-based apps in a euphoric market- such as coinmarketcap.com, which has already surpassed the digital Wall Street Journal in visits.</p>
    </div>
    <div id="four" class="tabcontent">
      <h3>Network effects can be propagated via tiered reward approach by community creators</h3>
      <br>
      <p>A vital component for an app to reach critical mass quickly is to exploit the benefits of network effects. CONSENTIUM offers the most direct and effective means of achieving network effects with it’s CCMM automated engine. Creators can tap on the revenue share based on their group size, and stream down revenue to further incentivise sub-creators/moderators/administrators to create sub-communities or expand on user growth.</p>
      <br>
      <p>With a network incentivisation program, there will be a natural impetus for users within the community to expand and grow via user outreach. Coupled with the other benefits of monetisation for CONSENTIUM, network effects will catalyse an exponential growth in terms of adoption of the chat-application.</p>
    </div>
    -->
    <div class="row">
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">1</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>Incentive for users to build ‘ultra groups’, which are groups in excess of 1000 users</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">2</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>Entire business can be conceptualised and/or established along the lines of the chat-app</h4>
          </div>
        </div>
      </div> 
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">3</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>CONSENTIUM can be the go-to chat-app for cryptocurrency communities</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">4</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>Network effects can be propagated via tiered reward approach by community creators</h4>
          </div>
        </div>
      </div>    
    </div>
    
    <div class="separator"><img src="img/separator-gradient.jpg" alt=""></div>
    <div class="row">
      <div class="col-md-6 ccm">
        <img src="img/graphic-ccm.jpg" alt="">
      </div>
      <div class="col-md-6" style="text-align:left;">
        <h2 style="color:#ba933b;">Chat Community Monetisation Model (CCM)</h2>
        <br>
        <p>The CCMM serves as an innovative way to automate and incentivise in-app community building. This is not currently something offered by other chat-apps in the market today.</p>
        <br>
        <h3>Transactional-fee intake frontend</h3>
        <br>
        <p>All transfers of cryptocurrencies between users on CONSENTIUM will be charged a network usage nominal fee of 1%. The 1% fee will be borne equally by both transferor and transferee (e.g 0.5% each party).</p>
        <br>
        <h3>Redistribution Pool</h3>
        <br>
        <p>All transactional fees will enter and be escrowed in the distribution pool via a cold offline wallet. The process of transfer (2-way) and storage is through a secure encrypted environment at every step and juncture.</p>
        <br>
        <h3>CCM Module</h3>
        <br>
        <p>From the distribution pool, on a monthly basis, funds are parse through the CCM module and automatically reallocated fully to the community creators and users based on preset criteria.</p>
      </div>
    </div>
    <div class="separator"><img src="img/separator-gradient.jpg" alt=""></div>
    <div style="text-align:left;">
      <h2 style="color:#ba933b;">Community and User Reward System</h2>
      <br>
      <h4>CONSENTIUM uses a reward system based on creation of quality groups - consisting of both size (amount of users) as well as quality (reputation of users). These community formative requirements supports and incentivizes a trusted environment of relevant communities, as well as increases the amount of transactions taking place.</h4>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-12 v-pad" style="text-align:left;">
        <h3>Reputation</h3>
        <br>
        <br>
        <p>Users are graded on a tier of 1 - 10 for the reputation count, based on the number of transactions done in the last 30 days, or the total size ($) in transactions in the last 30 days. The system of attribution uses a sliding window approach, measuring the last 30 days, in order to ensure that users are active, and incentivised to stay that active.
        </p>
        <br>
        <br>
        <h3>Quality Groups</h3>
        <br>
        <br>
        <p>The measure of quality groups will be based on the total number of users with reputation of 5 and above. This is to benchmark groups with active and trusted participants, rather than simply group size or a large number of trusted individuals, leading to less exploits or gaming of the CCMM system.</p>
        <br>
        <br>
        <h3>Group Rewards</h3>
        <br>
        <br>
        <p>Based on a quality group measurement matrix, the distribution pool of transactional-fees enter the CCMM to be redistributed to applicable groups. Example, If there are 100 groups of the “Ultra” group type, then all 100 would have a share of 40% of the monthly pool equally.</p>
        <br>
        <br>
      </div> <!--
      <div class="col-md-6 v-pad">
          <table>
            <tr valign="top">
              <th>REPUTATION</th>
              <th>DEFINITION</th>
              <th>TRX COUNT</th>
              <th>TRX VOLUME ($)</th>
            </tr>
            <tr>
              <td>1</td>
              <td>ENTRY</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2</td>
              <td></td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <td>3</td>
              <td></td>
              <td>5</td>
              <td>300</td>
            </tr>
            <tr>
              <td>4</td>
              <td></td>
              <td>7</td>
              <td>500</td>
            </tr>
            <tr>
              <td>5</td>
              <td>QUALITY</td>
              <td>10</td>
              <td>1.000</td>
            </tr>
            <tr>
              <td>6</td>
              <td></td>
              <td>25</td>
              <td>5.000</td>
            </tr>
            <tr>
              <td>7</td>
              <td></td>
              <td>50</td>
              <td>10.000</td>
            </tr>
            <tr>
              <td>8</td>
              <td></td>
              <td>100</td>
              <td>30.000</td>
            </tr>
            <tr>
              <td>9</td>
              <td></td>
              <td>200</td>
              <td>100.000</td>
            </tr>
            <tr>
              <td>10</td>
              <td>TRUSTED</td>
              <td>400</td>
              <td>300.000</td>
            </tr>
          </table>
        <br>
        <br>
        <br> 
          <table>
            <tr valign="top">
              <th>GROUP TYPE</th>
              <th>NO. OF QUALITY MEMBER</th>
              <th>SHARE OF POOL (%)</th>
            </tr>
            <tr>
              <td>Small</td>
              <td>5</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Mid</td>
              <td>20</td>
              <td>7</td>
            </tr>
            <tr>
              <td>Large</td>
              <td>50</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Massive</td>
              <td>100</td>
              <td>15</td>
            </tr>
            <tr>
              <td>Epic</td>
              <td>300</td>
              <td>25</td>
            </tr>
            <tr>
              <td>Ultra</td>
              <td>500</td>
              <td>40</td>
            </tr>
          </table>
      </div>
      -->
    </div>
    <div class="separator"><img src="img/separator-gradient.jpg" alt=""></div>
    <div class="row">
      <div class="col-md-6 v-pad ewallet">
        <img src="img/e-wallet.jpg" alt="">
      </div>
      <div class="col-md-6 v-pad" style="text-align:left;">
        <h2 style="color:#ba933b;">E-wallet</h2>
        <br>
        <h4>Consentium Tokens will be based on the Ethereum platform. Ethereum is the world’s largest, leading smart contract blockchain. Ethereum was specifically chosen as it offers an efficient balance of speed and token liquidity. Currently, the currency for processing the Ethereum is known as Ether. One can buy and sell Ether on token exchanges to major fiat currencies.</h4>
        <br>
        <p>Payment channels - Although tokens can move from user to user (and also from user to smart contract), each one of these transfers (called “transactions”) require that the global Ethereum ledger be updated. A transaction requires the requester to pay ether to the node making the ledger update. Before seeing the updated token balances, all users must wait for the next ledger update, which takes about 15 seconds in Ethereum.</p>
        <br>
        <p>With the issuance of Consentium Coins (‘CSM’), we create a Users-as-Stakeholders network, allowing the behavior of the network and its software, to become aligned with the interests of its Users.</p>
        <br>
        <p>The Consentium Coin is required for certain features of the client. In addition, it enables users to steer the direction of development and influence how the network evolves over time. A benefit of this model is the network effect it creates. Just as Facebook shifted our social attention to build network effect on its closed platform, the Consentium Coin will leverage our economic attention to build the network effect of an open platform. We believe that cryptoeconomic systems will have even stronger pull than the social ones. Our survival instincts, which heavily influence our economic interests, are stronger than purely social ones, thus leading to faster adoption of Ethereum and tokens as technologies.</p>
      </div>
    </div>
  </div>
</section>

<!------------ Features end ------------> 

<!------------ Roadmap start ------------> 

<section id="roadmap">
  <div class="container">
    <h1>Roadmap</h1>
    <div class="h-line"></div>
    <br>
    <br>
    <div class="roadmap-desktop"><img src="img/roadmap-desktop.png" alt=""></div>
    <div class="roadmap-mobile"><img src="img/roadmap-mobile.png" alt=""></div>
    <!--
    <div class="row">
      <div class="col-md-6">
        <h1>Roadmap</h1>
        <div class="h-line"></div>
      </div>
      <div class="col-md-6">
        <div class="example-centered">
      <div class="col-sm-12">
        <ul class="timeline">
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q1</h2>
              <ul>
                <li><h4>ICO</h4></li>
              </ul>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q2</h2>
              <ul>
                <li><h4>App Launch</h4></li>
                <li><h4>Gamification Process</h4></li>
                <li><h4>Exchange Listing</h4></li>
              </ul>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q3</h2>
              <ul>
                <li><h4>Cryptocurrency Trading Feature</h4></li>
              </ul>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q4</h2>
              <ul>
                <li><h4>Biometric Features</h4></li>
                <li><h4>HSM, E2EE of wallet address, private keys</h4></li>
                <li><h4>QR Code offline</h4></li>
              </ul>
            </div>
          </li>      
        </ul>
      </div>
    </div>
      </div>
    </div>
    -->
  </div>
</section>

<!------------ Roadmap end ------------> 

<!------------ Media start ------------>

<section id="media">
  <div class="container">
    <h1>Media</h1>
    <div class="h-line" style="display:inline-block;"></div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://thebitcoinnews.com/fintech-chat-app-consentium-launches-in-asia-raises-usd10-million-in-funding/" target="_blank"><img src="img/media-bitcoinnews.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.ccn.com/fintech-chat-app-consentium-launches-asia-raises-usd10-million-funding/" target="_blank"><img src="img/media-ccn.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://japan.cnet.com/release/30236223/" target="_blank"><img src="img/media-cnetjp.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://cryptovest.com/news/consentium-chat-app-with-built-in-fintech-payment-system-expands-in-asia/" target="_blank"><img src="img/media-cryptovest.png"></img></a></div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.efma.com/article/detail/29168" target="_blank"><img src="img/media-efma.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://sg.news.yahoo.com/consentium-chat-app-digital-currency-transfer-feature-raises-053337185.html" target="_blank"><img src="img/media-yahoo.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="http://blog.naver.com/PostView.nhn?blogId=acn_newswire&logNo=221223596279" target="_blank"><img src="img/media-naver.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://themerkle.com/fintech-chat-app-consentium-launches-in-asia-raises-usd10-million-in-funding/" target="_blank"><img src="img/media-merkle.png"></img></a></div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.coinhills.com/ico/view/consentium/" target="_blank"><img src="img/media-coinhills.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.icoalert.com/?q=consentium&is_v=1" target="_blank"><img src="img/media-icoalert.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icobench.com/ico/consentium" target="_blank"><img src="img/media-icobench.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icoholder.com/en/consentium-18138" target="_blank"><img src="img/media-icoholder.png"></img></a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="" target="_blank"><img src="img/media-icodaily.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="" target="_blank"><img src="img/media-icolistview.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icosource.io/ico/consentium/" target="_blank"><img src="img/media-icosource.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.trackico.io/ico/consentium/" target="_blank"><img src="img/media-trackico.png"></img></a></div>
              </div>
            </div>
  </div>
</section>
<!------------ Media end ------------> 

<!------------ Team start -----------> 
<section id="team">
  <div class="container">
    <h1>Team</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#hal" class="open-popup-link">
        <div class="team-thumb"><img src="img/team-hal.jpg" alt=""></div>
        <br>
        <br>
        <h3>Hal Bame</h3>
        <p>Co-Founder</p>
        <p>15 years experience in eSports, Managing Director for ESL South East Asia. Co-Founded Nemesis, gaming platform for emerging markets.</p>
        </a>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#chris" class="open-popup-link">
        <div class="team-thumb"><img src="img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Chris Low</h3>
        <p>Chief Technology Officer</p>
        <p>Technology entrepreneur for 20 years, Founded largest gaming platform in South East Asia Viwawa, Founded SoftPay, largest Mobile POS in Vietnam.
        </a>
      </div>      
	  <div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#lamia" class="open-popup-link">
        <div class="team-thumb"><img src="img/team-lamia.jpg" alt=""></div>
        <br>
        <br>
        <h3>Lamia Pardo</h3>
        <p>Chief Marketing Officer</p>
        <p>10 years experience in marketing and growth, Founding member and SVP for Pangea Money Transfer. Founded T'empa, organic frozen food brand</p>
        </a>
      </div>
	  <div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#jeremy" class="open-popup-link">
        <div class="team-thumb"><img src="img/team-jeremy.jpg" alt=""></div>
        <br>
        <br>
        <h3>Jeremy Khoo</h3>
        <p>Business Development<br/>and Partnerships</p>
        <p>Group CEO of iFashion Group, leading regional fashion and lifestyle retail company. Co-founded Dressabelle and Megafash.</p>
        </a>
      </div>
    </div>
<!---------- Team end ------------> 
    <!--
    <br>
    <br>
    <br>
    <br>
    <h2>Advisors</h2>
    <br>
    <br>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#daniel" class="open-popup-link">
        <div class="team-thumb"><img src="img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Daniel Petracco</h3>
        <p>CEO / Brand Representative</p>
        </a>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <div class="team-thumb"><img src="img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Daniel Petracco</h3>
        <p>CEO / Brand Representative</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <div class="team-thumb"><img src="img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Daniel Petracco</h3>
        <p>CEO / Brand Representative</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <div class="team-thumb"><img src="img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Daniel Petracco</h3>
        <p>CEO / Brand Representative</p>
      </div>
    </div>
    -->
  </div>
</section>
<!------------ Team end ------------> 

<!------------ Get notified start  ------------>
<section id="notify">
  <div class="container">
    <div class="notify-container">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://app.mailjet.com/widget/iframe/2RvV/5JG" width="100%" height="233"></iframe>
    </div>
  
    <!--<h1>Get notified</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <h4>Subscribe to get notified about our last updates.</h4>
    <br>
    <br>
    <div class="contactform">
    <div class="notify-messages"></div>
    <form id='notified' class="ajax-notify" action='mailer.php' method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="hidden" name="type" value="notify" />
      <div class="row">
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='text' class="input-style" name='name' id='notify_name' value='' placeholder="Name *" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='email' class="input-style" name='email' id='notify_email' value='' placeholder="Email Address *" required />
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <button type='submit' value='Submit' >Submit <!-- Event snippet for Get_Notified conversion page

In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button.

<script>

function gtag_report_conversion(url) {

  var callback = function () {

    if (typeof(url) != 'undefined') {

      window.location = url;

    }

  };

  gtag('event', 'conversion', {

      'send_to': 'AW-817801534/OdqVCKD8tXwQvtL6hQM',

      'event_callback': callback

  });

  return false;

}

</script></button>
        </div>
      </div>
    </div>
    </form>-->
  </div>
</section>
<!------------ Get notified end ------------> 

<!------------ Contact start ------------> 
<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <div class="contactform">
      <div class="contact-messages"></div>
      <form id='contactus' class="ajax-contact" action='mailer.php' method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="hidden" name="type" value="contact" />
      <div class="row">
        <div class="col-md-12 col-sm-12 v-pad">
          <input type='text' class="input-style" name='name' id='contact_name' value=''  placeholder="Name" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='email' class="input-style" name='email' id='contact_email' value='' placeholder="Email" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='text' class="input-style" name='contact' id='contact_contact' value=''  placeholder="Contact Number *" required />
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <textarea rows="10" cols="50" class="input-style" name='message' id='contact_message' placeholder="Your Message *" required></textarea>
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <button type='submit' value='Submit'>Submit</button>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <h4 style="text-transform:uppercase">#12-03, 160 Robinson Road, Singapore 068914</h4>
    <br>
    <br>
    <div style="display:inline-block;"><a href="mailto:hello@consentium.net"><h4>hello@consentium.net</h4></a></div>
  </div>
</section>
<!------------ Contact end ------------> 

<!------------ Footer start ------------> 
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-3 v-pad">
        <div class="footer-logo"><img src="img/logo.png" alt=""></div>
      </div>
      <div class="col-md-4 col-sm-6 v-pad">
        <div style="text-align:center;">
          <ul class="social">
            <li><a href="https://www.facebook.com/profile.php?id=1545357085550769" target="_blank"><div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
            <li><a href="https://twitter.com/ConsentiumCoin" target="_blank"><div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="https://t.me/consentiumofficial" target="_blank"><div class="social-icon"><i class="fa fa-send" aria-hidden="true"></i></div></a></li>
						<li><a href="https://bitcointalk.org/index.php?topic=2848892" target="_blank"><div class="social-icon"><i class="fa fa-btc" aria-hidden="true"></i></div></a></li>
            <li><a href="https://medium.com/@consentium" target="_blank"><div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-3 v-pad">
        <div class="copyright">
          <span class="small-font">© 2018 ASIA FOCUS GROUP PTE LTD. All Rights Reserved.</span>
		<br><br>
          <span class="small-font"><a href="#privacy" class="open-popup-link" style="color:#ba933b;">Privacy Policy</a></span>
          <br><br>
          <!--- disable policies 
          <span class="small-font">Terms of Service</span>]
          -->
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Footer end ------------> 

<!---------- Team Popup content start------------> 

<!---------- Popup 1 START ------------>
<div id="hal" class="white-popup mfp-hide sans">
  <h2>Hal Bame</h2>
  <h3>Co-Founder</h3>
  <br>
  <br>
<p>Hal has amassed over 15 years of international video games, technology and Blockchain industry experience across global markets. He currently works as Co-Founder and CBDO at iProdoos, (a SmartChain Media Company), which is a new streaming entertainment offering that merges premium content, social media and crowdfunding into one, easy to use platform. Hal also advises both Asia and US-based Blockchain related companies.</p>
<br>
<p>Hal previously worked in the esports industry with ESL (the worlds leading esports company), developing the company's business in Southeast Asia, Hong Kong, Taiwan, Macau and Japan. Hal remains co-founder at Nemesis, a Singapore-based startup and casual esports gaming platform focusing on B2B and mobile. Prior to that, Hal held roles at Codemasters, as Vice President of Distributor Territories and Emerging Markets and previous to that, he was with Sony Computer Entertainment Europe (PlayStation), heading up their efforts in Central and Eastern Europe.</p>
</div>
<!---------- Popup 1 END ------------> 

<!---------- Popup 2 START ------------>
<div id="jeremy" class="white-popup mfp-hide sans">
  <h2>Jeremy Khoo</h2>
  <h3>Business Development and Partnerships</h3>
  <br>
  <br>
  <p>Jeremy Khoo is a business operator with a passion for the Southeast Asian e-commerce space, currently focused on establishing iFashion as a leading regional fashion and lifestyle retail company. He was a cofounder of e-commerce fast fashion label Dressabelle and lifestyle marketplace Megafash, both of which exited to iFashion. He was previously a military officer with the Republic of Singapore Air Force and was awarded the Sword of Honour.</p>
</div>
<!---------- Popup 2 END ------------> 

<!---------- Popup 3 START ------------>
<div id="chris" class="white-popup mfp-hide sans">
  <h2>Chris Low</h2>
  <h3>Chief Technology Officer</h3>
  <br>
  <br>
  <p>Mr Low is a seasoned technology entrepreneur for almost 20 years with a track record of building successful technology companies. His first startup called Pendulab was operating as a Software-as-a-Service offering web based collaboration solution. Within a short span of four years, Mr Low had built an incredible sales enterprise which garnered thousands of customers worldwide. Pendulab was subsequently acquired by a leading US-based private equity firm.</p>
  <br>
  <p>Mr Low went on to start what was Southeast Asia largest casual game platform, Viwawa, back in 2008. Within two years, Viwawa became the top 100 site for many countries in Southeast Asia, boasting millions of gamers. Seeing a growing trend for fintech, Mr Low embarked on a new venture, SoftPay Mobile, which aims to be the “Square” of Southeast Asia. Within two years, SoftPay Mobile became the largest Mobile Point of Sale company in Vietnam. Mr Low was instrumental in steering SoftPay Mobile to a strategic partnership with Indonesia’s largest bank, Bank Mandiri. Mr Low also successfully raised funds for SoftPay Mobile under Series A.</p>
  <br>
  <p>Mr Low graduated with a Merit in Computing from the National University of Singapore. Mr Low has been passionate about blockchain technologies since 2012. He loves to read up on the latest blockchain technologies and does some coding in his spare time.</p>
</div>
<!---------- Popup 3 END ------------> 
<!---------- Popup 4 START ------------>
<div id="lamia" class="white-popup mfp-hide sans">
  <h2>Lamia Pardo</h2>
  <h3>Chief Marketing Officer</h3>
  <br>
  <br>
  <p>With 10 years of experience in marketing and growth strategy, Lamia is a leader with experience in building consumer brands, bringing successful digital platforms to market and optimising key performance indicators to ensure faster user adoption and profitability.</p>
  <br/>
<p>Lamia had 3 years of experience as the VP of Marketing before moving on to assuming her current role as the SVP in Growth strategy for Pangea Money Transfer. Joining Pangea as the second team member, Lamia had an active role in developing the first product, building the brand and Marketing program, establishing reputable partnerships, and raising $30M to date.</p>
<br/>
<p>Prior to this, she also founded an organic frozen food brand, T’empa, overseeing its launch, product development and sale of the business.</p>
</div>
<!---------- Popup 4 END ------------> 
<!---------- Team Popup content end------------> 

	<!---------- Privacy policy popup ------------>
<div id="privacy" class="white-popup mfp-hide sans">
  <h2>Privacy Policy</h2>
  <br>
  <br>
  <p>By submitting your personal information to us, you consent to such information being used by us for the provision of the Services and also for us to communicate with you. </p>
  <br>
  <p>In the event if you do not agree for Consentium to process your data, please notify Consentium via email at <a style="color:#ba933b;" href="mailto:hello@consentium.net">hello@consentium.net.</a></p>
</div>
<!---------- Privacy policy popup END ------------>
	
<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#header")[addRemClass]('bgChange');
});

</script> 

<!-- Add smooth transition menu --> 
<script>
$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
</script> 

<!-- Add flexslider -->

<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider',
			slideshowSpeed: 5000
        });
    });
</script>

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#new_year').flipcountdown({
			size:'md',
			beforeDateTime:'03/31/2018 00:00:01'
			/*tick:function(){
				var nol = function(h){
					return h>9?h:'0'+h;
				}
				var	range  	= NY-Math.round((new Date()).getTime()/1000),
					secday = 86400, sechour = 3600,
					days 	= parseInt(range/secday),
					hours	= parseInt((range%secday)/sechour),
					min		= parseInt(((range%secday)%sechour)/60),
					sec		= ((range%secday)%sechour)%60;
				return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);
			}*/
		});
	});
	
</script> 

<!-- Add tab --> 
<script>

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script> 

<!-- Add magnifique popup --> 

<script>
    $(document).ready(function () {
        $('.open-popup-link').magnificPopup({
            type:'inline',
            midClick: true,
            mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.

        });

        // ajax form
        // notify
        var notifyForm = $('.ajax-notify');

        // Get the messages div.
        var notifyMessages = $('.notify-messages');

        // Set up an event listener for the contact form.
        $(notifyForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(notifyForm).serialize();

            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(notifyForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text(response);

                    // Clear the form.
                    $('#notify_name').val('');
                    $('#notify_email').val('');

                })
                .fail(function(data) {
                    // Make sure that the notifyMessages div has the 'error' class.
                    $(notifyMessages).removeClass('alert alert-info');
                    $(notifyMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(notifyMessages).text(data.responseText);
                    } else {
                        $(notifyMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });

        // Contact Us
        var contactForm = $('.ajax-contact');

        // Get the messages div.
        var contactMessages = $('.contact-messages');

        // Set up an event listener for the contact form.
        $(contactForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(contactForm).serialize();
            console.log(formData);
            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(contactForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(contactMessages).text(response);

                    // Clear the form.
                    $('#contact_name').val('');
                    $('#contact_email').val('');
                    $('#contact_contact').val('');
                    $('#contact_message').val('');
                })
                .fail(function(data) {
                    // Make sure that the contactMessages div has the 'error' class.
                    $(contactMessages).removeClass('alert alert-info');
                    $(contactMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(contactMessages).text(data.responseText);
                    } else {
                        $(contactMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });
    });
</script> 

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>

<!-- Twitter single-event website tag code -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">twttr.conversion.trackPid('nyyme', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nyyme&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nyyme&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>
<!-- End Twitter single-event website tag code -->

<!-- Twitter universal website tag code -->

<script>

!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);

},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',

a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');

// Insert Twitter Pixel ID and Standard Event data below

twq('init','nyygh');

twq('track','PageView');

</script>

<!-- End Twitter universal website tag code -->

</body>
</html>
>
