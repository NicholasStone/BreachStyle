<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>支部名称</th>
        <th>支部类型</th>
        <th>支部联系电话</th>
        <th>支部通讯地址</th>
        <th>简介</th>
        <th>总人数</th>
        <th>支部书记</th>
        <th>支部书记简介</th>
        <th>所在学校</th>
        <th>是否已通过审核</th>
        <th>状态</th>
        <th>提交于</th>
        <th>通过于</th>
    </tr>
    @foreach($data as $key => $item)
        <tr>
            <td>{{ $item['id']}}</td>
            <td>
                {{ $item['v'] ? link_to($item['url'], $item['name']) : $item['name'] }}
            </td>
            <td>{{ $item['type'] }}</td>
            <td>{{ $item['tel'] }}</td>
            <td>{{ $item['address'] }}</td>
            <td>{{ $item['summary'] }}</td>
            <td>{{ $item['total'] }}</td>
            <td>{{ $item['secretary'] }}</td>
            <td>{{ $item['school'] }}</td>
            <td>{{ $item['verification'] }}</td>
            <td>{{ $item['status'] }}</td>
            <td>{{ $item['post-at'] }}</td>
            <td>{{ $item['pass-at'] }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>