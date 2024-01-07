<?php
	include("../connections.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta name="twitter:card" content="summary_large_image">
    <meta content="Average's Restaurant" property="og:title" />
    <meta content="Hi! I'm AverageUTDRWeeb. A dumb person addicted to Undertale & Deltarune." property="og:description" />
    <meta content="http://aversrestaurant.0fees.us/restaurant" property="og:url" />
    <meta content="assets/uwu.png" property="og:image" />
    <meta content="#d777fc" data-react-helmet="true" name="theme-color" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
	<title>
		Average's Projects
	</title>
	<style>
        @font-face
        {
            font-family: '8b';
            url: url('fonts/8bitoperator_jve.ttf');
        }
		.date-topic
		{
			text-align: right;
			margin-right: 30px;
		}
		div.clack {
		  display: flex;
		  align-items: center;
		  
		  /* Remove the next line if you want the span to appear next to the h1 */
		  justify-content: space-between;
		  
		  border-bottom: 0px solid #292929;
		  padding-left: 20px;
		}
		div.clock
		{
			padding-left: 20px;
		}
        body
        {
            background-image: url('../assets/legacy4.png');
            background-size: cover;
            background-color: #292929;
            color: #ffffff;
            font-family: 'Fira Code', monospace;
            background-attachment: fixed;
        }
        a
        {
            text-decoration: none;
        }
        hr
        {
            border: 0px;
        }
        .head {
            padding: 10px;
            background-color: #252525;
            color: white;
            font-size: 20px;
            display: flex;
        }
        /* unvisited link */
        a.inv:link {
        color: white;
        }

        /* visited link */
        a.inv:visited {
        color: white;
        }

        /* mouse over link */
        a.inv:hover {
        color: white;
        }

        /* selected link */
        a.inv:active {
        color: white;
        }
        .lc{
            position: absolute;
            right: 20px;
            padding-left: 8px;
        }
        img.sc{
            height: 25px;
        }
        .ww
        {
            color: #d97ef2;
        }
        .boxBOx
        {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .highlight{
            background-color: #753587;
            border: none;
            color: white;
            width: 125px;
            height: 125px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 12px;
            left: 50%;
            right: 50%;
            transition-duration: 0.4s;
            margin-top: 10px;
        }
        .normal
        {
            border: none;
            color: white;
            padding: 15px 60px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 12px;
            left: 50%;
            right: 50%;
            background-color: #252525;
            transition-duration: 0.4s;
            margin-top: 10px;
        }
        .normal:hover
        {
            background-color: #121212;
        }
        .highlight:hover
        {
            background-color: #33163b;
        }
        .about
        {
            background-color: #252525;
            width: 800px;
            height: 940px;
            border-radius: 12px;
            opacity: 0.7;
            padding: 20px;
            margin-top: 800px;
            position: absolute;
            top: 60%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            overflow-wrap: break-word;
        }
        .flex
        {
            display: flex;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        div
        {overflow-wrap: break-word;}
        .postbox
        {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 400px;
            width: 40%;
        }
        .audmg
        {
            background-image: url('https://m.gjcdn.net/community-thumbnail/100/112100-chcz6bf3-v4.jpg');
            background-size: cover;
            background-color: #292929;
            background-attachment: fixed;
        }
        .warshi
        {
            background-image: url('../assets/omnirunes.png');
            background-size: cover;
            background-color: #292929;
            background-attachment: fixed;
        }
        .frisk
        {
            background-image: url('https://cdn.discordapp.com/avatars/1059371380036079677/b7509e83faf2e993d2c0004ee66a9066.webp?size=128');
            background-size: cover;
            background-color: #292929;
            background-attachment: fixed;
        }
	</style>
</head>
<body>
    <div class="head">
            <a class="inv" href="http://aversrestaurant.0fees.us/">aver</a>
            <div class="lc">
                <a href="https://www.youtube.com/channel/UCEQGmgTbi6Va5sKyhYos_jg" target="_blank" title="My YouTube!">
                    <img class="sc" src="../assets/youtube.svg" alt="YouTube">
                </a>
                <a href="https://discord.gg/invite/wMkbqJb9NW" target="_blank" title="My Discord Server!">
                    <img class="sc" src="../assets/discord.svg" alt="Discord">
                </a>
            </div>
    </div>
	<br>
    <div class="boxBOx">
    <center>
		<h4>yo, these are the projects i have worked on.</h4>
		<hr>
        <center>
            <button class="highlight audmg" onclick="document.location='https://gamejolt.com/games/audmg/760664'"></button>
            <button class="highlight warshi" onclick="document.location='warshi/'"></button>
            <button class="highlight frisk" onclick="document.location='https://fgfhfh.chinnpphathulpa.repl.co'"></button>
        </center>
    </center>
    </div>
</body>
</html>