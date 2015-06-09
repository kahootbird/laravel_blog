@extends('app')

@section('content')
Test
</br>
@foreach ($people as $person)
BLARGH {{ $person }}
@endforeach
HA