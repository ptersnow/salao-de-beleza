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
        },
        "green": {
            100: "#CCF4E6",
            500: "#69B99D",
            900: "#0F241D"
        }
    },
    extend: {},
  },
  plugins: [],
}
