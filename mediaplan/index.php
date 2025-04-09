<?php
require 'functions.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>FAMILIE MEDIEPLAN</title>

    <link rel="canonical" href="http://app.schonemann.net/media-plan/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/form-validation.css" rel="stylesheet">
  
</head>
  <body class="">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/img/logo.png" alt="" width="72" height="72">
    <h2>Familie Medieplan</h2>
    <p class="lead">
Når medier bruges omhyggeligt og passende, kan medier forbedre dagligdagen. Men når de bruges uhensigtsmæssigt eller uden omtanke, kan medier fortrænge mange vigtige aktiviteter såsom ansigt til ansigt-interaktion, familietid, udendørsleg, motion, offline-tid og søvn.

Ved at oprette en brugsplan for medier i Jeres familie kan I blive opmærksom på, hvornår I bruger medier og til hvilket formål. Dette kræver, at forældre tænker over, hvad de ønsker, at disse formål skal være. Værktøjet nedenfor hjælper dig i gang.
</p>
  </div>
      
<div class="row">

    <div class="col-md-4 order-md-2 mb-4 noprint">
     
       <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tilpas denne plan til familien:</span>
      </h4>
      <p>Hver overskrift efterfølges af eksempler eller forslag. Kontroller de elementer, der gælder for familien, så de passer til medieplanen. De ekstra tekstbokse kan bruges til at tilføje yderligere oplysninger, der er specifikke for familien.</p>
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tilpas til hvert barn:</span>
      </h4>
      <p>Nogle af disse ting gælder for hele familien, mens andre muligvis måske kun gælder for visse børn i husstanden. Tilpas medieplanen ved at indtaste barnets navn på planen. Hold løbende medieplanen opdateret.</p>     

  
<div class="sticky-top noprint">
  <br>
  	<h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Indhold</span>
      </h4>
<nav class="nav flex-column">
  <a class="nav-link" href="#section-1">1. Personlige Oplysninger</a>
  <a class="nav-link" href="#section-2">2. Kontooplysninger</a>
  <a class="nav-link" href="#section-3">3. Skærmfrie Zoner</a>
  <a class="nav-link" href="#section-4">4. Skærmfrie Tidspunkter</a>
  <a class="nav-link" href="#section-5">5. Enhedsforbud</a>
   <a class="nav-link" href="#section-6">6. Vælg & Diversificer medier</a>
   <a class="nav-link" href="#section-7">7. Offline & Online</a>
  <a class="nav-link" href="#section-8">8. God Opførsel</a>
  <a class="nav-link" href="#section-9">9. Digital Borger</a>
  <a class="nav-link" href="#section-10">10. Digital Sikkerhed</a>
  <a class="nav-link" href="#section-11">11. Søvn & Træning</a>
  <a class="nav-link" href="#section-12">12. Vilkår & Betingelser</a>
  <a class="nav-link" href="#save">13. Gem & Udskriv</a>
</nav>
</div>       
    </div>
    
    <div class="col-md-8 order-md-1">
      <h3>Dato: <?php echo date('d-m-Y'); ?></h3>
      <hr class="mb-4">
      <h4 id="section-1" class="mb-3">1. Personlige Oplysninger</h4>
      <p class="text-muted">Familie, navn, alderstrin og fødselsdag</p>
      <hr class="mb-4">
      <form enctype="multipart/form-data" id="save-form" onsubmit="return false;" class="needs-validation" novalidate autocomplete="off">
        
        <?php
        $input_id = 0;
        ?>
        
         <div class="mb-3">
           <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Familienavn <span class="text-muted">(påkrævet)</span></label>
            <input type="text" name="<?php echo $save_info; ?>" class="form-control" id="<?php echo $save_info; ?>" placeholder="" value="<?php echo getCookieData($save_info); ?>" required>
            <div class="invalid-feedback">
              Familienavn er påkrævet.
            </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Fornavn <span class="text-muted">(optionel)</span></label>
            <input type="text" name="<?php echo $save_info; ?>" class="form-control" id="<?php echo $save_info; ?>" placeholder="" value="<?php echo getCookieData($save_info); ?>">
          </div>
          <div class="col-md-6 mb-3">
            <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Efternavn <span class="text-muted">(optionel)</span></label>
            <input type="text" name="<?php echo $save_info; ?>" class="form-control" id="<?php echo $save_info; ?>" placeholder="" value="<?php echo getCookieData($save_info); ?>">
          </div>
        </div>
        
         <div class="mb-3">
           <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Alderstrin <span class="text-muted">(optionel)</span></label>
            <select name="<?php echo $save_info; ?>" class="custom-select d-block w-100" id="age">
              <option selected disabled hidden>Vælg ...</option>
              <option <?php if( getCookieData($save_info) == 1 ){?> selected <?php } ?> value="1">Spædbarn: 1,5-2 år</option>
              <option <?php if( getCookieData($save_info) == 2 ){?> selected <?php } ?> value="2">Tumling: 2-5 år</option>
              <option <?php if( getCookieData($save_info) == 3 ){?> selected <?php } ?> value="3">Tween: 6-12 år</option>
              <option <?php if( getCookieData($save_info) == 4 ){?> selected <?php } ?> value="4">Teenager: 13-18 år</option>
            </select>
        </div>
        <label>Fødselsdag <span class="text-muted">(optionel)</span></label>
        
        <div class="row">
          <div class="col-md-4 mb-3">
          <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Dato</label>
            <select name="<?php echo $save_info; ?>" class="custom-select d-block w-100" id="<?php echo $save_info; ?>">
              <option selected disabled hidden>Vælg...</option>
              <?php
              for ($x = 1; $x <= 31; $x++) {
                ?>
    			<option <?php if( getCookieData($save_info) == $x ){ ?> selected <?php } ?> value="<?php echo $x ?>"><?php echo $x ?></option>
              <?php
				}
              ?>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">Måned</label>
            <select name="<?php echo $save_info; ?>" class="custom-select d-block w-100" id="<?php echo $save_info; ?>">
              <option selected disabled hidden>Vælg...</option>
			<?php
              for ($x = 1; $x <= 12; $x++) {
                ?>
    			<option <?php if( getCookieData($save_info) == $x ){ ?> selected <?php } ?> value="<?php echo $x ?>"><?php echo $x ?></option>
              <?php
				}
              ?>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <?php $save_info = "save-info-" . $input_id++; ?>
            <label for="<?php echo $save_info; ?>">År</label>
            <select name="<?php echo $save_info; ?>" class="custom-select d-block w-100" id="<?php echo $save_info; ?>">
              <option selected disabled hidden>Vælg...</option>
			<?php
              for ($x = 1990; $x <= 2030; $x++) {
                ?>
    			<option <?php if( getCookieData($save_info) == $x ){ ?> selected <?php } ?> value="<?php echo $x ?>"><?php echo $x ?></option>
              <?php
				}
              ?>
            </select>
            <div class="invalid-feedback">
              År er påkrævet
            </div>
          </div>
        </div>
      <hr class="mb-4">
      <h4 id="section-2" class="mb-3">2. Kontooplysninger</h4>
        <p class="text-muted">Brugernavn, adgangskode, email og fødselsdag til hjemmesider</p>
      <hr class="mb-4">
        
        <div class="mb-3">
          <?php $save_info = "save-info-" . $input_id++; ?>
          <label for="<?php echo $save_info; ?>">Brugernavn <span class="text-muted">(optionel)</span></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input name="<?php echo $save_info; ?>" type="text" class="form-control" id="<?php echo $save_info; ?>" placeholder="" value="<?php echo getCookieData($save_info); ?>">
          </div>
        </div>
        
        <div class="mb-3">
          <?php $save_info = "save-info-" . $input_id++; ?>
          <label for="<?php echo $save_info; ?>">Adgangskode <span class="text-muted">(optionel - til og med 12 år)</span></label>
          <input name="<?php echo $save_info; ?>" type="text" class="form-control" id="<?php echo $save_info; ?>" placeholder="" value="<?php echo getCookieData($save_info); ?>">
        </div>

        <div class="mb-3">
          <?php $save_info = "save-info-" . $input_id++; ?>
          <label for="<?php echo $save_info; ?>">Email <span class="text-muted">(optionel)</span></label>
          <input name="<?php echo $save_info; ?>" type="<?php echo $save_info; ?>" class="form-control" id="<?php echo $save_info; ?>" placeholder="navn@email.dk" value="<?php echo getCookieData($save_info); ?>">
        </div>
        
        <hr class="mb-4">
        <h4 id="section-3" class="mb-3">3. Skærmfrie Zoner</h4>
        <p>At have skærmfrie områder i hjemmet er vigtigt. Vælg fra listen nedenfor og føj dem til planen for at sikre, at I alle er enige om, hvor skærme IKKE er tilladt. Tilføj andre skærmfrie områder, der er specifikke for familien.</p>
        <hr class="mb-4">
        <h6>Mobilenheder og TV'er er IKKE tilladt i de følgende skærmfrie zoner i hjemmet:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-1" checked>
          <label class="custom-control-label" for="save-info-1"><b>Soveværelse</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-2-1" checked>
          <label class="custom-control-label" for="save-info-2-1"><b>Køkken</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-2-2" checked>
          <label class="custom-control-label" for="save-info-2-2"><b>Spisestue</b></label>
		</div>
        <br>
        <div class="mb-3">
          <label for="other-1"><b>Andet</b></label>
          	<textarea class="form-control" id="other-1" rows="1"></textarea>
          </div>
        <hr class="mb-4">
        <h4 id="section-4" class="mb-3">4. Skærmfrie Tidspunkter</h4>
        <p>Enheder som TV, telefoner, computere, spil eller anden elektronik bør kun bruges på bestemte tidspunkter. Middagstid og før sengetid er vigtige, men der kan også være behov for mere udvidede pauser fra teknologi hver dag - især for familier med meget små børn.</p>
        <hr class="mb-4">
        <h6>Jeg vil ikke bruge mobile enheder eller andre skærme i de følgende tidspunkter:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-3" checked>
          <label class="custom-control-label" for="save-info-3"><b>Mens vi er ude og gå</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-4" checked>
          <label class="custom-control-label" for="save-info-4"><b>Mens der laves lektier</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-5" checked>
          <label class="custom-control-label" for="save-info-5"><b>Mens vi er i bilen - undtaget lange ture</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-6" checked>
          <label class="custom-control-label" for="save-info-6"><b>Familietid</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-7" checked>
          <label class="custom-control-label" for="save-info-7"><b>Måltider</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-8" checked>
          <label class="custom-control-label" for="save-info-8"><b>1 time før sengetid</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-9" checked>
          <label class="custom-control-label" for="save-info-9"><b>Mens vi kører bil</b></label>
		</div>
        <br>
        <div class="mb-3">
          <label for="other-2"><b>Andet</b></label>
            <textarea class="form-control" id="other-2" rows="1"></textarea>
          </div>
        
        <hr class="mb-4">
        <h4 id="section-5" class="mb-3">5. Enhedsforbud</h4>
        <p>Alle familier er forskellige, men det er en god ide at beslutte, hvornår enheder kan bruges og hvor de skal opbevares.</p>
        <hr class="mb-4">
        <div class="mb-3">
          <label for="screenTime"><b>Enheder må bruges mellem (påkrævet):</b></label>
            <input type="text" class="form-control" id="screenTime" placeholder="" value="" required>
          </div>
        <h6>Enheder IKKE i brug skal opbevares i:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-10" checked>
          <label class="custom-control-label" for="save-info-10"><b>Forældres soveværelse</b></label>
		</div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-11" checked>
          <label class="custom-control-label" for="save-info-11"><b>Køkkenet</b></label>
		</div>
        <br>
        <div class="mb-3">
          <label for="other-3"><b>Andet</b></label>
            <textarea class="form-control" id="other-3" rows="1"></textarea>
          </div>
        
        <hr class="mb-4">
        <h4 id="section-6" class="mb-3">6. Vælg & Diversificer medier</h4>
        <p class="text-muted"><b>Vælg medier, der fremmer børns udvikling:</b></p>
<p>Mere end 80.000 apps er mærket som uddannelsesmæssige, men lidt forskning har demonstreret deres faktiske kvalitet. Produkter, der er fremhævet som "interaktive", skal være kreative nok til at udvikle børn.</p>
        <p class="text-muted"><b>Diversificer mediebrug:</b></p>
<p>Brug medier på en måde, der fremmer interaktion, forbindelse og kreativitet. Forskellige typer medier kan hver især have potentielle fordele, så mediebrugen diversificeres bedst, så ikke al ens tid bruges til at udføre en bestemt aktivitet.</p>
        <hr class="mb-4">
        <h6>Når vi har fritidsskærmtid, må jeg:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-12" checked>
          <label class="custom-control-label" for="save-info-12"><b>Samsening (se medier med en forælder eller voksen)</b></label>
        </div>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-13" checked>
          <label class="custom-control-label" for="save-info-13"><b>Samspil (spille videospil og bruge apps med en forælder eller voksen)</b></label>
        </div>
           <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-14" checked>
          <label class="custom-control-label" for="save-info-14"><b>Videochat med venner eller familie</b></label>
        </div>
              <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-15" checked>
          <label class="custom-control-label" for="save-info-15"><b>Spille læringsapps</b></label>
        </div>
             <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-16" checked>
          <label class="custom-control-label" for="save-info-16"><b>Spille apps, der er kreative, uddannelsesmæssige og fremmer sunde interaktioner med andre</b></label>
        </div>
           <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-17" checked>
          <label class="custom-control-label" for="save-info-17"><b>Se passende alder og uddannelsesmæssige shows og videoer</b></label>
        </div>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-18" checked>
          <label class="custom-control-label" for="save-info-18"><b>Afspil videoer, shows og apps med voksne</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-19" checked>
          <label class="custom-control-label" for="save-info-19"><b>IKKE besøge nye websteder eller videosider uden at spørge  tilladelse</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-20" checked>
          <label class="custom-control-label" for="save-info-20"><b>Bruge medier til at være kreativ</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-21" checked>
          <label class="custom-control-label" for="save-info-21"><b>Bruge medier til at netværke med andre</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-22" checked>
          <label class="custom-control-label" for="save-info-22"><b>IKKE besøge nye websteder eller videosider, der ligger UDEN for de grænser, der er oprettet af min familie uden at spørge om tilladelse</b></label>
        </div>
          <br>
        <div class="mb-3">
          <label for="other-3"><b>Andet</b></label>
            <textarea class="form-control" id="other-3" rows="1"></textarea>
          </div>
        
         <hr class="mb-4">
        <h4 id="section-7" class="mb-3">7. Offline & Online</h4>
        <p>Medier og digitale enheder er en integreret del af vores verden i dag. Fordelene ved disse enheder kan, hvis de bruges moderat og passende, være store. Men forskning har vist, at ansigt til ansigt-tid sammen med familie, venner og lærere spiller en vigtig rolle i at fremme børns læring og udvikling.</p>
        <hr class="mb-4">
        <h6>Ved at reducere skærmtid får vi mere tid til:</h6>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-23" checked>
          <label class="custom-control-label" for="save-info-23"><b>Læsning</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-24" checked>
          <label class="custom-control-label" for="save-info-24"><b>Sove</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-25" checked>
          <label class="custom-control-label" for="save-info-25"><b>Være sammen med venner</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-26" checked>
          <label class="custom-control-label" for="save-info-26"><b>Hobbyaktiviteter</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-27" checked>
          <label class="custom-control-label" for="save-info-27"><b>Sport</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-28" checked>
          <label class="custom-control-label" for="save-info-28"><b>Være udenfor</b></label>
        </div>
        <br>
        <div class="mb-3">
          <label for="other-4"><b>Andet</b></label>
            <textarea class="form-control" id="other-4" rows="1"></textarea>
          </div>
        
         <hr class="mb-4">
        <h4 id="section-8" class="mb-3">8. God Opførsel</h4>
        <p>At være høflig og have god manerer er lige så vigtige, som de altid har været. At have en mobiltelefon eller en mobil enhed er IKKE en undskyldning for at glemme vores manerer.</p>
        <hr class="mb-4">
        <h6>Vi vil vise gode mediemanerer, ved sy:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-29" checked>
          <label class="custom-control-label" for="save-info-29"><b>IKKE se på telefonen eller sms, mens vi taler med nogen eller under måltider</b></label>
        </div>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-30" checked>
          <label class="custom-control-label" for="save-info-30"><b>IKKE holde telefonen på (eller under) bordet under måltider</b></label>
        </div>
          <br>
        <div class="mb-3">
          <label for="other-5"><b>Andet</b></label>
            <textarea class="form-control" id="other-5" rows="1"></textarea>
          </div>
        
         <hr class="mb-4">
        <h4 id="section-9" class="mb-3">9. Digital Borger</h4>
        <p>Tal med børn om at være gode "digitale borgere" og diskuter de alvorlige konsekvenser af online mobning. Hvis et barn er offer for cybermobning, er det vigtigt at tage handletiltag. Vær opmærksom på børns og teenagers mentale sundhedsbehov, hvis de bliver mobbet online og overvej at adskille dem fra de sociale medieplatforme, hvor mobningen forekommer.</p>
        <hr class="mb-4">
        <h6>Vi vil være gode digitale borgere, ved at:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-31" checked>
          <label class="custom-control-label" for="save-info-31"><b>Respektere andres privatliv (videresender aldrig en tekst eller et foto uden først at spørge om tilladelse)</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-32" checked>
          <label class="custom-control-label" for="save-info-32"><b>IKKE at være uhøflig eller mobbe nogen online</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-33" checked>
          <label class="custom-control-label" for="save-info-33"><b>Hjælpe og støtte andre online</b></label>
        </div>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-34" checked>
          <label class="custom-control-label" for="save-info-34"><b>Fortælle en forælder eller en anden betroet voksen, hvis jeg eller andre bliver mobbet, ikke respekteret, angrebet eller behandlet dårligt online</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-35" checked>
          <label class="custom-control-label" for="save-info-35"><b>Fortælle en forælder eller en anden betroet voksen, hvis jeg får beskeder eller fotos, der gør mig utilpas</b></label>
        </div>
         <br>
        <div class="mb-3">
          <label for="other-6"><b>Andet</b></label>
            <textarea class="form-control" id="other-6" rows="1"></textarea>
          </div>
        
        <hr class="mb-4">
        <h4 id="section-10" class="mb-3">10. Digital Sikkerhed</h4>
        <p>Hold dit barn sikkert ved at behandle medier, som du ville gøre med alt andet i dit barns liv.</p>
        <hr class="mb-4">
        <h6>Jeg vil følge disse digitale sikkerhedsregler, ved at:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-36" checked>
          <label class="custom-control-label" for="save-info-36"><b>IKKE dele personlige oplysninger online</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-37" checked>
          <label class="custom-control-label" for="save-info-37"><b>IKKE bruge en telefon, mens jeg kører/cykler</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-38" checked>
          <label class="custom-control-label" for="save-info-38"><b>IKKE bruge en telefon eller tekste, når jeg krydser vejen</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-39" checked>
          <label class="custom-control-label" for="save-info-39"><b>IKKE dele private fotos online</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-40" checked>
          <label class="custom-control-label" for="save-info-40"><b>Gennemgå indstillinger for beskyttelse af personlige oplysninger på alle hjemmesider med hjælp fra en voksen</b></label>
        </div>
          <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-41" checked>
          <label class="custom-control-label" for="save-info-41"><b>IKKE bliv venner, chat med eller spil virtuelt med nogen uden en forældres tilladelse</b></label>
        </div>
        <div class="mb-3">
          <label for="other-7"><b>Andet</b></label>
            <textarea class="form-control" id="other-7" rows="1"></textarea>
          </div>
        
        <hr class="mb-4">
        <h4 id="section-11" class="mb-3">11. Søvn & Træning</h4>
        <p>Alle børn har brug for masser af søvn og træning hver dag.</p>
        <hr class="mb-4">
        <h6>Jeg får nok søvn og træning, ved at:</h6>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-42" checked>
          <label class="custom-control-label" for="save-info-42"><b>Få 8-10 timers søvn hver dag</b></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-43" checked>
          <label class="custom-control-label" for="save-info-43"><b>Træne minimum 1 time om dagen</b></label>
        </div>
         <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info-44" checked>
          <label class="custom-control-label" for="save-info-44"><b>Slukke fjernsynet, mobilenheden eller computeren senest 1 time før sengetid</b></label>
        </div>
        <br>
        <div class="mb-3">
          <label for="other-8"><b>Andet</b></label>
            <textarea class="form-control" id="other-8" rows="1"></textarea>
          </div>

		<hr class="mb-4">
        <h4 id="section-12" class="mb-3">12. Vilkår & Betingelser</h4>
        <p>Ved at udfylde, accepterer og udskrive denne medieplan accepterer jeg, at jeg vil overholde ovenstående punkter.</p>
        <hr class="mb-4">
        <div class="mb-3">
          <label for="terms"><b>Brud på denne medieplan medfører følgende konsekvens (påkrævet):</b></label>
            <textarea class="form-control" id="terms" rows="1" required></textarea>
          </div>
        <br>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="accept-terms" required>
          <label class="custom-control-label" for="accept-terms"><b>Jeg accepterer udformningen af denne medieplan samt dens vilkår og betingelser.</b></label>
        </div>
        <div class="noprint">
        <hr class="mb-4">
        <h4 id="save" class="mb-3">13. Gem og Udskriv</h4>
        <p>Print denne formular for at gemme den. Forlader du siden, vil indholdet IKKE blive gemt.</p>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Gem & udskriv</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small noprint">
    <p class="mb-1">© 2019 Datalære</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a target="_blank" href="https://datalaere.dk/privacy">Privatliv</a></li>
      <li class="list-inline-item"><a target="_blank" href="https://datalaere.dk/terms">Betingelser</a></li>
      <li class="list-inline-item"><a target="_blank" href="https://datalaere.dk">Support</a></li>
      <li class="list-inline-item"><a target="_blank" href="https://www.healthychildren.org/English/media/Pages/default.aspx">Kilder</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/form-validation.js"></script>

</body>
</html>
