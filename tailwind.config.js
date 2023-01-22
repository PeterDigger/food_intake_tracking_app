/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './includes/**/*.php',
    './public/**/*.{js,php}',
    // './backends/**/*.{php}'
  ],
  theme: {
    extend: {
      colors: {
        'dgreen-rgba': 'rgba(143, 188, 187, 1)',
      },
    },
  },
  plugins: [],
}
