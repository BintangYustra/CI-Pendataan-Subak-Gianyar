<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Londrina+Solid:wght@100;300;400;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Pen+Script&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {margin-top: 20px;}</style>
    <style>table {width: 100%; border-collapse: collapse;} th, td {border: 1px solid #ddd;padding: 8px;text-align: left;}th {background-color: #f2f2f2;}</style>
    <style>body {background-image: url('IMG/background.3jpg.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; }</style>
  </head>
  <body>
<div class="landing-header bg-white">
  <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><img src="IMG/favicon.ico" alt="" style="max-width: 50px; max-height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Beranda</a>
        <a class="nav-link" href="<?= base_url(); ?>Tentang">Tentang</a>
        <a class="nav-link" href="<?= base_url(); ?>Petani">Data Subak</a>
        <!-- <a class="nav-link" href="<?= base_url(); ?>Laporan">Laporan & Statistik</a> -->
        <a class="nav-link" href="<?= base_url(); ?>Regulasi">Regulasi</a>
        <a class="nav-link" href="<?= base_url(); ?>Pengajuan">Pengajuan</a>
        <a class="nav-link" href="<?= base_url(); ?>Contact">Contact</a>
      </div>
    </div>
  </div>
  </div>
</nav>