<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;" />
    <link rel="stylesheet" media="screen" href="./Beispiel:SELFHTML-Beispiel-Grundlayout.css" />
    <title>JS - File Upload - 2</title>
    <style>
        img {
            height: 100px;
        }

        #dropzone {
            width:90%;
            height: 200px;
            padding: 2%;
            background: white;
            border: 1px solid #666;
        }

    </style>
</head>
<body>
<h1>JS - File Upload - 2</h1>
<main>
    <div id="dropzone">
        Ziehen Sie Ihre Dateien mit Drag & Drop hier herein:<br>
        (Durch Drücken der [strg]-Taste können Sie mehrfach auswählen!)
    </div>
    <output id="list"></output>
</main>
<script>
    function dateiauswahl(evt) {
        evt.stopPropagation();
        evt.preventDefault();

        var gewaehlteDateien = evt.dataTransfer.files; // FileList Objekt


        var output = [];
        for (var i = 0, f; f = gewaehlteDateien[i]; i++) {
            output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                f.size, ' bytes, last modified: ',
                f.lastModifiedDate.toLocaleDateString(), '</li>');
        }
        document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
    }

    function handleDragOver(evt) {
        evt.stopPropagation();
        evt.preventDefault();
        evt.dataTransfer.dropEffect = 'copy';
    }

    // Initialisiere Drag&Drop EventListener
    var dropZone = document.getElementById('dropzone');
    dropZone.addEventListener('dragover', handleDragOver, false);
    dropZone.addEventListener('drop', dateiauswahl, false);
</script>
</body>
</html>