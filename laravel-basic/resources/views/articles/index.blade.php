<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width , inital-scale=1.0">
        @vite(['resources/css/app.css', 'resources/css/app.js'])
    </head>
    <body>
        <div class = "container p-5">
            <h1 class = "text-2xl mb-5">글목록</h1>
            <?php foreach($articles as $article):?>
                <div class = "background-white border rounded mb-3 p-3">
                    <p><?php echo $article->body;?></p>
                    <p><?php echo $article->created_at;?></p>
                </div>
            <?php endforeach;?>
        </div>
    </body>
</html>