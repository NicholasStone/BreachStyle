@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/map.css')) !!}
    {!! Html::style(asset('css/frontend/active.css')) !!}
@endsection

@section('content')
    <!-- ChinaMap -->
    <div class="container">
        {{--<div class="ChinaMap">--}}
            {{--<div class="content">--}}
                {{--<div class="title">--}}
                    {{--<img src="{{ asset('img/hot.png') }}"/>--}}
                {{--</div>--}}
                {{--<div class="items" id="Item9">--}}
                    {{--<a href="javascript:;" class="fold"></a>--}}
                    {{--<div class="itemCon">--}}
                        {{--<div id="Region" style="position:relative; height:360px;">--}}
                            {{--<div class="regionList" id="MapControl">--}}
                                {{--<ul>--}}
                                    {{--<li class="two">--}}
                                        {{--<p>发布成果<span id="count_application">{{ $all_count_application }}</span>个</p>--}}
                                    {{--</li>--}}
                                    {{--<li class="three">--}}
                                        {{--<p>学生党支部<span id="count_student_branch">{{ $all_count_student_branch }}</span>个--}}
                                        {{--</p>--}}
                                    {{--</li>--}}
                                    {{--<li class="four">--}}
                                        {{--<p>教师党支部<span id="count_teacher_branch">{{ $all_count_teacher_branch }}</span>个--}}
                                        {{--</p>--}}
                                    {{--</li>--}}
                                    {{--<li class="five">--}}
                                        {{--<p>参与高校<span id="count_university">{{ $all_count_throughed_university }}</span>个--}}
                                        {{--</p>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- ChinaMap -->

        <!-- hotRank -->
        <div class="rank">
            <div class="content">
                <ul>
                    @foreach($datas as $k => $data)
                        @if($data['rate']!=0)
                        <li>
                            <a href="{{ route('frontend.university.list', $k + 1) }}">
                                <h3>
                                    {{ $data['name'] }}
                                    {{--<span>{{ $data['rate'] }}</span>--}}
                                </h3>
                            </a>
                            {{--<div class="progress">--}}
                                {{--<span style="width: {{ $data['rate'] }}"></span>--}}
                            {{--</div>--}}
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- hotRank -->
    </div>
@endsection
