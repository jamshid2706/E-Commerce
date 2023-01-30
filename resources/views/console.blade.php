<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artisan terminal</title>
    <style>
        .body{
            width: 100%;
            height: 80vh;
            background-color: black;
            color: greenyellow;
            overflow: scroll;
        }
        #code{
            color: greenyellow;
            background-color: black;
            border: none;
        }
    </style>
</head>
<body>

<div class="body">
<div class="actions">
    <label for="code">php artisan </label>
    <input id="code" onKeyDown="if(event.keyCode == 13)update()"/>
</div>
</div>
<div class="actions">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

    function update() {
        $value = {
            'search': $('#code').val(),
        }
        $.ajax({
            type: 'get',
            url: '{{URL::to('/console')}}',
            data: $value,
            success: function (data) {
                console.log(data);
                $('.body').html(data);
            },
        });
    }
</script>

</body>
</html>
