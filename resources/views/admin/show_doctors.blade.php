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
        <div align="center" style="padding:90px;">
           <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;">Doctor name</th>
                    <th style="padding:10px;">Phone</th>
                    <th style="padding:10px;">Speciality</th>
                    <th style="padding:10px;">Room</th>
                    <th style="padding:10px;">Image</th>
                    <th style="padding:10px;">Update</th>
                    <th style="padding:10px;">Delete</th>
                </tr>

                @foreach($data as $doctor)
                <tr align="center">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img width="100" height="100" src="doctorimage/{{$doctor->image}}" /></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</td>
                    <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}" onclick="return confirm('Are you sure to delete this')" >Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
      </div> 
      @include('admin.script')
  </body>
</html>