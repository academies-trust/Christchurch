@extends('app')

@section('content')
<div class="conatact_page">
	<div class="contact_content">
	   <div class="container">
      <div class="row">
         <div class="col-md-12 text_center">
            <h2>Contact Us</h2>
         </div>
         <div class="col-md-6">
            <h3>Contact Form</h3>
            <p>Use the form below to send us a message. We'll endeavour to get back to you as soon as possible.</p>
            @include('partials.contactform')
         </div>
         <div class="col-md-6">
            <h3>Contact Details</h3>
            <p>Woodland Vale Road, <br>St Leonards On Sea, <br>East Sussex,<br> TN37 6JJ</p>
            <p>Tel - 01424 422953 <br>
               <span class="small_text">Our telephone is answered by office staff between 8.15 a.m. and 4.00 p.m. for general enquiries and requests for appointments. If contacting us about absences, before 9.15 am, please use our telephone, 01424 422953 ext 221.</span><br><br>
               Fax - 01424 720707<br><br>
               Email - <a href="mailto:office@christchurch.e-sussex.sch.uk">office@christchurch.e-sussex.sch.uk</a>
            </p>
         </div>
      </div>
      <div class="row">
				<div class="col-md-10 col-md-offset-1 padding_x20">
					
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.3416759562006!2d0.5579440000000034!3d50.86187399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df1aa152063af9%3A0x240c8c501e9c6539!2sChrist+Church+Church+of+England+Primary+School!5e0!3m2!1sen!2suk!4v1413464290029" width="100%" height="450" frameborder="0" style="border:0"></iframe>
					
				</div>
			</div>
   </div>

	</div>
</div>
@endsection

@endsection