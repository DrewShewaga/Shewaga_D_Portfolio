<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shewaga.com</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header class="mainHeader">

        <img src="images/ds_logo.svg" alt="Logo of Drew Shewaga" class="mainLogo">

        <h3 class="myName">DREW SHEWAGA</h3>

        <nav class="mainNav">
            <ul class="sideList">
                <li class="navItem"><a href="contact.php">Contact Me</a></li>
                <li class="navItem navMid"><a href="about.php">About Me</a></li>
                <li class="navItem"><a href="#">My Work</a></li>
            </ul>
        </nav>

        <svg height="240" width="2" class="navLine">
            <line x1="0" y1="0" x2="0" y2="240" style="stroke:rgb(190,190,190);stroke-width:2" />
        </svg>

    </header>



    <section class="pageTop">

        <div class="titleArea">

            <svg height="1" width="300" class="titleLineTop">
                <line x1="0" y1="0" x2="300" y2="0" style="stroke:rgb(190,190,190);stroke-width:2" />
            </svg>
        
            <h2 class="pageTitle">My Work</h2>

            <svg height="1" width="300" class="titleLineBot">
                <line x1="0" y1="0" x2="300" y2="0" style="stroke:rgb(190,190,190);stroke-width:2" />
            </svg>

            <!-- <h3 class="projectRoll">Role: Developer</h3> -->

        </div>

        <div class="imageArea">
            <div class="imgBlock"><img src="" alt="workPreview" id="workPreview1" class="imgQuad"></div>
            <div class="imgBlock"><img src="" alt="workPreview" id="workPreview2" class="imgQuad"></div>
            <div class="imgBlock"><img src="" alt="workPreview" id="workPreview3" class="imgQuad"></div>
            <div class="imgBlock"><img src="" alt="workPreview" id="workPreview4" class="imgQuad"></div>
        </div>

    </section>



    <section class="pageCont">

        <h2 class="contTitle">My Work</h2>

        <div class="workMenu">
            <ul>
                <li class="workOpt optL underLine">Development</li>
                <li class="workOpt optR">3D Design</li>
            </ul>
        </div>

        <div class="workArea">

            <div class="workDisp">
                <h4 class="workTitle" id="title1">Pure Volume</h4>
                <p class="workDesc" id="desc1"></p>
                <img src="images/pureVolume_preview.png" alt="work image 1" class="workImg" id=workImg1>
            </div>

            <div class="workDisp">
                <h4 class="workTitle" id="title2">Pure Volume</h4>
                <p class="workDesc" id="desc2"></p>
                <img src="images/pureVolume_preview.png" alt="work image 2" class="workImg" id=workImg2>
            </div>

            <div class="workDisp">
                <h4 class="workTitle" id="title3">Pure Volume</h4>
                <p class="workDesc" id="desc3"></p>
                <img src="images/pureVolume_preview.png" alt="work image 3" class="workImg" id=workImg3>
            </div>

            <div class="workDisp">
                <h4 class="workTitle" id="title4">Pure Volume</h4>
                <p class="workDesc" id="desc4"></p>
                <img src="images/pureVolume_preview.png" alt="work image 4" class="workImg" id=workImg4>
            </div>

        </div> <!--END OF workArea-->

        <div class="vidArea hidden">
            <video src="videos/reel.mp4" class="reel" controls></video>
        </div>

    </section>

    <section class="lightbox">
		<h2 class="hidden">light box</h2>
		<span class="closeLightbox">x</span>
			<div class="lbImgCont">
			    <img src="images/pureVolume_preview.png" alt="full screen image" id="lbImg">
			</div>
	</section>



    <footer class="mainFooter">

        <svg height="1" width="2120" class="footerLine">
            <line x1="0" y1="0" x2="2120" y2="0" style="stroke:rgb(190,190,190);stroke-width:2" />
        </svg>

        <img src="images/ds_logo.svg" alt="Logo of Drew Shewaga" class="footerLogo">

        <ul class="footerNav">
            <li class="footerOpt"><a href="#">My Work</a></li>
            <li class="footerOpt footMid"><a href="contact.php">Contact Me</a></li>
            <li class="footerOpt"><a href="about.php">About Me</a></li>
        </ul>

    </footer>

	<script src="js/main.js"></script>
</body>
</html>