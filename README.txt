=== Plugin Name ===
Contributors: hyperclock
Donate link: https://hyperclock.eu
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Quickly and efficiently create a highly-flexible Tutorial Area within your ClassicPress project.

== Description ==

As the name suggests, [King Tut](https://github.com/My-CP-Dev-Space/king-tut/) will allow you to create a tutorial section on your ClassicPress project.

The plugin was born after I tried several free Knowledgebase plugins and themes out there and that couldn't fit my purpose. It's designed to be very easy to install and use out of the box and I'll be adding more features into the core and as addons.

The plugin uses a custom post in conjunction with custom taxonomies to create and display your tutorials.


= Main features: =

* Uses a custom post type `king_tut` with a slug of `ktut` ensuring your data always stays even if you choose to delete this plugin
* Customizable permalinks: Archives are enabled so your knowledge base can be viewed at `/king-tut/` automatically on activation. You can change this in the Settings page
* Uses Categories ( `ktcategory` ) to automatically draw up the tutorial area. You will need at least one category in order to display the tutorials.
* Additionally tags ( `kt-tags` ) can also be used for each tutorial article
* Shortcode `[kingtut]` will allow you to display the knowledge base on any page of your choosing
* Breadcrumbs: Default templates include breadcrumbs. Alternatively, use functions or shortcode to display this where you want
* Widgets: KTUT Articles, KTUT Sections and KTUT Breadcrumbs
* Inbuilt styles that display the tutorial beautifully and are fully responsive - Uses the [Responsive Grid System](http://www.responsivegridsystem.com/)
* Supports unlimited nested of categories
* Inbuilt cache to speed up the display of your tutorial articles

= Contribute =

If you have an idea, I'd love to hear it. King Tut is also available on [Github](https://github.com/My-CP-Dev-Space/king-tut). You can [create an issue on the Github page](https://github.com/My-CP-Dev-Space/king-tut/issues) or, better yet, fork the plugin, add a new feature and send me a pull request.


== Installation ==

= ClassicPress install (The easy way) =

1. Navigate to “Plugins” within your ClassicPress Admin Area
2. Click “Add new” and in the search box enter “King Tut”
3. Find the plugin in the list (usually the first result) and click “Install Now”
4. Activate or Network activate the Plugin in WP-Admin under the Plugins screen

= Manual install =

Download the plugin
1. Extract the contents of king-tut.zip to wp-content/plugins/ folder. You should get a folder called king-tut.
2. Activate or Network activate the Plugin in WP-Admin under the Plugins screen
3. Create a new page or edit an existing one and add the shortcode `[ktut]` to set up this page to display the tutorial
4. Visit `King Tut &raquo; Add New` to add new Articles to the tutorial
5. Visit `King Tut &raquo; Sections` to add new categories to the tutorials. Alternatively, you can add new categories from the meta box in the Add New page

The plugin supports unlimited levels of category hierarchy, however, the recommended setting for creating the tutorial is to create a top level category with the name of the tutorial and sub-level categories for each section of this tutorial.


== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==


== Upgrade Notice ==


== Arbitrary section ==

