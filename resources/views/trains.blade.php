@extends('layouts.app')

@section('content')
<div class="container py-5">
      <h1 class="text-center py-2">Train List</h1>
      <div class="row row-cols-3 g-4">
            @forelse($trains as $train)
            <div class="col">
                  <div class="card">
                        <div class="card-body">
                              <h5 class="card-title">Azienda: {{ $train->company }}</h5>
                              <h5 class="card-title">Partenza da: {{ $train->departure_station }}</h5>
                              <h5 class="card-title">Arrivo a: {{ $train->arrival_station }}</h5>
                              <h5 class="card-title">Orario partenza: {{ $train->departure_time }}</h5>
                              <h5 class="card-title">Orario arrivo: {{ $train->arrival_time }}</h5>
                              <h5 class="card-title">Codice Treno: {{ $train->train_code }}</h5>
                              <h5 class="card-title">Carrozze: {{ $train->number_of_carriages }}</h5>



                        </div>
                  </div>
            </div>
            @empty
            <div class="col">
                  <div class="card">
                        <div class="card-body">
                              <h6 class="card-text">No movies found!</h6>
                        </div>
                  </div>
            </div>
            @endforelse
      </div>
</div>
@endsection