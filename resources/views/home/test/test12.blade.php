<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
	<form action="/home/test/test8" method="post">
		
		<p>姓名：<input type="text" value="" name="username"></p>
		<p>年龄：<input type="text" value="" name="age"></p>
		<p>班级：<input type="text" value="" name="class"></p>
		<p>电话：<input type="text" value="" name="telephone"></p>
		<p>学号<input type="text" value="" name="sid"></p>
		{{csrf_field()}}
		<input type="submit" name="提交">
	</form>
    
</body>
</html>