<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	#pull_right{
text-align:center;
}
.pull-right {
/*float: left!important;*/
}
.pagination {
display: inline-block;
padding-left: 0;
margin: 20px 0;
border-radius: 4px;
}
.pagination > li {
display: inline;
}
.pagination > li > a,
.pagination > li > span {
position: relative;
float: left;
padding: 6px 12px;
margin-left: -1px;
line-height: 1.42857143;
color: #428bca;
text-decoration: none;
background-color: #fff;
border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
margin-left: 0;
border-top-left-radius: 4px;
border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
border-top-right-radius: 4px;
border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
color: #2a6496;
background-color: #eee;
border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
z-index: 2;
color: #fff;
cursor: default;
background-color: #428bca;
border-color: #428bca;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
color: #777;
cursor: not-allowed;
background-color: #fff;
border-color: #ddd;
}
.clear{
clear: both;
}
</style>
</head>
<body>
	<table>
		
		<thead>
			<tr>
				<th>姓名：</th>
				<th>年龄：</th>
				<th>班级：</th>
				<th>邮箱：</th>
				<th>头像：</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $v)
			<tr>
				<th>{{$v -> username}}</th>
				<th>{{$v -> age}}</th>
				<th>{{$v -> class}}</th>
				<th>{{$v -> email}}</th>
				<th><img src="{{ltrim($v -> avatar,'.')}}" width="80px" alt="头像"></th>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>当前页条数：{{$data -> count()}},共有：{{$data -> total()}}</p>
		{{$data -> links()}}
</body>
</html>