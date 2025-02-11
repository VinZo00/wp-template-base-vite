import General from './_general';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			// const test = "CIAO";
			return new General();
		}
		initGeneral();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
