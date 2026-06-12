<h2 class="testWow">
    <?php
        echo $message;
    ?>
</h2>

<?php
    if($succes){
?>
        <img 
            <?php
                echo  'src="./images/testFile/'.$fileName.'"';
            ?>
        >
<?php
    }else{
        echo '<p class="testWow">Nah</p>';
    }
?>