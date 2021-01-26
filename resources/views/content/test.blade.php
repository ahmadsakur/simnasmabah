@extends('layouts.adminpanel')
@section('content')
<div class="container">
   <h3 class="text-center">Test</h3>
   @foreach ($konsol as $item)
   <h1>{{$item->nama}}</h1>
   <br>
   <h1>{{$item->agama}}</h1>
   <br>
   @endforeach
</div>
@endsection