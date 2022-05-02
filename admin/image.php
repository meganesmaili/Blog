<?php
   
   require_once 'checkAdmin.php';

    $error = null;
    
    // Vérifie si un fichier est bien envoyé
    if (!empty($_FILES['cover'])  && $_FILES['cover']['error'] == 0) {
    
        // Tableau de vérification des extension et types MIME
        $typeExt = [
            'png' => 'cover/png',
            'jpg' => 'cover/jpeg',
            'jpeg' => 'cover/jpeg',
            'gif' => 'cover/gif'
        ];
    
        // Poids max. du fichier
        // 1Mo = 1048576 octets
        $poidsMax = 1 * 1048576;
    
        // Récupération de l'extension
        $extension = strtolower(pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION));
    
        // Vérifie que le fichier possède la bonne extension et le bon type MIME
        if (
            array_key_exists($extension, $typeExt) 
            && in_array($_FILES['cover']['type'], $typeExt)
        ) {
    
            // Vérifie si l'image ne dépasse pas les 1Mo
            if ($_FILES['cover']['size'] <= $poidsMax) {
    
                $newName =md5(time()) .".". '$extension';
                    
    
                // Vérifie que l'image n'existe pas déjà
                if (!file_exists("../Images/upload/$newName")) {
                    
                    // Upload de l'image
                    move_uploaded_file(
                        $_FILES['cover']['tmp_name'],
                        "../Images/upload/$newName"
                    );
    
                   
                    require_once '../fonctions.php';
                    createThumb( "Images/upload/$newName", "miniatures/min_$newName", 150, 150 );
                }
                else {
                    $error = 'Veuillez modifier le nom du fichier';
                }
            }
            else {
                $error = 'Le poids de l\'image dépasse les 1Mo';
            }
        }
        else {
            $error = 'Le fichier n\'est pas une image';
        }
    }
    
    ?>
    
 
           