<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/semantic.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
    <style>
    body{
        background: #cb356b; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #cb356b, #bd3f32); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #cb356b, #bd3f32); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* background-image:url("<?php echo e(asset('images/uitmbackground1.png')); ?>"); */
    }
    #facultylist{
        margin-bottom:15px;
    }
    .roundfh{
        border-radius:500em;
    }
    </style>
</head>
<body>
    <div id="app" class="ui container">
            <div class="ui large inverted secondary network menu">
            <div class="item">
                <div class="ui logo shape">
                <div class="sides">
                        <div class="active ui side">
                        <img class="ui image" src="<?php echo e(asset('images/actividen.gif')); ?>">
                        </div>
                </div>
                </div>
            </div>
            <div class="item">
                    <div class="ui search">
                    <div class="ui icon input">
                        <input id="searchinput" class="prompt" type="text" onkeydown="test()" placeholder="Search faculty...">
                        <i class="search icon"></i>
                    </div>
                    </div>
            </div>
            <div class="item">
                <select class="ui dropdown" onchange="getcategorybaseddata()" id="facultycategory">
                <option value="">Faculty category</option>
                <option value="1"> BUSINESS & MANAGEMENT</option>
                <option value="2">SOCIAL SCIENCE & HUMANITIES</option>
                <option value="3">SCIENCE & TECHNOLOGY</option>
                </select>
            </div>
        </div>
    <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/semantic.min.js')); ?>"></script>
    <script type="text/javascript">
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    let test=()=>{
        ajaxrequest('POST',{keyword:$('#searchinput').val()},'/ajaxrequest')
    }

    let getcategorybaseddata=()=>{
      ajaxrequest('POST',{category:$('#facultycategory').val()},'/getcategorybaseddata')
    }

    let ajaxrequest=(posttype,passeddata,url)=>{
                $.ajax({
                type:posttype,
                url:url,
                data:passeddata,
                success:function(data){
                  console.log(data)
                  let list="<div class='ui middle aligned animated celled list'>";
                    $.each(data,(index,item)=>{
                        item.forEach(element => {
                          list+="<div class='item' id='facultylist'>";
                              list+="<div class='content'>";
                              list+="<div class='header'>";
                              list+="<a style='color:white;font-size:12pt;' href='/faculty/"+element.id+"'>"+element.name+"</a>";
                              list+="</div>";
                              list+="</div>";
                          list+="</div>"; 
                        });
                    });
                  list+="</div>";
                  $('.results').html(list);
                }
                });
                }

    $('.ui.dropdown').dropdown();
      
</script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
