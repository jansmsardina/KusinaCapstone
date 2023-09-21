<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Menu</h4>					
                           
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
                                <tbody>
                            </table>        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>