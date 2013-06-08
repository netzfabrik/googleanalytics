Google Analytics tracking snippet
=================================

This Zend Framework 2 module provides an implementation of the Google Analytics tracking snippet using a view helper for simple placement inside your layout.

## Installation

Install the module by adding the repository to your composer.json file:

	{
		"repositories": [
	        {
	            "type": "vcs",
	            "url": "https://github.com/netzfabrik/googleanalytics"
	        }
	    ],
	    "require": {
	        "netzfabrik/googleanalytics": "*"
	    }
	}	

Afterwards run a composer update to fetch the module to your vendor path

	composer update

Populate the new module in your application.config in the application root and you are done.

	return array(
		'modules' => array(
			'<some_module>',
			'<another_module>',
			'Googleanalytics'
		),

## Configuration

Place a configuration file in `config\autoload\googleanalytics.local.php` in your application root with the following content and replace `<your_website_property_id>` with your website account id provided by Google Analytics:

	<?php
	return array(
		'googleanalytics' => array(
			'property_id' => '<your_website_property_id>'
		)
	);


## Usage

You can place the snippet by invoking the view helper provided by this module. It is recommended to put it right before your `</body>` in your layout:

		// your layout markup
		...
		<?php echo $this->googleAnalytics() ?>
	   </body>
	  </html>