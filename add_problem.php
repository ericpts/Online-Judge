<?php
require 'navigation.php';
require 'connection.php';
require 'bootstrap.php';
?>
<html>

    <body>

        <div class="container">
        
             <div class="form-group">
        
                <label for="usr">Titlul problemei:</label>
                <input type="text" class="form-control" id="usr" style="width:300px;">
            
            </div>

            

            <form role="form">
                <div class="form-group">
                    <label for="comment">Textul problemei:</label>
                    <textarea class="form-control" rows="9" id="comment"></textarea>
                </div>
            </form>
         
           <form role="form">
                 <div class="form-group">
                      <label for="comment">Cerinta:</label>
                      <textarea class="form-control" rows="3" id="comment"></textarea>
                  </div>
             </form>
                  

           <form role="form">
                  <div class="form-group">
                      <label for="comment">Date de intrare:</label>
                      <textarea class="form-control" rows="2" id="comment"></textarea>
                 </div>
          </form>

           <form role="form">
                  <div class="form-group">
                      <label for="comment">Date de iesire:</label>
                      <textarea class="form-control" rows="2" id="comment"></textarea>
                 </div>
            </form>

               <form role="form">
                  <div class="form-group">
                      <label for="comment">Restrictii:</label>
                      <textarea class="form-control" rows="6" id="comment"></textarea>
                 </div>
            </form>
    
    
            <h2>Exemplu</h2>
            <form role="form">
                <div class="form-group">
                    <label for="comment">.in</label>
                    <textarea class="form-control" rows="10" id="comment"></textarea>
                </div>
            </form>


            <form role="form">
                <div class="form-group">
                    <label for="comment">.out</label>
                    <textarea class="form-control" rows="10" id="comment"></textarea>
                </div>
            </form>
            
    

      </div>

</body>


</html>
