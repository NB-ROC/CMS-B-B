<div class="mx-auto my-5 flex w-[85%] flex-col rounded-[10px] bg-white px-[35px] pt-[15px] pb-[20px] shadow-md">
    <h2>
        <?php
            if($succes){
                echo "Succes!";
            }else{
                echo "Oh no!";
            }
        ?>
    </h2>
    <p class="text-black">
        <?php
            echo $message;
        ?>
    </p>
    <?php
        if($succes){
    ?>
        <div class="pt-5">
            <img 
                class="w-[30%] shadow-md"
                <?php
                echo  'src="./images/testFile/'.$fileName.'"';
                ?>
            >
        </div>
    <?php
        }
    ?>
</div>