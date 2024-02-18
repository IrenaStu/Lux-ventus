<?php

function navigationDisplay(){
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
  
    foreach($navItems as $item){
      echo '<li class="contact-button">
      <a href="' . $item['link'] . '">' . $item['name'] . '</a>
      <ul class="subitems">' ;
      foreach ( $item ['children'] as $subitem ) {
          echo '<li> 
          <a href="' . $subitem['link'] . '">' . $subitem['name'] . '</a>
          </li>';
  
      }
  echo '</ul>
  </li>';
    }
  echo      '<img src="' . $navItems[5]['link'] . '" alt="search icon">'; 
   
  }
  