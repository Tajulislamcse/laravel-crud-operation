<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 create page
   
   <form action="/books" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"  required>
        <input type="text" name="author" placeholder="author" required>
        <input type="checkbox" name="status" value="1">
        <button type="submit">Update</button>
    </form>
   
</body>
</html>