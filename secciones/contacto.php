
<div class="col-12">
<div class="row">
            <div class="col">
              
                <h1 class="text-center">formulario de contacto</h1>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-6 ">

            <form action="secciones/procesar-contacto.php" method="POST">
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="usuario@davinci.edu.ar">
                
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="usuario">
              </div>
            
              <div class="form-group">
              <label for="exampleInputEmail1">Comentario</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                    </div>
                    
              <div class="form-group">
                <label>¿cual es la serie que mas esoperas?</label>
                <div class="form-check">
                  <label class="form-check-label" name="quemas">
                    <input type="checkbox" class="form-check-input">
                    One Piece
                  </label>
                </div>
                
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"  >
                   B Project
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" >
                    Kobashino Dragon
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" >
                    School Memories                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" >
                    07 Ghost
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" >
                    Dead Note 
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" >
                    Fairy Tail
                  </label>
                </div>

               

              </div>

              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </form>
          </div>
        </div>
        </div>