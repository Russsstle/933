@extends("website.layouts.app")

@section("body")
<div class="header">
  Share us your Feedback
</div>
<div class="content feedback-content" style="overflow:hidden">
  <form name="frmAddData" data-url="feedbacks" data-redirect="feedback">
    @csrf
    <div class="input-field">
      <input id="name" name="name" type="text" class="validate">
      <label for="name">Name</label>
    </div>
    <div class="input-field">
      <input id="email" name="email" type="email" class="validate">
      <label for="email">Email</label>
    </div>
    <div class="input-field">
      <textarea id="message" name="message" class="materialize-textarea"></textarea>
      <label for="message">Message</label>
    </div>
    <button class="waves-effect waves-light btn right" type="submit">Send</button>
  </form>
</div>
@endsection
