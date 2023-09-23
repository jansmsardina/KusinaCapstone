<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <button onclick="addProduct()" class="btn btn-primary">Add Product</button> 
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products)
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->img }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->desc }}</td>
                                            <td> 
                                                <button onclick="editProduct('{{ $product->id }}')" class="btn btn-primary">Edit</button> 
                                                <button onclick="viewProduct('{{ $product->id }}')" class="btn btn-success">View</button> 
                                                <button onclick="deleteProduct('{{ $product->id }}')" class="btn btn-danger">Delete</button>  
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
