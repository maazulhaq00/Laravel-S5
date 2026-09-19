<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Id is {{ $id }}</h1>

    <p>Name: {{ $name }}</p>
    
    <p>Hobbies Count: {{ count($hobbies) }} </p>

    @for($i=0; $i < count($hobbies); $i++)

        <p>The hobby is {{ $hobbies[$i] }} .</p>
    
    @endfor




</body>
</html>