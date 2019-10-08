<?php
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
