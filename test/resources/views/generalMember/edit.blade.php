<!DOCTYPE html>
<html>
<head>
	<title>create page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	  <input type="hidden" id="token" value="{{ csrf_token() }}">
  Name<input type="text" name="name" id="name">
  <input type="text" name="author" id="author">

  <input type="button" id="submit" class="btn btn-info" value="Submit" />
 
  
<script>
  $(document).ready(function(){
      $("#submit").click(function(){
        e.preventDefault()
        var token = $("#token").val();
        var name = $("#name").val();
        var author = $("#author").val();

      $.ajax(
      {
        type:"post",
        dataType:"json",
        data:{name:name,author:author,_token: token},
        url:"/books",
        success:function(data)
        {
          console.log('success');
        },
        error:function(error)
        {
      //console.warn(error.responseJSON.errors);
                  $.each(error.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span style="color: red;">'+error[0]+'</span>'));

            });
        }
      })
               
      });
  });
</script>
</body>
</html>