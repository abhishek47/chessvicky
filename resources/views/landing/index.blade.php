@extends ('layouts.landing')

@section('content')
   <div >
   	   
   	

   	   @include('landing.banner')
         
         <section id="partners">
            <div class="container">
                <div class="row">
                   <a href="http://www.trumpetstechnologies.com" class="col-md-3">
                      <img src="/images/partners/trumpets.png">
                   </a>
                   <a href="http://www.trumpetstechnologies.com/webbins" class="col-md-3">
                      <img src="/images/partners/webbins.png">
                   </a>
                    <a href="http://www.trumpetstechnologies.com" class="col-md-3">
                      <img src="/images/partners/trumpets.png">
                   </a>
                   <a href="http://www.trumpetstechnologies.com/webbins" class="col-md-3">
                      <img src="/images/partners/webbins.png">
                   </a>
                </div>
            </div>
            
         </section> 


   	   <section id="features">

                <div class="container">
                <h1 class="text-center">Seamless Features</h1>
                <br/><br/><br/><br/>
                  <div class="row">
                     <div class="col-md-4 item">
                       <div class="col-md-3">
                          <img src="/images/graphics/play.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/article.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Articles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/boy.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Player Profiles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/calendar.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Daily Challenges</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                        <div class="col-md-3">
                          <img src="/images/graphics/notes.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Cash Prizes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/judge.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>SuperIdols</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/chat.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Forum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                          <div class="col-md-3">
                          <img src="/images/graphics/news.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>News Feed</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>

                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/list.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Resources</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>

                     <div class="col-md-4 item">
                         <div class="col-md-3">
                          <img src="/images/graphics/horse.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>Play Chess</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>
                     <div class="col-md-4 item">
                        <div class="col-md-3">
                          <img src="/images/graphics/pointer.svg">
                       </div>
                       <div class="col-md-9">
                         <h3>And More..</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        
                         </p>
                        </div> 
                     </div>

                     

                  </div> 
                </div>
         </section>

       <div class="container">
   	   <hr/>
      </div>

   	 <section id="pricePlans">

      <ul id="plans">
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
      
         

     
      <div class="container">
   	   <hr/>
      </div>
   	   <section id="vision">
   	   	   <div class="container"> 
   	   	   	  <div class="row">
   	   	   	  	 <div class="col-md-6 item">
   	   	   	  	 	<div class="col-md-3">
   	   	   	  	 		<img src="images/user.png" class="img-circle">
   	   	   	  	 	</div>
   	   	   	  	 	<div class="col-md-9">
   	   	   	  	 	    <h3>Vinayak Wadile</h3>
   	   	   	  	 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	   	   	  	 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	   	   	  	 		</p>
   	   	   	  	 	</div>
   	   	   	  	 </div>
   	   	   	  	 <div class="col-md-6 item">
   	   	   	  	 	<div class="col-md-3">
   	   	   	  	 		<img src="images/user.png" class="img-circle">
   	   	   	  	 	</div>
   	   	   	  	 	<div class="col-md-9">
   	   	   	  	 	    <h3>Abhishek Wani</h3>
   	   	   	  	 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	   	   	  	 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	   	   	  	 		</p>
   	   	   	  	 	</div>
   	   	   	  	 </div>
   	   	   	  </div>
   	   	   </div>
   	   </section>






   </div>
@stop