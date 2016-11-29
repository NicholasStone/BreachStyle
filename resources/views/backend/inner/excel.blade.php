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
            <td>{{ $item['id']}}</td>
            <td>
                {{ $item['verification'] != 1 ? $item['name'] : link_to($item['url'], $item['']) }}
            </td>
            <td>{{ $item['type'] }}</td>
            <td>{{ $item['branch-name'] }}</td>
            <td>{{ $item['secretary'] }}</td>
            <td>{{ $item['work-tel'] }}</td>
            <td>{{ $item['branch-type'] }}</td>
            <td>{{ $item['school'] }}</td>
            <td>{{ $item['summary'] }}</td>
            <td>{{ $item['verification'] }}</td>
            <td>{{ $item['status'] }}</td>
            <td>{{ $item['post-at'] }}</td>
            <td>{{ $item['pass-at'] }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>