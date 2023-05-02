<x-layout>
    {{-- Form --}}
    <div class="container-fluid mt-5 me-5">
        <div class="row">
            <div class="col-12 col-md-7 mt-3 text-center">
                <h1 class=" my-5">Contattaci</h1>
                <p class="h6 mt-4">Qualsiasi dato verrà acquisito rispettando la privacy come dall'Art n 123...</p>
            </div>
            <div class="col-12 col-md-4">
                <form class="m-5" action="{{ route('contactSend') }}" method="post">
                    @csrf
                    <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label fs-5">Nome e cognome</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fs-5">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="my-5">
                        <label for="exampleInputPassword1" class="form-label mb-3 fs-5">Spiega brevemente la motivazione
                            per cui ci contatti</label>
                        <textarea class="img-fluid" name="description" id="" cols="70" rows="10"></textarea>
                    </div>
                    </a><button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>










</x-layout>
