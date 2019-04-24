<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 22.04.2019
 * Time: 12:01
 */
 if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>