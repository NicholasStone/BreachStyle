@extends("frontend.party.common.detail-layout")

@section('after-styles-end')
    {{ Html::style('//cdn.bootcss.com/video.js/5.11.0/video-js.min.css') }}
@endsection

@section('after-scripts-end')
    {{ Html::script('//cdn.bootcss.com/video.js/5.11.0/video.min.js') }}
@endsection

@section('article')
    <img src="{{ asset('img/children_game_concept02.jpg') }}"/>
    <p>
        那时和你在一起，幸福真的很容易，我把你的手掌握得很紧，久久不能平静，后来我们的关系，被你悄悄结了冰，你离我的身边越来越远，我能够发现，每次难过不让你看见，怕你违背心愿，其实你不懂我的时间，都是用来想念，我哼着为你写过的每首歌，可能现在的你已经不记得，而我对你还是深深的爱着，又怎么能割舍，请原谅我对你伪装的冷漠，不是整的洒脱或想的太多，因为你让我懂最深的爱最沉默。</p>
@endsection