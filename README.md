# Level Up Advanced 5th Edition Monster Data

This repository contains the monster data from the Level Up Advanced 5th Edition Dungeons & Dragons game in markdown format as YAML frontmatter. The files are generated from [the monster card JSON files](https://www.enworld.org/resources/a5e-monster-card-json-files.1617/) created by [Thomas Stump](https://www.enworld.org/members/thomas-stump.6909139/). The processing is done by a simple (and slightly nasty) PHP script which parses the original JSON and produces markdown files, embedding the monster data as frontmatter using the [YAML format](https://github.com/valentine195/obsidian-5e-statblocks#full-example) supported by [Jeremy Valentine's](https://github.com/valentine195) excellent [Obsidian TTRPG Statblocks](https://github.com/valentine195/obsidian-5e-statblocks) plugin.

## Using the files

- Download the 'Source code' bundle you prefer from the [latest release page](https://github.com/ronanchilvers/a5e-monster-data/releases). Both the `zip` and `tar.gz` contain the same data.
- Unpack the archive you downloaded
- Copy the files in the unpacked `markdown` folder into a subdirectory of your Obsidian vault, making sure that it is in a location that [TTRPG Statblocks is configured to look in for monster files](https://github.com/valentine195/obsidian-5e-statblocks#bestiary-folder).
- Restart Obsidian

The Level Up monsters should now be available as statblocks - **just make sure to add '- A5E' at the end of the name**:

````
```statblock
monster: Aboleth - A5E
```
````

## Processing the files

You'll need PHP installed locally.

- Clone this repository locally
- Run `composer install` to pull in the requirements
- Download the [latest data from the EN World resources page](https://www.enworld.org/resources/a5e-monster-card-json-files.1617/)
- Unzip the data and copy the JSON files directly into the `data` directory. The files may unzip into a new directory. Make sure you copy or move the JSON files themselves - don't just move the unzipped directory.
- Run the script like this
```
php process.php
```
- You should end up with a load of markdown files in the `markdown` directory
- Test them by copying them into your Obsidian vault and trying out a statblock
