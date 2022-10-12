@extends('layouts.app')

@section('content')
<div class="trains">
  <h1 class="title">Treni:</h1>
  <div class="card-container">
    @foreach($trains as $train) 
    <div class="card">
      <h2>{{$train->company_name}}</h2>
      <p> <span class="card-text">Stazione di partenza :</span> {{$train->departure_station}}</p>
      <p><span class="card-text">Stazione d'arrivo:</span> {{$train->arrival_station}}</p>
      <p><span class="card-text">Orario di partenza :</span> {{$train->departure_time}}</p>
      <p><span class="card-text">Orario d'arrivo :</span> {{$train->arrival_time}}</p>
      <p><span class="card-text">Codice del treno :</span> {{$train->train_code}}</p>
      <p><span class="card-text">Numero di carrozze :</span> {{$train->wagons}}</p>
      <p><span class="card-text">In tempo :</span> {{$train->in_time ? 'si':'no'}}</p>
      <p><span class="card-text">Cancellato :</span> {{$train->canceled ? 'si':'no'}}</p>  
    </div>
    @endforeach

  </div>

</div>

@endsection