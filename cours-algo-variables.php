<h3 id="algo-variables">Variables</h3>

<h4>Variables</h4>
<p>Le principe de la variable est de pouvoir stocker des informations en mémoire pour pouvoir les réutiliser ensuite.
On dit que l’on «attribue» à une variable une valeur. Cette attribution s’écrit de la manière suivante :</p>

<pre class="javascript">
    toto ← 21
</pre>

<p>Dans cet exemple j’ai attribué à ma variable «toto» la valeur 21.</p>
<pre class="javascript">
    toto ← 21
    toto ← 12
</pre>
<p>
    A ce stade, la valeur de «toto» est «12». J’ai remplacé, lors de la seconde instruction, son contenu.<br />

    En algo, comme dans un langage classique, nous manipulons des donnés de types différents. Les «types de bases» sont les suivants :<br /><br />

    <strong>ENTIER</strong> : Nombre entier (négatifs comme positifs)<br />

    <strong>RÉEL</strong> : Nombre décimal, division, etc...<br />

    <strong>CHAINE</strong> : Chaine de caractère. Les chaines doivent être ecrites entre des guillements doubles «» et peuvent être «concaténées»
        (càd ajoutées entre elles) grace à l’opérateur «,» (virgule).
</p>

<pre class="javascript">
    toto ← <span class="hljs-string">«Aloha l’ami, »</span> , <span class="hljs-string">«ça farte?»</span>
</pre>

La variable variable toto contient désormais la chaîne «Aloha l’ami, ça farte?».<br />

<strong>BOOLEEN</strong> : VRAI ou FAUX (et rien d’autre ;) ). Il nous sera très utile mais nous verrons mieux son fonctionnement
    lors de l’étude des structures de contrôle.<br />

<h4>Constantes</h4>
<p>
    Les constantes sont des variables qui ne peuvent être modifiées pendant l’execution du code. On lui attribue une valeur en début de programme, puis on ne peut que la lire.
</p>

<h4>Déclarations</h4>
<p>
    Pour que nos variables soient prises en compte par le programme,
    il faut au préalable les déclarer, c’est à dire annoncer leur nom et leur type.
    Ici, une variable de type entier portant le nom de «toto» ainsi que deux variables,
    titi et tata - des réels - ont été déclarées.<br />
    Le nom de la variable est libre.
    Cependant, il ne faut pas qu’il contienne d’espaces, ou d’accents.
    Par convention, les constantes sont en majuscule.<br />
</p>
<pre class="javascript">
    <span class="hljs-keyword">CONST</span>
        TUTU ← 20 : entier
    <span class="hljs-keyword">VAR</span>
        toto : entier
        titi,tata : chaines
</pre>
