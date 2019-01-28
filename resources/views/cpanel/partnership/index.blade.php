@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/partnerships/add') }}" role="button">
        <i class="fa fa-plus"></i>&nbsp;Add
      </a>
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Position</th>
            <th>School</th>
            <th>Organization</th>
            <th>Type of Organization</th>
            <th>Logo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td>{{ $row->position }}</td>
              <td>{{ $row->school }}</td>
              <td>{{ $row->organization }}</td>
              <td>{{ $row->organization_type }}</td>
              <td class="baguetteBox"><center>
                <a href="{{ asset("uploads/" . $row->filename) }}">
                  <img src="{{ asset("uploads/" . $row->filename) }}" alt="" height="100px">
                </a>
              </center>
              </td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/partnerships/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="partnerships/{{ $row->id }}" data-redirect="partnerships">
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
