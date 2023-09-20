<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
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

      
      <div class="container" align="center" style="padding-top:40px">

      @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
      </div>
      @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

        @csrf
            <div style="padding:15px;">
                <label>Doctor Name</label>
                <input style="color:black" type="text" name="name" placeholder="Write the name" required=""/>
            </div>

            <div style="padding:15px;">
                <label>Phone</label>
                <input style="color:black" type="text" name="number" placeholder="Write the number" required=""/>
            </div>

            <div style="padding:15px;">
                <label>Speciality</label>
                <select name="speciality" style="color:black; width:200px;">
                    <option>--select--</option>
                    <option value="skin">Skin</option>
                    <option value="eye">Eye</option>
                    <option value="heart">Heart</option>
                    <option value="nose">Nose</option>
                    
                </select>
            </div>

            <div style="padding:15px;">
                <label>Room No.</label>
                <input style="color:black" type="text" name="room" placeholder="Write the Room No." required="" />
            </div>

            <div style="padding:15px;">
                <label>Doctor Image</label>
                <input type="file" name="file" required="" />
            </div>

            <div style="padding:15px;">
                <input type="submit" class="btn btn-success"/>
            </div>
        </form>

      </div>
       </div>
       
      @include('admin.script')
    </div> 
  </body>
</html>