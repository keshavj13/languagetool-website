<?php
$page = "ca";
$title = "LanguageTool";
$title2 = "Correcció gramatical i d'estil";
$lastmod = "2012-09-15 10:40:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p>LanguageTool és una eina de <a href="http://ca.wikipedia.org/wiki/Programari_lliure" target="_blank">programari lliure</a> per a la correcció gramatical i d'estil en català i en <a href="http://www.languagetool.org/languages/">25 llengües més</a>.</p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle = "Descarrega LanguageTool";
           $downloadLabel = "per a LibreOffice/OpenOffice";
           $downloadPath = "../download";
           include("../../include/download.php");
           ?>
        </td>
        <td>
           <?php
           $downloadTitleStandAlone = "Descarrega LanguageTool";
           $downloadLabelStandAlone = "com a programa independent";
           $downloadPathStandAlone = "../download";
           include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td><a href="#liboinstall">Instruccions d'instal·lació per a LibreOffice/OpenOffice</a></td>
        <td><a href="#standalone">Com s'usa LanguageTool com a aplicació independent</a></td>
      </tr>
    </table>
</div>

<h2>Funcions</h2>

LanguageTool aplica <a href="http://community.languagetool.org/rule/list?lang=ca">més de 1000</a> regles per a trobar errades en texts en català, més enllà de les que detecta un simple corrector ortogràfic.<br/><br/>

<small>Passeu el cursor per damunt d'un error per a veure la informació corresponent.</small>

<a class="fancyboxImage" title="LanguageTool com a extensió en LibreOffice.org" href="images/screenshot.png"><img style="margin: 15px" align="right" src="images/screenshot_small.png" alt="Screenshot"/></a>

<ul>
    <li>Gramàtica
        <ul>
            <li><span class="errorMarker" title="Error de concordança. Podria ser: 'el ganivet', 'els ganivets'.">El ganivets</span> no tallen.</li>
            <li>La prova consistia <span class="errorMarker" title="Cal canviar la preposició: 'a'.">en</span> saltar més lluny que els altres.</li>
            <li>Si hagués vingut, tot <span class="errorMarker" title="Falta un verb en condicional: 'haguera', 'hauria'.">hagués</span> anat bé.</li>
            <li>És un fet d'allò més <span class="errorMarker" title="Reviseu la concordança de l'adjectiu «interessants».">interessants</span>.</li>
            <li>L'home <span class="errorMarker" title="Reviseu la construcció de relatiu. Potser cal escriure: 'amb el qual', 'amb què'.">amb el que</span> vaig parlar.
            <li>Va entrar a <span class="errorMarker" title="Cal escriure: 'la universitat'.">l'universitat</span>.</li> 
        </ul>
    </li>
    <li>Majúscules i minúscules
        <ul>
        	<li><span class="errorMarker" title="Aquesta frase no comença amb majúscula">aquest</span> llibre m'ha agradat molt.</li>
            <li>El 3 de <span class="errorMarker" title="Els mesos de l'any s'escriuen en minúsucula: 'juny'.">Juny</span> de 1856.</li>
        </ul>
    </li>
    <li>Confusions i errors de picatge
        <ul>
            <li>Viu <span class="errorMarker" title="¿Volíeu dir 'a la'?">ala</span> ciutat de Manchester.</li>
            <li>Va entrar per la porta de <span class="errorMarker" title="Cal escriure 'darrere'.">darrera</span>.</li>
            <li>Havia <span class="errorMarker" title="Possible confusió: ¿Volíeu dir 'infringit' (= transgredir) en lloc de 'infligit' (= aplicar)?">infligit</span> moltes lleis.</li>
            <li>No hauria pogut <span class="errorMarker" title="¿Volíeu dir 'aprovar'?">aprovat</span> els pressupostos.</li>
        </ul>
    </li>
    <li>Errors de puntuació
        <ul>
            <li>Veniu ací<span class="errorMarker" title="Falta un espai darrere de la coma.">,</span>xiquets.</li>
            <li>Si hagués vingut<span class="errorMarker" title="Dues comes consecutives.">,,</span> tot hauria anat bé.</li>
        </ul>
    </li>
    <li>Paraules errònies segons el context
        <ul>
            <li>en les zones <span class="errorMarker" title="¿Volíeu dir 'costaneres' (= relatiu a la costa)?">costeres</span></li>
            <li>Va ser una mesura <span class="errorMarker" title="¿Volíeu dir 'disciplinària'?">disciplinar</span>.</li>
        </ul>
    </li>
    <li>Variants regionals (opcionals i configurables)
        <ul>
            <li>Jo no <span class="errorMarker" class="Forma verbal pròpia del valencià">parle</span> mai de futbol.</li>
            <li>Se sent <span class="errorMarker" title="Accentuació no valenciana. Substituïu per 'sotmés'.">sotmès</span> a pressions.</li>
        </ul>
    </li>
    <li>I moltes coses més.</li>
</ul>

<h2>Proveu LanguageTool</h2>

Podeu provar LanguageTool amb <a href="http://www.languagetool.org/webstart/web/LanguageTool.jnlp">Java WebStart</a> o directament  
ací en el navegador:<br/><br/>

<?php
$checkSubmitButtonValue = "Comprova el text";
$showLanguageBox = 0;
$checkDefaultLang = "ca";
$checkDefaultText = "Introduïu ací el vostre text. o feu servir aquest texts com a exemple per a algunes errors que LanguageTool pot reconèixer.";
include("../../include/checkform.php");
?>

<h2>Limitacions conegudes</h2>
La versió de LanguageTool en català es troba en ple desenvolupament. Ha avançat molt, però encara resta molt de camí per recórrer. 
Cada tres mesos publiquem una versió nova i actualitzada del corrector. Entre les limitacions conegudes del programa, hi ha les següents:

	<li>La interacció amb paraules no catalanes i amb noms propis no registrats en el diccionari de l'aplicació pot provocar comportaments inesperats.</li>
	<li>Els adjectius posposats i desplaçats poden provocar falses alarmes, però la regla que detecta aquest error és útil en molts altres casos.
	Ex.: Vivien a la casa paterna <span class="errorMarker" title="Reviseu la concordança de l'adjectiu «confosos».">confosos</span> entre els criats.<li>

<h2 id="liboinstall">Instruccions d'instal·lació per a LibreOffice/OpenOffice</h2>
LanguageTool funciona com una extensió per als paquets ofimàtics <a href="http://ca.libreoffice.org/" target="_blank">LibreOffice</a> i <a href="http://ca.openoffice.org/" target="_blank">Apache OpenOffice</a> de <a href="http://ca.wikipedia.org/wiki/Programari_lliure" target="_blank">programari lliure</a>. Per a usar LanguageTool, seguiu els següents passos:

<ol>
    <li>En cas que no tingueu instal·lat Java en el vostre ordinador, descarregueu-lo gratuïtament <a href="http://www.java.com/de/download/manual.jsp" target="_blank">ací</a> i instal·leu-lo. Els usuaris d'Ubuntu han d'instal·lar el paquet <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
    <li>Descarregueu la darrera versió de LanguageTool. (El botó de descàrrega es troba al principi d'aquesta pàgina.)</li>
    <li>Obriu LibreOffice o OpenOffice i aneu al menú d'<i>Eines</i> i seleccionaeu el <i>Gestor d'extensions</i>.</li>
    <li>Feu clic en <i>Afegeix&hellip;</i>, seleccioneu l'arxiu descarregat en el pas 2 i feu clic en <i>Obre</i>.</li>
    <li>Després de la instal·lació, reinicieu LibreOffice o OpenOffice.</li>
</ol>

Tan bon punt s'activi la comprovació d'ortografia i gramàtica, els problemes detectats per LanguageTool en el text apareixeran marcats en blau. Podeu canviar les opcions de LanguageTool en <i>Eines &rarr; LanguageTool &rarr; Configuració&hellip;</i>.

<h2 id="standalone">Com s'usa LanguageTool com a aplicació independent</h2>

<ol>
    <li>Descarregueu i descomprimiu l'arxiu zip. (Per exemple, fent clic amb el botó dret del ratolí &rarr; Descomprimeix &rarr; Aquí o en un altre lloc.).</li>
    <li>Executeu l'arxiu LanguageToolGUI.jar amb Java (potser fent-hi doble-clic).</li>
</ol>


<?=show_link("altres possibilitats d'ús", "../usage/", 0)?>

<h2>Contacte</h2>
<!-- TODO: direkter Kontakt? -->

<p>Podeu fer preguntes en el nostre <a href="../forum">fòrum</a>. Aquí també podeu informar de falses alarmes de LanguageTool o fer propostes de noves regles.</p>


<?php
include("../../include/footer.php");
?>