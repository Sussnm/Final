const $imagen = document.querySelector("#codigo"),
    $boton = document.querySelector("#btnDescargar");

fetch('conexion.php', { method: 'GET' })
    .then(res => res.json())
    .then(activo => {
        console.log(activo);

    }).catch(err => console.log(err));

    new QRious({
        element: $imagen,
        value: 'DEMIS', // La URL o el texto
        size: 500,
        backgroundAlpha: 0, // 0 para fondo transparente
        foreground: "#8bc34a", // Color del QR
        level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)

    });
    $boton.onclick = () => {
        const enlace = document.createElement("a");
        enlace.href = $imagen.src;
        enlace.download = "Código QR generado desde parzibyte.me.png";
        enlace.click();
    };

    