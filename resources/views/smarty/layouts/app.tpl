<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:'Buyandbye'}</title>
    <link href="{asset path='/css/output.css'}" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    {include file="partials/header.tpl"}
    
    <main class="flex-grow container mx-auto px-4 py-8">
        {block name="content"}{/block}
    </main>

    {include file="partials/footer.tpl"}
</body>
</html> 