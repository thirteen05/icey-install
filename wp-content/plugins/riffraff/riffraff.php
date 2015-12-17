<?php

/*
Plugin Name: Riff Raff Quote Generator
Description: Horst Simcoe, notoriously known for his rap monicker "Riff Raff", provides insight into the lives of all Millenials, shedding light on such concepts such as how to be the man, how to be the boss, and how to roll through with seven coats of gloss.
*/


function get_riffraff_quote(){
  
  $riffQuotes = array(
    "Never explain yourself to haters because they don't care, they just want to gather info to use against you.",
    "Most people just wanna spend time with their family, but I just wanna sip drank and win a Grammy.",
    "I could've played for the Vancouver Super Models, but they found codeine in my water bottles.",
    "They don't know that I am a dinosaur; I come from the ancient lands, so I have a little more intelligence.",
    "I would go on vacation, but my whole life is a weekend.",
    "Don't talk about my past tense unless we're going camping.",
    "I will break your hating ass down like a common denominator.",
    "I'm like a Versace sponge: I soak up the best.",
    "Suckers wanna hate me, librarians wanna date me.",
    "The syrup in my soda got my brain doing yoga.",
    "Now I write Clark Gable on my cable bill--Bill Cosby on my couch out in Nashville.",
    "Look who it is: it's the Gucci Mane with the spray tan.",
    "Trunk steady knocking, floating through the sky, Mary Poppins."

  );
  
  
  $random = rand(1,10);
  
  echo "<h3 style='color: #FFF'>";
  echo $riffQuotes[$random];
  echo "</h3>";
}


?>
