<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Generate Barcode In Laravel</title>       
   <!-- Fonts -->
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>



    <div class="container">
      <div class="row justify-content-md-center">
        
        <h1 class="text-danger pt-4 text-center mb-4"><b>List of Products</b></h1>
        <hr>
        <div class="pb-2">
          <a href="/create" class="btn btn-success">New Post</a>

        </div>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Price</th>
                      <th scope="col">Barcode</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($products as $product)
                        
                    <tr>
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{!! DNS1D::getBarcodeHTML("$product->product_code",'UPCA',2,50) !!}
                         p - {{ $product->product_code }}
                        </td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    
                    @endforeach

                  </tbody>
                </table>
                
            
        </div>
      </div>
    </div>



  </body>
</html>



