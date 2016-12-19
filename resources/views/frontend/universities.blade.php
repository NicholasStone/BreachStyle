@extends('frontend.layouts.master')

@section('content')
    <!-- schoolList -->
    <div class="schoolList">
        <div class="content">
            <div class="region">
                <h3>{{ $province->name }} <span> {{ round($count_university?$count_universities_has_branch/$count_university:0, 4) * 100 }}
                        %</span>
                </h3>
                <div class="progress">
                    <span style="width: {{ $count_university?$count_universities_has_branch/$count_university:0 * 100 }}%;"></span>
                </div>
            </div>
            <p class="data">已参与学校<span>{{ $count_universities_has_branch }}</span>个，共
                <span>{{ $count_university }}</span>个。</p>
            <p class="data">已发布成果<span>{{ $count_application }}</span>个</p>
            <table cellspacing="0" cellpadding="0">
                @for($i = 0; $i < $universities->count(); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td class="schoolName">{{ link_to(route('frontend.branch.index', $universities[$i]->id), $universities[$i]->name) }}
                            <span style="float: right;padding-right: 20px">共 {{$universities[$i]->hasBranches or 0}}
                                个支部</span></td>
                        @break($i == $universities->count() - 1)
                        <td>{{ ++$i + 1 }}</td>
                        <td class="schoolName">{{ link_to(route('frontend.branch.index', $universities[$i]->id), $universities[$i]->name) }}
                            <span style="float: right;padding-right: 20px">共 {{$universities[$i]->hasBranches or 0}}
                                个支部</span></td>
                    </tr>
                @endfor
            </table>
        </div>
    </div>
    <!-- schoolList -->
@endsection

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/schoolList.css')) !!}
@endsection