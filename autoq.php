<?php

// DO NO EDIT ANYTHING TO WORK PORPELY 
// © @NibuTv | https://www.facebook.com/manojdas.itahar.co.in

header("Content-Type: application/vnd.apple.mpegurl");
echo '#EXTM3U'.PHP_EOL;
echo '#EXT-X-VERSION:3'.PHP_EOL;
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=250000,RESOLUTION=426x240'.PHP_EOL;
printf("live.php?c=%s&q=250&e=.m3u8".PHP_EOL, $_GET['c']);
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=400000,RESOLUTION=640x360'.PHP_EOL;
printf("live.php?c=%s&q=400&e=.m3u8".PHP_EOL, $_GET['c']);
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=600000,RESOLUTION=842x480'.PHP_EOL;
printf("live.php?c=%s&q=600&e=.m3u8".PHP_EOL, $_GET['c']);
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=800000,RESOLUTION=1280x720'.PHP_EOL;
printf("live.php?c=%s&q=800&e=.m3u8".PHP_EOL, $_GET['c']);
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1200000,RESOLUTION=1920x1080'.PHP_EOL;
printf("live.php?c=%s&q=1200&e=.m3u8".PHP_EOL, $_GET['c']);
?>
