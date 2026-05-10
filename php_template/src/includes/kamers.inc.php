<?php
use App\Statics\DatabaseSingleton;

isset(DatabaseSingleton::$conn) ?: DatabaseSingleton::makeCon();

$conner = DatabaseSingleton::$conn;

// $sql = "SELECT * FROM Kamers WHERE :Kamer1";

// $stmt = $conner->prepare($sql);
// $stmt->execute(["Kamer1" => "kamerID = 5"]);

// $res = $stmt->fetchAll();
// // SELECT * FROM Customers
// // WHERE Country = 'Mexico';

// // Placeholder variabelen
// $twinFoto = "images/002c3d69-1496-4f82-a20a-f538f8ef7934.avif";
// $twinNaam = "Twin Kamer";
// $twinPrijs = "€95 per nacht";

// $deluxeFoto = "images/2838a928-5577-4fba-8b79-fd66c04fed90.avif";
// $deluxeNaam = "Deluxe Tweepersoonskamer";
// $deluxePrijs = "€125 per nacht";


$res = [
  "test",
  "tester"
];

foreach ($res as $itenm) {
  //iterate and fill template
  echo "
  <div class='kamers'>
  <h2>$itenm</h2>
  <span class='subtitle'>Ontdek onze stijlvol ingerichte kamers, waar comfort en elegantie samenkomen.</span>
  </div>
  ";
}

?>



<div class="kamers">
  <h2>Onze Kamers</h2>
  <span class="subtitle">Ontdek onze stijlvol ingerichte kamers, waar comfort en elegantie
    samenkomen.</span>
</div>
<div class="TwinKamer">
  <div class="TwinKamerTitle">Twin Kamer</div>
  <div class="TwinKamerText">
    Comfort voor twee, met volledige privacy. <br />Ideaal voor vrienden
    of familie. <br />Twee comfortabele bedden en een warme,
    <br />rustgevende sfeer onder het schuine dak.
  </div>
  <div class="allimages">
    <img class="imgTwinKamer" src="images/002c3d69-1496-4f82-a20a-f538f8ef7934.avif" alt="" />
    <div class="Tweepersoonkamer">
      <div class="TweepersoonkamerText">
        <div class="TweepersoonkamerTitle">Deluxe Tweepersoonskamer</div>
        Ruimte, elegantie en ontspanning. <br />
        Een royaal tweepersoonsbed, modern design <br />
        en natuurlijke tinten voor een verfijnd verblijf.
      </div>
    </div>
    <img class="imgTwinKamer2" src="images/2838a928-5577-4fba-8b79-fd66c04fed90.avif" alt="" />
    <img class="imgTwinKamer2 Rechts" src="images/afcf2621-24e9-4f5c-8187-9c7958dafe14.avif" alt="" />
  </div>
</div>