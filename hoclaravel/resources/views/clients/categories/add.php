<h1>them moi chuyen muc</h1>
<form action="<?php  echo route('categories.add'); ?>" method="POST">

    <div>
    <input type="text" nme="category_name" placeholder="Ten chuyen muc">
    </div>
    <button type="submit"> Them chuyen muc</button>
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" > -->
</form>