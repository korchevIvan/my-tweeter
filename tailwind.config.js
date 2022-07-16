/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
          'md': '640px',
          'js': '768px',
          'xl': '1024px',
        },
        extend: {
            boxShadow: {
                light: '0 0 15px 0 rgba(255, 255, 255, .1)'
            }
        },
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'important'],
        backgroundColor: ['responsive', 'hover', 'focus', 'important'],
        borderWidth: ['responsive', 'hover', 'focus', 'important'],
    },
    plugins: [],
}
