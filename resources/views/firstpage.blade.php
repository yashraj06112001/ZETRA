<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
 body{
background: linear-gradient(-45deg,#ee7752,#e73c7e,#23a6d5,#23d5ab);
background-size: 400% 400%;
}
#video{
    width:100px;
    height:100px;
}
</style>
</head>
<body>
    <div id="app">
        <welcome-component></welcome-component>
    </div>
    <div id="video">
            <video autoplay loop muted plays-inline > 
                <source src="video/stars.mp4" >
            </video>
        </div>
</body>
</html>