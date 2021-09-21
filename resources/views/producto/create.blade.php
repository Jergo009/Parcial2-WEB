@extends('welcome')

@section('content')

<div class="container">

<form action="{{ url('/producto/save') }}" method="post" action="" enctype="multipart/form-data">

@csrf

@include('producto.form')
 

</form>
</div>
@endsection