<?php

//Initialize the Facebook API with a function that includes Composer's autoloader.php file.
//This done by adding a WordPress action to WP's 'init' hook.
//You can name your function whatever you want.
//
//**A Hint to Get Started** add_action('init','my_funky_function');




//Next declare my_funky_function() and simply include autoloader.php file found inside vendor folder.
//Nothing too fancy here, just a simple php include does the trick.
//The Facebook PHP SDK is now active.




//Next, let's add a stylesheet so we can style our admin page if we want to do that.
//By default WordPress uses tables, I think, and they're hideous, in my opinion.
//Anyway, you can go to town on these if you want with CSS or SCSS.




//Add a new top-level menu item in WP's menu bar by adding a new action into WP's 'admin_menu' hook.
//Whenever wp-admin loads, this method is ran whenever the menu is loaded.
//You can name the function whatever you want.




//Now that we have added our new function to the admin_menu hook, we need to declare that function.
//Inside this function we are going to use WP's add_menu_page() method.
//
//**Hint** add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
//
//Note the $function because that is what loads the page and we need to declare that next.
//It's just an include of the template file, nothing fancy.




//Add yet another action, this one is going to register the settings with WP's Settings API.
//This is where you can declare the value of your variables that you can grab with get_option().
//This one can be added to admin_init hook.
//
//**Hint** Use the register_settings() WordPress method




//Finally, we need to include that template file that holds the form that will display in the admin menu.
//This needs to match the name of that $function we named earlier when we were registering the page.
//This is just an include of the template file called admin-options.php 


//All systems go! Okay, now we need tackle what is actually going to be displayed on the website.

?>