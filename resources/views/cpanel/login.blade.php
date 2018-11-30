@extends("website.layouts.app")

@section("body")
<div class="row login">
  <div class="col m12 s12 center">
    <a href="{{ url('/') }}" class="brand-logo">
      <img src="{{ asset('img/logo.png') }}" alt="" class="responsive-img" height="20%" width="20%">
    </a>
    <div class="row">
      <form name="frmLogin" class="col s12">
        @csrf
        <div class="row">
           <div class="input-field col m12 s12">
            <i class="material-icons iconis prefix">account_box</i>
            <input id="icon_prefix" type="text" name="username" class="validate">
            <label for="icon_prefix">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col m12 s12">
            <i class="material-icons iconis prefix">enhanced_encryption</i>
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <label class="left" style="margin-left:15px">
          <input type="checkbox" name="remember_me">
          <span>Remember Me</span>
        </label>
        <button class="btn waves-effect waves-light right" type="submit" name="action">Log In</button>
      </form>
    </div>
  </div>
</div>
@endsection
