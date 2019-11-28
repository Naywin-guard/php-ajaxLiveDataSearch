<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <script src="js/bootstrap/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/fontawesome/all.js"></script>
</head>
<body>
    <h1>Ajax Live Data Serach Using PHP Jquery Msql</h1>
    <div class="container">
        <form action="fetch.php" method="post">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Serach</span>
                </div>
                <input type="text" name="search_txt" placeholder="Search by Customer Name" id="search_txt" class="form-control">
            </div>
        </form>
        <div id="result">
            
        </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        $('#search_txt').keyup(function(){
             var txt = $(this).val();
             if(txt!=''){
                 $.ajax({
                    url:"fetch.php",
                    method:"post",
                    data:{serach:txt},
                    dataType:"text",
                    success:function(data){
                        $('#result').html(data);
                    }

                 });
             }else{
                 $("#result").html('');
             }
        });
    });
</script>
</html>