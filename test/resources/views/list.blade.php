<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="green">
	list of books
   <a href="books/create">AddBook</a>
  <table border="1">
  	<tr>
      <th>name</th>
      <th>author</th>
      <th>action</th>
  	</tr>
  	
  	@foreach($getAll as $value)
  	<tr>
  	<td>{{$value->name}}</td>
  	<td>{{$value->author}}</td>
  	 
         <td>
  	 	         <form action="books/{{ $value->id }}/edit" method="GET">
                    @csrf
                    <button type="submit">Edit</button>
                </form>

  	 	
                <form action="books/{{ $value->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
  	 </td>
  	 @endforeach
    </tr>
  </table>

</body>
</html>