<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <style>
       body{
      background: url(ppp.jpg);
  background-repeat: no-repeat;
  background-size: 200rem 63rem;
       }
    </style>
  </head>

     <!-- mountain str  -->
      <section id="mountain">
        <div class="container">
        
        <div class="row mb-3">
          <div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/736x/eb/3d/f8/eb3df88b7785d101f714cfb118cc092f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rinjani</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/736x/82/04/90/820490aa92f5cde815229869ee5458e8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bromo</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>

  </div>
</div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/236x/06/0b/c6/060bc6eed9edd2eeb79a7d4e449dab80.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kerinci</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>

  </div>
</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/736x/87/9f/54/879f544eac8717b3ae2c87db88022e14.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sindoro</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>

  </div>
</div>
          </div><div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/236x/57/8e/12/578e12b981531180ca8a6c2f2a6feb66.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Leuser</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>

  </div>
</div>
          </div><div class="col-md-4 mb-3">
            <div class="card">
  <img src="https://i.pinimg.com/736x/ce/e7/04/cee704a903bd1371e0da7975d9e10583.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Merbabu</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a class="btn btn-primary btn-lg" href="#" onclick="UserPage()" role="button">Pesan</a>

  </div>
</div>
          </div>
        </div>
        </div>
      </section>
     <!-- mountain end  -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      // Fungsi untuk memuat halaman Booking
        function UserPage() {
            $.ajax({
                url: "pages/users/tabel.php", // Ganti dengan path file Booking
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
