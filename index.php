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
        var url = "https://cj-android-demon.herokuapp.com/json2.php"
        $.get(url,(data, status)=>{
            console.log(data);
            console.log(data[1]);
            console.log(data[2]);
            //$("#name").text(jData.fname);
            });    
        .fail((xhr, status, err)=>{
            });
    }

    $(() => {
        $("#btnJSON1").click(loadJSON);
        });
</script>
</html>
