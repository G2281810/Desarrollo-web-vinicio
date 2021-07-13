
<html>
<head>
    <title>Laravel 8 | QR Code Scanner</title>
    <script src="https:://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https:://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
    <video id="preview"></video>
    <script type="text/javascript">
    var scanner = new Instascan.Scanner({video: document.getElementById('preview')});
    scanner.addListener('scan', function(content){
        console.log(content);
        alert(content);
    });
    Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length > 0){ scanner.start(cameras[0]);}
        else{console.error('No funcionan las camaras'); }
    }).catch(function(e){
        console.error(e);
    });
    </script>
</body>
</html>