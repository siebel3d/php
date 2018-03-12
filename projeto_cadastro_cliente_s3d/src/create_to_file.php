<?php

    class CreateToFile {

        public function __construct() {

        }
        
        public static function file($name, $last_name, $birth_date, $cpf, $phone, $email){
            $name = $_GET['name'];
            $last_name = $_GET['last_name'];
            $birth_date = $_GET['birth_date'];
            $cpf = $_GET['cpf'];
            $phone = $_GET['phone'];
            $email = $_GET['email'];

            $content =
            "=========================
            Name: $name; 
            Last Name: $last_name;
            Birth date: $birth_date;
            CPF: $cpf;
            Phone: $phone;
            E-mail: $email;
            =========================";

            $file = "src/output/s3d_customers.txt";

            if(!$open = fopen($file, "a")){
                echo "Error opening the file ($file)";
                exit;
            }

            if(!fwrite($open, $content)){
                echo "Error writing in the file ($file)";
            }

            echo "File writed successful";

            fclose($open);
            
        }
    }
?>
