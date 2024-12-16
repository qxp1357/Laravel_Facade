<!DOCTYPE html>
<html>
    <header>
        <title>
            "타이틀"
        </title>
    </header>
    <body>
        <h1>{{$title ?? "타이틀 들어온게 없음"}}</h1>
        <h2>{{$msg ?? "메세지 없음"}}</h2>
        <h3>다른 페이지로 이동:</h3>
        <h4>Custom::getData ->{{\App\Services\Custom::getData()}}</h4>
        <ul>
            <li><a href="{{ route('root') }}">루트</a></li>
            <li><a href="{{ route('page') }}">페이지</a></li>
            <li><a href="{{ route('blog') }}">블로그</a></li>
        </ul>
    </body>
</html>