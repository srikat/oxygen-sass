# Oxygen Sass #

A companion plugin to WP-SCSS for working with Sass (.scss format) in [Oxygen](http://oxygenbuilder.com/).

## Info ##

[WP-SCSS](https://wordpress.org/plugins/wp-scss/) can be used to compile .scss files but it relies on the directories for the input and output to be present in the theme.

Since Oxygen disables the theme completely, we need to come up with a way to change these directories to point to a different location that we have access to and that is what this plugin does.

Oxygen Sass plugin sets the value of WPSCSS_THEME_DIR constant to point to its directory and comes with `scss` and `css` directories.

In WP-SCSS's settings, set Scss Location to `/scss/` and CSS Location to `/css/` and you are ready to use Sass features like Variables, Nesting, Partials, Import, Mixins and Operators working in your Oxygen site.

This plugin also loads the compiled CSS file in both the Oxygen editor and frontend.

Overview video: https://www.youtube.com/watch?v=Ia7WFY0ydlo

## Prerequisites ##

[WP-SCSS](https://wordpress.org/plugins/wp-scss/) should be installed and activated.

## Installation ##

1. Click on the `Download ZIP` button at the right to download the plugin.
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin.

## Usage ##

1. Go to Settings > WP-SCSS. Set Scss Location to `/scss/` and CSS Location to `/css/`. Make sure "Enqueue Stylesheets" is not ticked. Save changes.
2. Connect to your server using a FTP client and navigate to the plugin directory.
3. The plugins includes sample folder structure and has some partials, mixins and sample code for variables.
4. Visit any page of your site and you should see the compiled CSS code inside the plugin's css/style.css.
5. Observe how it is put together and make changes as necessary.
6. After you have finished the development, comment out or delete `define( 'WP_SCSS_ALWAYS_RECOMPILE', true );` in plugin.php.

## Changelog ##

### 1.0.0 ###
* Initial Release
