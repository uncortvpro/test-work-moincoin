<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            'id' => $row[0],
            'type_id' => $row[1],
            'sku' => $row[2],
            'opera_sku' => $row[3],
            'old_sku' => $row[4],
            'override_sku' => $row[5],
            'name' => $row[6],
            'inlet' => $row[7],
            'outlet' => $row[8],
            'hose_type' => $row[9],
            'angle_in_deg' => $row[10],
            'max_Ipm' => $row[11],
            'voltage' => $row[12],
            'material' => $row[13],
            'bar' => $row[14],
            'ring_thickness' => $row[15],
            'diameter' => $row[16],
            'colour' => $row[17],
            'rpm' => $row[18],
            'status' => $row[19],
            'url_key' => $row[20],
            'visibility' => $row[21],
            'clearance' => $row[22],
            'max_temperature' => $row[23],
            'description' => $row[24],
            'short_description' => $row[25],
            'tech_spec_1' => $row[26],
            'tech_spec_2' => $row[27],
            'tech_spec_3' => $row[28],
            'product_videos' => $row[29],
            'nozzle_size' => $row[30],
            'foam_value' => $row[31],
            'is_featured' => $row[32],
            'featured_position' => $row[33],
            'hose_clamp_size' => $row[34],
            'orifice_size' => $row[35],
            'shoe_size' => $row[36],
            'thread' => $row[37],
            'size_and_angle' => $row[38],
            'inlet_outlet' => $row[39],
            'closing_size' => $row[40],
            'wheel_style' => $row[41],
            'flow_and_pressure' => $row[42],
            'country_of_manufacture' => $row[43],
            'select_nozzle_size' => $row[44],
            'dn_internal_diameter' => $row[45],
            'currency' => $row[46],
            'pack_size' => $row[47],
            'easy_turn' => $row[48],
            'priority' => $row[49],
            'manufacturer_number_1' => $row[50],
            'manufacturer_number_2' => $row[51],
            'manufacturer_number_3' => $row[52],
            'manufacturer_number_4' => $row[53],
            'manufacturer_number_5' => $row[54],
            'manufacturer_number_6' => $row[55],
            'manufacturer_number_7' => $row[56],
            'manufacturer_number_8' => $row[57],
            'manufacturer_number_9' => $row[58],
            'manufacturer_number_10' => $row[59],
            'hose_application' => $row[60],
            'hose_inlet' => $row[61],
            'hose_outlet' => $row[62],
            'hose_length' => $row[63],
            'hose_colour' => $row[64],
            'price' => $row[65],
            'special_price' => $row[66],
            'poa' => $row[67],
            'poa_price' => $row[68],
            'msrp' => $row[69],
            'meta_title' => $row[70],
            'meta_keywords' => $row[71],
            'meta_description' => $row[72],
            'pdf_title_1' => $row[73],
            'pdf_title_2' => $row[74],
            'pdf_title_3' => $row[75],
            'pdf_title_4' => $row[76],
            'categories' => $row[77],
            'bullet_point_1' => $row[78],
            'bullet_point' => $row[79],
        ]);
    }
}
