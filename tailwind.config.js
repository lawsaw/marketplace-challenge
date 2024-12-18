import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // https://design.rozetka.com.ua/assets/common/css/_vars.css
                'global-green': '#00a046',
                'global-green-light': '#00bc52',
                'global-black': '#221f1f',
                'global-black-5': '#f5f5f5',
                'global-black-10': '#e9e9e9',
                'global-black-20': '#d2d2d2',
                'global-black-40': '#a6a5a5',
                'global-black-60': '#797878',
                'global-red': '#f84147',
                'global-orange': '#ff5c00',
                'global-yellow': '#ffa900',
                'global-blue': '#3e77aa',
                'global-blue-light': '#4096e3',
                'link-hover': '#ff7878',
            },
            spacing: {
                'symbol': '1ch',
            },
            fontSize: {
                '2xs': '0.625rem',
            }
        },
        typography: (theme) => ({
            default: {
                css: {
                    a: {
                        color: '#ff5c00',
                    },
                }
            }
        }),
    },
};


// --global-spacer: 4px;
// --header-color: #122538;
// --global-green: #00a046;
// --global-green-hsl: 146, 100%, 31%;
// --global-green-rgb: 0, 160, 70;
// --global-green-80: #44b26f;
// --global-green-60: #73c592;
// --global-green-40: #a1d8b6;
// --global-green-20: #d0ecdb;
// --global-green-10: #e5f5ec;
// --global-green-5: #f4faf6;
// --global-black: #221f1f;
// --global-black-hsl: 0, 5%, 13%;
// --global-black-rgb: 34, 31, 31;
// --global-black-80: #4d4b4b;
// --global-black-60: #797878;
// --global-black-40: #a6a5a5;
// --global-black-20: #d2d2d2;
// --global-black-10: #e9e9e9;
// --global-black-5: #f5f5f5;
// --global-red: #f84147;
// --global-red-hsl: 358, 93%, 61%;
// --global-red-rgb: 248, 65, 71;
// --global-orange: #ff5c00;
// --global-orange-hsl: 22, 100%, 50%;
// --global-orange-rgb: 255, 92, 0;
// --global-yellow: #ffa900;
// --global-yellow-hsl: 40, 100%, 50%;
// --global-yellow-rgb: 255, 169, 0;
// --global-lemon: #fed44b;
// --global-lemon-hsl: 46, 99%, 65%;
// --global-lemon-rgb: 254, 212, 75;
// --global-light-blue: #31a3db;
// --global-light-blue-hsl: 200, 70%, 53%;
// --global-light-blue-rgb: 49, 163, 219;
// --global-blue: #3e77aa;
// --global-blue-hsl: 208, 47%, 45%;
// --global-blue-rgb: 62, 119, 170;
// --global-purple: #712bd4;
// --global-purple-hsl: 265, 66%, 50%;
// --global-purple-rgb: 113, 43, 212;
// --global-pink: #d83798;
// --global-pink-hsl: 324, 67%, 53%;
// --global-pink-rgb: 216, 55, 152;
// --premiun-color: #471a7b;
// --premiun-color-rgb: 71, 26, 123;
// --loyalty-yellow: #f2e312;
// --link-color: #3e77aa;
// --link-hover-color: #ff7878;
// --main-icon-color: #ffa800;
// --main-icon-color-rgb: 255, 168, 0;
// --price-tag-color: #fef2b8;
// --main-font-family: 'Rozetka', BlinkMacSystemFont, -apple-system, Arial, "Segoe UI", Roboto, Helvetica, sans-serif;
// --brand-font-family: 'Rozetka', BlinkMacSystemFont, -apple-system, Arial, "Segoe UI", Roboto, Helvetica, sans-serif;
// --brand-font-family-bold: 'Rozetka Bold', BlinkMacSystemFont, -apple-system, Arial, "Segoe UI", Roboto, Helvetica, sans-serif;
// --common-font-size: 14px;
// --global-focus-shadow: 0 0 0 2px #6fc4e5;
