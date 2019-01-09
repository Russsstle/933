@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/services/add') }}" role="button">
      <i class="fa fa-plus"></i>&nbsp;Add
    </a>
    <div class="table-responsive">
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Branch</th>
            <th>Name</th>
            <th>Description</th>
            <th>Rates</th>
            <th>Image</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td>{{ $row->branch->name }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->description }}</td>
              <td class="preline">{{ join("\n", array_map(function($x){ return $x["name"] . " | " . $x["price"]; }, $row->rates->toArray())) }}</td>
              <td class="baguetteBox">
                <a href="{{ asset("uploads/" . $row->filename) }}">
                  <img class="material-boxed" src="{{ asset("uploads/" . $row->filename) }}" alt="" height="80px">
                </a>
              </td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/services/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="services/{{ $row->id }}" data-redirect="services">
                  <i class="fa fa-trash"></i>&nbsp; Delete
                </a>
              </td>
            </tr>
           @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
