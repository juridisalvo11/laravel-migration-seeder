@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Color</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products_list as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->type}}</td>
              <td>{{$product->size}}</td>
              <td>{{$product->color}}</td>
              <td>{{$product->price}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
