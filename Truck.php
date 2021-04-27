<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
    {

    private int $stock;
    
    private int $loading = 0;

    private string $energy;

    public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
            ];
    


    public function __construct(
        string $color, 
        int $nbSeats, 
        string $energy, 
        int $stock
        ) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stock = $stock;
    
        }

        public function setEnergy(string $energy): Truck
        {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
        }

        public function getEnergy(): string
        {
            return $this->energy;
        }
        
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }
        
        public function getStock()
        {
        return $this->stock;
        }

        public function setStock($stock)
        {
        $this->stock = $stock;

        return $this;
        }

        public function getLoading()
        {
            return $this->loading;
        }

        public function setLoading($loading)
        {
            $this->loading = $loading;

            return $this;
        }
        public function setFilling() :string
        {
        if ($this->loading === $this->stock) {
           return 'full' . '<br>';
        }
        
        return 'filling';
        } 
        
}