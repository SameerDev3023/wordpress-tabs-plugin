# Custom Tabs WordPress Plugin

The Custom Tabs WordPress plugin allows users to create and manage custom tabs with different content.

## Features

- Create unlimited custom tabs
- Add unique content to each tab
- Easy management through an intuitive interface

## Installation

1. Download the plugin ZIP file.
2. In your WordPress admin panel, go to "Plugins" -> "Add New".
3. Click on the "Upload Plugin" button and select the downloaded ZIP file.
4. Click "Install Now" and then activate the plugin.

## Usage

1. Once the plugin is activated, you'll see a new menu item called "Custom Tabs" in the WordPress admin menu.
2. Click on "Custom Tabs" to access the custom tabs management page.
3. On this page, you can add, edit, and delete custom tabs.
4. For each custom tab, you can specify a title and add content using the built-in WordPress editor.
5. Save your changes.
6. To display the custom tabs on your website, you can use the `[custom-tabs]` shortcode in your posts or pages.

## Shortcode Parameters

The `[custom-tabs]` shortcode supports the following parameters:

- `title`: Specify a title for the custom tabs section. (Default: "Custom Tabs")
- `tabs`: Specify the number of tabs to display. (Default: all tabs)
- `order`: Specify the order in which the tabs should be displayed. Options: `asc` (ascending), `desc` (descending). (Default: "asc")

Example usage: `[custom-tabs title="My Tabs" tabs="3" order="desc"]`

## Frequently Asked Questions

**Q: Can I customize the appearance of the custom tabs?**
A: Yes, you can apply custom CSS styles to the tabs and their content by targeting the appropriate CSS classes or IDs.

**Q: Is there a limit to the number of custom tabs I can create?**
A: No, you can create as many custom tabs as you want.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please create a new issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
