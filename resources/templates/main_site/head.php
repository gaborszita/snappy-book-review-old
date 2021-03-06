<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link href="/css/main.css" rel="stylesheet">
<script>
    function checkLogin() {
        const defaultStylesheet = document.createElement("style");
        defaultStylesheet.type = "text/css";
        defaultStylesheet.innerText = "#login-button, #signup-button, #logout-button { display: none; }";
        document.head.appendChild(defaultStylesheet);

        if (document.cookie.match(/^(.*;)?\s*<?php echo session_name(); ?>\s*=\s*[^;]+(.*)?$/)) {
            const stylesheet = document.createElement("style");
            stylesheet.type = "text/css";
            stylesheet.innerText = "#logout-button { display: list-item; }";
            document.head.appendChild(stylesheet);
            return true;
        } else {
            const stylesheet = document.createElement("style");
            stylesheet.type = "text/css";
            stylesheet.innerText = "#login-button, #signup-button { display: list-item; }";
            document.head.appendChild(stylesheet);
            return false;
        }
    }
    checkLogin();
</script>