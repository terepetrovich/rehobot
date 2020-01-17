@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <span><h4 class="text-primary">{{$cliente->apellido}}, {{$cliente->nombre}}</h4></span>
                    <a href="/clientes" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Volver</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                <form method="POST" action="{{route('clientes.update',$cliente->id)}}">
                    @csrf
                    @method('PUT')
                    @error('nombre')
                    <div class="alert alert-danger alert-dismissible fade show">
                      El nombre es Obligatorio
                      <button type="button" class="close" data-dismis="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @enderror
                  @error('apellido')
                    <div class="alert alert-danger alert-dismissible fade show">
                      El apellido es Obligatorio
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @enderror
                    <div class="form-inline ">
                    <label for="nombre" class="col-2">Nombre</label>
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2 col-4"
                    value="{{$cliente->nombre}}"
                    />
                    
                    <label for="apellido" class="col-2">Apellido</label>
                    <input
                      type="text"
                      name="apellido"
                      placeholder="Apellido"
                      class="form-control mb-2 col-4"
                      value="{{$cliente->apellido}}"
                    />
                    </div>
                    <div class="form-inline">
                    <label for="direccion" class="col-2">Direccion</label>
                    <input
                          type="text"
                          name="direccion"
                          placeholder="Direccion"
                          class="form-control mb-2 col-6"
                          value="{{$cliente->direccion}}"
                        />
                    </div>
                    <div class="form-inline">
                        <label for="codpostal" class="col-2">Cod. Postal</label>
                        <input
                          type="text"
                          name="codpostal"
                          placeholder="Codigo postal"
                          class="form-control mb-2 col-4"
                          value="{{$cliente->codpostal}}"
                        />
                    </div>
                    <div class="form-inline">
                        <label for="localidad" class="col-2">Localidad</label>
                        <input
                          type="text"
                          name="localidad"
                          placeholder="localidad"
                          class="form-control mb-2 col-4"
                          value="{{$cliente->localidad}}"
                        />
                        <label for="provincia" class="col-2">Provincia</label>
                        <input
                              type="text"
                              name="provincia"
                              placeholder="Provincia"
                              class="form-control mb-2 col-4"
                              value="{{$cliente->provincia}}"
                            />
                    </div>
                        <div class="form-inline">
                                <label for="email" class="col-2">Mail</label>
                            <input
                              type="text"
                              name="email"
                              placeholder="Mail"
                              class="form-control mb-2 col-4"
                              value="{{$cliente->email}}"
                            />
                            <label for="telefono" class="col-2">Telefono</label>
                            <input
                              type="number"
                              name="telefono"
                              placeholder="Telefono"
                              class="form-control mb-2 col-4"
                              value="{{$cliente->telefono}}"
                            />
                            </div>
                            <div class="form-inline">
                            <label for="cuit" class="col-2">CUIT</label>
                            <input
                              type="text"
                              name="cuit"
                              placeholder="CUIT"
                              class="form-control mb-2 col-6"
                              value="{{$cliente->cuit}}"
                            />
                            </div>
                    <button class="btn btn-primary btn-block" type="submit">Guardar Cambios</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection