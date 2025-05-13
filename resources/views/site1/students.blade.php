<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>
    <h1>welcome {{ $teacher }} </h1>
    @if (count($students) > 0)
        <p>your students is:</p>
        <ul>
            @foreach ($students as $std)
                <li>{{ $std }}</li>
            @endforeach
        </ul>
    @else
        <p>you dont have any students yet</p>
    @endif
    @auth

    @endauth
    @guest

    @endguest
    اي موقع بدي اعمله باخد التمبلت و بحط ال html و ال js في ال public عشان يقدر المتصفح يقراهم و بحط الصفحات تبعتي بال
    view و بعمل روابط و بعمل controllers
</body>

</html>
