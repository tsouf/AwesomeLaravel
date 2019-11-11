
@extends('layouts.app')
 
  @section('content')

  <img src="{{asset('/images/new1.jpg')}}" id="frontpic" width="75%" height="75%" style="margin-left: auto;margin-right: auto;display: block;">

  <br>
  <br>
  <br>
  <br>
  <br>
  
   <div class="row3">
     <section class="hoc container clear">
       <div class="sectiontitle"  >
         <h2 class="heading">
           <i>About Us</i>
          
         </h2>
         <br>
         <br>
         Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling.
          Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
       </div>
     </section>

   </div>
   <br>
   <br>
   <br>

   <div class="row4">
      <section class="hoc container clear">
          <div class="sectiontitle"  >
            <h2 class="heading">
              <i>Contact Us</i>
            </h2>
            <br>
            <br>
            <strong> Email adrress:</strong>  nikosxfx@hotmail.com
            <br>
            <strong> Phone number:</strong>  +4571581194
            <br>
            <strong> Location:</strong> Esbjerg-Denmark
            <br>
            <strong> Postal code:</strong> 6705
          </div>
        </section>
   </div>
<br>
<br>
   <div class="footer">
      <b>Copyright 2019. All rights reserved. </b>
   </div>

@endsection

