<!DOCTYPE html>
<html lang="en">
<head>
<base src="/public" />
  @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/blog')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">Appointment</a>
            </li>
            @if(Route::has('login'))

            @auth

            <x-app-layout>
            </x-app-layout>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:50px">
    <table>
        <tr style="background-color:black">
            <th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
            <th style="padding:10px; font-size:20px; color:white;">Date</th>
            <th style="padding:10px; font-size:20px; color:white;">Message</th>
            <th style="padding:10px; font-size:20px; color:white;">Status</th>
            <th style="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
        </tr>

        @foreach($appoint as $appoints)
        <tr align="center">
            <td style="padding:10px; font-size:20px;">{{$appoints->doctor}}</td>
            <td style="padding:10px; font-size:20px;">{{$appoints->date}}</td>
            <td style="padding:10px; font-size:20px;">{{$appoints->message}}</td>
            <td style="padding:10px; font-size:20px;">{{$appoints->status}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('You are sure to delete this')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
        </tr>
        @endforeach
    </table>
  </div>

@include('user.script')
  
</body>
</html>