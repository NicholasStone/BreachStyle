@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/map.css')) !!}
    {!! Html::style(asset('css/frontend/active.css')) !!}
@endsection

@section('content')
    <!-- ChinaMap -->
    <div class="ChinaMap">
        <div class="content">
            <div class="title">
                <img src="{{ asset('img/hot.png') }}"/>
            </div>
            <div class="items" id="Item9">
                <a href="javascript:;" class="fold"></a>
                <div class="itemCon">
                    <div id="Region" style="position:relative; height:360px;">
                        <div class="regionMap" id="RegionMap"></div>
                        <div class="regionList" id="MapControl">
                            <ul>
                                <li class="one">
                                    <p>参与党员<span id="count_user">{{ $all_count_user }}</span>个</p>
                                </li>
                                <li class="two">
                                    <p>发布成果<span id="count_application">{{ $all_count_application }}</span>个</p>
                                </li>
                                <li class="three">
                                    <p>学生党支部<span id="count_student_branch">{{ $all_count_student_branch }}</span>个</p>
                                </li>
                                <li class="four">
                                    <p>教师党支部<span id="count_teacher_branch">{{ $all_count_teacher_branch }}</span>个</p>
                                </li>
                                <li class="five">
                                    <p>参与高校<span id="count_university">{{ $all_count_throughed_university }}</span>个</p>
                                </li>
                            </ul>
                        </div>
                        <div id="MapColor">
                            <p>%=参与高校数/当地高校数</p>
                            <span class="stateInitColor1"><i></i>90%~100%</span>
                            <span class="stateInitColor2"><i></i>60%~89%</span>
                            <span class="stateInitColor3"><i></i>10%~59%</span>
                            <span class="stateInitColor4"><i></i>0%~9%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ChinaMap -->

    <div class="clearfix"></div>

    <!-- hotRank -->
    <div class="rank">
        <div class="content">
            <ul>
                @foreach($datas as $k => $data)
                <li>
                    <a href="{{ route('frontend.university.list', $k + 1) }}"><h3>{{ $data['name'] }}<span>{{ $data['rate'] }}</span></h3></a>
                    <div class="progress">
                        <span style="width: {{ $data['rate'] }}"></span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- hotRank -->

@endsection

@section('after-scripts-end')
    {!! Html::script('//cdn.bootcss.com/raphael/2.2.1/raphael.min.js') !!}
    {!! Html::script('js/chinaMapConfig.js') !!}
    {!! Html::script('js/map.js') !!}

    <script type="text/javascript">
        $(function () {
            // 外部控制地图
            var mapObj = {};
            var stateColorList = ['d7201d', 'd84f45', 'd99992', 'cccccc'];

            $.ajax({
                url: '/frontend/mapdata',
                dataType: 'json',
                success: function (datas) {
                    console.log(datas);
                    var data = {
                        "jiangsu": {
                            'id': datas[14].id,
                            "value": datas[14].rate,
                            "index": "1",
                            "stateInitColor": datas[14].color
                        },
                        "henan": {
                            'id': datas[9].id,
                            "value": datas[9].rate,
                            "index": "2",
                            "stateInitColor": datas[9].color
                        },
                        "anhui": {
                            'id': datas[0].id,
                            "value": datas[0].rate,
                            "index": "3",
                            "stateInitColor": datas[0].color
                        },
                        "zhejiang": {
                            'id': datas[30].id,
                            "value": datas[30].rate,
                            "index": "4",
                            "stateInitColor": datas[30].color
                        },
                        "liaoning": {
                            'id': datas[16].id,
                            "value": datas[16].rate,
                            "index": "5",
                            "stateInitColor": datas[16].color
                        },
                        "beijing": {
                            'id': datas[1].id,
                            "value": datas[1].rate,
                            "index": "6",
                            "stateInitColor": datas[1].color
                        },
                        "hubei": {
                            'id': datas[8].id,
                            "value": datas[8].rate,
                            "index": "7",
                            "stateInitColor": datas[8].color
                        },
                        "jilin": {
                            'id': datas[13].id,
                            "value": datas[13].rate,
                            "index": "8",
                            "stateInitColor": datas[13].color
                        },
                        "shanghai": {
                            'id': datas[23].id,
                            "value": datas[23].rate,
                            "index": "9",
                            "stateInitColor": datas[23].color
                        },
                        "guangxi": {
                            'id': datas[5].id,
                            "value": datas[5].rate,
                            "index": "10",
                            "stateInitColor": datas[5].color
                        },
                        "sichuan": {
                            'id': datas[24].id,
                            "value": datas[24].rate,
                            "index": "11",
                            "stateInitColor": datas[24].color
                        },
                        "guizhou": {
                            'id': datas[6].id,
                            "value": datas[6].rate,
                            "index": "12",
                            "stateInitColor": datas[6].color
                        },
                        "hunan": {
                            'id': datas[12].id,
                            "value": datas[12].rate,
                            "index": "13",
                            "stateInitColor": datas[12].color
                        },
                        "shandong": {
                            'id': datas[20].id,
                            "value": datas[20].rate,
                            "index": "14",
                            "stateInitColor": datas[20].color
                        },
                        "guangdong": {
                            'id': datas[4].id,
                            "value": datas[4].rate,
                            "index": "15",
                            "stateInitColor": datas[4].color
                        },
                        "jiangxi": {
                            'id': datas[15].id,
                            "value": datas[15].rate,
                            "index": "16",
                            "stateInitColor": datas[15].color
                        },
                        "fujian": {
                            'id': datas[2].id,
                            "value": datas[2].rate,
                            "index": "17",
                            "stateInitColor": datas[2].color
                        },
                        "yunnan": {
                            'id': datas[29].id,
                            "value": datas[29].rate,
                            "index": "18",
                            "stateInitColor": datas[29].color
                        },
                        "hainan": {
                            'id': datas[7].id,
                            "value": datas[7].rate,
                            "index": "19",
                            "stateInitColor": datas[7].color
                        },
                        "shanxi": {
                            'id': datas[21].id,
                            "value": datas[21].rate,
                            "index": "20",
                            "stateInitColor": datas[21].color
                        },
                        "hebei": {
                            'id': datas[8].id,
                            "value": datas[8].rate,
                            "index": "21",
                            "stateInitColor": datas[8].color
                        },
                        "neimongol": {
                            'id': datas[17].id,
                            "value": datas[17].rate,
                            "index": "22",
                            "stateInitColor": datas[17].color
                        },
                        "tianjin": {
                            'id': datas[26].id,
                            "value": datas[26].rate,
                            "index": "23",
                            "stateInitColor": datas[26].color
                        },
                        "gansu": {
                            'id': datas[3].id,
                            "value": datas[3].rate,
                            "index": "24",
                            "stateInitColor": datas[3].color
                        },
                        "shaanxi": {
                            'id': datas[22].id,
                            "value": datas[22].rate,
                            "index": "25",
                            "stateInitColor": datas[22].color
                        },
                        "macau": {
                            'id': datas[33].id,
                            "value": datas[33].rate,
                            "index": "26",
                            "stateInitColor": datas[33].color
                        },
                        "hongkong": {
                            'id': datas[32].id,
                            "value": datas[32].rate,
                            "index": "27",
                            "stateInitColor": datas[32].color
                        },
                        "taiwan": {
                            'id': datas[25].id,
                            "value": datas[25].rate,
                            "index": "28",
                            "stateInitColor": datas[25].color
                        },
                        "qinghai": {
                            'id': datas[19].id,
                            "value": datas[19].rate,
                            "index": "29",
                            "stateInitColor": datas[19].color
                        },
                        "xizang": {
                            'id': datas[27].id,
                            "value": datas[27].rate,
                            "index": "30",
                            "stateInitColor": datas[27].color
                        },
                        "ningxia": {
                            'id': datas[18].id,
                            "value": datas[18].rate,
                            "index": "31",
                            "stateInitColor": datas[18].color
                        },
                        "xinjiang": {
                            'id': datas[28].id,
                            "value": datas[28].rate,
                            "index": "32",
                            "stateInitColor": datas[28].color
                        },
                        "heilongjiang": {
                            'id': datas[10].id,
                            "value": datas[10].rate,
                            "index": "33",
                            "stateInitColor": datas[10].color
                        },
                        "chongqing": {
                            'id': datas[31].id,
                            "value": datas[31].rate,
                            "index": "34",
                            "stateInitColor": datas[31].color
                        }
                    };
                    var mapObj_1 = {};

                    $('#RegionMap').SVGMap({
                        external: mapObj_1,
                        mapName: 'china',
                        mapWidth: 530,
                        mapHeight: 400,
                        stateData: data,
                        // stateTipWidth: 118,
                        // stateTipHeight: 47,
                        // stateTipX: 2,
                        // stateTipY: 0,
                        stateTipHtml: function (mapData, obj) {
                            var _value = mapData[obj.id].value;
                            var _idx = mapData[obj.id].index;
                            var active = '';
                            _idx < 4 ? active = 'active' : active = '';
                            var tipStr = '<div class="mapInfo"><i class="' + active + '">' + _idx + '</i><span>' + obj.name + '</span><b>' + _value + '</b></div>';
                            return tipStr;
                        },
                        clickCallback: function (stateData, obj) {
//                            var h3 = document.getElementById("oclick");
//                            var progress = document.getElementById("progress");
//                            h3.innerHTML = obj.name + "<span>" + (stateData)[obj.id].value + "</span>";
//                            var newstr = (stateData)[obj.id].value.replace(/%/, "");
//                            progress.style.width = (stateData)[obj.id].value;
                            $.ajax({
                                url: '/frontend/province/' + (stateData)[obj.id].id + '/summary',
                                dataType: 'json',
                                success: function (datas) {
                                    document.getElementById('count_user').innerHTML = datas.count_user;
                                    document.getElementById('count_application').innerHTML = datas.count_application;
                                    document.getElementById('count_student_branch').innerHTML = datas.count_student_branch;
                                    document.getElementById('count_teacher_branch').innerHTML = datas.count_teacher_branch;
                                    document.getElementById('count_university').innerHTML = datas.count_university;
                                }
                            });
                        }
                    });
                    $('#MapColor').show();
                }
            });
        });
    </script>
@endsection