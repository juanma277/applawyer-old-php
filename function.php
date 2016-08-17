<?php

   //Storing new user and returns user details
   
   
   function storeUser($nombre, $apellido, $tipo_ident, $ident, $telefono, $email, $direccion, $sexo, $password, $gcm_regid, $foto) {


        // insert user into database
        $result = mysql_query("INSERT INTO persona (ID_PERSONA, NOMBRE1, APELLIDO1, ID_TIPO_IDEN, IDENTIFICACION, ID_PERFIL, TELEFONO,
		EMAIL, DIRECCION, SEXO, CONTRASENA, ID_EST_PERSONA, gcm_regid, created_at, FOTO) VALUES(NULL,'$nombre', '$apellido', '$tipo_ident', '$ident',
		'4', '$telefono', '$email', '$direccion', '$sexo', '$password', '2','$gcm_regid', NOW(), '$foto')");
		
        // check for successful store
        if ($result) {
			
            // get user details
            $ID_PERSONA = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM persona WHERE ID_PERSONA = $ID_PERSONA") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
			
        } else {
            return false;
        }
    }

    /**
     * Get user by email
     */
   function getUserByEmail($email) {
        $result = mysql_query("SELECT * FROM persona WHERE EMAIL = '$email' LIMIT 1");
        return $result;
    }

    // Getting all registered users
  function getAllUsers() {
        $result = mysql_query("select * FROM persona");
        return $result;
    }

    // Validate user
  function isUserExisted($email) {
        $result    = mysql_query("SELECT EMAIL from persona WHERE EMAIL = '$email'");
        $NumOfRows = mysql_num_rows($result);
        if ($NumOfRows > 0) {
            // user existed
            return true;
        } else {
            // user not existed
            return false;
        }
    }
	
	//Sending Push Notification
   function send_push_notification($registatoin_ids, $message, $idProcesoA, $identificacionA) {
        
        $google_key='AIzaSyBwCw9gfvWW6ojT9fKE25RJW0XQsKoMP0A'; 

        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';

        $msg = array('title' => $proceso, 'body' => $message, 'idProceso' => $idProcesoA, 'identificacion' => $identificacionA);
		$msg1 = array('body' => $message);

        $fields = array(
            'registration_ids' => $registatoin_ids,
            'notification' => $msg1,
			'data' => $msg
			
          
        );

        $headers = array(
            'Authorization: key=' . $google_key,
            'Content-Type: application/json'
        );
		//print_r($headers);
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);

        echo $result;
    }
?>
		