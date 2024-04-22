@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
            
        </div>
                    
        
        <div>
            <a href="{{route('secretaria.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    
    <form action="{{route('secretaria.store')}}" method="POST"> <form action="{{route('secretaria.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Archivo" >
                </div>
            </div>
    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Archivo:</strong>
                        <input type="text" name="archive" class="form-control" placeholder="Area encargada" >
                    </div>
                </div>
            
             <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Archivo:</strong>
                    <!-- Aquí está el campo de subida de archivos -->
                     <input type="file" name="archivo" class="form-control">
                </div>
            </div>   




            
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..."></textarea>
                </div>
            </div>
                        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection