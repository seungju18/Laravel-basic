<!DOCTYPE html>
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
                    <div class = "flex flex-row">
                        <p class = "mr-1"><a href="{{route('articles.edit', ['article' => $article->id])}}" class = "button rounded bg-blue-500 px-2 py-1 text-xs text-white"/>수정</a>
                        <form class = "mb-0" action="{{route('articles.destroy', ['article' => $article->id])}}" method= "POST">
                            @csrf
                            @method('DELETE')
                            <button class = "button rounded px-2 py-1 bg-red-500 text-xs text-white">삭제</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container p-5">
            {{$articles->links()}}
        </div>
    </body>
</html>