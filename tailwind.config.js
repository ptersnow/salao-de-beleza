/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php'
  ],
  theme: {
    colors: {
        "white": "#FFFFFF",
        "gray": {
            100: "#F9F9F9",
            200: "#E4E4E4",
            500: "#767676"
        }
    },
    extend: {},
  },
  plugins: [],
}
