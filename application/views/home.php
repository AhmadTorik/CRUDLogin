<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WELCOME</title>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>

<link rel="stylesheet" href="<?=base_url() ?>assets/css/utama.css">

<body onLoad="waktu()">
  <div class="welcome" ><center><h1>WELCOME</h1></center></div>
  <br>

    <center><div id="jam-digital" style="margin-bottom : 80px; margin-top :1px">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div></center>
       <div class="welcome"><center><h2 id="pos">To Kulin Tour</h2></center></div>


</body>
</html>
