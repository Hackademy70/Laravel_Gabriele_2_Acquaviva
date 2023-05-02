<x-layout>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 bg-imgteam">
                <h1 class="text-center m-5 font-title">CHI SIAMO</h1>
            </div>
        </div>
    </div>
    {{-- Card  --}}
    <div class="container mt-5">
        <div class="row">
            @foreach ($staff as $element)
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <x-cardstaff
                       staffName="{{$element ['name']}}"
                       staffSurname="{{$element ['surname']}}"
                       staffRuolo="{{$element ['ruolo']}}"
                       staffImg="{{$element ['img']}}"
                    />
                </div>
            @endforeach
        </div>
    </div>








</x-layout>
