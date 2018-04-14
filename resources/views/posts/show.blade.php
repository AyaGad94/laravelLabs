<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    


<div>
<fieldset>
  <legend>Post Info:</legend>
 Title:{{$post->title}}
 <br>
 Description:{{$post->description}}
 </fieldset>

</div>

<div>
<fieldset>
  <legend>Post creator Info:</legend>
 Name:{{$post->user->name}}
 <br>
 Email:{{$post->user->email}}
 <br>
 Created At:{{$post->user->created_at}}






 </fieldset>

</div>

</body>
</html>