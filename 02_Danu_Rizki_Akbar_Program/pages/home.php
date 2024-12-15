<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide</title>
    <!-- Link to offline Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    
    <style>
      body{
      background: url(p.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
}
    </style>
</head>
<body>
 <!-- home star -->
     <section class="jumbotron">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <div class="jumbotron">
              <img class="rounded-circle" src="https://i.pinimg.com/736x/04/2d/2d/042d2d364c9f0f720be50048a64b8563.jpg" alt="" style="width: 350px; height: 350px;">
              <p class="lead fw-bold fs-5 mt-3 text-white" >Open trip Danu adalah perjalanan wisata terbuka untuk umum, diorganisir oleh agen perjalanan, dengan biaya dibagi di antara peserta.</p>
  <hr class="my-4">
  <p class="text-white" >Ayo Pesan Sekarang...Tunggu Apalagi</p>
  <a class="btn btn-primary btn-lg" href="#" onclick="MountainPage()" role="button">Cek list</a>
</div>
          </div>
        </div>
      </div>
     </section>
    <!-- home end -->
 <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.7/dist/notiflix-aio-3.2.7.min.js"></script>
<script>
  // Fungsi untuk memuat halaman mountain
        function MountainPage() {
            $.ajax({
                url: "pages/mountain.php", // Ganti dengan path file Booking
                dataType: "html",
                success: function (response) {
                    $('#contents').html(response); // Muat konten Booking
                },
                error: function () {
                    Notiflix.Notify.failure('Gagal memuat halaman Booking');
                }
            });
        }
</script>
</body>
</html>
