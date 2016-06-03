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