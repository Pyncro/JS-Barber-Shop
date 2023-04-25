
<div class="container">
    <?php if (isset($success)) { ?>
    <div class="alert alert-success" role="alert">
        <?=$success;?>
    </div> <?php } ?>

    <?php if (isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$error;?>
        </div> <?php }?>
    <form class="row pt-4" method="post">
        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" name="last_name" class="form-control" id="input1">
            </div>
        </div>

        <div class="form-group control-label">
            <label for="input1" class="col-sm-2">Prénom</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="input1">
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="input1" placeholder="name@example.com" required>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Numéro de téléphone</label>
            <div class="col-sm-10">
                <input type="number" name="phone_number" class="form-control" id="input1">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password">
            </div>
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="col-sm-2 control-label">Confirmer le mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Genre</label>
            <div class="col-sm-10">
                <label>
                    H <input type="radio" name="gender" id="optionsRadios" value="h" checked>
                </label>
                <label>
                    F <input type="radio" name="gender" id="optionsRadios" value="f" checked>
                </label>
            </div>
        </div>

        <div class="pt-4">
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
