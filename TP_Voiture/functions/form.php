<?php

require_once __DIR__ . '/db.php';

function form(
    string $nom,
    string $annee_sortie,
    string $nb_km,
    string $prix
//    string $visible
) {
    $pdo = getPdo();

    $query = "INSERT INTO voiture (nom, annee_sortie, nb_km, prix) VALUES (:nom, :annee_sortie, :nb_km, :prix)";

    $stmt = $pdo->prepare($query);

    return $stmt->execute([
        'nom' => $nom,
        'annee_sortie' => $annee_sortie,
        'nb_km' => $nb_km,
        'prix' => $prix,
//        'visible' => $visible,

    ]);
}
