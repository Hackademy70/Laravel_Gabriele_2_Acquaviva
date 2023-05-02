<x-layout>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-img d-flex justify-content-center align-items-center font-title">MISTER TECH</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-12 col-md-4 d-flex effect-card">
                    <div class="card m-3">
                        <img src="/img/{{ $service['img'] }}" alt="Card image cap">
                        <div class="card-body mt-5 text-center">
                            <h2 class="card-title">{{ $service['service'] }}</h2>
                            <p class="h5">{{ $service['description'] }}</p>
                            <a class="fs-5 mt-5" href="tel:+">{{$service['number']}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


























</x-layout>
