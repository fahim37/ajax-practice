<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>AJAX</h1>
    <input type="button" id="load" value="Load Data"><br>
    <div>
        <label>Search:</label>
        <input type="text" id="search" >
    </div>
    <div id="table">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        $("#load").on("click",function(e){
        $.ajax({
            url : "ajax-load.php",
            type : "GET",
            success : function(data){
                $("#table").html(data)
            }
            });
        });
        $("#search").on("keyup",function(){
            var search_term = $(this).val();
            $.ajax({
                url : "ajax-search.php",
                type : "POST",
                data : {search:search_term},
                success: function(data){
                    $("#table").html(data);
                }
            })
        });
})
    </script>
</body>
</html>