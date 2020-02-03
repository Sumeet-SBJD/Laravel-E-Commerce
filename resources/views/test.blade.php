<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ url('get') }}" method="post">
	@csrf
	<input type="text" name="txt">
	<input type="submit">
	
</form>
</body>
</html>