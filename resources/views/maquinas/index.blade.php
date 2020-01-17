@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h3 class="text-primary">Lista de Maquinas</h3></span>
                    <a href="/clientes/create" class="btn btn-primary"><i class="fas fa-user-plus"></i> Maquina</a>
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
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Toner</th>
                            <th scope="col">Nro de Serie</th>
                            <th scope="col">Cont de Copias</th>
                            </tr>
                        </thead>
                        <tbody class="buscar">
                        </tbody>
                    </table>
                  
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection