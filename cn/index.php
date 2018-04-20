<!doctype html>
<html><head>
<!-- Start of consentium Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="consentium.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of consentium Zendesk Widget script -->
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
<link href="../timeline.css" rel="stylesheet" type="text/css" />
<link href="../style3.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
<link rel="stylesheet" type="text/css" href="../jquery.flipcountdown.css" />
<link href="../magnific-popup.css" rel="stylesheet">
<link href="../sidemenu.css" rel="stylesheet">
<link href="../flexslider.css" rel="stylesheet" type="text/css" />
<link href="../media-queries.css" rel="stylesheet">
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="../js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

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
      <li><a href="#" class="token-btn">代币销售</a></li>
      <li><a href="#about">简介</a></li>
      <li><a href="#features">优点</a></li>
      <li><a href="#roadmap">路线图</a></li>
      <li><a href="#contact">联络</a></li>
	  <li><a href="https://wallet.consentium.net/Login/">登入</a></li>
    </ul>
    <nav> 
      <a href="" id="menuToggle" title="show menu"> <span class="navClosed"></span> </a>
      <a href="#">代币销售</a>
      <a href="#about" id="aboutToggle" >简介</a>
      <a href="#features" id="featuresToggle">优点</a> 
      <a href="#roadmap" id="roadmapToggle">路线图</a>
      <a href="#contact" id="contactToggle">联络</a>
	  <a href="https://wallet.consentium.net/Login/">登入</a>
    </nav>
  </div>
</div>

<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>

<section id="home">
  <div class="background-wrap">
    <video id="video-bg-elem" preload="auto" autoplay loop muted>
      <source src="../clip-background-720.mov" type="video/mp4">
      Video not supported </video>
  </div>
  <div class="content">
    <div class="coin"><img src="../img/icon-c.png" width="180" height="210" alt=""></div>
    <br>
    <br>
    <h1>多加密货币群组盈<br>利型聊天应用程序</h1>
    <h3>专为社区而立的平台</h3>
    <br>
    <br>
    <a href="https://www.dropbox.com/s/uvpzje9ixpn5pif/%5BCN%5D%20Consentium%20Whitepaper%2009%20Feb%2018.pdf?dl=0" target="_blank" class="btn light-btn">阅读白皮书</a> &nbsp;&nbsp;<a href="https://i.diawi.com/zVgAvV" class="android" target="_blank"><img src="../img/android-btn.png" alt=""></a>
    <br>
    <br>
    <br>
    <br>
    <div style="display:inline-block;"><a href="#about"><img src="../img/main-arrow.png" width="39" height="35" alt=""></a></div>
  </div>
</section>

<!------------ Home banner end ------------> 

<!------------ About start ------------>

<section id="about">
  <div class="about-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../img/about-img.png" alt="">
        </div>
        <div class="col-md-6">
          <h1>Consentium</h1>
          <div class="h-line"></div>
          <h3>嘉信 (CONSENTIUM) 是最佳的聊天应用程序，有着多数字货币的C2C（消费者对消费者）传送，也有着独有的聊天社区盈利（CCM）模型
          </h3>
          <br>
          <p>嘉信 CCM引擎的背后依赖于它的交易费用重新分发计划，这将激励出一个强大的应用内社区</p>
          <br>
          <p>嘉信旨在超越简单的聊天应用程序，并开发出一个可维持下去的，未来化的应用程序，能够主持核心商业并传播现实世界的社区 - 成为一个所有商业及社区都将为了满足他们的聊天需求而使用的首选平台</p>
          <br>
          <p>聊天应用程序不应该停止在电子商务与汇款方面，而也应该被开发来主宰商业及社区平台的未来。这就是嘉信的任务 - 成为一个面向社区的平台</p>
        </div>
      </div>
    </div>
  </div>
  
  <div style="background:#252015; padding:50px 0; text-align:center;">
    <div class="container">
      <h2 style="color:#b28c36;">作为一个聊天应用程序，嘉信有</h2>
    </div>
  </div>
  <div style="background:#2d2617;">
  <div class="about-feature dark-feature">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>高级聊天加密</h3>
    <p>使用SHA-256哈希算法的高级聊天加密</p>
  </div>
  <div class="about-feature light-feature">
    <i class="fa fa-shield" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>低费用，安全</h3>
    <p>低费用，安全的C2C数字加密货币转发</p>
  </div>
  <div class="about-feature dark-feature">
    <i class="fa fa-exchange" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>兑换</h3>
    <p>法定货币与 BTC/ETH/CSM 之间的兑换</p>
  </div>
  <div class="about-feature light-feature">
    <i class="fa fa-dollar" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>多货币</h3>
    <p>多货币加密钱包</p>
  </div>
  <div class="about-feature dark-feature">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <br>
    <br>
    <br>
    <h3>聊天社区盈利（CCM）</h3>
    <p>聊天社区盈利（CCM）模型的自动化引擎</p>
  </div>
  <div style="clear:both"></div>
  </div>
  
  <!------------ Get tokens start ------------>

  <div class="get-tokens">
    <div class="container">
    <h1>获得代币</h1>
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
              <h3 style="color:#ba933b;">私人预售</h3>
              <h3>25/01/2018 - 31/03/2018</h3>
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
              <h3 style="color:#ba933b;">预售</h3>
              <h3>31/03/2018</h3>
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
              <h3 style="color:#ba933b;">公开销售</h3>
              <h3>20/04/2018 - 30/04/2018</h3>
            </div>
          </div>
        </div>
      </div>
    <div class="tokens-container">
      <br>
      <br>
      <h2>公开销售倒数</h2>
      <br>
      <br>
      <div id="new_year"></div>
    <br>
    <ul class="countdown">
      <li class="days">
        <h3>天</h3>
      </li>
      <li class="hrs">
        <h3>时</h3>
      </li>
      <li class="mins">
        <h3>分</h3>
      </li>
      <li class="sec">
        <h3>秒</h3>
      </li>
    </ul>
    <br>
    <br>
    <div class="progress-container">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%">
      </div>
    </div>
    <ul class="progress-number">
      <li class="stats">0M</li>
      <li class="stats">14M</li>
      <li class="stats">28M</li>
      <li>42M</li>
    </ul>
    </div>
    <br>
    <br>
    <br>
    <a href="#notify" target="_blank" class="btn light-btn">参与</a>
    </div>
    </div>
  </div>

  <!------------ Get tokens end ------------> 
  
</section>
 
<!------------ About end ------------> 

<!------------ Features start ------------> 

<section id="features">
  <div class="container">
    <h1>优点</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <h2 style="color:#ba933b;">从社区建立里盈利的好处</h2>
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
            <h4>鼓励用户去打造“终极群组”，一个超过1000名用户的群组</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">2</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>整个商业都可以概念化并/或建立成聊天应用程序</h4>
          </div>
        </div>
      </div> 
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">3</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>嘉信可以是面向加密货币社区的首选聊天应用程序</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 v-pad">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-3"><div class="features-num">4</div></div>
          <div class="col-md-8 col-sm-9 col-xs-9" style="text-align:left;">
            <h4>可通过由社区创造者制定的阶级性奖励来成为网络效应以进行宣传</h4>
          </div>
        </div>
      </div>    
    </div>
    
    <div class="separator"><img src="../img/separator-gradient.jpg" alt=""></div>
    <div class="row">
      <div class="col-md-6 ccm">
        <img src="../img/graphic-ccm-CN.jpg" alt="">
      </div>
      <div class="col-md-6" style="text-align:left;">
        <h2 style="color:#ba933b;">聊天社区盈利（CCM）</h2>
        <br>
        <p>CCM作为一个创新的方式来自动化并激励社区创造。现今市场里的聊天应用程序都没有提供这类模型</p>
        <br>
        <h3>交易费前端</h3>
        <br>
        <p>所有在嘉信上用户之间加密货币的转发都将被收取1%的象征性收费作为网络使用费用。这1%的费用将从转发人及接收人公平的平分（例如每一方0.5%）。</p>
        <br>
        <h3>重新分配池</h3>
        <br>
        <p>所有交易费用都将通过冷线下钱包进入并托管在分配池里。转发（双向）及储存的过程的每一步都是在安全且经加密的环境进行。</p>
        <br>
        <h3>CCM模块</h3>
        <br>
        <p>从分配池里，每一个月份，资金都将从CCM模块解析出来，并基于预设的条件，自动完整的重新分配给社区创造者及用户。</p>
      </div>
    </div>
    <div class="separator"><img src="../img/separator-gradient.jpg" alt=""></div>
    <div style="text-align:left;">
      <h2 style="color:#ba933b;">社区及用户奖励系统</h2>
      <br>
      <h4>嘉信基于高质量群组的建立 - 包含大小（用户数量）及质量（用户的声誉）来执行奖励系统。形成这些社区的需求支持并鼓励一个受信任的社区环境，这也同时可增加交易的数量。</h4>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-12 v-pad" style="text-align:left;">
        <h3>声誉</h3>
        <br>
        <br>
        <p>用户是基于在30天内交易的数量，或30天内交易的总价值（$），以阶级1-10进行声誉分级。此系统使用了滑动窗口方案，测量前30天的数据，以确保用户是活跃的，并激励他们保持活跃。
        </p>
        <br>
        <br>
        <h3>高质量群组</h3>
        <br>
        <br>
        <p>群组的质量的算法将基于拥有5以上声誉的用户的数量。这是为了要以活跃及受信任的参与者作为基准，而不是群组的大小或受信赖的人数，从而降低CCM系统被钻漏洞的可能。</p>
        <br>
        <br>
        <h3>群组奖励</h3>
        <br>
        <br>
        <p>基于高质量群组测量方式，分配池里的交易费将进入CCM以重新分配给适合的群组。举个例子，若有100个“终极”类型的群组，那这100个都将平分每月池的50%。</p>
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
    <div class="separator"><img src="../img/separator-gradient.jpg" alt=""></div>
    <div class="row">
      <div class="col-md-6 v-pad ewallet">
        <img src="../img/e-wallet.jpg" alt="">
      </div>
      <div class="col-md-6 v-pad" style="text-align:left;">
        <h2 style="color:#ba933b;">电子钱包</h2>
        <br>
        <h4>CSM 将基于以太坊平台。以太坊是全球最大的智能合约区块链。选择以太坊是应因为它能够在速度及代币流通性之间提供平衡。目前，在以太坊运行的货币称为以太。每一个人都可以在代币交易所上使用法定货币购买或销售以太。</h4>
        <br>
        <p>支付通道 - 即使代币可以从用户转发到用户（也可以从用户到智能合约），每一次转发（称为“交易”）需要全球每一个以太坊账本进行更新。一笔交易需要要求者支付以太给阶段以更新账本。在可以看到更新后的代币结余之前，所有用户都必须等待下一次的账本更新，在以太坊上大概需要耗费15秒。</p>
        <br>
        <p>通过嘉信币（“CSM”）的发行，我们打造了一个“用户作为利益相关者”的网络，允许网络及它的软件满足用户的需求。.</p>
        <br>
        <p>客户端的某些功能需要使用到嘉信币。除此之外，它也允许用户带领网络在经过时间的推移的发展方向。此模型的优势在于它可创造的网络效应。就好像Facebook转移了我们的社会注意力到它的封闭式平台以创造网络效应，嘉信币将善用我们的经济注意力，在公开平台上创造网络效应。我们相信加密经济系统将比社交还要有影响力。我们的生存本能大量影响了我们对经济的需要，甚至比单纯的社交还要重要，这将使得以太坊及代币作为技术被快速采纳。</p>
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
    <div class="roadmap-desktop"><img src="../img/roadmap-desktop-cn.png" alt=""></div>
    <div class="roadmap-mobile"><img src="../img/roadmap-mobile-cn.png" alt=""></div>
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
    <h1>媒体</h1>
    <div class="h-line" style="display:inline-block;"></div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://cointelegraph.com/press-releases/consentium-raises-additional-us-10-million-to-build-first-of-its-kind-fintech-chat-app" target="_blank"><img src="../img/media-cointelegraph.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.ccn.com/fintech-chat-app-consentium-launches-asia-raises-usd10-million-funding/" target="_blank"><img src="../img/media-ccn.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://japan.cnet.com/release/30236223/" target="_blank"><img src="../img/media-cnetjp.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://cryptovest.com/news/consentium-chat-app-with-built-in-fintech-payment-system-expands-in-asia/" target="_blank"><img src="../img/media-cryptovest.png"></img></a></div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.efma.com/article/detail/29168" target="_blank"><img src="../img/media-efma.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://sg.news.yahoo.com/consentium-chat-app-digital-currency-transfer-feature-raises-053337185.html" target="_blank"><img src="../img/media-yahoo.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="http://blog.naver.com/PostView.nhn?blogId=acn_newswire&logNo=221223596279" target="_blank"><img src="../img/media-naver.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://themerkle.com/fintech-chat-app-consentium-launches-in-asia-raises-usd10-million-in-funding/" target="_blank"><img src="../img/media-merkle.png"></img></a></div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.coinhills.com/ico/view/consentium/" target="_blank"><img src="../img/media-coinhills.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.icoalert.com/?q=consentium&is_v=1" target="_blank"><img src="../img/media-icoalert.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icobench.com/ico/consentium" target="_blank"><img src="../img/media-icobench.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icoholder.com/en/consentium-18138" target="_blank"><img src="../img/media-icoholder.png"></img></a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="" target="_blank"><img src="../img/media-icodaily.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="" target="_blank"><img src="../img/media-icolistview.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://icosource.io/ico/consentium/" target="_blank"><img src="../img/media-icosource.png"></img></a></div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
                <div class="media-logo"><a href="https://www.trackico.io/ico/consentium/" target="_blank"><img src="../img/media-trackico.png"></img></a></div>
              </div>
            </div>
  </div>
</section>
<!------------ Media end ------------> 

<!------------ Team start -----------> 
<section id="team">
  <div class="container">
    <h1>团队</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#hal" class="open-popup-link">
        <div class="team-thumb"><img src="../img/team-hal.jpg" alt=""></div>
        <br>
        <br>
        <h3>Hal Bame</h3>
        <p>联合创始人</p>
        </a>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#chris" class="open-popup-link">
        <div class="team-thumb"><img src="../img/team-chris.jpg" alt=""></div>
        <br>
        <br>
        <h3>Chris Low</h3>
        <p>首席技术官</p>
        </a>
      </div>
			<div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#lamia" class="open-popup-link">
        <div class="team-thumb"><img src="../img/team-lamia.jpg" alt=""></div>
        <br>
        <br>
        <h3>Lamia Pardo</h3>
        <p>首席营销官</p>
        </a>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#jeremy" class="open-popup-link">
        <div class="team-thumb"><img src="../img/team-jeremy.jpg" alt=""></div>
        <br>
        <br>
        <h3>Jeremy Khoo</h3>
        <p>业务发展和合作关系</p>
        </a>
      </div>
      </div>
	<div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#nizam" class="open-popup-link">
		<div class="team-thumb"><img src="../img/team-nizam.jpg" alt=""></div></a>
        <br>
        <br>
        <h3>Nizam Ismail</h3>
	<p>法律顾问</p>
		</div>
<div class="col-md-3 col-sm-3 col-xs-12 v-pad">
        <a href="#ekaterina" class="open-popup-link">
        <div class="team-thumb"><img src="../img/team-ekaterina.jpg" alt=""></div> </a>
        <br>
        <br>
        <h3>Ekaterina Skorobogatova</h3>
		<p>顾问</p>
       
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

<!------------ Get notified start ------------> 
<section id="notify">
  <div class="container">
    <h1>被通知</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <h4>要得到更新内容的通知请签署</h4>
    <br>
    <br>
    <div class="contactform">
    <div class="notify-messages"></div>
    <form id='notified' class="ajax-notify" action='mailer.php' method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="hidden" name="type" value="notify" />
      <div class="row">
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='text' class="input-style" name='name' id='notify_name' value='' placeholder="姓名*" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='email' class="input-style" name='email' id='notify_email' value='' placeholder="电邮 *" required />
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <button type='submit' value='Submit' >呈交</button>
        </div>
      </div>
		</form>
    </div>
  </div>
</section>
<!------------ Get notified end ------------> 

<!------------ Contact start ------------> 
<section id="contact">
  <div class="container">
    <h1>联络</h1>
    <div class="h-line" style="display:inline-block;"></div>
    <div class="contactform">
      <div class="contact-messages"></div>
      <form id='contactus' class="ajax-contact" action='mailer.php' method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="hidden" name="type" value="contact" />
      <div class="row">
        <div class="col-md-12 col-sm-12 v-pad">
          <input type='text' class="input-style" name='name' id='contact_name' value=''  placeholder="姓名" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='email' class="input-style" name='email' id='contact_email' value='' placeholder="电邮" required />
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <input type='text' class="input-style" name='contact' id='contact_contact' value=''  placeholder="联络号码 *" required />
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <textarea rows="10" cols="50" class="input-style" name='message' id='contact_message' placeholder="信息 *" required></textarea>
        </div>
        <div class="col-md-12 col-sm-12 v-pad">
          <button type='submit' value='Submit'>呈交</button>
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
        <div class="footer-logo"><img src="../img/logo.png" alt=""></div>
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
          <!--- disable policies 
          <span class="small-font">Privacy Policy &nbsp;| &nbsp;Terms of Service</span>]
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
  <h3>联合创始人</h3>
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
  <h3>业务发展及合作关系</h3>
  <br>
  <br>
  <p>Jeremy Khoo is a business operator with a passion for the Southeast Asian e-commerce space, currently focused on establishing iFashion as a leading regional fashion and lifestyle retail company. He was a cofounder of e-commerce fast fashion label Dressabelle and lifestyle marketplace Megafash, both of which exited to iFashion. He was previously a military officer with the Republic of Singapore Air Force and was awarded the Sword of Honour.</p>
</div>
<!---------- Popup 2 END ------------> 

<!---------- Popup 3 START ------------>
<div id="chris" class="white-popup mfp-hide sans">
  <h2>Chris Low</h2>
  <h3>首席技术官</h3>
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
  <h3>首席营销官</h3>
  <br>
  <br>
  <p>With 10 years of experience in marketing and growth strategy, Lamia is a leader with experience in building consumer brands, bringing successful digital platforms to market and optimising key performance indicators to ensure faster user adoption and profitability.</p>
  <br/>
<p>Lamia had 3 years of experience as the VP of Marketing before moving on to assuming her current role as the SVP in Growth strategy for Pangea Money Transfer. Joining Pangea as the second team member, Lamia had an active role in developing the first product, building the brand and Marketing program, establishing reputable partnerships, and raising $30M to date.</p>
<br/>
<p>Prior to this, she also founded an organic frozen food brand, T’empa, overseeing its launch, product development and sale of the business.</p>
</div>
<!---------- Popup 4 END ------------> 
<!---------- Popup 5 START ------------>
<div id="nizam" class="white-popup mfp-hide sans">
  <h2>Nizam Ismail</h2>
  <h3>Legal Advisor</h3>
  <br>
  <br>
  <p>Nizam spearheads RHTLaw Compliance Solutions, a dedicated financial services compliance consultancy/solutions provider in Singapore, Malaysia and Indonesia (PT RHT Solusi Indonesia).</p>
<br>
	<p>He also heads up the Financial Services Practice of RHTLaw Taylor Wessing LLP.</p>
<br>
<p>Nizam has worked with regulators, exchanges, markets, banks, broker-dealers, commodities firms, fund managers, trust companies, financial advisers. He has worked with a variety of FinTech firms, cryptocurrency firms and ICO/TGE issuers.</p>
<br>
<p>He has more than 25 years of experience and expertise in financial services regulatory compliance and litigation.</p>
<br>
<p>He was formerly Executive Director and Head of Compliance for Southeast Asia in Morgan Stanley Singapore before joining the Firm. Nizam was also Senior Vice President and Head of Compliance for Southeast Asia at Lehman Brothers Singapore, Executive Director (Legal and Compliance) in Nomura Singapore and Senior Legal Counsel of Citigroup (Corporate and Investment Bank).</p>
<br>
<p>Nizam spent six years as a regulator at the Monetary Authority of Singapore, where he was Deputy Director and Head of the Market Conduct Policy Division. There, Nizam worked on various policy reviews relating to the capital markets, including various policy reviews leading to the enactment of the Securities and Futures Act, the Financial Advisers Act and the Business Trust Act. Nizam also conducted a review on the application of competition law on financial services. Nizam also worked with other international financial services regulators.</p>
<br>
<p>Having graduated from the NUS Law School in 1991 on a Public Service Commission Local Merit Scholarship, Nizam started his legal career as Deputy Public Prosecutor/State Counsel at the Commercial Affairs Department, where he prosecuted high-profile corporate and market misconduct cases including insider trading, market rigging and fraud.</p>
<br>
	<p>Nizam has spoken and conducted seminars in Asia.</p>

</div>
<!---------- Popup 5 END ------------> 
<!---------- Popup 6 START ------------>
<div id="ekaterina" class="white-popup mfp-hide sans">
  <h2>Ekaterina Skorobogatova</h2>
  <h3>Advisor</h3>
  <br>
  <br>
<p>Ekaterina have been working in growth management for almost 15 years now and she was a member of growth teams at Facebook, Instagram and WhatsApp. Her specialities includes Product Development, Partnerships, Data Visualization, Data Analytics, Native Mobile & Web Applications.</p>
<br>
<p>Ekaterina had close to 3 years of experience as the Head of Growth for Facebook Russia, where she was single handedly responsible for coming up with the growth strategy for Russia. Ekaterina was then made the Mobile Growth Lead for Europe, Middle East and Africa where she worked on product launches and internationalization strategies for both Facebook Messenger and Instagram. During her last year in Facebook, Ekaterina launched the first internet.org deployment in Zambia, providing free basic internet to people from all walks of life in Zambia.</p>
<br>
<p>After WhatsApp was acquired by Facebook, Ekaterina went on to become the Growth Manager for WhatsApp Inc where she worked on a variety of products and ares of strategic focus for WhatsApp like the launch of payment and business messaging.</p>
<br>
<p>Her experience at Facebook, Instagram and WhatsApp growth teams taught her to seek out and solve for the bottlenecks that prevent companies from growing faster - be it team structure, access to the right data, product development process or understanding of the local markets they are trying to grow in.</p>
</div>
<!---------- Popup 6 END ------------> 
<!---------- Team Popup content end------------> 

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
			beforeDateTime:'04/20/2018 14:00:01'
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


</body>
</html>
