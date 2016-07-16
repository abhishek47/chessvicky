@extends ('layouts.landing')

@section('content')

  @include('landing.shortbanner')
   
   <div class="container">
   	   	 <section id="pricePlans">
      
      <ul id="plans">
         <div>
            <h2 class="text-center visible-xs">Pricing</h2>
         </div>
         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2>Free Trial</h2></li>
               <li class="price"><p>&#8377;0/<span>month</span></p></li>
               <li>
                  <ul class="options">
                     <li>Free For <span>14 days</span></li>
                     <li>No <span>Billing Details</span></li>
                    <li>Watch Unlimited <span>Courses</span></li>
                     <li>Premium <span>articles</span></li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a href="/register?trial=true">START TRIAL</a></li>
            </ul>
         </li>

         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2 class="bestPlanTitle">Monthly</h2></li>
               <li class="price"><p class="bestPlanPrice">&#8377;700/month</p></li>
               <li>
                  <ul class="options">
                     <li>2x <span>option 1</span></li>
                     <li>Win <span>Cash Prizes</span></li>
                     <li>Watch Unlimited <span>Courses</span></li>
                     <li>Premium <span>articles</span></li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a class="bestPlanButton" href="/register?plan=1">JOIN NOW</a></li>
            </ul>
         </li>

         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2>Quaterly</h2></li>
               <li class="price"><p>&#8377;3900/<span>6 months</span></p></li>
               <li>
                  <ul class="options">
                     <li>Get 15 Days <span>Free</span></li>
                     <li>Win <span>Cash Prizes</span></li>
                    <li>Watch Unlimited <span>Courses</span></li>
                     <li>Premium <span>articles</span></li>
                     <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a href="/register?plan=2">JOIN NOW</a></li>
            </ul>
         </li>

         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2>Annualy</h2></li>
               <li class="price"><p>&#8377;7000/<span>year</span></p></li>
               <li>
                  <ul class="options">
                      <li>Get 1 Month <span>Free</span></li>
                     <li>Win <span>Cash Prizes</span></li>
                     <li>Watch Unlimited <span>Courses</span></li>
                     <li>Premium <span>articles</span></li>
                     <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a href="/register?plan=3">JOIN NOW</a></li>
            </ul>
         </li>
      </ul> <!-- End ul#plans -->
      
   </section>
   </div>

@stop


