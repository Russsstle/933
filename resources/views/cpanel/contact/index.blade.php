@extends("cpanel.layouts.app")

@section("body")
  <div class="card">
  <div class="card-body">
    <table class="datatable table table-striped table-bordered">
      <thead>
        <tr>
          <th width="5%">ID</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Timestamp</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $id => $row)
          <tr>
            <td>{{ $id + 1 }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->subject }}</td>
            <td>{{ $row->message }}</td>
            <td>{{ date("F j, Y, g:i a", strtotime($row->created_at) )}}</td>
          </tr>
         @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
