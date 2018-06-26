
@extends('layouts.app')
@section('content')



<table class="table table-dark table-bordered table-hover ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item Name</th>        
      <th scope="col">Supplier</th>
      <th scope="col">Deliverd Date</th>
      <th scope="col">Expire Date</th>
      <th scope="col">Officer Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <div class="row">

     
      
         <tr>
          <td>{{$grv->id }}</td>
          <td>{{$grv->name}}</td>
          <td>{{$grv->supplier}}</td>
          <td>{{$grv->delevery_date}}</td>
          <td>{{$grv->expire}}</td>
          <td>{{$grv->officer}}</td>
          <td>{{$grv->quantity}}</td>
          <td><a href="/goods/{{$grv->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a></td>
        </tr>   
     

      
    </div>
  </tbody>
</table>

@endsection