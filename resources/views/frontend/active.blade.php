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
                                    <p>参与党员<span>234567</span>个</p>
                                </li>
                                <li class="two">
                                    <p>发布成果<span>23567</span>个</p>
                                </li>
                                <li class="three">
                                    <p>学生党支部<span>2367</span>个</p>
                                </li>
                                <li class="four">
                                    <p>教师党支部<span>2347</span>个</p>
                                </li>
                                <li class="five">
                                    <p>参与高校<span>2345</span>个</p>
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
                <li>
                    <h3>北京<span>50%</span></h3>
                    <div class="progress">
                        <span></span>
                    </div>
                </li>
                <li>
                    <h3>北京<span>50%</span></h3>
                    <div class="progress">
                        <span></span>
                    </div>
                </li>
                <li>
                    <h3>北京<span>50%</span></h3>
                    <div class="progress">
                        <span></span>
                    </div>
                </li>
                <li>
                    <h3>北京<span>50%</span></h3>
                    <div class="progress">
                        <span></span>
                    </div>
                </li>
                <li>
                    <h3>北京<span>50%</span></h3>
                    <div class="progress">
                        <span></span>
                    </div>
                </li>
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

            // $.ajax({
            // 	url: projectName+'/idea123Action.do?method=getIdea123MapData&reportName='+reportName,
            // 	data: data,
            // 	dataType: 'json',
            // 	success: function(data){

            var data = {
                "jiangsu": {
                    "value": "30.05%",
                    "index": "1",
                    "stateInitColor": "0"
                },
                "henan": {
                    "value": "19.77%",
                    "index": "2",
                    "stateInitColor": "0"
                },
                "anhui": {
                    "value": "10.85%",
                    "index": "3",
                    "stateInitColor": "0"
                },
                "zhejiang": {
                    "value": "10.02%",
                    "index": "4",
                    "stateInitColor": "0"
                },
                "liaoning": {
                    "value": "8.46%",
                    "index": "5",
                    "stateInitColor": "0"
                },
                "beijing": {
                    "value": "4.04%",
                    "index": "6",
                    "stateInitColor": "1"
                },
                "hubei": {
                    "value": "3.66%",
                    "index": "7",
                    "stateInitColor": "1"
                },
                "jilin": {
                    "value": "2.56%",
                    "index": "8",
                    "stateInitColor": "1"
                },
                "shanghai": {
                    "value": "2.47%",
                    "index": "9",
                    "stateInitColor": "1"
                },
                "guangxi": {
                    "value": "2.3%",
                    "index": "10",
                    "stateInitColor": "1"
                },
                "sichuan": {
                    "value": "1.48%",
                    "index": "11",
                    "stateInitColor": "2"
                },
                "guizhou": {
                    "value": "0.99%",
                    "index": "12",
                    "stateInitColor": "2"
                },
                "hunan": {
                    "value": "0.78%",
                    "index": "13",
                    "stateInitColor": "2"
                },
                "shandong": {
                    "value": "0.7%",
                    "index": "14",
                    "stateInitColor": "2"
                },
                "guangdong": {
                    "value": "0.44%",
                    "index": "15",
                    "stateInitColor": "2"
                },
                "jiangxi": {
                    "value": "0.34%",
                    "index": "16",
                    "stateInitColor": "3"
                },
                "fujian": {
                    "value": "0.27%",
                    "index": "17",
                    "stateInitColor": "3"
                },
                "yunnan": {
                    "value": "0.23%",
                    "index": "18",
                    "stateInitColor": "3"
                },
                "hainan": {
                    "value": "0.21%",
                    "index": "19",
                    "stateInitColor": "3"
                },
                "shanxi": {
                    "value": "76.11%",
                    "index": "20",
                    "stateInitColor": "1"
                },
                "hebei": {
                    "value": "0.11%",
                    "index": "21",
                    "stateInitColor": "4"
                },
                "neimongol": {
                    "value": "0.04%",
                    "index": "22",
                    "stateInitColor": "4"
                },
                "tianjin": {
                    "value": "0.04%",
                    "index": "23",
                    "stateInitColor": "4"
                },
                "gansu": {
                    "value": "0.04%",
                    "index": "24",
                    "stateInitColor": "4"
                },
                "shaanxi": {
                    "value": "0.02%",
                    "index": "25",
                    "stateInitColor": "0"
                },
                "macau": {
                    "value": "0.0%",
                    "index": "26",
                    "stateInitColor": "1"
                },
                "hongkong": {
                    "value": "0.0%",
                    "index": "27",
                    "stateInitColor": "3"
                },
                "taiwan": {
                    "value": "0.0%",
                    "index": "28",
                    "stateInitColor": "4"
                },
                "qinghai": {
                    "value": "0.0%",
                    "index": "29",
                    "stateInitColor": "5"
                },
                "xizang": {
                    "value": "0.0%",
                    "index": "30",
                    "stateInitColor": "5"
                },
                "ningxia": {
                    "value": "0.0%",
                    "index": "31",
                    "stateInitColor": "5"
                },
                "xinjiang": {
                    "value": "0.0%",
                    "index": "32",
                    "stateInitColor": "5"
                },
                "heilongjiang": {
                    "value": "0.0%",
                    "index": "33",
                    "stateInitColor": "5"
                },
                "chongqing": {
                    "value": "0.0%",
                    "index": "34",
                    "stateInitColor": "5"
                }
            };
            //				var i = 1;
            //				for(k in data) {
            //					if(i <= 12) {
            //						var _cls = i < 4 ? 'active' : '';
            //						$('#MapControl .list1').append('<li name="' + k + '"><div class="mapInfo"><i class="' + _cls + '">' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
            //					} else if(i <= 24) {
            //						$('#MapControl .list2').append('<li name="' + k + '"><div class="mapInfo"><i>' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
            //					} else {
            //						$('#MapControl .list3').append('<li name="' + k + '"><div class="mapInfo"><i>' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
            //					}
            //				}

            var mapObj_1 = {};

            $('#RegionMap').SVGMap({
                external: mapObj_1,
                mapName: 'china',
                mapWidth: 700,
                mapHeight: 500,
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
                }
            });
            $('#MapColor').show();
            // 	}
            // });
        });
    </script>
@endsection