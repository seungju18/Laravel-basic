<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width , inital-scale=1.0">
        @vite(['resources/css/app.css', 'resources/css/app.js'])
    </head>
    <body>
        <div class = "container p-5">
            <h1 class = "text-2xl">글쓰기
            <form action="/articles" method = "POST" class="mt-3">
                @csrf
                <input type = "text" name = "body" class = "black w-full mb-2 rounded" value = "{{old('body')}}">
                @error('body')
                    <p class="text-xs text-red-500 mb-3">{{$message}} </p>
                @enderror
                <button class = "px-3 py-1 bg-black text-white rounded text-xs">저장하기</button>
            </form>
        </div>
    </body>
</html>