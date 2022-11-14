<?php

class productos {

    private $id_producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_en_existencia;


    public function __Construct($id_producto,$descripcion,$costo_compra,$precio_venta,$cantidad_en_existencia){
    
        $this->id_producto = $id_producto;
        $this->descripcion = $descripcion;
        $this->costo_compra = $costo_compra;
        $this->precio_venta = $precio_venta;
        $this->cantidad_en_existencia = $cantidad_en_existencia;
    }

    public function searchProduct($id_producto){
        $table = [
        [
            "id_producto" => "1",
            "descripcion" => "audi",
            "costo_compra" => "70,000",
            "precio_venta" => "20",
            "cantidad_en_existencia"=>"30"
        ],
        [
              "id_producto" => "5",
            "descripcion" => "mercedes",
            "costo_compra" => "40,000",
            "precio_venta" => "20",
            "cantidad_en_existencia"=>"30"
        ],
            [
                "id_producto" => "3",
                "descripcion" => "toyota",
                "costo_compra" => "70,000",
                "precio_venta" => "20",
                "cantidad_en_existencia"=>"30"
            ],
            [
                  "id_producto" => "4",
                "descripcion" => "mazda",
                "costo_compra" => "40,000",
                "precio_venta" => "20",
                "cantidad_en_existencia"=>"30"
            ],
                [
                    "id_producto" => "6",
                    "descripcion" => "camaro",
                    "costo_compra" => "70,000",
                    "precio_venta" => "20",
                    "cantidad_en_existencia"=>"30"
                ],
                [
                      "id_producto" => "7",
                    "descripcion" => "chalger",
                    "costo_compra" => "40,000",
                    "precio_venta" => "20",
                    "cantidad_en_existencia"=>"30"
                    ]
        ];
        
        if(!empty($id_producto)){
            foreach($table as $row){

                if($id_producto==$row["id_producto"]){
                    return $row;
                }
        }

}

// return $table;
    }
}