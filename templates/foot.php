
<script type="text/javascript" src="./js/materialize.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
        var instance = M.Tabs.init(elems);
    });
</script> 

<script>
    $('#textarea1').val('New Text');
    M.textareaAutoResize($('#textarea1'));
</script>

<script>
    const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");// Escuchar cuando cambie
    $seleccionArchivos.addEventListener("change", () => {  // Los archivos seleccionados, pueden ser muchos o uno
    const archivos = $seleccionArchivos.files;  // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        $imagenPrevisualizacion.src = "";
        return;
    }  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];  // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);  // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
});
</script>

</body>
</html>