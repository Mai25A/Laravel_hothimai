<form action="/unicode" method="post">
    <div>
        <input type="text" name="username" placeholder="Nhập user name ...."/>
        <input type="hidden" name="_method" value="DELETE"/>
        <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>