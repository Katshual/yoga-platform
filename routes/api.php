<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//import du contrôleur PostureController
use App\Http\Controllers\PostureController;

/* Définition des routes RESTful pour la ressource "postures".
 Cette ligne génère automatiquement les routes suivantes :
 GET /postures          -> Liste toutes les postures
 POST /postures         -> Crée une nouvelle posture
 GET /postures/{id}     -> Affiche une posture spécifique
 PUT/PATCH /postures/{id} -> Met à jour une posture spécifique
 DELETE /postures/{id}  -> Supprime une posture spécifique
 */

Route::apiResource('postures', PostureController::class);

/* Route protégée par Sanctum qui renvoie les informations de l'utilisateur authentifié.
 Nécessite un token valide dans l'en-tête Authorization pour y accéder.
Utilisée pour vérifier l'authentification et récupérer les données de l'utilisateur.
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
