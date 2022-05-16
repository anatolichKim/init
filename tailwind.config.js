module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            container: {
                screens: {
                    sm: "100%",
                    md: "100%",
                    lg: "1024px",
                    xl: "1920px"
                },
            },
            flex: {
                '3': '1 0 auto',
                '4': '0 0 auto'
            },
            backgroundImage: {
                'arrow-down': "url(\"data:image/svg+xml,%3Csvg " +
                    "class='w-6 h-6' fill='none' stroke='white' " +
                    "viewBox='0 0 24 24' " +
                    "xmlns='http://www.w3.org/2000/svg'%3E%3Cpath " +
                    "stroke-linecap='round' " +
                    "stroke-linejoin='round' " +
                    "stroke-width='2' " +
                    "d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E\")",
            }
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
}

