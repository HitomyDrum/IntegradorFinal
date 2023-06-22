<?php

session_start();
error_reporting(0);

# falta editar el if y poner la web si en caos entran desde el link sin iniciar sesion

if(isset($_SESSION['NOM_CLI']) == null || isset($_SESSION['NOM_CLI']) == "") {
    $session_activa = False;
} else {
    $session_activa = True;
    $nombre = $_SESSION['NOM_CLI'];
    $dni = $_SESSION['DNI_CLI'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/estilos_patitas.css">
</head>

<body> <!-- https://mdbootstrap.com/docs/standard/extended/profiles/ -->
    <?php require_once('../nav.php') ?>
    <?php require_once('../header_secondary.php') ?>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <?php require_once('../../controllers/C_verCliente.php'); ?>
                    <?php $data = verCliente($dni); ?>
                    <?php require_once("./section_profile.php"); ?>
                    <?php require_once("./section_pets.php"); ?>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <h1 class="display-6 mt-3 text-center">Agendar Cita</h1>
                        <div class="card-body">
                            <form action="../../controllers/C_registrarCita.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Seleccionar mascota</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-select" name="id_pet" required>
                                            <?php
                                                foreach($clientes as $user) { ?>
                                                <option value="<?php echo $user['ID_PET']; ?>"><?php echo $user['NAME_PET']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Seleccionar fecha</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control pr-3" name="fecha_cita" value="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Observación</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control pr-3" name="textarea_comentario" id="" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-lg btn-success">Agendar Cita</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('../footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>