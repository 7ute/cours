<h3 id="enregistrements">Enregistrements</h3>

<p>
    Les tableaux savent «stocker» des données, mais ces données doivent être de même type.<br />
    Il est cependant possible de définir un type, dit enregistrement, permettant de structurer plusieurs types differents de données.
</p>
<p>
    Pour pouvoir utiliser un enregistrement, il faut le déclarer dans une section particulière du programme appellée «TYPE».<br />
    Ensuite, on peut attribuer à une variable ce nouveau type, ou encore l’utiliser dans un tableau.
</p>
<p>
    On doit donner son nom, ainsi que le nom et le type de chacun des éléments qui le compose.<br />
    Déclarons par exemple un type «produit» qui contiendra le nom, le prix et sa description.<br />
    On peut ensuite créer une variable de type «produit» et un tableau de «produit» :
</p>

<pre class="javascript">
    <span class="hljs-keyword">PROGRAMME</span> mon_algo

    <span class="hljs-keyword">TYPE</span>
        <span class="hljs-keyword">STRUCTURE</span> produit
            nom : chaîne
            prix : réel
            description : chaîne
        <span class="hljs-keyword">FINSTRUCT</span>

    <span class="hljs-keyword">VAR</span>
        exemplaire : produit
        liste_produits : tableau[1...300] de produit
</pre>
<p>
    Pour stocker dans ma variable exemplaire des détails, il me suffit d’ajouter, séparé par un point,
    le nom du champ dans lequel je veux mettre les données :
</p>

<pre class="javascript">
    exemplaire.nom ← <span class="hljs-string">«huitre»</span>
    exemplaire.prix ← 12,50
    exemplaire.description ← <span class="hljs-string">«Un met raffiné pour qui à l’estomac bien accroché»</span>
</pre>

<p>Il en va de même pour mon tableau liste_produit. Je dois en revanche préciser à quelle case de liste_produit je me rapporte :</p>
<p>L’avantage de ce type de structure est qu’il permet de stocker tout un tas de valeurs hétéroclites se rapportant à un seul élément.<br />
Dans un tableau, seul cet élément est indicé, et il est ainsi plus aisé de lire le champ voulu de cet élément.</p>
<p>En partant sur notre exemple de déclaration d’un tableau de produit, nous allons maintenant afficher son contenu :</p>
<pre class="javascript">
    <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Indice   Contenu»</span>
    <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«i        nom   prix   description»</span>

    <span class="hljs-keyword">POUR</span> i <span class="hljs-keyword">DE</span> 1 <span class="hljs-keyword">JUSQUA</span> 300 <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">AFFICHER</span> i ,
            liste_produit[i].nom ,
            liste_produit[i].prix ,
            liste_produit[i].description ,
            liste_produit[i].description

    <span class="hljs-keyword">FINPOUR</span>
</pre>
<p>Voilà ce qui devrait s’afficher à l’écran de l’utilisateur :</p>
<table class="table table-sm">
    <thead>
        <tr>
            <th>Indice</th>
            <th colspan="3">Contenu</th>
        </tr>
        <tr>
            <th> </th>
            <th>nom</th>
            <th>prix</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>kebab</td>
            <td>6</td>
            <td>Trop d’kebab tue l’kebab...</td>
        </tr>
        <tr>
            <th>2</th>
            <td>huitre</td>
            <td>12,50</td>
            <td>Un met raffiné pour qui à l’estomac bien accroché</td>
        </tr>
    </tbody>
</table>
