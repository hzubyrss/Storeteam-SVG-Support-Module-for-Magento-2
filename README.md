# Storeteam-SVG-Support-Module-for-Magento-2
The SVG Support module is designed to extend Magento 2's core functionality to support SVG files. It modifies the image adapter configuration to add support for SVG files, allowing them to be uploaded and processed within Magento.

Download the Code: Clone or download the repository into the created directory.

Enable the Module: Run the following commands from the root of your Magento 2 

php bin/magento module:enable Storeteam_St_svgsupport
php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento setup:static-content:deploy -f

Verify the Module: Run php bin/magento module:status and ensure the module is listed under 'List of enabled modules.'

Usage
The module automatically allows SVG files to be uploaded and processed within Magento 2. There is no additional configuration required.

Support and Compatibility
Magento 2.3.x, 2.4.x
PHP 7.3, 8.1
Contributing
We welcome contributions to the Storeteam_St_svgsupport module. Feel free to submit pull requests or open issues if you find any problems or have suggestions for improvements.

License
MIT License

Security Considerations
Before enabling SVG support, please consider the potential security implications of allowing SVG uploads. Ensure that proper security measures are in place to prevent potential vulnerabilities.

