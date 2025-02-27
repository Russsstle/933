@php($title = "Partnerships")

@extends("website.layouts.app")

@section("body")
<div class="header">
  Partnerships
</div>
<div class="content" style="overflow:hidden">
  <h5>Interested in partnering with us?<br/>Fill up the form / note and we'll get back to you soon!</h5>
  <form name="frmAddData" data-url="partnerships" data-redirect="partnerships">
     @csrf
    <div class="input-field">
      <input id="name" name='name' type="text" class="validate">
      <label for="name">Name</label>
    </div>
    <div class="input-field">
      <input id="email" name='email' type="email" class="validate">
      <label for="email">Email</label>
    </div>
    <div class="input-field">
      <input id="position" name='position' type="text" class="validate">
      <label for="position">Position</label>
    </div>
    <div class="input-field">
      <input id="school" name='school' type="text" class="validate">
      <label for="school">School</label>
    </div>
    <div class="input-field">
      <input id="organization" name='organization' type="text" class="validate">
      <label for="organization">Organization</label>
    </div>
    <div class="input-field">
      <input id="type_of_organization" name='organization_type' type="text" class="validate">
      <label for="type_of_organization">Type of Organization</label>
    </div>
     <button class="waves-effect waves-light btn right" type="submit">Send</button>
   </form>
</div>
@endsection
