<?php 

//   $topics =[
   
//     [
//      'image' => './assets/lingerie-underwear.png',
//       'title' => 'Lingerie' ,
//       'button' => 'View More',
//     ],

//     [
//      'image' => './assets/dress.png',
//      'title' => ' Spring',
//      'button' => 'View More',
//     ],

//     [
//      'image' => './assets/chakra.png',
//       'title' => 'Yoga',
//       'button' => 'View More',
//     ],

//     [
//      'image' => './assets/lipstick.png ',
//       'title' => ' Glow',
//       'button' => 'View More',
//     ],

//     [
//      'image' => ' ./assets/dress-wedding-dress.png' ,
//       'title' => ' Ensembles ',
//       'button' => 'View More',
//     ],

//     [
//         'image' => './assets/mask-theater.png ',
//         'title' => 'Skin Care',
//         'button' => 'View More ',
//       ] ,
  
// ];


function topicSection() {

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

foreach ($topics as $topic)
     {
  echo '<div class="Topics-card">
      <img src="' . $topic ['image'] . '" alt="">
      <h1>' . $topic ['title'] . '</h1>
      <a href="#" class="button1">' . $topic ['button'] . '</a> 
  </div>';
}
}

function trendgCardsDisplay() {
   $tredingitems = [
    [
    [
    'image'=> 'assets\pexels-david-garrison-2128817 1.png',
     'title'=> 'LIFESTYLE',
     'image_sunglass'=> 'assets\woman-sunglasses.png',
     'title_Mallory'=> 'Mallory Reyn',
     'date' => 'April 14th, 2023',
     'cardsTitle'=> '10 Things to help you with social stress.',
      'body'=> 'Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.',
      'a_image'=> 'assets\arrow-small-right.png',
      'link' => 'READ MORE',
    ],
    [
      'image'=> 'assets\pexels-alesia-kozik-6638224 1.png',
     'title'=> 'LMMER',
     'cardsTitle'=> 'The summer 2023 lineup is finally here.',
      'body'=> 'Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.',
      
    ],
  ],
  ];

   foreach ($tredingitems as $cardItem) {
    echo   '  <div class="card" id="hcard1">
    <img class="cardimg" src="' . $cardItem[0]['image'] . '" alt="">
    <div class="imgtag">
        <p>' . $cardItem[0]['title'] . '</p>
    </div>
    <div class="pretitlehor">
        <img class="womaniconhor" src="' . $cardItem[0]['image_sunglass'] . '" alt="">
        <span class="namedate">
            <p>' . $cardItem[0]['title_Mallory'] . '</p>
            <p>' . $cardItem[0]['date'] . '</p>
        </span>
    </div>
    <div class="horcardtext">
        <h3 class="cardtitle">' . $cardItem[0]['cardsTitle'] . '</h3>
        <p>' . $cardItem[0]['body'] . '</p>
    </div>
    <div class="readmorebtn">
        <a href="#"><img src=' . $cardItem[0]['a_image'] . ' alt="">' . $cardItem[0]['link'] . '</a>
    </div>
</div>

<div class="card" id="hcard2">
    <img class="cardimg" src="' . $cardItem[1]['image'] . '" alt="">
    <div class="imgtag">
        <p>' . $cardItem[1]['title'] . '</p>
    </div>
    <div class="pretitlehor">
        <img class="womaniconhor" src="' . $cardItem[0]['image_sunglass'] . '" alt="">
        <span class="namedate">
            <p>' . $cardItem[0]['title_Mallory'] . '</p>
            <p>' . $cardItem[0]['date'] . '</p>
        </span>
    </div>
    <div class="horcardtext">
        <h3 class="cardtitle">' . $cardItem[1]['cardsTitle'] . '</h3>
        <p>' . $cardItem[1]['body'] . '</p>
    </div>
    <div class="readmorebtn">
        <a href="#"><img src="' . $cardItem[0]['a_image'] . '" alt="">' . $cardItem[0]['link'] . '</a>
    </div>
    
</div> ';
   }

}

?>

