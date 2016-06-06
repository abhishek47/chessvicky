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