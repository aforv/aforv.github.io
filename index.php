<?php
	include("connections.php");
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
    <meta content="Average's Streetwalk" property="og:title" />
    <meta content="Hi! I'm AverageUTDRWeeb. A dumb person addicted to Undertale & Deltarune." property="og:description" />
    <meta content="http://aversrestaurant.0fees.us/" property="og:url" />
    <meta content="assets/uwu.png" property="og:image" />
    <meta content="#d777fc" data-react-helmet="true" name="theme-color" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
	<title>
		Average's Streetwalk
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
            background-image: url('assets/legacy4.png');
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
            padding: 15px 60px;
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
        .phigh
        {
            background-color: #3a1b42;
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
            transition-duration: 0.4s;
            margin-top: 10px;
        }
        .phigh:hover
        {
            background-color: #33163b;
        }
	</style>
</head>
<body>
    <div class="head">
            <a class="inv" href="http://aversrestaurant.0fees.us/">aver</a>
            <div class="lc">
                <a href="https://www.youtube.com/channel/UCEQGmgTbi6Va5sKyhYos_jg" target="_blank" title="My YouTube!">
                    <img class="sc" src="assets/youtube.svg" alt="YouTube">
                </a>
                <a href="https://discord.gg/invite/wMkbqJb9NW" target="_blank" title="My Discord Server!">
                    <img class="sc" src="assets/discord.svg" alt="Discord">
                </a>
            </div>
    </div>
	<br>
    <div class="boxBOx">
		<h4>Hey there, I'm <a class ="ww" href="https://www.youtube.com/@avutdrw.">AverageUTDRWeeb</a>.
        </h4><h4>I'm a dumb person addicted to Undertale and Deltarune.</h4>
        <div class="buttons">
            <button class="highlight" onclick="document.location='#more'">More about me</button>
            <button class="phigh" onclick="document.location='/projects/'">My Projects</button>
            <button class="normal" onclick="document.location='/restaurant'">My Restaurant</button>
        </div>
		<hr>
    </div>
    <div class="about" id="more">
        <h2>Hello!</h2>
        <h5><pre>
    Hey, I'm <a class ="ww" href="https://www.youtube.com/@avutdrw.">AverageUTDRWeeb</a>, an Undertale and Deltarune addict. I make
videos on YouTube.
    <div id="subscriberCount" class="flex"></div><div id="l2" class="flex"></div>

    It started when I wanted to make a channel about music. But I decided it
not was my way to go. The <a href="https://www.youtube.com/watch?v=DB4FhdxDO0o" target="_blank">first video</a> I have ever made is from
Feb 21, 2022. it is about a Roblox clip of me clipping through the floor
while trying to attempt a glitch called "Laugh Clip." Laugh Clip is a glitch
where you can make yourself clip through walls while you're emoting. Which
this video isn't about music at all, the <a href="https://www.youtube.com/watch?v=hzbWUaxxZDQ" target="_blank">second video</a> on my channel
though is a bad, old, cringe audio edit. It was my first time doing audio
edits and the last time also. I attempted to make another one but it
sucked so bad that I got rid of the idea of being a successful
musician after making 3 videos about music.

    The first video that reach 100 views is <a href="https://www.youtube.com/watch?v=d3Li4qSHVAQ" target="_blank">this video</a>. I am pretty proud of
how it turned out, but all of the video is just misinformations left and
right.

    The <a href="https://youtube.com/shorts/PxJtYdmuFpk" target="_blank">first short</a> is what made me to this point. It is the first time I've
ever felt that feeling, when you see your notifications go "9+" and seeing
that your video views skyrocketed to the maximum heights of space, and
it's only the 10th video that I have uploaded, and it's my first short.

    The month after I uploaded my <a href="https://youtube.com/shorts/PxJtYdmuFpk" target="_blank">first short</a> ever, 100 subscribers,
short after; 1,000. 2,000. I am now a successful YouTuber.

    After a long time, the <a href="https://youtube.com/shorts/_GhOJI61Nvs" target="_blank">next short</a> is the best performing short in my
entire channel. It has gained over 800,000 views and it is what made me
even more fame. The fame is coming inside me. 😳

    The <a href="https://www.youtube.com/watch?v=PRxf-3OWrUc" target="_blank">first tutorial</a> I have made is the most viewed video on my
channel, besides shorts. It's bad and I am planning to make an
updated one.

    Thanks for listening to my story. I have a great fanbase and
I love you guys. Thank you from the bottom of my heart. ♥
    <script>
    
    const APIKey = 'AIzaSyDC0F_TXexyFUaxqSxqhKEirIq3ubrlcls';
    const Userid = 'UCEQGmgTbi6Va5sKyhYos_jg';
    const subscriberCount= document.getElementById('subscriberCount');
    const line2= document.getElementById('l2');
   
    function formatNumber(number)
    {
        number = number.toFixed(2) + '';
        x = number.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    let getdata = () => {
        fetch(`https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${Userid}&key=${APIKey}`)
        .then(response => {
            return response.json()
        })
        .then(data => {
            console.log(data);
            const scount = data["items"][0].statistics.subscriberCount.replace(/(.)(?=(\d{3})+$)/g,'$1,')
            const vicount = data["items"][0].statistics.viewCount.replace(/(.)(?=(\d{3})+$)/g,'$1,')
            const vdcount = data["items"][0].statistics.videoCount.replace(/(.)(?=(\d{3})+$)/g,'$1,')
            subscriberCount.innerHTML = `   I currently have <div class="ww">${scount}</div> subscribers and <div class="ww">${vicount}</div> video views and I've`
            line2.innerHTML =  `uploaded <div class="ww">${vdcount}</div> videos in my entire career of YouTube.`;
            
        })
    }
   getdata();
    </script>
        </pre></h5>
    </div>
</body>
</html>
