@extends('admin.layout')

@section('content')
@if (Session::has('massage'))
    <h3>{{ Session::get('massage')}}</h3>
    
@endif
<div class="row">
    <div class="col-rg3">
        <a href="{{ route('admin.products.create') }}" class="btn-default"> Create new</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hoverable Table</h4>
            <p class="card-description"> Add class <code>.table-hover</code> </p>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($productList as $product)
                <tr>
                    <td>#</td>
                    <td>{{ $product->name }}</td>
                    <td class="text-danger"> {{ $product->email }} <i class="mdi mdi-arrow-down"></i>
                    </td>
                    <td>
                    <a class="badge badge-danger" href="{{ route('admin.products.edit', $product->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.products.destroy', $product->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection