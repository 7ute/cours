<h3 id="structures-conditionnelles">Structures conditionnelles</h3>

Les structures conditionnelles permettent d’aiguiller le programme.
Grace à elles nous pouvons choisisr d’executer telle ou telle partie de code, ou encore d’effectuer la même action un bon nombre de fois.<br />

<h4>Choix conditionnels</h4>
On peut choisir d’effectuer ou non une partie du code grace à une boucle conditionnelle. Il en existe de deux sortes.<br />

<h5>Choix conditionnel «si»</h5>

<pre class="javascript">
    <span class="hljs-keyword">SI</span> toto = 4 <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«toto est égal à»</span> , toto
    <span class="hljs-keyword">SINON</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«toto n’est pas égal à 4!»</span>
    <span class="hljs-keyword">FINSI</span>
</pre>

Dans cette structure conditionnelle, la première partie du code est éxécutée si la condition entre «SI» et «ALORS» est évaluée à VRAI.
Ainsi, dans l’exemple du dessus, si toto est effectivement égal à 4, le code entre «ALORS» et «SINON» sera éxécuté.
Dans le cas contraire, c’est le code entre «SINON» et «FINSI» qui le sera.<br />
Le mot clef «SINON» et le code qui suit peuvent être omis. Dans ce cas, si la condition est fausse,le programme continueras directement apres le «FINSI»
La condition est de type booléenne. Nous avons vus que les variables booléennes permettent de stocker VRAI ou FAUX, donc ce code («bouboule» étant un booléen) :<br />

<pre class="javascript">
    <span class="hljs-keyword">SI</span> bouboule = <span class="hljs-literal">VRAI</span> <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Cette variable est évaluée à VRAI»</span>
    <span class="hljs-keyword">FINSI</span>
</pre>

Peut aussi s’écrire :<br />
<pre class="javascript">
    <span class="hljs-keyword">SI</span> bouboule  <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> «Cette variable est évaluée à VRAI»
    <span class="hljs-keyword">FINSI</span>
</pre>

Explications : «bouboule = VRAI» est une égalité, soit vraie, soit fausse.
Comme ma variable est un booléen, le «résultat» de cette évaluation sera égal à la variable elle même.
Cela peut paraitre complexe dit comme ça, mais c’est un des fondement de l’algorithme.
Toutes les égalités et inégalités sont «évaluées» de la même manière et c’est le résultat «VRAI» ou «FAUX» qui sera pris en compte.

<h5>Choix conditionnel «selon»</h5>
Parfois, il est necessaire d’imbriquer plusieurs boucles «SI» pour définir l’action à effectuer.
<pre class="javascript">
    toto ← <span class="hljs-string">«oui»</span>

    <span class="hljs-keyword">SI</span> toto = <span class="hljs-string">«oui»</span> <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis oui »</span>
    <span class="hljs-keyword">SINON</span>
        <span class="hljs-keyword">SI</span> toto = <span class="hljs-string">«non»</span>  <span class="hljs-keyword">ALORS</span>
            <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis non »</span>
        <span class="hljs-keyword">SINON</span>
            <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis n’importe quoi »</span>
        <span class="hljs-keyword">FINSI</span>
    <span class="hljs-keyword">FINSI</span>
</pre>

Ce code peut être également écrit de la manière suivante :<br />

<pre class="javascript">
    toto ← <span class="hljs-string">«oui»</span>

    <span class="hljs-keyword">SELON</span> toto <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-string">«oui»</span> :
            <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis oui »</span>
        <span class="hljs-string">«non»</span> :
            <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis non »</span>
        <span class="hljs-keyword">DEFAUT</span> :
            <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">« toto dis n’importe quoi »</span>
    <span class="hljs-keyword">FINSELON</span>
</pre>

Pour deux choix, le gain n’est pas important, mais imaginez 10 conditions «SI» imbriquées :
la lisibilité du code en serait grandement affectée. Pour cela nous utilisons le choix «SELON».
Dans ce choix, on teste l’égalité de la variable (ici «toto») avec differents «cas» (ici «oui» ou «non»).
Si le contenu de la variable testée ne correspond à aucun des cas, c’est le code après «DEFAUT» qui sera éxécuté.
ATTENTION : ce choix est valable (en algo) uniquement pour tester des égalité. Ce code :

<pre class="javascript">
    <span class="hljs-keyword">SI</span> jours &gt; 14 <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">AFFICHER</span> <span class="hljs-string">«Nous sommes dans la seconde quinzaine»</span>
    <span class="hljs-keyword">FINSI</span>
</pre>

n’aura pas d’équivalent en terme de choix «SELON».

<h4>Les boucles</h4>
Il peut être parfois necessaire d’effectuer plusieurs fois la même tâche.
Pour celà, en algo, nous disposons de structure permettant d’effectuer plusieurs fois le même morceau de code.
Ces structure ont en commun une «condition d’éxécution» de la boucle.<br />
Cette dernière doit IMPERATIVEMENT être testée avec tous les cas pour une simple et bonne raison : si on ne sort pas de la boucle,
le programme effectuera infiniment le code de celle-ci, entrainant un plantage.
Pour comprendre la boucle, rien de mieux que les lasagnes :D Vous cuisinez? Si oui, alors vous avez peut être fait des «boucles» sans le vouloir....

<pre class="javascript">
    <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">DISPOSER</span> une couche de pâtes
        <span class="hljs-keyword">VERSER</span> sauce tomate
        <span class="hljs-keyword">VERSER</span> sauce bechamelle
    <span class="hljs-keyword">REPETER JUSQUA</span> plus de pâte
</pre>
<p>
    L’action comprise dans la boucle (ici une boucle «FAIRE .. REPETER TANT QUE») sera executée autant de fois que j’ai de la pâte : «plus de pâte» est ma condition de sortie.
</p>
<h5><a name="boucle_faire_tant_que"></a></h5>
<p>
    Le code s’éxécute AU MOINS une fois. Arrivé à la fin de la boucle, la condition de sortie est testée, et si elle est évaluée à VRAI on quitte la boucle, sinon on repart pour un tour!<br />
    Plus de pâte?
</p>
<ul>
    <li><b class="text-success">VRAI</b> , je n’ai plus de pâte &gt; je sors du programme.</li>
    <li><b class="text-danger">FAUX</b> , il m’en reste &gt; je fais mes lasagnes</li>
</ul>

<h5><a name="boucle_tant_que_faire"></a></h5>
<p>
    On peut être amené à vouloir tester une condition une première fois avant d’entrer dans la boucle. Pour celà, nous disposons de la boucle «TANT QUE ... FAIRE».
</p>

<pre class="javascript">
    <span class="hljs-keyword">TANT QUE</span> j’ai encore de la pâte
        <span class="hljs-keyword">DISPOSER</span> une couche de pâtes
        <span class="hljs-keyword">VERSER</span> sauce tomate
        <span class="hljs-keyword">VERSER</span> sauce bechamelle
    <span class="hljs-keyword">FIN TANT QUE</span>
</pre>

<p>
    Dans cet exemple, si je n’ai plus de pâte à lasagne au frigo, je ne vais même pas commencer à faire mes lasagnes :)
    Ici, on n’a plus à faire à une condition de sortie mais une condition d’entrée.
    Il me reste de la pate?
</p>
<ul>
    <li><b class="text-success">VRAI</b>, (et j’ai faim) &gt; je fais mes lasagnes.</li>
    <li><b class="text-danger">FAUX</b> &gt; je sors du programme</li>
</ul>

<p>
    La condition d’entrée est évaluée dès le début de la boucle, et si elle est FAUSSE, je ne rentre même pas dans la boucle. Si au contraire elle est vrai, le code de la boucle s’éxécute, puis, arrivé à la fin de la boucle, on remonte tester la condition d’entrée (pour savoir si l’on refait un tour ou pas.)
</p>

<h5>Boucle «Pour»</h5>
<p>
    La boucle pour permet, à l’inverse des deux autres, d’effectuer le code un nombre défini de fois.
    Pour cela, il integre un compte tours.
    Ce compte-tour est une variable (de type «entier») qui, à chaque fin de tour, est «incrémentée» ou «décrémentée» (augmentée ou diminuée).
    Cette variable compte-tour est communément appelée i mais, comme c’est une variable, on peut lui donner le nom qu’on veut.
    Il faut en revanche ne pas oublier de la déclarer!
    Après avoir bien mangé, buvons...
</p>

<pre class="javascript">
    <span class="hljs-keyword">POUR</span> i <span class="hljs-keyword">DE</span> 1 <span class="hljs-keyword">JUSQUA</span> 10 <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">BOIRE</span> le verre i
    <span class="hljs-keyword">FINPOUR</span>
</pre>

<p>
    Quand j’entre dans la boucle, la variable compte-tours prends une valeur initiale (ici «1»).<br />
    La condition de sortie, «JUSQUA 10» est testée. Comme i = 1, i ≤ 10 , donc je boirais donc le «verre 1».<br />
    A la fin du tour, le compte-tours i est augmenté d’un 1 (1 + 1 = 2, désolé jean claude...).<br />
    On remonte évaluer la condition de sortie (et comme i =2, i ≤ 10 donc on referas un tour).<br />
    Arrivé à i = 10, on éxécute UNE DERNIERE FOIS la boucle. A la fin, de la boucle, on incrément i.<br />
    Maintenant que i vaut 11, la condition i ≤ 10 est FAUSSE (si si, 10 &lt; 11...), on peut donc sortir de la boucle, la peau du ventre bien tendue...<br />
    Ce genre de boucle est l’un des plus employé en programmation, cependant il faut à tout prix connaitre le nombre de fois que l’on doit l’éxécuter.
</p>

<h4>Petit topo</h4>
<p>
    Chaque boucle à son utilité, suivant que l’on connait ou non le nombre de tour que l’on va faire,
    et si l’on veut ou non faire à tout prix un premier tour dans la boucle. Petit mémo :
</p>

<div>
    Je compte le nombre de pièces que j’ai dans ma poche en les sortant une à une :<br />
    <p>
        <b>TANT QUE</b>
        <span class="text-muted">
            («TANT QUE ma poche n’est pas vide FAIRE ....»)
        </span>
    </p>
    Je pioche des bonbons dans un sachet, en sachant que j’en veut au moins 1 :<br />
    <p>
        <b>REPETER</b>
        <span class="text-muted">
            («REPETER ... TANT QUE j’en ai pas plein les dents»)
        </span>
    </p>
    Je jete mes 20 CD de variété française des années 80 par la fenêtre :<br />
    <p>
        <b>POUR</b>
        <span class="text-muted">
            («POUR cd_de_daube DE 1 JUSQUA 20 FAIRE....»)
        </span>
    </p>
</div>
