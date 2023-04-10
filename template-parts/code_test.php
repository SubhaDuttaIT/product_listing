<?php
/*
Template Name: Testing Code
*/
get_header();
?>
<!-- <script>
    jQuery(document).ready(function() {
    jQuery.ajax({
      type: "GET",
      dataType: "json",
      url: "https://api.escuelajs.co/api/v1/products",
      success: function(data) {
        console.log(data);
      }
    });
});
</script> -->
 <script>
jQuery(function() {
    var value1 = subha;
    jQuery.ajax({
        url: "https://api.escuelajs.co/api/v1/products",
        method: "GET",
        dataType: "json",
        success: function(data) {
            console.log(data);
            var str = "";          
            for(var i= 0; i < data.length; i++){
             str +='Job Title :'+data.id+' and Related Trades <br> Percentage of Occupancies in Area : '+data.title+'% <br><br>';
           }
           jQuery("body").html(str);
        }
        });
    });
    </script>




<h1>+value1+</h1>
<p>This is a paragraph.</p>



<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress REST API V3 Example in Javascript</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">
            WordPress List of All Blog Posts
        </h1>
        <form id="form">
            <div class="form-group container">
            <label for="url">Website URL:</label>
            <input type="text" class="form-control" name="" id="url" placeholder="Enter WordPress Website URL" required>
            </div>
            <div class="form-group container">
                <label for="number">Number of Blog Posts:</label>
                <input type="number" class="form-control" value="20" id="number" required>
            </div>
            <div class="form-group container">
                <button class="btn btn-danger btn-block">
                    Get Blog Posts
                </button>
            </div>
        </form>
        <div id="result">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Published Date</th>
                    </tr>
                </thead>
                <tbody id="data">
 
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#form").submit((e) => {
        e.preventDefault()
 
        var url = $("#url").val()
 
        var number = $("#number").val()
 
        getBlogPosts(url,number)
    })
 
    $("#number").change((e) => {
        number = $(this).val()
    })
 
    function getBlogPosts(url,number){
        $("#data").html('')
        $.ajax({
            method:"GET",
            url:`https://api.escuelajs.co/api/v1/products`,
            success:function(data){

                console.log(data)
 
                data.forEach(post => {
                    $("#data").append(`
                    
                    <tr>
                        <td><a href="${post.link}" target="_blank">${post.title}</a></td>
                        <td>${post.creationAt}</td>
                        </tr>
                    
                    `)
                });
            }
        })
    }
</script> -->


</html>
<?php get_footer();?>