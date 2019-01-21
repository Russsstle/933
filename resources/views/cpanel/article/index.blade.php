@extends("cpanel.layouts.app")

@section("body")
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary btn-sm pull-right" href="{{ url('cpanel/articles/add') }}" role="button">
      <i class="fa fa-plus"></i>&nbsp;Add
    </a>
    <div class="table-responsive">
      <table class="datatable table table-striped table-bordered">
        <thead>
          <tr>
            <th width="5%">ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Content</th>
            <th>Tags</th>
            <th>Image</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $id => $row)
            <tr>
              <td>{{  $id + 1  }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->author->user->profile->name }}</td>
              <td>{{ $row->date->format('F d, Y') }}</td>
              <td class="preline">{{ $row->content }}</td>
              <td>{{ join("\n", array_map(function($x){ return $x["content"]; }, $row->tags->toArray())) }}</td>
              <td class="baguetteBox">
                <a href="{{ asset("uploads/" . $row->filename) }}">
                  <img src="{{ asset("uploads/" . $row->filename) }}" alt="" height="80px">
                </a>
              </td>
              <td>
                <a class="btn btn-primary btn-sm btn-block" href="{{ url('cpanel/articles/' . $row->id.'/edit') }}">
                  <i class="fa fa-pencil-square-o"></i>&nbsp; Edit
                </a>
                <a class="btn btn-primary btn-sm btn-block btnDeleteData" href="javascript:void(0)" data-url="articles/{{ $row->id }}" data-redirect="articles">
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
