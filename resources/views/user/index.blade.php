<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Create Your Story</title>
  
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>


  <style>



/*Can you a beautiful styling @sauce code: Just did a little here*/

#wrapper {
	margin:auto;
	width:900px;
}


p,li {
	color: #555555;
	font-size: 16px;
	line-height: 1.5em;
}

a {
	color: #1fbdef;
	text-decoration: none;
}

form input {
	border: 1px solid #999999;
	border-bottom-color: #cccccc;
	border-right-color: #cccccc;
	padding: 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 1.0em;
	margin: 2px;
}







article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section,
summary {
    display: block;
}




html {
    font-size: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
    -ms-text-size-adjust: 100%; /* 2 */
}

/*
 * Addresses `font-family` inconsistency between `textarea` and other form
 * elements.
 */

html,
button,
input,
select,
textarea {
    font-family: sans-serif;
}

/
body {
    margin: 0;
}

a:focus {
    outline: thin dotted;
}

/*
 * Improves readability when focused and also mouse hovered in all browsers.
 * people.opera.com/patrickl/experiments/keyboard/test
 */

a:active,
a:hover {
    outline: 0;
}

/* ==========================================================================
   Typography
   ========================================================================== */

/*
 * Addresses font sizes and margins set differently in IE6/7.
 * Addresses font sizes within `section` and `article` in FF4+, Chrome, S5.
 */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

h2 {
    font-size: 1.5em;
    margin: 0.83em 0;
}

h3 {
    font-size: 1.17em;
    margin: 1em 0;
}

h4 {
    font-size: 1em;
    margin: 1.33em 0;
}

h5 {
    font-size: 0.83em;
    margin: 1.67em 0;
}

h6 {
    font-size: 0.75em;
    margin: 2.33em 0;
}

/*
 * Addresses styling not present in IE7/8/9, S5, Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}

/*
 * Addresses style set to `bolder` in FF3+, S4/5, Chrome.
 */

b,
strong {
    font-weight: bold;
}

blockquote {
    margin: 1em 40px;
}

/*
 * Addresses styling not present in S5, Chrome.
 */

dfn {
    font-style: italic;
}

/*
 * Addresses styling not present in IE6/7/8/9.
 */

mark {
    background: #ff0;
    color: #000;
}

/*
 * Addresses margins set differently in IE6/7.
 */

p,
pre {
    margin: 1em 0;
}

/*
 * Corrects font family set oddly in IE6, S4/5, Chrome.
 * en.wikipedia.org/wiki/User:Davidgothberg/Test59
 */

code,
kbd,
pre,
samp {
    font-family: monospace, serif;
    _font-family: 'courier new', monospace;
    font-size: 1em;
}

/*
 * Improves readability of pre-formatted text in all browsers.
 */

pre {
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word;
}

/*
 * Addresses CSS quotes not supported in IE6/7.
 */

q {
    quotes: none;
}

/*
 * Addresses `quotes` property not supported in S4.
 */

q:before,
q:after {
    content: '';
    content: none;
}

small {
    font-size: 75%;
}

/*
 * Prevents `sub` and `sup` affecting `line-height` in all browsers.
 * gist.github.com/413930
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* ==========================================================================
   Lists
   ========================================================================== */

/*
 * Addresses margins set differently in IE6/7.
 */

dl,
menu,
ol,
ul {
    margin: 1em 0;
}

dd {
    margin: 0 0 0 40px;
}

/*
 * Addresses paddings set differently in IE6/7.
 */

menu,
ol,
ul {
    padding: 0 0 0 40px;
}

/*
 * Corrects list images handled incorrectly in IE7.
 */

nav ul,
nav ol {
    list-style: none;
    list-style-image: none;
}

/* ==========================================================================
   Embedded content
   ========================================================================== */

/*
 * 1. Removes border when inside `a` element in IE6/7/8/9, FF3.
 * 2. Improves image quality when scaled in IE7.
 *    code.flickr.com/blog/2008/11/12/on-ui-quality-the-little-things-client-side-image-resizing/
 */

img {
    border: 0; /* 1 */
    -ms-interpolation-mode: bicubic; /* 2 */
}

/*
 * Corrects overflow displayed oddly in IE9.
 */

svg:not(:root) {
    overflow: hidden;
}

/* ==========================================================================
   Figures
   ========================================================================== */

/*
 * Addresses margin not present in IE6/7/8/9, S5, O11.
 */

figure {
    margin: 0;
}

/* ==========================================================================
   Forms
   ========================================================================== */

/*
 * Corrects margin displayed oddly in IE6/7.
 */

form {
    margin: 0;
}

/*
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/*
 * 1. Corrects color not being inherited in IE6/7/8/9.
 * 2. Corrects text not wrapping in FF3.
 * 3. Corrects alignment displayed oddly in IE6/7.
 */

legend {
    border: 0; /* 1 */
    padding: 0;
    white-space: normal; /* 2 */
    *margin-left: -7px; /* 3 */
}

/*
 * 1. Corrects font size not being inherited in all browsers.
 * 2. Addresses margins set differently in IE6/7, FF3+, S5, Chrome.
 * 3. Improves appearance and consistency in all browsers.
 */

button,
input,
select,
textarea {
    font-size: 100%; /* 1 */
    margin: 0; /* 2 */
    vertical-align: baseline; /* 3 */
    *vertical-align: middle; /* 3 */
}

/*
 * Addresses FF3/4 setting `line-height` on `input` using `!important` in the
 * UA stylesheet.
 */

button,
input {
    line-height: normal;
}

/*
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Corrects inability to style clickable `input` types in iOS.
 * 3. Improves usability and consistency of cursor style between image-type
 *    `input` and others.
 * 4. Removes inner spacing in IE7 without affecting normal text inputs.
 *    Known issue: inner spacing remains in IE6.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button; /* 2 */
    cursor: pointer; /* 3 */
    *overflow: visible;  /* 4 */
}

/*
 * Re-set default cursor for disabled elements.
 */

button[disabled],
input[disabled] {
    cursor: default;
}

/*
 * 1. Addresses box sizing set to content-box in IE8/9.
 * 2. Removes excess padding in IE8/9.
 * 3. Removes excess padding in IE7.
 *    Known issue: excess padding remains in IE6.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
    *height: 13px; /* 3 */
    *width: 13px; /* 3 */
}

/*
 * 1. Addresses `appearance` set to `searchfield` in S5, Chrome.
 * 2. Addresses `box-sizing` set to `border-box` in S5, Chrome (include `-moz`
 *    to future-proof).
 */

input[type="search"] {
    -webkit-appearance: textfield; /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box; /* 2 */
    box-sizing: content-box;
}

/*
 * Removes inner padding and search cancel button in S5, Chrome on OS X.
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/*
 * Removes inner padding and border in FF3+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/*
 * 1. Removes default vertical scrollbar in IE6/7/8/9.
 * 2. Improves readability and alignment in all browsers.
 */

textarea {
    overflow: auto; /* 1 */
    vertical-align: top; /* 2 */
}

/* ==========================================================================
   Tables
   ========================================================================== */

/*
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}



  </style>
</head>
<body>

<div id="wrapper">


	<p><a href="./">Return Home</a></p>

	<h2>Add New Story</h2>


	<form action='' method='post'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

		<p><label>Content</label><br />
		<textarea name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

	

		<p><input type='submit' name='submit' value='Publish'></p>

	</form>

</div>  