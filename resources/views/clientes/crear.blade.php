@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h3 class="text-primary">Nuevo Cliente</h3></span>
                    <a href="/clientes" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Volver</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/clientes">
                    @csrf
                    <div class="form-inline ">
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2 col-6"
                    />
                    <input
                      type="text"
                      name="apellido"
                      placeholder="Apellido"
                      class="form-control mb-2 col-6"
                    />
                    </div>
                    <input
                          type="text"
                          name="direccion"
                          placeholder="Direccion"
                          class="form-control mb-2 col-12"
                        />
                    <div class="form-inline justify-content-center">
                        <input
                          type="text"
                          name="codpostal"
                          placeholder="Codigo postal"
                          class="form-control mb-2 col-4"
                        />
                        <input
                          type="text"
                          name="localidad"
                          placeholder="localidad"
                          class="form-control mb-2 col-8"
                        />
                        </div>
                        <input
                              type="text"
                              name="provincia"
                              placeholder="Provincia"
                              class="form-control mb-2 col-6"
                            />
                        <div class="form-inline justify-content-center">
                            <input
                              type="text"
                              name="email"
                              placeholder="Mail"
                              class="form-control mb-2 col-6"
                            />
                            <input
                              type="number"
                              name="telefono"
                              placeholder="Telefono"
                              class="form-control mb-2 col-6"
                            />
                            </div>
                            <input
                              type="text"
                              name="cuit"
                              placeholder="CUIT"
                              class="form-control mb-2 col-6"
                            />
                    <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection