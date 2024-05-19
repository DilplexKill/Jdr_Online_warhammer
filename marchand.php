<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warhammer/Les Ténèbres au-delà de Middenheim</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-content">
            <div class="titles">
                <h1>Warhammer</h1>
                <h2>Les Ténèbres au-delà de Middenheim</h2>
            </div>
            <div class="discord-button">
                <a href="https://discord.gg/r8jThp62WF" target="_blank">Roll Ur Dice</a>
                <a href="index.html">Accueil</a>
            </div>
        </div>
    </header>
    <div class="content_Marchand">
        <article class="article-left-Marchand">
            <h3>Bienvenue jeune aventurier</h3>
            <p>Hummm enfin un peu de pièces d'or que dis-je.... que puis-je faire pour vous?</p>

            <h4>Comment je fonctionne...</h4>
            <p>Bon mes chers amis, votre Maître de jeu vous fournit votre argent dans votre campagne et c'est naturellement ma tâche de vous équiper et de vous délester de vos pièces d'or.</p>
            <p>Profitez bien de vos achats...</p>
        </article>

        <article class="article-right-Marchand">
        </article>
    </div>
    <div class="content-Shop">
        <?php include 'list_files.php'; ?>
    </div>

    <div id="jsonContent" style="margin-top: 20px;">
        <!-- Contenu du fichier JSON sera affiché ici -->
    

    <script>
        document.getElementById('jsonFiles').addEventListener('change', function () {
            const selectedFile = this.value;
            if (selectedFile) {
                fetch(`load_json.php?file=${selectedFile}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Données reçues:', data);
                        if (data.hasOwnProperty('piecesCuivre') && data.hasOwnProperty('piecesArgent') && data.hasOwnProperty('piecesOr')) {
                            document.getElementById('jsonContent').innerHTML = `
                                <div id="currentPieces">
                                    <p class="pieces">Pièces Cuivre: <span class="result" id="piecesCuivre">${data.piecesCuivre}</span></p>
                                    <p class="pieces">Pièces Argent: <span class="result" id="piecesArgent">${data.piecesArgent}</span></p>
                                    <p class="pieces">Pièces Or: <span class="result" id="piecesOr">${data.piecesOr}</span></p>
                                    <input type="hidden" name="file" value="${selectedFile}">
                                </div>
                                <div id="shopItems">
                                    <h2>Articles Disponibles</h2>
                                    <div class="container_h3">
                                        <h3 class="h3_item">Les armes</h3>
                                    </div>

                                    
                                    <div class="item">
                                        <h4>Cimeterre</h4>
                                        <p>Sa lame courbe en fait une arme avec des propriétés mécaniques spécifiques. Pour trancher, une épée à lame droite traditionnelle a besoin d'un mouvement de coupe spécifique, rendant son maniement relativement complexe. La courbure des sabres améliore les gestes de coupe, rendant ces derniers moins difficiles à mettre en œuvre. De fait, cette particularité mécanique rend le sabre indispensable à cheval, ce qui explique son utilisation massive par tous les peuples cavaliers. </p>
                                        <p>Initiative : +10<br />Toucher : -<br />Dégats : -<br />Parade : -</p>
                                        <button onclick="buyItem('Cimeterre', 20, 0, 0)">Acheter (20 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Couteau Asrai</h4>
                                        <p>Ces couteaux de chasse sont les armes privilégiées des Elfes Sylvains et sont souvent utilisés par paires. <br />Ces couteaux sont plus longs que les dagues et plus légers et plus pratique à manier dans la forêt que des épées</p>
                                        <p>Initiative : +10<br />Toucher : -<br />Dégats : -1<br />Parade : -</p>
                                        <button onclick="buyItem('Couteau Asrai', 65, 0, 0)">Acheter (65 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Dague/poignard</h4>
                                        <p>La lame de cette réplique d'arme de combat est forgée en acier à ressorts, elle va jusqu'au pommeau où elle est vissée, elle est ornée d'un long et profond sillon. Le manche est gainé de cuir et de fil tressé</p>
                                        <p>Initiative : +10<br />Toucher : -<br />Dégats : -2<br />Parade : -20</p>
                                        <button onclick="buyItem('Dague/poignard', 3, 0, 0)">Acheter (3 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Epée</h4>
                                        <p>L'épée désigne communément les épées tenues à une main, pourvues d'une garde simple et avec une longueur de lame de 80 cm</p>
                                        <p>Initiative : -<br />Toucher : -<br />Dégats : -<br />Parade : -0</p>
                                        <button onclick="buyItem('Epée', 14, 0, 0)">Acheter (14 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Epée à deux mains</h4>
                                        <p>est une arme blanche à double tranchant (se distingue ainsi du sabre) constituée des parties habituelles de l'épée européenne médiévale : pommeau, fusée, garde, lame montée sur soie.</p>
                                        <p>Initiative : -10<br />Toucher : -<br />Dégats : +2<br />Parade : -0</p>
                                        <button onclick="buyItem('Epée à deux mains', 35, 0, 0)">Acheter (35 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Epée bâtarde</h4>
                                        <p>une lame longue et droite à double tranchant quiest généralement utilisé à deux ou main et demie . La garde torsadée et le pommeau sont en fer. La lame en acier trempé est forgée à la poignée et vissée avec le pommeau. la poignée en bois est recouvert de cuir.</p>
                                        <p>Initiative : -10<br />Toucher : -<br />Dégats : +1<br />Parade : -0</p>
                                        <button onclick="buyItem('Epée bâtarde', 20, 0, 0)">Acheter (20 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Hache de bataille</h4>
                                        <p>Matériau : tête de hache en acie, poignée en bois avec raccords en métal et véritable enveloppement en cuir, détails en laiton</p>
                                        <p>Initiative : -<br />Toucher : -<br />Dégats : -<br />Parade : -</p>
                                        <button onclick="buyItem('Hache de bataille', 12, 0, 0)">Acheter (12 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Arbalète</h4>
                                        <p> a une arche en bois liée au cuir et un arbre en bois. La serrure, la gâchette et tous les autres raccords sont en acier.</p>
                                        <p>Porter courte : 32m<br /> Porter moyenne : 64m <br /> Porter longue : 300 m<br /> Force effective : + 4</p>
                                        <button onclick="buyItem('Arbalète', 16, 0, 0)">Acheter (16 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Arc (normal)</h4>
                                        <p> a une arche en bois liée au cuir et un arbre en bois. La serrure, la gâchette et tous les autres raccords sont en acier.</p>
                                        <p>Porter courte : 24m<br /> Porter moyenne : 48m <br /> Porter longue : 250 m<br /> Force effective : + 3</p>
                                        <button onclick="buyItem('Arc (normal)', 11, 0, 0)">Acheter (11 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Carquois pour 30 traits </h4>
                                        <p>Peux contenir 30 fléches.</p>
                                        <p>Vide</p>
                                        <button onclick="buyItem('Carquois pour 30 traits ', 4, 0, 0)">Acheter (4 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Carreaux d'arbalète (x5) </h4>
                                        <p>5 carreaux d ' arbalète.</p>
                                        <p></p>
                                        <button onclick="buyItem('Carreaux d'arbalète (x5) ', 2, 0, 0)">Acheter (2 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Flèches (x5) </h4>
                                        <p>5 Flèches d arc .</p>
                                        
                                        <button onclick="buyItem('Carreaux d'arbalète (x5) ', 1, 0, 0)">Acheter (1 Or)</button>
                                    </div>

                                    <h3 class="h3_item">Les armures</h3>

                                    <div class="item">
                                        <h4>Bouclier (écu ou autre)</h4>
                                        <p>5 Flèches d arc .</p>
                                        <p>Partie du corps protégées : Toutes</p>
                                        <button onclick="buyItem('Bouclier (écu ou autre)', 18, 0, 0)">Acheter (18 Or)</button>
                                    </div>

                                    <div class="item">
                                        <h4>Cagoule en cuir</h4>
                                        
                                        <p>Partie du corps protégées : Tête</p>
                                        <button onclick="buyItem('Cagoule en cuir', 6, 0, 0)">Acheter (6 Or)</button>
                                    </div>


                                    <!-- Ajoutez d'autres éléments de la même manière -->

                                </div>
                            `;
                        } else {
                            document.getElementById('jsonContent').innerHTML = '<p>Le fichier JSON ne contient pas les données attendues.</p>';
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors du chargement du fichier JSON:', error);
                        document.getElementById('jsonContent').innerHTML = '<p>Erreur lors du chargement du fichier JSON.</p>';
                    });
            }
        });

     function buyItem(itemName, costOr, costArgent, costCuivre) {
    let piecesCuivre = parseInt(document.getElementById('piecesCuivre').textContent);
    let piecesArgent = parseInt(document.getElementById('piecesArgent').textContent);
    let piecesOr = parseInt(document.getElementById('piecesOr').textContent);

    

    // Vérifier si le coût en cuivre est inférieur au nombre de pièces de cuivre du joueur
    if (costCuivre > piecesCuivre) {
        // Si le joueur a des pièces d'argent, en utiliser une pour compenser
        if (piecesArgent > 0) {
            piecesArgent -= 1;
            piecesCuivre += 100; // Ajouter 100 pièces de cuivre pour compenser une pièce d'argent
        } else {
            // Si le joueur n'a pas assez de pièces d'argent, vérifier les pièces d'or
            if (piecesOr > 0) {
                piecesOr -= 1;
                piecesArgent += 100; // Ajouter 100 pièces d'argent pour compenser une pièce d'or
                piecesCuivre += 100; // Ajouter 100 pièces de cuivre pour compenser la pièce d'or
            } else {
                alert('Vous n\'avez pas assez de pièces de cuivre pour acheter cet article.');
                return; // Arrêter la fonction car le joueur n'a pas assez de pièces de cuivre pour acheter l'article
            }
        }
    }

    if (costArgent > piecesArgent) {
        // Si le joueur a des pièces d'argent, en utiliser une pour compenser
        if (piecesOr > 0) {
            piecesOr -= 1;
            piecesArgent += 100; // Ajouter 100 pièces de cuivre pour compenser une pièce d'argent
        }
         else
        {
            
            alert('Vous n\'avez pas assez de pièces de cuivre pour acheter cet article.');
            return; // Arrêter la fonction car le joueur n'a pas assez de pièces de cuivre pour acheter l'article
            
        }
    }

    // Vérifier si le joueur a assez de pièces pour acheter l'article
    if (piecesOr < costOr || piecesArgent < costArgent || piecesCuivre < costCuivre) {
        alert('Vous n\'avez pas assez de pièces pour acheter cet article.');
        return; // Arrêter la fonction car le joueur n'a pas assez de pièces pour acheter l'article
    }

    // Calculer le changement de pièces
    let changeCuivre = piecesCuivre - costCuivre;
    let changeArgent = piecesArgent - costArgent;
    let changeOr = piecesOr - costOr;

    // Mettre à jour l'affichage
    document.getElementById('piecesCuivre').textContent = changeCuivre;
    document.getElementById('piecesArgent').textContent = changeArgent;
    document.getElementById('piecesOr').textContent = changeOr;

    // Ajouter l'article à la liste des équipements uniquement si l'achat est réussi
    const formData = new FormData();
    formData.append('piecesCuivre', changeCuivre);
    formData.append('piecesArgent', changeArgent);
    formData.append('piecesOr', changeOr);
    formData.append('file', document.querySelector('input[name="file"]').value);
    formData.append('newItem', itemName);

    fetch('save_json.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Achat réussi! Les modifications ont été enregistrées.');
    })
    .catch(error => {
        console.error('Erreur lors de la sauvegarde des données:', error);
        alert('Erreur lors de la sauvegarde des données.');
    });
}

    </script>

</div>
    <footer class="content-footer">
        <p class="pf">© 2024 Warhammer/Les Ténèbres au-delà de Middenheim. Tous droits réservés.</p>
        <p class="pf">Créateur : Diplex.</p>
    </footer>
</body>

</html>





