@php($title = "Blog")

@extends("website.layouts.app")

@section("body")
<div class="header">
  {{ $data->title }}
</div>
<div class="content feature">
  <div class="icon-wrapper">
    <a class="icon-title back-indicator" href="{{ url('blog') }}">
      <i class="material-icons">chevron_left</i> Back</a>
    </a>
  </div>
  <div class="feature-card">
    <img src="{{ asset('uploads/' . $data->filename) }}" height="350px" width="100%">
    <div class="title">{{ $data->formattedType }}</div>
    <div class="subtitle">By {{ $data->author->display_name }}</div>
    <p>
      {{ $data->content }}
    </p>
  </div>
  <div class="right-align icon-wrapper" style="margin:20px auto">
    <span class="icon-title">Share this</span>
    <i class="material-icons bullet-color">brightness_1</i>
    <i class="material-icons bullet-color">brightness_1</i>
    <i class="material-icons bullet-color">brightness_1</i>
  </div>
  <div class="divider"></div>
  <div class="center-align title">Late Updates</div>
  <div class="row">
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ asset('img/sample.png') }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><b>Board Exam Passers</b><i class="material-icons right">more_vert</i></span>
          <p class="truncate">Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Board Exam Passers<i class="material-icons right">close</i></span>
          <p>Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ asset('img/sample.png') }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><b>Board Exam Passers</b><i class="material-icons right">more_vert</i></span>
          <p class="truncate">Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Board Exam Passers<i class="material-icons right">close</i></span>
          <p>Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ asset('img/sample.png') }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><b>Board Exam Passers</b><i class="material-icons right">more_vert</i></span>
          <p class="truncate">Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Board Exam Passers<i class="material-icons right">close</i></span>
          <p>Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="right-align">
    <a class="waves-effect btn-flat" href="#">
      <span class="icon-title">See More</span>
      <i class=" material-icons right">chevron_right</i>
    </a>
  </div>
</div>
@endsection
