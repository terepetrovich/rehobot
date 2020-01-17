@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h3 class="text-primary">Lista de Clientes</h3></span>
                    <a href="/clientes/create" class="btn btn-primary"><i class="fas fa-user-plus"></i> Cliente</a>
                </div>
                
                <div class="card-body">
                                              
                        <div class="input-group mb-4">
                                <span class="mt-2 col-1"><i class="fas fa-search"></i>     </span>
                                <input id="filtrar" type="text" class="form-control col-6" placeholder="Buscar Cliente">
                              </div>  
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Mail</th>
                            <th scope="col">CUIT</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                            @foreach ($clientes as $cliente)
                            <tr class="clickable-row">
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->apellido }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td><a href="">{{ $cliente->email}}</a></td>
                                <td>{{ $cliente->cuit}}</td>
                                <td>
                                <a href="{{route('maquinas.index')}}" class="btn btn-primary">    <i class="fas fa-eye"></i></a>
                                    <a href="{{route('clientes.edit', $cliente)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <!--<a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>-->
                                    <form class="d-inline" action="/cliente" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$clientes->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection