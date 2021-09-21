@extends('welcome')    

@section('content')

<div class="container">


<a href="{{url('producto/create')}}" class="btn btn-success">Registrar nuevo producto</a>
<br/>
<br/>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            
            
            <td>
            
            <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt=""></td>
            <td>{{$producto->Nombre}}</td>
            
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
{!! $productos->links() !!}
</div>
@endsection