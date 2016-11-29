<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>提交作品题目</th>
        <th>提交作品类型</th>
        <th>支部名称</th>
        <th>支部书记</th>
        <th>工作电话</th>
        <th>支部类型</th>
        <th>所属学校</th>
        <th>简介</th>
        <th>是否已通过审核</th>
        <th>作品状态</th>
        <th>提交于</th>
        <th>通过于</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><a href="{{ $item->deleted_at ? "已删除" : $item->getShowUrl() }}">{{ $item->name }}</a></td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->branch->name }}</td>
            <td>{{ $item->branch['relations']['secretary']['original']['name'] }}</td>
            <td>{{ $item->branch->tel }}</td>
            <td>{{ $item->branch->type }}</td>
            <td>{{ $item->branch->universit }}</td>
            <td>{{ $item->summary }}</td>
            <td>{{ $item->deleted_at ? "删除于" . $item->deleted_at : $item->verification ? "是" : "否" }}</td>
            <td>{{ $item->getStatus() }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->verification ? $item->updated_at : "未审核" }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>