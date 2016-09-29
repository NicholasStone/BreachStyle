    <div class="caseList">
        <ul>
            @foreach($page as $item)
            <li class="type1">
                <div class="outBox">
                    <div class="top">
                        <div class="left" style="height: 9.5em">
                            <h3>{{ link_to(route('frontend.case.show', $item->id), $item->name, ['style' => 'color:black']) }}</h3>
                            <p style="overflow: hidden; text-overflow: ellipsis;">{{ $item->summary }}</p>
                        </div>
                        <div class="right">
                            <div>
                                <img src="{{ asset($item->img_hash) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <span class="depart"><i class="icon iconfont">&#xe60a;</i>{{ $item->branch->name }}</span>
                        <span><i class="icon iconfont">&#xe60e;</i>{{ $item->total_comment }}</span>
                        <span><i class="icon iconfont">&#xe609;</i>{{ $item->fancy }}</span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <script>
            document.onreadystatechange = subSomething;

            function subSomething() {
                if(document.readyState == "interactive") {
                    browserRedirect();
                }
            }
            function browserRedirect() {
                var sUserAgent = navigator.userAgent.toLowerCase();
                var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
                var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
                var bIsMidp = sUserAgent.match(/midp/i) == "midp";
                var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
                var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
                var bIsAndroid = sUserAgent.match(/android/i) == "android";
                var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
                var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
                if(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                    window.location.href="{{ route('frontend.m.case') }}";
                }
            }
        </script>
    </div>
