@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Gestor de archivos</h2>
        </div>
        <div>
            
            <a href="{{route('secretaria.create')}}" class="btn btn-primary">Nuevo archivo</a>
        </div>
    </div>
    @if(Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}} <br>
        </div>
    @endif


    <div class="col-12 mt-4">
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>nombre</th>
                <th>archivo</th>
                <th>descripcion</th>
                
            </tr>
            @foreach ($secretarias as $secretaria)
                            
                <tr>
                    <td class="fw-bold">{{$secretaria->name}}</td>
                    <td>{{$secretaria->description}}</td>
                    <td>
                        {{$secretaria->archive}}
                    </td>
                    <td>
                        <span class="badge bg-warning fs-6">{{$secretaria->status}}</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>

                        <form action="{{route('secretaria.destroy',$secretaria->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        
                        
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$secretarias->links()}}
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
</div>
@endsection