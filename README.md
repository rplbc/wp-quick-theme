# Quick

Quick helps you easily create custom WordPress themes using TypeScript, AlpineJS, and TailwindCSS.

## Quick start

1. Clone the repository into your _wp-content/themes_ directory.
2. Install dependencies by running `pnpm install` and `composer install`.
3. Generate the autoload file with `composer dump-autoload`.
4. Activate the theme from the WP admin panel.

### Development

The development process involves three main files:

- **main.ts**: The main TypeScript file.
- **main.css**: The main CSS file.

To start the development server, run `pnpm dev`.

### Production

Run `pnpm build` to generate `dist` folder with compiled styles, fonts, and JS files.

### AlpineJS

Using [Alpine](https://github.com/alpinejs/alpine) is optional. By default, [focus](https://alpinejs.dev/plugins/focus) plugin is included. See _header.php_ and _src/ts/alpine_.

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
