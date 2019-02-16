<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oblatia | Top</title>
    <meta name="description" content="言いたいけど言えない本音、オブラートに包んでしまいましょう">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <meta property="og:url" content="ページのURL" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:type" content="ページのタイプ">
    <meta property="og:description" content="記事の抜粋" />
    <meta property="og:image" content="画像のURL" />
    <meta name="twitter:card" content="カード種類" />
    <meta name="twitter:site" content="@Twitterユーザー名" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="appIDを入力">
</head>
<body>
<header>
    <h1>Oblatia</h1>
</header>
<h2>キャッチコピーをここに入れる</h2>
{!! Form::open(['url' => route('translate'), 'method' => 'post']) !!}
    <textarea id="translation" name="translation" placeholder="言いたいけど言えない本音を入力してください"></textarea>
    <button type="submit">本音をオブラートに包む</button>
{!! Form::close() !!}
<footer>
    <small>© 2019 Oblatia</small>
</footer>
</body>
</html>
