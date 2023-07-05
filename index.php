<?php
//Tipos de datos

// -Enteros (int): se utilizan para almacenar números enteros sin decimales.
$Entero = 200;
// - Punto flotante (float): se utilizan para almacenar números con decimales.
$float = 23.5;
// - Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
$texto = "Hola Mundo";
// - Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan
// por true o false.
$bool = false;
// - Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de diferentes tipos.
$array = array(
    "num" => "17",
    "name" => "Juan",
);
$array2 = [];
// - Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de
// objetos.
class Employee {
    private $firstName;
    private $lastName;
    private $age;
    public function __construct($firstName, $lastName, $age) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->age = $age;
    }
    public function getFirstName() {
      return $this->firstName;
    }
    public function getLastName() {
      return $this->lastName;
    }
    public function getAge() {
      return $this->age;
    }
  }
  $objEmployee = new Employee('Bob', 'Smith', 30);
  echo $objEmployee->getFirstName(); // imprime 'Bob'
  echo $objEmployee->getLastName(); // imprime 'Smith'
  echo $objEmployee->getAge(); // imprime '30'
// - Recursos (resource): se utilizan para almacenar referencias a recursos externos, como conexiones a bases de datos o archivos abiertos.
// - Nulos (null): se utilizan para representar una variable sin valor o sin definir.
$variable = null;


?>
