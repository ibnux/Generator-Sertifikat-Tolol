<?php
$nama = strip_tags(urldecode($_GET['nama']));
if(empty($nama)){
    $nama = "Admin";
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sertifikat tolol untuk <?=$nama?></title>
    <meta name="title" content="Sertifikat tolol untuk <?=$nama?>">
    <meta name="description" content="Sertifikat tolol ini diberikan kepada <?=$nama?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tolol.ibnux.com/?nama=<?=urlencode($nama)?>">
    <meta property="og:title" content="Sertifikat tolol untuk <?=$nama?>">
    <meta property="og:description" content="Sertifikat tolol ini diberikan kepada <?=$nama?>">
    <meta property="og:image" content="https://tolol.ibnux.com/img.php?nama=<?=urlencode($nama)?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tolol.ibnux.com/?nama=<?=urlencode($nama)?>">
    <meta property="twitter:title" content="Sertifikat tolol untuk <?=$nama?>">
    <meta property="twitter:description" content="Sertifikat tolol ini diberikan kepada <?=$nama?>">
    <meta property="twitter:image" content="https://tolol.ibnux.com/img.php?nama=<?=urlencode($nama)?>">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-4">
                <img src="img.php?nama=<?=urlencode($nama)?>" class="img-fluid rounded">
            </div>
        </div>
    </div>
</body>

</html>