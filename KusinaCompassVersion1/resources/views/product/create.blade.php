<!-- product.create.blade.php -->

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot> --}}

    
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/products/create') }}" method="POST">
                            @csrf

                            <div class="content-wrapper">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            @if(session()->has('msg'))
                                            <p class="alert alert-info">{{ session()->get('msg') }}</p>
                                            @endif
                                            
                                            <table class="table table-hover overflow-auto block">
                                                <thead>
                                                    <tr class="bg-slate-800">
                                                        @foreach(["Image", "Name", "Price", "Description", "Created at", "", ""] as $heading)
                                                            <th class="font-bold text-white">{{$heading}}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </x-app-layout> --}}
