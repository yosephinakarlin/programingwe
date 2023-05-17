<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">

    <div>

        NIM
        <input type="text" id="txNIM" name="NIM">
    </div>
    <div>

        NAMA
        <input type="text" id="txNAMA" name="NAMA">
    </div>
    <div>
         jenis kelamin
        <input type="radio" id="txJKEL" name="JKEL" value="L">laki-laki
        <input type="radio" id="txJKEL" name="JKEL" value="p">perempuan
    </div>
    <div>
        jurusan
        <select name="JURUSAN" id="txJUR">
            <option value="MTI">MTI</option>    
            <option value="SK">SK</option>    
            <option value="KAB">KAB</option>    
            <option value="DKV">DKV</option>    
            <option value="TIPAR">TIPAR</option>    
        </select>
    </div>
    <div>
    Hobi
    <input type="checkbox" name="hobi_1">Menghayal
    <input type="checkbox" name="hobi_2">Menghayal
    <input type="checkbox" name="hobi_3">Menghayal

    </div>
    <div>

        <button type="submit">kirim data </button>
    <div>
    <form>

    <script>
        function checkform(frm){

            let F = frm.elements;

            let nim=F.namedItem("NIM").value;
            let nama=F.namedItem("NAMA").value;
            let jkel=F.namedItem("JKEL").value;
            let jurusan=F.namedItem("JURUSAN").value;
            let h1 = F.namedItem("hobi_1").checked;
            let h2 = F.namedItem("hobi_2").checked;
            let h3 = F.namedItem("hobi_3").checked;
            
            


            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKE:  "+jkel);
            console.log("JUR: "+jurusan);
            console.log("Hobi menghayal: "+h1);
            console.log("Hobi menghayal: "+h2);
            console.log("Hobi menghayal: "+h3);
            return false;
        }
    </script>
   
</body>
</html>
