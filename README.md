# Blog page

This a blog listing page template that pulls in WordPress posts’ content.

For an easy test, the files can be contained in a folder as a theme child.

## Clarifications

* The **hero** section uses the page title, content and featured image.

* The company logo on the header can be added from Customize -> Site identity -> Logo

## Assets set up
The project assets can be set using gulp. First, install the following dependencies:
* gulp
* gulp-autoprefixer
* gulp-clean-css
* gulp-minify
* gulp-notify
* gulp-rename
* gulp-sass
* gulp-webserver
* run-sequence

Then create the folders and files needed following the structure used in the provided **gulpfile.js**.

Run `gulp build` to create the CSS and minimized files.

Use `gulp watch` before modifying any file so all changes are saved in real-time.