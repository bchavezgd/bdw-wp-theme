BDW Theme
===

## Learning to make WP themes

Learning to create WordPress themes, and customization for the greater good.

Currently working though books, to make basic un-styled theme using compass/sass, Grunt, and brackets text editor.

------
##Change Log:

2014/10/07: "Do-si-do" 

- separating content from loop with `get_template_part('content',get_post_format()):`
	- created files:
		- content-single.php
		- content-home.php
			- to call into the home featured loops. 
			- change name to content-featured.php
		- content.php

2014/10/06:  "all the changes"

- finished working featured loop also added second and third loop. 
	- need to add them to a conditional statement so they won't show if nothing is in specific categories. 
- created color scheme system.
	- by selecting 5 colors the color scheme can be easily changed via color variables.
- created more logical modular scss files. 
- started to responsive logic, ie `.row`


old: 

- figured out the loop, and get_header/footer/sidebar/etc. 
- added widget areas
- added `nav_menu` theme support
- Linked to second stylesheet for compass optimization. 
- separated loop into new file. 
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
- implemented `Gruntfile.js`
	- watch
		- currently runs compass then concat for style.css

 

--------

## Planned: 

- add stylesheet for media queries. 
	- tablet (portrait) 
	- phone


---
## Bugs: 
**Media Library** *fixed*  

- not loading any images when trying to add media to a post/page. 
	- Media library from dashboard works fine when added or editing images. 
	- deactivated all plugins, nothing changed. 
	- changed to default twentyfourteen theme, works fine. problem exists in my theme. 
	- **fix attempts.**

		1. removed functions.php from root folder of theme, and media library worked fine.
			- removed comments. 
				- no change
			- removed white space. 
				- no change 
			- rearranged `generic content` section. 
				- corrected issue.
