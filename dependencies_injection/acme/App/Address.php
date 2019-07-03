<?php
namespace acme\App;

class Address {
    
use \amce\App\Traits\Accessible;

    protected $street;
    protected $city;
    protected $addressRepository;
    public function __contruct(){
        $this->addressRepository = new \amce\App\Repositories\AddressArrayRepository();
        $this->fillable[] = 'street';
        $this->fillable[] = 'city';
        $this->accessible[] = 'street';
        $this->accessible[] = 'city';

            }
       public function Find($id)
    {
        $result = $this->AddressRepository->Find($id);
        //set properties
        foreach ($result as $key => $value) {
            $this->key = value;
        }
        //fetch an address
        return $this;
    }

}


?>