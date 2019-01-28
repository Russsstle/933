@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/website/carousel/add') }}" role="button">
        <i class="fa fa-plus"></i>&nbsp;Add
      </a>
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Label Align</th>
            <th>Image</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->description }}</td>
              <td>{{ ucfirst($row->label_align) }}</td>
              <td class="baguetteBox">
                <a href="{{ asset("img/carousel/" . $row->filename) }}">
                  <img src="{{ asset("img/carousel/" . $row->filename) }}" alt="" height="80px">
                </a>
              </td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/website/carousel/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="carousel/{{ $row->id }}" data-redirect="website/carousel">
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
