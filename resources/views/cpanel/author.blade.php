@extends("cpanel.layouts.app")

@section("body")

<div class="author-content bg-white has-shadow" style="width:100%">
  <a class="btn btn-primary right" href="#" role="button">Add</a>
  <table id="author" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Position</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach(\App\Author::all() as $row)
        <tr>
          <td>{{$row->first_name}}</td>
          <td>{{$row->last_name}}</td>
          <td>{{$row->position}}</td>
          <td> <a  href="{{ url('cpanel/author_edit') }}"><i class="fa fa-pencil-square-o"></i></a>&nbsp&nbsp<a href="{{ url('cpanel/') }}"><i class="fa fa-trash"></i></a></td>
        </tr>
       @endforeach
    </tbody>
  </table>
</div>

@endsection