|=====================|
| Image Field Caption |
|=====================|

Provides a caption text area for image fields.

|==============|
| Installation |
|==============|

1. Download the module
2. Upload module to the sites/all/modules folder
3. Enable the module

|=======|
| Usage |
|=======|

1. Add a new image field to a content type, or use an existing image field
2. Add or edit a node with an image field
3. Go to the image field on the node form
4. Enter text into the caption text area
5. Save the node
6. View the node to see your image field caption

|===============|
| Caption Theme |
|===============|

By default, an image field's caption will be rendered below the image. To
customize the image caption display, copy the image_field_caption.tpl.php file
to your theme's directory and adjust the html for your needs. Flush Drupal's
theme registry cache to have it recognize your theme's new file:

  sites/all/themes/MY_THEME/image_field_caption.tpl.php

