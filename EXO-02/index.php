<header>
<?php include 'navigation.php';?>
        <h1>Summer Code Camp</h1>



</header> 
<footer>
        </br><a href="http://www.epitech.eu"><img src="logo_epitech.png"style="width:180px; height=100px"title="White flower"></a>    
    </footer>
    <?php 
if ($_GET[page]==accueil) {
echo "<H1>Accueil</H1>" ;
echo "<p>Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ?Pour mieux comprendre cette révolution, venez apprendre les rudiments du code etdécouvrir les bases de la programmation des sites internet. Destiné aux étudiants,ce code camp vous initiera en un mois aux principaux langages de programmationWeb (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils commeGoogleouPaypalet vous éclaira sur la sécurité des sites internet.</p>";
}
if ($_GET[page]==programme) {
    echo "<h1> Programme </h1>";
    echo " <P>Date Programme 
    </br> Jour 1                               <text-align: center> Accueil des apprenants Installation et Conférence</text-align:>
</br>    Jour 2                                HTML-1
</br>Jour 3                                        HTML-2
</br>Jour 4                                        HTML-3 et Conférence
</br>Jour 5                                        PHP-1
</br>Weekend                                       Weekend
</br>Weekend                                       Weekend
</br>Jour 6 PHP-2
</br>Jour 7PHP-3
</br>Jour 8PHP-4
</br>Jour 9PHP-5
</br>Jour 10SQL-1
</br>WeekendWeekend
</br>WeekendWeekend
</br>Jour 11SQL-2
</br>Jour 12SQL-3 et Conférence
</br>Jour 13Projet MyDevBlogJour 
</br>14Projet MyDevBlog et ConférenceJour 
</br>15Projet MyDevBlog
</br>WeekendWeekend
</br>WeekendWeekend
</br>Jour 16Soutenance Projet MyDevBlog</P>"
    ;}
if ($_GET[page]==contacts) {
    echo "<h1> contact </h1>" ;
    echo "azsedfrghjk"
    ;}
if ($_GET[page]==contact-form) {
    if (true){
        <a href= "./contact-form.php">eza</a>
        }
    else{
        echo "<p> Aucune donnée reçus</p>"
        ;}
    
    ;}
if ($_GET[page]!=contacts && $_GET[page]!=programme && $_GET[page]!=accueil && $_GET[page]==contact-form) {
    error 404
    ;}

?>