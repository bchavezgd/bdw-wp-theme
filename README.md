BDW Theme
===

## Learning to make WP themes

Learning to create Wordpress themes, and customizations for the greater good.

Currently working though books, to make basic unstyled theme using compass/sass, and brackets text editor.

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

---
## Bugs: 
### Media Library 
- not loading any images when trying to add media to a post/page. 
	- Media library from dashboard works fine when added or editing images. 
	- deactivated all plugins, nothing changed. 
	- changed to default twentyfourteen theme, works fine. problem exists in my theme. 
#### fix attempts. 
1. removed functions.php from root folder of theme, and media library worked fine. 
	- issue is in functions.php for sure. 
	- removed comments. 
	- removed white space. 
	- rearranged `generic content` section. 
		- corrected issue. 