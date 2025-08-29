<h3 id="saisie-affichage">Saisie / Affichage</h3>

<p>
    Pour interragir avec l’utilisateur, et donc afficher on modifier le contenu de variables, nous utilisons des mots clefs : AFFICHER et SAISIR.
</p>

<pre>
    toto ← 5
    <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Entrez un nombre»</span>
    <span class="hljs-keyword">SAISIR</span> toto
    <span class="hljs-keyword">AFFICHER</span> toto
</pre>
<p>
    Au début, «toto» vaut 5 (première ligne). Demande à l’utilisateur d’entrer un nombre et celui-ci sera stocké dans «toto».
    Au final, on affiche le contenu de la variable «toto», c’est à dire le nombre saisi par l’utilisateur.<br />
</p>
<p>
    AFFICHAGE s’arrange pour présenter à nos yeux du texte. Ainsi, on peut allègrement mélanger les types de variables.
</p>
<pre class="javascript">
    //une chaine, un réel et un entier
    fruit ← <span class="hljs-string">«pomme»</span>
    prix ← 5,3
    quantité ← 14

    <span class="hljs-keyword">AFFICHER</span> fruit , <span class="hljs-string">« (»</span> , quantité , <span class="hljs-string">«) : »</span> , prix , <span class="hljs-string">« roupies népalaises»</span>
    // Affichera «pomme (14) : 5,3 roupies népalaises»
</pre>
