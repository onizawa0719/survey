<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>bootstrap練習</title>

    	<!-- Bootstrap core CSS -->
    	<link href="assets/css/bootstrap.css" rel="stylesheet">

    	<link href="assets/css/main.css" rel="stylesheet">

	</head>

	<body>
   

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          <img class="alignnone size-full wp-image-600" src="http://i1.wp.com/rakuten-tips.com/wp-content/uploads/2015/04/logoanimation.gif?resize=484%2C384" alt="logoanimation" width="65" height="65">
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#contact">star</a></li>
          </ul>
        </div>
      </div>
    </div>
 -->
    <div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<!-- <h1>鬼沢　遥平</h1> 
	    			<h2>私のプロフィール</h2>
					<div id="green">
						<div class="container">
							<div class="row">
								<div class="col-lg-5 centered">
									<img src="assets/img/profile_photo.jpg">
								</div>
								
								<div class="col-lg-7 centered">
									<h3>私の紹介</h3>
									<p>生年月日：1993年7月19日(22)<br />出身地：千葉県柏市<br />趣味：旅行(ハワイ、グアム、オーストラリア、アメリカ[LA,NY]
										,カナダ、イギリス[ロンドン、台湾、ニュージーランド、フィリピン[セブ]{3月予定マレーシア、シンガポール})<br /></p>
								</div>
							</div>
						</div>
					</div> -->
					<?php
 					print 'ようこそ';
 					print $_POST['nickname'];
 					print '様';
 					 ?>


				</div>
			</div>
		</div>
	</div>
	</body>
</html>