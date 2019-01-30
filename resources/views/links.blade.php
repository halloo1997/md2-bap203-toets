@extends('layouts.master')

@section('content')

@foreach($links as $link)
<p>{{$link->title}}</p>
<p>{{$link->description}}</p>
@endforeach

@endsection
