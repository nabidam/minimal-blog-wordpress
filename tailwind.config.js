/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./template-parts/*.{php,html,js}", "./*.{php,html,js}"],
	theme: {
		extend: {
			colors: {
				"bg-main": "var(--bg-main)",
			},
		},
	},
	plugins: [],
};
