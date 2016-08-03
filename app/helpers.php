<?php


function pluralise($text, $count)
{
	if($count > 1)
	{
		 return $text . 's';
	} 

	return $text;
}

function active($page, $currentPage)
{
     if($page == $currentPage)
     {
          return 'active';
     } else 
     {
     	return '';
     }
}

function isSelected($id, $current)
{
     if($id == $current)
     {
          return 'selected';
     } else 
     {
          return '';
     }
}

function checked($val, $current)
{
     if($val == $current)
     {
          return 'checked=""';
     } else 
     {
          return '';
     }
}

function loggedInUser($user)
{
   if($user->id == \Auth::user()->id)
   {
     return true;
   } else {
     return false;
   }
}

function getRankOfCurrentUser()
{
    $profiles =  App\Models\Profile::orderBy('skillometer', 'DESC')->get();
    
    $c = count($profiles);
    $i = 0;

    foreach ($profiles as $key => $p) {
         if($p->user_id === \Auth::user()->id)
         {
            return $i+1;  
         }
         $i++;
     } 

     return 0;
    

}

function getRankOfGivenUser($id)
{
  $profiles =  App\Models\Profile::orderBy('skillometer', 'DESC')->get();
    
    $c = count($profiles);
    $i = 0;

    foreach ($profiles as $key => $p) {
         if($p->user_id === $id)
         {
            return $i+1;  
         }
         $i++;
     } 

     return 0;
}

function updateRank($profile, $sk)
{
    $upProfiles = count(App\Models\Profile::where('skillometer', '>=', $sk)->get());
    
    $downProfiles =  App\Models\Profile::where('skillometer', '<', $sk)->get();

    foreach ($downProfiles as $key => $p) {
        $p->xp -= 1;
        $p->save();
    }

    $profile->xp = $upProfiles + 1; 

    $profile->save();
}

function isStarred($type, $id)
{
     $fav = App\Models\Favourite::where('user_id', \Auth::user()->id)
                       ->where('type', $type)
                       ->where('item_id', $id)->first();

     if($fav)
     {
          return true;
     }
     else {
          return false;
     }
}

function favItem($type)
{
     if($type == 0)
     {
          return 'Course';
     } else if($type == 1)
     {
          return 'Video';
     } else if($type == 2)
     {
          return 'Article';
     } else 
     {
          return 'Question';
     }

}


function color($code)
{
     switch ($code) {
          case 0:
               return 'default';
               break;
          case 1:
               return 'custom';
               break;
          case 2:
               return 'primary';
               break;
          case 3:
               return 'info';
               break;
          case 4:
               return 'success';
               break;
          case 5:
               return 'warning';
               break;
          case 6:
               return 'danger';
               break;
          case 7:
               return 'purple';
               break;
          case 8:
               return 'pink';
               break;
          case 9:
               return 'inverse';
               break;                                             
          
          default:
              return 'info';
               break;
     }
}



function quizCategory($code)
{
     switch ($code) {
          case 0:
               return 'Basic';
               break;
          case 1:
               return 'Intermidiate';
               break;
          case 2:
               return 'Advanced';
               break;
          case 3:
               return 'Professional';
               break;
          
          default:
              return 'Basic';
               break;
     }
}

function getQuizPoints($quiz) {
   
   $points = 0;
   
   foreach ($quiz->questions as $key => $question) 
   {
      $points += $question->points;
   }  

   return $points;
}


function notifyUser($data)
{
   
    $user = \Auth::user();

    $user->newNotification()
    ->withType($data['type'])
    ->withSubject($data['subject'])
    ->withBody($data['body'])
    ->regarding($data['link'])
    ->deliver();

}