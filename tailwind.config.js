import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'theme-bg': '#2e2e2e',
        'theme-fg': '#83D8DA',
      },
      backgroundImage: {
        two: "url('/resources/images/bg-two.png')",
        three: "url('/resources/images/bg-three.png')",
        four: "url('/resources/images/bg-four.png')",
      },
    },
  },

  plugins: [forms, typography],
};
