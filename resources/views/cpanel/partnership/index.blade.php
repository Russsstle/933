@extends("cpanel.layouts.app")

@section("body")
  <div class="card">
  <div class="card-body">
    <div class="table-responsive">
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
            <th>Timestamp</th>
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
              <td>{{ date("F j, Y, g:i a", strtotime($row->created_at) )}}</td>
            </tr>
           @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
