<!--PONER QUE SI $user ES FALSE QUE SALGA UN MENSAJE DE ERROR-->

<h2>Modificar Personal #</h2>
<form action="" method="post" enctype="multipart/form-data"> 
    <p>DNI</p>
    <input type='text' name='dni' value='' readonly="readonly"/> 
    
    <p>Nom</p>
    <input type='text' name='nom' value=''/> 
    
    <p>Cognom 1</p>
    <input type='text' name='cog1' value=''/>        
    
    <p>Cognom 2</p>
    <input type='text' name='cog2' value=''/> 
    
    <p>Email</p>
    <input type='email' name='email' value=''/> 
    
    <p>Telefon</p>
    <input type='text' name='telefon' value=''/>
    
    <p>Direcció</p>
    <input type='text' name='dire' value=''/>
    
    <p>Data de Naixement</p>
    <input type='date' name='naix' value=''/>
    
    <p>NSS</p>
    <input type='text' name='nss' value=''/>
    
    <p>IBAN</p>
    <input type='text' name='iban' value=''/>
    <br>
    <button type="submit">Modificar</button>
</form>