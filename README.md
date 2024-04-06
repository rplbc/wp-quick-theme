# Quick

Quick is a minimal WordPress theme starter that provides a straightforward setup for building custom WordPress themes. It includes support for TypeScript and TailwindCSS.

## Usage

### Clone the repository

```bash
# in theme directory
git clone https://github.com/rplbc/wp-quick-theme
cd wp-quick-theme
```

### Install dependencies

```bash
pnpm install
composer install # stubs and PHP_CS
```

### Production

Run `pnpm build` to generate the following:

- `dist` folder with compiled styles, fonts, and JavaScript files,
- `.quick` folder containing all necessary files ready for export

### AlpineJS

Use of [Alpine](https://github.com/alpinejs/alpine) is optional. By default, I included [focus](https://alpinejs.dev/plugins/focus) plugin.

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
