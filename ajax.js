<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

$(document).ready(function(){
    $("button").click(function(){
        alert("entered hell");
        $.ajax({
            type: 'post',
            url: 'index.php',
            success: function(data){
                //data returned from php
            }
        });
    });
}
              