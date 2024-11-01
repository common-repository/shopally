=== Shopally WordPress plugin ===
Contributors: shopally
Donate link: https://www.theshopally.com
Tags: shopally
Requires at least: 2.6.0
Tested up to: 3.5
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Help you to display shopally products in the posts or pages.

== Description ==

This plugin is a complementary helper for people who uses the shopally services directly in his blog or own WP site.
If your are not a shopally user, please visit https://www.theshopally.com/ and send a request to use it services.

This plugin manages the product links that shopally users can generate from their own account, and the campaign links in which they take part.
For any help about this plugin, its installation and its usage, please contact by email shopally at contact@theshopally.com.

The shopally plugin allows the shopally users to add galleries of relevant products on a post or page with images, pricing and retailer information.
The plugin transforms the links of shopally product to a small html code with an image and some specific information about the product.

You have to know that the plugin will not modify the content of the post itself, but just modify the presentation when the browser will load it (if the javascript is not disabled on the browser).
No data will be modified in the database, and the posts and pages you create are not transformed if you deactive the plugin.
You just need to insert your shopally links as normal link when your write your content, but not to build the html by yourself. The plugin will do it for you and you will earn time.


The plugin works with a javascript (https://www.theshopally.com/assets/frontend/js/blog.min.js) and a css code (https://www.theshopally.com/assets/frontend/css/blog.min.css), included in the post or the page.
(You can read a human version of the code if you remove the ".min" extension of the files.)
Of course, you can use this code independently of the WP plugin, but we recommend to use the WP plugin as an easy way to insert the code in your pages.
You will also be automatically warned about new plugin releases and complementary services.

The javascript code first detects your shopally links products.
To detect both short (shpl.ly) and long url (theshopally.com) that the shopally users usually use, the code has to call the shopally REST API to expand the short url (https://data.theshopally.com/urls/expand?url=<encoded_url>).
If a link is detected that points to a shopally product, the javascript code calls the shopally REST API to retrieve the data of the corresponding product (https://data.theshopally.com/products/<product_key>).
These API calls do not request any authentication.
Then the javascript code transforms the current link and display the product information.
If a campaign link is also found, it will increment the user own shopally analytics that contribute to his shopally reputation for the brand he works with. These analytics will be retrievable in the user dashboard beside the other social networks statistics.
The javascript code is pure native javascript and does not use any framework to avoid mismatch.

The css file just inserts some new classes used to format the added html. All classes are prefixed with "shopally" to avoid mismatches.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/shopally` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

For any question about shopally services, please visit https://theshopally.com or send a email at shopally@theshopally.com.

= Where can I generate a shopally link ? =

To generate a shopally link, you must be a shopally user. Please visit https://www.theshopally.com/ and send a request to use it services.

= How to insert a shopally link ? =

When you have generated your shopally link, just insert it as a normal link into your content.
It will be automatically converted by the plugin.



== Changelog ==

= 0.1.0 =
* init

== Upgrade Notice ==

NA

== Screenshots ==

Screenshots can be founded in ./assets/

* screenshot-1.png: This screenshot represents three links of a shopally product as displayed by the plugin.
* screenshot-2.png: This screenshot represents three links of a shopally product in the post creation page, with WYSIWYG panel editor.
* screenshot-2.png: This screenshot represents three links of a shopally product in the post creation page, with text panel editor.
