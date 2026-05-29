<!-- Main -->
<div class="h-screen px-[100px] py-5 box-border">
  <!-- Form section -->
  <form action="php/upload.php" method="post" class="w-[95%] flex flex-col gap-[10px] bg-white shadow-md p-[15px] rounded-[15px]">
    <h2>Upload a file</h2>
    <p class="text-black">Testing page to upload images for the website.</p>

    <!-- Upload file section -->
    <input type="file" name="fileToUpload" id="fileToUpload" class="text-black rounded-[15px] border border-black px-[15px] py-[5px] w-fit">
    
    <!-- Submit file section -->
    <input type="submit" value="Upload file" name="submit" class="booking-button">
  </form>
</div>