<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="btnJSON1">JSON1</button>
    Name  : <span id="fname"></span> <br>
    Sname : <span id="lname"></span> <br>
</body>
<script>
    function loadJson(){
        var url = "https://cj-android-demon.herokuapp.com/json1.php"
        $.get(url,(data, status)=>{
            console.log(data);
            var jData = JSON.parse(data);
            console.log(jData.fname);
            console.log(jData.lname);
            $("#name").text(jData.fname);
        
            });    ;
    }

    $(() => {
        $("#btnJSON1").click(loadJSON);
        });
</script>
</html>
