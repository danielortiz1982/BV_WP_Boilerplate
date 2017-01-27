# BrandingVerticals Wordpress Boilerplate.
**Wordpress SPA** ~ This is a custom theme App with a **Angularjs** frontend!  


#Install Instructions
After the normal WordPress install and theme activation is completed, open your theme in a terminal window and run(**_npm install_**) to download all of the front end **_dependencies_**.

#Less Integration
To edit the css and styles of the boilerplate, navigate to ~ (**_/less/style.less_**). Once done, to view your changes update the style.min.css by opening the less folder up in terminal. Run the (**_lessc style.less style.min.css_**) command, if you want a clean version you can install (**_npm install -g less-plugin-clean-css_**) and add the --clean-css flag before style.less style.min.css.

#JavaScript ES2015/ES6
The Boilerplate is **ES2015/ES6** compatible. To build the frontend open the project root in a terminal window. Run the (**_npm run build_**) command. If you do not have Babel installed, make sure it is installed with npm(**-g**).

#Wordpress Custom Post Types
To create a new custom post type, reference the (**_inc/custom_post_type.php_**). In this file you can find a working sample CPT, copy and rename both the add_action and function name (**_create_sample_post_type_**). Update the (**_register_post_type name and array_**) settings to your new CPT. 
