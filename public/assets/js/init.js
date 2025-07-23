let theme = localStorage.getItem("theme");

if (!theme || (theme != "light" && theme != "dark"))
    theme = "dark";

document.getElementsByTagName("html")[0].classList.add(theme);
