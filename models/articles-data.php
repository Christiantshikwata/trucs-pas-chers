<?php
 $article ='bracelet';
 $prix=15;
 $devise='fc';
 $total=0;

 $articles_names=[
    "bracelet",
    "montre",
    "cable usb",
    "ecouteur",
    "carnets",
 ];

 $articles_prix=[
    "bracelet"=>5000,
    "montre"=>13000,
    "cable usb"=>7500,     
    "ecouteur"=>25000,
    "carnets"=>2500,
 ];
 
 foreach ($articles_prix as $name => $p){
    $total =$total+ $p; 
} 