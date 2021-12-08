<?php
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
  </head>

  <body>
    <video
      id="my-video"
      class="video-js"
      controls
      preload="auto"
      width="640"
      height="264"
      data-setup="{}"
    >
      <!-- <source src="https://sony247channels.akamaized.net/hls/live/2020434/TEN2HD/master.m3u8?hdnea=exp=1636803684~acl=/*~id=15238951201497432001999888355654~hmac=7418c4dfb8e26d1f1b2bd2ff766a5c1eb9cc117f66d5da1d4dc09524d810c896" type="application/x-mpegURL" /> -->
      <!-- <source src="https://feed.play.mv/live/10005200/6G8zJ9XsyB/master.m3u8" type="application/x-mpegURL" /> -->
      <source src="https://pubads.g.doubleclick.net/ssai/event/Syu8F41-R1y_JmQ7x0oNxQ/master.m3u8" type="application/x-mpegURL"  />
      <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank"
          >supports HTML5 video</a
        >
      </p>
    </video>

    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <!-- <script src="videojs-http-streaming.min.js"></script> -->
    <!-- <script src="https://unpkg.com/@videojs/http-streaming@1.13.4/dist/videojs-http-streaming.js"></script> -->
    <script>
     // var player = videojs('my-video');
     // player.play();
    </script>
  </body>
</html>

<!-- sony ten2:- https://pubads.g.doubleclick.net/ssai/event/Syu8F41-R1y_JmQ7x0oNxQ/master.m3u8 -->