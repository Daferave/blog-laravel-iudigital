@extends('layouts.app')
@section('content')
    <div class="container">
        Listar categorías existentes
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                      <th>Columna 1</th>
                      <th>Columna 2</th>
                      <th>Columna 2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="aling-bottom">
                        <td>Texto 1</td>
                        <td>Texto 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                    </tr>
                    <tr class="aling-bottom">
                        <td>Texto 1</td>
                        <td>Texto 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                    </tr>
                  </tbody>
            </table> 
        </div>
    </div>
@endsection