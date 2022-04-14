<form action="/entreprise/store" method="POST">
<div class="form-row mt-3">
    <div class="col">
        <input type="text" name="email" class="form-control" placeholder="Nom de l'enterprise">
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="form-group">
            <input type="text" name="siege" class="form-control" placeholder="Siège">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <input type="text" name="registre" class="form-control" placeholder="Registre">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <select id="selection" class="form-control" name="quartier">
                <option value="">Selectionner le quartier</option>
                    <?php foreach ($quartiers as $item => $value) {
                        <option value=""> {{ $quartier->nom }} </option>
                        
                    }?>
                    @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="form-group">
            <input type="text" name="ninea" class="form-control" placeholder="Ninea"> 
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <input type="tel" name="site" class="form-control" placeholder="Téléphone">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4">
        <input type="date" name="date" class="form-control" placeholder="Date de création">
    </div>
    <div class="col">
        <input type="text" name="site" class="form-control" placeholder="Page Web">
    </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <textarea class="form-control" id="contrat" name="contrat" rows="3" placeholder="Contrat formel"></textarea>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <input type="number" name="employ" class="form-control" placeholder="Nombre employer(s)">
                </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dispositif" id="radio1" value="dispositif">
                    <label class="form-check-label" for="radio1">Dispositif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cotisation" id="radio2" value="option2">
                    <label class="form-check-label" for="radio2">Cotisation</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="contrat" id="radio3" value="option2">
                    <label class="form-check-label" for="radio3">Contrat formel</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="contrat" id="radio4" value="option2">
                    <label class="form-check-label" for="radio4">Organigramme</label>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button class="btn btn-info " name="send" type="submit">Ajouter</button>
        </div>
    </div>
</form>