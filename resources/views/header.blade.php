<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Telifouni</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/myorders">Orders</a></li>
      </ul>    
      <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>  Search</button>
        </form> 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist" ><i class="fas fa-shopping-cart">Cart  {{$total}} </i></a></li>
        @if(Session::has('user'))
        <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user"></i>  {{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/logout"><i class="fas fa-power-off"></i>  Logout</a></li>
        </ul>
        </li>
        @else
        <li><a href="/login"><i class="fas fa-sign-in-alt"></i>  Login</a></li>
        <li><a href="/register"><i class="fas fa-user-plus"></i> Register</a></li>

        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>