<?php
$fotos = [
    "002c3d69-1496-4f82-a20a-f538f8ef7934.avif",
    "4c01f9e9-8fee-412e-880e-92927bdce506.avif",
    "5febe8c9-4605-46f7-b89b-5c7de6f73305.avif",
    "32a4972c-2238-40af-9ddc-16069a66a09f.avif",
    "34f2be60-6ae6-4a15-a087-c048c8425691.avif",
    "948a2978-94d5-4e37-9e30-38e0fe6718e7.avif",
    "2821c818-6e08-4021-b651-0635eb180c91.avif",
    "2838a928-5577-4fba-8b79-fd66c04fed90.avif",
    "7635084f-c1a6-4aa7-a496-9b940aaa5ad8.avif",
    "12692270-9136-42e7-8a5c-3ff996fe51db.avif",
    "a97c306d-c6ff-4c11-9d25-a90a90ff8dd4.avif",
    "afcf2621-24e9-4f5c-8187-9c7958dafe14.avif",
    "b46a6edb-7a8d-4239-995e-100091788cb7.avif",
    "f1901f94-f315-45a7-8bb6-127327b11f01.avif",
    "fb5e9c74-28d8-4893-aba1-f1f42e853ea3.avif"
];
?>

<div class="w-full py-[80px] bg-[#f5f1ee]">

    <div class="text-center mb-[50px]">
        <h2 class="text-[55px] text-[#e6655f] font-normal mb-[15px]">
            Galerij
        </h2>

        <p class="text-[#807070] text-[18px]">
            Waar elegantie en rust samenkomen.<br>
            Ontdek onze accommodatie in beeld.
        </p>
    </div>

    <div class="flex justify-center">

        <div class="bg-white p-[20px] rounded-[20px] shadow-lg">

            <img
                id="groteFoto"
                src="images/<?php echo $fotos[0]; ?>"
                class="w-[650px] h-[400px] object-cover rounded-[15px]"
                alt=""
            >

        </div>

    </div>

    <div class="flex justify-center gap-[15px] mt-[25px]">

        <button
            onclick="vorigeFoto()"
            class="bg-[#807070] text-white px-[25px] py-[10px] rounded-[20px]"
        >
            ← Vorige
        </button>

        <button
            onclick="volgendeFoto()"
            class="bg-[#e6655f] text-white px-[25px] py-[10px] rounded-[20px]"
        >
            Volgende →
        </button>

    </div>

    <div class="flex flex-wrap justify-center gap-[10px] mt-[40px] px-[50px]">

        <?php foreach($fotos as $index => $foto) { ?>

            <img
                onclick="kiesFoto(<?php echo $index; ?>)"
                src="images/<?php echo $foto; ?>"
                class="w-[90px] h-[70px] object-cover rounded-[10px] cursor-pointer hover:scale-105 duration-200"
                alt=""
            >

        <?php } ?>

    </div>

</div>

<script>

const fotos = [
<?php foreach($fotos as $foto) { ?>
    "images/<?php echo $foto; ?>",
<?php } ?>
];

let huidigeFoto = 0;

function toonFoto() {
    document.getElementById("groteFoto").src = fotos[huidigeFoto];
}

function volgendeFoto() {

    huidigeFoto++;

    if(huidigeFoto >= fotos.length) {
        huidigeFoto = 0;
    }

    toonFoto();
}

function vorigeFoto() {

    huidigeFoto--;

    if(huidigeFoto < 0) {
        huidigeFoto = fotos.length - 1;
    }

    toonFoto();
}

function kiesFoto(index) {
    huidigeFoto = index;
    toonFoto();
}

</script>