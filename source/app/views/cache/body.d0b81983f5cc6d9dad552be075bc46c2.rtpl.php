<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container_principal">
  <div class="header_twilio">
    <form class="form" action="">
      <div class="formulario-interno">
        <div class="col-4 ">
          <label for="validationCustom03" class="form-label" id="">Data Início* </label>
          <input type="date" class="form-control col-12" name="data_ini" id="date_ini" placeholder="Search"
            aria-label="Search" aria-describedby="inputGroupPrepend" required>
        </div>
        <div class=" " id="hora_ini">
          <label for="validationCustom03" class="form-label">Hora Início* </label>
          <input type="time" class="form-control mr-sm-2" name="hora_ini" id="hora_ini" placeholder="Search"
            aria-label="Search" aria-describedby="inputGroupPrepend" required>
          <div class="alert1">
          </div>

        </div>
        <div class="col-4">
          <label for="validationCustom03" class="form-label" id="">Data Fim* </label>
          <input type="date" class="form-control col-12" name="data_fim" id="date_fim" placeholder="Search"
            aria-label="Search" aria-describedby="inputGroupPrepend" required>
        </div>
        <div class="col-md-2-p2">
          <label for="validationCustom03" class="form-label" id="hora_fim">Hora Fim* </label>
          <input type="time" class="form-control " name="hora_fim" id="hora_fim" placeholder="Search"
            aria-label="Search" aria-describedby="inputGroupPrepend" required>
        </div>

      </div>
      <div class="container-button">
        <button type="" class=" pesquisar btn btn-secondary ">Pequisar</button>
      </div>
    </form>

  </div>
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-bordered table-dark table-striped table-sm">
      <thead class="">
        <tr>
          <th scope="">SID</th>
          <th scope="">DATA</th>
          <th scope="">HORA</th>
          <th scope="">QNTE TEMPLATE</th>
          <th scope="">QNTE TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <?php $counter1=-1;  if( isset($msgs) && ( is_array($msgs) || $msgs instanceof Traversable ) && sizeof($msgs) ) foreach( $msgs as $key1 => $value1 ){ $counter1++; ?>
        <tr>
          <td><?php echo htmlspecialchars( $value1["sid"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["data"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["hora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["hora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["hora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-around">
    <button class="btn btn-secondary" id="btn-mensagem">Exportar Relatório</button>
  </div>



 


  <footer class="footer_twilio">
    <!-- Copyright -->
    <div>
      © 2021 VS Telecom:
    </div>
    <!-- Copyright -->
  </footer>

  <div class="modal fade" id="modal-mensagem">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header table-dark">
          <h4 >Exportação de Relatório</h4>
          <button type="button" class="close" data-dismiss="modal"><span style="color: white;">×</span></button>
        </div>

        <div class="modal-body">
          <form class="" action="">
            <div class="">
              <div class=" ">
                <label for="validationCustom03" class="form-label" id="">Data Início* </label>
                <input type="date" class="form-control col-12" id="date_ini" placeholder="Search" aria-label="Search"
                  aria-describedby="inputGroupPrepend">
              </div>

              <div class=" " id="hora_ini">
                <label for="validationCustom03" class="form-label">Hora Início* </label>
                <input type="time" class="form-control mr-sm-2" id="hora_ini" placeholder="Search" aria-label="Search"
                  aria-describedby="inputGroupPrepend">
                <div class="alert1">
                </div>

              </div>
              <div class="">
                <label for="validationCustom03" class="form-label" id="">Data Fim* </label>
                <input type="date" class="form-control col-12" id="date_fim" placeholder="Search" aria-label="Search"
                  aria-describedby="inputGroupPrepend">
              </div>
              <div class="col-md-2-p2">
                <label for="validationCustom03" class="form-label" id="hora_fim">Hora Fim* </label>
                <input type="time" class="form-control " id="hora_fim" placeholder="Search" aria-label="Search"
                  aria-describedby="inputGroupPrepend">
              </div>

            </div>
            <div class="container-button">
              <button type="submit" class=" enviar btn btn-secondary ">Exportar XLS</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>