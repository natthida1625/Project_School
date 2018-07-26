<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test js</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <h1>Js</h1>
    <p id="demo">dd</p>
    @foreach($videos as $video)
        <p>{{ $video }}</p>
    @endforeach
    <script type="text/javascript">
        $(document).ready(function(){
            console.log('Hello world')
            var a = $('#demo').text()
            console.log(a)
        })
    </script>
</body>

</html>