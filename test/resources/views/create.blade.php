<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="post" action="/books">
  	@csrf

  	name:<input type="text" name="name">
  	author:<input type="text" name="author">
  	<button type="submit">submit</button>
  </form>
</body>
</html>