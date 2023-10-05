/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {
        colors: {
        'regal-blue': '#243c5a',
      },

        // screens :{
        //     sm: "440px",
        //     md: "768px",
        //     lg: "1024px",
        // },
    },
    fontFamily :{
        oswald :['Oswand','sans-serif'],
        dmsans :['DM Sans','sans-serif']
    }
  },
  plugins: [],
}

