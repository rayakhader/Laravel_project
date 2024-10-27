import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
           colors:{
               "black" : "#060606"
           },
           fontFamily:{
               "hanken-grotesk" : ["Hankan Grotesk" , "sans-serif"]
           },
            fontsize:{
               "2xs" : "10px"
            }
        },
    },
    plugins: [],
};
