import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/filament/**/*.blade.php',
        './Modules/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#fff1f1',
                    100: '#ffe0e0',
                    200: '#ffc6c6',
                    300: '#ff9e9e',
                    400: '#ff6666',
                    500: '#ff3636',
                    600: '#ff0000', // RED BRAND COLOR
                    700: '#e60000',
                    800: '#b30000',
                    900: '#8a0000',
                    950: '#4d0000',
                },
                dark: {
                    100: '#1e1e1e',
                    200: '#161616',
                    300: '#0f0f0f',
                    400: '#0a0a0a',
                    500: '#050505',
                    600: '#000000',
                },
                accent: {
                    gold: '#FFD700',
                    silver: '#C0C0C0',
                    bronze: '#CD7F32',
                }
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Poppins', 'sans-serif'],
                heading: ['Montserrat', 'sans-serif'],
                body: ['Inter', 'sans-serif'],
            },
            fontSize: {
                'xxs': '0.625rem',
                'xs': '0.75rem',
                'sm': '0.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '3.75rem',
                '7xl': '4.5rem',
                '8xl': '6rem',
                '9xl': '8rem',
            },
            animation: {
                'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'bounce-slow': 'bounce 2s infinite',
                'float': 'float 6s ease-in-out infinite',
                'glow': 'glow 3s ease-in-out infinite',
                'slide-up': 'slideUp 0.5s ease-out',
                'slide-down': 'slideDown 0.5s ease-out',
                'fade-in': 'fadeIn 0.5s ease-out',
                'scale-in': 'scaleIn 0.3s ease-out',
                'spin-slow': 'spin 3s linear infinite',
                'marquee': 'marquee 25s linear infinite',
                'blink': 'blink 1s step-end infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                glow: {
                    '0%, 100%': { boxShadow: '0 0 20px rgba(255, 0, 0, 0.3)' },
                    '50%': { boxShadow: '0 0 40px rgba(255, 0, 0, 0.6)' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                slideDown: {
                    '0%': { transform: 'translateY(-20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                scaleIn: {
                    '0%': { transform: 'scale(0.9)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
                marquee: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
                blink: {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0' },
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                'hero-pattern': "url('/images/hero-bg.jpg')",
                'noise': "url('/images/noise.png')",
            },
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
                '128': '32rem',
                '144': '36rem',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
            boxShadow: {
                'neon': '0 0 5px theme(colors.primary.600), 0 0 20px theme(colors.primary.600)',
                'neon-strong': '0 0 10px theme(colors.primary.600), 0 0 40px theme(colors.primary.600)',
                'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.37)',
            },
        },
    },

    plugins: [forms, typography, aspectRatio],
};
