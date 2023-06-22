<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria Patitas al Rescate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="views/css/fontello.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/estilos_footer.css">
    <link rel="stylesheet" href="views/css/estilos_patitas.css">
    <link rel="stylesheet" href="./views/css/estilos_loginAdminDoc.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Para la tecla F8 -->
    <script>
        $(document).ready(function() {
            $(document).on("keydown", function(event) {
                if (event.which == 119) { // Código de la tecla F8
                    wrapper.classList.add('active-popup')
                }
            });
        });
    </script>
</head>
<body>
    <?php require_once('./views/nav.php') ?>
    <?php require_once('./views/V_IniciarSesionAdmin.php') ?>
    <?php require_once('./views/header_new.php') ?>
    <br>
    <div class="container-fluid d-flex justify-content-around">
        <div class="row">
            <div class="col-md-6"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fveterinariaspapatitasalrescate%2Fposts%2Fpfbid0abosHVPkTJk3mQehv5PNnvpqq98p6zffwGdqLHzGb3xmwZuzo4drPAt689S813JHl&show_text=true&width=500" width="500" height="668" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
            <div class="col-md-6"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fveterinariaspapatitasalrescate%2Fposts%2Fpfbid033vLWvmwejdWFNUJPQxoU2SEqL1NP3eVpEwpkKdTTqsc9Vjy3xUDcWqYrKbq8hHQwl&show_text=true&width=500" width="500" height="668" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
        </div>
    </div>
    <br>
    <?php require_once('views/footer.php') ?>
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>
    <script src="./views/js/script_loginAdmin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 