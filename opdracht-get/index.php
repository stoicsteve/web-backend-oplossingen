<?php

  $artikels = array( 
                        array ( 'titel'         => 'Belastingen nemen grote bedrijven in het vizier', 
                                'datum'         => '16.08.2015',
                                'inhoud'     => 'De Belgische fiscus is begonnen met het doelgericht controleren van grote ondernemingen en multinationals. De belastingdienst heeft zeven centra opgericht waar de knowhow over de belastingaanpak voor die bedrijven gebundeld wordt. Tegen dit najaar moeten 350 ambtenaren er zich mee bezighouden.',
                                'afbeelding'    => 'images/belastingen.jpg',
                                'beschrijving'  => 'Belastingsbrief die ingevuld wordt', 
                                ), 

                        array ( 'titel'         => 'Werknemers: "Werken bij Amazon is verschrikkelijk"', 
                                'datum'         => '16.08.2015',
                                'inhoud'     => 'De enorme efficiëntie en snelle expansie van internetwinkel Amazon legt een onredelijk hoge werkdruk op haar werknemers, zo blijkt uit een artikel dat de New York Times deze week publiceerde. Journalisten van de krant spraken een halfjaar lang met meer dan 100 (ex-)werknemers. "Er was een vaste grap op kantoor dat als het over de balans tussen werk en privé ging, werk eerst kwam, daarna privé en als laatste de balans", zo vertelt een van de oud-werknemers van het online warenhuis in de New York Times. ',
                                'afbeelding'    => 'images/amazon.jpg',
                                'beschrijving'  => 'Belastingsbrief die ingevuld wordt', 
                                ), 

                        array ( 'titel'         => 'En de politicus? Hij cumuleerde rustig voort', 
                                'datum'         => '16.08.2015',
                                'inhoud'     => 'Op vraag van het Rekenhof hebben 7.266 politici netjes hun beroepsactiviteiten opgelijst. De mandatenkoning? Limburger Ludwig Vandenhove (55). De sp.a\r cumuleert 58 mandaten, waarvan 55 weliswaar \'gratis en voor niets\'. Om bij sommige dossiers elke zweem van belangenvermenging de kop in te drukken zijn alle ministers, parlementsleden, burgemeesters, schepenen, gemeenteraadsleden en topambtenaren verplicht jaarlijks een overzicht te maken van hun mandaten en onder gesloten omslag hun vermogen aan te geven bij het Rekenhof.',
                                'afbeelding'    => 'images/politici.jpg',
                                'beschrijving'  => 'Belastingsbrief die ingevuld wordt', 
                                ), 
                        );

  // Configuratie-variabelen
  $individueelArtikel   = false;
  $nietBestaandArtikel  = false;

  // Controleren of de get-variabele ID geset is om een individueel artikel op te halen
  if ( isset ( $_GET['id'] ) )
  {
    $id = $_GET['id'];

    // Controleren of de opgevraagde key (=id) bestaat in de array $artikels
    if ( array_key_exists( $id , $artikels ) )
    {
      $artikels       =   array( $artikels[$id] );
      $individueelArtikel = true;
    }
    else
    {
      $nietBestaandArtikel  = true;
    }   
  }

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

  <?php if ( !$individueelArtikel ): ?>
    <title>Oplossing get: deel1</title>
  <?php elseif ( $nietBestaandArtikel ): ?>
    <title>Oplossing get: deel1 - Het artikel met id <?php echo $id ?> bestaat niet</title>
  <?php else: ?>
    <title>Oplossing get: deel1. Artikel: <?php echo $artikels[0]['titel'] ?></title>
  <?php endif ?>

<link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
   <div class="bg">
    <!--start container-->
    <div id="container">
    <!--start header-->
    <header>
      <!--start logo-->
      <a href="#" id="logo"><img src="images/logo.png" width="180" height="43" alt="logo"/></a>    
      <!--end logo-->
      <!--start menu-->
  	   <nav>
         <ul>
         <li><a href="#" class="current">Home</a></li>
         <li><a href="#">About us</a></li>
     	   <li><a href="#">Services</a></li>
     	   <li><a href="#">Portfolio</a></li>
         <li><a href="#">News</a></li>
         <li><a href="#">Contact</a></li>
         </ul>
      </nav>
  	   <!--end menu-->
      <!--end header-->
	</header>
   <!--start intro-->
   <section id="intro">
      <hgroup>
      <h1>"Simplicity is the ultimate sophistication"<span>- Leonardo da Vinci</span></h1>
      <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
      Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</h2>
      </hgroup>
   </section>
   <!--end intro-->
   <!--start holder-->
   <div class="holder_content">


      <?php if ( !$nietBestaandArtikel ): ?>

         <?php foreach ($artikels as $id => $artikelArray): ?>

          <section class="group1">

            <article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
              <h3><?php echo $artikelArray['titel'] ?></h3>
              <h4><?php echo $artikelArray['datum'] ?></h4>
              <p><?php echo ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikelArray['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikelArray['inhoud'] ) ; ?></p>
              <a class="photo_hover3" href="#"><img src="<?php echo $artikelArray['afbeelding'] ?>" alt="<?php echo $artikelArray['beschrijving'] ?>"></a>
               <?php if ( !$individueelArtikel ): ?>
                  <p><span class="button"><a href="index.php?id=<?php echo $id ?>">Lees meer</a></span></p> 
             <?php endif ?>
            </article>

          </section>
              
        <?php endforeach ?> 

    <?php else: ?>
        <article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
          <p>Het artikel met id <?php echo $id ?> bestaat niet. Probeer een ander artikel.</p>
        </article>
    <?php endif ?> 

	</div>
	<!--end holder-->
   </div>
   <!--end container-->
   <!--start footer-->
   <footer>
      <div class="container">  
         <div id="FooterTwo"> © 2011 Minimalism </div>
         <div id="FooterTree"> Valid html5, design and code by <a href="http://www.marijazaric.com">marija zaric - creative simplicity</a> </div> 
      </div>
   </footer>
   <!--end footer-->
   </div>
   <!--end bg-->
   <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
</html>