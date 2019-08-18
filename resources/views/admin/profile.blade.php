@extends('admin.app')
@section('content')
<section class="profile-wrapper">
  <div class="container">
    <!-- Main row start -->
    <div class="row">
      <div class="col-md-2 profile-pic-div">
        <img class="profile-pic" src="{{URL('/images/admin/profile.png')}}" />
      </div>
      <div class="col-md-10 profile-content-div">
        <h3>Bala</h3>
        <span>DME</span>
        <span>Intrested in : JS, PHP, JAVA, C++, C</span>
      </div>
    </div>
    <!-- Main row close -->
  </div>
</section>
@endsection
