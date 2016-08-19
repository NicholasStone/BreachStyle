@extends ('backend.layouts.master')

@section('after-styles-end')
    {{ Html::style(asset('css/jqxDatagrid.css')) }}
@endsection

@section('page-header')
    <h1>数据统计</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                数据统计
            </h3>
        </div>
        <div class="box-body">
            <div id="jqxgrid"></div>
            <br>
            <button class="btn btn-default btn-flat" id="excel">导出为Excel</button>
        </div>
    </div>
@endsection

@section('after-scripts-end')
    {{ Html::script('js/jqxDatagrid.js') }}
    {{ Html::script('js/globalize.culture.zh-CHS.js') }}
    <script>
        $(function(){$.ajax({url:"{{ route('admin.statistics.get') }}",data:{_token:"{{ csrf_token() }}"},method:"post",success:function(b){console.log(b);var a={localData:b,dataType:"json",dataFields:[{name:"id",type:"number"},{name:"type",type:"string"},{name:"verification",type:"bool"},{name:"fancy",type:"string"},{name:"created_at",type:"string"},{name:"updated_at",type:"string"},{name:"branch_name",type:"string",map:"branch>name"},{name:"branch_type",type:"string",map:"branch>type"},{name:"university",type:"string",map:"branch>university>name"},{name:"province",type:"string",map:"branch>university>province>name"}]};$("#jqxgrid").jqxGrid({width:"100%",theme:"bootstrap",source:new $.jqx.dataAdapter(a),filterable:true,sortable:true,pageable:true,autoshowfiltericon:true,localization:"de",columns:[{text:"#",datafield:"id"},{text:"类型",datafield:"type"},{text:"审核结果",datafield:"verification",cellsrenderer:function(e,c,d){return d?"<span style='background-color: darkgreen;position: absolute;top: 7px;left: 10px; border-radius: 3px; color: white;padding: 0 5px 0 5px'>通过</span>":"<span style='background-color: darkred;position: absolute;top: 7px;left: 10px; border-radius: 3px; color: white;padding: 0 5px 0 5px'>未通过</span>"}},{text:"支部类型",datafield:"branch_type"},{text:"点赞次数",datafield:"fancy"},{text:"提交时间",datafield:"created_at"},{text:"审核通过时间",datafield:"updated_at"},{text:"支部名称",datafield:"branch_name"},{text:"所在学校",datafield:"university"},{text:"所在地区",datafield:"province"}]})}})});
        $("#excel").click(function () {$("#jqxgrid").jqxGrid('exportdata', 'xls', '数据统计');});
    </script>
@endsection