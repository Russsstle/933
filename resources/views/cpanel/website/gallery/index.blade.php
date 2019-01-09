@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/website/gallery/add') }}" role="button">
      <i class="fa fa-plus"></i>&nbsp;Add
    </a>
    <div class="table-responsive">
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Image</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td class="baguetteBox"><center>
                <a href="{{ asset("img/gallery/" . $row->filename) }}">
                  <img src="{{ asset("img/gallery/" . $row->filename) }}" alt="" height="250px">
                </a>
              </center>
              </td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/website/gallery/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="galleries/{{ $row->id }}" data-redirect="website/gallery">
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
