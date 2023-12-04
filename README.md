php artisan make:model Product -m
migration table update
rename welcome.blade -> products ->web.php (change products)
bootstrap=> set starter template=> table =>line awsome(https://icons8.com/line-awesome)
php artisan make:controller ProductController
web.php=> create product route
Ajax setup and jquery setup
 <meta name="csrf-token" content="{{ csrf_token() }}"> add in root html
 add <script> $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); </script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> [after bootstrap]
@include new file for js

==============crete product=========
1. products.blade.php=>include(add_prouct_modal.blade.php)