@extends('layouts.clients')
@section('main_content')
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
</head>

<body>



  <!-- Body -->
  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante
          dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
          Fusce nec tellus sed augue semper porta. Mauris massa.</p>
      </div>
    </div>
  </div>

</body>
@endsection