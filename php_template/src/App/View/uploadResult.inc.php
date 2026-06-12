<h2>
    <?php
        echo $message;
    ?>
</h2>
<h2>
    <?php
        if($succes){
    ?>
            <img 
            <?php
                echo  'src="./images/testFile/'.$fileName.'"';
            ?>
            alt="Trulli" 
            width="500" 
            height="333">
    <?php
        }else{
            echo "Nah";
        }
    ?>
</h2>