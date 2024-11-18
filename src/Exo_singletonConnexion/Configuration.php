<?php
namespace App\Exo_singletonConnexion;
class Configuration {
    
   private static ?Configuration $instance = null; // L'attribut qui stockera l'instance unique
   private $settings = [];
   
   private function __construct() {
    self::$instance = $this;
    echo "<br>CONSTRUCT INSTANCE<br>";

    /*
        * Dans le constructeur de Configuration, chargez les paramètres de configuration à partir d’un fichier config.ini
    */
    $this->settings = parse_ini_file("config.ini", true);
    // $this->settings = require dirname(__DIR__).'/Exo_singletonConnexion/config.ini';
    // echo"<br>dirname(__DIR__) = ".dirname(__DIR__).'/Exo_singletonConnexion/config.ini';
    echo "<br>";
    echo"<pre>";
    var_dump($this->settings);
    echo "</pre>";
   }

   public static function getInstance() {
        if (self::$instance === null) {
            echo"Passe dans le IF()";
            self::$instance = new Configuration();
        }
        return self::$instance;
    }


    //* Correction Marc
    public function get(string $key): ?string
        {
            // Découper la clé en sous-clés pour accéder aux niveaux du tableau
            $keys = explode('.', $key);
            $value = $this->settings;
                echo'BEGIN $keys########<pre>';
                var_dump($keys);
                echo'</pre>######## END $keys<br>';

            foreach ($keys as $k) {
                if (isset($value[$k])) {
                    echo '<pre><h1>$value =></h1>';
                    var_dump($value).'<br>';
                    echo '<pre><h3>$value[$k] => $k = '.$k.'</h3>';
                    var_dump($value[$k]).'<br>';
                    echo '/<pre>';
                    echo '<br>'.is_string($value[$k]) .'<br>';
                    $value = $value[$k];
                } else {
                    return null; // Retourne null si la clé n'existe pas
                }
            }
            echo '<br>'.is_string($value) ? $value : null .'<br>';
            return is_string($value) ? $value : null;
        }


    // * Mon code
    // public function get(string $key) : ?string
    // {
    //     $keys = explode('.', $key);
    //     echo'BEGIN $keys########<pre>';
    //     var_dump($keys);
    //     echo'</pre>######## END $keys<br>';
    //     $value = $this->settings;

    //     foreach ($keys as $k) {
           
    //         $first_keys = array_keys($value);
    //         for ($i=0; $i < count($first_keys); $i++) { 
    //             var_dump($first_keys[$i]);
    //             if (array_key_exists($k, $value[$first_keys[$i]])) {
    //                 echo'<br>DANS LE IF array_key_exists<br>';
    //                 echo'<br>'.$value[$first_keys[$i]][$k].'<br>';
    //                 return $value[$first_keys[$i]][$k];
    //             }
    //         }
            
    //         // if (isset($value[$k]) || is_array() || is_object($value[$k])) {
    //         //     $value = $value[$k];
    //         //     echo'<br>La clé existe</b>';
    //         // } else {
    //         //     echo'<br>La clé existe pas</br>';
    //         //     return null; // Retourne null si la clé n'existe pas
    //         // }
    //     }

    //     return is_string($value) ? $value : null;
    // } 
    
    public function set(string $key, string $value):void{
        $this->settings[$key] = $value;
    }       

}