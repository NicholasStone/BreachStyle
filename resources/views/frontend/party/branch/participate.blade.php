@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style('css/frontend/participate.css') !!}
@endsection

@section('content')
    <!-- participate -->
    <div class="participate">
        <div class="content">
            <div class="breadNav">
                <a href="#">全国</a>
                <span> / </span>
                <a href="#">山西省</a>
                <span> / </span>
                <a href="#">太原理工大学</a>
            </div>
            <div class="departeList">
                <ul>
                    <li>
                        <div class="outbox">
                            <div class="data">
                                <div class="headimg">
                                    <img src="{{ asset('img/children_game_concept02.jpg') }}"/>
                                </div>
                                <div class="dataInfo">
                                    <a class="title"><span class="iconfont">&#xe60c;</span>太原理工大学信息工程学院电子工程系2016级党支部</a>
                                    <a><i class="fa fa-map-marker" aria-hidden="true"></i>山西</a>
                                    <a><i class="fa fa-university" aria-hidden="true"></i>太原理工大学</a>
                                    <a><i class="fa fa-tags" aria-hidden="true"></i>大学生党支部</a>
                                </div>
                            </div>
                            <div class="introduce">
                                <p>
                                    这是一个很长很长的简介，嗯很长很长，他真的很长，特别长，想长酒长想短就短，没事，开心就好，因缺斯汀，一颗赛艇。这是一个很长很长的简介，嗯很长很长，他真的很长，特别长，想长酒长想短就短，没事，开心就好，因缺斯汀，一颗赛艇。这是一个很长很长的简介，嗯很长很长，他真的很长，特别长，想长酒长想短就短，没事，开心就好，因缺斯汀，一颗赛艇这是一个很长很长的简介，嗯很长很长，他真的很长，特别长，想长酒长想短就短，没事，开心就好，因缺斯汀，一颗赛艇</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="page">
                <div class="pageList">
                    <ul>
                        <li class="first">
                            <a href="#">首页</a>
                        </li>
                        <li class="prev">
                            <a href="#">上一页</a>
                        </li>
                        <li class="pages active">
                            <a href="#">1</a>
                        </li>
                        <li class="pages">
                            <a href="#">2</a>
                        </li>
                        <li class="pages">
                            <a href="#">3</a>
                        </li>
                        <li class="pages">
                            <a href="#">4</a>
                        </li>
                        <li class="pages">
                            <a href="#">5</a>
                        </li>
                        <li class="next">
                            <a href="#">下一页</a>
                        </li>
                        <li class="last">
                            <a href="#">尾页</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- participate -->
@endsection