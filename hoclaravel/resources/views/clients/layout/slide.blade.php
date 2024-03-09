<!-- Slide -->
<style>
  .carousel-item{
      width: 100%;
      height: 500px;
      background-color: blue
  }
  .carousel-item img{
      width: 100%;
      height: 100%;
      object-fit: cover
  }
</style>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/slide_1.jpg') }}" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide_2.jpg') }}" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide_3.jpg') }}" class="d-block w-100" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide_4.jpg') }}" class="d-block w-100" alt="Image 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>