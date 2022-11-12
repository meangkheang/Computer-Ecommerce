<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProductPreview;

class Add extends Component
{
    use WithFileUploads,WithFileUploads;



    //props
    public $photo_thumnail;
    public $photo_preview_1;
    public $photo_preview_2;
    public $photo_preview_3;

    public $product_type;
    public $product_brand;
    public $selected_brand;
    public $product_name;
    public $product_price;
    public $product_rate;
    public $product_review;
    public $product_discount;
    public $product_description;


    public function updated($key,$value)
    {
        
    }


    public function updatedProductType($value)
    {
        $this->changeProductType($value);

    }

    public function updatedPhotoThumnail()
    {
        $this->validate([
            'photo_thumnail' =>'required|image',
        ]);
        
       
    }

    public function updatedPhotoPreview1()
    {
        $this->validate([
            'photo_preview_1' =>'required|image',
        ]);
    }

    public function updatedPhotoPreview2()
    {
        $this->validate([
            'photo_preview_2' =>'required|image',
        ]);
    }
    public function updatedPhotoPreview3()
    {
        $this->validate([
            'photo_preview_3' =>'required|image',
        ]);
    }

    public function mount()
    {
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
        return view('livewire.admin.product.add');
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

    public function save()
    {
        $this->validate([
            'product_name' => 'required|min:6',
            'photo_thumnail' =>'required|image',
            'photo_preview_1' =>'required|image',
            'photo_preview_2' =>'required|image',
            'photo_preview_3' =>'required|image',
            'product_price' =>'required|between:0,99999999.99|numeric',
            'product_rate' =>'required|numeric',
            'product_review' =>'required|numeric',
            'product_discount' =>'required|numeric',
            'product_description' =>'required|min:10',
        ]);

        $productname = $this->product_name;
        $thumnail = $this->photo_thumnail->getClientOriginalName();
        $preview1 = $this->photo_preview_1->getClientOriginalName();
        $preview2 = $this->photo_preview_2->getClientOriginalName();
        $preview3 = $this->photo_preview_3->getClientOriginalName();
        $price = $this->product_price;
        $rate = $this->product_rate;
        $review = $this->product_review;
        $discount = $this->product_discount;
        $description = $this->product_description;

   

        Product::create([
            'img' => $thumnail,
            'name' =>  $this->product_name,
            'description' => $this->product_description,
            'price' => $this->product_price,
            'brand' => $this->selected_brand,
            'review' => $this->product_review,
            'type' => $this->product_type,
            'rate' => $this->product_rate,
            'discount' => $this->product_discount
        ]);
        $product_id = Product::latest('id')->first()['id'];
        

        ProductPreview::create(['product_id' => $product_id,'product_side' => $preview1]);
        ProductPreview::create(['product_id' => $product_id,'product_side' => $preview2]);
        ProductPreview::create(['product_id' => $product_id,'product_side' => $preview3]);



        //store images in folders
        $this->photo_thumnail->storeAs('products',$thumnail,'public_path');
        $this->photo_preview_1->storeAs('products',$preview1,'public_path');
        $this->photo_preview_2->storeAs('products',$preview2,'public_path');
        $this->photo_preview_3->storeAs('products',$preview3,'public_path');

        return redirect('/')->with('message','created product successfully');
    }
}
