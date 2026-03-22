<?php

function showCharacters($pdo) {
        $connexion = $pdo->prepare("SELECT * FROM `characters`");
        $connexion->execute();
        $characters = $connexion->fetchAll(PDO::FETCH_ASSOC);
        foreach ($characters as $character) {
        echo '<tr>';
        echo '  <td class="ps-3 text-white-50 small">#' . $character["character_id"] . '</td>';
        echo '  <td class="fw-semibold">' . htmlspecialchars($character["first_name"]) . ' <span class="text-uppercase opacity-75">' . htmlspecialchars($character["last_name"]) . '</span></td>';
        echo '  <td class="text-end pe-3">';
        echo '      <a href="/character_list?id=' . $character["character_id"] . '" class="btn btn-sm btn-link text-info p-0 text-decoration-none small">Fiche complète</a>';
        echo '  </td>';
        echo '</tr>';
    }
    }

?>