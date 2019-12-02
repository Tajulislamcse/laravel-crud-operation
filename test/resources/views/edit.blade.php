<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Edit page
   
   <form action="/books/{{ $fetchrecordbyid->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="name" value="{{ $fetchrecordbyid->name }}" required>
        <input type="text" name="author" placeholder="author" value="{{ $fetchrecordbyid->author }}" required>
        <button type="submit">Update</button>
    </form>
   
</body>
</html>