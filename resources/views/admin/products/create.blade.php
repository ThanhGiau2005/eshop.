@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('admin.products.store')}}" method="post">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection