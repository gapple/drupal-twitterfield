Description
-----------
This project implements a CCK widget and formatter for the Text field type
to store Twitter usernames, hashtags, and/or search queries.

The widget validates inputed values according to the widget settings.

Provided Field Formatters:
  Link: Renders the field contents as a link to the Twitter website. 
  Twitter Feed: Renders the field as a Twitter Profile Widget, 
                as provided by Twitter.com.

Usage
-----
1) Download and enable the module as usual. 
2) Create a text field on one of your content types.  It is recommended that you
set a maximum length for the field (at most 255 characters, but ~30 should be
sufficient).
3) Select the 'Twitter Item' Widget.
3) Change the display format from "Default" to one of the Twitter formatters.
4) Profit!

Credits
-------
The original 7.x module was sponsored by Bluespark Labs, and used in combination 
with a custom view, to build the individual profile pages at Bluesparklabs.com. 

The original 6.x module was developed by Geoff Appleby (gapple, http://drupal.org/user/490940).
