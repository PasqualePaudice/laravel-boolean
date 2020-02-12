<!-- Image and text -->
<nav class="navbar navbar-dark primary-color">
  <a class="navbar-brand" href="#">
    <img src="https://www.boolean.careers/images/common/logo.png" height="30" class="d-inline-block align-top"
      alt="mdb logo"> Bootstrap
  </a>

<div id="nav-destro" class="">





    <div class="button">
        <button  class="btn btn" type="button" name="button">CANDIDATI ORA</button>
    </div>
    <div class="a">
        <a href="#">LEZIONE GRATUITA</a>
    </div>
    <div class="a">
        <a href="#">DOPO IL CORSO</a>
    </div>
    <div class="a">
        <a href="#" class="">CORSO</a>
    </div>
    <div class="a">
        <a href="{{route('home')}}" class="{{ Route::currentRouteName()==='home' ? 'activeMenu':''}}">HOME</a>
    </div>

</div>


</nav>
