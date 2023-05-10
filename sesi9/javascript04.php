<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    <form>
        <div> menghitung luas segitiga</div>
    
<div>nilai alas
    <input type ="text"id ="txALAS">
   
<div>
<div>nilai tinggi
    <input type ="text" id="txTINGGI">
</div>
<div>nilai luas 
    <input type="text" id="txLUAS" disabled>
</div>

</div>
<button type="button"onclick="checknama()"> checkNama </button>
<div>

<form>
    <script>
        function HLUAS(){
            let alas = document.getElementById("txALAS").value;
            let tinggi= document.getElementById("txTINGGI").value;
            let luas = a*t/2;
            document.getElementById("txLUAS").value = L;
        }
        
</script>
</form>
</body>
</html>