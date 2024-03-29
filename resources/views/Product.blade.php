<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($products as $product)
                <p>id : {{ $product->product_id }} product : {{ $product-> product_name }}</p>
                
                price: {{ $product->price }} | stock : {{ $product->stock }}
                <!-- <p>details : {{ $product->product_details }} </p> -->
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>