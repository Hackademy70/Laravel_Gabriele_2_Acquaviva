<x-layout>
    <div class="container-fluid mt-5 me-5">
        <div class="row">
            <div class="col-12 col-md-7 mt-3 text-center">
                <h1 class=" mt-5">Suggerisci un nuovo</h1>
                <br> <h1 class="mb-5">prodotto!</h1>
            </div>
            <div class="col-12 col-md-4">
                <form class="m-5" method="post" action="{{ route('product.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label fs-5">Nome del prodotto</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="my-5">
                        <label for="marca" class="form-label fs-5">Marca</label>
                        <input type="text" name="marca" class="form-control">
                    </div>
                    <label for="tipologia" class="form-label fs-5 mb-3">Tipologia</label>
                    <select class="form-select mb-3" name="tipologia" aria-label="Default select example">
                        <option selected>Seleziona</option>
                        <option value="1">Auricolari/Cuffie</option>
                        <option value="2">Computer mobili e fissi</option>
                        <option value="3">Cellulari</option>
                        <option value="3">Console</option>
                        <option value="3">Stampanti</option>
                        <option value="3">Componenti per setup pc</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
