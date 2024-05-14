import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: ['./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', './storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            colors: {
                background: 'hsl(20 14.3% 4.1%)',
                foreground: 'hsl(0 0% 95%)',
                card: 'hsl(24 9.8% 10%)',
                'card-foreground': 'hsl(0 0% 95%)',
                popover: 'hsl(0 0% 9%)',
                'popover-foreground': 'hsl(0 0% 95%)',
                primary: 'hsl(142.1 70.6% 45.3%)',
                'primary-foreground': 'hsl(144.9 80.4% 10%)',
                secondary: 'hsl(240 3.7% 15.9%)',
                'secondary-foreground': 'hsl(0 0% 98%)',
                muted: 'hsl(0 0% 15%)',
                'muted-foreground': 'hsl(240 5% 64.9%)',
                accent: 'hsl(12 6.5% 15.1%)',
                'accent-foreground': 'hsl(0 0% 98%)',
                destructive: 'hsl(0 62.8% 30.6%)',
                'destructive-foreground': 'hsl(0 85.7% 97.3%)',
                border: 'hsl(240 3.7% 15.9%)',
                input: 'hsl(240 3.7% 15.9%)',
                ring: 'hsl(142.4 71.8% 29.2%)',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
