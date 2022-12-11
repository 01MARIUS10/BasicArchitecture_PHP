
<?php foreach($etudiants as $etudiant) :?>
    <div class="etudiant">
        <span> nom :  </span><span><?=$etudiant->etudiant_nom ?></span><br>
        <span> Age :  </span><span><?=$etudiant->etudiant_age ?></span><br>
        <span> Parcours :  </span><span><?=$parcours [$etudiant->etudiant_parcourId-1]->parcour_nom ?></span><br>
    </div>
<?php endforeach?>
