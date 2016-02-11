# Panel Image - Display Images in the Kirby Panel
This additional panel field for [Kirby 2](http://getkirby.com) allows you to display images in your blueprints.

History: I had a client with an image heavy site that I'd created multiple "collage" templates for. In order to help the client remember the layout of each template, I created a chart demonstrating each. I created this plugin as a way to display this chart (or any other relevant explanatory images) in various blueprints. 


## Installation

If not already existing, add a new `fields` folder to your `site` directory. Then copy or link `panelimage.php` in a new `panelimage` folder there. Afterwards, your directory structure should look like this:

```yaml
site/
	fields/
		panelimage/
			panelimage.php
```

## Usage

### Within your blueprints

As soon as you dropped the field extension into your fields folder you can use it in your blueprints: simply add `panelimage` fields to your blueprints and set some options (where applicable).

```yaml
fields:
  image1:
    type: panelimage
    label: Lighting
    imageurl: http://i.imgur.com/4UVYofU.gif
```

The field works with the width option, fitting it's block 100% while maintaining the image's aspect ratio.
