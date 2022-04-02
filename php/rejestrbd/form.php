<form action="" method="POST">

<label for="">Imię</label>
<div class="input-group has-validation">
    <input 
    type="text" 
    class="form-control <?php echo ($errorImie) ? 'is-invalid' : '' ; ?>" 
    name="imie"
    value="<?=$imie?>"
    >
    <div class="invalid-feedback">
        <?=$errorImie?>
    </div>
</div>


<label for="">Nazwisko</label>
<div class="input-group has-validation">
    <input 
    type="text" 
    class="form-control <?php echo ($errorNazwisko) ? 'is-invalid' : '' ; ?>" 
    name="nazwisko"
    value="<?=$nazwisko?>"
    >
    <div class="invalid-feedback">
        <?=$errorNazwisko?>
    </div>
</div>


<label for="">Email</label>
<div class="input-group has-validation">
    <input 
    type="text" 
    class="form-control <?php echo ($errorEmail) ? 'is-invalid' : '' ; ?>" 
    name="email"
    value="<?=$email?>"
    >
    <div class="invalid-feedback">
        <?=$errorEmail?>
    </div>
</div>

<?php
if( isset( $id ) ){
?>

    <button class="btn btn-primary mt-2" name="wyslano">ZAPISZ ZMIANY</button>

<?php
}else{
?>

    <button class="btn btn-success mt-2" name="wyslano">DODAJ DO REJESTRU</button>
    
<?php
}
?>
</form>











<!-- <a href="" onclick="return confirm('Are you sure?')">testowy link</a> -->






<!-- <i class="bi-alarm"></i> -->

<?php
//basename($_SERVER['PHP_SELF'], ".php");
?>
<!-- header('Location: ' . $_SERVER['HTTP_REFERER']); -->