
    @extends('clients.layout.clients')

    @section('main_content')
        <h1> them san pham </h1>
        <div class="container">
            <form action="" method="post" >
                @error('msg')
                  <div class="alert alert-danger text-center">{{ $message }}</div>
                @enderror
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="mb-3">
                  <label for="product_name" class="form-label">Ten san pham</label>
                  <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Ten san pham...">
                  @error('product_name')
                      <span style="text-danger" >{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Gia</label>
                  <input type="text" name="price" class="form-control" id="price" placeholder="Gia...">
                    @error('price')
                        <span style="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    @endsection