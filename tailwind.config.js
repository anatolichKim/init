module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
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
        },
    },
    plugins: [],
}
