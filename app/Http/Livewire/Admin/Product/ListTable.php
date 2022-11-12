<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ListTable extends Component
{
    public $products;
    public $product_type;
    public $product_brand;
    public $selected_brand;


    public function updatedProductType($value)
    {
        $this->changeProductType($value);
        $this->products = Product::where('type',$this->product_type)->get();
    }

    public function updatedSelectedBrand($value)
    {
        $this->products = Product::where('type',$this->product_type)->where('brand',$this->selected_brand)->get();
    }

    public function mount(){

        $this->products = Product::all();

        $this->changeProductType('laptop');
        if($this->product_type == 'speaker') {
  
              $this->selected_brand = 'razer';
        }
        else{
              $this->selected_brand = 'asus';
        }
    }

    public function render()
    {
        return view('livewire.admin.product.list-table');
    }
    public function changeProductType($type)
    {
        $this->product_type = $type;
        $products =$this->getPropertiesForType($this->product_type,$this->product_brand);
        $this->product_brand = $products;
    }

    public function getPropertiesForType($type,$array =[])
    {
        switch($type)
        {
            case 'laptop':
                $array = array('asus','dell','predator','msi','razer');
                return $array;
            case 'mouse':
                $array = array('asus','logitech','msi');
                return $array;
            case 'keyboard':
                $array = array('asus','razer','msi');
                return $array;
            case 'headphone':
                $array = array('asus','coolermaster','logitech','msi');
                return $array;
            case 'speaker':
                $array = array('razer','beats','jbl');
                return $array;
        }
    }
}
