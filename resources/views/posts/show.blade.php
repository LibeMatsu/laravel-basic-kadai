<!DOCTYPE html>
<html lang="la">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
    <style>
        dl {
            display: grid;
            grid-template: auto / 5em 1fr;
            margin-left: 10px;
        }

        dt {
            font-weight: bold;
            grid-column: 1;
            text-align: center;
            margin-bottom: 5px;
        }

        dd {
            grid-column: 2;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <dl>
        <dt>ID</dt>
        <dd>{{ $posts->id }}</dd>

        <dt>タイトル</dt>
        <dd>{{ $posts->title }}</dd>

        <dt>本文</dt>
        <dd>{{ $posts->content }}</dd>

        <dt>作成日時</dt>
        <dd>{{ $posts->created_at }}</dd>

        <dt>更新日時</dt>
        <dd>{{ $posts->updated_at }}</dd>
    </dl>

</body>

</html>