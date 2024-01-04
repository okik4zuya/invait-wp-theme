<?php get_header(); ?>
<style>
<?php 

 $fontList = [
   "alexBrush" => "Alex Brush", 
   "allura" => "Allura", 
   "arimaMadurai" => "Arima Madurai", 
   "arizonia" => "Arizonia", 
   "badScript" => "Bad Script", 
   "charm" => "Charm", 
   "chewy" => "Chewy", 
   "cinzelDecorative" => "Cinzel Decorative", 
   "dancingScript" => "Dancing Script", 
   "festive" => "Festive", 
   "frederickatheGreat" => "Frederickathe Great", 
   "fugazOne" => "Fugaz One", 
   "gluten" => "Gluten", 
   "greatVibes" => "Great Vibes", 
   "gwendolyn" => "Gwendolyn", 
   "herrVonMuellerhoff" => "Herr Von Muellerhoff", 
   "homemadeApple" => "Homemade Apple", 
   "hurricane" => "Hurricane", 
   "imperialScript" => "Imperial Script", 
   "inspiration" => "Inspiration", 
   "italianno" => "Italianno", 
   "kaushanScript" => "Kaushan Script", 
   "lobster" => "Lobster", 
   "lobsterTwo" => "Lobster Two", 
   "loveLight" => "Love Light", 
   "luxuriousScript" => "Luxurious Script", 
   "marckScript" => "Marck Script", 
   "meaCulpa" => "Mea Culpa", 
   "meddon" => "Meddon", 
   "merienda" => "Merienda", 
   "monsieurLaDoulaise" => "Monsieur La Doulaise", 
   "mrDafoe" => "Mr Dafoe", 
   "mrDeHaviland" => "Mr De Haviland", 
   "mrsSaintDelafield" => "Mrs Saint Delafield", 
   "neonderthaw" => "Neonderthaw", 
   "ole" => "Ole", 
   "pacifico" => "Pacifico", 
   "parisienne" => "Parisienne", 
   "petitFormalScript" => "Petit Formal Script", 
   "philosopher" => "Philosopher", 
   "pinyonScript" => "Pinyon Script", 
   "playball" => "Playball", 
   "praise" => "Praise", 
   "satisfy" => "Satisfy", 
   "seaweedScript" => "Seaweed Script", 
   "shrikhand" => "Shrikhand", 
   "smooch" => "Smooch", 
   "tangerine" => "Tangerine", 
   "theNautigal" => "The Nautigal", 
   "twinkleStar" => "Twinkle Star", 
   "unicaOne" => "Unica One", 
   "unifrakturMaguntia" => "UnifrakturMaguntia", 
   "balooBhaijaan2" => "Baloo Bhaijaan 2", 
   "comfortaa" => "Comfortaa", 
   "comicNeue" => "Comic Neue", 
   "delius" => "Delius", 
   "forum" => "Forum", 
   "gruppo" => "Gruppo", 
   "handlee" => "Handlee", 
   "mali" => "Mali", 
   "montserrat" => "Montserrat", 
   "poiretOne" => "Poiret One", 
   "quintessential" => "Quintessential", 
   "sniglet" => "Sniglet" 
]; 
 
 

foreach($fontList as $font){ ?>
@import url(https://fonts.googleapis.com/css2?family=<?php echo str_replace(' ', '+', $font); ?>&display=swap);
<?php } ?>
.font-specimen{
    margin: 1rem auto;
    font-size: 2rem;

}
</style>

<div>
    <?php foreach($fontList as $font){?>
        <div class='font-specimen' style="font-family: <?php echo $font; ?>;"><?php echo $font?></div>

    <?php } ?>
</div>


<?php get_footer(); ?>