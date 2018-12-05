@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/article/add') }}" role="button">
      <i class="fa fa-plus"></i>&nbsp;Add
    </a>
    <table class="datatable table table-striped table-bordered">
      <thead>
        <tr>
          <th width="5%">ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Date</th>
          <th>Content</th>
          <th width="5%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach(\App\Article::join('authors', 'authors.id', '=', 'articles.author_id')->get() as $id => $row )
          <tr>
            <td>{{  $id + 1  }}</td>
            <td>{{ $row->title }}</td>
            <td>{!! $row->first_name.' '. $row->last_name!!}</td>
            <td>{{ $row->date }}</td>
            <td>{{ $row->content }}</td>
            <td>
              <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/edit/' . $row->id) }}">
                <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
              </a>
              <a class="btn btn-primary btn-sm btn-block" href="javascript:void(0)" data-id>
                <i class="fa fa-trash"></i>&nbsp; Delete
              </a>
            </td>
          </tr>
         @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
