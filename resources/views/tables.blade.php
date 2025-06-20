<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Tables</title>
</head>
<body>
    <h1>Tables in Database: {{ $dbName }}</h1>
    <ul>
        @foreach ($tableList as $table)
            <li>{{ $table }}</li>
        @endforeach
    </ul>
</body>
</html>