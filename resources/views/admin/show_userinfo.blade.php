<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding:100px;">
            <table>
                <tr style="background-color:black">
                    <th style="padding:12px">Customer name</th>
                    <th style="padding:12px">Email</th>
                    <th style="padding:12px">Phone Number</th>
                    <th style="padding:12px">Subject</th>
                    <th style="padding:12px">Message</th>
                    <th style="padding:12px">Status</th>
                </tr>
                @foreach($userinfo as $user)
                <tr align="center" style="background-color:black">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number}}</td>
                    <td>{{$user->subject}}</td>
                    <td>{{$user->message}}</td>
                    <td><a class="btn btn-danger" href="{{url('deleteuser_contact',$user->id)}}" 
                    onclick="return confirm('Are you sure to delete this')" >Delete</a></td>
                </tr>
                @endforeach
            </table>
        <div>
      </div>  
      @include('admin.script')
  </body>
</html>