<?php

function add_meta_title($string) {
    $CI =&get_instance();
    $CI->data['meta_title'] = e($string). ' - '. $CI->data['meta_title'];

}
function getasset($resourceName){
    return base_url('assets/'.$resourceName);
}

function getAlertMessage($message,$type = 'danger') {
	
       return '<div class = "alert alert-'.$type.'" style = "margin-left:10px; margin-right:10px;"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $message ."</div>";

}

function encrypt($string) {
    return hash('sha512', $string . config_item('encryption_key'));
}

function get_message($msg, $type = 'danger') {
    $message = '<div class="alert alert-' . $type . '">' . $msg . '</div>';
    return $message;
}


function getBtn($url, $type = "del") {
    if ($type == "del")
        return '<a href="' . $url . '" title="Delete this record" onclick="return confirm(\'Are you sure you wish to delete this record? Action cannot be undone!\')" class="btn-action btn-sm glyphicons remove_2 btn-danger"><i></i>Del</a>';
    elseif ($type == "view") {
        return '<a href="' . $url . '" title="View full details" class="btn btn-xs btn-success glyphicons search"><i></i></a>';
    }
    elseif($type == "edit") {
        return '<a href="' . $url . '" title="Edit this record" class="btn btn-primary btn-xs"> Edit </a>';
    }
}

function getExcerpt($article,$numwords = 50) {
    $string = '';
    $url = 'articles/'.intval($article->article_id).'/'.$article->slug;
    $string .= '<h2>'.anchor($url,e($article->title)).'</h2>';
    $string .= '<p> <span class = "glyphicon glyphicon-time"></span> Posted on : '.e($article->publication_date).'</p>';
    $string .= '<p>'.e(limit_to_words(strip_tags($article->body),$numwords)).'</p>';
    $string .= anchor($url,'Read More');
    return $string;
}


function limit_to_words($string,$numwords) {
    $excerpt = explode(' ',$string,$numwords);

    if (count($excerpt) >= $numwords) {
        array_pop($excerpt);
    }
    $excerpt = implode(' ', $excerpt);
    return $excerpt;
}

function e($string){
    return htmlentities($string);
}

function article_link($article) {

    $url = 'articles/'.intval($article->article_id).'/'.$article->slug;
    $url = '<h2>'.anchor($url,e($article->title)).'</h2>';
    return $url;
}

function article_links($articles) {
    $string = '<ul>';
    foreach ($articles as $article):
        $url = article_link($article);
        $string .= '<li>'.$url.'</li>';
    endforeach;
    $string .= '</ul>';

    return $string;

}


function hashstring($stringtohash) {
    return hash('sha1',$stringtohash);
}


function management_privileges()
{
	return array('Users','Vendors','Configuration','Report','Delivery','Message','Settlement');
}

 function dayofmonthtime($date)
 {
	$dat = explode(" ",$date);
	
	$day = explode("-",$dat[0]);
	
	return dayth($day[2])." of ".month($day[1]).", ".$day[0]." at ".explode(':',$dat[1])[0].':'.explode(':',$dat[1])[1];
	
 }
 
  function dayth($dob)
   {
   
                $day = array('','1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th','11th','12th','13th','14th','15th','16th','17th','18th','19th','20th','21st','22nd','23rd','24th','25th','26th','27th','28th','29th','30th','31st');
				$dob = intval($dob);
				$isday = $day[$dob];
				return $isday;
		  
    }
    
function month($dob)
   {
        $month = array("","January","February","March","April","May","June","July","August","September","October","November","December");
		$dob = intval($dob);
		$ismonth = $month[$dob];
        return $ismonth;
                           
   }
	