<?php

function escape_text($text) {
     return htmlspecialchars($text);
}

function replace_links($text){//http://elearning.lse.ac.uk/blogs/clt/?p=285
     return preg_replace('|([A-Za-z]{3,9})://([-;:&=\+\$,\w]+@{1})?([-A-Za-z0-9\.]+)+:?(\d+)?((/[-\+~%/\.\w]+)?\??([-\+=&;%@\.\w]+)?#?([\w]+)?)?|', '<a href="leave_chuisy.php?link=$0" target="_blank">$0</a>', $text);
}

function is_valid_email($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

/* REALLY BAD
function is_valid_email($email) {
     $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.-][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';//http://hmvrulz.wordpress.com/2008/09/22/8-practical-php-regular-expressions/
     $pattern2 = '/^([a-zA-Z0-9]((\.|\-|_)?[a-zA-Z0-9])*)@([a-zA-Z]((\.|\-)?[a-zA-Z0-9])*)\.([a-zA-Z]{2,8})$/';//http://www.peuss.com/PHP/RegEx/erkennungEmail.php
     return preg_match($pattern2, $email);
}*/


function get_dateiname ($ganze_url){//Funktion, um nur Dateinamen (ohne Erweiterung) aus einem String (URL oder Dateiname mit Erweiterung) zu extrahieren
     $needle = substr($ganze_url, strrpos($ganze_url, "/")+1);
     $laenge_ohne_php = strlen($needle)-4;
     return substr($needle, strrpos($needle, ".php")-$laenge_ohne_php, $laenge_ohne_php);
}

function iptocountry($ip){
     $ip = sprintf("%u",IP2Long($ip));
     
     $row = db::get('iptocountry', 'IP_from <= '.db::full_quote_str($ip).' AND IP_to >= '.db::full_quote_str($ip));
     
     if(count($row) == 0){
          $zwei = "Unbekannt";//in Sprachdatei auslagern
     }else{
          $zwei = escape_text($row['zwei']);
     }

     return $zwei;
}


function convert_seconds($seconds){
     
     if($seconds >= 86400){
          $days = floor($seconds/86400);
          $seconds = $seconds-($days*86400);
     }
     
     if($seconds >= 3600){
          $hours = floor($seconds/3600);
          $seconds = $seconds-($hours*3600);
     }
     
     if($seconds >= 60){
          $minutes = floor($seconds/60);
          $seconds = $seconds -($minutes*60);
     }
     
     $time_return = array();
     if(isset($days)){$time_return['days'] = $days;}else{$time_return['days'] = '0';}
     if(isset($hours)){$time_return['hours'] = $hours;}else{$time_return['hours'] = '0';}
     if(isset($minutes)){$time_return['minutes'] = $minutes;}else{$time_return['minutes'] = '0';}
     $time_return['seconds'] = $seconds;
     
     return $time_return;
}