<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <button id="btnJSON"> JSON 1 </button>
</body>
    <script>
        function loadJSON(){
            var url = "https://cj-android-demon.herokuapp.com/json1.php";
            $.get(url,(data,status)=>{
                console.log(data);

            });
        }

        $(()=>{
            $("#btnJSON").click(loadJSON);
        });
        
    </script>
    

</html>