# BrandingVerticals Wordpress Boilerplate.
**Wordpress SPA** ~ This is a custom theme App with a **Angularjs** frontend!  


#Install Instructions
After the normal WordPress install and theme activation is completed, open your theme in a terminal window and run(**_npm install_**) to download all of the front end **_dependencies_**.

#Less Integration
To edit the [LESS](http://lesscss.org/) and modify the styles, navigate to ~ (**_/less/style.less_**). Once done with your edits, to view your changes update the style.min.css by opening the less folder up in terminal. Run the (**_lessc style.less style.min.css_**) command, if you want a clean version you can install (**_npm install -g less-plugin-clean-css_**) and add the --clean-css flag before style.less style.min.css.

#JavaScript ES2015/ES6
The Boilerplate is **ES2015/ES6** compatible. To build the frontend open the project root in a terminal window. Run the (**_npm run build_**) command. If you do not have [Babel installed you can click here](https://babeljs.io/docs/setup/), be sure to install with npm(**-g**).

#Wordpress Custom Post Types
To create a new [custom post type](https://codex.wordpress.org/Function_Reference/register_post_type), reference the (**_inc/custom_post_type.php_**). In this file you will find a working sample CPT (**_create_sample_post_type_**), copy and rename both the **_add_action_** and function name (**_create_sample_post_type_**). Update the (**_register_post_type name and array_**) settings to your new CPT.

#Wordpress Custom Taxonomies
To create a new [custom taxonomy](https://codex.wordpress.org/Taxonomies), reference the (**_inc/custom_taxonomies.php_**). In this file you can find a working sample taxonomy, copy and rename both the **_add_action_** and function name (**_add_sample_taxonomy_**). Update the **_$taxonomy_** variable  and **_$labels_** array settings to your new taxonomy Update the **_$object_type_** to set the CPT. 

#Wordpress Custom Meta Boxes
To create a new [custom meta box](https://developer.wordpress.org/reference/functions/add_meta_box/), reference the (**_inc/custom_meta_boxes.php_**). In this file you will find a working sample meta box (add_sample_meta). This meta box is displaying on the (**_create_sample_post_type_**) by default. This sample CPT and Meta Box are a template and should be used as a starting point in building your very own custom content types & data inputs. To save each custom meta box, add or update the values in the (**_sample_meta_box_save_**) function.

### Different Sample Input 
1. Input text (**_$sample_input_txt_**)
2. Select (**_$sample_select_txt_**)
3. Radio (**_$sample_radio_txt_**)
4. Textarea (**_$sample_textarea_txt_**)

#Wordpress Custom API Endpoints
 To create a new **_custom endpoint_** to use a frontend framework like **_[Angularjs](https://angularjs.org/)_**, **_[React](https://facebook.github.io/react/)_**, **_[Backbone](http://backbonejs.org/)_**, **_[Vuejs](https://vuejs.org/)_** or **_[Nodejs](https://nodejs.org/en/)_**, reference the (**_WP_Sample_API.php_**). Copy this file and create a new template page, paste in the code from **_WP_Sample_API.php_** and modify the **_post_type_** in the **_$args_** array. Then navigate to the **_WP admin_**, create a new page with the name of your **_API_** & set your page to the temaplate creating the API. Now when you navigate to that URL you can see your Wordpress data exposed and can now use it in your app.
