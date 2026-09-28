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

    @foreach($hobbies as $hobby)
        <p>{{ $hobby }}</p>
    @endforeach

    @if ($age > 18)
        <p>You are eligible to vote</p>
    @elseif ($age < 18)
        <p>You are not eligible to vote</p>    
    @else
        <p>You just turn 18, welcome new voter...</p>
    @endif


    






</body>
</html>