<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
    <meta charset='utf-8'>

</head>
<body>

    <header>
      <form method='POST' action='/paragraph'>
  {{ csrf_field() }}
  <input type='text' name='paragraphs'>
  <input type='submit' value='Submit'>
</form>
    </header>




</body>
</html>
