<?php 

$topics =[
   
    [
     'image' => './assets/lingerie-underwear.png',
      'title' => 'Lingerie' ,
      'button' => 'View More',
    ],

    [
     'image' => './assets/dress.png',
     'title' => ' Spring',
     'button' => 'View More',
    ],

    [
     'image' => './assets/chakra.png',
      'title' => 'Yoga',
      'button' => 'View More',
    ],

    [
     'image' => './assets/lipstick.png ',
      'title' => ' Glow',
      'button' => 'View More',
    ],

    [
     'image' => ' ./assets/dress-wedding-dress.png' ,
      'title' => ' Ensembles ',
      'button' => 'View More',
    ],

    [
        'image' => './assets/mask-theater.png ',
        'title' => 'Skin Care',
        'button' => 'View More ',
      ] ,
  
];

$navItems = [
  [
    'link'=> '#',
    'name'=> 'Fashion',
    'children'=> [],
  ],
  [
    'link'=> '#',
    'name'=> 'Lifestyle',
    'children'=> [],
  ],
  [
    'link'=> '#',
    'name'=> 'Spiritual',
    'children'=> [],
  ],
  [
    'link'=> '#',
    'name'=> 'Mental Health',
    'children'=> [],
  ],
  [
    'link'=> '#',
    'name'=> 'Contact Us',
    'children'=> 
    [
     [
      'link'=> 'mailto:irena.sturua@gmail.com',
       'name'=> 'email',
      ],
      [
        'link'=> 'fon:+995568599999',
        'name'=> 'tel',
       ],
      ],
  ],
  [
    'link'=> './assets/Component 2.png',
    'name'=> '',
    'children'=> [],
  ],

];


function topicSection($topic_image, $topic_title, $topic_button) {
  echo '<div class="Topics-card">
      <img src="' . $topic_image . '" alt="">
      <h1>' . $topic_title . '</h1>
      <a href="#" class="button1">' . $topic_button . '</a> 
  </div>';
}

?>