@extends('base')

@section('main')
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Clientes</h1> 
    <div>
        <a style="margin: 19px;" href="{{ route('clients.create')}}" class="btn btn-primary">Nuevo Cliente</a>
        </div>
        <form class="form-inline" action="{{ route('clients.index')}}">
            <div class="form-group mx-sm-3 mb-2">
              <label for="search_name" class="sr-only">Password</label>
              <input type="text" class="form-control" name="search_name" placeholder="Nombre">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
          </form>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Tarjeta</td>
          <td>Status</td>
          <td>Tarjeta Adicional</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->card}}</td>
            <td>{{$client->status}}</td>
        <td><input type="checkbox" name="aditionalCard" {{ ( count($client->aditionalCards) > 0) ? 'checked' : '' }} disabled/></td>
            <td>
                <a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary btn-sm fa fa-pencil-square-o"></a>
            </td>
            <td>
                @if ($client->flotilla == '1')
                    <a href="{{ route('cards.create',$client->id)}}" class="btn btn-success btn-sm fa fa-plus" ></a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $clients->links() }}
</div>
</div>
@endsection