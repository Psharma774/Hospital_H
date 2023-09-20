<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public"/>
    <style>
        label{
            display:inline-block;
            width:200px;
        }
    </style>
    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding:100px">

        @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
      </div>
      @endif
      
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:20px;">
                    <label>Docotr Name</label>
                    <input style="color:black;" type="text" name="name" value="{{$data->name}}" />
                </div>

                <div style="padding:20px;">
                    <label>phone</label>
                    <input style="color:black;" type="text" name="number" value="{{$data->phone}}" />
                </div>

                <div style="padding:20px;">
                    <label>Speciality</label>
                    <input style="color:black;" type="text" name="speciality" value="{{$data->speciality}}" />
                </div>

                <div style="padding:20px;">
                    <label>Room</label>
                    <input style="color:black;" type="text" name="room" value="{{$data->room}}" />
                </div>

                <div style="padding:20px;">
                    <label>Old Image</label>
                    <img src="doctorimage/{{$data->image}}" height="100px" width="100px"/>
                </div>

                <div style="padding:20px;">
                    <label>Change Image</label>
                    <input type="file" name="file" />
                </div>

                <div style="padding:20px;">
                    <label>Change Image</label>
                    <input type="submit" class="btn btn-primary" />
                </div>

            </form>
        </div>
      </div> 
      @include('admin.script')
  </body>
</html>