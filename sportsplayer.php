<html>
<head>
<title>CRIC X LINKS</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.css"/>
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
<style>
html {
font-family: sans-serif;
background: #000;
}
.plyr {
height: 100%;
width :100%;
}
:root {
--plyr-color-main: #d9230f;
}
.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    .loading-text span:nth-child(8) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.4s infinite linear alternate;
    }
    .loading-text span:nth-child(9) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.6s infinite linear alternate;
    }
    .loading-text span:nth-child(10) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.8s infinite linear alternate;
    }
    .loading-text span:nth-child(11) {
        filter: blur(0px);
        animation: blur-text 1.5s 2s infinite linear alternate;
    }
    .loading-text span:nth-child(12) {
        filter: blur(0px);
        animation: blur-text 1.5s 2.2s infinite linear alternate;
    }
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background-size: 35px auto, auto;
    }

</style>
</head>
<body>
 <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words" style="color:#d9230f;">C</span>
    <span class="loading-text-words" style="color:#d9230f;">R</span>
    <span class="loading-text-words" style="color:#d9230f;">I</span>
    <span class="loading-text-words" style="color:#d9230f;">C</span>
    <span class="loading-text-words" style="color:#d9230f;">X</span>
    <span class="loading-text-words" style="color:#d9230f;">L</span>
    <span class="loading-text-words" style="color:#d9230f;">I</span>
    <span class="loading-text-words" style="color:#d9230f;">N</span>
    <span class="loading-text-words" style="color:#d9230f;">K</span>
    <span class="loading-text-words" style="color:#d9230f;">S</span>
</div>
</div>
<div>
<video autoplay controls crossorigin playsinline>
<source type="application/vnd.apple.mpegurl" src="sports.php?v=<?php echo $_REQUEST["v"]; ?>"></video>
</video>
</video>
</div>
</body>
<script>
 setTimeout(videovisible, 3000)
function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
const e = document.querySelector("video"),
n = e.getElementsByTagName("source")[0].src,
o = {};
if(Hls.isSupported()) {
var config = {
maxMaxBufferLength: 100,
};
const t = new Hls(config);
t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
const s = t.levels.map(e => e.height);
o.quality = {
default: s[0],
options: s,
forced: !0,
onChange: e => (function(e) {
window.hls.levels.forEach((n, o) => {
n.height === e && (window.hls.currentLevel = o)
})
})(e)
};
new Plyr(e, o)
}), t.attachMedia(e), window.hls = t
} else {
new Plyr(e, o)
}
});
</script>
</body>