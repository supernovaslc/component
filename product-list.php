<?php
// // An array that represents a possible record set returned from a database
// $name = array(
//   [
//     'avatarUrl' => 'image/free.png',
//     'text' => 'My name is QUang'
//   ],
// );

// function Avatar($url){
//   $html='';
//   $html .= '<img src="'.$url.'" alt="free" />';
//   return $html;
// }

// function UserInfo($info){
//  $infoo = Avatar($info);
//  $info=
//  return $infoo;
// }

// function Show($arr){
//   foreach ($arr as $key => $value) {
//     $img = UserInfo($value['avatarUrl']);
//     //$text= Text($value['text']);
//   }
//   print_r($img);
//   //print_r($text);
  
// }

$arr = array(
  [
    'avatarUrl' => 'image/3x4.jpg',
    'name' => 'Quang'
  ],
    [
    'avatarUrl' => 'image/trivn.jpg',
    'name' => 'Tri VN'
  ],
);

function Avatar($fname, $img) {
  echo '<div>
    <img src="'.$img.'" alt="'.$fname.'" />';
  echo '</div>';
}

function UserInfo($user, $image) {
  Avatar($fname=$user, $img=$image);
  echo '<br>';
  echo "Hello, $fname.<br>";
}

function App($arr){
  foreach ($arr as $key => $author)
  {
    UserInfo($author['name'], $author['avatarUrl']);
  }
}

App($arr);
?> 