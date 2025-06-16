<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 5px; background: #f5f5f5; margin: 2px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{$title}</h1>
        <p>{$message}</p>
        
        <h2>Users:</h2>
        <ul>
            {foreach $users as $user}
                <li>{$user}</li>
            {/foreach}
        </ul>
        
        <p>Current time: {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}</p>
    </div>
</body>
</html>