@extends('layout.app')
@section('title')
{{$logedinuser['name']}} home
@endsection
@section('user')
    <a href="{{route('adminhome')}}" class="nav-link"  >{{$logedinuser['name']}} home</a>
@endsection
@section('userimage')
<img src="{{$logedinuser['image']}}" alt="user" width="50" height="44">
@endsection

@section('link1')
<a href="{{route('add_student_form')}}"  class="nav-link" >add student</a>
@endsection
@section('link2')
<a href="{{route('add_admin_form')}}"  class="nav-link" >add admin</a>
@endsection
@section('link3')
<a href="{{route('allstudents')}}"  class="nav-link" >all students</a>
@endsection
@section('link4')
<a href="{{route('alladmins')}}"  class="nav-link" >all admins</a>
@endsection
@section('link5')
<a href="{{route('exam.createForm')}}"  class="nav-link" >add exam</a>
@endsection
@section('link6')
<a href="{{route('exam.all')}}"  class="nav-link" >all exams</a>{{-- //crud questions --}}
@endsection
@section('link7')
    <a href="{{route('exam.past')}}"  class="nav-link" >past exams</a>
@endsection
@section('link8')
    <a href="{{route('logout')}}"  class="nav-link" >logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}


<section class="slick-slideshow">   
  <div class="slick-custom">
      <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">Cool Fashion</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>

                      <a href="about.html" class="btn custom-btn">Learn more about us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="slick-custom">
      <img src="images/slideshow/team-meeting-renewable-energy-project.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">New Design</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Please share this Little Fashion template to your friends. Thank you for supporting us.</p>

                      <a href="product.html" class="btn custom-btn">Explore products</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="slick-custom">
      <img src="images/slideshow/two-business-partners-working-together-office-computer.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">Talk to us</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                      <a href="contact.html" class="btn custom-btn">Work with us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

</section>





    
@endsection