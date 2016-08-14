@extends ('layouts.landing')

@section('content')

  @include('landing.shortbanner')

   <section id="partners">
            <div class="container">
                <div class="row">
                   <a target="_blank" href="http://www.trumpetstechnologies.com" class="col-md-3 col-xs-6">
                      <img  src="/images/partners/trumpets.png">
                   </a>
                   <a href="#" data-toggle="modal" data-target="#akashModal" class="col-md-3 col-xs-6">
                      <img  src="/images/partners/akash.png">
                   </a>
                   <a href="#" data-toggle="modal" data-target="#botvinnikModal" class="col-md-3 col-xs-6">
                      <img  src="/images/partners/botvinnik.png">
                   </a>
                 
                </div>
            </div>
            
         </section> 
   
   <div class="container">
   	   	 <section id="pricePlans">
      
      <ul id="plans">
         <div>
            <h2 class="text-center visible-xs">Pricing</h2>
         </div>
         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2>Freemium</h2></li>
               <li class="price"><p>&#8377;0/<span>month</span></p></li>
               <li>
                  <ul class="options">
                     <li>Free For <span>lifetime</span></li>
                     <li>No <span>Billing Details</span></li>
                    <li>Watch All Free <span>Courses</span></li>
                     <li>Access tons of <span>articles</span></li>
                     <li>Play chess with <span>Computer</span> and <span>Friends</span></li>
                     <li>Solve Free Challenges</li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a href="/register?free=true">JOIN NOW</a></li>
            </ul>
         </li>

         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2 class="bestPlanTitle">Premium</h2></li>
               <li class="price"><p class="bestPlanPrice">&#8377;700/month</p></li>
               <li>
                  <ul class="options">
                    <li>Free For <span>3 Days</span></li>
                     <li>All Features Of <span>Freemium</span></li>
                    <li>Watch All Premium <span>Courses</span></li>
                     <li>Read premium <span>articles</span></li>
                     <li>Play chess <span>tournaments</span></li>
                     <li>Solve Premium Challenges <span> for cash prices</span></li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a class="bestPlanButton" href="/register?plan=1">JOIN NOW</a></li>
            </ul>
         </li>

         <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2 class="bestPlanTitle">6 Months</h2></li>
               <li class="price"><p class="bestPlanPrice">&#8377;3900/6 months</p></li>
               <li>
                  <ul class="options">
                    <li>Free For <span>14 Days</span></li>
                     <li>All Features Of <span>Freemium</span></li>
                    <li>Watch All Premium <span>Courses</span></li>
                     <li>Read premium <span>articles</span></li>
                     <li>Play chess <span>tournaments</span></li>
                     <li>Solve Premium Challenges <span> for cash prices</span></li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a class="bestPlanButton" href="/register?plan=1">JOIN NOW</a></li>
            </ul>
         </li>

          <li class="plan">
            <ul class="planContainer">
               <li class="title"><h2 class="bestPlanTitle">Yearly</h2></li>
               <li class="price"><p class="bestPlanPrice">&#8377;7700/year</p></li>
               <li>
                  <ul class="options">
                    <li>Free For <span>1 month</span></li>
                     <li>All Features Of <span>Freemium</span></li>
                    <li>Watch All Premium <span>Courses</span></li>
                     <li>Read premium <span>articles</span></li>
                     <li>Play chess <span>tournaments</span></li>
                     <li>Solve Premium Challenges <span> for cash prices</span></li>
                    <li>And <span>more</span></li>
                  </ul>
               </li>
               <li class="button"><a class="bestPlanButton" href="/register?plan=1">JOIN NOW</a></li>
            </ul>
         </li>

      </ul> <!-- End ul#plans -->
      
   </section>
   </div>

@stop


