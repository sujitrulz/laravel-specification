<?php

return [
    /*
      |----------------------------------------------------------------------------------------------------------
      | namespace
      |----------------------------------------------------------------------------------------------------------
     */
    'namespace'  => env('SPECIFICATION_NAMESPACE', 'App\Specifications'),
    /*
      |----------------------------------------------------------------------------------------------------------
      | Transformers store directory
      | path relative to App/
      |----------------------------------------------------------------------------------------------------------
     */

    'directory'  => env('SPECIFICATION_DIRECTORY', 'Specifications/')

];