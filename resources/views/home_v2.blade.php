<div class="homepage_v2">
@extends('app')
@section('content')
@include('partials.twitter')
@include('partials.news_events')

   <div class="container">
      <div class="row">
         <div class="col-md-7 text_center">
            <h3>Notice to Parents</h3>
            <p>We are very pleased to announce that Christ Church CE Primary School is judged 'GOOD' by Ofsted. 
               Please follow the link below to see the report and letters from the Headteacher and Chair of Governors.
            </p>
            <a href="#">Ofsted Report</a>
         </div>
         <div class="col-md-5 text_center">
            <img src="{{url()}}/img/1.png" class="notice_img"> 
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="content">
               <h3>A very warm welcome to our website.</h3>
               <p>We hope that you enjoy your visit, whether you are a parent, carer, pupil, member of staff, friend of the school or a visitor. We hope that you find our website both interesting and informative.</p>
               <p>Our school is based in the historic town of Hastings & St Leonards. The original school was built on the site of Christ Church in London Road, St Leonards. In 1989 we moved to our new premises in Woodland Vale Road. The school keeps its strong link with Christ Church.</p>
               <p>We are fortunate in having children of different nationalities, faiths, needs and abilities. This means that our school reflects the diversity of the world and helps us to act out our mission statement, “Learning to live together, together living to learn”.</p>
            </div>
         </div>
      </div>
   </div>
</div>
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
   </div>
   <img src="{{url()}}/img/map.png"> 

   <div class="container">
      <div class="row">
         <div class="col-md-5 text_center">
            <img src="{{url()}}/img/1.png" class="notice_img"> 
         </div>
         <div class="col-md-7 text_center">
            <h3>Martin Luther King, Jr.</h3>
            <p>The function of education is to teach one to think intensively and to think critically. Intelligence plus character - that is the goal of true education.
            </p>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="content">
               <h3>International Links</h3>
               <p class="strong">We are a culturally diverse school, with many pupils originating from different ethnic backgrounds and speaking several languages.</p>
               <p>Our teachers and support staff have a vast experience in teaching children with English as an Additional Language and supporting them appropriately, in order to ensure maximum success, both socially and academically.</p>
               <p>Our curriculum has a global dimension, supported by some well- established links with several schools in Europe and Africa. We are currently part of a Comenius European Project, in connection with two schools in Belgium and Germany. This project provides opportunities to exchange educational and cultural experiences and compare curriculum programmes with the other European Schools. Additionally, it provides funding for our pupils and staff to visit our link schools, bringing back invaluable knowledge to the rest of Christ Church School.</p>
               <p>For a number of years, we have had strong links with two schools in Freetown, Sierra Leone, having completed several cross-curricular projects in collaboration with them. We have taken part in exchange visits and contributed to their curriculum development. Also our school community has been involved in raising money to support our friends in Sierra Leone in building a new school.</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')

@endsection