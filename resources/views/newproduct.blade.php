<x-layout>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Lista dei prodotti suggeriti</h1>
                <br><h1>dai nostri clienti</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-3">
                    <x-cardnewproduct :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
