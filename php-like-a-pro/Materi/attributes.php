<?php

// Atributes adalah fitur yang sangat baru di PHP. bukan update dari fitur lama atau sebelumnya
// Attributes adalah memberikan sebuah metadata pada kode yang kita buat. jika kita memerlukannya
// Atributes dapat digunakan pada class, function, method, property, parameter, dan class constant.
// Penggunaan Atribute cukup dengan tanda #[YourNameAtributes], di sebuah target yang sudah ditentukan. 
// Metadata adalah informasi yang ditanam pada sebuah file yang iisnya berupa penjelasan dari file tersebut. Meta data ini mengandung informasi mengenai isi dari suatu data yang dipakai untuk keperluan manajemen file atau data itu nantinya dalam basis data. 

#[Attribute]
class Cart {

}

class Checkout {
    #[NotEmpty]
    public ?string $item;
}

// use refalaction 
function validate(object $object){
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property){
        validateNotEmpty($property, $object);
    }
}

// for get property
function validateNotEmpty(reflectionProperty $property, object $object){
    $attributes = $property->getAttributes(NotEmpty::class);
    if(count($attributes) > 0){
        if(!$property->isInitialized($object))
        throw new Exception("Property $property->name is null");
        if($property->getValue($object) == null)
        throw new Exception("Property $property->name is null");
    }
}

$request = new Checkout;
$request->item = "1";
validate($request);