<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<script type="text/javascript" src="/js/jquery.js"></script>
<link href="" rel="stylesheet">

</head>
<body>
   <input type="button" name="" id="btn1" value="点我">
</body>
</html>
<script type="text/javascript">
	$(function(){
		$('#btn1').click(function(){
			$.get('/home/test/test17',function(data){
				console.log(data)
			},'json');
		});
	});
</script>