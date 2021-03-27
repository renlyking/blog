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
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

    <form action="" method="post">
		
		<p>姓名：<input type="text" value="" name="username"></p>
		<p>年龄：<input type="text" value="" name="age"></p>
		<p>班级：<input type="text" value="" name="class"></p>
		<p>电话：<input type="text" value="" name="telephone"></p>
		<p>学号<input type="text" value="" name="sid"></p>
		<p>电子邮件<input type="text" value="" name="email"></p>
		<p>验证码<input type="text" value="" name="captcha">
		<img src="{{captcha_src('math')}}" onclick="this.src=this.src+'?'+Math.random()" id="img">
		<a href="#" onclick="document.getElementById('img').onclick()">换一张?</a></p>
		
		{{csrf_field()}}
		<input type="submit" name="提交">
	</form>
    
</body>
</html>