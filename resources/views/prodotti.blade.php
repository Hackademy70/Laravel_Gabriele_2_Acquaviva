<x-layout>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 bg-imgproducts">
                <h1 class="text-center m-5 product-title font-title">I NOSTRI PRODOTTI</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                @if (session('message'))
                    <div class="alert alert-success d-flex h5" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Card Products --}}
    <div class="container-fluid mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-3">
                    <x-cardproducts productsId="{{ $product['id'] }}" productsNome="{{ $product['nome'] }}"
                        productsPrezzo="{{ $product['prezzo'] }}" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
