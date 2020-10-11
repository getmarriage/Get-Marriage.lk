<?php if(count($_POST) > 0): ?>
   <div class="msg error">
   <?php foreach ($errors as $error): ?>
     <li><?php echo $error; ?></li>
      <?php endforeach; ?>
     </div>
   <?php endif; ?>