# Wordpress plugin boilerplate

客製化 Wordpress(WP) plugin 模板 for React

## Development & build

### Preliminary

[開發]
1. 在{wp_location}/wp-content/plugins/ 目錄下 git clone 本專案
2. yarn install -> yarn start
3. 在 Wordpress admin panel啟用本plugin

[安裝]
1. yarn install -> yarn build 會產生 js script, 清除 node_modules/並將 folder 壓縮成 zip
2. 在 Wordpress admin panel 安裝該 zip 並啟用 plugin

P.S. WP 會把 plugin 放在 {wp_location}/wp-content/plugins/

### Development:

#### `yarn start`

### Build:

#### `yarn build`

## Reference:

- dev: https://codex.wordpress.org/
- plugin dev: https://developer.wordpress.org/plugins/intro/
- WP icon library: https://developer.wordpress.org/resource/dashicons
- WP UI storybook: https://wordpress.github.io/gutenberg/?path=/story/docs-introduction--page
- Wordpress + React https://devsenv.com/tutorials/start-wordpress-plugin-development-with-react-js-easily-in-just-few-steps
