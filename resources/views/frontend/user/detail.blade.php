@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/personal.css')) !!}
    <style>
        .notify {
            border-collapse: collapse;
            border: solid 2px red;
            width: 93%;
            text-align: center;
        }

        .notify td,
        .notify th {
            border: solid 1px red;
        }

        .notify tr {
            height: 30px;
        }
    </style>
@endsection

@section('content')

    <!-- personal -->
    <div class="personal">
        <div class="content">
            <div class="idCard">
                <ul class="idCardList">
                    <li class="headImg">
                        <div class="headImgBox">
                            <img src="{{ asset($user['avatar']) }}"/>
                        </div>
                    </li>
                    <li class="personInfo">
                        <ul>
                            <li>
                                <p><i class="iconfont">&#xe60b;</i>姓名 : <span>{{ $user['name'] }}</span></p>
                            </li>
                            <li>
                                <p><i class="iconfont">&#xe607;</i>办公电话 : <span>{{ $user['tel_work'] }}</span></p>
                            </li>
                            <li>
                                <p><i class="iconfont">&#xe601;</i>绑定手机 : <span>{{ $user['tel'] }}</span></p>
                            </li>
                            <li>
                                <p><i class="iconfont">&#xe600;</i>绑定邮箱 : <span>{{ $user['email'] }}</span></p>
                            </li>
                        </ul>
                    </li>
                    <li class="certify">
                        <a id="editPersonal">修改资料<span class="iconfont">&#xe60d;</span></a>
                    </li>
                </ul>
                <div class="bindDepart">
                    <p>
                        <i class="iconfont">&#xe60c;</i>党支部 : <span>{{ $user['branch']['name'] or "未加入党支部" }}</span>
                    </p>
                    @if(empty($user['branch_id']))
                        <a id="bind">加入党支部</a>
                        <a href="{{ route('frontend.branch.establish') }}">创建党支部</a>
                    @endif
                </div>
            </div>
            @if($notifies->count())
            <div class="idCard" style="margin-top: 30px; padding: 30px">
                <table class="notify">
                    <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="85%">消息</th>
                        <th width="10%">标记为</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notifies as $num => $notify)
                        <tr>
                            <td>{{ $num + 1 }}</td>
                            <td>
                                <a href="{{ $notify->url }}" @if(!$notify->read) style="font-weight: 800" @endif>{{ $notify->text }}</a>
                            </td>
                            <td>
                                @if($notify->read)
                                    <a href="{{ route('frontend.notify.unread', $notify->id) }}">未读</a>
                                @else
                                    <a href="{{ route('frontend.notify.read', $notify->id) }}">已读</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
    <!-- personal -->
@endsection

@section('before-scripts-end')

    <!-- floatPanel -->
    <div class="floatPanel" id="panel">
        <div class="editPanel" id="editPanel">
            <form action="{{ route('frontend.user.profile.update') }}" method="post">
                {!! csrf_field() !!}
                <h3>修改个人资料</h3>
                <p>姓名 :</p>
                <input type="text" name="name" id="name" value="{{ $user['name'] }}"/>
                <p>办公电话 :</p>
                <input type="text" name="tel" id="tel" value="{{ $user['tel'] }}"/>
                <div class="BtnList">
                    <button type="submit" id="editSave">保 存</button>
                    <button type="button" id="editCancel">取 消</button>
                </div>
            </form>
        </div>
        @if(empty($user['branch_id']))
            <div class="bindPanel" id="bindPanel">
                <form method="post" action="{{ route('frontend.user.profile.join') }}">
                    {!! csrf_field() !!}
                    <h3>绑定党支部</h3>
                    <p>请选择党支部 :</p>
                    <select name="bind">
                        <option selected="selected" style="width: 280px;">请选择党支部</option>
                        @foreach($branches as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('frontend.branch.establish') }}" class="createDepart">创建党支部</a>
                    <div class="BtnList">
                        <button type="submit" id="bindSave">保 存</button>
                        <button type="button" id="bindCancel">取 消</button>
                    </div>
                </form>
            </div>
            <script>
                var bindPanel = document.getElementById('bindPanel');
                var bindBtn = document.getElementById('bind');
                var bindCancel = document.getElementById('bindCancel');
                bindBtn.onclick = function () {
                    panel.style.display = "block";
                    bindPanel.style.display = "block";
                }
                bindCancel.onclick = function () {
                    panel.style.display = "none";
                    bindPanel.style.display = "none";
                }
            </script>
        @endif
    </div>
    <!-- floatPanel -->
@endsection

@section('after-scripts-end')
    <script type="text/javascript">
        var panel = document.getElementById('panel');
        var editBtn = document.getElementById('editPersonal');
        var editPanel = document.getElementById('editPanel');
        var editCancel = document.getElementById('editCancel');

        editBtn.onclick = function () {
            panel.style.display = "block";
            editPanel.style.display = "block";
        }
        editCancel.onclick = function () {
            panel.style.display = "none";
            editPanel.style.display = "none";
        }


    </script>
@endsection