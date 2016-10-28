<iframe src="http://playfile.enetedu.com/VideoPlay/Video?upFileID={{ $application->video_hash }}&key={{ substr(md5('dxsfdy'.$application->video_hash),8,16) }}"
        id="video-player" width="830" height="620" frameborder="none"></iframe>
<script type="text/javascript">
    function mobileFiter(func) {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
        if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
            func();
        }
    }
    $(function () {
        var width = $(".content").width() - 40;
        var height = 200;
        mobileFiter(function () {
            $("#video-player")
                    .attr('src', 'http://playfile.enetedu.com/VideoPlay/H5Player?upFileID={{ $application->video_hash }}&key={{ substr(md5('dxsfdy'.$application->video_hash),8,16) }}&width=' + width + "&height=" + height)
                    .attr('width', width)
                    .attr('height', height + 20);
        });
    })
</script>