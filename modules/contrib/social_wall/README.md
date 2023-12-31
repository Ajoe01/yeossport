CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Installation
 * Requirements
 * Configuration
 * Examples
 * Maintainers


INTRODUCTION
------------

This module provides a block with a list containing data from social networks.


INSTALLATION
------------

* Install the Social Networks Wall module as you would normally install a
  contributed Drupal module.
  Visit https://www.drupal.org/node/1897420 for further information.


REQUIREMENTS
------------

This module requires 2 external libraries (for Twitter & Instagram plugins),
that are automatically installed when requiring the module :

* `"abraham/twitteroauth": "^2"`
* `"pgrimaud/instagram-user-feed": "^6"`

CONFIGURATION
-------------

1. Create new social network (optional, for a specific need) :
   * Create a new plugin in `[your_module_name]/src/Plugin/SocialNetwork` that
   extends `SocialNetworkBase`
   * Implement at least these functions:
     * `getLabel()` : returns the label of the social network
     * `settingsForm(array $settings = [])`: returns the configuration form of this
   social network
     * `render()`: returns the social network render array
   * Clear your cache ;)

2. Configure social networks:
   * Go to `admin/config/services/social-wall` (or Configuration > Web services >
   Social networks) to configure existing social networks.
3. Display social wall block:
   Chose which social networks to display, and the order, in block configuration.
4. Override the display (optional):
   You can override block display by creating a `social-wall--block.html.twig`
  in your theme.


EXAMPLES
--------

This module contains 2 basic plugin examples in
 `social_wall/src/Plugin/SocialNetwork`:
* Twitter
* Instagram


MAINTAINERS
-----------

 * Nicolas Nucci (NicociN) - https://www.drupal.org/u/nicocin

Supporting organizations:

 * Ecedi - https://www.drupal.org/ecedi
