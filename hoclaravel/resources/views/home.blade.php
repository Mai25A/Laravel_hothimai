<h1 style="text-align:center;">  Học lập trình cùng Unicode </h1>
<h2> Mai hoan thanh bai 1 </h2>
<?php 
//  echo date('Y-m-d H:i:s');
// echo config('app.env');
if(env('APP_ENV')=='production'){
    echo 'Call to api live';
}else{
    echo 'Call to api local';
}
?>