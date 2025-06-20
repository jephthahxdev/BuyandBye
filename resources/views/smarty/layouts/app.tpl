<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{csrf_token}">
    <title>{$title|default:'Buyandbye'}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="{asset path='/css/output.css'}" rel="stylesheet">
</head>
<body class="min-h-screen">
    {include file="partials/header.tpl"}
    
    <main>
        {block name="content"}{/block}
    </main>

    {include file="partials/footer.tpl"}
    <script src="/js/addtoCart.js"></script>
    <script src="/js/bb-config.js"></script>
</body>
</html> 