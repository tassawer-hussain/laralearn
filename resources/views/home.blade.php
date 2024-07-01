<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <h1>Hello {{ $name }}</h1>

    @if($name == "Tassawer")
        <h1>Hello Laravel Learner</h1>
    @else
        <h1>Hello User</h1>
    @endif
</body>
</html>