<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/category/index') }}">Home category</a></li>
            <li><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
            <li><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
            <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
            <li><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
        </ul>
    </nav>
    <h1>{{ $judul }}</h1>

    <ul>
        <?php foreach ($products as $item): ?>
            <li>{{ $item['name'] }} - {{ $item['description'] }}</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
