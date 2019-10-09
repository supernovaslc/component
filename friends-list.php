<?php
$friends = array(
  [
    'avatarUrl' => 'image/3x4.jpg',
    'name' => 'Quang'
  ],
    [
    'avatarUrl' => 'image/trivn.jpg',
    'name' => 'Tri VN'
  ],
);

function Avatar($name, $img) {
  echo '<div>
    <img src="'.$img.'" alt="'.$name.'" />';
  echo '</div>';
}

function UserInfo($user, $image) {
  echo '<div>
    <div> '.Avatar($name=$user, $img=$image).'
      Hello, '.$name.' <br />
    </div>
    <button>Add Friends</button>
    <button>Delete, remove</button>
    ';
  echo '</div>';
 
}

function App($friends){
  foreach ($friends as $key => $author)
  {
    UserInfo($author['name'], $author['avatarUrl']);
  }
}

App($friends);
?> 
