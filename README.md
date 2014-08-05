BDW Theme
===

## Learning to make WP themes

Learning to create Wordpress themes, and customizations for the greater good.

Currently working though _Wordpress Web Design for Dummies_, to make basic unstyled theme using compass/sass, and brackets text editor.

------
##Change Log:

- figured out the loop, and get_header/footer/sidebar/etc. 
- added widget areas
- added `nav_menu` theme support
- Linked to second stylesheet for compass opimization. 
- seperated loop into new file. 
	- `get_template_part('loop');`
- added theme support for:
	- widgets
	- *Generic Content* custom post types
	- common post types
		- aside, quote, status, etc.
- created `page.php`
- created `category-cars.php`
	- demo only
- added initial styling. 

--------

## Planned: 
- correctly create Style.sass so that compass will create the correct style.css 
- impliment **Grunt.js**
	- install `node.js`
	- figure out Grunt/Compass workflow
- add stylesheets for media queries. 
	- tablet (portrait) 
	- phone
