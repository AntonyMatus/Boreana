<?php
    session_start();

    if (!isset($_SESSION['auth_id'])) {
        header('Location: login.php');
    }

    require 'backend/connection.php';

    $sql = "SELECT * FROM lots_table"; 
    $query = $connection->prepare($sql); 
    $query->execute(); 
    $lots = $query->fetchAll(PDO::FETCH_OBJ);
?>

<?php include 'components/header.php' ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Lotes</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>No. Lote</th>
                                        <th>Precio total del terreno</th>
                                        <th>Disponibilidad</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <?php foreach ($lots as $item) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $item->id; ?>
                                            </td>
                                            <td>
                                                <?php echo $item->number; ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($item->total_price, 2); ?>
                                            </td>
                                            <td>
                                                <?php 

                                                    switch ($item->available) {
                                                        case 1:
                                                            echo '<span class="badge badge-success">Disponible</span>';
                                                            break;

                                                        case 2:
                                                            echo '<span class="badge badge-warning">Apartado</span>';
                                                            break;

                                                        case 3:
                                                            echo '<span class="badge badge-danger">No Disponible</span>';
                                                            break;
                                                    
                                                        default:
                                                                echo '<span class="badge badge-secondary">Desconocida</span>';
                                                            break;
                                                    } 
                                                ?>
                                            </td>
                                            <td>
                                                <button
                                                    type="button"
                                                    onclick="editLot(<?php echo $item->id; ?>)"
                                                    class="btn btn-success"
                                                >
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>

        <div class="modal fade" id="modal-lots" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Formuario lotes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="updateLot(event)" id="form-lot">
                            <div class="form-group">
                                <label>No. Lote</label>
                                <input 
                                    type="text" 
                                    name="number"
                                    id="number"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Área del terreno</label>
                                <input 
                                    type="text" 
                                    name="area"
                                    id="area"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Enganche</label>
                                <input 
                                    type="text" 
                                    name="money_advance"
                                    id="money_advance"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Plazos</label>
                                <input 
                                    type="text" 
                                    name="deadlines"
                                    id="deadlines"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Precio por m2</label>
                                <input 
                                    type="text" 
                                    name="price_by_square_meter"
                                    id="price_by_square_meter"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Precio total del terreno</label>
                                <input 
                                    type="text" 
                                    name="total_price"
                                    id="total_price"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Mensualidades</label>
                                <input 
                                    type="text" 
                                    name="month_charge"
                                    id="month_charge"
                                    class="form-control"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label>Disponibilidad</label>
                                <select name="available" id="available" class="form-control" required>
                                    <option value="1">Disponible</option>
                                    <option value="2">Apartado</option>
                                    <option value="3">No Disponible</option>
                                </select>
                            </div>
                            <div id="btn-options" class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Guardar cambios
                                </button>
                                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                                    Cancelar
                                </button>
                            </div>
                            <div  id="loading" class="d-none row justify-content-center">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Guardando...</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'components/footer.php' ?>