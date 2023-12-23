<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photoshop</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.6/fabric.min.js"></script>
    <style>
        body {
            background-color: #1e1e1e; /* Couleur de fond sombre */
            color: #ffffff; /* Couleur du texte */
            font-family: 'Arial', sans-serif; /* Police de caractères */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #canvas-container {
            position: relative;
            max-width: 80vw; /* Largeur maximale pour le conteneur du canvas */
            max-height: 80vh; /* Hauteur maximale pour le conteneur du canvas */
            overflow: hidden;
        }

        canvas {
            display: block;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
        }

        input[type="file"],
        button,
        select {
            margin-top: 20px;
            padding: 10px;
        }

        button {
            background-color: #3498db; /* Couleur de fond du bouton */
            color: #ffffff; /* Couleur du texte du bouton */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        #zoom-buttons {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="canvas-container">
        <div id="zoom-buttons">
            <button onclick="zoomIn()">Zoom In</button>
            <button onclick="zoomOut()">Zoom Out</button>
        </div>
        <input type="file" id="imageInput" />
        <canvas id="canvas" width="800" height="600"></canvas>
    </div>
    <select id="filterSelect">
        <option value="grayscale">Niveau de gris</option>
        <!-- Ajoutez d'autres options selon vos besoins -->
    </select>
    <input type="color" id="colorPicker" />
    <button onclick="applyFilter()">Appliquer le filtre</button>
    <script>
        var canvas = new fabric.Canvas('canvas');
        var zoomFactor = 1.2; // Facteur de zoom
        function applyFilter() {
}

        document.getElementById('imageInput').addEventListener('change', function(e) {
          var file = e.target.files[0];
          var reader = new FileReader();
      
          reader.onload = function(event) {
            var imgObj = new Image();
            imgObj.src = event.target.result;
      
            imgObj.onload = function() {
              var image = new fabric.Image(imgObj, {
                crossOrigin: 'anonymous'
              });
              canvas.setDimensions({
                width: imgObj.width,
                height: imgObj.height
              });

              canvas.add(image);
            };
          };
      
          reader.readAsDataURL(file);
        });

        function applyFilter() {
            console.log('Applying filter...');
          var select = document.getElementById('filterSelect');
          var selectedFilter = select.options[select.selectedIndex].value;
            
          var filter;
          switch (selectedFilter) {
            case 'grayscale':
              filter = new fabric.Image.filters.Grayscale();
              break;
            // Ajoutez d'autres cas selon vos options
            
            default:
              filter = null;
          }

          // Couleur
          var colorPicker = document.getElementById('colorPicker');
          var selectedColor = colorPicker.value;

          var activeObject = canvas.getActiveObject();
      
          if (activeObject) {
            if (filter) {
              activeObject.filters.push(filter);
            }
            activeObject.set({ fill: selectedColor });
            activeObject.applyFilters();
            canvas.renderAll();
          }
        }

        function zoomIn() {
          canvas.setZoom(canvas.getZoom() * zoomFactor);
        }

        function zoomOut() {
          canvas.setZoom(canvas.getZoom() / zoomFactor);
        }
    </script>
</body>
</html>
