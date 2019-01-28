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
            <th>Message</th>
            <th>Timestamp</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $id => $row)
            <tr>
              <td>{{ $id + 1 }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td class="preline">{{ $row->message }}</td>
              <td>{{ date("F j, Y, g:i a", strtotime($row->created_at) )}}</td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/feedbacks/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="feedbacks/{{ $row->id }}" data-redirect="feedbacks">
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
