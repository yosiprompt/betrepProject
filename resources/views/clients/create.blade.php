@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Agregar cliente</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="post" action="{{ route('clients.store') }}">
             @csrf
             <div class="form-group">    
                 <label for="name">Nombre:</label>
                 <input type="text" class="form-control" name="name"/>
             </div>
   
             <div class="form-group">
                 <label for="phone">Celular:</label>
                 <input type="text" class="form-control" name="phone"/>
             </div>
   
             <div class="form-group">
                 <label for="email">Correo:</label>
                 <input type="text" class="form-control" name="email"/>
             </div>

             <div class="form-group">
                 <label for="sex">Sexo:</label>
                <select class="form-control" name="sex" id="sex">
                    <option value="N">--</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
             </div>

             <div class="form-group">
                <label for="flotilla">Flotilla:</label>
               <select class="form-control" name="flotilla" id="flotilla">
                   <option value="0">--</option>
                   <option value="1">Sí</option>
                   <option value="0">No</option>
               </select>
            </div>
             
             <div class="form-group">
                 <label for="RFC">RFC:</label>
                 <input type="text" class="form-control" name="RFC"/>
             </div>
             <div class="form-group">
                 <label for="card">Tarjeta:</label>
                 <input type="text" class="form-control" name="card"/>
             </div>
             <div class="form-group">
                 <label for="status">Estatus:</label>
                 <select name="status" class="form-control">
                     <option value="A">Activo</option>
                     <option value="I">Inactivo</option>
                     <option value="S">Suspendido</option>
                 </select>
             </div>
             <button type="submit" class="btn btn-primary">Guardar</button>
         </form>
     </div>
</div>
</div>
@endsection