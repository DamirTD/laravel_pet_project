<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    @for ($i = 1; $i <= $totalGamePCs; $i++)
        <div class="playstation-square" style="border: 1px solid black; width: 50px; height: 50px; float: left; margin-right: 10px; margin-bottom: 10px;">
            <button style="width: 50px; height: 50px;" data-id="{{$i}}" @if($i > $availableGamePCs) disabled @endif>{{$i}}</button>
        </div>
        @if ($i % 3 == 0)
            <div style="clear: both;"></div>
        @endif
    @endfor
</div>

</body>
</html>
