import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/app/**/*.{js,ts,jsx,tsx}",
    ],
    darkMode:"class",
    theme: {
        extend: {
            fontFamily:{
                'sans':['"Cardo"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: 'rgb(var(--primary) / <alpha-value>)',
                'primary-darker': 'rgb(var(--primary-darker) / <alpha-value>)',
                'primary-lighter':
                    'rgb(var(--primary-lighter) / <alpha-value>)',
                'on-primary': 'rgb(var(--on-primary) / <alpha-value>)',

                secondary: 'rgb(var(--secondary) / <alpha-value>)',
                'secondary-darker':
                    'rgb(var(--secondary-darker) / <alpha-value>)',
                'secondary-lighter':
                    'rgb(var(--secondary-lighter) / <alpha-value>)',
                'on-secondary': 'rgb(var(--on-secondary) / <alpha-value>)',

                surface: 'rgb(var(--surface) / <alpha-value>)',
                'surface-container':
                    'rgb(var(--surface-container) / <alpha-value>)',
                'surface-container-low':
                    'rgb(var(--surface-container-low) / <alpha-value>)',
                'surface-container-high':
                    'rgb(var(--surface-container-high) / <alpha-value>)',
                'surface-container-highest':
                    'rgb(var(--surface-container-highest) / <alpha-value>)',
                outline: 'rgb(var(--outline) / <alpha-value>)',

                title: 'rgb(var(--title) / <alpha-value>)',
                body: 'rgb(var(--body) / <alpha-value>)',

                muted: 'rgb(var(--muted) / <alpha-value>)',
                error: 'rgb(var(--error) / <alpha-value>)',
                'error-container':
                    'rgb(var(--error-container) / <alpha-value>)',

                active: 'rgb(var(--active) / <alpha-value>)',
                'active-darker': 'rgb(var(--active-darker) / <alpha-value>)',
                'active-lighter': 'rgb(var(--active-lighter) / <alpha-value>)',
                'active-container':
                    'rgb(var(--active-container) / <alpha-value>)',

                danger: 'rgb(var(--danger) / <alpha-value>)',
                'danger-darker': 'rgb(var(--danger-darker) / <alpha-value>)',
                'danger-lighter': 'rgb(var(--danger-lighter) / <alpha-value>)',
                'danger-container':
                    'rgb(var(--danger-container) / <alpha-value>)',
                'on-danger': 'rgb(var(--on-danger) / <alpha-value>)',

                warning: 'rgb(var(--warning) / <alpha-value>)',
                'warning-darker': 'rgb(var(--warning-darker) / <alpha-value>)',
                'warning-lighter':
                    'rgb(var(--warning-lighter) / <alpha-value>)',
                'warning-container':
                    'rgb(var(--warning-container) / <alpha-value>)',
                'on-warning': 'rgb(var(--on-warning) / <alpha-value>)',

                success: 'rgb(var(--success) / <alpha-value>)',
                'success-darker': 'rgb(var(--success-darker) / <alpha-value>)',
                'success-lighter':
                    'rgb(var(--success-lighter) / <alpha-value>)',
                'success-container':
                    'rgb(var(--success-container) / <alpha-value>)',
                'on-success': 'rgb(var(--on-success) / <alpha-value>)',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')({
        strategy: 'base',
    })],
};
