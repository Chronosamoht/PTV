<!DOCTYPE html>
<head>
	<title>Agenda TEST</title>
	<meta charset="UTF-8">
	<style>
		ul {
			display : inline-block;
			margin-right : 150px;
		}
		
		ul li {
			list-style-type : none;
			border : 1px solid black;
			width : 128px;
			height : 32px;
			position : relative;
		}
		
		ul li a {
			position : absolute;
			top : 5px;
			right : 5px;
			height : 20px;
			width : 20px;
			text-align : center;
			border : 1px solid black;
			text-decoration : none;
		}
		
		table {
			display : inline-block;
			border-collapse : collapse;
		}
		
		th, td {
			border : 1px solid black;
			width : 128px;
			height : 32px;
		}
		
	</style>
	<script>
    (function() {
        
        var dndHandler = {
            
            draggedElement: null, // Propriété pointant vers l'élément en cours de déplacement
            
            applyDragEvents: function(element) {
                
                element.draggable = true;

                var dndHandler = this; // Cette variable est nécessaire pour que l'événement "dragstart" ci-dessous accède facilement au namespace "dndHandler"
                
                element.addEventListener('dragstart', function(e) {
                    dndHandler.draggedElement = e.target; // On sauvegarde l'élément en cours de déplacement
                    e.dataTransfer.setData('text/plain', ''); // Nécessaire pour Firefox
                }, false);

                element.addEventListener('drop', function(e) {
                    e.stopPropagation(); // On stoppe la propagation de l'événement pour empêcher la zone de drop d'agir
                }, false);
                
            },
     
            applyDropEvents: function(dropper) {
                
                dropper.addEventListener('dragover', function(e) {
                    e.preventDefault(); // On autorise le drop d'éléments
                    this.className = 'dropper drop_hover'; // Et on applique le design adéquat à notre zone de drop quand un élément la survole
                }, false);
                
                dropper.addEventListener('dragleave', function() {
                    this.className = 'dropper'; // On revient au design de base lorsque l'élément quitte la zone de drop
                });
                
                var dndHandler = this; // Cette variable est nécessaire pour que l'événement "drop" ci-dessous accède facilement au namespace "dndHandler"

                dropper.addEventListener('drop', function(e) {

                    var target = e.target,
                        draggedElement = dndHandler.draggedElement, // Récupération de l'élément concerné
                        clonedElement = draggedElement.cloneNode(true); // On créé immédiatement le clone de cet élément
                    
                    target.className = 'dropper'; // Application du design par défaut
                    
                    clonedElement = target.appendChild(clonedElement); // Ajout de l'élément cloné à la zone de drop actuelle
                    dndHandler.applyDragEvents(clonedElement); // Nouvelle application des événements qui ont été perdus lors du cloneNode()
                    
                    draggedElement.parentNode.removeChild(draggedElement); // Suppression de l'élément d'origine
                    
                });
                
            }
     
        };
        
        var elements = document.querySelectorAll('.draggable'),
            elementsLen = elements.length;
        
        for(var i = 0 ; i < elementsLen ; i++) {
            dndHandler.applyDragEvents(elements[i]); // Application des paramètres nécessaires aux élément déplaçables
        }
        
        var droppers = document.querySelectorAll('.dropper'),
            droppersLen = droppers.length;
        
        for(var i = 0 ; i < droppersLen ; i++) {
            dndHandler.applyDropEvents(droppers[i]); // Application des événements nécessaires aux zones de drop
        }

    })();
    </script>
</head>
<body>
	<ul>
<?php
			$list = array("Escalade", "Tennis", "Suicide", "Electrocution", "Hara-kiri", "Mutilation", "Hydrocution", "Pendaison", "Noyade", "Suffocation");
			foreach($list as $activite){
				echo("\t\t<li class=\"draggable\">".$activite."<a href=\"#\">-</a></li>\n");
			}
		?>
	</ul>
	<table>
		<tr>
			<th></th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
			<th>Samedi</th>
			<th>Dimanche</th>
		</tr>
<?php
			for($i=0; $i<15; $i++){
				echo("\t\t<tr>\n");
				echo("\t\t\t<th>".(6+$i)."h</th>\n");
				for($j=0; $j<7; $j++){
					echo("\t\t\t<td></td>\n");
				}
				echo("\t\t</tr>\n");
			}
		?>
	</table>
</body>