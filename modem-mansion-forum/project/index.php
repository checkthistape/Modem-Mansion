<?php


function loadFile(){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
}


?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Hub</title>
    <style>
        /* dakedres was here ;3 */
        ::-webkit-scrollbar {
            width: 16px;
            height: 16px;
            background: none;
        }

        ::-webkit-scrollbar-thumb,
        ::-webkit-scrollbar-button {
            width: 16px;
            height: 16px;
            background: silver;
            box-shadow: inset 1px 1px #dfdfdf, inset -1px -1px gray;
            border: 1px solid;
            border-color: silver #000 #000 silver;
        }

        ::-webkit-scrollbar-track {
            image-rendering: optimizeSpeed;
            image-rendering: pixelated;
            image-rendering: optimize-contrast;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTAuNSAyIDIiIHNoYXBlLXJlbmRlcmluZz0iY3Jpc3BFZGdlcyI+CjxtZXRhZGF0YT5NYWRlIHdpdGggUGl4ZWxzIHRvIFN2ZyBodHRwczovL2NvZGVwZW4uaW8vc2hzaGF3L3Blbi9YYnh2Tmo8L21ldGFkYXRhPgo8cGF0aCBzdHJva2U9IiNjMGMwYzAiIGQ9Ik0wIDBoMU0xIDFoMSIgLz4KPC9zdmc+");
            background-position: 0 0;
            background-repeat: repeat;
            background-size: 2px;
        }

        ::-webkit-scrollbar-button {
            background-repeat: no-repeat;
            background-size: 16px;
        }

        ::-webkit-scrollbar-button:single-button:vertical:decrement {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTAuNSAxNiAxNiIgc2hhcGUtcmVuZGVyaW5nPSJjcmlzcEVkZ2VzIj4KPG1ldGFkYXRhPk1hZGUgd2l0aCBQaXhlbHMgdG8gU3ZnIGh0dHBzOi8vY29kZXBlbi5pby9zaHNoYXcvcGVuL1hieHZOajwvbWV0YWRhdGE+CjxwYXRoIHN0cm9rZT0iIzAwMDAwMCIgZD0iTTcgNWgxTTYgNmgzTTUgN2g1TTQgOGg3IiAvPgo8L3N2Zz4=");
        }

        ::-webkit-scrollbar-button:single-button:vertical:increment {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTAuNSAxNiAxNiIgc2hhcGUtcmVuZGVyaW5nPSJjcmlzcEVkZ2VzIj4KPG1ldGFkYXRhPk1hZGUgd2l0aCBQaXhlbHMgdG8gU3ZnIGh0dHBzOi8vY29kZXBlbi5pby9zaHNoYXcvcGVuL1hieHZOajwvbWV0YWRhdGE+CjxwYXRoIHN0cm9rZT0iIzAwMDAwMCIgZD0iTTQgNWg3TTUgNmg1TTYgN2gzTTcgOGgxIiAvPgo8L3N2Zz4=");
        }

        ::-webkit-scrollbar-button:single-button:horizontal:decrement {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTAuNSAxNiAxNiIgc2hhcGUtcmVuZGVyaW5nPSJjcmlzcEVkZ2VzIj4KPG1ldGFkYXRhPk1hZGUgd2l0aCBQaXhlbHMgdG8gU3ZnIGh0dHBzOi8vY29kZXBlbi5pby9zaHNoYXcvcGVuL1hieHZOajwvbWV0YWRhdGE+CjxwYXRoIHN0cm9rZT0iIzAwMDAwMCIgZD0iTTggM2gxTTcgNGgyTTYgNWgzTTUgNmg0TTYgN2gzTTcgOGgyTTggOWgxIiAvPgo8L3N2Zz4=");
        }

        ::-webkit-scrollbar-button:single-button:horizontal:increment {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTAuNSAxNiAxNiIgc2hhcGUtcmVuZGVyaW5nPSJjcmlzcEVkZ2VzIj4KPG1ldGFkYXRhPk1hZGUgd2l0aCBQaXhlbHMgdG8gU3ZnIGh0dHBzOi8vY29kZXBlbi5pby9zaHNoYXcvcGVuL1hieHZOajwvbWV0YWRhdGE+CjxwYXRoIHN0cm9rZT0iIzAwMDAwMCIgZD0iTTYgM2gxTTYgNGgyTTYgNWgzTTYgNmg0TTYgN2gzTTYgOGgyTTYgOWgxIiAvPgo8L3N2Zz4=");
        }

        ::-webkit-scrollbar-corner {
            background: silver;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        :root {
            --thin-header-padding: 15px;
        }

        img {
            user-drag: none;
            -webkit-user-select: none;
            /* Safari, Chrome */
            -webkit-user-drag: none;
            -khtml-user-select: none;
            /* Konqueror */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* IE */
            user-select: none;
            /* CSS3 */
        }

        div.wrapper {
            background-color: white;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-left: 200px;
            padding-right: 200px;
        }

        div.thin-head {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            border-left: 1px solid fuchsia;
            border-right: 1px solid fuchsia;
            border-top: 1px solid fuchsia;
            background-color: Thistle;
        }

        div.block3 a#reg,
        div.block3 a#log {
            margin-right: var(--thin-header-padding);
        }

        div.block3 img {
            margin-right: 3px;
        }

        div.block1 {
            width: 33%;
            padding: 2px;
            padding-left: var(--thin-header-padding);
        }

        div.block2 {
            width: 33%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        div.block3 {
            width: 33%;
            display: flex;
            flex-direction: row;
            justify-content: end;
            align-items: baseline;

        }

        p#since {
            font-size: 12px;
            font-family: Arial;
            font-style: italic;
        }

        div.tabs {
            display: flex;
            flex-direction: row;
            justify-content: center;
            border: 1px solid fuchsia;
            width: 100%;
            margin-bottom: 40px;
            padding: 20px;

        }

        div.tabs .tab {
            padding-left: 20px;
            padding-right: 20px;
            font-size: 30px;
            border: 1px solid white;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: #404;
            text-decoration: underline;
        }

        img.icon#video,
        img.icon#pdf,
        img.icon#gif {
            margin-right: 4px;
        }

        div.header {
            padding: 5px;
            width: 100%;
            border: 1.9px dashed fuchsia;
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        div.header div.logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 43%;
        }

        div.header div.welcome {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 57%;
            border: 1px solid red;

        }

        p#welcome {
            font-weight: 500;
            color: purple;
        }

        span#bold-p {
            color: #404;
            font-weight: bold;
        }

        span#bold-l,
        span#bold-ld {
            color: peru;
            font-weight: bold;

        }

        span#bold-l {
            text-decoration: underline;
        }

        span#bold-l:hover,
        span#bold-ld:hover {
            color: orange;
            cursor: pointer;
        }

        div.sub-header {
            width: 100%;
            height: 25px;
            background-color: MediumOrchid;
            display: flex;
            flex-direction: row;
            justify-content: start;
            align-items: center;
            border-bottom: 1px solid fuchsia;
            border-left: 1px solid fuchsia;
            border-right: 1px solid fuchsia;
            margin-bottom: 15px;
            font-weight: 800;
            font-size: 15px;
        }

        div.sub-header p#info {
            margin-right: 20px;
            margin-left: var(--thin-header-padding);
        }

        div.content {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* border: 1px solid fuchsia; */
            margin-bottom: 15px;
        }

        /*.~~~~~~~~~~~~.Left part.~~~~~~~~~~~~.*/
        div.content div.left-part {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            width: 22%;
            /* border:1px solid red; */
        }

        div.content h2#latestnews {}

        div.content p#fun-fact {
            margin-bottom: 10px;
        }

        div.new {
            background-color: Thistle;
            display: flex;
            flex-direction: column;

            align-items: start;
            width: 100%;
            min-height: 100px;
            margin-bottom: 10px;
        }

        div.new div.text {
            padding-left: 25px;
            padding-top: 4px;
        }

        div.new img {
            object-fit: contain;
            width: 100%;

        }

        div.new p#title {
            width: 100%;
            /* background-color: MediumOrchid; */
            background: url("icons/giftobe-better.gif");
            background-repeat: no-repeat;
            background-size: cover;
            font-weight: bold;
        }

        /*.~~~~~~~~~~~~.Left part.~~~~~~~~~~~~.*/

        /*.~~~~~~~~~~~~.Right part.~~~~~~~~~~~~.*/
        div.content div.right-part {
            width: 77%;
            border: 1px solid red;
            background-color: Thistle;
        }

        div.right-part div.boards {
            width: 100%;
            border: 1px solid blue;
        }

        div.gen-tabs table.board {
          
          width: 100%;
        }

        table.board,
        table.board td,
        table.board tr {
            
            border: 1px solid black;
            text-align: center;
        }

        tr.head-row {
          height: 40px;
        }

        tr.data-row {
          height: 75px;
        }

        tr.divider {
          height: 30px;
          
        }
        tr.divider td#divider-text {
          text-align: left;
          padding-left: 33px;
        }


        table.board td#main {
            width:500px;
            text-align: left;
            padding-left: 33px;
        }

        table.board td#image {
            width: 30px;
        }
        
        table.board td#text {
          width: 240px;
          text-align: left;
          padding-left: 10px;
        }

        table.board td#threads {
          width: 40px;
        }

        table.board td#posts {
          width: 40px;
        }

        table.board td#moderators {
          width: 80px;
        }

        table.board td#lastpost {
          width: 140px;
        }

        

        
        /*.~~~~~~~~~~~~.Right part.~~~~~~~~~~~~.*/

        /*.~~~~~~~~~~~~.Footer.~~~~~~~~~~~~.*/
        div.footer {
            width: 100%;
            height: 250px;
            display: flex;
            flex-direction: column;

            align-items: center;
            /*       */
        }

        div.footer div.last-bar {
            width: 100%;
            height: 25px;
            border: 1px dashed fuchsia;
            background: url("icons/backg.gif");
            background-repeat: no-repeat;
            background-size: cover;

            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 25px;
        }

        div.last-bar div[class^="brick"] {
            width: 33%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            color: purple;
        }

        div.last-bar div.brick1 {
            justify-content: start;
            padding-left: var(--thin-header-padding);
        }

        div.last-bar div.brick2 p {
            margin-left: 3px;
            margin-right: 3px;
            color: white;
        }

        div.last-bar div.brick3 {
            justify-content: end;
            padding-right: var(--thin-header-padding);
        }

        div.last-bar div.brick3 p#rules {
            margin-left: 3px;
            margin-right: 3px;
        }

        div.last-bar div.brick3 p#fogu {
            margin-left: 3px;

        }

        /*.~~~~~~~~~~~~.Footer.~~~~~~~~~~~~.*/
    </style>
    <script type="text/javascript">

        function randomBanner() {
            var rlogosrc = "icons/r-logo/logo" + (Math.floor(Math.random() * 30) + 1) + ".gif";
            document.getElementById("rlogo").src = rlogosrc;

        }

        window.onload = function () {
            randomBanner();

        };


    </script>
</head>

<body>
    <div class="wrapper">



        <div class="thin-head">
            <div class="block1">
                <img id="rlogo" src="" width="180px" height="27px">
                <p id="since">20 Apr 2024 -
                    <?php echo date("d M Y");?>
                </p>
            </div>

            <div class="block2">
                <!-- <p>Modem Mansion forum</p> -->
                <img src="gifs/site-content/mm-gif.gif" width="" height="49px">
            </div>

            <div class="block3">
                <a href="" id="reg"><img src="icons/register.png" width="16px" height="16px">Register</a>
                <a href="" id="log"><img src="icons/login.png" width="16px" height="16px">Login</a>
            </div>

        </div>
        <div class="tabs">
            <div class="tab"><a href="audio/audio.php"><img class="icon" id="audio" src="icons/audio.png" width="32"
                        height="32">Audio</a></div>
            <div class="tab"><a href="video/video.php"><img class="icon" id="video" src="icons/video1.png" width="32"
                        height="32">Video</a></div>
            <div class="tab"><a href="pdf/pdf.php"><img class="icon" id="pdf" src="icons/pdf.png" width="32"
                        height="32">PDF</a></div>
            <div class="tab"><a href="canvas/canvas.php"><img class="icon" id="canvas" src="icons/canvas.png" width="32"
                        height="32">Canvas</a></div>
            <div class="tab"><a href="map/map.php"><img class="icon" id="map" src="icons/map.png" width="32"
                        height="32">Map</a></div>
            <div class="tab"><a href="map/gifs.php"><img class="icon" id="gif" src="icons/gifs.png" width="32"
                        height="32">Gifs</a></div>
        </div>

        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="icons/modem-mansion.png" width="640.250px" height="41px"></a>
                <a href="index.php"><img src="icons/forum.png" width="145.5px" height="22px"></a>

            </div>
            <div class="welcome">
                <p id="welcome"> Welcome, <span id="bold-p">Guest</span>. Please <span id="bold-l">login</span> or <span
                        id="bold-l">register</span>. - <span id="bold-ld">Thinking of joining the forum??</span></br>
                    <?php echo date("M d, Y"); ?> - What's on your mind?
                </p>
            </div>
        </div>

        <div class="sub-header">
            <p id="info">Forum activity: </p>
            <p id="posts">Posts: <span id="posts-stat">42k</span></p>
        </div>

        <div class="content">
            <div class="left-part">
                <h2 id="latestnews">Latest news</h2>
                <p id="fun-fact">Are you having fun?<img src="gifs/content/dollar.gif" width="15px" height="18px"></p>

                <div class="new">
                    <p id="title">Departments</p>
                    <div class="text">
                        <ul>
                            <li>Discussion Forums</li>
                            <li>Discord Server</li>
                            <li>Mail Bag</li>
                            <li>Feeds & Services</li>
                        </ul>
                    </div>

                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="gifs/content/flirt-kid.gif">
                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="gifs/content/britney.gif">
                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="gifs/content/courtney-love-hole.gif">
                </div>
            </div>

            <div class="right-part">
                <div class="boards">
                    <div class="gen-tabs">
                        <table class="board" id="gen">
                            <tr class="head-row">
                                <td colspan="2" id="main">Main boards</td>

                                <td>Threads</td>
                                <td>Posts</td>
                                <td>Moderators</td>
                                <td>Last post</td>
                            </tr>
                            <tr class="divider">
                              <td colspan="6" id="divider-text">Forum Hub</td>
                            </tr>
                            <tr class="data-row">
                              <td id="image">image</td>
                              <td id="text">Forum Info & Questions</td>
                              <td id="threads">Threads</td>
                              <td id="posts">Posts</td>
                              <td id="moderators">Moderators</td>
                              <td id="lastpost">Last post</td>
                            </tr>
                            <tr class="data-row">
                              <td id="image">image</td>
                              <td id="text">News & Announcements</td>
                              <td id="threads">Threads</td>
                              <td id="posts">Posts</td>
                              <td id="moderators">Moderators</td>
                              <td id="lastpost">Last post</td>
                            </tr>
                            <tr class="data-row">
                              <td id="image">image</td>
                              <td id="text">Forum Info & Questions</td>
                              <td id="threads">Threads</td>
                              <td id="posts">Posts</td>
                              <td id="moderators">Moderators</td>
                              <td id="lastpost">Last post</td>
                            </tr>
                            <tr class="divider">
                              <td colspan="6" id="divider-text">Info Part</td>
                            </tr>
                            <tr class="data-row">
                              <td id="image">image</td>
                              <td id="text">text</td>
                              <td id="threads">Threads</td>
                              <td id="posts">Posts</td>
                              <td id="moderators">Moderators</td>
                              <td id="lastpost">Last post</td>
                            </tr>
                        </table>
                    </div>
                    <div class="default-tabs">asd</div>


                </div>
            </div>

        </div>

        <div class="footer">
            <div class="last-bar">
                <div class="brick1">
                    <p id="ab">[About]</p>
                </div>
                <div class="brick2">
                    <p id="con">[Contact]</p>
                    <p id="tac">[Terms and Conditions]</p>
                    <p id="faq">[FAQ]</p>
                </div>
                <div class="brick3">
                    <p id="rules">[Rules]</p>
                    <p id="fogu">[Forum guide]</p>
                </div>

            </div>
            <p id="end">Modem Mansion Badges and Cool Sites</p> <p> which were used as a reference</p>
        </div>
    </div>
</body>

</html>