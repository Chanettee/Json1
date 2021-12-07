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
    <table>
        <thead>
            <tr>
                <th>ID</th><th>First Name</th><th>Last Name</th>
            </tr>
        </thead>
        <tbody id="tblStudent">
        </tbody>
    </table>
</body>
<script>
function loadJSON(){
    var url = "https://cj-android-demon.herokuapp.com/json1.php";

    $.getJSON(url)
        .done((data)=>{
            console.log(data);
        })
        .fail((xhr, status, err)=>{

        });
}

$(()=>{
    loadJSON();
});
</script>
</html>
