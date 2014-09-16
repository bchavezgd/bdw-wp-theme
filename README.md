BDW Theme
===

## Learning to make WP themes

Learning to create Wordpress themes, and customizations for the greater good.

Currently working though books, to make basic unstyled theme using compass/sass, Grunt, and brackets text editor.

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
	- *portfolio* custom post types 
		- this should be a plug-in.
	- common post types
		- aside, quote, status, etc.
- created `page.php`
- created `category-cars.php`
	- demo only
- added initial styling. 
- implimented Gruntfile.js
	- watch
		- currently runs compass then concat for style.css

 

--------

## Planned: 

- learn muliple loops. 
	- add featured loop 
		- calls from post in the "featured" category
	- add category loops 
		- similar to featured loop but styled differently. 
- add stylesheets for media queries. 
	- tablet (portrait) 
	- phone


---
## Bugs: 
**Media Library** *fixed*  

- not loading any images when trying to add media to a post/page. 
	- Media library from dashboard works fine when added or editing images. 
	- deactivated all plugins, nothing changed. 
	- changed to default twentyfourteen theme, works fine. problem exists in my theme. 
	- **fix attempts. **

		1. removed functions.php from root folder of theme, and media library worked fine.
			- removed comments. no change
			- removed white space. no change 
			- rearranged `generic content` section. 
				- corrected issue.
