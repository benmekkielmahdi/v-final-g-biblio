
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" style="max-width: 300px;" src="http://127.0.0.1:8000/storage/1683669778.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bonjour</h5>
        <p>test</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" style="max-width: 300px;" src="http://127.0.0.1:8000/storage/1683678538.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" style="max-width: 300px;" src="http://127.0.0.1:8000/storage/1683678598.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
$('.carousel').carousel({
  interval: 3000
})

</script>