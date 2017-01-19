<?php 

namespace App\Model\Table;

use Cake\ORM\Table;

  class DiariesTable extends Table 
{
  public function initialize(array $config){
    $this->addBehavior('Timestamp');
    $this->addBehavior('Josegonzalez/Upload.Upload', [
    'photo' => [
    'fields' => [
    // if these fields or their defaults exist
    // the values will be set.
    'dir' => 'photo_dir', // defaults to `dir`
    'size' => 'photo_size', // defaults to `size`
    'type' => 'photo_type', // defaults to `type`
    ],
    ],
    ]);

  }
}

