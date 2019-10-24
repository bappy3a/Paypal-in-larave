@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered" id="ShowAllDataAjax">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key=>$product)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <th>{{ $product->name }}</th>
                                    <th>{{ $product->qty }}</th>
                                    <th>{{ $product->price }}</th>
                                    <th>{{ $product->status }}</th>
                                    <th>
                                        <form action="{{ route('updata',$product->id) }}" method="post" id="updata">
                                            @csrf
                                            <div class="form-group">
                                              <select onchange="doSelect(this)" class="form-control" name="status">
                                                <option value="-">----Select Option-----</option>
                                                <option value="publish">Publish</option>
                                                <option value="Unpublish">Un Publish</option>
                                              </select>
                                            </div>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="getalldata" data-url="{{ route('alldata') }}"></div>
<div class="load">
    <img src="{{ asset('lod.gif') }}" alt="">
</div>
<!-- Model Html Code -->
<div class="modal fade bd-example-modal-lg"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="{{ url('add/customer/data') }}" method="post" id="addnewproduct">
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
              </div>
              <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
              </div>
              <input type="number" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Qyr</span>
              </div>
              <input type="number" name="qty" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
    </form>
  </div>
</div>
@endsection
