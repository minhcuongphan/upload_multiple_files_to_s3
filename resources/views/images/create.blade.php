<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form accept="*" method="POST" action="{{ route('images.store') }}">
        @csrf
        <input type="file" name="name" multiple="multiple"><br><br>
        <br>
        <input type="submit" value="Submit">
     </form>
</body>
</html>