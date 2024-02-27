<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width , inital-scale=1.0">
        @vite(['resources/css/app.css', 'resources/css/app.js'])
    </head>
    <body>
        <div class = "container p-5">
            <h1 class = "text-2xl mb-5">글목록</h1>
            @foreach($articles as $article)
                <p class = "mb-1">{{$loop -> index}}</p>
                <div class = "background-white border rounded mb-3 p-3">
                    <p>{{ $article->body}}</p>
                    <p>{{ $article->created_at}}</p>
                </div>
            @endforeach
        </div>
        <div class="container p-5">
            {{$articles->links()}}
        </div>
    </body>
</html>