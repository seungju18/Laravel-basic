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
                <div class = "background-white border rounded mb-3 p-3">
                    <p>{{ $article->body}}</p>
                    <p>{{ $article->user->name}}</p>
                    <p><a href="{{route('articles.show', ['article' => $article->id])}}"/>{{ $article->created_at?->diffForHumans()}}</p>
                    <p class = "mt-2"><a href="{{route('articles.edit', ['article' => $article->id])}}" class = "button rounded bg-blue-500 px-2 py-1 text-xs text-white"/>수정</a>
                </div>
            @endforeach
        </div>
        <div class="container p-5">
            {{$articles->links()}}
        </div>
    </body>
</html>