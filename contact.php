<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shewaga.com - Contact</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header class="mainHeader">

        <img src="images/ds_logo.svg" alt="Logo of Drew Shewaga" class="mainLogo">

        <h3 class="myName">DREW SHEWAGA</h3>

        <nav class="mainNav">
            <ul class="sideList">
                <li class="navItem"><a href="#">Contact Me</a></li>
                <li class="navItem navMid"><a href="about.php">About Me</a></li>
                <li class="navItem"><a href="index.php">My Work</a></li>
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
        
            <h2 class="pageTitleLong">Contact Me</h2>

            <svg height="1" width="300" class="titleLineBot">
                <line x1="0" y1="0" x2="300" y2="0" style="stroke:rgb(190,190,190);stroke-width:2" />
            </svg>

        </div>

        <div class="imageArea">
            <div class="imgBlockCont"><img src="images/thames_fountain_pale.png" alt="workPreview" class="imgCont"></div>
        </div>

    </section>



    <section class="pageCont contactCont">

        <h2 class="contTitle">Contact Me</h2>

        <section class="contInfo">
            <h4 class="hidden">Contact Info</h4>

            <h4 class="contInfoRow">Email me directly:</h4>
            <h4 class="contInfoRow">drew@shewaga.com</h4>
            <h4 class="contInfoRow">Or fill out the form below.</h4>
        </section>

        <form action="admin/scripts/send_Email.php" method="POST" class="contForm">
            <label for="name" class="contLabel">Name:</label>
            <input type="text" name="name" class="contInp" required>

            <label for="email" class="contLabel">Email:</label>
            <input type="email" name="email" class="contInp" required>

            <label for="subject" class="contLabel">Subject:</label>
            <input type="text" name="subject" class="contInp">

            <label for="message" class="contLabel">Message:</label>
            <textarea cols="30" rows="10" name="message" class="contMessage" required></textarea>

            <input type="submit" name="submit" value="Send" class="contSubmit">
        </form>

    </section>



    <footer class="contFooter">

        <svg height="1" width="2120" class="footerLine">
            <line x1="0" y1="0" x2="2120" y2="0" style="stroke:rgb(190,190,190);stroke-width:2" />
        </svg>

        <img src="images/ds_logo.svg" alt="Logo of Drew Shewaga" class="footerLogo">

        <ul class="footerNav">
            <li class="footerOpt"><a href="index.php">My Work</a></li>
            <li class="footerOpt footMid"><a href="#">Contact Me</a></li>
            <li class="footerOpt"><a href="about.php">About Me</a></li>
        </ul>

    </footer>

	<!-- <script src="js/main.js"></script> -->
</body>
</html>