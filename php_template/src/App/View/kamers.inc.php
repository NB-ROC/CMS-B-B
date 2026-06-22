<?php
$kamers = [
  [
    "naam" => "Twin Kamer",
    "tekst" => "Comfort voor twee, met volledige privacy. Ideaal voor vrienden of familie. Twee comfortabele bedden en een warme, rustgevende sfeer onder het schuine dak.",
    "foto" => "images/002c3d69-1496-4f82-a20a-f538f8ef7934.avif",
    "prijs" => "€89 per nacht"
  ],
  [
    "naam" => "Deluxe Tweepersoonskamer",
    "tekst" => "Ruimte, elegantie en ontspanning. Een royaal tweepersoonsbed, modern design en natuurlijke tinten voor een verfijnd verblijf.",
    "foto" => "images/2838a928-5577-4fba-8b79-fd66c04fed90.avif",
    "prijs" => "€119 per nacht"
  ],
  [
    "naam" => "Sfeervolle Kamer",
    "tekst" => "Een warme kamer met veel licht, zachte kleuren en een comfortabele inrichting voor een ontspannen verblijf.",
    "foto" => "images/afcf2621-24e9-4f5c-8187-9c7958dafe14.avif",
    "prijs" => "€99 per nacht"
  ]
];
?>

<div class="w-full bg-[#f5f1ee] py-[80px]">

  <div class="text-center mb-[50px]">
    <h2 class="text-[55px] text-[#e6655f] font-normal mb-[10px]">
      Onze Kamers
    </h2>

    <p class="text-[18px] text-[#6f6262]">
      Ontdek onze stijlvol ingerichte kamers, waar comfort en elegantie samenkomen.
    </p>
  </div>

  <div class="flex flex-wrap justify-center gap-[35px] px-[40px]">

    <?php foreach ($kamers as $kamer) { ?> //een kaart

      <div class="w-[330px] bg-white rounded-[22px] shadow-lg overflow-hidden">

        <img
          class="w-full h-[190px] object-cover"
          src="<?php echo $kamer["foto"]; ?>"
          alt="<?php echo $kamer["naam"]; ?>"
        >

        <div class="p-[22px] text-center"> 

          <h3 class="text-[24px] text-[#807070] mb-[12px]">
            <?php echo $kamer["naam"]; ?>
          </h3>

          <p class="text-[15px] text-[#6f6262] leading-[1.6] mb-[15px]">
            <?php echo $kamer["tekst"]; ?>
          </p>

          <p class="text-[18px] text-[#e6655f] font-bold mb-[15px]">
            <?php echo $kamer["prijs"]; ?>
          </p>

          <div class="flex flex-col gap-[8px] mb-[20px] text-[14px] text-[#6f6262]">
            <span class="bg-[#f5f1ee] rounded-[10px] py-[7px]">Gratis wifi</span>
            <span class="bg-[#f5f1ee] rounded-[10px] py-[7px]">Eigen badkamer</span>
            <span class="bg-[#f5f1ee] rounded-[10px] py-[7px]">Ontbijt mogelijk</span>
          </div>

      

        </div>
      </div>

    <?php } ?>

  </div>
</div>