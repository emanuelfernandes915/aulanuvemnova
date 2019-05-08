<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<script>
    function verificar(){
    var s1 = document.getElementById("campo1").value;
    var s2 = document.getElementById("campo2").value;
    if (s1==s2) {
        alert("Valor Igual!");
    }

    }
</script>
<body>
    <p>Campo1</p>
    <input type="text" id="campo1">
    <p>Campo2</p>
    <input type="text" id="campo2">
    <br> </br>
    <button id="enter" onclick="verificar()">Enter</button>
</body>
</html>