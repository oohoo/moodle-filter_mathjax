# MathJax Filter for Moodle

This filter replaces the need for the latex filter in Moodle. It has a better display and supports more input types.
It also has the added benefit of being completely client-side, not requiring any server side LaTeX rendering.
It uses the fantastic [MathJax](http://www.mathjax.org/) library.

### Installation

1. Clone this repository `git clone https://github.com/oohoo/moodle-filter_mathjax.git mathjax`
2. `cd` into the root directory of the repository
3. Initialise the submodule `git submodule init`
4. Update the submodule `git submodule update`
5. Run the deployment script
  `make deploy`
