const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                md: '4rem',
                lg: '8rem',
                xl: '10rem',
                '2xl': '16rem',
            },
        },
        extend: {
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            green: {
                50: '#e6f2eb',
                100: '#c1f1d5',
                200: '#97e7b9',
                300: '#6ede9c',
                400: '#44d580',
                500: '#2ecc71',
                600: '#2abb67',
                700: '#219150',
                800: '#186839',
                900: '#13532e',
            },
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
            red: colors.red,
        }
    },

    plugins: [
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
    
    daisyui: {
        themes: [
          {
            'mytheme': {                          /* your theme name */
               'primary' : '#2ECC71',           /* Primary color */
               'primary-focus' : '#0ba84f',     /* Primary color - focused */
               'primary-content' : '#ffffff',   /* Foreground content color to use on primary color */
    
               'secondary' : '#f6d860',         /* Secondary color */
               'secondary-focus' : '#f3cc30',   /* Secondary color - focused */
               'secondary-content' : '#ffffff', /* Foreground content color to use on secondary color */
    
               'accent' : '#37cdbe',            /* Accent color */
               'accent-focus' : '#2aa79b',      /* Accent color - focused */
               'accent-content' : '#ffffff',    /* Foreground content color to use on accent color */
    
               'neutral' : '#3d4451',           /* Neutral color */
               'neutral-focus' : '#2a2e37',     /* Neutral color - focused */
               'neutral-content' : '#ffffff',   /* Foreground content color to use on neutral color */
    
               'base-100' : '#ffffff',          /* Base color of page, used for blank backgrounds */
               'base-200' : '#f9fafb',          /* Base color, a little darker */
               'base-300' : '#d1d5db',          /* Base color, even more darker */
               'base-content' : '#1f2937',      /* Foreground content color to use on base color */
    
               'info' : '#2094f3',              /* Info */
               'success' : '#009485',           /* Success */
               'warning' : '#ff9900',           /* Warning */
               'error' : '#ff5724',             /* Error */
            },
          },
        ],
      },
};