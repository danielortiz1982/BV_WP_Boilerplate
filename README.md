# BrandingVerticals Wordpress Boilerplate.
Wordpress SPA ~ This is a custom theme App with a Angularjs twist!  


#Install Instructions
After the normal WordPress install and theme activation is completed, open your theme in a terminal window and run(npm install) to download all of the front end dependencies.

#Less Integration
To edit the css and styles of the boilerplate, navigate to ~ (/less/style.less). Once done, to view your changes update the style.min.css by opening the less folder up in terminal. Run the (lessc style.less style.min.css) command, if you want a clean version you can install (npm install -g less-plugin-clean-css) and add the --clean-css flag before style.less style.min.css.

#JavaScript ES2015/ES6
The Boilerplate is ES2015/ES6 compatible. To build the frontend open the project root in a terminal window. Run the (npm run build) command. If you do not have Babel installed, make sure it is installed with npm(-g).

#Wordpress Custom Post Types
To create a new custom post type, reference the (inc/custom_post_type.php). In this file you can find a working sample CPT, copy and rename both the add_action and function name (create_sample_post_type). Update the register_post_type name and array settings to your new CPT. 
