# ACF Field Type Template

Welcome to the Advanced Custom Fields field type template repository.
Here you will find a starter-kit for creating a new ACF field type. This start-kit will work as a normal WP plugin.

For more information about creating a new field type, please read the following article:
http://www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/

### Structure

* `/css`:  folder for .css files.
* `/images`: folder for image files
* `/js`: folder for .js files
* `/lang`: folder for .pot, .po and .mo files
* `acf-uneditable_data.php`: Main plugin file that includes the correct field file based on the ACF version
* `uneditable_data-v5.php`: Field class compatible with ACF version 5
* `uneditable_data-v4.php`: Field class compatible with ACF version 4
* `readme.txt`: WordPress readme file to be used by the wordpress repository

### step 1.

This template uses `PLACEHOLDERS` such as `uneditable_data` throughout the file names and code. Use the following list of placeholders to do a 'find and replace':

* `uneditable_data`: Single word, no spaces. Underscores allowed. eg. donate_button
* `Uneditable data`: Multiple words, can include spaces, visible when selecting a field type. eg. Donate Button
* `https://github.com/firstflight/acf-field-type-uneditable-data`: Url to the github or WordPress repository
* `acf, acf field, uneditable data`: Comma seperated list of relevant tags
* `Field type for Advanced Custom Field to display data and preventing the user from editing it.`: Brief Field type for Advanced Custom Field to display data and preventing the user from editing it. of the field type, no longer than 2 lines
* `EXTENDED_Field type for Advanced Custom Field to display data and preventing the user from editing it.`: Extended Field type for Advanced Custom Field to display data and preventing the user from editing it. of the field type
* `Björn Folbert for First Flight Communication`: Name of field type author
* `http://www.firstflight.se`: URL to author's website

### step 2.

Edit the `uneditable_data-v5.php` and `uneditable_data-v4.php` files (now renamed using your field name) and include your custom code in the appropriate functions.
Please note that v4 and v5 field classes have slightly different functions. For more information, please read:
* http://www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/

### step 3.

Edit this `README.md` file with the appropriate information and delete all content above and including the following line.

-----------------------

# ACF Uneditable data Field

Field type for Advanced Custom Field to display data and preventing the user from editing it.

-----------------------

### Field type for Advanced Custom Field to display data and preventing the user from editing it.

EXTENDED_Field type for Advanced Custom Field to display data and preventing the user from editing it.

### Compatibility

This ACF field type is compatible with:
* ACF 5
* ACF 4

### Installation

1. Copy the `acf-uneditable_data` folder into your `wp-content/plugins` folder
2. Activate the Uneditable data plugin via the plugins admin page
3. Create a new field via ACF and select the Uneditable data type
4. Please refer to the Field type for Advanced Custom Field to display data and preventing the user from editing it. for more info regarding the field type settings

### Changelog
Please see `readme.txt` for changelog
