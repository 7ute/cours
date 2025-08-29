<h3 id="tableaux">Tableaux</h3>

<p>
    Lorsque l’on veut associer une grosse quantité de valeurs d’un seul type à des variables, il existe plusieurs moyen.<br />
    Soit on crée une variable par valeur, soit on les regroupe par type dans des tableaux.
</p>
<p>
    On peut imaginer les tableaux comme des un petit rangement à tiroirs, où chaque tiroir est numéroté.
    Pour déclarer un tableau, on lui donne un nom, on precise sa taille (le nombre de tiroirs/cases) et on indique le type de donnée qu’on va mettre dedans :
</p>

<pre class="javascript">
    <span class="hljs-keyword">VAR</span>
        adresses : tableau[1...400] de chaine
        notes : tableau[1...30] de réels
        verification  : tableau[1...4] de booléens
</pre>

<p>Pour remplir ou lire notre tableau, on considère chaque cas comme une variable :</p>

<pre class="javascript">
    // Il est possible de faire saisir le contenu
    // de la case (ex : 3) par l’utilisateur
    <span class="hljs-keyword">SAISIR</span> adresses[3]

    // ... ou l’entrer nous même
    notes[4] ← 12,4
    notes[2] ← 9,7

    //On l’affiche comme une variable
    <span class="hljs-keyword">AFFICHER</span> adresses[8]

    /* On utilise le contenu de la case. Ici, on lis le booléen contenu dans la case 3 du tableau «verification»
    et on s’en sert comme condition dans un choix de type «SI» */

    <span class="hljs-keyword">SI</span> verification[3] = <span class="hljs-literal">VRAI</span> <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Ouh yeah»</span>
    <span class="hljs-keyword">FINSI</span>
</pre>
<p>
    Les numéros des tirois sont appelés «indices» et ne peuvent être modifiés.
    Le «premier tiroir» sera toujours le «tiroir d’indice 1».
</p>
<div class="alert alert-warning">
    ATTENTION! Indice 1 en algo!<br />
    Dans d’autres langages, le plus souvent les tableaux commencent à 0!
</div>

<p>
    Exemple de représentation du tableau «notes» :
</p>
<pre class="javascript">
    notes[3] = 17
    notes[7] = <span class="text-danger">Erreur /!\</span>
</pre>
<p>
    Mon tableau n’a que 5 cases, il m’est donc difficile de lire la 7ème!<br />
    <code>note[5]</code> n’ayant pas été rempli (admettons) il ne contient rien (Ø).<br />
    Il faut faire attention car lorsqu’une case ne contient rien, et que l’on essaye d’en afficher le contenu, on peut obtenir tout et n’importe quoi!
    L’accès au donnée se fait donc en sachant quelle cases sont remplies.
</p>

<h4>Parcours d’un tableau</h4>
<p>Pour afficher le contenu un tableau dont la taille est important, il peut être utile de passer par des boucles.</p>
<pre class="javascript">
    <span class="hljs-keyword">PROGRAMME</span> affichage_contenu_de_tableau

    <span class="hljs-keyword">VAR</span>
        notes : tableau[1 ... 300] de réels
        i : entier

    <span class="hljs-keyword">DEBUT</span>
        <span class="hljs-keyword">POUR</span> i <span class="hljs-keyword">DE</span> 1 <span class="hljs-keyword">JUSQUA</span> 300 <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">AFFICHER</span> notes[i]
        <span class="hljs-keyword">FINPOUR</span>

    <span class="hljs-keyword">FIN</span>
</pre>
<p>
    À chaque tour de boucle, i va prendre une valeur de i à 300 (croissante) et je vais donc lire la case <code>i</code> de mon tableau.<br />
    Au premier tour, i vaut 1, donc notes[i] sera notes[1], et je vais afficher la première case de mon tableau notes, etc...<br />
    Lors du remplissage en revanche, je peux laisser l’utilisateur choisir de s’arreter ou non. Ce serait génant de le forcer a remplir les 300 cases d’un seul trait....
</p>
<pre class="javascript">
    <span class="hljs-keyword">PROGRAMME</span> remplissage_de_tableau

    <span class="hljs-keyword">VAR</span>
        notes : tableau[1 ... 300] de réels
        i : entier
        continuer : chaine

    <span class="hljs-keyword">DEBUT</span>
        i ← 1
        continuer ← <span class="hljs-string">«oui»</span>
        <span class="hljs-keyword">TANT QUE</span> continuer = <span class="hljs-string">« oui »</span> <span class="hljs-keyword">ET</span> i ≤ 300 <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Veuillez entrer une note pour l’élève »</span> , i
        <span class="hljs-keyword">SAISIR</span> notes[i]
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Souhaitez vous poursuivre?»</span>
        <span class="hljs-keyword">SAISIR</span> continuer
        <span class="hljs-keyword">FINTANT QUE</span>
    <span class="hljs-keyword">FIN</span>
</pre>
<p>
    Au début de mon programme j’attribue à «continuer» la valeur «oui» car cette variable sera testée à chaque tour de la boucle.<br />
    De même, j’attribue à i (ma variable qui servira d’indice) la valeur 1 (pour commencer la saisie à la première case du tableau.<br />

    Dans ma boucle, je fais saisir la note de la case i de mon tableau «notes», puis je demande à l’utilisateur s’il souhaite continuer la saisie.<br />
    Retour à ma condition : l’utilisateur a bien tapé «oui» et i est bien en dessous de 300, je continue.<br />
    Dans tout cas contraire, je m’arrête et ne fais pas un autre tour de boucle.
</p>

<h4>Tableaux multi-dimentionnels</h4>

<p>
    Le principe s’applique également aux tableaux à plusieurs dimensions.<br />
    Pour déclarer un tableau multidimentionnel, on donne son nom, puis la taille de chacune des dimmension, et enfin le type du tableau.<br />
    Le code :
</p>
<pre class="javascript">
    tournoi_golf[1...6][1...2] : de chaine
    // tournoi_golf[lignes][colonnes]
</pre>
<p>
    déclare un tableau à deux dimensions, de 2 cases par 6 cases.
</p>
<table class="table table-sm">
    <thead>
        <tr>
            <th>Indice</th>
            <th>Colonne 1</th>
            <th>Colonne 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>Jean paul</td>
            <td>SARTRES</td>
        </tr>
        <tr>
            <th>2</th>
            <td>Didier</td>
            <td>ROUSSEAU</td>
        </tr>
        <tr>
            <th>3</th>
            <td>Alphonse</td>
            <td>DAUDET</td>
        </tr>
        <tr>
            <th>4</th>
            <td>Robert</td>
            <td>HUE</td>
        </tr>
        <tr>
            <th>5</th>
            <td>Pierre</td>
            <td>PERRET</td>
        </tr>
        <tr>
            <th>6</th>
            <td>Ponce</td>
            <td>PILATE</td>
        </tr>
    </tbody>
</table>
<p>
    Si je veux afficher le nom de la 3ème entrée et saisir le prénom de la 6ème entrée :<br />
</p>
<pre class="javascript">
    AFFICHER tournoi_golf[3][2] //Affiche "DAUDET"
    tournoi_golf[6][1] ← <span class="hljs-string">«Albert»</span>
</pre>
<p>
    Pour peupler et lire un tableau multidimensionnel, il faudra faire non pas une mais deux boucle :
    l’une parcoure le tableau de haut en bas (lignes), et l’autre, lis les colonnes.<br />
    Pour ce faire nous aurons donc besoin de deux variables, en général i et j.<br />
    <br />
    Exemple :
</p>
<pre class="javascript">
    <span class="hljs-keyword">PROGRAMME</span> lecture_de_tableau_multi

    <span class="hljs-keyword">VAR</span>
        notes : tableau[1 ... 30][1...3] de réels
        i,j : entier

    <span class="hljs-keyword">DEBUT</span>
        <span class="hljs-keyword">POUR</span> i <span class="hljs-keyword">DE</span> 1 <span class="hljs-keyword">JUSQUA</span> 30 <span class="hljs-keyword">FAIRE</span>
            <span class="hljs-keyword">POUR</span> j <span class="hljs-keyword">DE</span> 1 <span class="hljs-keyword">JUSQUA</span> 3 <span class="hljs-keyword">FAIRE</span>
                <span class="hljs-keyword">AFFICHER</span> notes[i][j]
            <span class="hljs-keyword">FINPOUR</span>
        <span class="hljs-keyword">FINPOUR</span>
    <span class="hljs-keyword">FIN</span>
</pre>
