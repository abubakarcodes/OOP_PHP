<?php 
namespace acme\App\Repositories;

class AddressArrayRepository  implements AddressRepositoryinterface
{
     protected $addresses;
     public function __contruct(){
         //class configuration
         $this->addresses = $this->getAddresses();
     }
    /**
     * @see \acme\App\Repositories\AddressRepositoryinterface::Find()
     */
    public function Find($id) {

        if ( isset($this->addresses[$id]) ) {
            return $this->addresses[$id];
        }
        return array();

    }
    protected function getAddresses()
    {
        return array(
            1 => array('street' => '1 captol', 
                                'city' => 'Wasington'),
            2 => array('street' => '1 Euston', 
                                'city' => 'london'),
            3 => array('street' => '1 Dam', 
                                'city' => 'Amsterdam')
                  );
    }
}



?>