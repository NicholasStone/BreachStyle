@extends("frontend.party.common.detail-layout")

@section('sub-styles')
    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
@endsection


@section('article')
    <div style="text-align: center">
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
    </div>
    <div style="margin-top: 50px;">
        <h3>
            主讲人：{{ $application->course_lecturer }}
        </h3>
        <div>
            <p style="line-height: 3em">视频简介：</p>
            <p style="position:relative;margin-left: 5em;overflow-wrap: break-word">{{ $application->detail }}</p>
        </div>
    </div>
@endsection