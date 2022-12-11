
<div>
    <form action="/ajouter" method="POST">
        <input type="text" name="nom" id="nom">
        <input type="number" name="age" id="age">
        <select name="parcour" id="parcour">
            <?php foreach($parcours as $parcour) :?>
            <option value="<?= $parcour->parcour_id ?> "><?=$parcour->parcour_nom?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Ajouter</button>
    </form>
</div>