import App from './App';
import { render } from '@wordpress/element';

const pluginContainer = document.getElementById('plugin-boilerplate');
if (pluginContainer) {
    render(<App />, pluginContainer);
}
