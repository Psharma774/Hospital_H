<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
       <div>
        <form action="{{url('sendemail',$data->id)}}" method="POST">

        @csrf
            <div style="padding:15px;">
                <label>Greeting</label>
                <input style="color:black" type="text" name="greeting" required=""/>
            </div>

            <div style="padding:15px;">
                <label>Body</label>
                <input style="color:black" type="text" name="body"  required=""/>
            </div>


            <div style="padding:15px;">
                <label>Action Text</label>
                <input style="color:black" type="text" name="actiontext" required="" />
            </div>

            <div style="padding:15px;">
                <label>Action Url</label>
                <input style="color:black" type="text" name="actionurl" required="" />
            </div>

            <div style="padding:15px;">
                <label>End Part</label>
                <input style="color:black" type="text" name="endpart" required="" />
            </div>

            <div style="padding:15px;">
                <input type="submit" class="btn btn-success"/>
            </div>
        </form>
      </div> 

       </div>
       </div>
       
      @include('admin.script')
    </div> 
  </body>
</html>