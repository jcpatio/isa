<?php include('header.php'); ?>
<script>
$( document ) . ready( function () {
    $( '#hogar' ) . click( function () {
        document.location = 'ventaHogar.php?tipoServicio=1';
		return true;

    } );
    
    $( '#empresa' ) . click( function () {
       // document.location = 'empresa.php?tipo=2';
        alert('empresa');
		return true;
    } );
    
    $( '#evento' ) . click( function () {
       // document.location = 'evento.php?tipo=3';
        alert('evento');
		return true;
    } );
    
    $( '#mayorista' ) . click( function () {
        ///document.location = 'mayorista.php?tipo=4';
        alert('mayorista');
		return true;
    } );
    
} );
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Escritorio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Escritorio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          
        <!-- Superior hogar -->
        <div class="row">
          <div class="col-lg-3 col-6" id="hogar">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="card-body">
                <center> <h1><i class="fas fa-home"></i></h1>
                <h5 class="card-title">Hogar</h5>
              </div>
            </div>
          </div>
          <!-- ./col -->
              
              
          <div class="col-lg-3 col-6" id="empresa">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="card-body">
                <center> <h1><i class="fas fa-building"></i></h1>
                <h5 class="card-title">Empresa</h5>
              </div>
            </div>
          </div>
              
          <!-- ./col -->
          <div class="col-lg-3 col-6"  id="evento">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="card-body">
                <center> <h1><i class="fas fa-handshake"></i></h1>
                <h5 class="card-title">Evento</h5>
              </div>
            </div>
          </div>
          <!-- ./col -->
              
          <div class="col-lg-3 col-6"  id="mayorista">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="card-body">
                <center> <h1><i class="fas fa-user-tie"></i></h1>
                <h5 class="card-title">Mayorista</h5>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
          
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include('footer.php'); ?>
