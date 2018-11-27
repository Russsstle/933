@extends("layout")

@section("body")
<div class="header">
  Title of Feature Story
</div>
<div class="content feature">
  <div class="icon-wrapper">
    <a class="icon-title back-indicator" href="{{ url('blog') }}">
      <i class="material-icons">chevron_left</i> Back</a>
    </a>
  </div>
  <div class="feature-card">
    <img src="{{ url('public/img/sample.png') }}" height="350px" width="100%">
    <div class="title">FEATURE</div>
    <div class="subtitle">By Juan Dela Cruz</div>
    <p>
      Lorem ipsum dolor sit amet, inermis vivendum salutandi eos at, diceret quaestio inciderint ea pro. Sit diam blandit constituam at, ad utinam definitiones vis. Usu verterem mnesarchum cu, mea ei nisl facete. Utroque nominavi comprehensam quo at. Offendit sapientem consulatu at eos, id sit augue mazim. Vis cetero volumus reformidans ei. Legendos pertinax abhorreant duo in, tractatos qualisque mea no, ea nec dicunt graecis denique. Bonorum accommodare an pro, invidunt adipisci an pri, has atqui tation altera at. At quem affert sanctus usu, clita regione graecis vix at. Ius quas ferri ei.
    </p>
    <p>
      Eum ne tantas senserit, ad sit ceteros tibique. Ius ad prima dicit iracundia, quo et inani everti, at sit tempor nonumes vocibus. Usu eu diam euismod tibique, laudem intellegebat sea eu. Est ex summo tacimates referrentur, debitis deleniti laboramus eam id. Utinam eloquentiam eu eum. Iusto referrentur ex sit, at veri appareat perpetua sea, ut populo tincidunt assueverit vel. Vim aliquip numquam ut, te mnesarchum elaboraret contentiones ius.
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
          <img class="activator" src="{{ url('public/img/sample.png') }}">
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
          <img class="activator" src="{{ url('public/img/sample.png') }}">
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
          <img class="activator" src="{{ url('public/img/sample.png') }}">
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
