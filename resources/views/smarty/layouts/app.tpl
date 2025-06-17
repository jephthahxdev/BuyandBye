<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:'Buyandbye'}</title>
    <link href="{asset path='/css/output.css'}" rel="stylesheet">
</head>
<body class="min-h-screen">
    {include file="partials/header.tpl"}
    
    <main>
        {block name="content"}{/block}
    </main>

    {include file="partials/footer.tpl"}
</body>
</html> 