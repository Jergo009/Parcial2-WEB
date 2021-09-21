@extends('welcome')

@section('content')

<div class="container">

<form action="{{ url('/producto/save') }}" method="post" action="" >

@csrf

@include('producto.form')
 

</form>
</div>
@endsection