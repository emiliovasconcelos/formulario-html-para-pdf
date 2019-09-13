<?php


class ValidatorFields {

/**
 * Return Marital Status
 *
 * @param [type] $statusID
 * @return void
 */
public function getMaritalStatus($statusID){
    $status = array(
      '1' => 'Solteiro(a)',
      '2' => 'Casado(a)',
      '3' => 'Divorciado(a)',
      '4' => 'Viúvo(a)',
      '5' => 'Separado(a)',
      '6' => 'Judicial(a)',
      '7' => 'Outro'
    );
    return (isset($status[$statusID]) ? $status[$statusID] : '');
}

 /**
  * Return Gender of User
  *
  * @param [type] $gender
  * @return void
  */
public function getGender($genderID) {

    $gender = array(
        '1' => 'Masculino',
        '2' => 'Feminino'
    );

    return (isset($gender[$genderID]) ? $gender[$genderID] : '');
}

/**
 * Return Schooling User
 *
 * @return void
 */
public function getSchooling($schoolingID) {
    $schooling = array(
        '1' => 'Ensino Fundamental',
        '2' => 'Ensino Médio',
        '3' => 'Ensino Superior',
        '4' => 'Pós-Graduação',
        '5' => 'Doutorado'
    );
    return (isset($schooling[$schoolingID]) ? $schooling[$schoolingID] : '');                   
}

}