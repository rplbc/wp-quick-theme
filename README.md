# Quick

Quick offers a smooth start for crafting custom WordPress themes. Backed by TypeScript, AlpineJS, and TailwindCSS support, it transforms theme development into a fluid journey.

## Quick start

1. Clone the repository into your _wp-content/themes_ directory.
2. Install dependencies by running `pnpm install` and `composer install`.
3. Generate the autoload file with `composer dump-autoload`.
4. Activate the theme from the WP admin panel.
5. Optionally, personalize settings in the _quick.config.ts_ file.

### Development

The development process revolves around three core files:

- **main.ts**: The main TypeScript file.
- **main.css**: The primary CSS file.
- **editor.css**: Styles specifically for the editor (Note: This file does not support the reload feature).

To initiate the development server, run `pnpm dev`. By default, the theme loads files from the dist folder. However, in development mode, it additionally loads an extra dev-setup.php file. This file dequeues main.ts and main.css, instead loading them from the development server.

### Production

Run `pnpm build` to generate the following:

- `dist` folder with compiled styles, fonts, and JS files,
- `.quick` folder containing all necessary files ready for export

### AlpineJS

Use of [Alpine](https://github.com/alpinejs/alpine) is optional. By default, [focus](https://alpinejs.dev/plugins/focus) plugin is included. See _header.php_ and _src/ts/alpine_.

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
