<div class="card m-3">
    <div class="card-body text-center mt-5">
        <h2 class="card-title text-center">{{ $productsNome }}</h2>
        <p class="h5 text-center">{{ $productsPrezzo }}</p>
        <a href="{{ route('details.product', ['id' => $productsId]) }}" class="btn btn-info ">Scopri di più</a>
    </div>
</div>
