<h3 id="operateurs-booleens">Opérateurs Booléens</h3>

<p>
Je ne suis pas borné à utiliser tester une seule condition dans mes boucles.
Certains opérateurs booléens sont là pour regrouper le résultat de plusieurs conditions.
</p>

<h4>Opérateur ET</h4>
<p>
    Exemple : «Tiens, il faut beau et j’ai de la viande... je me ferais bien un barbecue...»
</p>
<pre class="javascript">
    <span class="hljs-keyword">SI</span> temps = <span class="hljs-string">«beau»</span> <span class="hljs-keyword">ET</span> viande_dans_frigo = <span class="hljs-literal">VRAI</span> <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">SE FAIRE</span> un barbecue
    <span class="hljs-keyword">SINON</span>
        <span class="hljs-keyword">PASSER</span> le weekend à ronchonner
    <span class="hljs-keyword">FINSI</span>
</pre>
<p>
    Il faut que les deux conditions soient remplies pour que je me fasse un barbecue.<br />
    Si UNE SEULE des deux n’est pas remplie ( soit je n’ai pas fait de course - viande_dans_frigo = FAUX - soit il pleut - temps ≠ «beau» )
    alors je vais passer le weekend à ronchonner.
</p>

<h4>Opérateur OU</h4>
<p>Exemple : « Si c’est pas toi <b>ou</b> lui, QUI M’A TAXÉ MES NACHOS?!»</p>
<pre class="javascript">
    <span class="hljs-keyword">SI</span> tu_tapes_mes_nachos = <span class="hljs-literal">VRAI</span> <span class="hljs-keyword">OU</span> il_taxe_mes_nachos = <span class="hljs-literal">VRAI</span> <span class="hljs-keyword">ALORS</span>
        <span class="hljs-keyword">TAPER</span> toi
        <span class="hljs-keyword">TAPER</span> lui
    <span class="hljs-keyword">SINON</span>
        <span class="hljs-keyword">APPELLER</span> Scully et Mulder
    <span class="hljs-keyword">FINSI</span>
</pre>
<p>
    Il faut qu’AU MOINS UNE des conditions soit remplie pour que j’élucide le mystère du vol de nachos.<br />
    Si aucune n’est remplie, alors je ne m’en sortirais pas seul...
</p>
<p>
    Grace à ces opérateurs complexe, on a accès à des conditions complexes qui permettent de traiter chaque cas.
</p>
<pre class="javascript">
    <span class="hljs-keyword">TANT QUE</span> match_foot <span class="hljs-keyword">ET</span> (biere <span class="hljs-keyword">OU</span> nachos) <span class="hljs-keyword">FAIRE</span>
        <span class="hljs-keyword">REGARDER</span> la télé
    <span class="hljs-keyword">FINTANT QUE</span>
</pre>
<p>
    Tant qu’il y a le match à la télé (match_foot = VRAI) et que j’ai quelquechose à boire OU à manger, je regarde la télé.
</p>
