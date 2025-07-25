<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/output.css">

    <script>
        document.documentElement.classList.toggle(
            "dark", localStorage.theme === "dark"
            || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches),
        );
    </script>
    <title><?= esc($title) ?></title>
</head>