<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>
      
      <form class="contact-form mt-5" action="{{url('mycontact')}}" method="post">
      @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" name="name" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-6 py-2 wow fadeInUp">
            <label for="subject">Phone Number</label>
            <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter subject..">
          </div>
          <div class="col-6 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="number" class="form-control" name="number" placeholder="Enter number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      
  
      </form> 
</div>   
</div>