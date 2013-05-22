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

#### Works great with the [Moodle TinyMCE MathEditor](https://github.com/oohoo/moodle-tinymce_matheditor)
===

### Installation

1. Clone this repository `git clone https://github.com/oohoo/moodle-filter_mathjax.git mathjax`
2. `cd` into the root directory of the repository
3. Initialise the submodule `git submodule init`
4. Update the submodule `git submodule update`
5. Run the deployment script
  `make deploy`
6. This will create a zip file called `matheditor.zip` within the current directory
7. Upload this file to the Moodle plugin install interface and follow the instructions
  `http://moodle_root/admin/tool/installaddon/index.php`
8. Go to the Filter settings within Moodle (Administrative Settings->Plugins->Filters->Manage Filters)
9. Ensure the MathJax filter is enabled
