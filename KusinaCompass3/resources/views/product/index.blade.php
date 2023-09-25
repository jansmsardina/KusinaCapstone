<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Menu</h1>

        @if(session('success'))    
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Add a Product</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
                            <tbody>
                            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <img src="{{ asset('storage/Uploads/ProductUploads/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editProduct(id){
            window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCapstone/KusinaCompassVersion1//products/edit/" + id;
        }

        function viewProduct(id){
            window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCapstone/KusinaCompassVersion1/products/view/" + id;
        }

        function deleteProduct(id){
            if(confirm("Are you sure to delete this product?") == true){
                window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCapstone/KusinaCompassVersion1/products/delete/" + id;
            } 
        }

        function addProduct(){
            window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCapstone/KusinaCompassVersion1/products/create";
        }
    </script>
</x-app-layout>
