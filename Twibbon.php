<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/croppie.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/c2b9b7aca3.js"></script>


    <title>Edit Twibbon</title>
  </head>
  <body>
  <div class="container-fluid edit-twibbon">
  <div class="row justify-content-center">
    
    <div class="col-md-4">
      <div class="card kotak-panduan">
        <div class="card-body">
          <h5 class="card-title text-center">Panduan Penggunaan Twibbon</h5>
          <p><br>
          <ol type="numbered" style="padding-left:20px; text-align:justify;">
            <li>Klik Tombol <label for="imageLoader">Pilih Foto</label></li>
            <li>Pilih foto yang kamu inginkan</li>
            <li>Kamu bisa melakukan edit foto dengan cara <b>menggeser slider</b></li>
            <li>Jika sudah cocok, klik tombol <b>Preview</b></li>
            <li>Untuk Mendownload Klik tombol <b>Download</b> dan jika tidak klik tombol <b>Cancel</b></li>
            <li>Posting di Instagram kamu dengan caption yang sudah disediakan</li>
            <li>Selesai</li>
            </ol>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center mb-4">
      <div class="uploader">
        <canvas id="imageCanvas" class="image-canvas"></canvas>
        <div class="profile-pic-wrap">
          <div id="demo-basic"></div>
        </div>
        <div class="download-button">
          <input type="file" name="file" id="imageLoader" class="inputfile" accept="image/*" />
          <label for="imageLoader">Pilih Foto</label>
          <a class="basic-result button">Preview</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card kotak-panduan">
        <div class="card-body">
          <h5 class="card-title text-center">Ketentuan Caption : </h5>
          <p class="caption-twibbon" style="padding-left:20px; text-align:justify;font-size: 11px;"><br>
            Mimpi merupakan pijakan yang sangat luas apabila kita berdiri di atasnya sehingga akan menghasilkan sebuah cita - cita yang dapat dibuktikan kepada dunia bahwa kita mampu berpijak di atasnya.

            <br><br>Semangat wujudkan mimpi - mimpimu, jaga nama baik almamatermu dan berbanggalah menjadi Brawijaya Muda. 

            <br><br>Saya, Nama / Fakultas Angkatan 2019 sosok Adyatama 57 sang pemimpin yang akan berpijak di atas cakrawala dunia. Bangga menjadi keluarga RAJA Brawijaya pada tanggal 13 Agustus 2019.

            <br><br>Dengan kebersamaan yang diiringi dengan cinta disetiap langkahnya akan menciptakan persatuan di atas perbedaan.

            <br><br>Kita Satu Brawijaya !

            <b><br><br>#KaryaBrawijayaIndonesiaJaya<br>
            #RAJABrawijaya2019<br>
            #KitaSatuBrawijaya<br>
            #MabaUB2019<br>
            #Adyatama57</b>

          </p>
        </div>
      </div>
    </div>

  </div>
  </div>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/load-image.all.min.js')}}"></script>
  <script src="js/app.js"></script>
  </body>
</html>