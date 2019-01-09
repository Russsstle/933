@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/users/add') }}" role="button">
      <i class="fa fa-plus"></i>&nbsp;Add
    </a>
    <div class="table-responsive">
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Username</th>
            <th>Email Address</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td>{{ $row->username }}</td>
              <td>{{ $row->email_address }}</td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/users/' . $row->id . "/edit") }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp;Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="users/{{ $row->id }}" data-redirect="users">
                  <i class="fa fa-trash"></i>&nbsp;Delete
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
