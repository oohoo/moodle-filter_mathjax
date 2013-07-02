# MathJax Filter for Moodle

This filter replaces the need for the latex filter in Moodle. It has a better display and supports more input types.
It also has the added benefit of being completely client-side, not requiring any server side LaTeX rendering.
It uses the fantastic [MathJax](http://www.mathjax.org/) library.

This filter renders any LaTeX within Moodle that is surrounded by special delimiters using the MathJax library. 
There are currently two types of LaTeX that can be rendered:
* **Block**<br/>
  Delimiters: `$$` and `$$`<br/>
  Example: `$$ \sqrt{123} $$`<br/><br/>
* **Inline**<br/>
  Delimiters: `\(` and `\)`<br/>
  Example: `\( \sqrt{123} \)`<br/><br/>

## Installation

1. Get the zip file mathjax.zip ([DOWNLOAD](http://dl.bintray.com/raywainman/generic/mathjax.zip?direct))
2. Upload this file to the Moodle plugin install interface and follow the instructions
  `http://moodle_root/admin/tool/installaddon/index.php`
3. Go to the Filter settings within Moodle (Administrative Settings->Plugins->Filters->Manage Filters)
4. Ensure the MathJax filter is enabled

** NOTE: Moodle may not accept this zip file due to its size, alternatively:
1. Extract the zip file above into `moodle_root/filter`
2. Visit the administration notification page `http://moodle_root/admin/index.php`
3. Go to the Filter settings within Moodle (Administrative Settings->Plugins->Filters->Manage Filters)
4. Ensure the MathJax filter is enabled

#### Works great with the [Moodle TinyMCE MathEditor](https://github.com/oohoo/moodle-tinymce_matheditor)

# Development

### Instructions

1. Clone this repository `git clone https://github.com/oohoo/moodle-filter_mathjax.git mathjax` into the 
  `moodle_root/filter` directory
2. `cd` into the root directory of the repository
3. Initialise the submodule `make submodule`
4. Visit the administration notification page `http://moodle_root/admin/index.php`
5. Go to the Filter settings within Moodle (Administrative Settings->Plugins->Filters->Manage Filters)
6. Ensure the MathJax filter is enabled
7. **To Deploy:** run `make deploy`
8. This will create a file called `mathjax.zip` within the current directory ready for distribution

### Update Submodule

1. Ensure you have done instructions 1-3 above
2. Update the submodule `make update` this will fetch the latest version of MathJax
3. **To Deploy:** run `make deploy`
4. This will create a file called `mathjax.zip` within the current directory ready for distribution
