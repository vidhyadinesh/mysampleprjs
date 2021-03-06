<?php

use Illuminate\Database\Seeder;
use App\State;

class CreateStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();

	    $states= [
	        ['state_id' => '1', 'country_id' => '101', 'state_name' => 'Andaman and Nicobar Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2', 'country_id' => '101', 'state_name' => 'Andhra Pradesh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3', 'country_id' => '101', 'state_name' => 'Arunachal Pradesh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4', 'country_id' => '101', 'state_name' => 'Assam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '5', 'country_id' => '101', 'state_name' => 'Bihar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '6', 'country_id' => '101', 'state_name' => 'Chandigarh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '7', 'country_id' => '101', 'state_name' => 'Chhattisgarh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '8', 'country_id' => '101', 'state_name' => 'Dadra and Nagar Haveli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '9', 'country_id' => '101', 'state_name' => 'Daman and Diu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '10', 'country_id' => '101', 'state_name' => 'Delhi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '11', 'country_id' => '101', 'state_name' => 'Goa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '12', 'country_id' => '101', 'state_name' => 'Gujarat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '13', 'country_id' => '101', 'state_name' => 'Haryana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '14', 'country_id' => '101', 'state_name' => 'Himachal Pradesh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '15', 'country_id' => '101', 'state_name' => 'Jammu and Kashmir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '16', 'country_id' => '101', 'state_name' => 'Jharkhand', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '17', 'country_id' => '101', 'state_name' => 'Karnataka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '18', 'country_id' => '101', 'state_name' => 'Kenmore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '19', 'country_id' => '101', 'state_name' => 'Kerala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '20', 'country_id' => '101', 'state_name' => 'Lakshadweep', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '21', 'country_id' => '101', 'state_name' => 'Madhya Pradesh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '22', 'country_id' => '101', 'state_name' => 'Maharashtra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '23', 'country_id' => '101', 'state_name' => 'Manipur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '24', 'country_id' => '101', 'state_name' => 'Meghalaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '25', 'country_id' => '101', 'state_name' => 'Mizoram', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '26', 'country_id' => '101', 'state_name' => 'Nagaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '27', 'country_id' => '101', 'state_name' => 'Narora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '28', 'country_id' => '101', 'state_name' => 'Natwar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '29', 'country_id' => '101', 'state_name' => 'Odisha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '30', 'country_id' => '101', 'state_name' => 'Paschim Medinipur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '31', 'country_id' => '101', 'state_name' => 'Pondicherry', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '32', 'country_id' => '101', 'state_name' => 'Punjab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '33', 'country_id' => '101', 'state_name' => 'Rajasthan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '34', 'country_id' => '101', 'state_name' => 'Sikkim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '35', 'country_id' => '101', 'state_name' => 'Tamil Nadu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '36', 'country_id' => '101', 'state_name' => 'Telangana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '37', 'country_id' => '101', 'state_name' => 'Tripura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '38', 'country_id' => '101', 'state_name' => 'Uttar Pradesh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '39', 'country_id' => '101', 'state_name' => 'Uttarakhand', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '40', 'country_id' => '101', 'state_name' => 'Vaishali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '41', 'country_id' => '101', 'state_name' => 'West Bengal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '42', 'country_id' => '1', 'state_name' => 'Badakhshan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '43', 'country_id' => '1', 'state_name' => 'Badgis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '44', 'country_id' => '1', 'state_name' => 'Baglan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '45', 'country_id' => '1', 'state_name' => 'Balkh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '46', 'country_id' => '1', 'state_name' => 'Bamiyan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '47', 'country_id' => '1', 'state_name' => 'Farah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '48', 'country_id' => '1', 'state_name' => 'Faryab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '49', 'country_id' => '1', 'state_name' => 'Gawr', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '50', 'country_id' => '1', 'state_name' => 'Gazni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '51', 'country_id' => '1', 'state_name' => 'Herat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '52', 'country_id' => '1', 'state_name' => 'Hilmand', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '53', 'country_id' => '1', 'state_name' => 'Jawzjan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '54', 'country_id' => '1', 'state_name' => 'Kabul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '55', 'country_id' => '1', 'state_name' => 'Kapisa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '56', 'country_id' => '1', 'state_name' => 'Khawst', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '57', 'country_id' => '1', 'state_name' => 'Kunar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '58', 'country_id' => '1', 'state_name' => 'Lagman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '59', 'country_id' => '1', 'state_name' => 'Lawghar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '60', 'country_id' => '1', 'state_name' => 'Nangarhar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '61', 'country_id' => '1', 'state_name' => 'Nimruz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '62', 'country_id' => '1', 'state_name' => 'Nuristan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '63', 'country_id' => '1', 'state_name' => 'Paktika', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '64', 'country_id' => '1', 'state_name' => 'Paktiya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '65', 'country_id' => '1', 'state_name' => 'Parwan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '66', 'country_id' => '1', 'state_name' => 'Qandahar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '67', 'country_id' => '1', 'state_name' => 'Qunduz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '68', 'country_id' => '1', 'state_name' => 'Samangan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '69', 'country_id' => '1', 'state_name' => 'Sar-e Pul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '70', 'country_id' => '1', 'state_name' => 'Takhar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '71', 'country_id' => '1', 'state_name' => 'Uruzgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '72', 'country_id' => '1', 'state_name' => 'Wardag', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '73', 'country_id' => '1', 'state_name' => 'Zabul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '74', 'country_id' => '2', 'state_name' => 'Berat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '75', 'country_id' => '2', 'state_name' => 'Bulqize', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '76', 'country_id' => '2', 'state_name' => 'Delvine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '77', 'country_id' => '2', 'state_name' => 'Devoll', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '78', 'country_id' => '2', 'state_name' => 'Dibre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '79', 'country_id' => '2', 'state_name' => 'Durres', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '80', 'country_id' => '2', 'state_name' => 'Elbasan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '81', 'country_id' => '2', 'state_name' => 'Fier', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '82', 'country_id' => '2', 'state_name' => 'Gjirokaster', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '83', 'country_id' => '2', 'state_name' => 'Gramsh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '84', 'country_id' => '2', 'state_name' => 'Has', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '85', 'country_id' => '2', 'state_name' => 'Kavaje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '86', 'country_id' => '2', 'state_name' => 'Kolonje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '87', 'country_id' => '2', 'state_name' => 'Korce', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '88', 'country_id' => '2', 'state_name' => 'Kruje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '89', 'country_id' => '2', 'state_name' => 'Kucove', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '90', 'country_id' => '2', 'state_name' => 'Kukes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '91', 'country_id' => '2', 'state_name' => 'Kurbin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '92', 'country_id' => '2', 'state_name' => 'Lezhe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '93', 'country_id' => '2', 'state_name' => 'Librazhd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '94', 'country_id' => '2', 'state_name' => 'Lushnje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '95', 'country_id' => '2', 'state_name' => 'Mallakaster', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '96', 'country_id' => '2', 'state_name' => 'Malsi e Madhe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '97', 'country_id' => '2', 'state_name' => 'Mat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '98', 'country_id' => '2', 'state_name' => 'Mirdite', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '99', 'country_id' => '2', 'state_name' => 'Peqin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '100', 'country_id' => '2', 'state_name' => 'Permet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '101', 'country_id' => '2', 'state_name' => 'Pogradec', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '102', 'country_id' => '2', 'state_name' => 'Puke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '103', 'country_id' => '2', 'state_name' => 'Sarande', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '104', 'country_id' => '2', 'state_name' => 'Shkoder', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '105', 'country_id' => '2', 'state_name' => 'Skrapar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '106', 'country_id' => '2', 'state_name' => 'Tepelene', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '107', 'country_id' => '2', 'state_name' => 'Tirane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '108', 'country_id' => '2', 'state_name' => 'Tropoje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '109', 'country_id' => '2', 'state_name' => 'Vlore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '110', 'country_id' => '3', 'state_name' => "'"."Ayn Daflah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '111', 'country_id' => '3', 'state_name' => "'"."Ayn Tamushanat", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '112', 'country_id' => '3', 'state_name' => 'Adrar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '113', 'country_id' => '3', 'state_name' => 'Algiers', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '114', 'country_id' => '3', 'state_name' => 'Annabah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '115', 'country_id' => '3', 'state_name' => 'Bashshar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '116', 'country_id' => '3', 'state_name' => 'Batnah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '117', 'country_id' => '3', 'state_name' => 'Bijayah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '118', 'country_id' => '3', 'state_name' => 'Biskrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '119', 'country_id' => '3', 'state_name' => 'Blidah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '120', 'country_id' => '3', 'state_name' => 'Buirah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '121', 'country_id' => '3', 'state_name' => 'Bumardas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '122', 'country_id' => '3', 'state_name' => 'Burj Bu Arririj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '123', 'country_id' => '3', 'state_name' => 'Ghalizan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '124', 'country_id' => '3', 'state_name' => 'Ghardayah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '125', 'country_id' => '3', 'state_name' => 'Ilizi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '126', 'country_id' => '3', 'state_name' => 'Jijili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '127', 'country_id' => '3', 'state_name' => 'Jilfah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '128', 'country_id' => '3', 'state_name' => 'Khanshalah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '129', 'country_id' => '3', 'state_name' => 'Masilah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '130', 'country_id' => '3', 'state_name' => 'Midyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '131', 'country_id' => '3', 'state_name' => 'Milah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '132', 'country_id' => '3', 'state_name' => 'Muaskar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '133', 'country_id' => '3', 'state_name' => 'Mustaghanam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '134', 'country_id' => '3', 'state_name' => 'Naama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '135', 'country_id' => '3', 'state_name' => 'Oran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '136', 'country_id' => '3', 'state_name' => 'Ouargla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '137', 'country_id' => '3', 'state_name' => 'Qalmah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '138', 'country_id' => '3', 'state_name' => 'Qustantinah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '139', 'country_id' => '3', 'state_name' => 'Sakikdah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '140', 'country_id' => '3', 'state_name' => 'Satif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '141', 'country_id' => '3', 'state_name' => "Sayda"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '142', 'country_id' => '3', 'state_name' => "Sidi ban-al-"."'"."Abbas", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '143', 'country_id' => '3', 'state_name' => 'Suq Ahras', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '144', 'country_id' => '3', 'state_name' => 'Tamanghasat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '145', 'country_id' => '3', 'state_name' => 'Tibazah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '146', 'country_id' => '3', 'state_name' => 'Tibissah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '147', 'country_id' => '3', 'state_name' => 'Tilimsan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '148', 'country_id' => '3', 'state_name' => 'Tinduf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '149', 'country_id' => '3', 'state_name' => 'Tisamsilt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '150', 'country_id' => '3', 'state_name' => 'Tiyarat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '151', 'country_id' => '3', 'state_name' => 'Tizi Wazu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '152', 'country_id' => '3', 'state_name' => 'Umm-al-Bawaghi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '153', 'country_id' => '3', 'state_name' => 'Wahran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '154', 'country_id' => '3', 'state_name' => 'Warqla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '155', 'country_id' => '3', 'state_name' => 'Wilaya d Alger', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '156', 'country_id' => '3', 'state_name' => 'Wilaya de Bejaia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '157', 'country_id' => '3', 'state_name' => 'Wilaya de Constantine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '158', 'country_id' => '3', 'state_name' => 'al-Aghwat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '159', 'country_id' => '3', 'state_name' => 'al-Bayadh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '160', 'country_id' => '3', 'state_name' => "al-Jaza"."'"."ir", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '161', 'country_id' => '3', 'state_name' => 'al-Wad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '162', 'country_id' => '3', 'state_name' => 'ash-Shalif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '163', 'country_id' => '3', 'state_name' => 'at-Tarif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '164', 'country_id' => '4', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '165', 'country_id' => '4', 'state_name' => "Manu"."'"."a", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '166', 'country_id' => '4', 'state_name' => 'Swains Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '167', 'country_id' => '4', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '168', 'country_id' => '5', 'state_name' => 'Andorra la Vella', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '169', 'country_id' => '5', 'state_name' => 'Canillo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '170', 'country_id' => '5', 'state_name' => 'Encamp', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '171', 'country_id' => '5', 'state_name' => 'La Massana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '172', 'country_id' => '5', 'state_name' => 'Les Escaldes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '173', 'country_id' => '5', 'state_name' => 'Ordino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '174', 'country_id' => '5', 'state_name' => 'Sant Julia de Loria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '175', 'country_id' => '6', 'state_name' => 'Bengo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '176', 'country_id' => '6', 'state_name' => 'Benguela', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '177', 'country_id' => '6', 'state_name' => 'Bie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '178', 'country_id' => '6', 'state_name' => 'Cabinda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '179', 'country_id' => '6', 'state_name' => 'Cunene', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '180', 'country_id' => '6', 'state_name' => 'Huambo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '181', 'country_id' => '6', 'state_name' => 'Huila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '182', 'country_id' => '6', 'state_name' => 'Kuando-Kubango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '183', 'country_id' => '6', 'state_name' => 'Kwanza Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '184', 'country_id' => '6', 'state_name' => 'Kwanza Sul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '185', 'country_id' => '6', 'state_name' => 'Luanda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '186', 'country_id' => '6', 'state_name' => 'Lunda Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '187', 'country_id' => '6', 'state_name' => 'Lunda Sul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '188', 'country_id' => '6', 'state_name' => 'Malanje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '189', 'country_id' => '6', 'state_name' => 'Moxico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '190', 'country_id' => '6', 'state_name' => 'Namibe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '191', 'country_id' => '6', 'state_name' => 'Uige', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '192', 'country_id' => '6', 'state_name' => 'Zaire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '193', 'country_id' => '7', 'state_name' => 'Other Provinces', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '194', 'country_id' => '8', 'state_name' => 'Sector claimed by Argentina/Ch', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '195', 'country_id' => '8', 'state_name' => 'Sector claimed by Argentina/UK', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '196', 'country_id' => '8', 'state_name' => 'Sector claimed by Australia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '197', 'country_id' => '8', 'state_name' => 'Sector claimed by France', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '198', 'country_id' => '8', 'state_name' => 'Sector claimed by New Zealand', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '199', 'country_id' => '8', 'state_name' => 'Sector claimed by Norway', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '200', 'country_id' => '8', 'state_name' => 'Unclaimed Sector', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '201', 'country_id' => '9', 'state_name' => 'Barbuda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '202', 'country_id' => '9', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '203', 'country_id' => '9', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '204', 'country_id' => '9', 'state_name' => 'Saint Mary', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '205', 'country_id' => '9', 'state_name' => 'Saint Paul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '206', 'country_id' => '9', 'state_name' => 'Saint Peter', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '207', 'country_id' => '9', 'state_name' => 'Saint Philip', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '208', 'country_id' => '10', 'state_name' => 'Buenos Aires', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '209', 'country_id' => '10', 'state_name' => 'Catamarca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '210', 'country_id' => '10', 'state_name' => 'Chaco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '211', 'country_id' => '10', 'state_name' => 'Chubut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '212', 'country_id' => '10', 'state_name' => 'Cordoba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '213', 'country_id' => '10', 'state_name' => 'Corrientes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '214', 'country_id' => '10', 'state_name' => 'Distrito Federal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '215', 'country_id' => '10', 'state_name' => 'Entre Rios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '216', 'country_id' => '10', 'state_name' => 'Formosa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '217', 'country_id' => '10', 'state_name' => 'Jujuy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '218', 'country_id' => '10', 'state_name' => 'La Pampa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '219', 'country_id' => '10', 'state_name' => 'La Rioja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '220', 'country_id' => '10', 'state_name' => 'Mendoza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '221', 'country_id' => '10', 'state_name' => 'Misiones', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '222', 'country_id' => '10', 'state_name' => 'Neuquen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '223', 'country_id' => '10', 'state_name' => 'Rio Negro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '224', 'country_id' => '10', 'state_name' => 'Salta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '225', 'country_id' => '10', 'state_name' => 'San Juan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '226', 'country_id' => '10', 'state_name' => 'San Luis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '227', 'country_id' => '10', 'state_name' => 'Santa Cruz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '228', 'country_id' => '10', 'state_name' => 'Santa Fe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '229', 'country_id' => '10', 'state_name' => 'Santiago del Estero', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '230', 'country_id' => '10', 'state_name' => 'Tierra del Fuego', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '231', 'country_id' => '10', 'state_name' => 'Tucuman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '232', 'country_id' => '11', 'state_name' => 'Aragatsotn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '233', 'country_id' => '11', 'state_name' => 'Ararat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '234', 'country_id' => '11', 'state_name' => 'Armavir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '235', 'country_id' => '11', 'state_name' => 'Gegharkunik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '236', 'country_id' => '11', 'state_name' => 'Kotaik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '237', 'country_id' => '11', 'state_name' => 'Lori', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '238', 'country_id' => '11', 'state_name' => 'Shirak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '239', 'country_id' => '11', 'state_name' => 'Stepanakert', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '240', 'country_id' => '11', 'state_name' => 'Syunik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '241', 'country_id' => '11', 'state_name' => 'Tavush', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '242', 'country_id' => '11', 'state_name' => 'Vayots Dzor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '243', 'country_id' => '11', 'state_name' => 'Yerevan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '244', 'country_id' => '12', 'state_name' => 'Aruba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '245', 'country_id' => '13', 'state_name' => 'Auckland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '246', 'country_id' => '13', 'state_name' => 'Australian Capital Territory', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '247', 'country_id' => '13', 'state_name' => 'Balgowlah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '248', 'country_id' => '13', 'state_name' => 'Balmain', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '249', 'country_id' => '13', 'state_name' => 'Bankstown', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '250', 'country_id' => '13', 'state_name' => 'Baulkham Hills', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '251', 'country_id' => '13', 'state_name' => 'Bonnet Bay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '252', 'country_id' => '13', 'state_name' => 'Camberwell', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '253', 'country_id' => '13', 'state_name' => 'Carole Park', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '254', 'country_id' => '13', 'state_name' => 'Castle Hill', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '255', 'country_id' => '13', 'state_name' => 'Caulfield', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '256', 'country_id' => '13', 'state_name' => 'Chatswood', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '257', 'country_id' => '13', 'state_name' => 'Cheltenham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '258', 'country_id' => '13', 'state_name' => 'Cherrybrook', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '259', 'country_id' => '13', 'state_name' => 'Clayton', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '260', 'country_id' => '13', 'state_name' => 'Collingwood', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '261', 'country_id' => '13', 'state_name' => 'Frenchs Forest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '262', 'country_id' => '13', 'state_name' => 'Hawthorn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '263', 'country_id' => '13', 'state_name' => 'Jannnali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '264', 'country_id' => '13', 'state_name' => 'Knoxfield', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '265', 'country_id' => '13', 'state_name' => 'Melbourne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '266', 'country_id' => '13', 'state_name' => 'New South Wales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '267', 'country_id' => '13', 'state_name' => 'Northern Territory', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '268', 'country_id' => '13', 'state_name' => 'Perth', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '269', 'country_id' => '13', 'state_name' => 'Queensland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '270', 'country_id' => '13', 'state_name' => 'South Australia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '271', 'country_id' => '13', 'state_name' => 'Tasmania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '272', 'country_id' => '13', 'state_name' => 'Templestowe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '273', 'country_id' => '13', 'state_name' => 'Victoria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '274', 'country_id' => '13', 'state_name' => 'Werribee south', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '275', 'country_id' => '13', 'state_name' => 'Western Australia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '276', 'country_id' => '13', 'state_name' => 'Wheeler', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '277', 'country_id' => '14', 'state_name' => 'Bundesland Salzburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '278', 'country_id' => '14', 'state_name' => 'Bundesland Steiermark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '279', 'country_id' => '14', 'state_name' => 'Bundesland Tirol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '280', 'country_id' => '14', 'state_name' => 'Burgenland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '281', 'country_id' => '14', 'state_name' => 'Carinthia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '282', 'country_id' => '14', 'state_name' => 'Karnten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '283', 'country_id' => '14', 'state_name' => 'Liezen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '284', 'country_id' => '14', 'state_name' => 'Lower Austria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '285', 'country_id' => '14', 'state_name' => 'Niederosterreich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '286', 'country_id' => '14', 'state_name' => 'Oberosterreich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '287', 'country_id' => '14', 'state_name' => 'Salzburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '288', 'country_id' => '14', 'state_name' => 'Schleswig-Holstein', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '289', 'country_id' => '14', 'state_name' => 'Steiermark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '290', 'country_id' => '14', 'state_name' => 'Styria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '291', 'country_id' => '14', 'state_name' => 'Tirol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '292', 'country_id' => '14', 'state_name' => 'Upper Austria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '293', 'country_id' => '14', 'state_name' => 'Vorarlberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '294', 'country_id' => '14', 'state_name' => 'Wien', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '295', 'country_id' => '15', 'state_name' => 'Abseron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '296', 'country_id' => '15', 'state_name' => 'Baki Sahari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '297', 'country_id' => '15', 'state_name' => 'Ganca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '298', 'country_id' => '15', 'state_name' => 'Ganja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '299', 'country_id' => '15', 'state_name' => 'Kalbacar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '300', 'country_id' => '15', 'state_name' => 'Lankaran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '301', 'country_id' => '15', 'state_name' => 'Mil-Qarabax', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '302', 'country_id' => '15', 'state_name' => 'Mugan-Salyan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '303', 'country_id' => '15', 'state_name' => 'Nagorni-Qarabax', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '304', 'country_id' => '15', 'state_name' => 'Naxcivan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '305', 'country_id' => '15', 'state_name' => 'Priaraks', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '306', 'country_id' => '15', 'state_name' => 'Qazax', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '307', 'country_id' => '15', 'state_name' => 'Saki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '308', 'country_id' => '15', 'state_name' => 'Sirvan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '309', 'country_id' => '15', 'state_name' => 'Xacmaz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '310', 'country_id' => '16', 'state_name' => 'Abaco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '311', 'country_id' => '16', 'state_name' => 'Acklins Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '312', 'country_id' => '16', 'state_name' => 'Andros', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '313', 'country_id' => '16', 'state_name' => 'Berry Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '314', 'country_id' => '16', 'state_name' => 'Biminis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '315', 'country_id' => '16', 'state_name' => 'Cat Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '316', 'country_id' => '16', 'state_name' => 'Crooked Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '317', 'country_id' => '16', 'state_name' => 'Eleuthera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '318', 'country_id' => '16', 'state_name' => 'Exuma and Cays', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '319', 'country_id' => '16', 'state_name' => 'Grand Bahama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '320', 'country_id' => '16', 'state_name' => 'Inagua Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '321', 'country_id' => '16', 'state_name' => 'Long Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '322', 'country_id' => '16', 'state_name' => 'Mayaguana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '323', 'country_id' => '16', 'state_name' => 'New Providence', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '324', 'country_id' => '16', 'state_name' => 'Ragged Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '325', 'country_id' => '16', 'state_name' => 'Rum Cay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '326', 'country_id' => '16', 'state_name' => 'San Salvador', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '327', 'country_id' => '17', 'state_name' => "'"."Isa", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '328', 'country_id' => '17', 'state_name' => 'Badiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '329', 'country_id' => '17', 'state_name' => 'Hidd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '330', 'country_id' => '17', 'state_name' => 'Jidd Hafs', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '331', 'country_id' => '17', 'state_name' => 'Mahama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '332', 'country_id' => '17', 'state_name' => 'Manama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '333', 'country_id' => '17', 'state_name' => 'Sitrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '334', 'country_id' => '17', 'state_name' => 'al-Manamah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '335', 'country_id' => '17', 'state_name' => 'al-Muharraq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '336', 'country_id' => '17', 'state_name' => "ar-Rifa"."'"."a", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '337', 'country_id' => '18', 'state_name' => 'Bagar Hat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '338', 'country_id' => '18', 'state_name' => 'Bandarban', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '339', 'country_id' => '18', 'state_name' => 'Barguna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '340', 'country_id' => '18', 'state_name' => 'Barisal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '341', 'country_id' => '18', 'state_name' => 'Bhola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '342', 'country_id' => '18', 'state_name' => 'Bogora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '343', 'country_id' => '18', 'state_name' => 'Brahman Bariya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '344', 'country_id' => '18', 'state_name' => 'Chandpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '345', 'country_id' => '18', 'state_name' => 'Chattagam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '346', 'country_id' => '18', 'state_name' => 'Chittagong Division', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '347', 'country_id' => '18', 'state_name' => 'Chuadanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '348', 'country_id' => '18', 'state_name' => 'Dhaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '349', 'country_id' => '18', 'state_name' => 'Dinajpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '350', 'country_id' => '18', 'state_name' => 'Faridpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '351', 'country_id' => '18', 'state_name' => 'Feni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '352', 'country_id' => '18', 'state_name' => 'Gaybanda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '353', 'country_id' => '18', 'state_name' => 'Gazipur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '354', 'country_id' => '18', 'state_name' => 'Gopalganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '355', 'country_id' => '18', 'state_name' => 'Habiganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '356', 'country_id' => '18', 'state_name' => 'Jaipur Hat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '357', 'country_id' => '18', 'state_name' => 'Jamalpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '358', 'country_id' => '18', 'state_name' => 'Jessor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '359', 'country_id' => '18', 'state_name' => 'Jhalakati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '360', 'country_id' => '18', 'state_name' => 'Jhanaydah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '361', 'country_id' => '18', 'state_name' => 'Khagrachhari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '362', 'country_id' => '18', 'state_name' => 'Khulna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '363', 'country_id' => '18', 'state_name' => 'Kishorganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '364', 'country_id' => '18', 'state_name' => 'Koks Bazar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '365', 'country_id' => '18', 'state_name' => 'Komilla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '366', 'country_id' => '18', 'state_name' => 'Kurigram', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '367', 'country_id' => '18', 'state_name' => 'Kushtiya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '368', 'country_id' => '18', 'state_name' => 'Lakshmipur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '369', 'country_id' => '18', 'state_name' => 'Lalmanir Hat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '370', 'country_id' => '18', 'state_name' => 'Madaripur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '371', 'country_id' => '18', 'state_name' => 'Magura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '372', 'country_id' => '18', 'state_name' => 'Maimansingh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '373', 'country_id' => '18', 'state_name' => 'Manikganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '374', 'country_id' => '18', 'state_name' => 'Maulvi Bazar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '375', 'country_id' => '18', 'state_name' => 'Meherpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '376', 'country_id' => '18', 'state_name' => 'Munshiganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '377', 'country_id' => '18', 'state_name' => 'Naral', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '378', 'country_id' => '18', 'state_name' => 'Narayanganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '379', 'country_id' => '18', 'state_name' => 'Narsingdi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '380', 'country_id' => '18', 'state_name' => 'Nator', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '381', 'country_id' => '18', 'state_name' => 'Naugaon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '382', 'country_id' => '18', 'state_name' => 'Nawabganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '383', 'country_id' => '18', 'state_name' => 'Netrakona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '384', 'country_id' => '18', 'state_name' => 'Nilphamari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '385', 'country_id' => '18', 'state_name' => 'Noakhali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '386', 'country_id' => '18', 'state_name' => 'Pabna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '387', 'country_id' => '18', 'state_name' => 'Panchagarh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '388', 'country_id' => '18', 'state_name' => 'Patuakhali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '389', 'country_id' => '18', 'state_name' => 'Pirojpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '390', 'country_id' => '18', 'state_name' => 'Rajbari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '391', 'country_id' => '18', 'state_name' => 'Rajshahi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '392', 'country_id' => '18', 'state_name' => 'Rangamati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '393', 'country_id' => '18', 'state_name' => 'Rangpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '394', 'country_id' => '18', 'state_name' => 'Satkhira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '395', 'country_id' => '18', 'state_name' => 'Shariatpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '396', 'country_id' => '18', 'state_name' => 'Sherpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '397', 'country_id' => '18', 'state_name' => 'Silhat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '398', 'country_id' => '18', 'state_name' => 'Sirajganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '399', 'country_id' => '18', 'state_name' => 'Sunamganj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '400', 'country_id' => '18', 'state_name' => 'Tangayal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '401', 'country_id' => '18', 'state_name' => 'Thakurgaon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '402', 'country_id' => '19', 'state_name' => 'Christ Church', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '403', 'country_id' => '19', 'state_name' => 'Saint Andrew', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '404', 'country_id' => '19', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '405', 'country_id' => '19', 'state_name' => 'Saint James', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '406', 'country_id' => '19', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '407', 'country_id' => '19', 'state_name' => 'Saint Joseph', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '408', 'country_id' => '19', 'state_name' => 'Saint Lucy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '409', 'country_id' => '19', 'state_name' => 'Saint Michael', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '410', 'country_id' => '19', 'state_name' => 'Saint Peter', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '411', 'country_id' => '19', 'state_name' => 'Saint Philip', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '412', 'country_id' => '19', 'state_name' => 'Saint Thomas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '413', 'country_id' => '20', 'state_name' => 'Brest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '414', 'country_id' => '20', 'state_name' => "Homjel"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '415', 'country_id' => '20', 'state_name' => 'Hrodna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '416', 'country_id' => '20', 'state_name' => 'Mahiljow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '417', 'country_id' => '20', 'state_name' => 'Mahilyowskaya Voblasts', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '418', 'country_id' => '20', 'state_name' => 'Minsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '419', 'country_id' => '20', 'state_name' => "Minskaja Voblasts"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '420', 'country_id' => '20', 'state_name' => 'Petrik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '421', 'country_id' => '20', 'state_name' => 'Vicebsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '422', 'country_id' => '21', 'state_name' => 'Antwerpen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '423', 'country_id' => '21', 'state_name' => 'Berchem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '424', 'country_id' => '21', 'state_name' => 'Brabant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '425', 'country_id' => '21', 'state_name' => 'Brabant Wallon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '426', 'country_id' => '21', 'state_name' => 'Brussel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '427', 'country_id' => '21', 'state_name' => 'East Flanders', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '428', 'country_id' => '21', 'state_name' => 'Hainaut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '429', 'country_id' => '21', 'state_name' => 'Liege', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '430', 'country_id' => '21', 'state_name' => 'Limburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '431', 'country_id' => '21', 'state_name' => 'Luxembourg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '432', 'country_id' => '21', 'state_name' => 'Namur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '433', 'country_id' => '21', 'state_name' => 'Ontario', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '434', 'country_id' => '21', 'state_name' => 'Oost-Vlaanderen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '435', 'country_id' => '21', 'state_name' => 'Provincie Brabant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '436', 'country_id' => '21', 'state_name' => 'Vlaams-Brabant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '437', 'country_id' => '21', 'state_name' => 'Wallonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '438', 'country_id' => '21', 'state_name' => 'West-Vlaanderen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '439', 'country_id' => '22', 'state_name' => 'Belize', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '440', 'country_id' => '22', 'state_name' => 'Cayo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '441', 'country_id' => '22', 'state_name' => 'Corozal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '442', 'country_id' => '22', 'state_name' => 'Orange Walk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '443', 'country_id' => '22', 'state_name' => 'Stann Creek', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '444', 'country_id' => '22', 'state_name' => 'Toledo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '445', 'country_id' => '23', 'state_name' => 'Alibori', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '446', 'country_id' => '23', 'state_name' => 'Atacora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '447', 'country_id' => '23', 'state_name' => 'Atlantique', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '448', 'country_id' => '23', 'state_name' => 'Borgou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '449', 'country_id' => '23', 'state_name' => 'Collines', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '450', 'country_id' => '23', 'state_name' => 'Couffo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '451', 'country_id' => '23', 'state_name' => 'Donga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '452', 'country_id' => '23', 'state_name' => 'Littoral', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '453', 'country_id' => '23', 'state_name' => 'Mono', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '454', 'country_id' => '23', 'state_name' => 'Oueme', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '455', 'country_id' => '23', 'state_name' => 'Plateau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '456', 'country_id' => '23', 'state_name' => 'Zou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '457', 'country_id' => '24', 'state_name' => 'Hamilton', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '458', 'country_id' => '24', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '459', 'country_id' => '25', 'state_name' => 'Bumthang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '460', 'country_id' => '25', 'state_name' => 'Chhukha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '461', 'country_id' => '25', 'state_name' => 'Chirang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '462', 'country_id' => '25', 'state_name' => 'Daga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '463', 'country_id' => '25', 'state_name' => 'Geylegphug', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '464', 'country_id' => '25', 'state_name' => 'Ha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '465', 'country_id' => '25', 'state_name' => 'Lhuntshi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '466', 'country_id' => '25', 'state_name' => 'Mongar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '467', 'country_id' => '25', 'state_name' => 'Pemagatsel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '468', 'country_id' => '25', 'state_name' => 'Punakha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '469', 'country_id' => '25', 'state_name' => 'Rinpung', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '470', 'country_id' => '25', 'state_name' => 'Samchi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '471', 'country_id' => '25', 'state_name' => 'Samdrup Jongkhar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '472', 'country_id' => '25', 'state_name' => 'Shemgang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '473', 'country_id' => '25', 'state_name' => 'Tashigang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '474', 'country_id' => '25', 'state_name' => 'Timphu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '475', 'country_id' => '25', 'state_name' => 'Tongsa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '476', 'country_id' => '25', 'state_name' => 'Wangdiphodrang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '477', 'country_id' => '26', 'state_name' => 'Beni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '478', 'country_id' => '26', 'state_name' => 'Chuquisaca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '479', 'country_id' => '26', 'state_name' => 'Cochabamba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '480', 'country_id' => '26', 'state_name' => 'La Paz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '481', 'country_id' => '26', 'state_name' => 'Oruro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '482', 'country_id' => '26', 'state_name' => 'Pando', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '483', 'country_id' => '26', 'state_name' => 'Potosi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '484', 'country_id' => '26', 'state_name' => 'Santa Cruz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '485', 'country_id' => '26', 'state_name' => 'Tarija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '486', 'country_id' => '27', 'state_name' => 'Federacija Bosna i Hercegovina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '487', 'country_id' => '27', 'state_name' => 'Republika Srpska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '488', 'country_id' => '28', 'state_name' => 'Central Bobonong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '489', 'country_id' => '28', 'state_name' => 'Central Boteti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '490', 'country_id' => '28', 'state_name' => 'Central Mahalapye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '491', 'country_id' => '28', 'state_name' => 'Central Serowe-Palapye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '492', 'country_id' => '28', 'state_name' => 'Central Tutume', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '493', 'country_id' => '28', 'state_name' => 'Chobe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '494', 'country_id' => '28', 'state_name' => 'Francistown', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '495', 'country_id' => '28', 'state_name' => 'Gaborone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '496', 'country_id' => '28', 'state_name' => 'Ghanzi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '497', 'country_id' => '28', 'state_name' => 'Jwaneng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '498', 'country_id' => '28', 'state_name' => 'Kgalagadi North', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '499', 'country_id' => '28', 'state_name' => 'Kgalagadi South', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '500', 'country_id' => '28', 'state_name' => 'Kgatleng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '501', 'country_id' => '28', 'state_name' => 'Kweneng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '502', 'country_id' => '28', 'state_name' => 'Lobatse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '503', 'country_id' => '28', 'state_name' => 'Ngamiland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '504', 'country_id' => '28', 'state_name' => 'Ngwaketse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '505', 'country_id' => '28', 'state_name' => 'North East', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '506', 'country_id' => '28', 'state_name' => 'Okavango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '507', 'country_id' => '28', 'state_name' => 'Orapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '508', 'country_id' => '28', 'state_name' => 'Selibe Phikwe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '509', 'country_id' => '28', 'state_name' => 'South East', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '510', 'country_id' => '28', 'state_name' => 'Sowa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '511', 'country_id' => '29', 'state_name' => 'Bouvet Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '512', 'country_id' => '30', 'state_name' => 'Acre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '513', 'country_id' => '30', 'state_name' => 'Alagoas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '514', 'country_id' => '30', 'state_name' => 'Amapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '515', 'country_id' => '30', 'state_name' => 'Amazonas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '516', 'country_id' => '30', 'state_name' => 'Bahia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '517', 'country_id' => '30', 'state_name' => 'Ceara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '518', 'country_id' => '30', 'state_name' => 'Distrito Federal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '519', 'country_id' => '30', 'state_name' => 'Espirito Santo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '520', 'country_id' => '30', 'state_name' => 'Estado de Sao Paulo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '521', 'country_id' => '30', 'state_name' => 'Goias', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '522', 'country_id' => '30', 'state_name' => 'Maranhao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '523', 'country_id' => '30', 'state_name' => 'Mato Grosso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '524', 'country_id' => '30', 'state_name' => 'Mato Grosso do Sul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '525', 'country_id' => '30', 'state_name' => 'Minas Gerais', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '526', 'country_id' => '30', 'state_name' => 'Para', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '527', 'country_id' => '30', 'state_name' => 'Paraiba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '528', 'country_id' => '30', 'state_name' => 'Parana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '529', 'country_id' => '30', 'state_name' => 'Pernambuco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '530', 'country_id' => '30', 'state_name' => 'Piaui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '531', 'country_id' => '30', 'state_name' => 'Rio Grande do Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '532', 'country_id' => '30', 'state_name' => 'Rio Grande do Sul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '533', 'country_id' => '30', 'state_name' => 'Rio de Janeiro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '534', 'country_id' => '30', 'state_name' => 'Rondonia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '535', 'country_id' => '30', 'state_name' => 'Roraima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '536', 'country_id' => '30', 'state_name' => 'Santa Catarina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '537', 'country_id' => '30', 'state_name' => 'Sao Paulo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '538', 'country_id' => '30', 'state_name' => 'Sergipe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '539', 'country_id' => '30', 'state_name' => 'Tocantins', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '540', 'country_id' => '31', 'state_name' => 'British Indian Ocean Territory', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '541', 'country_id' => '32', 'state_name' => 'Belait', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '542', 'country_id' => '32', 'state_name' => 'Brunei-Muara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '543', 'country_id' => '32', 'state_name' => 'Temburong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '544', 'country_id' => '32', 'state_name' => 'Tutong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '545', 'country_id' => '33', 'state_name' => 'Blagoevgrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '546', 'country_id' => '33', 'state_name' => 'Burgas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '547', 'country_id' => '33', 'state_name' => 'Dobrich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '548', 'country_id' => '33', 'state_name' => 'Gabrovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '549', 'country_id' => '33', 'state_name' => 'Haskovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '550', 'country_id' => '33', 'state_name' => 'Jambol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '551', 'country_id' => '33', 'state_name' => 'Kardzhali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '552', 'country_id' => '33', 'state_name' => 'Kjustendil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '553', 'country_id' => '33', 'state_name' => 'Lovech', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '554', 'country_id' => '33', 'state_name' => 'Montana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '555', 'country_id' => '33', 'state_name' => 'Oblast Sofiya-Grad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '556', 'country_id' => '33', 'state_name' => 'Pazardzhik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '557', 'country_id' => '33', 'state_name' => 'Pernik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '558', 'country_id' => '33', 'state_name' => 'Pleven', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '559', 'country_id' => '33', 'state_name' => 'Plovdiv', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '560', 'country_id' => '33', 'state_name' => 'Razgrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '561', 'country_id' => '33', 'state_name' => 'Ruse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '562', 'country_id' => '33', 'state_name' => 'Shumen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '563', 'country_id' => '33', 'state_name' => 'Silistra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '564', 'country_id' => '33', 'state_name' => 'Sliven', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '565', 'country_id' => '33', 'state_name' => 'Smoljan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '566', 'country_id' => '33', 'state_name' => 'Sofija grad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '567', 'country_id' => '33', 'state_name' => 'Sofijska oblast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '568', 'country_id' => '33', 'state_name' => 'Stara Zagora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '569', 'country_id' => '33', 'state_name' => 'Targovishte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '570', 'country_id' => '33', 'state_name' => 'Varna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '571', 'country_id' => '33', 'state_name' => 'Veliko Tarnovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '572', 'country_id' => '33', 'state_name' => 'Vidin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '573', 'country_id' => '33', 'state_name' => 'Vraca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '574', 'country_id' => '33', 'state_name' => 'Yablaniza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '575', 'country_id' => '34', 'state_name' => 'Bale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '576', 'country_id' => '34', 'state_name' => 'Bam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '577', 'country_id' => '34', 'state_name' => 'Bazega', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '578', 'country_id' => '34', 'state_name' => 'Bougouriba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '579', 'country_id' => '34', 'state_name' => 'Boulgou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '580', 'country_id' => '34', 'state_name' => 'Boulkiemde', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '581', 'country_id' => '34', 'state_name' => 'Comoe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '582', 'country_id' => '34', 'state_name' => 'Ganzourgou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '583', 'country_id' => '34', 'state_name' => 'Gnagna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '584', 'country_id' => '34', 'state_name' => 'Gourma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '585', 'country_id' => '34', 'state_name' => 'Houet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '586', 'country_id' => '34', 'state_name' => 'Ioba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '587', 'country_id' => '34', 'state_name' => 'Kadiogo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '588', 'country_id' => '34', 'state_name' => 'Kenedougou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '589', 'country_id' => '34', 'state_name' => 'Komandjari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '590', 'country_id' => '34', 'state_name' => 'Kompienga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '591', 'country_id' => '34', 'state_name' => 'Kossi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '592', 'country_id' => '34', 'state_name' => 'Kouritenga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '593', 'country_id' => '34', 'state_name' => 'Kourweogo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '594', 'country_id' => '34', 'state_name' => 'Leraba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '595', 'country_id' => '34', 'state_name' => 'Mouhoun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '596', 'country_id' => '34', 'state_name' => 'Nahouri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '597', 'country_id' => '34', 'state_name' => 'Namentenga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '598', 'country_id' => '34', 'state_name' => 'Noumbiel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '599', 'country_id' => '34', 'state_name' => 'Oubritenga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '600', 'country_id' => '34', 'state_name' => 'Oudalan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '601', 'country_id' => '34', 'state_name' => 'Passore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '602', 'country_id' => '34', 'state_name' => 'Poni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '603', 'country_id' => '34', 'state_name' => 'Sanguie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '604', 'country_id' => '34', 'state_name' => 'Sanmatenga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '605', 'country_id' => '34', 'state_name' => 'Seno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '606', 'country_id' => '34', 'state_name' => 'Sissili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '607', 'country_id' => '34', 'state_name' => 'Soum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '608', 'country_id' => '34', 'state_name' => 'Sourou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '609', 'country_id' => '34', 'state_name' => 'Tapoa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '610', 'country_id' => '34', 'state_name' => 'Tuy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '611', 'country_id' => '34', 'state_name' => 'Yatenga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '612', 'country_id' => '34', 'state_name' => 'Zondoma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '613', 'country_id' => '34', 'state_name' => 'Zoundweogo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '614', 'country_id' => '35', 'state_name' => 'Bubanza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '615', 'country_id' => '35', 'state_name' => 'Bujumbura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '616', 'country_id' => '35', 'state_name' => 'Bururi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '617', 'country_id' => '35', 'state_name' => 'Cankuzo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '618', 'country_id' => '35', 'state_name' => 'Cibitoke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '619', 'country_id' => '35', 'state_name' => 'Gitega', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '620', 'country_id' => '35', 'state_name' => 'Karuzi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '621', 'country_id' => '35', 'state_name' => 'Kayanza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '622', 'country_id' => '35', 'state_name' => 'Kirundo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '623', 'country_id' => '35', 'state_name' => 'Makamba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '624', 'country_id' => '35', 'state_name' => 'Muramvya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '625', 'country_id' => '35', 'state_name' => 'Muyinga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '626', 'country_id' => '35', 'state_name' => 'Ngozi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '627', 'country_id' => '35', 'state_name' => 'Rutana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '628', 'country_id' => '35', 'state_name' => 'Ruyigi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '629', 'country_id' => '36', 'state_name' => 'Banteay Mean Chey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '630', 'country_id' => '36', 'state_name' => 'Bat Dambang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '631', 'country_id' => '36', 'state_name' => 'Kampong Cham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '632', 'country_id' => '36', 'state_name' => 'Kampong Chhnang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '633', 'country_id' => '36', 'state_name' => 'Kampong Spoeu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '634', 'country_id' => '36', 'state_name' => 'Kampong Thum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '635', 'country_id' => '36', 'state_name' => 'Kampot', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '636', 'country_id' => '36', 'state_name' => 'Kandal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '637', 'country_id' => '36', 'state_name' => 'Kaoh Kong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '638', 'country_id' => '36', 'state_name' => 'Kracheh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '639', 'country_id' => '36', 'state_name' => 'Krong Kaeb', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '640', 'country_id' => '36', 'state_name' => 'Krong Pailin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '641', 'country_id' => '36', 'state_name' => 'Krong Preah Sihanouk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '642', 'country_id' => '36', 'state_name' => 'Mondol Kiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '643', 'country_id' => '36', 'state_name' => 'Otdar Mean Chey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '644', 'country_id' => '36', 'state_name' => 'Phnum Penh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '645', 'country_id' => '36', 'state_name' => 'Pousat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '646', 'country_id' => '36', 'state_name' => 'Preah Vihear', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '647', 'country_id' => '36', 'state_name' => 'Prey Veaeng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '648', 'country_id' => '36', 'state_name' => 'Rotanak Kiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '649', 'country_id' => '36', 'state_name' => 'Siem Reab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '650', 'country_id' => '36', 'state_name' => 'Stueng Traeng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '651', 'country_id' => '36', 'state_name' => 'Svay Rieng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '652', 'country_id' => '36', 'state_name' => 'Takaev', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '653', 'country_id' => '37', 'state_name' => 'Adamaoua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '654', 'country_id' => '37', 'state_name' => 'Centre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '655', 'country_id' => '37', 'state_name' => 'Est', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '656', 'country_id' => '37', 'state_name' => 'Littoral', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '657', 'country_id' => '37', 'state_name' => 'Nord', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '658', 'country_id' => '37', 'state_name' => 'Nord Extreme', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '659', 'country_id' => '37', 'state_name' => 'Nordouest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '660', 'country_id' => '37', 'state_name' => 'Ouest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '661', 'country_id' => '37', 'state_name' => 'Sud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '662', 'country_id' => '37', 'state_name' => 'Sudouest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '663', 'country_id' => '38', 'state_name' => 'Alberta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '664', 'country_id' => '38', 'state_name' => 'British Columbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '665', 'country_id' => '38', 'state_name' => 'Manitoba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '666', 'country_id' => '38', 'state_name' => 'New Brunswick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '667', 'country_id' => '38', 'state_name' => 'Newfoundland and Labrador', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '668', 'country_id' => '38', 'state_name' => 'Northwest Territories', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '669', 'country_id' => '38', 'state_name' => 'Nova Scotia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '670', 'country_id' => '38', 'state_name' => 'Nunavut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '671', 'country_id' => '38', 'state_name' => 'Ontario', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '672', 'country_id' => '38', 'state_name' => 'Prince Edward Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '673', 'country_id' => '38', 'state_name' => 'Quebec', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '674', 'country_id' => '38', 'state_name' => 'Saskatchewan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '675', 'country_id' => '38', 'state_name' => 'Yukon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '676', 'country_id' => '39', 'state_name' => 'Boavista', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '677', 'country_id' => '39', 'state_name' => 'Brava', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '678', 'country_id' => '39', 'state_name' => 'Fogo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '679', 'country_id' => '39', 'state_name' => 'Maio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '680', 'country_id' => '39', 'state_name' => 'Sal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '681', 'country_id' => '39', 'state_name' => 'Santo Antao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '682', 'country_id' => '39', 'state_name' => 'Sao Nicolau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '683', 'country_id' => '39', 'state_name' => 'Sao Tiago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '684', 'country_id' => '39', 'state_name' => 'Sao Vicente', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '685', 'country_id' => '40', 'state_name' => 'Grand Cayman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '686', 'country_id' => '41', 'state_name' => 'Bamingui-Bangoran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '687', 'country_id' => '41', 'state_name' => 'Bangui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '688', 'country_id' => '41', 'state_name' => 'Basse-Kotto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '689', 'country_id' => '41', 'state_name' => 'Haut-Mbomou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '690', 'country_id' => '41', 'state_name' => 'Haute-Kotto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '691', 'country_id' => '41', 'state_name' => 'Kemo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '692', 'country_id' => '41', 'state_name' => 'Lobaye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '693', 'country_id' => '41', 'state_name' => 'Mambere-Kadei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '694', 'country_id' => '41', 'state_name' => 'Mbomou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '695', 'country_id' => '41', 'state_name' => 'Nana-Gribizi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '696', 'country_id' => '41', 'state_name' => 'Nana-Mambere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '697', 'country_id' => '41', 'state_name' => 'Ombella Mpoko', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '698', 'country_id' => '41', 'state_name' => 'Ouaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '699', 'country_id' => '41', 'state_name' => 'Ouham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '700', 'country_id' => '41', 'state_name' => 'Ouham-Pende', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '701', 'country_id' => '41', 'state_name' => 'Sangha-Mbaere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '702', 'country_id' => '41', 'state_name' => 'Vakaga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '703', 'country_id' => '42', 'state_name' => 'Batha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '704', 'country_id' => '42', 'state_name' => 'Biltine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '705', 'country_id' => '42', 'state_name' => 'Bourkou-Ennedi-Tibesti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '706', 'country_id' => '42', 'state_name' => 'Chari-Baguirmi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '707', 'country_id' => '42', 'state_name' => 'Guera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '708', 'country_id' => '42', 'state_name' => 'Kanem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '709', 'country_id' => '42', 'state_name' => 'Lac', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '710', 'country_id' => '42', 'state_name' => 'Logone Occidental', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '711', 'country_id' => '42', 'state_name' => 'Logone Oriental', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '712', 'country_id' => '42', 'state_name' => 'Mayo-Kebbi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '713', 'country_id' => '42', 'state_name' => 'Moyen-Chari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '714', 'country_id' => '42', 'state_name' => 'Ouaddai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '715', 'country_id' => '42', 'state_name' => 'Salamat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '716', 'country_id' => '42', 'state_name' => 'Tandjile', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '717', 'country_id' => '43', 'state_name' => 'Aisen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '718', 'country_id' => '43', 'state_name' => 'Antofagasta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '719', 'country_id' => '43', 'state_name' => 'Araucania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '720', 'country_id' => '43', 'state_name' => 'Atacama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '721', 'country_id' => '43', 'state_name' => 'Bio Bio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '722', 'country_id' => '43', 'state_name' => 'Coquimbo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '723', 'country_id' => '43', 'state_name' => "Libertador General Bernardo O"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '724', 'country_id' => '43', 'state_name' => 'Los Lagos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '725', 'country_id' => '43', 'state_name' => 'Magellanes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '726', 'country_id' => '43', 'state_name' => 'Maule', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '727', 'country_id' => '43', 'state_name' => 'Metropolitana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '728', 'country_id' => '43', 'state_name' => 'Metropolitana de Santiago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '729', 'country_id' => '43', 'state_name' => 'Tarapaca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '730', 'country_id' => '43', 'state_name' => 'Valparaiso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '731', 'country_id' => '44', 'state_name' => 'Anhui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '734', 'country_id' => '44', 'state_name' => 'Aomen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '735', 'country_id' => '44', 'state_name' => 'Beijing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '736', 'country_id' => '44', 'state_name' => 'Beijing Shi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '737', 'country_id' => '44', 'state_name' => 'Chongqing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '738', 'country_id' => '44', 'state_name' => 'Fujian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '740', 'country_id' => '44', 'state_name' => 'Gansu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '741', 'country_id' => '44', 'state_name' => 'Guangdong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '743', 'country_id' => '44', 'state_name' => 'Guangxi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '744', 'country_id' => '44', 'state_name' => 'Guizhou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '745', 'country_id' => '44', 'state_name' => 'Hainan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '746', 'country_id' => '44', 'state_name' => 'Hebei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '747', 'country_id' => '44', 'state_name' => 'Heilongjiang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '748', 'country_id' => '44', 'state_name' => 'Henan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '749', 'country_id' => '44', 'state_name' => 'Hubei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '750', 'country_id' => '44', 'state_name' => 'Hunan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '751', 'country_id' => '44', 'state_name' => 'Jiangsu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '753', 'country_id' => '44', 'state_name' => 'Jiangxi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '754', 'country_id' => '44', 'state_name' => 'Jilin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '755', 'country_id' => '44', 'state_name' => 'Liaoning', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '757', 'country_id' => '44', 'state_name' => 'Nei Monggol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '758', 'country_id' => '44', 'state_name' => 'Ningxia Hui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '759', 'country_id' => '44', 'state_name' => 'Qinghai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '760', 'country_id' => '44', 'state_name' => 'Shaanxi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '761', 'country_id' => '44', 'state_name' => 'Shandong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '763', 'country_id' => '44', 'state_name' => 'Shanghai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '764', 'country_id' => '44', 'state_name' => 'Shanxi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '765', 'country_id' => '44', 'state_name' => 'Sichuan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '766', 'country_id' => '44', 'state_name' => 'Tianjin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '767', 'country_id' => '44', 'state_name' => 'Xianggang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '768', 'country_id' => '44', 'state_name' => 'Xinjiang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '769', 'country_id' => '44', 'state_name' => 'Xizang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '770', 'country_id' => '44', 'state_name' => 'Yunnan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '771', 'country_id' => '44', 'state_name' => 'Zhejiang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '773', 'country_id' => '45', 'state_name' => 'Christmas Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '774', 'country_id' => '46', 'state_name' => 'Cocos (Keeling) Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '775', 'country_id' => '47', 'state_name' => 'Amazonas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '776', 'country_id' => '47', 'state_name' => 'Antioquia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '777', 'country_id' => '47', 'state_name' => 'Arauca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '778', 'country_id' => '47', 'state_name' => 'Atlantico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '779', 'country_id' => '47', 'state_name' => 'Bogota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '780', 'country_id' => '47', 'state_name' => 'Bolivar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '781', 'country_id' => '47', 'state_name' => 'Boyaca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '782', 'country_id' => '47', 'state_name' => 'Caldas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '783', 'country_id' => '47', 'state_name' => 'Caqueta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '784', 'country_id' => '47', 'state_name' => 'Casanare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '785', 'country_id' => '47', 'state_name' => 'Cauca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '786', 'country_id' => '47', 'state_name' => 'Cesar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '787', 'country_id' => '47', 'state_name' => 'Choco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '788', 'country_id' => '47', 'state_name' => 'Cordoba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '789', 'country_id' => '47', 'state_name' => 'Cundinamarca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '790', 'country_id' => '47', 'state_name' => 'Guainia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '791', 'country_id' => '47', 'state_name' => 'Guaviare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '792', 'country_id' => '47', 'state_name' => 'Huila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '793', 'country_id' => '47', 'state_name' => 'La Guajira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '794', 'country_id' => '47', 'state_name' => 'Magdalena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '795', 'country_id' => '47', 'state_name' => 'Meta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '796', 'country_id' => '47', 'state_name' => 'Narino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '797', 'country_id' => '47', 'state_name' => 'Norte de Santander', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '798', 'country_id' => '47', 'state_name' => 'Putumayo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '799', 'country_id' => '47', 'state_name' => 'Quindio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '800', 'country_id' => '47', 'state_name' => 'Risaralda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '801', 'country_id' => '47', 'state_name' => 'San Andres y Providencia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '802', 'country_id' => '47', 'state_name' => 'Santander', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '803', 'country_id' => '47', 'state_name' => 'Sucre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '804', 'country_id' => '47', 'state_name' => 'Tolima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '805', 'country_id' => '47', 'state_name' => 'Valle del Cauca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '806', 'country_id' => '47', 'state_name' => 'Vaupes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '807', 'country_id' => '47', 'state_name' => 'Vichada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '808', 'country_id' => '48', 'state_name' => 'Mwali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '809', 'country_id' => '48', 'state_name' => 'Njazidja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '810', 'country_id' => '48', 'state_name' => 'Nzwani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '811', 'country_id' => '49', 'state_name' => 'Bouenza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '812', 'country_id' => '49', 'state_name' => 'Brazzaville', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '813', 'country_id' => '49', 'state_name' => 'Cuvette', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '814', 'country_id' => '49', 'state_name' => 'Kouilou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '815', 'country_id' => '49', 'state_name' => 'Lekoumou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '816', 'country_id' => '49', 'state_name' => 'Likouala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '817', 'country_id' => '49', 'state_name' => 'Niari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '818', 'country_id' => '49', 'state_name' => 'Plateaux', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '819', 'country_id' => '49', 'state_name' => 'Pool', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '820', 'country_id' => '49', 'state_name' => 'Sangha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '821', 'country_id' => '50', 'state_name' => 'Bandundu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '822', 'country_id' => '50', 'state_name' => 'Bas-Congo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '823', 'country_id' => '50', 'state_name' => 'Equateur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '824', 'country_id' => '50', 'state_name' => 'Haut-Congo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '825', 'country_id' => '50', 'state_name' => 'Kasai-Occidental', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '826', 'country_id' => '50', 'state_name' => 'Kasai-Oriental', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '827', 'country_id' => '50', 'state_name' => 'Katanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '828', 'country_id' => '50', 'state_name' => 'Kinshasa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '829', 'country_id' => '50', 'state_name' => 'Maniema', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '830', 'country_id' => '50', 'state_name' => 'Nord-Kivu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '831', 'country_id' => '50', 'state_name' => 'Sud-Kivu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '832', 'country_id' => '51', 'state_name' => 'Aitutaki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '833', 'country_id' => '51', 'state_name' => 'Atiu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '834', 'country_id' => '51', 'state_name' => 'Mangaia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '835', 'country_id' => '51', 'state_name' => 'Manihiki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '836', 'country_id' => '51', 'state_name' => 'Mauke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '837', 'country_id' => '51', 'state_name' => 'Mitiaro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '838', 'country_id' => '51', 'state_name' => 'Nassau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '839', 'country_id' => '51', 'state_name' => 'Pukapuka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '840', 'country_id' => '51', 'state_name' => 'Rakahanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '841', 'country_id' => '51', 'state_name' => 'Rarotonga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '842', 'country_id' => '51', 'state_name' => 'Tongareva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '843', 'country_id' => '52', 'state_name' => 'Alajuela', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '844', 'country_id' => '52', 'state_name' => 'Cartago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '845', 'country_id' => '52', 'state_name' => 'Guanacaste', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '846', 'country_id' => '52', 'state_name' => 'Heredia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '847', 'country_id' => '52', 'state_name' => 'Limon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '848', 'country_id' => '52', 'state_name' => 'Puntarenas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '849', 'country_id' => '52', 'state_name' => 'San Jose', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '850', 'country_id' => '53', 'state_name' => 'Abidjan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '851', 'country_id' => '53', 'state_name' => 'Agneby', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '852', 'country_id' => '53', 'state_name' => 'Bafing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '853', 'country_id' => '53', 'state_name' => 'Denguele', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '854', 'country_id' => '53', 'state_name' => 'Dix-huit Montagnes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '855', 'country_id' => '53', 'state_name' => 'Fromager', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '856', 'country_id' => '53', 'state_name' => 'Haut-Sassandra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '857', 'country_id' => '53', 'state_name' => 'Lacs', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '858', 'country_id' => '53', 'state_name' => 'Lagunes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '859', 'country_id' => '53', 'state_name' => 'Marahoue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '860', 'country_id' => '53', 'state_name' => 'Moyen-Cavally', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '861', 'country_id' => '53', 'state_name' => 'Moyen-Comoe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '862', 'country_id' => '53', 'state_name' => "N"."'"."zi-Comoe", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '863', 'country_id' => '53', 'state_name' => 'Sassandra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '864', 'country_id' => '53', 'state_name' => 'Savanes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '865', 'country_id' => '53', 'state_name' => 'Sud-Bandama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '866', 'country_id' => '53', 'state_name' => 'Sud-Comoe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '867', 'country_id' => '53', 'state_name' => 'Vallee du Bandama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '868', 'country_id' => '53', 'state_name' => 'Worodougou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '869', 'country_id' => '53', 'state_name' => 'Zanzan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '870', 'country_id' => '54', 'state_name' => 'Bjelovar-Bilogora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '871', 'country_id' => '54', 'state_name' => 'Dubrovnik-Neretva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '872', 'country_id' => '54', 'state_name' => 'Grad Zagreb', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '873', 'country_id' => '54', 'state_name' => 'Istra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '874', 'country_id' => '54', 'state_name' => 'Karlovac', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '875', 'country_id' => '54', 'state_name' => 'Koprivnica-Krizhevci', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '876', 'country_id' => '54', 'state_name' => 'Krapina-Zagorje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '877', 'country_id' => '54', 'state_name' => 'Lika-Senj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '878', 'country_id' => '54', 'state_name' => 'Medhimurje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '879', 'country_id' => '54', 'state_name' => 'Medimurska Zupanija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '880', 'country_id' => '54', 'state_name' => 'Osijek-Baranja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '881', 'country_id' => '54', 'state_name' => 'Osjecko-Baranjska Zupanija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '882', 'country_id' => '54', 'state_name' => 'Pozhega-Slavonija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '883', 'country_id' => '54', 'state_name' => 'Primorje-Gorski Kotar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '884', 'country_id' => '54', 'state_name' => 'Shibenik-Knin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '885', 'country_id' => '54', 'state_name' => 'Sisak-Moslavina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '886', 'country_id' => '54', 'state_name' => 'Slavonski Brod-Posavina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '887', 'country_id' => '54', 'state_name' => 'Split-Dalmacija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '888', 'country_id' => '54', 'state_name' => 'Varazhdin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '889', 'country_id' => '54', 'state_name' => 'Virovitica-Podravina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '890', 'country_id' => '54', 'state_name' => 'Vukovar-Srijem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '891', 'country_id' => '54', 'state_name' => 'Zadar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '892', 'country_id' => '54', 'state_name' => 'Zagreb', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '893', 'country_id' => '55', 'state_name' => 'Camaguey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '894', 'country_id' => '55', 'state_name' => 'Ciego de Avila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '895', 'country_id' => '55', 'state_name' => 'Cienfuegos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '896', 'country_id' => '55', 'state_name' => 'Ciudad de la Habana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '897', 'country_id' => '55', 'state_name' => 'Granma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '898', 'country_id' => '55', 'state_name' => 'Guantanamo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '899', 'country_id' => '55', 'state_name' => 'Habana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '900', 'country_id' => '55', 'state_name' => 'Holguin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '901', 'country_id' => '55', 'state_name' => 'Isla de la Juventud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '902', 'country_id' => '55', 'state_name' => 'La Habana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '903', 'country_id' => '55', 'state_name' => 'Las Tunas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '904', 'country_id' => '55', 'state_name' => 'Matanzas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '905', 'country_id' => '55', 'state_name' => 'Pinar del Rio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '906', 'country_id' => '55', 'state_name' => 'Sancti Spiritus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '907', 'country_id' => '55', 'state_name' => 'Santiago de Cuba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '908', 'country_id' => '55', 'state_name' => 'Villa Clara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '909', 'country_id' => '56', 'state_name' => 'Government controlled area', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '910', 'country_id' => '56', 'state_name' => 'Limassol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '911', 'country_id' => '56', 'state_name' => 'Nicosia District', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '912', 'country_id' => '56', 'state_name' => 'Paphos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '913', 'country_id' => '56', 'state_name' => 'Turkish controlled area', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '914', 'country_id' => '57', 'state_name' => 'Central Bohemian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '915', 'country_id' => '57', 'state_name' => 'Frycovice', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '916', 'country_id' => '57', 'state_name' => 'Jihocesky Kraj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '917', 'country_id' => '57', 'state_name' => 'Jihochesky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '918', 'country_id' => '57', 'state_name' => 'Jihomoravsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '919', 'country_id' => '57', 'state_name' => 'Karlovarsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '920', 'country_id' => '57', 'state_name' => 'Klecany', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '921', 'country_id' => '57', 'state_name' => 'Kralovehradecky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '922', 'country_id' => '57', 'state_name' => 'Liberecky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '923', 'country_id' => '57', 'state_name' => 'Lipov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '924', 'country_id' => '57', 'state_name' => 'Moravskoslezsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '925', 'country_id' => '57', 'state_name' => 'Olomoucky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '926', 'country_id' => '57', 'state_name' => 'Olomoucky Kraj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '927', 'country_id' => '57', 'state_name' => 'Pardubicky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '928', 'country_id' => '57', 'state_name' => 'Plzensky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '929', 'country_id' => '57', 'state_name' => 'Praha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '930', 'country_id' => '57', 'state_name' => 'Rajhrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '931', 'country_id' => '57', 'state_name' => 'Smirice', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '932', 'country_id' => '57', 'state_name' => 'South Moravian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '933', 'country_id' => '57', 'state_name' => 'Straz nad Nisou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '934', 'country_id' => '57', 'state_name' => 'Stredochesky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '935', 'country_id' => '57', 'state_name' => 'Unicov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '936', 'country_id' => '57', 'state_name' => 'Ustecky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '937', 'country_id' => '57', 'state_name' => 'Valletta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '938', 'country_id' => '57', 'state_name' => 'Velesin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '939', 'country_id' => '57', 'state_name' => 'Vysochina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '940', 'country_id' => '57', 'state_name' => 'Zlinsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '941', 'country_id' => '58', 'state_name' => 'Arhus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '942', 'country_id' => '58', 'state_name' => 'Bornholm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '943', 'country_id' => '58', 'state_name' => 'Frederiksborg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '944', 'country_id' => '58', 'state_name' => 'Fyn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '945', 'country_id' => '58', 'state_name' => 'Hovedstaden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '946', 'country_id' => '58', 'state_name' => 'Kobenhavn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '947', 'country_id' => '58', 'state_name' => 'Kobenhavns Amt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '948', 'country_id' => '58', 'state_name' => 'Kobenhavns Kommune', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '949', 'country_id' => '58', 'state_name' => 'Nordjylland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '950', 'country_id' => '58', 'state_name' => 'Ribe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '951', 'country_id' => '58', 'state_name' => 'Ringkobing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '952', 'country_id' => '58', 'state_name' => 'Roervig', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '953', 'country_id' => '58', 'state_name' => 'Roskilde', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '954', 'country_id' => '58', 'state_name' => 'Roslev', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '955', 'country_id' => '58', 'state_name' => 'Sjaelland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '956', 'country_id' => '58', 'state_name' => 'Soeborg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '957', 'country_id' => '58', 'state_name' => 'Sonderjylland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '958', 'country_id' => '58', 'state_name' => 'Storstrom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '959', 'country_id' => '58', 'state_name' => 'Syddanmark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '960', 'country_id' => '58', 'state_name' => 'Toelloese', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '961', 'country_id' => '58', 'state_name' => 'Vejle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '962', 'country_id' => '58', 'state_name' => 'Vestsjalland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '963', 'country_id' => '58', 'state_name' => 'Viborg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '964', 'country_id' => '59', 'state_name' => "'"."Ali Sabih", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '965', 'country_id' => '59', 'state_name' => 'Dikhil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '966', 'country_id' => '59', 'state_name' => 'Jibuti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '967', 'country_id' => '59', 'state_name' => 'Tajurah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '968', 'country_id' => '59', 'state_name' => 'Ubuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '969', 'country_id' => '60', 'state_name' => 'Saint Andrew', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '970', 'country_id' => '60', 'state_name' => 'Saint David', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '971', 'country_id' => '60', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '972', 'country_id' => '60', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '973', 'country_id' => '60', 'state_name' => 'Saint Joseph', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '974', 'country_id' => '60', 'state_name' => 'Saint Luke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '975', 'country_id' => '60', 'state_name' => 'Saint Mark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '976', 'country_id' => '60', 'state_name' => 'Saint Patrick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '977', 'country_id' => '60', 'state_name' => 'Saint Paul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '978', 'country_id' => '60', 'state_name' => 'Saint Peter', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '979', 'country_id' => '61', 'state_name' => 'Azua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '980', 'country_id' => '61', 'state_name' => 'Bahoruco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '981', 'country_id' => '61', 'state_name' => 'Barahona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '982', 'country_id' => '61', 'state_name' => 'Dajabon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '983', 'country_id' => '61', 'state_name' => 'Distrito Nacional', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '984', 'country_id' => '61', 'state_name' => 'Duarte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '985', 'country_id' => '61', 'state_name' => 'El Seybo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '986', 'country_id' => '61', 'state_name' => 'Elias Pina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '987', 'country_id' => '61', 'state_name' => 'Espaillat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '988', 'country_id' => '61', 'state_name' => 'Hato Mayor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '989', 'country_id' => '61', 'state_name' => 'Independencia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '990', 'country_id' => '61', 'state_name' => 'La Altagracia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '991', 'country_id' => '61', 'state_name' => 'La Romana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '992', 'country_id' => '61', 'state_name' => 'La Vega', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '993', 'country_id' => '61', 'state_name' => 'Maria Trinidad Sanchez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '994', 'country_id' => '61', 'state_name' => 'Monsenor Nouel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '995', 'country_id' => '61', 'state_name' => 'Monte Cristi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '996', 'country_id' => '61', 'state_name' => 'Monte Plata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '997', 'country_id' => '61', 'state_name' => 'Pedernales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '998', 'country_id' => '61', 'state_name' => 'Peravia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '999', 'country_id' => '61', 'state_name' => 'Puerto Plata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1000', 'country_id' => '61', 'state_name' => 'Salcedo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1001', 'country_id' => '61', 'state_name' => 'Samana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1002', 'country_id' => '61', 'state_name' => 'San Cristobal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1003', 'country_id' => '61', 'state_name' => 'San Juan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1004', 'country_id' => '61', 'state_name' => 'San Pedro de Macoris', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1005', 'country_id' => '61', 'state_name' => 'Sanchez Ramirez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1006', 'country_id' => '61', 'state_name' => 'Santiago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1007', 'country_id' => '61', 'state_name' => 'Santiago Rodriguez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1008', 'country_id' => '61', 'state_name' => 'Valverde', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1009', 'country_id' => '62', 'state_name' => 'Aileu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1010', 'country_id' => '62', 'state_name' => 'Ainaro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1011', 'country_id' => '62', 'state_name' => 'Ambeno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1012', 'country_id' => '62', 'state_name' => 'Baucau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1013', 'country_id' => '62', 'state_name' => 'Bobonaro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1014', 'country_id' => '62', 'state_name' => 'Cova Lima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1015', 'country_id' => '62', 'state_name' => 'Dili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1016', 'country_id' => '62', 'state_name' => 'Ermera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1017', 'country_id' => '62', 'state_name' => 'Lautem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1018', 'country_id' => '62', 'state_name' => 'Liquica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1019', 'country_id' => '62', 'state_name' => 'Manatuto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1020', 'country_id' => '62', 'state_name' => 'Manufahi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1021', 'country_id' => '62', 'state_name' => 'Viqueque', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1022', 'country_id' => '63', 'state_name' => 'Azuay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1023', 'country_id' => '63', 'state_name' => 'Bolivar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1024', 'country_id' => '63', 'state_name' => 'Canar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1025', 'country_id' => '63', 'state_name' => 'Carchi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1026', 'country_id' => '63', 'state_name' => 'Chimborazo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1027', 'country_id' => '63', 'state_name' => 'Cotopaxi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1028', 'country_id' => '63', 'state_name' => 'El Oro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1029', 'country_id' => '63', 'state_name' => 'Esmeraldas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1030', 'country_id' => '63', 'state_name' => 'Galapagos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1031', 'country_id' => '63', 'state_name' => 'Guayas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1032', 'country_id' => '63', 'state_name' => 'Imbabura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1033', 'country_id' => '63', 'state_name' => 'Loja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1034', 'country_id' => '63', 'state_name' => 'Los Rios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1035', 'country_id' => '63', 'state_name' => 'Manabi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1036', 'country_id' => '63', 'state_name' => 'Morona Santiago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1037', 'country_id' => '63', 'state_name' => 'Napo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1038', 'country_id' => '63', 'state_name' => 'Orellana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1039', 'country_id' => '63', 'state_name' => 'Pastaza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1040', 'country_id' => '63', 'state_name' => 'Pichincha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1041', 'country_id' => '63', 'state_name' => 'Sucumbios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1042', 'country_id' => '63', 'state_name' => 'Tungurahua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1043', 'country_id' => '63', 'state_name' => 'Zamora Chinchipe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1044', 'country_id' => '64', 'state_name' => 'Aswan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1045', 'country_id' => '64', 'state_name' => 'Asyut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1046', 'country_id' => '64', 'state_name' => 'Bani Suwayf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1047', 'country_id' => '64', 'state_name' => "Bur Sa"."'"."id", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1048', 'country_id' => '64', 'state_name' => 'Cairo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1049', 'country_id' => '64', 'state_name' => 'Dumyat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1050', 'country_id' => '64', 'state_name' => 'Kafr-ash-Shaykh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1051', 'country_id' => '64', 'state_name' => 'Matruh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1052', 'country_id' => '64', 'state_name' => 'Muhafazat ad Daqahliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1053', 'country_id' => '64', 'state_name' => 'Muhafazat al Fayyum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1054', 'country_id' => '64', 'state_name' => 'Muhafazat al Gharbiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1055', 'country_id' => '64', 'state_name' => 'Muhafazat al Iskandariyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1056', 'country_id' => '64', 'state_name' => 'Muhafazat al Qahirah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1057', 'country_id' => '64', 'state_name' => 'Qina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1058', 'country_id' => '64', 'state_name' => 'Sawhaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1059', 'country_id' => '64', 'state_name' => 'Sina al-Janubiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1060', 'country_id' => '64', 'state_name' => 'Sina ash-Shamaliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1061', 'country_id' => '64', 'state_name' => 'ad-Daqahliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1062', 'country_id' => '64', 'state_name' => 'al-Bahr-al-Ahmar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1063', 'country_id' => '64', 'state_name' => 'al-Buhayrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1064', 'country_id' => '64', 'state_name' => 'al-Fayyum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1065', 'country_id' => '64', 'state_name' => 'al-Gharbiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1066', 'country_id' => '64', 'state_name' => 'al-Iskandariyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1067', 'country_id' => '64', 'state_name' => 'al-Ismailiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1068', 'country_id' => '64', 'state_name' => 'al-Jizah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1069', 'country_id' => '64', 'state_name' => 'al-Minufiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1070', 'country_id' => '64', 'state_name' => 'al-Minya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1071', 'country_id' => '64', 'state_name' => 'al-Qahira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1072', 'country_id' => '64', 'state_name' => 'al-Qalyubiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1073', 'country_id' => '64', 'state_name' => 'al-Uqsur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1074', 'country_id' => '64', 'state_name' => 'al-Wadi al-Jadid', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1075', 'country_id' => '64', 'state_name' => 'as-Suways', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1076', 'country_id' => '64', 'state_name' => 'ash-Sharqiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1077', 'country_id' => '65', 'state_name' => 'Ahuachapan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1078', 'country_id' => '65', 'state_name' => 'Cabanas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1079', 'country_id' => '65', 'state_name' => 'Chalatenango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1080', 'country_id' => '65', 'state_name' => 'Cuscatlan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1081', 'country_id' => '65', 'state_name' => 'La Libertad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1082', 'country_id' => '65', 'state_name' => 'La Paz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1083', 'country_id' => '65', 'state_name' => 'La Union', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1084', 'country_id' => '65', 'state_name' => 'Morazan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1085', 'country_id' => '65', 'state_name' => 'San Miguel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1086', 'country_id' => '65', 'state_name' => 'San Salvador', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1087', 'country_id' => '65', 'state_name' => 'San Vicente', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1088', 'country_id' => '65', 'state_name' => 'Santa Ana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1089', 'country_id' => '65', 'state_name' => 'Sonsonate', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1090', 'country_id' => '65', 'state_name' => 'Usulutan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1091', 'country_id' => '66', 'state_name' => 'Annobon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1092', 'country_id' => '66', 'state_name' => 'Bioko Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1093', 'country_id' => '66', 'state_name' => 'Bioko Sur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1094', 'country_id' => '66', 'state_name' => 'Centro Sur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1095', 'country_id' => '66', 'state_name' => 'Kie-Ntem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1096', 'country_id' => '66', 'state_name' => 'Litoral', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1097', 'country_id' => '66', 'state_name' => 'Wele-Nzas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1098', 'country_id' => '67', 'state_name' => 'Anseba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1099', 'country_id' => '67', 'state_name' => 'Debub', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1100', 'country_id' => '67', 'state_name' => 'Debub-Keih-Bahri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1101', 'country_id' => '67', 'state_name' => 'Gash-Barka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1102', 'country_id' => '67', 'state_name' => 'Maekel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1103', 'country_id' => '67', 'state_name' => 'Semien-Keih-Bahri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1104', 'country_id' => '68', 'state_name' => 'Harju', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1105', 'country_id' => '68', 'state_name' => 'Hiiu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1106', 'country_id' => '68', 'state_name' => 'Ida-Viru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1107', 'country_id' => '68', 'state_name' => 'Jarva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1108', 'country_id' => '68', 'state_name' => 'Jogeva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1109', 'country_id' => '68', 'state_name' => 'Laane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1110', 'country_id' => '68', 'state_name' => 'Laane-Viru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1111', 'country_id' => '68', 'state_name' => 'Parnu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1112', 'country_id' => '68', 'state_name' => 'Polva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1113', 'country_id' => '68', 'state_name' => 'Rapla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1114', 'country_id' => '68', 'state_name' => 'Saare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1115', 'country_id' => '68', 'state_name' => 'Tartu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1116', 'country_id' => '68', 'state_name' => 'Valga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1117', 'country_id' => '68', 'state_name' => 'Viljandi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1118', 'country_id' => '68', 'state_name' => 'Voru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1119', 'country_id' => '69', 'state_name' => 'Addis Abeba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1120', 'country_id' => '69', 'state_name' => 'Afar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1121', 'country_id' => '69', 'state_name' => 'Amhara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1122', 'country_id' => '69', 'state_name' => 'Benishangul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1123', 'country_id' => '69', 'state_name' => 'Diredawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1124', 'country_id' => '69', 'state_name' => 'Gambella', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1125', 'country_id' => '69', 'state_name' => 'Harar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1126', 'country_id' => '69', 'state_name' => 'Jigjiga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1127', 'country_id' => '69', 'state_name' => 'Mekele', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1128', 'country_id' => '69', 'state_name' => 'Oromia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1129', 'country_id' => '69', 'state_name' => 'Somali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1130', 'country_id' => '69', 'state_name' => 'Southern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1131', 'country_id' => '69', 'state_name' => 'Tigray', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1132', 'country_id' => '70', 'state_name' => 'Christmas Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1133', 'country_id' => '70', 'state_name' => 'Cocos Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1134', 'country_id' => '70', 'state_name' => 'Coral Sea Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1135', 'country_id' => '71', 'state_name' => 'Falkland Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1136', 'country_id' => '71', 'state_name' => 'South Georgia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1137', 'country_id' => '72', 'state_name' => 'Klaksvik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1138', 'country_id' => '72', 'state_name' => 'Nor ara Eysturoy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1139', 'country_id' => '72', 'state_name' => 'Nor oy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1140', 'country_id' => '72', 'state_name' => 'Sandoy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1141', 'country_id' => '72', 'state_name' => 'Streymoy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1142', 'country_id' => '72', 'state_name' => 'Su uroy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1143', 'country_id' => '72', 'state_name' => 'Sy ra Eysturoy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1144', 'country_id' => '72', 'state_name' => 'Torshavn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1145', 'country_id' => '72', 'state_name' => 'Vaga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1146', 'country_id' => '73', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1147', 'country_id' => '73', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1148', 'country_id' => '73', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1149', 'country_id' => '73', 'state_name' => 'South Pacific', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1150', 'country_id' => '73', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1151', 'country_id' => '74', 'state_name' => 'Ahvenanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1152', 'country_id' => '74', 'state_name' => 'Etela-Karjala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1153', 'country_id' => '74', 'state_name' => 'Etela-Pohjanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1154', 'country_id' => '74', 'state_name' => 'Etela-Savo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1155', 'country_id' => '74', 'state_name' => 'Etela-Suomen Laani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1156', 'country_id' => '74', 'state_name' => 'Ita-Suomen Laani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1157', 'country_id' => '74', 'state_name' => 'Ita-Uusimaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1158', 'country_id' => '74', 'state_name' => 'Kainuu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1159', 'country_id' => '74', 'state_name' => 'Kanta-Hame', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1160', 'country_id' => '74', 'state_name' => 'Keski-Pohjanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1161', 'country_id' => '74', 'state_name' => 'Keski-Suomi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1162', 'country_id' => '74', 'state_name' => 'Kymenlaakso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1163', 'country_id' => '74', 'state_name' => 'Lansi-Suomen Laani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1164', 'country_id' => '74', 'state_name' => 'Lappi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1165', 'country_id' => '74', 'state_name' => 'Northern Savonia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1166', 'country_id' => '74', 'state_name' => 'Ostrobothnia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1167', 'country_id' => '74', 'state_name' => 'Oulun Laani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1168', 'country_id' => '74', 'state_name' => 'Paijat-Hame', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1169', 'country_id' => '74', 'state_name' => 'Pirkanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1170', 'country_id' => '74', 'state_name' => 'Pohjanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1171', 'country_id' => '74', 'state_name' => 'Pohjois-Karjala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1172', 'country_id' => '74', 'state_name' => 'Pohjois-Pohjanmaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1173', 'country_id' => '74', 'state_name' => 'Pohjois-Savo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1174', 'country_id' => '74', 'state_name' => 'Saarijarvi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1175', 'country_id' => '74', 'state_name' => 'Satakunta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1176', 'country_id' => '74', 'state_name' => 'Southern Savonia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1177', 'country_id' => '74', 'state_name' => 'Tavastia Proper', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1178', 'country_id' => '74', 'state_name' => 'Uleaborgs Lan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1179', 'country_id' => '74', 'state_name' => 'Uusimaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1180', 'country_id' => '74', 'state_name' => 'Varsinais-Suomi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1181', 'country_id' => '75', 'state_name' => 'Ain', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1182', 'country_id' => '75', 'state_name' => 'Aisne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1183', 'country_id' => '75', 'state_name' => 'Albi Le Sequestre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1184', 'country_id' => '75', 'state_name' => 'Allier', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1185', 'country_id' => '75', 'state_name' => 'Alpes-Cote dAzur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1186', 'country_id' => '75', 'state_name' => 'Alpes-Maritimes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1187', 'country_id' => '75', 'state_name' => 'Alpes-de-Haute-Provence', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1188', 'country_id' => '75', 'state_name' => 'Alsace', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1189', 'country_id' => '75', 'state_name' => 'Aquitaine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1190', 'country_id' => '75', 'state_name' => 'Ardeche', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1191', 'country_id' => '75', 'state_name' => 'Ardennes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1192', 'country_id' => '75', 'state_name' => 'Ariege', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1193', 'country_id' => '75', 'state_name' => 'Aube', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1194', 'country_id' => '75', 'state_name' => 'Aude', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1195', 'country_id' => '75', 'state_name' => 'Auvergne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1196', 'country_id' => '75', 'state_name' => 'Aveyron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1197', 'country_id' => '75', 'state_name' => 'Bas-Rhin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1198', 'country_id' => '75', 'state_name' => 'Basse-Normandie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1199', 'country_id' => '75', 'state_name' => 'Bouches-du-Rhone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1200', 'country_id' => '75', 'state_name' => 'Bourgogne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1201', 'country_id' => '75', 'state_name' => 'Bretagne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1202', 'country_id' => '75', 'state_name' => 'Brittany', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1203', 'country_id' => '75', 'state_name' => 'Burgundy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1204', 'country_id' => '75', 'state_name' => 'Calvados', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1205', 'country_id' => '75', 'state_name' => 'Cantal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1206', 'country_id' => '75', 'state_name' => 'Cedex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1207', 'country_id' => '75', 'state_name' => 'Centre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1208', 'country_id' => '75', 'state_name' => 'Charente', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1209', 'country_id' => '75', 'state_name' => 'Charente-Maritime', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1210', 'country_id' => '75', 'state_name' => 'Cher', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1211', 'country_id' => '75', 'state_name' => 'Correze', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1212', 'country_id' => '75', 'state_name' => 'Corse-du-Sud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1213', 'country_id' => '75', 'state_name' => "Cote-d"."'"."Or", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1214', 'country_id' => '75', 'state_name' => "Cotes-d"."'"."Armor", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1215', 'country_id' => '75', 'state_name' => 'Creuse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1216', 'country_id' => '75', 'state_name' => 'Crolles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1217', 'country_id' => '75', 'state_name' => 'Deux-Sevres', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1218', 'country_id' => '75', 'state_name' => 'Dordogne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1219', 'country_id' => '75', 'state_name' => 'Doubs', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1220', 'country_id' => '75', 'state_name' => 'Drome', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1221', 'country_id' => '75', 'state_name' => 'Essonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1222', 'country_id' => '75', 'state_name' => 'Eure', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1223', 'country_id' => '75', 'state_name' => 'Eure-et-Loir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1224', 'country_id' => '75', 'state_name' => 'Feucherolles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1225', 'country_id' => '75', 'state_name' => 'Finistere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1226', 'country_id' => '75', 'state_name' => 'Franche-Comte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1227', 'country_id' => '75', 'state_name' => 'Gard', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1228', 'country_id' => '75', 'state_name' => 'Gers', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1229', 'country_id' => '75', 'state_name' => 'Gironde', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1230', 'country_id' => '75', 'state_name' => 'Haut-Rhin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1231', 'country_id' => '75', 'state_name' => 'Haute-Corse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1232', 'country_id' => '75', 'state_name' => 'Haute-Garonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1233', 'country_id' => '75', 'state_name' => 'Haute-Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1234', 'country_id' => '75', 'state_name' => 'Haute-Marne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1235', 'country_id' => '75', 'state_name' => 'Haute-Saone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1236', 'country_id' => '75', 'state_name' => 'Haute-Savoie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1237', 'country_id' => '75', 'state_name' => 'Haute-Vienne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1238', 'country_id' => '75', 'state_name' => 'Hautes-Alpes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1239', 'country_id' => '75', 'state_name' => 'Hautes-Pyrenees', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1240', 'country_id' => '75', 'state_name' => 'Hauts-de-Seine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1241', 'country_id' => '75', 'state_name' => 'Herault', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1242', 'country_id' => '75', 'state_name' => 'Ile-de-France', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1243', 'country_id' => '75', 'state_name' => 'Ille-et-Vilaine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1244', 'country_id' => '75', 'state_name' => 'Indre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1245', 'country_id' => '75', 'state_name' => 'Indre-et-Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1246', 'country_id' => '75', 'state_name' => 'Isere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1247', 'country_id' => '75', 'state_name' => 'Jura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1248', 'country_id' => '75', 'state_name' => 'Klagenfurt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1249', 'country_id' => '75', 'state_name' => 'Landes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1250', 'country_id' => '75', 'state_name' => 'Languedoc-Roussillon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1251', 'country_id' => '75', 'state_name' => 'Larcay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1252', 'country_id' => '75', 'state_name' => 'Le Castellet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1253', 'country_id' => '75', 'state_name' => 'Le Creusot', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1254', 'country_id' => '75', 'state_name' => 'Limousin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1255', 'country_id' => '75', 'state_name' => 'Loir-et-Cher', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1256', 'country_id' => '75', 'state_name' => 'Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1257', 'country_id' => '75', 'state_name' => 'Loire-Atlantique', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1258', 'country_id' => '75', 'state_name' => 'Loiret', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1259', 'country_id' => '75', 'state_name' => 'Lorraine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1260', 'country_id' => '75', 'state_name' => 'Lot', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1261', 'country_id' => '75', 'state_name' => 'Lot-et-Garonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1262', 'country_id' => '75', 'state_name' => 'Lower Normandy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1263', 'country_id' => '75', 'state_name' => 'Lozere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1264', 'country_id' => '75', 'state_name' => 'Maine-et-Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1265', 'country_id' => '75', 'state_name' => 'Manche', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1266', 'country_id' => '75', 'state_name' => 'Marne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1267', 'country_id' => '75', 'state_name' => 'Mayenne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1268', 'country_id' => '75', 'state_name' => 'Meurthe-et-Moselle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1269', 'country_id' => '75', 'state_name' => 'Meuse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1270', 'country_id' => '75', 'state_name' => 'Midi-Pyrenees', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1271', 'country_id' => '75', 'state_name' => 'Morbihan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1272', 'country_id' => '75', 'state_name' => 'Moselle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1273', 'country_id' => '75', 'state_name' => 'Nievre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1274', 'country_id' => '75', 'state_name' => 'Nord', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1275', 'country_id' => '75', 'state_name' => 'Nord-Pas-de-Calais', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1276', 'country_id' => '75', 'state_name' => 'Oise', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1277', 'country_id' => '75', 'state_name' => 'Orne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1278', 'country_id' => '75', 'state_name' => 'Paris', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1279', 'country_id' => '75', 'state_name' => 'Pas-de-Calais', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1280', 'country_id' => '75', 'state_name' => 'Pays de la Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1281', 'country_id' => '75', 'state_name' => 'Pays-de-la-Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1282', 'country_id' => '75', 'state_name' => 'Picardy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1283', 'country_id' => '75', 'state_name' => 'Puy-de-Dome', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1284', 'country_id' => '75', 'state_name' => 'Pyrenees-Atlantiques', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1285', 'country_id' => '75', 'state_name' => 'Pyrenees-Orientales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1286', 'country_id' => '75', 'state_name' => 'Quelmes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1287', 'country_id' => '75', 'state_name' => 'Rhone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1288', 'country_id' => '75', 'state_name' => 'Rhone-Alpes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1289', 'country_id' => '75', 'state_name' => 'Saint Ouen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1290', 'country_id' => '75', 'state_name' => 'Saint Viatre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1291', 'country_id' => '75', 'state_name' => 'Saone-et-Loire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1292', 'country_id' => '75', 'state_name' => 'Sarthe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1293', 'country_id' => '75', 'state_name' => 'Savoie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1294', 'country_id' => '75', 'state_name' => 'Seine-Maritime', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1295', 'country_id' => '75', 'state_name' => 'Seine-Saint-Denis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1296', 'country_id' => '75', 'state_name' => 'Seine-et-Marne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1297', 'country_id' => '75', 'state_name' => 'Somme', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1298', 'country_id' => '75', 'state_name' => 'Sophia Antipolis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1299', 'country_id' => '75', 'state_name' => 'Souvans', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1300', 'country_id' => '75', 'state_name' => 'Tarn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1301', 'country_id' => '75', 'state_name' => 'Tarn-et-Garonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1302', 'country_id' => '75', 'state_name' => 'Territoire de Belfort', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1303', 'country_id' => '75', 'state_name' => 'Treignac', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1304', 'country_id' => '75', 'state_name' => 'Upper Normandy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1305', 'country_id' => '75', 'state_name' => "Val-d"."'"."Oise", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1306', 'country_id' => '75', 'state_name' => 'Val-de-Marne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1307', 'country_id' => '75', 'state_name' => 'Var', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1308', 'country_id' => '75', 'state_name' => 'Vaucluse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1309', 'country_id' => '75', 'state_name' => 'Vellise', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1310', 'country_id' => '75', 'state_name' => 'Vendee', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1311', 'country_id' => '75', 'state_name' => 'Vienne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1312', 'country_id' => '75', 'state_name' => 'Vosges', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1313', 'country_id' => '75', 'state_name' => 'Yonne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1314', 'country_id' => '75', 'state_name' => 'Yvelines', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1315', 'country_id' => '76', 'state_name' => 'Cayenne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1316', 'country_id' => '76', 'state_name' => 'Saint-Laurent-du-Maroni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1317', 'country_id' => '77', 'state_name' => 'Iles du Vent', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1318', 'country_id' => '77', 'state_name' => 'Iles sous le Vent', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1319', 'country_id' => '77', 'state_name' => 'Marquesas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1320', 'country_id' => '77', 'state_name' => 'Tuamotu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1321', 'country_id' => '77', 'state_name' => 'Tubuai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1322', 'country_id' => '78', 'state_name' => 'Amsterdam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1323', 'country_id' => '78', 'state_name' => 'Crozet Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1324', 'country_id' => '78', 'state_name' => 'Kerguelen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1325', 'country_id' => '79', 'state_name' => 'Estuaire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1326', 'country_id' => '79', 'state_name' => 'Haut-Ogooue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1327', 'country_id' => '79', 'state_name' => 'Moyen-Ogooue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1328', 'country_id' => '79', 'state_name' => 'Ngounie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1329', 'country_id' => '79', 'state_name' => 'Nyanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1330', 'country_id' => '79', 'state_name' => 'Ogooue-Ivindo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1331', 'country_id' => '79', 'state_name' => 'Ogooue-Lolo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1332', 'country_id' => '79', 'state_name' => 'Ogooue-Maritime', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1333', 'country_id' => '79', 'state_name' => 'Woleu-Ntem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1334', 'country_id' => '80', 'state_name' => 'Banjul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1335', 'country_id' => '80', 'state_name' => 'Basse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1336', 'country_id' => '80', 'state_name' => 'Brikama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1337', 'country_id' => '80', 'state_name' => 'Janjanbureh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1338', 'country_id' => '80', 'state_name' => 'Kanifing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1339', 'country_id' => '80', 'state_name' => 'Kerewan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1340', 'country_id' => '80', 'state_name' => 'Kuntaur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1341', 'country_id' => '80', 'state_name' => 'Mansakonko', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1342', 'country_id' => '81', 'state_name' => 'Abhasia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1343', 'country_id' => '81', 'state_name' => 'Ajaria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1344', 'country_id' => '81', 'state_name' => 'Guria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1345', 'country_id' => '81', 'state_name' => 'Imereti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1346', 'country_id' => '81', 'state_name' => 'Kaheti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1347', 'country_id' => '81', 'state_name' => 'Kvemo Kartli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1348', 'country_id' => '81', 'state_name' => 'Mcheta-Mtianeti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1349', 'country_id' => '81', 'state_name' => 'Racha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1350', 'country_id' => '81', 'state_name' => 'Samagrelo-Zemo Svaneti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1351', 'country_id' => '81', 'state_name' => 'Samche-Zhavaheti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1352', 'country_id' => '81', 'state_name' => 'Shida Kartli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1353', 'country_id' => '81', 'state_name' => 'Tbilisi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1354', 'country_id' => '82', 'state_name' => 'Auvergne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1355', 'country_id' => '82', 'state_name' => 'Baden-Wurttemberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1356', 'country_id' => '82', 'state_name' => 'Bavaria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1357', 'country_id' => '82', 'state_name' => 'Bayern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1358', 'country_id' => '82', 'state_name' => 'Beilstein Wurtt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1359', 'country_id' => '82', 'state_name' => 'Berlin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1360', 'country_id' => '82', 'state_name' => 'Brandenburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1361', 'country_id' => '82', 'state_name' => 'Bremen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1362', 'country_id' => '82', 'state_name' => 'Dreisbach', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1363', 'country_id' => '82', 'state_name' => 'Freistaat Bayern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1364', 'country_id' => '82', 'state_name' => 'Hamburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1365', 'country_id' => '82', 'state_name' => 'Hannover', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1366', 'country_id' => '82', 'state_name' => 'Heroldstatt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1367', 'country_id' => '82', 'state_name' => 'Hessen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1368', 'country_id' => '82', 'state_name' => 'Kortenberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1369', 'country_id' => '82', 'state_name' => 'Laasdorf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1370', 'country_id' => '82', 'state_name' => 'Land Baden-Wurttemberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1371', 'country_id' => '82', 'state_name' => 'Land Bayern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1372', 'country_id' => '82', 'state_name' => 'Land Brandenburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1373', 'country_id' => '82', 'state_name' => 'Land Hessen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1374', 'country_id' => '82', 'state_name' => 'Land Mecklenburg-Vorpommern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1375', 'country_id' => '82', 'state_name' => 'Land Nordrhein-Westfalen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1376', 'country_id' => '82', 'state_name' => 'Land Rheinland-Pfalz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1377', 'country_id' => '82', 'state_name' => 'Land Sachsen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1378', 'country_id' => '82', 'state_name' => 'Land Sachsen-Anhalt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1379', 'country_id' => '82', 'state_name' => 'Land Thuringen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1380', 'country_id' => '82', 'state_name' => 'Lower Saxony', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1381', 'country_id' => '82', 'state_name' => 'Mecklenburg-Vorpommern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1382', 'country_id' => '82', 'state_name' => 'Mulfingen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1383', 'country_id' => '82', 'state_name' => 'Munich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1384', 'country_id' => '82', 'state_name' => 'Neubeuern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1385', 'country_id' => '82', 'state_name' => 'Niedersachsen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1386', 'country_id' => '82', 'state_name' => 'Noord-Holland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1387', 'country_id' => '82', 'state_name' => 'Nordrhein-Westfalen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1388', 'country_id' => '82', 'state_name' => 'North Rhine-Westphalia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1389', 'country_id' => '82', 'state_name' => 'Osterode', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1390', 'country_id' => '82', 'state_name' => 'Rheinland-Pfalz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1391', 'country_id' => '82', 'state_name' => 'Rhineland-Palatinate', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1392', 'country_id' => '82', 'state_name' => 'Saarland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1393', 'country_id' => '82', 'state_name' => 'Sachsen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1394', 'country_id' => '82', 'state_name' => 'Sachsen-Anhalt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1395', 'country_id' => '82', 'state_name' => 'Saxony', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1396', 'country_id' => '82', 'state_name' => 'Schleswig-Holstein', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1397', 'country_id' => '82', 'state_name' => 'Thuringia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1398', 'country_id' => '82', 'state_name' => 'Webling', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1399', 'country_id' => '82', 'state_name' => 'Weinstrabe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1400', 'country_id' => '82', 'state_name' => 'schlobborn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1401', 'country_id' => '83', 'state_name' => 'Ashanti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1402', 'country_id' => '83', 'state_name' => 'Brong-Ahafo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1403', 'country_id' => '83', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1404', 'country_id' => '83', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1405', 'country_id' => '83', 'state_name' => 'Greater Accra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1406', 'country_id' => '83', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1407', 'country_id' => '83', 'state_name' => 'Upper East', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1408', 'country_id' => '83', 'state_name' => 'Upper West', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1409', 'country_id' => '83', 'state_name' => 'Volta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1410', 'country_id' => '83', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1411', 'country_id' => '84', 'state_name' => 'Gibraltar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1412', 'country_id' => '85', 'state_name' => 'Acharnes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1413', 'country_id' => '85', 'state_name' => 'Ahaia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1414', 'country_id' => '85', 'state_name' => 'Aitolia kai Akarnania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1415', 'country_id' => '85', 'state_name' => 'Argolis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1416', 'country_id' => '85', 'state_name' => 'Arkadia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1417', 'country_id' => '85', 'state_name' => 'Arta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1418', 'country_id' => '85', 'state_name' => 'Attica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1419', 'country_id' => '85', 'state_name' => 'Attiki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1420', 'country_id' => '85', 'state_name' => 'Ayion Oros', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1421', 'country_id' => '85', 'state_name' => 'Crete', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1422', 'country_id' => '85', 'state_name' => 'Dodekanisos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1423', 'country_id' => '85', 'state_name' => 'Drama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1424', 'country_id' => '85', 'state_name' => 'Evia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1425', 'country_id' => '85', 'state_name' => 'Evritania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1426', 'country_id' => '85', 'state_name' => 'Evros', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1427', 'country_id' => '85', 'state_name' => 'Evvoia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1428', 'country_id' => '85', 'state_name' => 'Florina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1429', 'country_id' => '85', 'state_name' => 'Fokis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1430', 'country_id' => '85', 'state_name' => 'Fthiotis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1431', 'country_id' => '85', 'state_name' => 'Grevena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1432', 'country_id' => '85', 'state_name' => 'Halandri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1433', 'country_id' => '85', 'state_name' => 'Halkidiki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1434', 'country_id' => '85', 'state_name' => 'Hania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1435', 'country_id' => '85', 'state_name' => 'Heraklion', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1436', 'country_id' => '85', 'state_name' => 'Hios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1437', 'country_id' => '85', 'state_name' => 'Ilia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1438', 'country_id' => '85', 'state_name' => 'Imathia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1439', 'country_id' => '85', 'state_name' => 'Ioannina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1440', 'country_id' => '85', 'state_name' => 'Iraklion', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1441', 'country_id' => '85', 'state_name' => 'Karditsa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1442', 'country_id' => '85', 'state_name' => 'Kastoria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1443', 'country_id' => '85', 'state_name' => 'Kavala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1444', 'country_id' => '85', 'state_name' => 'Kefallinia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1445', 'country_id' => '85', 'state_name' => 'Kerkira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1446', 'country_id' => '85', 'state_name' => 'Kiklades', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1447', 'country_id' => '85', 'state_name' => 'Kilkis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1448', 'country_id' => '85', 'state_name' => 'Korinthia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1449', 'country_id' => '85', 'state_name' => 'Kozani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1450', 'country_id' => '85', 'state_name' => 'Lakonia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1451', 'country_id' => '85', 'state_name' => 'Larisa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1452', 'country_id' => '85', 'state_name' => 'Lasithi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1453', 'country_id' => '85', 'state_name' => 'Lesvos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1454', 'country_id' => '85', 'state_name' => 'Levkas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1455', 'country_id' => '85', 'state_name' => 'Magnisia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1456', 'country_id' => '85', 'state_name' => 'Messinia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1457', 'country_id' => '85', 'state_name' => 'Nomos Attikis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1458', 'country_id' => '85', 'state_name' => 'Nomos Zakynthou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1459', 'country_id' => '85', 'state_name' => 'Pella', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1460', 'country_id' => '85', 'state_name' => 'Pieria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1461', 'country_id' => '85', 'state_name' => 'Piraios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1462', 'country_id' => '85', 'state_name' => 'Preveza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1463', 'country_id' => '85', 'state_name' => 'Rethimni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1464', 'country_id' => '85', 'state_name' => 'Rodopi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1465', 'country_id' => '85', 'state_name' => 'Samos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1466', 'country_id' => '85', 'state_name' => 'Serrai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1467', 'country_id' => '85', 'state_name' => 'Thesprotia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1468', 'country_id' => '85', 'state_name' => 'Thessaloniki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1469', 'country_id' => '85', 'state_name' => 'Trikala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1470', 'country_id' => '85', 'state_name' => 'Voiotia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1471', 'country_id' => '85', 'state_name' => 'West Greece', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1472', 'country_id' => '85', 'state_name' => 'Xanthi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1473', 'country_id' => '85', 'state_name' => 'Zakinthos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1474', 'country_id' => '86', 'state_name' => 'Aasiaat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1475', 'country_id' => '86', 'state_name' => 'Ammassalik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1476', 'country_id' => '86', 'state_name' => 'Illoqqortoormiut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1477', 'country_id' => '86', 'state_name' => 'Ilulissat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1478', 'country_id' => '86', 'state_name' => 'Ivittuut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1479', 'country_id' => '86', 'state_name' => 'Kangaatsiaq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1480', 'country_id' => '86', 'state_name' => 'Maniitsoq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1481', 'country_id' => '86', 'state_name' => 'Nanortalik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1482', 'country_id' => '86', 'state_name' => 'Narsaq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1483', 'country_id' => '86', 'state_name' => 'Nuuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1484', 'country_id' => '86', 'state_name' => 'Paamiut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1485', 'country_id' => '86', 'state_name' => 'Qaanaaq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1486', 'country_id' => '86', 'state_name' => 'Qaqortoq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1487', 'country_id' => '86', 'state_name' => 'Qasigiannguit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1488', 'country_id' => '86', 'state_name' => 'Qeqertarsuaq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1489', 'country_id' => '86', 'state_name' => 'Sisimiut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1490', 'country_id' => '86', 'state_name' => 'Udenfor kommunal inddeling', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1491', 'country_id' => '86', 'state_name' => 'Upernavik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1492', 'country_id' => '86', 'state_name' => 'Uummannaq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1493', 'country_id' => '87', 'state_name' => 'Carriacou-Petite Martinique', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1494', 'country_id' => '87', 'state_name' => 'Saint Andrew', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1495', 'country_id' => '87', 'state_name' => 'Saint Davids', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1496', 'country_id' => '87', 'state_name' => "Saint George"."'"."s", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1497', 'country_id' => '87', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1498', 'country_id' => '87', 'state_name' => 'Saint Mark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1499', 'country_id' => '87', 'state_name' => 'Saint Patrick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1500', 'country_id' => '88', 'state_name' => 'Basse-Terre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1501', 'country_id' => '88', 'state_name' => 'Grande-Terre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1502', 'country_id' => '88', 'state_name' => 'Iles des Saintes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1503', 'country_id' => '88', 'state_name' => 'La Desirade', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1504', 'country_id' => '88', 'state_name' => 'Marie-Galante', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1505', 'country_id' => '88', 'state_name' => 'Saint Barthelemy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1506', 'country_id' => '88', 'state_name' => 'Saint Martin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1507', 'country_id' => '89', 'state_name' => 'Agana Heights', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1508', 'country_id' => '89', 'state_name' => 'Agat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1509', 'country_id' => '89', 'state_name' => 'Barrigada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1510', 'country_id' => '89', 'state_name' => 'Chalan-Pago-Ordot', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1511', 'country_id' => '89', 'state_name' => 'Dededo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1512', 'country_id' => '89', 'state_name' => 'Hagatna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1513', 'country_id' => '89', 'state_name' => 'Inarajan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1514', 'country_id' => '89', 'state_name' => 'Mangilao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1515', 'country_id' => '89', 'state_name' => 'Merizo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1516', 'country_id' => '89', 'state_name' => 'Mongmong-Toto-Maite', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1517', 'country_id' => '89', 'state_name' => 'Santa Rita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1518', 'country_id' => '89', 'state_name' => 'Sinajana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1519', 'country_id' => '89', 'state_name' => 'Talofofo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1520', 'country_id' => '89', 'state_name' => 'Tamuning', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1521', 'country_id' => '89', 'state_name' => 'Yigo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1522', 'country_id' => '89', 'state_name' => 'Yona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1523', 'country_id' => '90', 'state_name' => 'Alta Verapaz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1524', 'country_id' => '90', 'state_name' => 'Baja Verapaz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1525', 'country_id' => '90', 'state_name' => 'Chimaltenango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1526', 'country_id' => '90', 'state_name' => 'Chiquimula', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1527', 'country_id' => '90', 'state_name' => 'El Progreso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1528', 'country_id' => '90', 'state_name' => 'Escuintla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1529', 'country_id' => '90', 'state_name' => 'Guatemala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1530', 'country_id' => '90', 'state_name' => 'Huehuetenango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1531', 'country_id' => '90', 'state_name' => 'Izabal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1532', 'country_id' => '90', 'state_name' => 'Jalapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1533', 'country_id' => '90', 'state_name' => 'Jutiapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1534', 'country_id' => '90', 'state_name' => 'Peten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1535', 'country_id' => '90', 'state_name' => 'Quezaltenango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1536', 'country_id' => '90', 'state_name' => 'Quiche', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1537', 'country_id' => '90', 'state_name' => 'Retalhuleu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1538', 'country_id' => '90', 'state_name' => 'Sacatepequez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1539', 'country_id' => '90', 'state_name' => 'San Marcos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1540', 'country_id' => '90', 'state_name' => 'Santa Rosa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1541', 'country_id' => '90', 'state_name' => 'Solola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1542', 'country_id' => '90', 'state_name' => 'Suchitepequez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1543', 'country_id' => '90', 'state_name' => 'Totonicapan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1544', 'country_id' => '90', 'state_name' => 'Zacapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1545', 'country_id' => '91', 'state_name' => 'Alderney', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1546', 'country_id' => '91', 'state_name' => 'Castel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1547', 'country_id' => '91', 'state_name' => 'Forest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1548', 'country_id' => '91', 'state_name' => 'Saint Andrew', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1549', 'country_id' => '91', 'state_name' => 'Saint Martin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1550', 'country_id' => '91', 'state_name' => 'Saint Peter Port', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1551', 'country_id' => '91', 'state_name' => 'Saint Pierre du Bois', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1552', 'country_id' => '91', 'state_name' => 'Saint Sampson', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1553', 'country_id' => '91', 'state_name' => 'Saint Saviour', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1554', 'country_id' => '91', 'state_name' => 'Sark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1555', 'country_id' => '91', 'state_name' => 'Torteval', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1556', 'country_id' => '91', 'state_name' => 'Vale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1557', 'country_id' => '92', 'state_name' => 'Beyla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1558', 'country_id' => '92', 'state_name' => 'Boffa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1559', 'country_id' => '92', 'state_name' => 'Boke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1560', 'country_id' => '92', 'state_name' => 'Conakry', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1561', 'country_id' => '92', 'state_name' => 'Coyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1562', 'country_id' => '92', 'state_name' => 'Dabola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1563', 'country_id' => '92', 'state_name' => 'Dalaba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1564', 'country_id' => '92', 'state_name' => 'Dinguiraye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1565', 'country_id' => '92', 'state_name' => 'Faranah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1566', 'country_id' => '92', 'state_name' => 'Forecariah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1567', 'country_id' => '92', 'state_name' => 'Fria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1568', 'country_id' => '92', 'state_name' => 'Gaoual', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1569', 'country_id' => '92', 'state_name' => 'Gueckedou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1570', 'country_id' => '92', 'state_name' => 'Kankan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1571', 'country_id' => '92', 'state_name' => 'Kerouane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1572', 'country_id' => '92', 'state_name' => 'Kindia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1573', 'country_id' => '92', 'state_name' => 'Kissidougou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1574', 'country_id' => '92', 'state_name' => 'Koubia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1575', 'country_id' => '92', 'state_name' => 'Koundara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1576', 'country_id' => '92', 'state_name' => 'Kouroussa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1577', 'country_id' => '92', 'state_name' => 'Labe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1578', 'country_id' => '92', 'state_name' => 'Lola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1579', 'country_id' => '92', 'state_name' => 'Macenta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1580', 'country_id' => '92', 'state_name' => 'Mali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1581', 'country_id' => '92', 'state_name' => 'Mamou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1582', 'country_id' => '92', 'state_name' => 'Mandiana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1583', 'country_id' => '92', 'state_name' => 'Nzerekore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1584', 'country_id' => '92', 'state_name' => 'Pita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1585', 'country_id' => '92', 'state_name' => 'Siguiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1586', 'country_id' => '92', 'state_name' => 'Telimele', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1587', 'country_id' => '92', 'state_name' => 'Tougue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1588', 'country_id' => '92', 'state_name' => 'Yomou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1589', 'country_id' => '93', 'state_name' => 'Bafata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1590', 'country_id' => '93', 'state_name' => 'Bissau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1591', 'country_id' => '93', 'state_name' => 'Bolama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1592', 'country_id' => '93', 'state_name' => 'Cacheu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1593', 'country_id' => '93', 'state_name' => 'Gabu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1594', 'country_id' => '93', 'state_name' => 'Oio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1595', 'country_id' => '93', 'state_name' => 'Quinara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1596', 'country_id' => '93', 'state_name' => 'Tombali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1597', 'country_id' => '94', 'state_name' => 'Barima-Waini', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1598', 'country_id' => '94', 'state_name' => 'Cuyuni-Mazaruni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1599', 'country_id' => '94', 'state_name' => 'Demerara-Mahaica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1600', 'country_id' => '94', 'state_name' => 'East Berbice-Corentyne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1601', 'country_id' => '94', 'state_name' => 'Essequibo Islands-West Demerar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1602', 'country_id' => '94', 'state_name' => 'Mahaica-Berbice', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1603', 'country_id' => '94', 'state_name' => 'Pomeroon-Supenaam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1604', 'country_id' => '94', 'state_name' => 'Potaro-Siparuni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1605', 'country_id' => '94', 'state_name' => 'Upper Demerara-Berbice', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1606', 'country_id' => '94', 'state_name' => 'Upper Takutu-Upper Essequibo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1607', 'country_id' => '95', 'state_name' => 'Artibonite', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1608', 'country_id' => '95', 'state_name' => 'Centre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1609', 'country_id' => '95', 'state_name' => "Grand"."'"."Anse", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1610', 'country_id' => '95', 'state_name' => 'Nord', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1611', 'country_id' => '95', 'state_name' => 'Nord-Est', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1612', 'country_id' => '95', 'state_name' => 'Nord-Ouest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1613', 'country_id' => '95', 'state_name' => 'Ouest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1614', 'country_id' => '95', 'state_name' => 'Sud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1615', 'country_id' => '95', 'state_name' => 'Sud-Est', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1616', 'country_id' => '96', 'state_name' => 'Heard and McDonald Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1617', 'country_id' => '97', 'state_name' => 'Atlantida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1618', 'country_id' => '97', 'state_name' => 'Choluteca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1619', 'country_id' => '97', 'state_name' => 'Colon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1620', 'country_id' => '97', 'state_name' => 'Comayagua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1621', 'country_id' => '97', 'state_name' => 'Copan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1622', 'country_id' => '97', 'state_name' => 'Cortes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1623', 'country_id' => '97', 'state_name' => 'Distrito Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1624', 'country_id' => '97', 'state_name' => 'El Paraiso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1625', 'country_id' => '97', 'state_name' => 'Francisco Morazan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1626', 'country_id' => '97', 'state_name' => 'Gracias a Dios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1627', 'country_id' => '97', 'state_name' => 'Intibuca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1628', 'country_id' => '97', 'state_name' => 'Islas de la Bahia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1629', 'country_id' => '97', 'state_name' => 'La Paz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1630', 'country_id' => '97', 'state_name' => 'Lempira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1631', 'country_id' => '97', 'state_name' => 'Ocotepeque', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1632', 'country_id' => '97', 'state_name' => 'Olancho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1633', 'country_id' => '97', 'state_name' => 'Santa Barbara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1634', 'country_id' => '97', 'state_name' => 'Valle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1635', 'country_id' => '97', 'state_name' => 'Yoro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1636', 'country_id' => '98', 'state_name' => 'Hong Kong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1637', 'country_id' => '99', 'state_name' => 'Bacs-Kiskun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1638', 'country_id' => '99', 'state_name' => 'Baranya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1639', 'country_id' => '99', 'state_name' => 'Bekes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1640', 'country_id' => '99', 'state_name' => 'Borsod-Abauj-Zemplen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1641', 'country_id' => '99', 'state_name' => 'Budapest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1642', 'country_id' => '99', 'state_name' => 'Csongrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1643', 'country_id' => '99', 'state_name' => 'Fejer', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1644', 'country_id' => '99', 'state_name' => 'Gyor-Moson-Sopron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1645', 'country_id' => '99', 'state_name' => 'Hajdu-Bihar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1646', 'country_id' => '99', 'state_name' => 'Heves', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1647', 'country_id' => '99', 'state_name' => 'Jasz-Nagykun-Szolnok', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1648', 'country_id' => '99', 'state_name' => 'Komarom-Esztergom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1649', 'country_id' => '99', 'state_name' => 'Nograd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1650', 'country_id' => '99', 'state_name' => 'Pest', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1651', 'country_id' => '99', 'state_name' => 'Somogy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1652', 'country_id' => '99', 'state_name' => 'Szabolcs-Szatmar-Bereg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1653', 'country_id' => '99', 'state_name' => 'Tolna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1654', 'country_id' => '99', 'state_name' => 'Vas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1655', 'country_id' => '99', 'state_name' => 'Veszprem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1656', 'country_id' => '99', 'state_name' => 'Zala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1657', 'country_id' => '100', 'state_name' => 'Austurland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1658', 'country_id' => '100', 'state_name' => 'Gullbringusysla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1659', 'country_id' => '100', 'state_name' => 'Hofu borgarsva i', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1660', 'country_id' => '100', 'state_name' => 'Nor urland eystra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1661', 'country_id' => '100', 'state_name' => 'Nor urland vestra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1662', 'country_id' => '100', 'state_name' => 'Su urland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1663', 'country_id' => '100', 'state_name' => 'Su urnes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1664', 'country_id' => '100', 'state_name' => 'Vestfir ir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1665', 'country_id' => '100', 'state_name' => 'Vesturland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1666', 'country_id' => '102', 'state_name' => 'Aceh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1667', 'country_id' => '102', 'state_name' => 'Bali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1668', 'country_id' => '102', 'state_name' => 'Bangka-Belitung', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1669', 'country_id' => '102', 'state_name' => 'Banten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1670', 'country_id' => '102', 'state_name' => 'Bengkulu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1671', 'country_id' => '102', 'state_name' => 'Gandaria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1672', 'country_id' => '102', 'state_name' => 'Gorontalo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1673', 'country_id' => '102', 'state_name' => 'Jakarta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1674', 'country_id' => '102', 'state_name' => 'Jambi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1675', 'country_id' => '102', 'state_name' => 'Jawa Barat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1676', 'country_id' => '102', 'state_name' => 'Jawa Tengah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1677', 'country_id' => '102', 'state_name' => 'Jawa Timur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1678', 'country_id' => '102', 'state_name' => 'Kalimantan Barat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1679', 'country_id' => '102', 'state_name' => 'Kalimantan Selatan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1680', 'country_id' => '102', 'state_name' => 'Kalimantan Tengah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1681', 'country_id' => '102', 'state_name' => 'Kalimantan Timur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1682', 'country_id' => '102', 'state_name' => 'Kendal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1683', 'country_id' => '102', 'state_name' => 'Lampung', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1684', 'country_id' => '102', 'state_name' => 'Maluku', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1685', 'country_id' => '102', 'state_name' => 'Maluku Utara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1686', 'country_id' => '102', 'state_name' => 'Nusa Tenggara Barat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1687', 'country_id' => '102', 'state_name' => 'Nusa Tenggara Timur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1688', 'country_id' => '102', 'state_name' => 'Papua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1689', 'country_id' => '102', 'state_name' => 'Riau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1690', 'country_id' => '102', 'state_name' => 'Riau Kepulauan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1691', 'country_id' => '102', 'state_name' => 'Solo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1692', 'country_id' => '102', 'state_name' => 'Sulawesi Selatan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1693', 'country_id' => '102', 'state_name' => 'Sulawesi Tengah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1694', 'country_id' => '102', 'state_name' => 'Sulawesi Tenggara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1695', 'country_id' => '102', 'state_name' => 'Sulawesi Utara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1696', 'country_id' => '102', 'state_name' => 'Sumatera Barat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1697', 'country_id' => '102', 'state_name' => 'Sumatera Selatan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1698', 'country_id' => '102', 'state_name' => 'Sumatera Utara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1699', 'country_id' => '102', 'state_name' => 'Yogyakarta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1700', 'country_id' => '103', 'state_name' => 'Ardabil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1701', 'country_id' => '103', 'state_name' => 'Azarbayjan-e Bakhtari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1702', 'country_id' => '103', 'state_name' => 'Azarbayjan-e Khavari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1703', 'country_id' => '103', 'state_name' => 'Bushehr', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1704', 'country_id' => '103', 'state_name' => 'Chahar Mahal-e Bakhtiari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1705', 'country_id' => '103', 'state_name' => 'Esfahan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1706', 'country_id' => '103', 'state_name' => 'Fars', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1707', 'country_id' => '103', 'state_name' => 'Gilan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1708', 'country_id' => '103', 'state_name' => 'Golestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1709', 'country_id' => '103', 'state_name' => 'Hamadan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1710', 'country_id' => '103', 'state_name' => 'Hormozgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1711', 'country_id' => '103', 'state_name' => 'Ilam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1712', 'country_id' => '103', 'state_name' => 'Kerman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1713', 'country_id' => '103', 'state_name' => 'Kermanshah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1714', 'country_id' => '103', 'state_name' => 'Khorasan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1715', 'country_id' => '103', 'state_name' => 'Khuzestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1716', 'country_id' => '103', 'state_name' => 'Kohgiluyeh-e Boyerahmad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1717', 'country_id' => '103', 'state_name' => 'Kordestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1718', 'country_id' => '103', 'state_name' => 'Lorestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1719', 'country_id' => '103', 'state_name' => 'Markazi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1720', 'country_id' => '103', 'state_name' => 'Mazandaran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1721', 'country_id' => '103', 'state_name' => 'Ostan-e Esfahan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1722', 'country_id' => '103', 'state_name' => 'Qazvin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1723', 'country_id' => '103', 'state_name' => 'Qom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1724', 'country_id' => '103', 'state_name' => 'Semnan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1725', 'country_id' => '103', 'state_name' => 'Sistan-e Baluchestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1726', 'country_id' => '103', 'state_name' => 'Tehran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1727', 'country_id' => '103', 'state_name' => 'Yazd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1728', 'country_id' => '103', 'state_name' => 'Zanjan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1729', 'country_id' => '104', 'state_name' => 'Babil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1730', 'country_id' => '104', 'state_name' => 'Baghdad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1731', 'country_id' => '104', 'state_name' => 'Dahuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1732', 'country_id' => '104', 'state_name' => 'Dhi Qar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1733', 'country_id' => '104', 'state_name' => 'Diyala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1734', 'country_id' => '104', 'state_name' => 'Erbil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1735', 'country_id' => '104', 'state_name' => 'Irbil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1736', 'country_id' => '104', 'state_name' => 'Karbala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1737', 'country_id' => '104', 'state_name' => 'Kurdistan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1738', 'country_id' => '104', 'state_name' => 'Maysan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1739', 'country_id' => '104', 'state_name' => 'Ninawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1740', 'country_id' => '104', 'state_name' => 'Salah-ad-Din', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1741', 'country_id' => '104', 'state_name' => 'Wasit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1742', 'country_id' => '104', 'state_name' => 'al-Anbar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1743', 'country_id' => '104', 'state_name' => 'al-Basrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1744', 'country_id' => '104', 'state_name' => 'al-Muthanna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1745', 'country_id' => '104', 'state_name' => 'al-Qadisiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1746', 'country_id' => '104', 'state_name' => 'an-Najaf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1747', 'country_id' => '104', 'state_name' => 'as-Sulaymaniyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1748', 'country_id' => '104', 'state_name' => "at-Ta"."'"."mim", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1749', 'country_id' => '105', 'state_name' => 'Armagh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1750', 'country_id' => '105', 'state_name' => 'Carlow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1751', 'country_id' => '105', 'state_name' => 'Cavan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1752', 'country_id' => '105', 'state_name' => 'Clare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1753', 'country_id' => '105', 'state_name' => 'Cork', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1754', 'country_id' => '105', 'state_name' => 'Donegal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1755', 'country_id' => '105', 'state_name' => 'Dublin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1756', 'country_id' => '105', 'state_name' => 'Galway', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1757', 'country_id' => '105', 'state_name' => 'Kerry', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1758', 'country_id' => '105', 'state_name' => 'Kildare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1759', 'country_id' => '105', 'state_name' => 'Kilkenny', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1760', 'country_id' => '105', 'state_name' => 'Laois', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1761', 'country_id' => '105', 'state_name' => 'Leinster', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1762', 'country_id' => '105', 'state_name' => 'Leitrim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1763', 'country_id' => '105', 'state_name' => 'Limerick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1764', 'country_id' => '105', 'state_name' => 'Loch Garman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1765', 'country_id' => '105', 'state_name' => 'Longford', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1766', 'country_id' => '105', 'state_name' => 'Louth', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1767', 'country_id' => '105', 'state_name' => 'Mayo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1768', 'country_id' => '105', 'state_name' => 'Meath', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1769', 'country_id' => '105', 'state_name' => 'Monaghan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1770', 'country_id' => '105', 'state_name' => 'Offaly', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1771', 'country_id' => '105', 'state_name' => 'Roscommon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1772', 'country_id' => '105', 'state_name' => 'Sligo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1773', 'country_id' => '105', 'state_name' => 'Tipperary North Riding', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1774', 'country_id' => '105', 'state_name' => 'Tipperary South Riding', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1775', 'country_id' => '105', 'state_name' => 'Ulster', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1776', 'country_id' => '105', 'state_name' => 'Waterford', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1777', 'country_id' => '105', 'state_name' => 'Westmeath', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1778', 'country_id' => '105', 'state_name' => 'Wexford', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1779', 'country_id' => '105', 'state_name' => 'Wicklow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1780', 'country_id' => '106', 'state_name' => 'Beit Hanania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1781', 'country_id' => '106', 'state_name' => 'Ben Gurion Airport', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1782', 'country_id' => '106', 'state_name' => 'Bethlehem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1783', 'country_id' => '106', 'state_name' => 'Caesarea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1784', 'country_id' => '106', 'state_name' => 'Centre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1785', 'country_id' => '106', 'state_name' => 'Gaza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1786', 'country_id' => '106', 'state_name' => 'Hadaron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1787', 'country_id' => '106', 'state_name' => 'Haifa District', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1788', 'country_id' => '106', 'state_name' => 'Hamerkaz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1789', 'country_id' => '106', 'state_name' => 'Hazafon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1790', 'country_id' => '106', 'state_name' => 'Hebron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1791', 'country_id' => '106', 'state_name' => 'Jaffa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1792', 'country_id' => '106', 'state_name' => 'Jerusalem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1793', 'country_id' => '106', 'state_name' => 'Khefa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1794', 'country_id' => '106', 'state_name' => 'Kiryat Yam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1795', 'country_id' => '106', 'state_name' => 'Lower Galilee', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1796', 'country_id' => '106', 'state_name' => 'Qalqilya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1797', 'country_id' => '106', 'state_name' => 'Talme Elazar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1798', 'country_id' => '106', 'state_name' => 'Tel Aviv', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1799', 'country_id' => '106', 'state_name' => 'Tsafon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1800', 'country_id' => '106', 'state_name' => 'Umm El Fahem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1801', 'country_id' => '106', 'state_name' => 'Yerushalayim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1802', 'country_id' => '107', 'state_name' => 'Abruzzi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1803', 'country_id' => '107', 'state_name' => 'Abruzzo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1804', 'country_id' => '107', 'state_name' => 'Agrigento', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1805', 'country_id' => '107', 'state_name' => 'Alessandria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1806', 'country_id' => '107', 'state_name' => 'Ancona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1807', 'country_id' => '107', 'state_name' => 'Arezzo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1808', 'country_id' => '107', 'state_name' => 'Ascoli Piceno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1809', 'country_id' => '107', 'state_name' => 'Asti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1810', 'country_id' => '107', 'state_name' => 'Avellino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1811', 'country_id' => '107', 'state_name' => 'Bari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1812', 'country_id' => '107', 'state_name' => 'Basilicata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1813', 'country_id' => '107', 'state_name' => 'Belluno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1814', 'country_id' => '107', 'state_name' => 'Benevento', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1815', 'country_id' => '107', 'state_name' => 'Bergamo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1816', 'country_id' => '107', 'state_name' => 'Biella', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1817', 'country_id' => '107', 'state_name' => 'Bologna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1818', 'country_id' => '107', 'state_name' => 'Bolzano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1819', 'country_id' => '107', 'state_name' => 'Brescia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1820', 'country_id' => '107', 'state_name' => 'Brindisi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1821', 'country_id' => '107', 'state_name' => 'Calabria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1822', 'country_id' => '107', 'state_name' => 'Campania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1823', 'country_id' => '107', 'state_name' => 'Cartoceto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1824', 'country_id' => '107', 'state_name' => 'Caserta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1825', 'country_id' => '107', 'state_name' => 'Catania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1826', 'country_id' => '107', 'state_name' => 'Chieti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1827', 'country_id' => '107', 'state_name' => 'Como', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1828', 'country_id' => '107', 'state_name' => 'Cosenza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1829', 'country_id' => '107', 'state_name' => 'Cremona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1830', 'country_id' => '107', 'state_name' => 'Cuneo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1831', 'country_id' => '107', 'state_name' => 'Emilia-Romagna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1832', 'country_id' => '107', 'state_name' => 'Ferrara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1833', 'country_id' => '107', 'state_name' => 'Firenze', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1834', 'country_id' => '107', 'state_name' => 'Florence', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1835', 'country_id' => '107', 'state_name' => 'Forli-Cesena ', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1836', 'country_id' => '107', 'state_name' => 'Friuli-Venezia Giulia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1837', 'country_id' => '107', 'state_name' => 'Frosinone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1838', 'country_id' => '107', 'state_name' => 'Genoa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1839', 'country_id' => '107', 'state_name' => 'Gorizia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1840', 'country_id' => '107', 'state_name' => "L"."'"."Aquila", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1841', 'country_id' => '107', 'state_name' => 'Lazio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1842', 'country_id' => '107', 'state_name' => 'Lecce', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1843', 'country_id' => '107', 'state_name' => 'Lecco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1845', 'country_id' => '107', 'state_name' => 'Liguria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1846', 'country_id' => '107', 'state_name' => 'Lodi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1847', 'country_id' => '107', 'state_name' => 'Lombardia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1848', 'country_id' => '107', 'state_name' => 'Lombardy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1849', 'country_id' => '107', 'state_name' => 'Macerata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1850', 'country_id' => '107', 'state_name' => 'Mantova', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1851', 'country_id' => '107', 'state_name' => 'Marche', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1852', 'country_id' => '107', 'state_name' => 'Messina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1853', 'country_id' => '107', 'state_name' => 'Milan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1854', 'country_id' => '107', 'state_name' => 'Modena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1855', 'country_id' => '107', 'state_name' => 'Molise', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1856', 'country_id' => '107', 'state_name' => 'Molteno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1857', 'country_id' => '107', 'state_name' => 'Montenegro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1858', 'country_id' => '107', 'state_name' => 'Monza and Brianza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1859', 'country_id' => '107', 'state_name' => 'Naples', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1860', 'country_id' => '107', 'state_name' => 'Novara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1861', 'country_id' => '107', 'state_name' => 'Padova', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1862', 'country_id' => '107', 'state_name' => 'Parma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1863', 'country_id' => '107', 'state_name' => 'Pavia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1864', 'country_id' => '107', 'state_name' => 'Perugia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1865', 'country_id' => '107', 'state_name' => 'Pesaro-Urbino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1866', 'country_id' => '107', 'state_name' => 'Piacenza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1867', 'country_id' => '107', 'state_name' => 'Piedmont', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1868', 'country_id' => '107', 'state_name' => 'Piemonte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1869', 'country_id' => '107', 'state_name' => 'Pisa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1870', 'country_id' => '107', 'state_name' => 'Pordenone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1871', 'country_id' => '107', 'state_name' => 'Potenza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1872', 'country_id' => '107', 'state_name' => 'Puglia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1873', 'country_id' => '107', 'state_name' => 'Reggio Emilia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1874', 'country_id' => '107', 'state_name' => 'Rimini', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1875', 'country_id' => '107', 'state_name' => 'Roma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1876', 'country_id' => '107', 'state_name' => 'Salerno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1877', 'country_id' => '107', 'state_name' => 'Sardegna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1878', 'country_id' => '107', 'state_name' => 'Sassari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1879', 'country_id' => '107', 'state_name' => 'Savona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1880', 'country_id' => '107', 'state_name' => 'Sicilia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1881', 'country_id' => '107', 'state_name' => 'Siena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1882', 'country_id' => '107', 'state_name' => 'Sondrio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1883', 'country_id' => '107', 'state_name' => 'South Tyrol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1884', 'country_id' => '107', 'state_name' => 'Taranto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1885', 'country_id' => '107', 'state_name' => 'Teramo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1886', 'country_id' => '107', 'state_name' => 'Torino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1887', 'country_id' => '107', 'state_name' => 'Toscana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1888', 'country_id' => '107', 'state_name' => 'Trapani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1889', 'country_id' => '107', 'state_name' => 'Trentino-Alto Adige', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1890', 'country_id' => '107', 'state_name' => 'Trento', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1891', 'country_id' => '107', 'state_name' => 'Treviso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1892', 'country_id' => '107', 'state_name' => 'Udine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1893', 'country_id' => '107', 'state_name' => 'Umbria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1894', 'country_id' => '107', 'state_name' => "Valle d"."'"."Aosta", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1895', 'country_id' => '107', 'state_name' => 'Varese', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1896', 'country_id' => '107', 'state_name' => 'Veneto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1897', 'country_id' => '107', 'state_name' => 'Venezia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1898', 'country_id' => '107', 'state_name' => 'Verbano-Cusio-Ossola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1899', 'country_id' => '107', 'state_name' => 'Vercelli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1900', 'country_id' => '107', 'state_name' => 'Verona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1901', 'country_id' => '107', 'state_name' => 'Vicenza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1902', 'country_id' => '107', 'state_name' => 'Viterbo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1903', 'country_id' => '108', 'state_name' => 'Buxoro Viloyati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1904', 'country_id' => '108', 'state_name' => 'Clarendon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1905', 'country_id' => '108', 'state_name' => 'Hanover', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1906', 'country_id' => '108', 'state_name' => 'Kingston', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1907', 'country_id' => '108', 'state_name' => 'Manchester', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1908', 'country_id' => '108', 'state_name' => 'Portland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1909', 'country_id' => '108', 'state_name' => 'Saint Andrews', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1910', 'country_id' => '108', 'state_name' => 'Saint Ann', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1911', 'country_id' => '108', 'state_name' => 'Saint Catherine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1912', 'country_id' => '108', 'state_name' => 'Saint Elizabeth', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1913', 'country_id' => '108', 'state_name' => 'Saint James', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1914', 'country_id' => '108', 'state_name' => 'Saint Mary', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1915', 'country_id' => '108', 'state_name' => 'Saint Thomas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1916', 'country_id' => '108', 'state_name' => 'Trelawney', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1917', 'country_id' => '108', 'state_name' => 'Westmoreland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1918', 'country_id' => '109', 'state_name' => 'Aichi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1919', 'country_id' => '109', 'state_name' => 'Akita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1920', 'country_id' => '109', 'state_name' => 'Aomori', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1921', 'country_id' => '109', 'state_name' => 'Chiba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1922', 'country_id' => '109', 'state_name' => 'Ehime', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1923', 'country_id' => '109', 'state_name' => 'Fukui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1924', 'country_id' => '109', 'state_name' => 'Fukuoka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1925', 'country_id' => '109', 'state_name' => 'Fukushima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1926', 'country_id' => '109', 'state_name' => 'Gifu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1927', 'country_id' => '109', 'state_name' => 'Gumma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1928', 'country_id' => '109', 'state_name' => 'Hiroshima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1929', 'country_id' => '109', 'state_name' => 'Hokkaido', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1930', 'country_id' => '109', 'state_name' => 'Hyogo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1931', 'country_id' => '109', 'state_name' => 'Ibaraki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1932', 'country_id' => '109', 'state_name' => 'Ishikawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1933', 'country_id' => '109', 'state_name' => 'Iwate', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1934', 'country_id' => '109', 'state_name' => 'Kagawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1935', 'country_id' => '109', 'state_name' => 'Kagoshima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1936', 'country_id' => '109', 'state_name' => 'Kanagawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1937', 'country_id' => '109', 'state_name' => 'Kanto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1938', 'country_id' => '109', 'state_name' => 'Kochi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1939', 'country_id' => '109', 'state_name' => 'Kumamoto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1940', 'country_id' => '109', 'state_name' => 'Kyoto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1941', 'country_id' => '109', 'state_name' => 'Mie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1942', 'country_id' => '109', 'state_name' => 'Miyagi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1943', 'country_id' => '109', 'state_name' => 'Miyazaki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1944', 'country_id' => '109', 'state_name' => 'Nagano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1945', 'country_id' => '109', 'state_name' => 'Nagasaki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1946', 'country_id' => '109', 'state_name' => 'Nara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1947', 'country_id' => '109', 'state_name' => 'Niigata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1948', 'country_id' => '109', 'state_name' => 'Oita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1949', 'country_id' => '109', 'state_name' => 'Okayama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1950', 'country_id' => '109', 'state_name' => 'Okinawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1951', 'country_id' => '109', 'state_name' => 'Osaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1952', 'country_id' => '109', 'state_name' => 'Saga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1953', 'country_id' => '109', 'state_name' => 'Saitama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1954', 'country_id' => '109', 'state_name' => 'Shiga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1955', 'country_id' => '109', 'state_name' => 'Shimane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1956', 'country_id' => '109', 'state_name' => 'Shizuoka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1957', 'country_id' => '109', 'state_name' => 'Tochigi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1958', 'country_id' => '109', 'state_name' => 'Tokushima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1959', 'country_id' => '109', 'state_name' => 'Tokyo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1960', 'country_id' => '109', 'state_name' => 'Tottori', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1961', 'country_id' => '109', 'state_name' => 'Toyama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1962', 'country_id' => '109', 'state_name' => 'Wakayama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1963', 'country_id' => '109', 'state_name' => 'Yamagata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1964', 'country_id' => '109', 'state_name' => 'Yamaguchi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1965', 'country_id' => '109', 'state_name' => 'Yamanashi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1966', 'country_id' => '110', 'state_name' => 'Grouville', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1967', 'country_id' => '110', 'state_name' => 'Saint Brelade', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1968', 'country_id' => '110', 'state_name' => 'Saint Clement', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1969', 'country_id' => '110', 'state_name' => 'Saint Helier', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1970', 'country_id' => '110', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1971', 'country_id' => '110', 'state_name' => 'Saint Lawrence', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1972', 'country_id' => '110', 'state_name' => 'Saint Martin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1973', 'country_id' => '110', 'state_name' => 'Saint Mary', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1974', 'country_id' => '110', 'state_name' => 'Saint Peter', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1975', 'country_id' => '110', 'state_name' => 'Saint Saviour', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1976', 'country_id' => '110', 'state_name' => 'Trinity', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1977', 'country_id' => '111', 'state_name' => "'"."Ajlun", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1978', 'country_id' => '111', 'state_name' => 'Amman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1979', 'country_id' => '111', 'state_name' => 'Irbid', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1980', 'country_id' => '111', 'state_name' => 'Jarash', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1981', 'country_id' => '111', 'state_name' => "Ma"."'"."an", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1982', 'country_id' => '111', 'state_name' => 'Madaba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1983', 'country_id' => '111', 'state_name' => "al-"."'"."Aqabah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1984', 'country_id' => '111', 'state_name' => "al-Balqa"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1985', 'country_id' => '111', 'state_name' => 'al-Karak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1986', 'country_id' => '111', 'state_name' => 'al-Mafraq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1987', 'country_id' => '111', 'state_name' => 'at-Tafilah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1988', 'country_id' => '111', 'state_name' => "az-Zarqa"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1989', 'country_id' => '112', 'state_name' => 'Akmecet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1990', 'country_id' => '112', 'state_name' => 'Akmola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1991', 'country_id' => '112', 'state_name' => 'Aktobe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1992', 'country_id' => '112', 'state_name' => 'Almati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1993', 'country_id' => '112', 'state_name' => 'Atirau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1994', 'country_id' => '112', 'state_name' => 'Batis Kazakstan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1995', 'country_id' => '112', 'state_name' => 'Burlinsky Region', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1996', 'country_id' => '112', 'state_name' => 'Karagandi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1997', 'country_id' => '112', 'state_name' => 'Kostanay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1998', 'country_id' => '112', 'state_name' => 'Mankistau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '1999', 'country_id' => '112', 'state_name' => 'Ontustik Kazakstan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2000', 'country_id' => '112', 'state_name' => 'Pavlodar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2001', 'country_id' => '112', 'state_name' => 'Sigis Kazakstan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2002', 'country_id' => '112', 'state_name' => 'Soltustik Kazakstan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2003', 'country_id' => '112', 'state_name' => 'Taraz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2004', 'country_id' => '113', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2005', 'country_id' => '113', 'state_name' => 'Coast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2006', 'country_id' => '113', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2007', 'country_id' => '113', 'state_name' => 'Nairobi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2008', 'country_id' => '113', 'state_name' => 'North Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2009', 'country_id' => '113', 'state_name' => 'Nyanza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2010', 'country_id' => '113', 'state_name' => 'Rift Valley', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2011', 'country_id' => '113', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2012', 'country_id' => '114', 'state_name' => 'Abaiang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2013', 'country_id' => '114', 'state_name' => 'Abemana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2014', 'country_id' => '114', 'state_name' => 'Aranuka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2015', 'country_id' => '114', 'state_name' => 'Arorae', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2016', 'country_id' => '114', 'state_name' => 'Banaba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2017', 'country_id' => '114', 'state_name' => 'Beru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2018', 'country_id' => '114', 'state_name' => 'Butaritari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2019', 'country_id' => '114', 'state_name' => 'Kiritimati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2020', 'country_id' => '114', 'state_name' => 'Kuria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2021', 'country_id' => '114', 'state_name' => 'Maiana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2022', 'country_id' => '114', 'state_name' => 'Makin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2023', 'country_id' => '114', 'state_name' => 'Marakei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2024', 'country_id' => '114', 'state_name' => 'Nikunau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2025', 'country_id' => '114', 'state_name' => 'Nonouti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2026', 'country_id' => '114', 'state_name' => 'Onotoa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2027', 'country_id' => '114', 'state_name' => 'Phoenix Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2028', 'country_id' => '114', 'state_name' => 'Tabiteuea North', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2029', 'country_id' => '114', 'state_name' => 'Tabiteuea South', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2030', 'country_id' => '114', 'state_name' => 'Tabuaeran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2031', 'country_id' => '114', 'state_name' => 'Tamana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2032', 'country_id' => '114', 'state_name' => 'Tarawa North', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2033', 'country_id' => '114', 'state_name' => 'Tarawa South', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2034', 'country_id' => '114', 'state_name' => 'Teraina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2035', 'country_id' => '115', 'state_name' => 'Chagangdo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2036', 'country_id' => '115', 'state_name' => 'Hamgyeongbukto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2037', 'country_id' => '115', 'state_name' => 'Hamgyeongnamdo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2038', 'country_id' => '115', 'state_name' => 'Hwanghaebukto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2039', 'country_id' => '115', 'state_name' => 'Hwanghaenamdo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2040', 'country_id' => '115', 'state_name' => 'Kaeseong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2041', 'country_id' => '115', 'state_name' => 'Kangweon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2042', 'country_id' => '115', 'state_name' => 'Nampo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2043', 'country_id' => '115', 'state_name' => 'Pyeonganbukto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2044', 'country_id' => '115', 'state_name' => 'Pyeongannamdo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2045', 'country_id' => '115', 'state_name' => 'Pyeongyang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2046', 'country_id' => '115', 'state_name' => 'Yanggang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2047', 'country_id' => '116', 'state_name' => 'Busan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2048', 'country_id' => '116', 'state_name' => 'Cheju', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2049', 'country_id' => '116', 'state_name' => 'Chollabuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2050', 'country_id' => '116', 'state_name' => 'Chollanam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2051', 'country_id' => '116', 'state_name' => 'Chungbuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2052', 'country_id' => '116', 'state_name' => 'Chungcheongbuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2053', 'country_id' => '116', 'state_name' => 'Chungcheongnam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2054', 'country_id' => '116', 'state_name' => 'Chungnam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2055', 'country_id' => '116', 'state_name' => 'Daegu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2056', 'country_id' => '116', 'state_name' => 'Gangwon-do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2057', 'country_id' => '116', 'state_name' => 'Goyang-si', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2058', 'country_id' => '116', 'state_name' => 'Gyeonggi-do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2059', 'country_id' => '116', 'state_name' => 'Gyeongsang ', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2060', 'country_id' => '116', 'state_name' => 'Gyeongsangnam-do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2061', 'country_id' => '116', 'state_name' => 'Incheon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2062', 'country_id' => '116', 'state_name' => 'Jeju-Si', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2063', 'country_id' => '116', 'state_name' => 'Jeonbuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2064', 'country_id' => '116', 'state_name' => 'Kangweon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2065', 'country_id' => '116', 'state_name' => 'Kwangju', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2066', 'country_id' => '116', 'state_name' => 'Kyeonggi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2067', 'country_id' => '116', 'state_name' => 'Kyeongsangbuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2068', 'country_id' => '116', 'state_name' => 'Kyeongsangnam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2069', 'country_id' => '116', 'state_name' => 'Kyonggi-do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2070', 'country_id' => '116', 'state_name' => 'Kyungbuk-Do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2071', 'country_id' => '116', 'state_name' => 'Kyunggi-Do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2072', 'country_id' => '116', 'state_name' => 'Kyunggi-do', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2073', 'country_id' => '116', 'state_name' => 'Pusan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2074', 'country_id' => '116', 'state_name' => 'Seoul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2075', 'country_id' => '116', 'state_name' => 'Sudogwon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2076', 'country_id' => '116', 'state_name' => 'Taegu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2077', 'country_id' => '116', 'state_name' => 'Taejeon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2078', 'country_id' => '116', 'state_name' => 'Taejon-gwangyoksi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2079', 'country_id' => '116', 'state_name' => 'Ulsan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2080', 'country_id' => '116', 'state_name' => 'Wonju', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2081', 'country_id' => '116', 'state_name' => 'gwangyoksi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2082', 'country_id' => '117', 'state_name' => 'Al Asimah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2083', 'country_id' => '117', 'state_name' => 'Hawalli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2084', 'country_id' => '117', 'state_name' => 'Mishref', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2085', 'country_id' => '117', 'state_name' => 'Qadesiya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2086', 'country_id' => '117', 'state_name' => 'Safat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2087', 'country_id' => '117', 'state_name' => 'Salmiya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2088', 'country_id' => '117', 'state_name' => 'al-Ahmadi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2089', 'country_id' => '117', 'state_name' => 'al-Farwaniyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2090', 'country_id' => '117', 'state_name' => 'al-Jahra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2091', 'country_id' => '117', 'state_name' => 'al-Kuwayt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2092', 'country_id' => '118', 'state_name' => 'Batken', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2093', 'country_id' => '118', 'state_name' => 'Bishkek', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2094', 'country_id' => '118', 'state_name' => 'Chui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2095', 'country_id' => '118', 'state_name' => 'Issyk-Kul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2096', 'country_id' => '118', 'state_name' => 'Jalal-Abad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2097', 'country_id' => '118', 'state_name' => 'Naryn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2098', 'country_id' => '118', 'state_name' => 'Osh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2099', 'country_id' => '118', 'state_name' => 'Talas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2100', 'country_id' => '119', 'state_name' => 'Attopu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2101', 'country_id' => '119', 'state_name' => 'Bokeo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2102', 'country_id' => '119', 'state_name' => 'Bolikhamsay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2103', 'country_id' => '119', 'state_name' => 'Champasak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2104', 'country_id' => '119', 'state_name' => 'Houaphanh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2105', 'country_id' => '119', 'state_name' => 'Khammouane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2106', 'country_id' => '119', 'state_name' => 'Luang Nam Tha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2107', 'country_id' => '119', 'state_name' => 'Luang Prabang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2108', 'country_id' => '119', 'state_name' => 'Oudomxay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2109', 'country_id' => '119', 'state_name' => 'Phongsaly', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2110', 'country_id' => '119', 'state_name' => 'Saravan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2111', 'country_id' => '119', 'state_name' => 'Savannakhet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2112', 'country_id' => '119', 'state_name' => 'Sekong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2113', 'country_id' => '119', 'state_name' => 'Viangchan Prefecture', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2114', 'country_id' => '119', 'state_name' => 'Viangchan Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2115', 'country_id' => '119', 'state_name' => 'Xaignabury', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2116', 'country_id' => '119', 'state_name' => 'Xiang Khuang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2117', 'country_id' => '120', 'state_name' => 'Aizkraukles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2118', 'country_id' => '120', 'state_name' => 'Aluksnes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2119', 'country_id' => '120', 'state_name' => 'Balvu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2120', 'country_id' => '120', 'state_name' => 'Bauskas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2121', 'country_id' => '120', 'state_name' => 'Cesu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2122', 'country_id' => '120', 'state_name' => 'Daugavpils', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2123', 'country_id' => '120', 'state_name' => 'Daugavpils City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2124', 'country_id' => '120', 'state_name' => 'Dobeles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2125', 'country_id' => '120', 'state_name' => 'Gulbenes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2126', 'country_id' => '120', 'state_name' => 'Jekabspils', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2127', 'country_id' => '120', 'state_name' => 'Jelgava', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2128', 'country_id' => '120', 'state_name' => 'Jelgavas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2129', 'country_id' => '120', 'state_name' => 'Jurmala City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2130', 'country_id' => '120', 'state_name' => 'Kraslavas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2131', 'country_id' => '120', 'state_name' => 'Kuldigas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2132', 'country_id' => '120', 'state_name' => 'Liepaja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2133', 'country_id' => '120', 'state_name' => 'Liepajas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2134', 'country_id' => '120', 'state_name' => 'Limbazhu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2135', 'country_id' => '120', 'state_name' => 'Ludzas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2136', 'country_id' => '120', 'state_name' => 'Madonas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2137', 'country_id' => '120', 'state_name' => 'Ogres', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2138', 'country_id' => '120', 'state_name' => 'Preilu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2139', 'country_id' => '120', 'state_name' => 'Rezekne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2140', 'country_id' => '120', 'state_name' => 'Rezeknes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2141', 'country_id' => '120', 'state_name' => 'Riga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2142', 'country_id' => '120', 'state_name' => 'Rigas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2143', 'country_id' => '120', 'state_name' => 'Saldus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2144', 'country_id' => '120', 'state_name' => 'Talsu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2145', 'country_id' => '120', 'state_name' => 'Tukuma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2146', 'country_id' => '120', 'state_name' => 'Valkas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2147', 'country_id' => '120', 'state_name' => 'Valmieras', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2148', 'country_id' => '120', 'state_name' => 'Ventspils', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2149', 'country_id' => '120', 'state_name' => 'Ventspils City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2150', 'country_id' => '121', 'state_name' => 'Beirut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2151', 'country_id' => '121', 'state_name' => 'Jabal Lubnan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2152', 'country_id' => '121', 'state_name' => 'Mohafazat Liban-Nord', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2153', 'country_id' => '121', 'state_name' => 'Mohafazat Mont-Liban', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2154', 'country_id' => '121', 'state_name' => 'Sidon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2155', 'country_id' => '121', 'state_name' => 'al-Biqa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2156', 'country_id' => '121', 'state_name' => 'al-Janub', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2157', 'country_id' => '121', 'state_name' => 'an-Nabatiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2158', 'country_id' => '121', 'state_name' => 'ash-Shamal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2159', 'country_id' => '122', 'state_name' => 'Berea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2160', 'country_id' => '122', 'state_name' => 'Butha-Buthe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2161', 'country_id' => '122', 'state_name' => 'Leribe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2162', 'country_id' => '122', 'state_name' => 'Mafeteng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2163', 'country_id' => '122', 'state_name' => 'Maseru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2164', 'country_id' => '122', 'state_name' => "Mohale"."'"."s Hoek", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2165', 'country_id' => '122', 'state_name' => 'Mokhotlong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2166', 'country_id' => '122', 'state_name' => "Qacha"."'"."s Nek", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2167', 'country_id' => '122', 'state_name' => 'Quthing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2168', 'country_id' => '122', 'state_name' => 'Thaba-Tseka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2169', 'country_id' => '123', 'state_name' => 'Bomi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2170', 'country_id' => '123', 'state_name' => 'Bong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2171', 'country_id' => '123', 'state_name' => 'Grand Bassa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2172', 'country_id' => '123', 'state_name' => 'Grand Cape Mount', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2173', 'country_id' => '123', 'state_name' => 'Grand Gedeh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2174', 'country_id' => '123', 'state_name' => 'Loffa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2175', 'country_id' => '123', 'state_name' => 'Margibi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2176', 'country_id' => '123', 'state_name' => 'Maryland and Grand Kru', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2177', 'country_id' => '123', 'state_name' => 'Montserrado', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2178', 'country_id' => '123', 'state_name' => 'Nimba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2179', 'country_id' => '123', 'state_name' => 'Rivercess', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2180', 'country_id' => '123', 'state_name' => 'Sinoe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2181', 'country_id' => '124', 'state_name' => 'Ajdabiya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2182', 'country_id' => '124', 'state_name' => 'Fezzan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2183', 'country_id' => '124', 'state_name' => 'Banghazi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2184', 'country_id' => '124', 'state_name' => 'Darnah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2185', 'country_id' => '124', 'state_name' => 'Ghadamis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2186', 'country_id' => '124', 'state_name' => 'Gharyan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2187', 'country_id' => '124', 'state_name' => 'Misratah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2188', 'country_id' => '124', 'state_name' => 'Murzuq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2189', 'country_id' => '124', 'state_name' => 'Sabha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2190', 'country_id' => '124', 'state_name' => 'Sawfajjin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2191', 'country_id' => '124', 'state_name' => 'Surt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2192', 'country_id' => '124', 'state_name' => 'Tarabulus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2193', 'country_id' => '124', 'state_name' => 'Tarhunah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2194', 'country_id' => '124', 'state_name' => 'Tripolitania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2195', 'country_id' => '124', 'state_name' => 'Tubruq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2196', 'country_id' => '124', 'state_name' => 'Yafran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2197', 'country_id' => '124', 'state_name' => 'Zlitan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2198', 'country_id' => '124', 'state_name' => "al-"."'"."Aziziyah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2199', 'country_id' => '124', 'state_name' => 'al-Fatih', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2200', 'country_id' => '124', 'state_name' => 'al-Jabal al Akhdar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2201', 'country_id' => '124', 'state_name' => 'al-Jufrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2202', 'country_id' => '124', 'state_name' => 'al-Khums', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2203', 'country_id' => '124', 'state_name' => 'al-Kufrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2204', 'country_id' => '124', 'state_name' => 'an-Nuqat al-Khams', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2205', 'country_id' => '124', 'state_name' => "ash-Shati"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2206', 'country_id' => '124', 'state_name' => 'az-Zawiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2207', 'country_id' => '125', 'state_name' => 'Balzers', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2208', 'country_id' => '125', 'state_name' => 'Eschen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2209', 'country_id' => '125', 'state_name' => 'Gamprin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2210', 'country_id' => '125', 'state_name' => 'Mauren', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2211', 'country_id' => '125', 'state_name' => 'Planken', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2212', 'country_id' => '125', 'state_name' => 'Ruggell', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2213', 'country_id' => '125', 'state_name' => 'Schaan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2214', 'country_id' => '125', 'state_name' => 'Schellenberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2215', 'country_id' => '125', 'state_name' => 'Triesen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2216', 'country_id' => '125', 'state_name' => 'Triesenberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2217', 'country_id' => '125', 'state_name' => 'Vaduz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2218', 'country_id' => '126', 'state_name' => 'Alytaus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2219', 'country_id' => '126', 'state_name' => 'Anyksciai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2220', 'country_id' => '126', 'state_name' => 'Kauno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2221', 'country_id' => '126', 'state_name' => 'Klaipedos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2222', 'country_id' => '126', 'state_name' => 'Marijampoles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2223', 'country_id' => '126', 'state_name' => 'Panevezhio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2224', 'country_id' => '126', 'state_name' => 'Panevezys', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2225', 'country_id' => '126', 'state_name' => 'Shiauliu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2226', 'country_id' => '126', 'state_name' => 'Taurages', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2227', 'country_id' => '126', 'state_name' => 'Telshiu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2228', 'country_id' => '126', 'state_name' => 'Telsiai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2229', 'country_id' => '126', 'state_name' => 'Utenos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2230', 'country_id' => '126', 'state_name' => 'Vilniaus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2231', 'country_id' => '127', 'state_name' => 'Capellen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2232', 'country_id' => '127', 'state_name' => 'Clervaux', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2233', 'country_id' => '127', 'state_name' => 'Diekirch', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2234', 'country_id' => '127', 'state_name' => 'Echternach', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2235', 'country_id' => '127', 'state_name' => 'Esch-sur-Alzette', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2236', 'country_id' => '127', 'state_name' => 'Grevenmacher', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2237', 'country_id' => '127', 'state_name' => 'Luxembourg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2238', 'country_id' => '127', 'state_name' => 'Mersch', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2239', 'country_id' => '127', 'state_name' => 'Redange', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2240', 'country_id' => '127', 'state_name' => 'Remich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2241', 'country_id' => '127', 'state_name' => 'Vianden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2242', 'country_id' => '127', 'state_name' => 'Wiltz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2243', 'country_id' => '128', 'state_name' => 'Macau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2244', 'country_id' => '129', 'state_name' => 'Berovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2245', 'country_id' => '129', 'state_name' => 'Bitola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2246', 'country_id' => '129', 'state_name' => 'Brod', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2247', 'country_id' => '129', 'state_name' => 'Debar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2248', 'country_id' => '129', 'state_name' => 'Delchevo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2249', 'country_id' => '129', 'state_name' => 'Demir Hisar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2250', 'country_id' => '129', 'state_name' => 'Gevgelija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2251', 'country_id' => '129', 'state_name' => 'Gostivar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2252', 'country_id' => '129', 'state_name' => 'Kavadarci', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2253', 'country_id' => '129', 'state_name' => 'Kichevo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2254', 'country_id' => '129', 'state_name' => 'Kochani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2255', 'country_id' => '129', 'state_name' => 'Kratovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2256', 'country_id' => '129', 'state_name' => 'Kriva Palanka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2257', 'country_id' => '129', 'state_name' => 'Krushevo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2258', 'country_id' => '129', 'state_name' => 'Kumanovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2259', 'country_id' => '129', 'state_name' => 'Negotino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2260', 'country_id' => '129', 'state_name' => 'Ohrid', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2261', 'country_id' => '129', 'state_name' => 'Prilep', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2262', 'country_id' => '129', 'state_name' => 'Probishtip', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2263', 'country_id' => '129', 'state_name' => 'Radovish', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2264', 'country_id' => '129', 'state_name' => 'Resen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2265', 'country_id' => '129', 'state_name' => 'Shtip', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2266', 'country_id' => '129', 'state_name' => 'Skopje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2267', 'country_id' => '129', 'state_name' => 'Struga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2268', 'country_id' => '129', 'state_name' => 'Strumica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2269', 'country_id' => '129', 'state_name' => 'Sveti Nikole', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2270', 'country_id' => '129', 'state_name' => 'Tetovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2271', 'country_id' => '129', 'state_name' => 'Valandovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2272', 'country_id' => '129', 'state_name' => 'Veles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2273', 'country_id' => '129', 'state_name' => 'Vinica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2274', 'country_id' => '130', 'state_name' => 'Antananarivo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2275', 'country_id' => '130', 'state_name' => 'Antsiranana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2276', 'country_id' => '130', 'state_name' => 'Fianarantsoa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2277', 'country_id' => '130', 'state_name' => 'Mahajanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2278', 'country_id' => '130', 'state_name' => 'Toamasina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2279', 'country_id' => '130', 'state_name' => 'Toliary', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2280', 'country_id' => '131', 'state_name' => 'Balaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2281', 'country_id' => '131', 'state_name' => 'Blantyre City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2282', 'country_id' => '131', 'state_name' => 'Chikwawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2283', 'country_id' => '131', 'state_name' => 'Chiradzulu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2284', 'country_id' => '131', 'state_name' => 'Chitipa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2285', 'country_id' => '131', 'state_name' => 'Dedza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2286', 'country_id' => '131', 'state_name' => 'Dowa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2287', 'country_id' => '131', 'state_name' => 'Karonga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2288', 'country_id' => '131', 'state_name' => 'Kasungu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2289', 'country_id' => '131', 'state_name' => 'Lilongwe City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2290', 'country_id' => '131', 'state_name' => 'Machinga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2291', 'country_id' => '131', 'state_name' => 'Mangochi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2292', 'country_id' => '131', 'state_name' => 'Mchinji', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2293', 'country_id' => '131', 'state_name' => 'Mulanje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2294', 'country_id' => '131', 'state_name' => 'Mwanza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2295', 'country_id' => '131', 'state_name' => 'Mzimba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2296', 'country_id' => '131', 'state_name' => 'Mzuzu City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2297', 'country_id' => '131', 'state_name' => 'Nkhata Bay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2298', 'country_id' => '131', 'state_name' => 'Nkhotakota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2299', 'country_id' => '131', 'state_name' => 'Nsanje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2300', 'country_id' => '131', 'state_name' => 'Ntcheu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2301', 'country_id' => '131', 'state_name' => 'Ntchisi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2302', 'country_id' => '131', 'state_name' => 'Phalombe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2303', 'country_id' => '131', 'state_name' => 'Rumphi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2304', 'country_id' => '131', 'state_name' => 'Salima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2305', 'country_id' => '131', 'state_name' => 'Thyolo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2306', 'country_id' => '131', 'state_name' => 'Zomba Municipality', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2307', 'country_id' => '132', 'state_name' => 'Johor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2308', 'country_id' => '132', 'state_name' => 'Kedah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2309', 'country_id' => '132', 'state_name' => 'Kelantan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2310', 'country_id' => '132', 'state_name' => 'Kuala Lumpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2311', 'country_id' => '132', 'state_name' => 'Labuan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2312', 'country_id' => '132', 'state_name' => 'Melaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2313', 'country_id' => '132', 'state_name' => 'Negeri Johor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2314', 'country_id' => '132', 'state_name' => 'Negeri Sembilan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2315', 'country_id' => '132', 'state_name' => 'Pahang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2316', 'country_id' => '132', 'state_name' => 'Penang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2317', 'country_id' => '132', 'state_name' => 'Perak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2318', 'country_id' => '132', 'state_name' => 'Perlis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2319', 'country_id' => '132', 'state_name' => 'Pulau Pinang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2320', 'country_id' => '132', 'state_name' => 'Sabah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2321', 'country_id' => '132', 'state_name' => 'Sarawak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2322', 'country_id' => '132', 'state_name' => 'Selangor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2323', 'country_id' => '132', 'state_name' => 'Sembilan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2324', 'country_id' => '132', 'state_name' => 'Terengganu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2325', 'country_id' => '133', 'state_name' => 'Alif Alif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2326', 'country_id' => '133', 'state_name' => 'Alif Dhaal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2327', 'country_id' => '133', 'state_name' => 'Baa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2328', 'country_id' => '133', 'state_name' => 'Dhaal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2329', 'country_id' => '133', 'state_name' => 'Faaf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2330', 'country_id' => '133', 'state_name' => 'Gaaf Alif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2331', 'country_id' => '133', 'state_name' => 'Gaaf Dhaal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2332', 'country_id' => '133', 'state_name' => 'Ghaviyani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2333', 'country_id' => '133', 'state_name' => 'Haa Alif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2334', 'country_id' => '133', 'state_name' => 'Haa Dhaal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2335', 'country_id' => '133', 'state_name' => 'Kaaf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2336', 'country_id' => '133', 'state_name' => 'Laam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2337', 'country_id' => '133', 'state_name' => 'Lhaviyani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2338', 'country_id' => '133', 'state_name' => 'Male', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2339', 'country_id' => '133', 'state_name' => 'Miim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2340', 'country_id' => '133', 'state_name' => 'Nuun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2341', 'country_id' => '133', 'state_name' => 'Raa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2342', 'country_id' => '133', 'state_name' => 'Shaviyani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2343', 'country_id' => '133', 'state_name' => 'Siin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2344', 'country_id' => '133', 'state_name' => 'Thaa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2345', 'country_id' => '133', 'state_name' => 'Vaav', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2346', 'country_id' => '134', 'state_name' => 'Bamako', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2347', 'country_id' => '134', 'state_name' => 'Gao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2348', 'country_id' => '134', 'state_name' => 'Kayes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2349', 'country_id' => '134', 'state_name' => 'Kidal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2350', 'country_id' => '134', 'state_name' => 'Koulikoro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2351', 'country_id' => '134', 'state_name' => 'Mopti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2352', 'country_id' => '134', 'state_name' => 'Segou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2353', 'country_id' => '134', 'state_name' => 'Sikasso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2354', 'country_id' => '134', 'state_name' => 'Tombouctou', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2355', 'country_id' => '135', 'state_name' => 'Gozo and Comino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2356', 'country_id' => '135', 'state_name' => 'Inner Harbour', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2357', 'country_id' => '135', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2358', 'country_id' => '135', 'state_name' => 'Outer Harbour', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2359', 'country_id' => '135', 'state_name' => 'South Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2360', 'country_id' => '135', 'state_name' => 'Valletta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2361', 'country_id' => '135', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2362', 'country_id' => '136', 'state_name' => 'Castletown', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2363', 'country_id' => '136', 'state_name' => 'Douglas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2364', 'country_id' => '136', 'state_name' => 'Laxey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2365', 'country_id' => '136', 'state_name' => 'Onchan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2366', 'country_id' => '136', 'state_name' => 'Peel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2367', 'country_id' => '136', 'state_name' => 'Port Erin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2368', 'country_id' => '136', 'state_name' => 'Port Saint Mary', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2369', 'country_id' => '136', 'state_name' => 'Ramsey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2370', 'country_id' => '137', 'state_name' => 'Ailinlaplap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2371', 'country_id' => '137', 'state_name' => 'Ailuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2372', 'country_id' => '137', 'state_name' => 'Arno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2373', 'country_id' => '137', 'state_name' => 'Aur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2374', 'country_id' => '137', 'state_name' => 'Bikini', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2375', 'country_id' => '137', 'state_name' => 'Ebon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2376', 'country_id' => '137', 'state_name' => 'Enewetak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2377', 'country_id' => '137', 'state_name' => 'Jabat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2378', 'country_id' => '137', 'state_name' => 'Jaluit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2379', 'country_id' => '137', 'state_name' => 'Kili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2380', 'country_id' => '137', 'state_name' => 'Kwajalein', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2381', 'country_id' => '137', 'state_name' => 'Lae', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2382', 'country_id' => '137', 'state_name' => 'Lib', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2383', 'country_id' => '137', 'state_name' => 'Likiep', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2384', 'country_id' => '137', 'state_name' => 'Majuro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2385', 'country_id' => '137', 'state_name' => 'Maloelap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2386', 'country_id' => '137', 'state_name' => 'Mejit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2387', 'country_id' => '137', 'state_name' => 'Mili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2388', 'country_id' => '137', 'state_name' => 'Namorik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2389', 'country_id' => '137', 'state_name' => 'Namu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2390', 'country_id' => '137', 'state_name' => 'Rongelap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2391', 'country_id' => '137', 'state_name' => 'Ujae', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2392', 'country_id' => '137', 'state_name' => 'Utrik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2393', 'country_id' => '137', 'state_name' => 'Wotho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2394', 'country_id' => '137', 'state_name' => 'Wotje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2395', 'country_id' => '138', 'state_name' => 'Fort-de-France', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2396', 'country_id' => '138', 'state_name' => 'La Trinite', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2397', 'country_id' => '138', 'state_name' => 'Le Marin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2398', 'country_id' => '138', 'state_name' => 'Saint-Pierre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2399', 'country_id' => '139', 'state_name' => 'Adrar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2400', 'country_id' => '139', 'state_name' => 'Assaba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2401', 'country_id' => '139', 'state_name' => 'Brakna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2402', 'country_id' => '139', 'state_name' => 'Dhakhlat Nawadibu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2403', 'country_id' => '139', 'state_name' => 'Hudh-al-Gharbi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2404', 'country_id' => '139', 'state_name' => 'Hudh-ash-Sharqi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2405', 'country_id' => '139', 'state_name' => 'Inshiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2406', 'country_id' => '139', 'state_name' => 'Nawakshut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2407', 'country_id' => '139', 'state_name' => 'Qidimagha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2408', 'country_id' => '139', 'state_name' => 'Qurqul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2409', 'country_id' => '139', 'state_name' => 'Taqant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2410', 'country_id' => '139', 'state_name' => 'Tiris Zammur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2411', 'country_id' => '139', 'state_name' => 'Trarza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2412', 'country_id' => '140', 'state_name' => 'Black River', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2413', 'country_id' => '140', 'state_name' => 'Eau Coulee', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2414', 'country_id' => '140', 'state_name' => 'Flacq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2415', 'country_id' => '140', 'state_name' => 'Floreal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2416', 'country_id' => '140', 'state_name' => 'Grand Port', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2417', 'country_id' => '140', 'state_name' => 'Moka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2418', 'country_id' => '140', 'state_name' => 'Pamplempousses', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2419', 'country_id' => '140', 'state_name' => 'Plaines Wilhelm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2420', 'country_id' => '140', 'state_name' => 'Port Louis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2421', 'country_id' => '140', 'state_name' => 'Riviere du Rempart', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2422', 'country_id' => '140', 'state_name' => 'Rodrigues', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2423', 'country_id' => '140', 'state_name' => 'Rose Hill', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2424', 'country_id' => '140', 'state_name' => 'Savanne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2425', 'country_id' => '141', 'state_name' => 'Mayotte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2426', 'country_id' => '141', 'state_name' => 'Pamanzi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2427', 'country_id' => '142', 'state_name' => 'Aguascalientes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2428', 'country_id' => '142', 'state_name' => 'Baja California', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2429', 'country_id' => '142', 'state_name' => 'Baja California Sur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2430', 'country_id' => '142', 'state_name' => 'Campeche', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2431', 'country_id' => '142', 'state_name' => 'Chiapas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2432', 'country_id' => '142', 'state_name' => 'Chihuahua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2433', 'country_id' => '142', 'state_name' => 'Coahuila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2434', 'country_id' => '142', 'state_name' => 'Colima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2435', 'country_id' => '142', 'state_name' => 'Distrito Federal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2436', 'country_id' => '142', 'state_name' => 'Durango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2437', 'country_id' => '142', 'state_name' => 'Estado de Mexico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2438', 'country_id' => '142', 'state_name' => 'Guanajuato', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2439', 'country_id' => '142', 'state_name' => 'Guerrero', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2440', 'country_id' => '142', 'state_name' => 'Hidalgo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2441', 'country_id' => '142', 'state_name' => 'Jalisco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2442', 'country_id' => '142', 'state_name' => 'Mexico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2443', 'country_id' => '142', 'state_name' => 'Michoacan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2444', 'country_id' => '142', 'state_name' => 'Morelos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2445', 'country_id' => '142', 'state_name' => 'Nayarit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2446', 'country_id' => '142', 'state_name' => 'Nuevo Leon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2447', 'country_id' => '142', 'state_name' => 'Oaxaca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2448', 'country_id' => '142', 'state_name' => 'Puebla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2449', 'country_id' => '142', 'state_name' => 'Queretaro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2450', 'country_id' => '142', 'state_name' => 'Quintana Roo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2451', 'country_id' => '142', 'state_name' => 'San Luis Potosi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2452', 'country_id' => '142', 'state_name' => 'Sinaloa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2453', 'country_id' => '142', 'state_name' => 'Sonora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2454', 'country_id' => '142', 'state_name' => 'Tabasco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2455', 'country_id' => '142', 'state_name' => 'Tamaulipas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2456', 'country_id' => '142', 'state_name' => 'Tlaxcala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2457', 'country_id' => '142', 'state_name' => 'Veracruz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2458', 'country_id' => '142', 'state_name' => 'Yucatan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2459', 'country_id' => '142', 'state_name' => 'Zacatecas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2460', 'country_id' => '143', 'state_name' => 'Chuuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2461', 'country_id' => '143', 'state_name' => 'Kusaie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2462', 'country_id' => '143', 'state_name' => 'Pohnpei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2463', 'country_id' => '143', 'state_name' => 'Yap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2464', 'country_id' => '144', 'state_name' => 'Balti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2465', 'country_id' => '144', 'state_name' => 'Cahul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2466', 'country_id' => '144', 'state_name' => 'Chisinau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2467', 'country_id' => '144', 'state_name' => 'Chisinau Oras', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2468', 'country_id' => '144', 'state_name' => 'Edinet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2469', 'country_id' => '144', 'state_name' => 'Gagauzia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2470', 'country_id' => '144', 'state_name' => 'Lapusna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2471', 'country_id' => '144', 'state_name' => 'Orhei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2472', 'country_id' => '144', 'state_name' => 'Soroca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2473', 'country_id' => '144', 'state_name' => 'Taraclia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2474', 'country_id' => '144', 'state_name' => 'Tighina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2475', 'country_id' => '144', 'state_name' => 'Transnistria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2476', 'country_id' => '144', 'state_name' => 'Ungheni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2477', 'country_id' => '145', 'state_name' => 'Fontvieille', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2478', 'country_id' => '145', 'state_name' => 'La Condamine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2479', 'country_id' => '145', 'state_name' => 'Monaco-Ville', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2480', 'country_id' => '145', 'state_name' => 'Monte Carlo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2481', 'country_id' => '146', 'state_name' => 'Arhangaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2482', 'country_id' => '146', 'state_name' => 'Bajan-Olgij', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2483', 'country_id' => '146', 'state_name' => 'Bajanhongor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2484', 'country_id' => '146', 'state_name' => 'Bulgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2485', 'country_id' => '146', 'state_name' => 'Darhan-Uul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2486', 'country_id' => '146', 'state_name' => 'Dornod', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2487', 'country_id' => '146', 'state_name' => 'Dornogovi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2488', 'country_id' => '146', 'state_name' => 'Dundgovi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2489', 'country_id' => '146', 'state_name' => 'Govi-Altaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2490', 'country_id' => '146', 'state_name' => 'Govisumber', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2491', 'country_id' => '146', 'state_name' => 'Hentij', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2492', 'country_id' => '146', 'state_name' => 'Hovd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2493', 'country_id' => '146', 'state_name' => 'Hovsgol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2494', 'country_id' => '146', 'state_name' => 'Omnogovi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2495', 'country_id' => '146', 'state_name' => 'Orhon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2496', 'country_id' => '146', 'state_name' => 'Ovorhangaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2497', 'country_id' => '146', 'state_name' => 'Selenge', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2498', 'country_id' => '146', 'state_name' => 'Suhbaatar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2499', 'country_id' => '146', 'state_name' => 'Tov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2500', 'country_id' => '146', 'state_name' => 'Ulaanbaatar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2501', 'country_id' => '146', 'state_name' => 'Uvs', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2502', 'country_id' => '146', 'state_name' => 'Zavhan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2503', 'country_id' => '147', 'state_name' => 'Montserrat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2504', 'country_id' => '148', 'state_name' => 'Agadir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2505', 'country_id' => '148', 'state_name' => 'Casablanca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2506', 'country_id' => '148', 'state_name' => 'Chaouia-Ouardigha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2507', 'country_id' => '148', 'state_name' => 'Doukkala-Abda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2508', 'country_id' => '148', 'state_name' => 'Fes-Boulemane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2509', 'country_id' => '148', 'state_name' => 'Gharb-Chrarda-Beni Hssen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2510', 'country_id' => '148', 'state_name' => 'Guelmim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2511', 'country_id' => '148', 'state_name' => 'Kenitra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2512', 'country_id' => '148', 'state_name' => 'Marrakech-Tensift-Al Haouz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2513', 'country_id' => '148', 'state_name' => 'Meknes-Tafilalet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2514', 'country_id' => '148', 'state_name' => 'Oriental', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2515', 'country_id' => '148', 'state_name' => 'Oujda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2516', 'country_id' => '148', 'state_name' => 'Province de Tanger', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2517', 'country_id' => '148', 'state_name' => 'Rabat-Sale-Zammour-Zaer', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2518', 'country_id' => '148', 'state_name' => 'Sala Al Jadida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2519', 'country_id' => '148', 'state_name' => 'Settat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2520', 'country_id' => '148', 'state_name' => 'Souss Massa-Draa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2521', 'country_id' => '148', 'state_name' => 'Tadla-Azilal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2522', 'country_id' => '148', 'state_name' => 'Tangier-Tetouan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2523', 'country_id' => '148', 'state_name' => 'Taza-Al Hoceima-Taounate', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2524', 'country_id' => '148', 'state_name' => 'Wilaya de Casablanca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2525', 'country_id' => '148', 'state_name' => 'Wilaya de Rabat-Sale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2526', 'country_id' => '149', 'state_name' => 'Cabo Delgado', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2527', 'country_id' => '149', 'state_name' => 'Gaza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2528', 'country_id' => '149', 'state_name' => 'Inhambane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2529', 'country_id' => '149', 'state_name' => 'Manica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2530', 'country_id' => '149', 'state_name' => 'Maputo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2531', 'country_id' => '149', 'state_name' => 'Maputo Provincia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2532', 'country_id' => '149', 'state_name' => 'Nampula', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2533', 'country_id' => '149', 'state_name' => 'Niassa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2534', 'country_id' => '149', 'state_name' => 'Sofala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2535', 'country_id' => '149', 'state_name' => 'Tete', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2536', 'country_id' => '149', 'state_name' => 'Zambezia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2537', 'country_id' => '150', 'state_name' => 'Ayeyarwady', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2538', 'country_id' => '150', 'state_name' => 'Bago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2539', 'country_id' => '150', 'state_name' => 'Chin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2540', 'country_id' => '150', 'state_name' => 'Kachin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2541', 'country_id' => '150', 'state_name' => 'Kayah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2542', 'country_id' => '150', 'state_name' => 'Kayin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2543', 'country_id' => '150', 'state_name' => 'Magway', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2544', 'country_id' => '150', 'state_name' => 'Mandalay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2545', 'country_id' => '150', 'state_name' => 'Mon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2546', 'country_id' => '150', 'state_name' => 'Nay Pyi Taw', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2547', 'country_id' => '150', 'state_name' => 'Rakhine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2548', 'country_id' => '150', 'state_name' => 'Sagaing', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2549', 'country_id' => '150', 'state_name' => 'Shan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2550', 'country_id' => '150', 'state_name' => 'Tanintharyi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2551', 'country_id' => '150', 'state_name' => 'Yangon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2552', 'country_id' => '151', 'state_name' => 'Caprivi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2553', 'country_id' => '151', 'state_name' => 'Erongo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2554', 'country_id' => '151', 'state_name' => 'Hardap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2555', 'country_id' => '151', 'state_name' => 'Karas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2556', 'country_id' => '151', 'state_name' => 'Kavango', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2557', 'country_id' => '151', 'state_name' => 'Khomas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2558', 'country_id' => '151', 'state_name' => 'Kunene', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2559', 'country_id' => '151', 'state_name' => 'Ohangwena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2560', 'country_id' => '151', 'state_name' => 'Omaheke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2561', 'country_id' => '151', 'state_name' => 'Omusati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2562', 'country_id' => '151', 'state_name' => 'Oshana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2563', 'country_id' => '151', 'state_name' => 'Oshikoto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2564', 'country_id' => '151', 'state_name' => 'Otjozondjupa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2565', 'country_id' => '152', 'state_name' => 'Yaren', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2566', 'country_id' => '153', 'state_name' => 'Bagmati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2567', 'country_id' => '153', 'state_name' => 'Bheri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2568', 'country_id' => '153', 'state_name' => 'Dhawalagiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2569', 'country_id' => '153', 'state_name' => 'Gandaki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2570', 'country_id' => '153', 'state_name' => 'Janakpur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2571', 'country_id' => '153', 'state_name' => 'Karnali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2572', 'country_id' => '153', 'state_name' => 'Koshi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2573', 'country_id' => '153', 'state_name' => 'Lumbini', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2574', 'country_id' => '153', 'state_name' => 'Mahakali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2575', 'country_id' => '153', 'state_name' => 'Mechi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2576', 'country_id' => '153', 'state_name' => 'Narayani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2577', 'country_id' => '153', 'state_name' => 'Rapti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2578', 'country_id' => '153', 'state_name' => 'Sagarmatha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2579', 'country_id' => '153', 'state_name' => 'Seti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2580', 'country_id' => '154', 'state_name' => 'Bonaire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2581', 'country_id' => '154', 'state_name' => 'Curacao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2582', 'country_id' => '154', 'state_name' => 'Saba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2583', 'country_id' => '154', 'state_name' => 'Sint Eustatius', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2584', 'country_id' => '154', 'state_name' => 'Sint Maarten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2585', 'country_id' => '155', 'state_name' => 'Amsterdam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2586', 'country_id' => '155', 'state_name' => 'Benelux', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2587', 'country_id' => '155', 'state_name' => 'Drenthe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2588', 'country_id' => '155', 'state_name' => 'Flevoland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2589', 'country_id' => '155', 'state_name' => 'Friesland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2590', 'country_id' => '155', 'state_name' => 'Gelderland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2591', 'country_id' => '155', 'state_name' => 'Groningen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2592', 'country_id' => '155', 'state_name' => 'Limburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2593', 'country_id' => '155', 'state_name' => 'Noord-Brabant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2594', 'country_id' => '155', 'state_name' => 'Noord-Holland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2595', 'country_id' => '155', 'state_name' => 'Overijssel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2596', 'country_id' => '155', 'state_name' => 'South Holland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2597', 'country_id' => '155', 'state_name' => 'Utrecht', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2598', 'country_id' => '155', 'state_name' => 'Zeeland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2599', 'country_id' => '155', 'state_name' => 'Zuid-Holland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2600', 'country_id' => '156', 'state_name' => 'Iles', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2601', 'country_id' => '156', 'state_name' => 'Nord', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2602', 'country_id' => '156', 'state_name' => 'Sud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2603', 'country_id' => '157', 'state_name' => 'Area Outside Region', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2604', 'country_id' => '157', 'state_name' => 'Auckland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2605', 'country_id' => '157', 'state_name' => 'Bay of Plenty', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2606', 'country_id' => '157', 'state_name' => 'Canterbury', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2607', 'country_id' => '157', 'state_name' => 'Christchurch', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2608', 'country_id' => '157', 'state_name' => 'Gisborne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2609', 'country_id' => '157', 'state_name' => "Hawke"."'"."s Bay", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2610', 'country_id' => '157', 'state_name' => 'Manawatu-Wanganui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2611', 'country_id' => '157', 'state_name' => 'Marlborough', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2612', 'country_id' => '157', 'state_name' => 'Nelson', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2613', 'country_id' => '157', 'state_name' => 'Northland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2614', 'country_id' => '157', 'state_name' => 'Otago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2615', 'country_id' => '157', 'state_name' => 'Rodney', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2616', 'country_id' => '157', 'state_name' => 'Southland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2617', 'country_id' => '157', 'state_name' => 'Taranaki', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2618', 'country_id' => '157', 'state_name' => 'Tasman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2619', 'country_id' => '157', 'state_name' => 'Waikato', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2620', 'country_id' => '157', 'state_name' => 'Wellington', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2621', 'country_id' => '157', 'state_name' => 'West Coast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2622', 'country_id' => '158', 'state_name' => 'Atlantico Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2623', 'country_id' => '158', 'state_name' => 'Atlantico Sur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2624', 'country_id' => '158', 'state_name' => 'Boaco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2625', 'country_id' => '158', 'state_name' => 'Carazo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2626', 'country_id' => '158', 'state_name' => 'Chinandega', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2627', 'country_id' => '158', 'state_name' => 'Chontales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2628', 'country_id' => '158', 'state_name' => 'Esteli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2629', 'country_id' => '158', 'state_name' => 'Granada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2630', 'country_id' => '158', 'state_name' => 'Jinotega', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2631', 'country_id' => '158', 'state_name' => 'Leon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2632', 'country_id' => '158', 'state_name' => 'Madriz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2633', 'country_id' => '158', 'state_name' => 'Managua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2634', 'country_id' => '158', 'state_name' => 'Masaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2635', 'country_id' => '158', 'state_name' => 'Matagalpa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2636', 'country_id' => '158', 'state_name' => 'Nueva Segovia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2637', 'country_id' => '158', 'state_name' => 'Rio San Juan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2638', 'country_id' => '158', 'state_name' => 'Rivas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2639', 'country_id' => '159', 'state_name' => 'Agadez', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2640', 'country_id' => '159', 'state_name' => 'Diffa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2641', 'country_id' => '159', 'state_name' => 'Dosso', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2642', 'country_id' => '159', 'state_name' => 'Maradi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2643', 'country_id' => '159', 'state_name' => 'Niamey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2644', 'country_id' => '159', 'state_name' => 'Tahoua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2645', 'country_id' => '159', 'state_name' => 'Tillabery', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2646', 'country_id' => '159', 'state_name' => 'Zinder', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2647', 'country_id' => '160', 'state_name' => 'Abia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2648', 'country_id' => '160', 'state_name' => 'Abuja Federal Capital Territory', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2649', 'country_id' => '160', 'state_name' => 'Adamawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2650', 'country_id' => '160', 'state_name' => 'Akwa Ibom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2651', 'country_id' => '160', 'state_name' => 'Anambra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2652', 'country_id' => '160', 'state_name' => 'Bauchi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2653', 'country_id' => '160', 'state_name' => 'Bayelsa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2654', 'country_id' => '160', 'state_name' => 'Benue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2655', 'country_id' => '160', 'state_name' => 'Borno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2656', 'country_id' => '160', 'state_name' => 'Cross River', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2657', 'country_id' => '160', 'state_name' => 'Delta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2658', 'country_id' => '160', 'state_name' => 'Ebonyi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2659', 'country_id' => '160', 'state_name' => 'Edo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2660', 'country_id' => '160', 'state_name' => 'Ekiti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2661', 'country_id' => '160', 'state_name' => 'Enugu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2662', 'country_id' => '160', 'state_name' => 'Gombe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2663', 'country_id' => '160', 'state_name' => 'Imo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2664', 'country_id' => '160', 'state_name' => 'Jigawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2665', 'country_id' => '160', 'state_name' => 'Kaduna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2666', 'country_id' => '160', 'state_name' => 'Kano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2667', 'country_id' => '160', 'state_name' => 'Katsina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2668', 'country_id' => '160', 'state_name' => 'Kebbi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2669', 'country_id' => '160', 'state_name' => 'Kogi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2670', 'country_id' => '160', 'state_name' => 'Kwara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2671', 'country_id' => '160', 'state_name' => 'Lagos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2672', 'country_id' => '160', 'state_name' => 'Nassarawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2673', 'country_id' => '160', 'state_name' => 'Niger', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2674', 'country_id' => '160', 'state_name' => 'Ogun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2675', 'country_id' => '160', 'state_name' => 'Ondo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2676', 'country_id' => '160', 'state_name' => 'Osun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2677', 'country_id' => '160', 'state_name' => 'Oyo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2678', 'country_id' => '160', 'state_name' => 'Plateau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2679', 'country_id' => '160', 'state_name' => 'Rivers', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2680', 'country_id' => '160', 'state_name' => 'Sokoto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2681', 'country_id' => '160', 'state_name' => 'Taraba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2682', 'country_id' => '160', 'state_name' => 'Yobe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2683', 'country_id' => '160', 'state_name' => 'Zamfara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2684', 'country_id' => '161', 'state_name' => 'Niue', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2685', 'country_id' => '162', 'state_name' => 'Norfolk Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2686', 'country_id' => '163', 'state_name' => 'Northern Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2687', 'country_id' => '163', 'state_name' => 'Rota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2688', 'country_id' => '163', 'state_name' => 'Saipan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2689', 'country_id' => '163', 'state_name' => 'Tinian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2690', 'country_id' => '164', 'state_name' => 'Akershus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2691', 'country_id' => '164', 'state_name' => 'Aust Agder', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2692', 'country_id' => '164', 'state_name' => 'Bergen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2693', 'country_id' => '164', 'state_name' => 'Buskerud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2694', 'country_id' => '164', 'state_name' => 'Finnmark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2695', 'country_id' => '164', 'state_name' => 'Hedmark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2696', 'country_id' => '164', 'state_name' => 'Hordaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2697', 'country_id' => '164', 'state_name' => 'Moere og Romsdal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2698', 'country_id' => '164', 'state_name' => 'Nord Trondelag', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2699', 'country_id' => '164', 'state_name' => 'Nordland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2700', 'country_id' => '164', 'state_name' => 'Oestfold', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2701', 'country_id' => '164', 'state_name' => 'Oppland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2702', 'country_id' => '164', 'state_name' => 'Oslo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2703', 'country_id' => '164', 'state_name' => 'Rogaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2704', 'country_id' => '164', 'state_name' => 'Soer Troendelag', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2705', 'country_id' => '164', 'state_name' => 'Sogn og Fjordane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2706', 'country_id' => '164', 'state_name' => 'Stavern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2707', 'country_id' => '164', 'state_name' => 'Sykkylven', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2708', 'country_id' => '164', 'state_name' => 'Telemark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2709', 'country_id' => '164', 'state_name' => 'Troms', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2710', 'country_id' => '164', 'state_name' => 'Vest Agder', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2711', 'country_id' => '164', 'state_name' => 'Vestfold', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2712', 'country_id' => '164', 'state_name' => '????stfold', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2713', 'country_id' => '165', 'state_name' => 'Al Buraimi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2714', 'country_id' => '165', 'state_name' => 'Dhufar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2715', 'country_id' => '165', 'state_name' => 'Masqat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2716', 'country_id' => '165', 'state_name' => 'Musandam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2717', 'country_id' => '165', 'state_name' => 'Rusayl', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2718', 'country_id' => '165', 'state_name' => 'Wadi Kabir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2719', 'country_id' => '165', 'state_name' => 'ad-Dakhiliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2720', 'country_id' => '165', 'state_name' => 'adh-Dhahirah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2721', 'country_id' => '165', 'state_name' => 'al-Batinah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2722', 'country_id' => '165', 'state_name' => 'ash-Sharqiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2723', 'country_id' => '166', 'state_name' => 'Baluchistan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2724', 'country_id' => '166', 'state_name' => 'Federal Capital Area', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2725', 'country_id' => '166', 'state_name' => 'Federally administered Tribal ', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2726', 'country_id' => '166', 'state_name' => 'North-West Frontier', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2727', 'country_id' => '166', 'state_name' => 'Northern Areas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2728', 'country_id' => '166', 'state_name' => 'Punjab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2729', 'country_id' => '166', 'state_name' => 'Sind', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2730', 'country_id' => '167', 'state_name' => 'Aimeliik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2731', 'country_id' => '167', 'state_name' => 'Airai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2732', 'country_id' => '167', 'state_name' => 'Angaur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2733', 'country_id' => '167', 'state_name' => 'Hatobohei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2734', 'country_id' => '167', 'state_name' => 'Kayangel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2735', 'country_id' => '167', 'state_name' => 'Koror', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2736', 'country_id' => '167', 'state_name' => 'Melekeok', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2737', 'country_id' => '167', 'state_name' => 'Ngaraard', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2738', 'country_id' => '167', 'state_name' => 'Ngardmau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2739', 'country_id' => '167', 'state_name' => 'Ngaremlengui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2740', 'country_id' => '167', 'state_name' => 'Ngatpang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2741', 'country_id' => '167', 'state_name' => 'Ngchesar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2742', 'country_id' => '167', 'state_name' => 'Ngerchelong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2743', 'country_id' => '167', 'state_name' => 'Ngiwal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2744', 'country_id' => '167', 'state_name' => 'Peleliu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2745', 'country_id' => '167', 'state_name' => 'Sonsorol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2746', 'country_id' => '168', 'state_name' => 'Ariha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2747', 'country_id' => '168', 'state_name' => 'Bayt Lahm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2748', 'country_id' => '168', 'state_name' => 'Bethlehem', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2749', 'country_id' => '168', 'state_name' => 'Dayr-al-Balah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2750', 'country_id' => '168', 'state_name' => 'Ghazzah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2751', 'country_id' => '168', 'state_name' => 'Ghazzah ash-Shamaliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2752', 'country_id' => '168', 'state_name' => 'Janin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2753', 'country_id' => '168', 'state_name' => 'Khan Yunis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2754', 'country_id' => '168', 'state_name' => 'Nabulus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2755', 'country_id' => '168', 'state_name' => 'Qalqilyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2756', 'country_id' => '168', 'state_name' => 'Rafah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2757', 'country_id' => '168', 'state_name' => 'Ram Allah wal-Birah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2758', 'country_id' => '168', 'state_name' => 'Salfit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2759', 'country_id' => '168', 'state_name' => 'Tubas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2760', 'country_id' => '168', 'state_name' => 'Tulkarm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2761', 'country_id' => '168', 'state_name' => 'al-Khalil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2762', 'country_id' => '168', 'state_name' => 'al-Quds', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2763', 'country_id' => '169', 'state_name' => 'Bocas del Toro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2764', 'country_id' => '169', 'state_name' => 'Chiriqui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2765', 'country_id' => '169', 'state_name' => 'Cocle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2766', 'country_id' => '169', 'state_name' => 'Colon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2767', 'country_id' => '169', 'state_name' => 'Darien', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2768', 'country_id' => '169', 'state_name' => 'Embera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2769', 'country_id' => '169', 'state_name' => 'Herrera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2770', 'country_id' => '169', 'state_name' => 'Kuna Yala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2771', 'country_id' => '169', 'state_name' => 'Los Santos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2772', 'country_id' => '169', 'state_name' => 'Ngobe Bugle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2773', 'country_id' => '169', 'state_name' => 'Panama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2774', 'country_id' => '169', 'state_name' => 'Veraguas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2775', 'country_id' => '170', 'state_name' => 'East New Britain', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2776', 'country_id' => '170', 'state_name' => 'East Sepik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2777', 'country_id' => '170', 'state_name' => 'Eastern Highlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2778', 'country_id' => '170', 'state_name' => 'Enga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2779', 'country_id' => '170', 'state_name' => 'Fly River', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2780', 'country_id' => '170', 'state_name' => 'Gulf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2781', 'country_id' => '170', 'state_name' => 'Madang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2782', 'country_id' => '170', 'state_name' => 'Manus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2783', 'country_id' => '170', 'state_name' => 'Milne Bay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2784', 'country_id' => '170', 'state_name' => 'Morobe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2785', 'country_id' => '170', 'state_name' => 'National Capital District', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2786', 'country_id' => '170', 'state_name' => 'New Ireland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2787', 'country_id' => '170', 'state_name' => 'North Solomons', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2788', 'country_id' => '170', 'state_name' => 'Oro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2789', 'country_id' => '170', 'state_name' => 'Sandaun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2790', 'country_id' => '170', 'state_name' => 'Simbu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2791', 'country_id' => '170', 'state_name' => 'Southern Highlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2792', 'country_id' => '170', 'state_name' => 'West New Britain', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2793', 'country_id' => '170', 'state_name' => 'Western Highlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2794', 'country_id' => '171', 'state_name' => 'Alto Paraguay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2795', 'country_id' => '171', 'state_name' => 'Alto Parana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2796', 'country_id' => '171', 'state_name' => 'Amambay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2797', 'country_id' => '171', 'state_name' => 'Asuncion', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2798', 'country_id' => '171', 'state_name' => 'Boqueron', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2799', 'country_id' => '171', 'state_name' => 'Caaguazu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2800', 'country_id' => '171', 'state_name' => 'Caazapa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2801', 'country_id' => '171', 'state_name' => 'Canendiyu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2802', 'country_id' => '171', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2803', 'country_id' => '171', 'state_name' => 'Concepcion', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2804', 'country_id' => '171', 'state_name' => 'Cordillera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2805', 'country_id' => '171', 'state_name' => 'Guaira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2806', 'country_id' => '171', 'state_name' => 'Itapua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2807', 'country_id' => '171', 'state_name' => 'Misiones', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2808', 'country_id' => '171', 'state_name' => 'Neembucu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2809', 'country_id' => '171', 'state_name' => 'Paraguari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2810', 'country_id' => '171', 'state_name' => 'Presidente Hayes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2811', 'country_id' => '171', 'state_name' => 'San Pedro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2812', 'country_id' => '172', 'state_name' => 'Amazonas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2813', 'country_id' => '172', 'state_name' => 'Ancash', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2814', 'country_id' => '172', 'state_name' => 'Apurimac', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2815', 'country_id' => '172', 'state_name' => 'Arequipa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2816', 'country_id' => '172', 'state_name' => 'Ayacucho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2817', 'country_id' => '172', 'state_name' => 'Cajamarca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2818', 'country_id' => '172', 'state_name' => 'Cusco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2819', 'country_id' => '172', 'state_name' => 'Huancavelica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2820', 'country_id' => '172', 'state_name' => 'Huanuco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2821', 'country_id' => '172', 'state_name' => 'Ica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2822', 'country_id' => '172', 'state_name' => 'Junin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2823', 'country_id' => '172', 'state_name' => 'La Libertad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2824', 'country_id' => '172', 'state_name' => 'Lambayeque', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2825', 'country_id' => '172', 'state_name' => 'Lima y Callao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2826', 'country_id' => '172', 'state_name' => 'Loreto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2827', 'country_id' => '172', 'state_name' => 'Madre de Dios', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2828', 'country_id' => '172', 'state_name' => 'Moquegua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2829', 'country_id' => '172', 'state_name' => 'Pasco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2830', 'country_id' => '172', 'state_name' => 'Piura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2831', 'country_id' => '172', 'state_name' => 'Puno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2832', 'country_id' => '172', 'state_name' => 'San Martin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2833', 'country_id' => '172', 'state_name' => 'Tacna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2834', 'country_id' => '172', 'state_name' => 'Tumbes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2835', 'country_id' => '172', 'state_name' => 'Ucayali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2836', 'country_id' => '173', 'state_name' => 'Batangas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2837', 'country_id' => '173', 'state_name' => 'Bicol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2838', 'country_id' => '173', 'state_name' => 'Bulacan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2839', 'country_id' => '173', 'state_name' => 'Cagayan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2840', 'country_id' => '173', 'state_name' => 'Caraga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2841', 'country_id' => '173', 'state_name' => 'Central Luzon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2842', 'country_id' => '173', 'state_name' => 'Central Mindanao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2843', 'country_id' => '173', 'state_name' => 'Central Visayas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2844', 'country_id' => '173', 'state_name' => 'Cordillera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2845', 'country_id' => '173', 'state_name' => 'Davao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2846', 'country_id' => '173', 'state_name' => 'Eastern Visayas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2847', 'country_id' => '173', 'state_name' => 'Greater Metropolitan Area', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2848', 'country_id' => '173', 'state_name' => 'Ilocos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2849', 'country_id' => '173', 'state_name' => 'Laguna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2850', 'country_id' => '173', 'state_name' => 'Luzon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2851', 'country_id' => '173', 'state_name' => 'Mactan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2852', 'country_id' => '173', 'state_name' => 'Metropolitan Manila Area', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2853', 'country_id' => '173', 'state_name' => 'Muslim Mindanao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2854', 'country_id' => '173', 'state_name' => 'Northern Mindanao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2855', 'country_id' => '173', 'state_name' => 'Southern Mindanao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2856', 'country_id' => '173', 'state_name' => 'Southern Tagalog', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2857', 'country_id' => '173', 'state_name' => 'Western Mindanao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2858', 'country_id' => '173', 'state_name' => 'Western Visayas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2859', 'country_id' => '174', 'state_name' => 'Pitcairn Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2860', 'country_id' => '175', 'state_name' => 'Biale Blota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2861', 'country_id' => '175', 'state_name' => 'Dobroszyce', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2862', 'country_id' => '175', 'state_name' => 'Dolnoslaskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2863', 'country_id' => '175', 'state_name' => 'Dziekanow Lesny', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2864', 'country_id' => '175', 'state_name' => 'Hopowo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2865', 'country_id' => '175', 'state_name' => 'Kartuzy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2866', 'country_id' => '175', 'state_name' => 'Koscian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2867', 'country_id' => '175', 'state_name' => 'Krakow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2868', 'country_id' => '175', 'state_name' => 'Kujawsko-Pomorskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2869', 'country_id' => '175', 'state_name' => 'Lodzkie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2870', 'country_id' => '175', 'state_name' => 'Lubelskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2871', 'country_id' => '175', 'state_name' => 'Lubuskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2872', 'country_id' => '175', 'state_name' => 'Malomice', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2873', 'country_id' => '175', 'state_name' => 'Malopolskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2874', 'country_id' => '175', 'state_name' => 'Mazowieckie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2875', 'country_id' => '175', 'state_name' => 'Mirkow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2876', 'country_id' => '175', 'state_name' => 'Opolskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2877', 'country_id' => '175', 'state_name' => 'Ostrowiec', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2878', 'country_id' => '175', 'state_name' => 'Podkarpackie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2879', 'country_id' => '175', 'state_name' => 'Podlaskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2880', 'country_id' => '175', 'state_name' => 'Polska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2881', 'country_id' => '175', 'state_name' => 'Pomorskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2882', 'country_id' => '175', 'state_name' => 'Poznan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2883', 'country_id' => '175', 'state_name' => 'Pruszkow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2884', 'country_id' => '175', 'state_name' => 'Rymanowska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2885', 'country_id' => '175', 'state_name' => 'Rzeszow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2886', 'country_id' => '175', 'state_name' => 'Slaskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2887', 'country_id' => '175', 'state_name' => 'Stare Pole', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2888', 'country_id' => '175', 'state_name' => 'Swietokrzyskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2889', 'country_id' => '175', 'state_name' => 'Warminsko-Mazurskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2890', 'country_id' => '175', 'state_name' => 'Warsaw', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2891', 'country_id' => '175', 'state_name' => 'Wejherowo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2892', 'country_id' => '175', 'state_name' => 'Wielkopolskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2893', 'country_id' => '175', 'state_name' => 'Wroclaw', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2894', 'country_id' => '175', 'state_name' => 'Zachodnio-Pomorskie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2895', 'country_id' => '175', 'state_name' => 'Zukowo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2896', 'country_id' => '176', 'state_name' => 'Abrantes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2897', 'country_id' => '176', 'state_name' => 'Acores', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2898', 'country_id' => '176', 'state_name' => 'Alentejo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2899', 'country_id' => '176', 'state_name' => 'Algarve', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2900', 'country_id' => '176', 'state_name' => 'Braga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2901', 'country_id' => '176', 'state_name' => 'Centro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2902', 'country_id' => '176', 'state_name' => 'Distrito de Leiria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2903', 'country_id' => '176', 'state_name' => 'Distrito de Viana do Castelo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2904', 'country_id' => '176', 'state_name' => 'Distrito de Vila Real', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2905', 'country_id' => '176', 'state_name' => 'Distrito do Porto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2906', 'country_id' => '176', 'state_name' => 'Lisboa e Vale do Tejo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2907', 'country_id' => '176', 'state_name' => 'Madeira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2908', 'country_id' => '176', 'state_name' => 'Norte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2909', 'country_id' => '176', 'state_name' => 'Paivas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2910', 'country_id' => '177', 'state_name' => 'Arecibo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2911', 'country_id' => '177', 'state_name' => 'Bayamon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2912', 'country_id' => '177', 'state_name' => 'Carolina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2913', 'country_id' => '177', 'state_name' => 'Florida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2914', 'country_id' => '177', 'state_name' => 'Guayama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2915', 'country_id' => '177', 'state_name' => 'Humacao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2916', 'country_id' => '177', 'state_name' => 'Mayaguez-Aguadilla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2917', 'country_id' => '177', 'state_name' => 'Ponce', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2918', 'country_id' => '177', 'state_name' => 'Salinas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2919', 'country_id' => '177', 'state_name' => 'San Juan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2920', 'country_id' => '178', 'state_name' => 'Doha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2921', 'country_id' => '178', 'state_name' => 'Jarian-al-Batnah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2922', 'country_id' => '178', 'state_name' => 'Umm Salal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2923', 'country_id' => '178', 'state_name' => 'ad-Dawhah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2924', 'country_id' => '178', 'state_name' => 'al-Ghuwayriyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2925', 'country_id' => '178', 'state_name' => 'al-Jumayliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2926', 'country_id' => '178', 'state_name' => 'al-Khawr', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2927', 'country_id' => '178', 'state_name' => 'al-Wakrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2928', 'country_id' => '178', 'state_name' => 'ar-Rayyan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2929', 'country_id' => '178', 'state_name' => 'ash-Shamal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2930', 'country_id' => '179', 'state_name' => 'Saint-Benoit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2931', 'country_id' => '179', 'state_name' => 'Saint-Denis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2932', 'country_id' => '179', 'state_name' => 'Saint-Paul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2933', 'country_id' => '179', 'state_name' => 'Saint-Pierre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2934', 'country_id' => '180', 'state_name' => 'Alba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2935', 'country_id' => '180', 'state_name' => 'Arad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2936', 'country_id' => '180', 'state_name' => 'Arges', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2937', 'country_id' => '180', 'state_name' => 'Bacau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2938', 'country_id' => '180', 'state_name' => 'Bihor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2939', 'country_id' => '180', 'state_name' => 'Bistrita-Nasaud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2940', 'country_id' => '180', 'state_name' => 'Botosani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2941', 'country_id' => '180', 'state_name' => 'Braila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2942', 'country_id' => '180', 'state_name' => 'Brasov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2943', 'country_id' => '180', 'state_name' => 'Bucuresti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2944', 'country_id' => '180', 'state_name' => 'Buzau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2945', 'country_id' => '180', 'state_name' => 'Calarasi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2946', 'country_id' => '180', 'state_name' => 'Caras-Severin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2947', 'country_id' => '180', 'state_name' => 'Cluj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2948', 'country_id' => '180', 'state_name' => 'Constanta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2949', 'country_id' => '180', 'state_name' => 'Covasna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2950', 'country_id' => '180', 'state_name' => 'Dambovita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2951', 'country_id' => '180', 'state_name' => 'Dolj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2952', 'country_id' => '180', 'state_name' => 'Galati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2953', 'country_id' => '180', 'state_name' => 'Giurgiu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2954', 'country_id' => '180', 'state_name' => 'Gorj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2955', 'country_id' => '180', 'state_name' => 'Harghita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2956', 'country_id' => '180', 'state_name' => 'Hunedoara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2957', 'country_id' => '180', 'state_name' => 'Ialomita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2958', 'country_id' => '180', 'state_name' => 'Iasi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2959', 'country_id' => '180', 'state_name' => 'Ilfov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2960', 'country_id' => '180', 'state_name' => 'Maramures', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2961', 'country_id' => '180', 'state_name' => 'Mehedinti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2962', 'country_id' => '180', 'state_name' => 'Mures', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2963', 'country_id' => '180', 'state_name' => 'Neamt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2964', 'country_id' => '180', 'state_name' => 'Olt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2965', 'country_id' => '180', 'state_name' => 'Prahova', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2966', 'country_id' => '180', 'state_name' => 'Salaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2967', 'country_id' => '180', 'state_name' => 'Satu Mare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2968', 'country_id' => '180', 'state_name' => 'Sibiu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2969', 'country_id' => '180', 'state_name' => 'Sondelor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2970', 'country_id' => '180', 'state_name' => 'Suceava', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2971', 'country_id' => '180', 'state_name' => 'Teleorman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2972', 'country_id' => '180', 'state_name' => 'Timis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2973', 'country_id' => '180', 'state_name' => 'Tulcea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2974', 'country_id' => '180', 'state_name' => 'Valcea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2975', 'country_id' => '180', 'state_name' => 'Vaslui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2976', 'country_id' => '180', 'state_name' => 'Vrancea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2977', 'country_id' => '181', 'state_name' => 'Adygeja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2978', 'country_id' => '181', 'state_name' => 'Aga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2979', 'country_id' => '181', 'state_name' => 'Alanija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2980', 'country_id' => '181', 'state_name' => 'Altaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2981', 'country_id' => '181', 'state_name' => 'Amur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2982', 'country_id' => '181', 'state_name' => 'Arhangelsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2983', 'country_id' => '181', 'state_name' => 'Astrahan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2984', 'country_id' => '181', 'state_name' => 'Bashkortostan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2985', 'country_id' => '181', 'state_name' => 'Belgorod', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2986', 'country_id' => '181', 'state_name' => 'Brjansk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2987', 'country_id' => '181', 'state_name' => 'Burjatija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2988', 'country_id' => '181', 'state_name' => 'Chechenija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2989', 'country_id' => '181', 'state_name' => 'Cheljabinsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2990', 'country_id' => '181', 'state_name' => 'Chita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2991', 'country_id' => '181', 'state_name' => 'Chukotka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2992', 'country_id' => '181', 'state_name' => 'Chuvashija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2993', 'country_id' => '181', 'state_name' => 'Dagestan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2994', 'country_id' => '181', 'state_name' => 'Evenkija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2995', 'country_id' => '181', 'state_name' => 'Gorno-Altaj', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2996', 'country_id' => '181', 'state_name' => 'Habarovsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2997', 'country_id' => '181', 'state_name' => 'Hakasija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2998', 'country_id' => '181', 'state_name' => 'Hanty-Mansija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '2999', 'country_id' => '181', 'state_name' => 'Ingusetija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3000', 'country_id' => '181', 'state_name' => 'Irkutsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3001', 'country_id' => '181', 'state_name' => 'Ivanovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3002', 'country_id' => '181', 'state_name' => 'Jamalo-Nenets', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3003', 'country_id' => '181', 'state_name' => 'Jaroslavl', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3004', 'country_id' => '181', 'state_name' => 'Jevrej', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3005', 'country_id' => '181', 'state_name' => 'Kabardino-Balkarija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3006', 'country_id' => '181', 'state_name' => 'Kaliningrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3007', 'country_id' => '181', 'state_name' => 'Kalmykija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3008', 'country_id' => '181', 'state_name' => 'Kaluga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3009', 'country_id' => '181', 'state_name' => 'Kamchatka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3010', 'country_id' => '181', 'state_name' => 'Karachaj-Cherkessija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3011', 'country_id' => '181', 'state_name' => 'Karelija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3012', 'country_id' => '181', 'state_name' => 'Kemerovo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3013', 'country_id' => '181', 'state_name' => 'Khabarovskiy Kray', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3014', 'country_id' => '181', 'state_name' => 'Kirov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3015', 'country_id' => '181', 'state_name' => 'Komi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3016', 'country_id' => '181', 'state_name' => 'Komi-Permjakija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3017', 'country_id' => '181', 'state_name' => 'Korjakija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3018', 'country_id' => '181', 'state_name' => 'Kostroma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3019', 'country_id' => '181', 'state_name' => 'Krasnodar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3020', 'country_id' => '181', 'state_name' => 'Krasnojarsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3021', 'country_id' => '181', 'state_name' => 'Krasnoyarskiy Kray', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3022', 'country_id' => '181', 'state_name' => 'Kurgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3023', 'country_id' => '181', 'state_name' => 'Kursk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3024', 'country_id' => '181', 'state_name' => 'Leningrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3025', 'country_id' => '181', 'state_name' => 'Lipeck', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3026', 'country_id' => '181', 'state_name' => 'Magadan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3027', 'country_id' => '181', 'state_name' => 'Marij El', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3028', 'country_id' => '181', 'state_name' => 'Mordovija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3029', 'country_id' => '181', 'state_name' => 'Moscow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3030', 'country_id' => '181', 'state_name' => 'Moskovskaja Oblast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3031', 'country_id' => '181', 'state_name' => 'Moskovskaya Oblast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3032', 'country_id' => '181', 'state_name' => 'Moskva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3033', 'country_id' => '181', 'state_name' => 'Murmansk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3034', 'country_id' => '181', 'state_name' => 'Nenets', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3035', 'country_id' => '181', 'state_name' => 'Nizhnij Novgorod', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3036', 'country_id' => '181', 'state_name' => 'Novgorod', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3037', 'country_id' => '181', 'state_name' => 'Novokusnezk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3038', 'country_id' => '181', 'state_name' => 'Novosibirsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3039', 'country_id' => '181', 'state_name' => 'Omsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3040', 'country_id' => '181', 'state_name' => 'Orenburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3041', 'country_id' => '181', 'state_name' => 'Orjol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3042', 'country_id' => '181', 'state_name' => 'Penza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3043', 'country_id' => '181', 'state_name' => 'Perm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3044', 'country_id' => '181', 'state_name' => 'Primorje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3045', 'country_id' => '181', 'state_name' => 'Pskov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3046', 'country_id' => '181', 'state_name' => 'Pskovskaya Oblast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3047', 'country_id' => '181', 'state_name' => 'Rjazan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3048', 'country_id' => '181', 'state_name' => 'Rostov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3049', 'country_id' => '181', 'state_name' => 'Saha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3050', 'country_id' => '181', 'state_name' => 'Sahalin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3051', 'country_id' => '181', 'state_name' => 'Samara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3052', 'country_id' => '181', 'state_name' => 'Samarskaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3053', 'country_id' => '181', 'state_name' => 'Sankt-Peterburg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3054', 'country_id' => '181', 'state_name' => 'Saratov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3055', 'country_id' => '181', 'state_name' => 'Smolensk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3056', 'country_id' => '181', 'state_name' => 'Stavropol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3057', 'country_id' => '181', 'state_name' => 'Sverdlovsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3058', 'country_id' => '181', 'state_name' => 'Tajmyrija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3059', 'country_id' => '181', 'state_name' => 'Tambov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3060', 'country_id' => '181', 'state_name' => 'Tatarstan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3061', 'country_id' => '181', 'state_name' => 'Tjumen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3062', 'country_id' => '181', 'state_name' => 'Tomsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3063', 'country_id' => '181', 'state_name' => 'Tula', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3064', 'country_id' => '181', 'state_name' => 'Tver', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3065', 'country_id' => '181', 'state_name' => 'Tyva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3066', 'country_id' => '181', 'state_name' => 'Udmurtija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3067', 'country_id' => '181', 'state_name' => 'Uljanovsk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3068', 'country_id' => '181', 'state_name' => 'Ulyanovskaya Oblast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3069', 'country_id' => '181', 'state_name' => 'Ust-Orda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3070', 'country_id' => '181', 'state_name' => 'Vladimir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3071', 'country_id' => '181', 'state_name' => 'Volgograd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3072', 'country_id' => '181', 'state_name' => 'Vologda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3073', 'country_id' => '181', 'state_name' => 'Voronezh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3074', 'country_id' => '182', 'state_name' => 'Butare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3075', 'country_id' => '182', 'state_name' => 'Byumba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3076', 'country_id' => '182', 'state_name' => 'Cyangugu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3077', 'country_id' => '182', 'state_name' => 'Gikongoro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3078', 'country_id' => '182', 'state_name' => 'Gisenyi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3079', 'country_id' => '182', 'state_name' => 'Gitarama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3080', 'country_id' => '182', 'state_name' => 'Kibungo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3081', 'country_id' => '182', 'state_name' => 'Kibuye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3082', 'country_id' => '182', 'state_name' => 'Kigali-ngali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3083', 'country_id' => '182', 'state_name' => 'Ruhengeri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3084', 'country_id' => '183', 'state_name' => 'Ascension', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3085', 'country_id' => '183', 'state_name' => 'Gough Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3086', 'country_id' => '183', 'state_name' => 'Saint Helena', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3087', 'country_id' => '183', 'state_name' => 'Tristan da Cunha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3088', 'country_id' => '184', 'state_name' => 'Christ Church Nichola Town', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3089', 'country_id' => '184', 'state_name' => 'Saint Anne Sandy Point', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3090', 'country_id' => '184', 'state_name' => 'Saint George Basseterre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3091', 'country_id' => '184', 'state_name' => 'Saint George Gingerland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3092', 'country_id' => '184', 'state_name' => 'Saint James Windward', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3093', 'country_id' => '184', 'state_name' => 'Saint John Capesterre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3094', 'country_id' => '184', 'state_name' => 'Saint John Figtree', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3095', 'country_id' => '184', 'state_name' => 'Saint Mary Cayon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3096', 'country_id' => '184', 'state_name' => 'Saint Paul Capesterre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3097', 'country_id' => '184', 'state_name' => 'Saint Paul Charlestown', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3098', 'country_id' => '184', 'state_name' => 'Saint Peter Basseterre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3099', 'country_id' => '184', 'state_name' => 'Saint Thomas Lowland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3100', 'country_id' => '184', 'state_name' => 'Saint Thomas Middle Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3101', 'country_id' => '184', 'state_name' => 'Trinity Palmetto Point', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3102', 'country_id' => '185', 'state_name' => 'Anse-la-Raye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3103', 'country_id' => '185', 'state_name' => 'Canaries', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3104', 'country_id' => '185', 'state_name' => 'Castries', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3105', 'country_id' => '185', 'state_name' => 'Choiseul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3106', 'country_id' => '185', 'state_name' => 'Dennery', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3107', 'country_id' => '185', 'state_name' => 'Gros Inlet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3108', 'country_id' => '185', 'state_name' => 'Laborie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3109', 'country_id' => '185', 'state_name' => 'Micoud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3110', 'country_id' => '185', 'state_name' => 'Soufriere', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3111', 'country_id' => '185', 'state_name' => 'Vieux Fort', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3112', 'country_id' => '186', 'state_name' => 'Miquelon-Langlade', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3113', 'country_id' => '186', 'state_name' => 'Saint-Pierre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3114', 'country_id' => '187', 'state_name' => 'Charlotte', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3115', 'country_id' => '187', 'state_name' => 'Grenadines', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3116', 'country_id' => '187', 'state_name' => 'Saint Andrew', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3117', 'country_id' => '187', 'state_name' => 'Saint David', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3118', 'country_id' => '187', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3119', 'country_id' => '187', 'state_name' => 'Saint Patrick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3120', 'country_id' => '188', 'state_name' => "A"."'"."ana", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3121', 'country_id' => '188', 'state_name' => 'Aiga-i-le-Tai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3122', 'country_id' => '188', 'state_name' => 'Atua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3123', 'country_id' => '188', 'state_name' => "Fa"."'"."asaleleaga", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3124', 'country_id' => '188', 'state_name' => "Gaga"."'"."emauga", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3125', 'country_id' => '188', 'state_name' => 'Gagaifomauga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3126', 'country_id' => '188', 'state_name' => 'Palauli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3127', 'country_id' => '188', 'state_name' => "Satupa"."'"."itea", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3128', 'country_id' => '188', 'state_name' => 'Tuamasaga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3129', 'country_id' => '188', 'state_name' => "Va"."'"."a-o-Fonoti", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3130', 'country_id' => '188', 'state_name' => 'Vaisigano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3131', 'country_id' => '189', 'state_name' => 'Acquaviva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3132', 'country_id' => '189', 'state_name' => 'Borgo Maggiore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3133', 'country_id' => '189', 'state_name' => 'Chiesanuova', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3134', 'country_id' => '189', 'state_name' => 'Domagnano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3135', 'country_id' => '189', 'state_name' => 'Faetano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3136', 'country_id' => '189', 'state_name' => 'Fiorentino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3137', 'country_id' => '189', 'state_name' => 'Montegiardino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3138', 'country_id' => '189', 'state_name' => 'San Marino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3139', 'country_id' => '189', 'state_name' => 'Serravalle', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3140', 'country_id' => '190', 'state_name' => 'Agua Grande', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3141', 'country_id' => '190', 'state_name' => 'Cantagalo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3142', 'country_id' => '190', 'state_name' => 'Lemba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3143', 'country_id' => '190', 'state_name' => 'Lobata', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3144', 'country_id' => '190', 'state_name' => 'Me-Zochi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3145', 'country_id' => '190', 'state_name' => 'Pague', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3146', 'country_id' => '191', 'state_name' => 'Al Khobar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3147', 'country_id' => '191', 'state_name' => 'Aseer', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3148', 'country_id' => '191', 'state_name' => 'Ash Sharqiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3149', 'country_id' => '191', 'state_name' => 'Asir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3150', 'country_id' => '191', 'state_name' => 'Central Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3151', 'country_id' => '191', 'state_name' => 'Eastern Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3152', 'country_id' => '191', 'state_name' => "Ha"."'"."il", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3153', 'country_id' => '191', 'state_name' => 'Jawf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3154', 'country_id' => '191', 'state_name' => 'Jizan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3155', 'country_id' => '191', 'state_name' => 'Makkah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3156', 'country_id' => '191', 'state_name' => 'Najran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3157', 'country_id' => '191', 'state_name' => 'Qasim', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3158', 'country_id' => '191', 'state_name' => 'Tabuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3159', 'country_id' => '191', 'state_name' => 'Western Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3160', 'country_id' => '191', 'state_name' => 'al-Bahah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3161', 'country_id' => '191', 'state_name' => 'al-Hudud-ash-Shamaliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3162', 'country_id' => '191', 'state_name' => 'al-Madinah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3163', 'country_id' => '191', 'state_name' => 'ar-Riyad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3164', 'country_id' => '192', 'state_name' => 'Dakar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3165', 'country_id' => '192', 'state_name' => 'Diourbel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3166', 'country_id' => '192', 'state_name' => 'Fatick', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3167', 'country_id' => '192', 'state_name' => 'Kaolack', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3168', 'country_id' => '192', 'state_name' => 'Kolda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3169', 'country_id' => '192', 'state_name' => 'Louga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3170', 'country_id' => '192', 'state_name' => 'Saint-Louis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3171', 'country_id' => '192', 'state_name' => 'Tambacounda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3172', 'country_id' => '192', 'state_name' => 'Thies', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3173', 'country_id' => '192', 'state_name' => 'Ziguinchor', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3174', 'country_id' => '193', 'state_name' => 'Central Serbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3175', 'country_id' => '193', 'state_name' => 'Kosovo and Metohija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3176', 'country_id' => '193', 'state_name' => 'Vojvodina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3177', 'country_id' => '194', 'state_name' => 'Anse Boileau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3178', 'country_id' => '194', 'state_name' => 'Anse Royale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3179', 'country_id' => '194', 'state_name' => 'Cascade', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3180', 'country_id' => '194', 'state_name' => 'Takamaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3181', 'country_id' => '194', 'state_name' => 'Victoria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3182', 'country_id' => '195', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3183', 'country_id' => '195', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3184', 'country_id' => '195', 'state_name' => 'Southern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3185', 'country_id' => '195', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3186', 'country_id' => '196', 'state_name' => 'Singapore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3187', 'country_id' => '197', 'state_name' => 'Banskobystricky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3188', 'country_id' => '197', 'state_name' => 'Bratislavsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3189', 'country_id' => '197', 'state_name' => 'Kosicky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3190', 'country_id' => '197', 'state_name' => 'Nitriansky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3191', 'country_id' => '197', 'state_name' => 'Presovsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3192', 'country_id' => '197', 'state_name' => 'Trenciansky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3193', 'country_id' => '197', 'state_name' => 'Trnavsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3194', 'country_id' => '197', 'state_name' => 'Zilinsky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3195', 'country_id' => '198', 'state_name' => 'Benedikt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3196', 'country_id' => '198', 'state_name' => 'Gorenjska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3197', 'country_id' => '198', 'state_name' => 'Gorishka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3198', 'country_id' => '198', 'state_name' => 'Jugovzhodna Slovenija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3199', 'country_id' => '198', 'state_name' => 'Koroshka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3200', 'country_id' => '198', 'state_name' => 'Notranjsko-krashka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3201', 'country_id' => '198', 'state_name' => 'Obalno-krashka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3202', 'country_id' => '198', 'state_name' => 'Obcina Domzale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3203', 'country_id' => '198', 'state_name' => 'Obcina Vitanje', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3204', 'country_id' => '198', 'state_name' => 'Osrednjeslovenska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3205', 'country_id' => '198', 'state_name' => 'Podravska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3206', 'country_id' => '198', 'state_name' => 'Pomurska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3207', 'country_id' => '198', 'state_name' => 'Savinjska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3208', 'country_id' => '198', 'state_name' => 'Slovenian Littoral', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3209', 'country_id' => '198', 'state_name' => 'Spodnjeposavska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3210', 'country_id' => '198', 'state_name' => 'Zasavska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3211', 'country_id' => '199', 'state_name' => 'Pitcairn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3212', 'country_id' => '200', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3213', 'country_id' => '200', 'state_name' => 'Choiseul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3214', 'country_id' => '200', 'state_name' => 'Guadalcanal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3215', 'country_id' => '200', 'state_name' => 'Isabel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3216', 'country_id' => '200', 'state_name' => 'Makira and Ulawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3217', 'country_id' => '200', 'state_name' => 'Malaita', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3218', 'country_id' => '200', 'state_name' => 'Rennell and Bellona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3219', 'country_id' => '200', 'state_name' => 'Temotu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3220', 'country_id' => '200', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3221', 'country_id' => '201', 'state_name' => 'Awdal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3222', 'country_id' => '201', 'state_name' => 'Bakol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3223', 'country_id' => '201', 'state_name' => 'Banadir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3224', 'country_id' => '201', 'state_name' => 'Bari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3225', 'country_id' => '201', 'state_name' => 'Bay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3226', 'country_id' => '201', 'state_name' => 'Galgudug', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3227', 'country_id' => '201', 'state_name' => 'Gedo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3228', 'country_id' => '201', 'state_name' => 'Hiran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3229', 'country_id' => '201', 'state_name' => 'Jubbada Hose', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3230', 'country_id' => '201', 'state_name' => 'Jubbadha Dexe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3231', 'country_id' => '201', 'state_name' => 'Mudug', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3232', 'country_id' => '201', 'state_name' => 'Nugal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3233', 'country_id' => '201', 'state_name' => 'Sanag', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3234', 'country_id' => '201', 'state_name' => 'Shabellaha Dhexe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3235', 'country_id' => '201', 'state_name' => 'Shabellaha Hose', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3236', 'country_id' => '201', 'state_name' => 'Togdher', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3237', 'country_id' => '201', 'state_name' => 'Woqoyi Galbed', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3238', 'country_id' => '202', 'state_name' => 'Eastern Cape', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3239', 'country_id' => '202', 'state_name' => 'Free State', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3240', 'country_id' => '202', 'state_name' => 'Gauteng', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3241', 'country_id' => '202', 'state_name' => 'Kempton Park', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3242', 'country_id' => '202', 'state_name' => 'Kramerville', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3243', 'country_id' => '202', 'state_name' => 'KwaZulu Natal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3244', 'country_id' => '202', 'state_name' => 'Limpopo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3245', 'country_id' => '202', 'state_name' => 'Mpumalanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3246', 'country_id' => '202', 'state_name' => 'North West', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3247', 'country_id' => '202', 'state_name' => 'Northern Cape', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3248', 'country_id' => '202', 'state_name' => 'Parow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3249', 'country_id' => '202', 'state_name' => 'Table View', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3250', 'country_id' => '202', 'state_name' => 'Umtentweni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3251', 'country_id' => '202', 'state_name' => 'Western Cape', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3252', 'country_id' => '203', 'state_name' => 'South Georgia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3253', 'country_id' => '204', 'state_name' => 'Central Equatoria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3254', 'country_id' => '205', 'state_name' => 'A Coruna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3255', 'country_id' => '205', 'state_name' => 'Alacant', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3256', 'country_id' => '205', 'state_name' => 'Alava', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3257', 'country_id' => '205', 'state_name' => 'Albacete', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3258', 'country_id' => '205', 'state_name' => 'Almeria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3260', 'country_id' => '205', 'state_name' => 'Asturias', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3261', 'country_id' => '205', 'state_name' => 'Avila', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3262', 'country_id' => '205', 'state_name' => 'Badajoz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3263', 'country_id' => '205', 'state_name' => 'Balears', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3264', 'country_id' => '205', 'state_name' => 'Barcelona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3267', 'country_id' => '205', 'state_name' => 'Burgos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3268', 'country_id' => '205', 'state_name' => 'Caceres', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3269', 'country_id' => '205', 'state_name' => 'Cadiz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3270', 'country_id' => '205', 'state_name' => 'Cantabria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3271', 'country_id' => '205', 'state_name' => 'Castello', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3273', 'country_id' => '205', 'state_name' => 'Ceuta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3274', 'country_id' => '205', 'state_name' => 'Ciudad Real', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3281', 'country_id' => '205', 'state_name' => 'Cordoba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3282', 'country_id' => '205', 'state_name' => 'Cuenca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3284', 'country_id' => '205', 'state_name' => 'Girona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3285', 'country_id' => '205', 'state_name' => 'Granada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3286', 'country_id' => '205', 'state_name' => 'Guadalajara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3287', 'country_id' => '205', 'state_name' => 'Guipuzcoa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3288', 'country_id' => '205', 'state_name' => 'Huelva', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3289', 'country_id' => '205', 'state_name' => 'Huesca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3290', 'country_id' => '205', 'state_name' => 'Jaen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3291', 'country_id' => '205', 'state_name' => 'La Rioja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3292', 'country_id' => '205', 'state_name' => 'Las Palmas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3293', 'country_id' => '205', 'state_name' => 'Leon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3295', 'country_id' => '205', 'state_name' => 'Lleida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3296', 'country_id' => '205', 'state_name' => 'Lugo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3297', 'country_id' => '205', 'state_name' => 'Madrid', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3298', 'country_id' => '205', 'state_name' => 'Malaga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3299', 'country_id' => '205', 'state_name' => 'Melilla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3300', 'country_id' => '205', 'state_name' => 'Murcia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3301', 'country_id' => '205', 'state_name' => 'Navarra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3302', 'country_id' => '205', 'state_name' => 'Ourense', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3303', 'country_id' => '205', 'state_name' => 'Pais Vasco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3304', 'country_id' => '205', 'state_name' => 'Palencia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3305', 'country_id' => '205', 'state_name' => 'Pontevedra', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3306', 'country_id' => '205', 'state_name' => 'Salamanca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3308', 'country_id' => '205', 'state_name' => 'Segovia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3309', 'country_id' => '205', 'state_name' => 'Sevilla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3310', 'country_id' => '205', 'state_name' => 'Soria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3311', 'country_id' => '205', 'state_name' => 'Tarragona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3312', 'country_id' => '205', 'state_name' => 'Santa Cruz de Tenerife', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3313', 'country_id' => '205', 'state_name' => 'Teruel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3314', 'country_id' => '205', 'state_name' => 'Toledo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3315', 'country_id' => '205', 'state_name' => 'Valencia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3316', 'country_id' => '205', 'state_name' => 'Valladolid', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3317', 'country_id' => '205', 'state_name' => 'Vizcaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3318', 'country_id' => '205', 'state_name' => 'Zamora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3319', 'country_id' => '205', 'state_name' => 'Zaragoza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3320', 'country_id' => '206', 'state_name' => 'Amparai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3321', 'country_id' => '206', 'state_name' => 'Anuradhapuraya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3322', 'country_id' => '206', 'state_name' => 'Badulla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3323', 'country_id' => '206', 'state_name' => 'Boralesgamuwa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3324', 'country_id' => '206', 'state_name' => 'Colombo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3325', 'country_id' => '206', 'state_name' => 'Galla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3326', 'country_id' => '206', 'state_name' => 'Gampaha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3327', 'country_id' => '206', 'state_name' => 'Hambantota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3328', 'country_id' => '206', 'state_name' => 'Kalatura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3329', 'country_id' => '206', 'state_name' => 'Kegalla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3330', 'country_id' => '206', 'state_name' => 'Kilinochchi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3331', 'country_id' => '206', 'state_name' => 'Kurunegala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3332', 'country_id' => '206', 'state_name' => 'Madakalpuwa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3333', 'country_id' => '206', 'state_name' => 'Maha Nuwara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3334', 'country_id' => '206', 'state_name' => 'Malwana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3335', 'country_id' => '206', 'state_name' => 'Mannarama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3336', 'country_id' => '206', 'state_name' => 'Matale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3337', 'country_id' => '206', 'state_name' => 'Matara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3338', 'country_id' => '206', 'state_name' => 'Monaragala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3339', 'country_id' => '206', 'state_name' => 'Mullaitivu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3340', 'country_id' => '206', 'state_name' => 'North Eastern Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3341', 'country_id' => '206', 'state_name' => 'North Western Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3342', 'country_id' => '206', 'state_name' => 'Nuwara Eliya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3343', 'country_id' => '206', 'state_name' => 'Polonnaruwa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3344', 'country_id' => '206', 'state_name' => 'Puttalama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3345', 'country_id' => '206', 'state_name' => 'Ratnapuraya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3346', 'country_id' => '206', 'state_name' => 'Southern Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3347', 'country_id' => '206', 'state_name' => 'Tirikunamalaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3348', 'country_id' => '206', 'state_name' => 'Tuscany', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3349', 'country_id' => '206', 'state_name' => 'Vavuniyawa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3350', 'country_id' => '206', 'state_name' => 'Western Province', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3351', 'country_id' => '206', 'state_name' => 'Yapanaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3352', 'country_id' => '206', 'state_name' => 'kadawatha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3353', 'country_id' => '207', 'state_name' => "A"."'"."ali-an-Nil", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3354', 'country_id' => '207', 'state_name' => 'Bahr-al-Jabal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3355', 'country_id' => '207', 'state_name' => 'Central Equatoria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3356', 'country_id' => '207', 'state_name' => 'Gharb Bahr-al-Ghazal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3357', 'country_id' => '207', 'state_name' => 'Gharb Darfur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3358', 'country_id' => '207', 'state_name' => 'Gharb Kurdufan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3359', 'country_id' => '207', 'state_name' => "Gharb-al-Istiwa"."'"."iyah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3360', 'country_id' => '207', 'state_name' => 'Janub Darfur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3361', 'country_id' => '207', 'state_name' => 'Janub Kurdufan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3362', 'country_id' => '207', 'state_name' => 'Junqali', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3363', 'country_id' => '207', 'state_name' => 'Kassala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3364', 'country_id' => '207', 'state_name' => 'Nahr-an-Nil', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3365', 'country_id' => '207', 'state_name' => 'Shamal Bahr-al-Ghazal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3366', 'country_id' => '207', 'state_name' => 'Shamal Darfur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3367', 'country_id' => '207', 'state_name' => 'Shamal Kurdufan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3368', 'country_id' => '207', 'state_name' => "Sharq-al-Istiwa"."'"."iyah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3369', 'country_id' => '207', 'state_name' => 'Sinnar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3370', 'country_id' => '207', 'state_name' => 'Warab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3371', 'country_id' => '207', 'state_name' => 'Wilayat al Khartum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3372', 'country_id' => '207', 'state_name' => 'al-Bahr-al-Ahmar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3373', 'country_id' => '207', 'state_name' => 'al-Buhayrat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3374', 'country_id' => '207', 'state_name' => 'al-Jazirah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3375', 'country_id' => '207', 'state_name' => 'al-Khartum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3376', 'country_id' => '207', 'state_name' => 'al-Qadarif', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3377', 'country_id' => '207', 'state_name' => 'al-Wahdah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3378', 'country_id' => '207', 'state_name' => 'an-Nil-al-Abyad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3379', 'country_id' => '207', 'state_name' => 'an-Nil-al-Azraq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3380', 'country_id' => '207', 'state_name' => 'ash-Shamaliyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3381', 'country_id' => '208', 'state_name' => 'Brokopondo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3382', 'country_id' => '208', 'state_name' => 'Commewijne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3383', 'country_id' => '208', 'state_name' => 'Coronie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3384', 'country_id' => '208', 'state_name' => 'Marowijne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3385', 'country_id' => '208', 'state_name' => 'Nickerie', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3386', 'country_id' => '208', 'state_name' => 'Para', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3387', 'country_id' => '208', 'state_name' => 'Paramaribo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3388', 'country_id' => '208', 'state_name' => 'Saramacca', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3389', 'country_id' => '208', 'state_name' => 'Wanica', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3390', 'country_id' => '209', 'state_name' => 'Svalbard', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3391', 'country_id' => '210', 'state_name' => 'Hhohho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3392', 'country_id' => '210', 'state_name' => 'Lubombo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3393', 'country_id' => '210', 'state_name' => 'Manzini', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3394', 'country_id' => '210', 'state_name' => 'Shiselweni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3395', 'country_id' => '211', 'state_name' => 'Alvsborgs Lan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3396', 'country_id' => '211', 'state_name' => 'Angermanland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3397', 'country_id' => '211', 'state_name' => 'Blekinge', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3398', 'country_id' => '211', 'state_name' => 'Bohuslan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3399', 'country_id' => '211', 'state_name' => 'Dalarna', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3400', 'country_id' => '211', 'state_name' => 'Gavleborg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3401', 'country_id' => '211', 'state_name' => 'Gaza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3402', 'country_id' => '211', 'state_name' => 'Gotland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3403', 'country_id' => '211', 'state_name' => 'Halland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3404', 'country_id' => '211', 'state_name' => 'Jamtland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3405', 'country_id' => '211', 'state_name' => 'Jonkoping', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3406', 'country_id' => '211', 'state_name' => 'Kalmar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3407', 'country_id' => '211', 'state_name' => 'Kristianstads', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3408', 'country_id' => '211', 'state_name' => 'Kronoberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3409', 'country_id' => '211', 'state_name' => 'Norrbotten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3410', 'country_id' => '211', 'state_name' => 'Orebro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3411', 'country_id' => '211', 'state_name' => 'Ostergotland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3412', 'country_id' => '211', 'state_name' => 'Saltsjo-Boo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3413', 'country_id' => '211', 'state_name' => 'Skane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3414', 'country_id' => '211', 'state_name' => 'Smaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3415', 'country_id' => '211', 'state_name' => 'Sodermanland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3416', 'country_id' => '211', 'state_name' => 'Stockholm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3417', 'country_id' => '211', 'state_name' => 'Uppsala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3418', 'country_id' => '211', 'state_name' => 'Varmland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3419', 'country_id' => '211', 'state_name' => 'Vasterbotten', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3420', 'country_id' => '211', 'state_name' => 'Vastergotland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3421', 'country_id' => '211', 'state_name' => 'Vasternorrland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3422', 'country_id' => '211', 'state_name' => 'Vastmanland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3423', 'country_id' => '211', 'state_name' => 'Vastra Gotaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3424', 'country_id' => '212', 'state_name' => 'Aargau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3425', 'country_id' => '212', 'state_name' => 'Appenzell Inner-Rhoden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3426', 'country_id' => '212', 'state_name' => 'Appenzell-Ausser Rhoden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3427', 'country_id' => '212', 'state_name' => 'Basel-Landschaft', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3428', 'country_id' => '212', 'state_name' => 'Basel-Stadt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3429', 'country_id' => '212', 'state_name' => 'Bern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3430', 'country_id' => '212', 'state_name' => 'Canton Ticino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3431', 'country_id' => '212', 'state_name' => 'Fribourg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3432', 'country_id' => '212', 'state_name' => 'Geneve', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3433', 'country_id' => '212', 'state_name' => 'Glarus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3434', 'country_id' => '212', 'state_name' => 'Graubunden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3435', 'country_id' => '212', 'state_name' => 'Heerbrugg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3436', 'country_id' => '212', 'state_name' => 'Jura', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3437', 'country_id' => '212', 'state_name' => 'Kanton Aargau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3438', 'country_id' => '212', 'state_name' => 'Luzern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3439', 'country_id' => '212', 'state_name' => 'Morbio Inferiore', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3440', 'country_id' => '212', 'state_name' => 'Muhen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3441', 'country_id' => '212', 'state_name' => 'Neuchatel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3442', 'country_id' => '212', 'state_name' => 'Nidwalden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3443', 'country_id' => '212', 'state_name' => 'Obwalden', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3444', 'country_id' => '212', 'state_name' => 'Sankt Gallen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3445', 'country_id' => '212', 'state_name' => 'Schaffhausen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3446', 'country_id' => '212', 'state_name' => 'Schwyz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3447', 'country_id' => '212', 'state_name' => 'Solothurn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3448', 'country_id' => '212', 'state_name' => 'Thurgau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3449', 'country_id' => '212', 'state_name' => 'Ticino', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3450', 'country_id' => '212', 'state_name' => 'Uri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3451', 'country_id' => '212', 'state_name' => 'Valais', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3452', 'country_id' => '212', 'state_name' => 'Vaud', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3453', 'country_id' => '212', 'state_name' => 'Vauffelin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3454', 'country_id' => '212', 'state_name' => 'Zug', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3455', 'country_id' => '212', 'state_name' => 'Zurich', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3456', 'country_id' => '213', 'state_name' => 'Aleppo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3457', 'country_id' => '213', 'state_name' => "Dar"."'"."a", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3458', 'country_id' => '213', 'state_name' => 'Dayr-az-Zawr', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3459', 'country_id' => '213', 'state_name' => 'Dimashq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3460', 'country_id' => '213', 'state_name' => 'Halab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3461', 'country_id' => '213', 'state_name' => 'Hamah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3462', 'country_id' => '213', 'state_name' => 'Hims', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3463', 'country_id' => '213', 'state_name' => 'Idlib', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3464', 'country_id' => '213', 'state_name' => 'Madinat Dimashq', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3465', 'country_id' => '213', 'state_name' => 'Tartus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3466', 'country_id' => '213', 'state_name' => 'al-Hasakah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3467', 'country_id' => '213', 'state_name' => 'al-Ladhiqiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3468', 'country_id' => '213', 'state_name' => 'al-Qunaytirah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3469', 'country_id' => '213', 'state_name' => 'ar-Raqqah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3470', 'country_id' => '213', 'state_name' => 'as-Suwayda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3471', 'country_id' => '214', 'state_name' => 'Changhua County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3472', 'country_id' => '214', 'state_name' => 'Chiayi County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3473', 'country_id' => '214', 'state_name' => 'Chiayi City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3474', 'country_id' => '214', 'state_name' => 'Taipei City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3475', 'country_id' => '214', 'state_name' => 'Hsinchu County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3476', 'country_id' => '214', 'state_name' => 'Hsinchu City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3477', 'country_id' => '214', 'state_name' => 'Hualien County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3480', 'country_id' => '214', 'state_name' => 'Kaohsiung City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3481', 'country_id' => '214', 'state_name' => 'Keelung City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3482', 'country_id' => '214', 'state_name' => 'Kinmen County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3483', 'country_id' => '214', 'state_name' => 'Miaoli County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3484', 'country_id' => '214', 'state_name' => 'Nantou County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3486', 'country_id' => '214', 'state_name' => 'Penghu County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3487', 'country_id' => '214', 'state_name' => 'Pingtung County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3488', 'country_id' => '214', 'state_name' => 'Taichung City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3492', 'country_id' => '214', 'state_name' => 'Tainan City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3493', 'country_id' => '214', 'state_name' => 'New Taipei City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3495', 'country_id' => '214', 'state_name' => 'Taitung County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3496', 'country_id' => '214', 'state_name' => 'Taoyuan City', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3497', 'country_id' => '214', 'state_name' => 'Yilan County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3498', 'country_id' => '214', 'state_name' => 'YunLin County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3500', 'country_id' => '215', 'state_name' => 'Dushanbe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3501', 'country_id' => '215', 'state_name' => 'Gorno-Badakhshan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3502', 'country_id' => '215', 'state_name' => 'Karotegin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3503', 'country_id' => '215', 'state_name' => 'Khatlon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3504', 'country_id' => '215', 'state_name' => 'Sughd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3505', 'country_id' => '216', 'state_name' => 'Arusha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3506', 'country_id' => '216', 'state_name' => 'Dar es Salaam', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3507', 'country_id' => '216', 'state_name' => 'Dodoma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3508', 'country_id' => '216', 'state_name' => 'Iringa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3509', 'country_id' => '216', 'state_name' => 'Kagera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3510', 'country_id' => '216', 'state_name' => 'Kigoma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3511', 'country_id' => '216', 'state_name' => 'Kilimanjaro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3512', 'country_id' => '216', 'state_name' => 'Lindi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3513', 'country_id' => '216', 'state_name' => 'Mara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3514', 'country_id' => '216', 'state_name' => 'Mbeya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3515', 'country_id' => '216', 'state_name' => 'Morogoro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3516', 'country_id' => '216', 'state_name' => 'Mtwara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3517', 'country_id' => '216', 'state_name' => 'Mwanza', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3518', 'country_id' => '216', 'state_name' => 'Pwani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3519', 'country_id' => '216', 'state_name' => 'Rukwa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3520', 'country_id' => '216', 'state_name' => 'Ruvuma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3521', 'country_id' => '216', 'state_name' => 'Shinyanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3522', 'country_id' => '216', 'state_name' => 'Singida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3523', 'country_id' => '216', 'state_name' => 'Tabora', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3524', 'country_id' => '216', 'state_name' => 'Tanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3525', 'country_id' => '216', 'state_name' => 'Zanzibar and Pemba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3526', 'country_id' => '217', 'state_name' => 'Amnat Charoen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3527', 'country_id' => '217', 'state_name' => 'Ang Thong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3528', 'country_id' => '217', 'state_name' => 'Bangkok', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3529', 'country_id' => '217', 'state_name' => 'Buri Ram', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3530', 'country_id' => '217', 'state_name' => 'Chachoengsao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3531', 'country_id' => '217', 'state_name' => 'Chai Nat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3532', 'country_id' => '217', 'state_name' => 'Chaiyaphum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3533', 'country_id' => '217', 'state_name' => 'Changwat Chaiyaphum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3534', 'country_id' => '217', 'state_name' => 'Chanthaburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3535', 'country_id' => '217', 'state_name' => 'Chiang Mai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3536', 'country_id' => '217', 'state_name' => 'Chiang Rai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3537', 'country_id' => '217', 'state_name' => 'Chon Buri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3538', 'country_id' => '217', 'state_name' => 'Chumphon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3539', 'country_id' => '217', 'state_name' => 'Kalasin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3540', 'country_id' => '217', 'state_name' => 'Kamphaeng Phet', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3541', 'country_id' => '217', 'state_name' => 'Kanchanaburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3542', 'country_id' => '217', 'state_name' => 'Khon Kaen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3543', 'country_id' => '217', 'state_name' => 'Krabi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3544', 'country_id' => '217', 'state_name' => 'Krung Thep', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3545', 'country_id' => '217', 'state_name' => 'Lampang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3546', 'country_id' => '217', 'state_name' => 'Lamphun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3547', 'country_id' => '217', 'state_name' => 'Loei', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3548', 'country_id' => '217', 'state_name' => 'Lop Buri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3549', 'country_id' => '217', 'state_name' => 'Mae Hong Son', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3550', 'country_id' => '217', 'state_name' => 'Maha Sarakham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3551', 'country_id' => '217', 'state_name' => 'Mukdahan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3552', 'country_id' => '217', 'state_name' => 'Nakhon Nayok', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3553', 'country_id' => '217', 'state_name' => 'Nakhon Pathom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3554', 'country_id' => '217', 'state_name' => 'Nakhon Phanom', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3555', 'country_id' => '217', 'state_name' => 'Nakhon Ratchasima', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3556', 'country_id' => '217', 'state_name' => 'Nakhon Sawan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3557', 'country_id' => '217', 'state_name' => 'Nakhon Si Thammarat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3558', 'country_id' => '217', 'state_name' => 'Nan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3559', 'country_id' => '217', 'state_name' => 'Narathiwat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3560', 'country_id' => '217', 'state_name' => 'Nong Bua Lam Phu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3561', 'country_id' => '217', 'state_name' => 'Nong Khai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3562', 'country_id' => '217', 'state_name' => 'Nonthaburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3563', 'country_id' => '217', 'state_name' => 'Pathum Thani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3564', 'country_id' => '217', 'state_name' => 'Pattani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3565', 'country_id' => '217', 'state_name' => 'Phangnga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3566', 'country_id' => '217', 'state_name' => 'Phatthalung', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3567', 'country_id' => '217', 'state_name' => 'Phayao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3568', 'country_id' => '217', 'state_name' => 'Phetchabun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3569', 'country_id' => '217', 'state_name' => 'Phetchaburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3570', 'country_id' => '217', 'state_name' => 'Phichit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3571', 'country_id' => '217', 'state_name' => 'Phitsanulok', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3572', 'country_id' => '217', 'state_name' => 'Phra Nakhon Si Ayutthaya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3573', 'country_id' => '217', 'state_name' => 'Phrae', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3574', 'country_id' => '217', 'state_name' => 'Phuket', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3575', 'country_id' => '217', 'state_name' => 'Prachin Buri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3576', 'country_id' => '217', 'state_name' => 'Prachuap Khiri Khan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3577', 'country_id' => '217', 'state_name' => 'Ranong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3578', 'country_id' => '217', 'state_name' => 'Ratchaburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3579', 'country_id' => '217', 'state_name' => 'Rayong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3580', 'country_id' => '217', 'state_name' => 'Roi Et', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3581', 'country_id' => '217', 'state_name' => 'Sa Kaeo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3582', 'country_id' => '217', 'state_name' => 'Sakon Nakhon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3583', 'country_id' => '217', 'state_name' => 'Samut Prakan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3584', 'country_id' => '217', 'state_name' => 'Samut Sakhon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3585', 'country_id' => '217', 'state_name' => 'Samut Songkhran', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3586', 'country_id' => '217', 'state_name' => 'Saraburi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3587', 'country_id' => '217', 'state_name' => 'Satun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3588', 'country_id' => '217', 'state_name' => 'Si Sa Ket', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3589', 'country_id' => '217', 'state_name' => 'Sing Buri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3590', 'country_id' => '217', 'state_name' => 'Songkhla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3591', 'country_id' => '217', 'state_name' => 'Sukhothai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3592', 'country_id' => '217', 'state_name' => 'Suphan Buri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3593', 'country_id' => '217', 'state_name' => 'Surat Thani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3594', 'country_id' => '217', 'state_name' => 'Surin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3595', 'country_id' => '217', 'state_name' => 'Tak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3596', 'country_id' => '217', 'state_name' => 'Trang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3597', 'country_id' => '217', 'state_name' => 'Trat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3598', 'country_id' => '217', 'state_name' => 'Ubon Ratchathani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3599', 'country_id' => '217', 'state_name' => 'Udon Thani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3600', 'country_id' => '217', 'state_name' => 'Uthai Thani', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3601', 'country_id' => '217', 'state_name' => 'Uttaradit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3602', 'country_id' => '217', 'state_name' => 'Yala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3603', 'country_id' => '217', 'state_name' => 'Yasothon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3604', 'country_id' => '218', 'state_name' => 'Centre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3605', 'country_id' => '218', 'state_name' => 'Kara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3606', 'country_id' => '218', 'state_name' => 'Maritime', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3607', 'country_id' => '218', 'state_name' => 'Plateaux', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3608', 'country_id' => '218', 'state_name' => 'Savanes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3609', 'country_id' => '219', 'state_name' => 'Atafu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3610', 'country_id' => '219', 'state_name' => 'Fakaofo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3611', 'country_id' => '219', 'state_name' => 'Nukunonu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3612', 'country_id' => '220', 'state_name' => 'Eua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3613', 'country_id' => '220', 'state_name' => "Ha"."'"."apai", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3614', 'country_id' => '220', 'state_name' => 'Niuas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3615', 'country_id' => '220', 'state_name' => 'Tongatapu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3616', 'country_id' => '220', 'state_name' => "Vava"."'"."u", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3617', 'country_id' => '221', 'state_name' => 'Arima-Tunapuna-Piarco', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3618', 'country_id' => '221', 'state_name' => 'Caroni', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3619', 'country_id' => '221', 'state_name' => 'Chaguanas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3620', 'country_id' => '221', 'state_name' => 'Couva-Tabaquite-Talparo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3621', 'country_id' => '221', 'state_name' => 'Diego Martin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3622', 'country_id' => '221', 'state_name' => 'Glencoe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3623', 'country_id' => '221', 'state_name' => 'Penal Debe', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3624', 'country_id' => '221', 'state_name' => 'Point Fortin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3625', 'country_id' => '221', 'state_name' => 'Port of Spain', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3626', 'country_id' => '221', 'state_name' => 'Princes Town', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3627', 'country_id' => '221', 'state_name' => 'Saint George', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3628', 'country_id' => '221', 'state_name' => 'San Fernando', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3629', 'country_id' => '221', 'state_name' => 'San Juan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3630', 'country_id' => '221', 'state_name' => 'Sangre Grande', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3631', 'country_id' => '221', 'state_name' => 'Siparia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3632', 'country_id' => '221', 'state_name' => 'Tobago', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3633', 'country_id' => '222', 'state_name' => 'Aryanah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3634', 'country_id' => '222', 'state_name' => 'Bajah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3635', 'country_id' => '222', 'state_name' => "Bin "."'"."Arus", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3636', 'country_id' => '222', 'state_name' => 'Binzart', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3637', 'country_id' => '222', 'state_name' => 'Gouvernorat de Ariana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3638', 'country_id' => '222', 'state_name' => 'Gouvernorat de Nabeul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3639', 'country_id' => '222', 'state_name' => 'Gouvernorat de Sousse', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3640', 'country_id' => '222', 'state_name' => 'Hammamet Yasmine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3641', 'country_id' => '222', 'state_name' => 'Jundubah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3642', 'country_id' => '222', 'state_name' => 'Madaniyin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3643', 'country_id' => '222', 'state_name' => 'Manubah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3644', 'country_id' => '222', 'state_name' => 'Monastir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3645', 'country_id' => '222', 'state_name' => 'Nabul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3646', 'country_id' => '222', 'state_name' => 'Qabis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3647', 'country_id' => '222', 'state_name' => 'Qafsah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3648', 'country_id' => '222', 'state_name' => 'Qibili', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3649', 'country_id' => '222', 'state_name' => 'Safaqis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3650', 'country_id' => '222', 'state_name' => 'Sfax', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3651', 'country_id' => '222', 'state_name' => 'Sidi Bu Zayd', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3652', 'country_id' => '222', 'state_name' => 'Silyanah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3653', 'country_id' => '222', 'state_name' => 'Susah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3654', 'country_id' => '222', 'state_name' => 'Tatawin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3655', 'country_id' => '222', 'state_name' => 'Tawzar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3656', 'country_id' => '222', 'state_name' => 'Tunis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3657', 'country_id' => '222', 'state_name' => 'Zaghwan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3658', 'country_id' => '222', 'state_name' => 'al-Kaf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3659', 'country_id' => '222', 'state_name' => 'al-Mahdiyah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3660', 'country_id' => '222', 'state_name' => 'al-Munastir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3661', 'country_id' => '222', 'state_name' => 'al-Qasrayn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3662', 'country_id' => '222', 'state_name' => 'al-Qayrawan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3663', 'country_id' => '223', 'state_name' => 'Adana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3664', 'country_id' => '223', 'state_name' => 'Adiyaman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3665', 'country_id' => '223', 'state_name' => 'Afyon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3666', 'country_id' => '223', 'state_name' => 'Agri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3667', 'country_id' => '223', 'state_name' => 'Aksaray', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3668', 'country_id' => '223', 'state_name' => 'Amasya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3669', 'country_id' => '223', 'state_name' => 'Ankara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3670', 'country_id' => '223', 'state_name' => 'Antalya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3671', 'country_id' => '223', 'state_name' => 'Ardahan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3672', 'country_id' => '223', 'state_name' => 'Artvin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3673', 'country_id' => '223', 'state_name' => 'Aydin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3674', 'country_id' => '223', 'state_name' => 'Balikesir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3675', 'country_id' => '223', 'state_name' => 'Bartin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3676', 'country_id' => '223', 'state_name' => 'Batman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3677', 'country_id' => '223', 'state_name' => 'Bayburt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3678', 'country_id' => '223', 'state_name' => 'Bilecik', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3679', 'country_id' => '223', 'state_name' => 'Bingol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3680', 'country_id' => '223', 'state_name' => 'Bitlis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3681', 'country_id' => '223', 'state_name' => 'Bolu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3682', 'country_id' => '223', 'state_name' => 'Burdur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3683', 'country_id' => '223', 'state_name' => 'Bursa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3684', 'country_id' => '223', 'state_name' => 'Canakkale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3685', 'country_id' => '223', 'state_name' => 'Cankiri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3686', 'country_id' => '223', 'state_name' => 'Corum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3687', 'country_id' => '223', 'state_name' => 'Denizli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3688', 'country_id' => '223', 'state_name' => 'Diyarbakir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3689', 'country_id' => '223', 'state_name' => 'Duzce', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3690', 'country_id' => '223', 'state_name' => 'Edirne', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3691', 'country_id' => '223', 'state_name' => 'Elazig', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3692', 'country_id' => '223', 'state_name' => 'Erzincan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3693', 'country_id' => '223', 'state_name' => 'Erzurum', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3694', 'country_id' => '223', 'state_name' => 'Eskisehir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3695', 'country_id' => '223', 'state_name' => 'Gaziantep', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3696', 'country_id' => '223', 'state_name' => 'Giresun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3697', 'country_id' => '223', 'state_name' => 'Gumushane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3698', 'country_id' => '223', 'state_name' => 'Hakkari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3699', 'country_id' => '223', 'state_name' => 'Hatay', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3700', 'country_id' => '223', 'state_name' => 'Icel', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3701', 'country_id' => '223', 'state_name' => 'Igdir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3702', 'country_id' => '223', 'state_name' => 'Isparta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3703', 'country_id' => '223', 'state_name' => 'Istanbul', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3704', 'country_id' => '223', 'state_name' => 'Izmir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3705', 'country_id' => '223', 'state_name' => 'Kahramanmaras', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3706', 'country_id' => '223', 'state_name' => 'Karabuk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3707', 'country_id' => '223', 'state_name' => 'Karaman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3708', 'country_id' => '223', 'state_name' => 'Kars', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3709', 'country_id' => '223', 'state_name' => 'Karsiyaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3710', 'country_id' => '223', 'state_name' => 'Kastamonu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3711', 'country_id' => '223', 'state_name' => 'Kayseri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3712', 'country_id' => '223', 'state_name' => 'Kilis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3713', 'country_id' => '223', 'state_name' => 'Kirikkale', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3714', 'country_id' => '223', 'state_name' => 'Kirklareli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3715', 'country_id' => '223', 'state_name' => 'Kirsehir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3716', 'country_id' => '223', 'state_name' => 'Kocaeli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3717', 'country_id' => '223', 'state_name' => 'Konya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3718', 'country_id' => '223', 'state_name' => 'Kutahya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3719', 'country_id' => '223', 'state_name' => 'Lefkosa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3720', 'country_id' => '223', 'state_name' => 'Malatya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3721', 'country_id' => '223', 'state_name' => 'Manisa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3722', 'country_id' => '223', 'state_name' => 'Mardin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3723', 'country_id' => '223', 'state_name' => 'Mugla', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3724', 'country_id' => '223', 'state_name' => 'Mus', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3725', 'country_id' => '223', 'state_name' => 'Nevsehir', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3726', 'country_id' => '223', 'state_name' => 'Nigde', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3727', 'country_id' => '223', 'state_name' => 'Ordu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3728', 'country_id' => '223', 'state_name' => 'Osmaniye', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3729', 'country_id' => '223', 'state_name' => 'Rize', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3730', 'country_id' => '223', 'state_name' => 'Sakarya', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3731', 'country_id' => '223', 'state_name' => 'Samsun', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3732', 'country_id' => '223', 'state_name' => 'Sanliurfa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3733', 'country_id' => '223', 'state_name' => 'Siirt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3734', 'country_id' => '223', 'state_name' => 'Sinop', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3735', 'country_id' => '223', 'state_name' => 'Sirnak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3736', 'country_id' => '223', 'state_name' => 'Sivas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3737', 'country_id' => '223', 'state_name' => 'Tekirdag', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3738', 'country_id' => '223', 'state_name' => 'Tokat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3739', 'country_id' => '223', 'state_name' => 'Trabzon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3740', 'country_id' => '223', 'state_name' => 'Tunceli', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3741', 'country_id' => '223', 'state_name' => 'Usak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3742', 'country_id' => '223', 'state_name' => 'Van', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3743', 'country_id' => '223', 'state_name' => 'Yalova', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3744', 'country_id' => '223', 'state_name' => 'Yozgat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3745', 'country_id' => '223', 'state_name' => 'Zonguldak', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3746', 'country_id' => '224', 'state_name' => 'Ahal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3747', 'country_id' => '224', 'state_name' => 'Asgabat', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3748', 'country_id' => '224', 'state_name' => 'Balkan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3749', 'country_id' => '224', 'state_name' => 'Dasoguz', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3750', 'country_id' => '224', 'state_name' => 'Lebap', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3751', 'country_id' => '224', 'state_name' => 'Mari', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3752', 'country_id' => '225', 'state_name' => 'Grand Turk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3753', 'country_id' => '225', 'state_name' => 'South Caicos and East Caicos', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3754', 'country_id' => '226', 'state_name' => 'Funafuti', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3755', 'country_id' => '226', 'state_name' => 'Nanumanga', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3756', 'country_id' => '226', 'state_name' => 'Nanumea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3757', 'country_id' => '226', 'state_name' => 'Niutao', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3758', 'country_id' => '226', 'state_name' => 'Nui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3759', 'country_id' => '226', 'state_name' => 'Nukufetau', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3760', 'country_id' => '226', 'state_name' => 'Nukulaelae', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3761', 'country_id' => '226', 'state_name' => 'Vaitupu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3762', 'country_id' => '227', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3763', 'country_id' => '227', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3764', 'country_id' => '227', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3765', 'country_id' => '227', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3766', 'country_id' => '228', 'state_name' => "Cherkas"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3767', 'country_id' => '228', 'state_name' => "Chernihivs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3768', 'country_id' => '228', 'state_name' => "Chernivets"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3769', 'country_id' => '228', 'state_name' => 'Crimea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3770', 'country_id' => '228', 'state_name' => 'Dnipropetrovska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3771', 'country_id' => '228', 'state_name' => "Donets"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3772', 'country_id' => '228', 'state_name' => "Ivano-Frankivs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3773', 'country_id' => '228', 'state_name' => 'Kharkiv', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3774', 'country_id' => '228', 'state_name' => 'Kharkov', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3775', 'country_id' => '228', 'state_name' => 'Khersonska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3776', 'country_id' => '228', 'state_name' => "Khmel"."'"."nyts'ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3777', 'country_id' => '228', 'state_name' => 'Kirovohrad', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3778', 'country_id' => '228', 'state_name' => 'Krym', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3779', 'country_id' => '228', 'state_name' => 'Kyyiv', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3780', 'country_id' => '228', 'state_name' => "Kyyivs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3781', 'country_id' => '228', 'state_name' => "L"."'"."vivs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3782', 'country_id' => '228', 'state_name' => "Luhans"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3783', 'country_id' => '228', 'state_name' => "Mykolayivs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3784', 'country_id' => '228', 'state_name' => "Odes"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3785', 'country_id' => '228', 'state_name' => 'Odessa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3786', 'country_id' => '228', 'state_name' => "Poltavs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3787', 'country_id' => '228', 'state_name' => "Rivnens"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3788', 'country_id' => '228', 'state_name' => "Sevastopol"."'", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3789', 'country_id' => '228', 'state_name' => "Sums"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3790', 'country_id' => '228', 'state_name' => "Ternopil"."'"."s'ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3791', 'country_id' => '228', 'state_name' => "Volyns"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3792', 'country_id' => '228', 'state_name' => "Vynnyts"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3793', 'country_id' => '228', 'state_name' => "Zakarpats"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3794', 'country_id' => '228', 'state_name' => 'Zaporizhia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3795', 'country_id' => '228', 'state_name' => "Zhytomyrs"."'"."ka", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3796', 'country_id' => '229', 'state_name' => 'Abu Zabi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3797', 'country_id' => '229', 'state_name' => 'Ajman', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3798', 'country_id' => '229', 'state_name' => 'Dubai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3799', 'country_id' => '229', 'state_name' => 'Ras al-Khaymah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3800', 'country_id' => '229', 'state_name' => 'Sharjah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3801', 'country_id' => '229', 'state_name' => 'Sharjha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3802', 'country_id' => '229', 'state_name' => 'Umm al Qaywayn', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3803', 'country_id' => '229', 'state_name' => 'al-Fujayrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3804', 'country_id' => '229', 'state_name' => 'ash-Shariqah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3805', 'country_id' => '230', 'state_name' => 'Aberdeen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3806', 'country_id' => '230', 'state_name' => 'Aberdeenshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3807', 'country_id' => '230', 'state_name' => 'Argyll', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3808', 'country_id' => '230', 'state_name' => 'Armagh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3809', 'country_id' => '230', 'state_name' => 'Bedfordshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3810', 'country_id' => '230', 'state_name' => 'Belfast', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3811', 'country_id' => '230', 'state_name' => 'Berkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3812', 'country_id' => '230', 'state_name' => 'Birmingham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3813', 'country_id' => '230', 'state_name' => 'Brechin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3814', 'country_id' => '230', 'state_name' => 'Bridgnorth', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3815', 'country_id' => '230', 'state_name' => 'Bristol', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3816', 'country_id' => '230', 'state_name' => 'Buckinghamshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3817', 'country_id' => '230', 'state_name' => 'Cambridge', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3818', 'country_id' => '230', 'state_name' => 'Cambridgeshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3819', 'country_id' => '230', 'state_name' => 'Channel Islands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3820', 'country_id' => '230', 'state_name' => 'Cheshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3821', 'country_id' => '230', 'state_name' => 'Cleveland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3822', 'country_id' => '230', 'state_name' => 'Co Fermanagh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3823', 'country_id' => '230', 'state_name' => 'Conwy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3824', 'country_id' => '230', 'state_name' => 'Cornwall', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3825', 'country_id' => '230', 'state_name' => 'Coventry', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3826', 'country_id' => '230', 'state_name' => 'Craven Arms', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3827', 'country_id' => '230', 'state_name' => 'Cumbria', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3828', 'country_id' => '230', 'state_name' => 'Denbighshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3829', 'country_id' => '230', 'state_name' => 'Derby', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3830', 'country_id' => '230', 'state_name' => 'Derbyshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3831', 'country_id' => '230', 'state_name' => 'Devon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3832', 'country_id' => '230', 'state_name' => 'Dial Code Dungannon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3833', 'country_id' => '230', 'state_name' => 'Didcot', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3834', 'country_id' => '230', 'state_name' => 'Dorset', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3835', 'country_id' => '230', 'state_name' => 'Dunbartonshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3836', 'country_id' => '230', 'state_name' => 'Durham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3837', 'country_id' => '230', 'state_name' => 'East Dunbartonshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3838', 'country_id' => '230', 'state_name' => 'East Lothian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3839', 'country_id' => '230', 'state_name' => 'East Midlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3840', 'country_id' => '230', 'state_name' => 'East Sussex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3841', 'country_id' => '230', 'state_name' => 'East Yorkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3842', 'country_id' => '230', 'state_name' => 'England', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3843', 'country_id' => '230', 'state_name' => 'Essex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3844', 'country_id' => '230', 'state_name' => 'Fermanagh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3845', 'country_id' => '230', 'state_name' => 'Fife', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3846', 'country_id' => '230', 'state_name' => 'Flintshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3847', 'country_id' => '230', 'state_name' => 'Fulham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3848', 'country_id' => '230', 'state_name' => 'Gainsborough', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3849', 'country_id' => '230', 'state_name' => 'Glocestershire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3850', 'country_id' => '230', 'state_name' => 'Gwent', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3851', 'country_id' => '230', 'state_name' => 'Hampshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3852', 'country_id' => '230', 'state_name' => 'Hants', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3853', 'country_id' => '230', 'state_name' => 'Herefordshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3854', 'country_id' => '230', 'state_name' => 'Hertfordshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3855', 'country_id' => '230', 'state_name' => 'Ireland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3856', 'country_id' => '230', 'state_name' => 'Isle Of Man', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3857', 'country_id' => '230', 'state_name' => 'Isle of Wight', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3858', 'country_id' => '230', 'state_name' => 'Kenford', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3859', 'country_id' => '230', 'state_name' => 'Kent', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3860', 'country_id' => '230', 'state_name' => 'Kilmarnock', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3861', 'country_id' => '230', 'state_name' => 'Lanarkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3862', 'country_id' => '230', 'state_name' => 'Lancashire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3863', 'country_id' => '230', 'state_name' => 'Leicestershire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3864', 'country_id' => '230', 'state_name' => 'Lincolnshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3865', 'country_id' => '230', 'state_name' => 'Llanymynech', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3866', 'country_id' => '230', 'state_name' => 'London', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3867', 'country_id' => '230', 'state_name' => 'Ludlow', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3868', 'country_id' => '230', 'state_name' => 'Manchester', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3869', 'country_id' => '230', 'state_name' => 'Mayfair', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3870', 'country_id' => '230', 'state_name' => 'Merseyside', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3871', 'country_id' => '230', 'state_name' => 'Mid Glamorgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3872', 'country_id' => '230', 'state_name' => 'Middlesex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3873', 'country_id' => '230', 'state_name' => 'Mildenhall', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3874', 'country_id' => '230', 'state_name' => 'Monmouthshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3875', 'country_id' => '230', 'state_name' => 'Newton Stewart', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3876', 'country_id' => '230', 'state_name' => 'Norfolk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3877', 'country_id' => '230', 'state_name' => 'North Humberside', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3878', 'country_id' => '230', 'state_name' => 'North Yorkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3879', 'country_id' => '230', 'state_name' => 'Northamptonshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3880', 'country_id' => '230', 'state_name' => 'Northants', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3881', 'country_id' => '230', 'state_name' => 'Northern Ireland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3882', 'country_id' => '230', 'state_name' => 'Northumberland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3883', 'country_id' => '230', 'state_name' => 'Nottinghamshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3884', 'country_id' => '230', 'state_name' => 'Oxford', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3885', 'country_id' => '230', 'state_name' => 'Powys', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3886', 'country_id' => '230', 'state_name' => 'Roos-shire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3887', 'country_id' => '230', 'state_name' => 'SUSSEX', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3888', 'country_id' => '230', 'state_name' => 'Sark', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3889', 'country_id' => '230', 'state_name' => 'Scotland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3890', 'country_id' => '230', 'state_name' => 'Scottish Borders', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3891', 'country_id' => '230', 'state_name' => 'Shropshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3892', 'country_id' => '230', 'state_name' => 'Somerset', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3893', 'country_id' => '230', 'state_name' => 'South Glamorgan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3894', 'country_id' => '230', 'state_name' => 'South Wales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3895', 'country_id' => '230', 'state_name' => 'South Yorkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3896', 'country_id' => '230', 'state_name' => 'Southwell', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3897', 'country_id' => '230', 'state_name' => 'Staffordshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3898', 'country_id' => '230', 'state_name' => 'Strabane', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3899', 'country_id' => '230', 'state_name' => 'Suffolk', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3900', 'country_id' => '230', 'state_name' => 'Surrey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3901', 'country_id' => '230', 'state_name' => 'Sussex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3902', 'country_id' => '230', 'state_name' => 'Twickenham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3903', 'country_id' => '230', 'state_name' => 'Tyne and Wear', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3904', 'country_id' => '230', 'state_name' => 'Tyrone', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3905', 'country_id' => '230', 'state_name' => 'Utah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3906', 'country_id' => '230', 'state_name' => 'Wales', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3907', 'country_id' => '230', 'state_name' => 'Warwickshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3908', 'country_id' => '230', 'state_name' => 'West Lothian', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3909', 'country_id' => '230', 'state_name' => 'West Midlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3910', 'country_id' => '230', 'state_name' => 'West Sussex', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3911', 'country_id' => '230', 'state_name' => 'West Yorkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3912', 'country_id' => '230', 'state_name' => 'Whissendine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3913', 'country_id' => '230', 'state_name' => 'Wiltshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3914', 'country_id' => '230', 'state_name' => 'Wokingham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3915', 'country_id' => '230', 'state_name' => 'Worcestershire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3916', 'country_id' => '230', 'state_name' => 'Wrexham', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3917', 'country_id' => '230', 'state_name' => 'Wurttemberg', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3918', 'country_id' => '230', 'state_name' => 'Yorkshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3919', 'country_id' => '231', 'state_name' => 'Alabama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3920', 'country_id' => '231', 'state_name' => 'Alaska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3921', 'country_id' => '231', 'state_name' => 'Arizona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3922', 'country_id' => '231', 'state_name' => 'Arkansas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3923', 'country_id' => '231', 'state_name' => 'Byram', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3924', 'country_id' => '231', 'state_name' => 'California', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3925', 'country_id' => '231', 'state_name' => 'Cokato', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3926', 'country_id' => '231', 'state_name' => 'Colorado', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3927', 'country_id' => '231', 'state_name' => 'Connecticut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3928', 'country_id' => '231', 'state_name' => 'Delaware', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3929', 'country_id' => '231', 'state_name' => 'District of Columbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3930', 'country_id' => '231', 'state_name' => 'Florida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3931', 'country_id' => '231', 'state_name' => 'Georgia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3932', 'country_id' => '231', 'state_name' => 'Hawaii', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3933', 'country_id' => '231', 'state_name' => 'Idaho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3934', 'country_id' => '231', 'state_name' => 'Illinois', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3935', 'country_id' => '231', 'state_name' => 'Indiana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3936', 'country_id' => '231', 'state_name' => 'Iowa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3937', 'country_id' => '231', 'state_name' => 'Kansas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3938', 'country_id' => '231', 'state_name' => 'Kentucky', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3939', 'country_id' => '231', 'state_name' => 'Louisiana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3940', 'country_id' => '231', 'state_name' => 'Lowa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3941', 'country_id' => '231', 'state_name' => 'Maine', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3942', 'country_id' => '231', 'state_name' => 'Maryland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3943', 'country_id' => '231', 'state_name' => 'Massachusetts', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3944', 'country_id' => '231', 'state_name' => 'Medfield', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3945', 'country_id' => '231', 'state_name' => 'Michigan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3946', 'country_id' => '231', 'state_name' => 'Minnesota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3947', 'country_id' => '231', 'state_name' => 'Mississippi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3948', 'country_id' => '231', 'state_name' => 'Missouri', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3949', 'country_id' => '231', 'state_name' => 'Montana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3950', 'country_id' => '231', 'state_name' => 'Nebraska', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3951', 'country_id' => '231', 'state_name' => 'Nevada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3952', 'country_id' => '231', 'state_name' => 'New Hampshire', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3953', 'country_id' => '231', 'state_name' => 'New Jersey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3954', 'country_id' => '231', 'state_name' => 'New Jersy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3955', 'country_id' => '231', 'state_name' => 'New Mexico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3956', 'country_id' => '231', 'state_name' => 'New York', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3957', 'country_id' => '231', 'state_name' => 'North Carolina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3958', 'country_id' => '231', 'state_name' => 'North Dakota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3959', 'country_id' => '231', 'state_name' => 'Ohio', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3960', 'country_id' => '231', 'state_name' => 'Oklahoma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3961', 'country_id' => '231', 'state_name' => 'Ontario', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3962', 'country_id' => '231', 'state_name' => 'Oregon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3963', 'country_id' => '231', 'state_name' => 'Pennsylvania', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3964', 'country_id' => '231', 'state_name' => 'Ramey', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3965', 'country_id' => '231', 'state_name' => 'Rhode Island', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3966', 'country_id' => '231', 'state_name' => 'South Carolina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3967', 'country_id' => '231', 'state_name' => 'South Dakota', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3968', 'country_id' => '231', 'state_name' => 'Sublimity', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3969', 'country_id' => '231', 'state_name' => 'Tennessee', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3970', 'country_id' => '231', 'state_name' => 'Texas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3971', 'country_id' => '231', 'state_name' => 'Trimble', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3972', 'country_id' => '231', 'state_name' => 'Utah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3973', 'country_id' => '231', 'state_name' => 'Vermont', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3974', 'country_id' => '231', 'state_name' => 'Virginia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3975', 'country_id' => '231', 'state_name' => 'Washington', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3976', 'country_id' => '231', 'state_name' => 'West Virginia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3977', 'country_id' => '231', 'state_name' => 'Wisconsin', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3978', 'country_id' => '231', 'state_name' => 'Wyoming', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3979', 'country_id' => '232', 'state_name' => 'United States Minor Outlying I', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3980', 'country_id' => '233', 'state_name' => 'Artigas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3981', 'country_id' => '233', 'state_name' => 'Canelones', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3982', 'country_id' => '233', 'state_name' => 'Cerro Largo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3983', 'country_id' => '233', 'state_name' => 'Colonia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3984', 'country_id' => '233', 'state_name' => 'Durazno', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3985', 'country_id' => '233', 'state_name' => 'FLorida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3986', 'country_id' => '233', 'state_name' => 'Flores', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3987', 'country_id' => '233', 'state_name' => 'Lavalleja', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3988', 'country_id' => '233', 'state_name' => 'Maldonado', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3989', 'country_id' => '233', 'state_name' => 'Montevideo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3990', 'country_id' => '233', 'state_name' => 'Paysandu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3991', 'country_id' => '233', 'state_name' => 'Rio Negro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3992', 'country_id' => '233', 'state_name' => 'Rivera', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3993', 'country_id' => '233', 'state_name' => 'Rocha', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3994', 'country_id' => '233', 'state_name' => 'Salto', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3995', 'country_id' => '233', 'state_name' => 'San Jose', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3996', 'country_id' => '233', 'state_name' => 'Soriano', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3997', 'country_id' => '233', 'state_name' => 'Tacuarembo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3998', 'country_id' => '233', 'state_name' => 'Treinta y Tres', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '3999', 'country_id' => '234', 'state_name' => 'Andijon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4000', 'country_id' => '234', 'state_name' => 'Buhoro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4001', 'country_id' => '234', 'state_name' => 'Buxoro Viloyati', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4002', 'country_id' => '234', 'state_name' => 'Cizah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4003', 'country_id' => '234', 'state_name' => 'Fargona', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4004', 'country_id' => '234', 'state_name' => 'Horazm', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4005', 'country_id' => '234', 'state_name' => 'Kaskadar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4006', 'country_id' => '234', 'state_name' => 'Korakalpogiston', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4007', 'country_id' => '234', 'state_name' => 'Namangan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4008', 'country_id' => '234', 'state_name' => 'Navoi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4009', 'country_id' => '234', 'state_name' => 'Samarkand', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4010', 'country_id' => '234', 'state_name' => 'Sirdare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4011', 'country_id' => '234', 'state_name' => 'Surhondar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4012', 'country_id' => '234', 'state_name' => 'Toskent', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4013', 'country_id' => '235', 'state_name' => 'Malampa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4014', 'country_id' => '235', 'state_name' => 'Penama', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4015', 'country_id' => '235', 'state_name' => 'Sanma', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4016', 'country_id' => '235', 'state_name' => 'Shefa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4017', 'country_id' => '235', 'state_name' => 'Tafea', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4018', 'country_id' => '235', 'state_name' => 'Torba', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4019', 'country_id' => '236', 'state_name' => 'Vatican City State (Holy See)', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4020', 'country_id' => '237', 'state_name' => 'Amazonas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4021', 'country_id' => '237', 'state_name' => 'Anzoategui', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4022', 'country_id' => '237', 'state_name' => 'Apure', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4023', 'country_id' => '237', 'state_name' => 'Aragua', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4024', 'country_id' => '237', 'state_name' => 'Barinas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4025', 'country_id' => '237', 'state_name' => 'Bolivar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4026', 'country_id' => '237', 'state_name' => 'Carabobo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4027', 'country_id' => '237', 'state_name' => 'Cojedes', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4028', 'country_id' => '237', 'state_name' => 'Delta Amacuro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4029', 'country_id' => '237', 'state_name' => 'Distrito Federal', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4030', 'country_id' => '237', 'state_name' => 'Falcon', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4031', 'country_id' => '237', 'state_name' => 'Guarico', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4032', 'country_id' => '237', 'state_name' => 'Lara', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4033', 'country_id' => '237', 'state_name' => 'Merida', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4034', 'country_id' => '237', 'state_name' => 'Miranda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4035', 'country_id' => '237', 'state_name' => 'Monagas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4036', 'country_id' => '237', 'state_name' => 'Nueva Esparta', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4037', 'country_id' => '237', 'state_name' => 'Portuguesa', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4038', 'country_id' => '237', 'state_name' => 'Sucre', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4039', 'country_id' => '237', 'state_name' => 'Tachira', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4040', 'country_id' => '237', 'state_name' => 'Trujillo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4041', 'country_id' => '237', 'state_name' => 'Vargas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4042', 'country_id' => '237', 'state_name' => 'Yaracuy', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4043', 'country_id' => '237', 'state_name' => 'Zulia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4044', 'country_id' => '238', 'state_name' => 'Bac Giang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4045', 'country_id' => '238', 'state_name' => 'Binh Dinh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4046', 'country_id' => '238', 'state_name' => 'Binh Duong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4047', 'country_id' => '238', 'state_name' => 'Da Nang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4048', 'country_id' => '238', 'state_name' => 'Dong Bang Song Cuu Long', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4049', 'country_id' => '238', 'state_name' => 'Dong Bang Song Hong', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4050', 'country_id' => '238', 'state_name' => 'Dong Nai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4051', 'country_id' => '238', 'state_name' => 'Dong Nam Bo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4052', 'country_id' => '238', 'state_name' => 'Duyen Hai Mien Trung', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4053', 'country_id' => '238', 'state_name' => 'Hanoi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4054', 'country_id' => '238', 'state_name' => 'Hung Yen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4055', 'country_id' => '238', 'state_name' => 'Khu Bon Cu', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4056', 'country_id' => '238', 'state_name' => 'Long An', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4057', 'country_id' => '238', 'state_name' => 'Mien Nui Va Trung Du', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4058', 'country_id' => '238', 'state_name' => 'Thai Nguyen', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4059', 'country_id' => '238', 'state_name' => 'Thanh Pho Ho Chi Minh', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4060', 'country_id' => '238', 'state_name' => 'Thu Do Ha Noi', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4061', 'country_id' => '238', 'state_name' => 'Tinh Can Tho', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4062', 'country_id' => '238', 'state_name' => 'Tinh Da Nang', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4063', 'country_id' => '238', 'state_name' => 'Tinh Gia Lai', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4064', 'country_id' => '239', 'state_name' => 'Anegada', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4065', 'country_id' => '239', 'state_name' => 'Jost van Dyke', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4066', 'country_id' => '239', 'state_name' => 'Tortola', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4067', 'country_id' => '240', 'state_name' => 'Saint Croix', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4068', 'country_id' => '240', 'state_name' => 'Saint John', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4069', 'country_id' => '240', 'state_name' => 'Saint Thomas', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4070', 'country_id' => '241', 'state_name' => 'Alo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4071', 'country_id' => '241', 'state_name' => 'Singave', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4072', 'country_id' => '241', 'state_name' => 'Wallis', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4073', 'country_id' => '242', 'state_name' => 'Bu Jaydur', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4074', 'country_id' => '242', 'state_name' => 'Wad-adh-Dhahab', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4075', 'country_id' => '242', 'state_name' => "al-"."'"."Ayun", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4076', 'country_id' => '242', 'state_name' => 'as-Samarah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4077', 'country_id' => '243', 'state_name' => "'"."Adan", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4078', 'country_id' => '243', 'state_name' => 'Abyan', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4079', 'country_id' => '243', 'state_name' => 'Dhamar', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4080', 'country_id' => '243', 'state_name' => 'Hadramaut', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4081', 'country_id' => '243', 'state_name' => 'Hajjah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4082', 'country_id' => '243', 'state_name' => 'Hudaydah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4083', 'country_id' => '243', 'state_name' => 'Ibb', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4084', 'country_id' => '243', 'state_name' => 'Lahij', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4085', 'country_id' => '243', 'state_name' => "Ma"."'"."rib", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4086', 'country_id' => '243', 'state_name' => "Madinat San"."'"."a", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4087', 'country_id' => '243', 'state_name' => "Sa"."'"."dah", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4088', 'country_id' => '243', 'state_name' => 'Sana', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4089', 'country_id' => '243', 'state_name' => 'Shabwah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4090', 'country_id' => '243', 'state_name' => "Ta"."'"."izz", 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4091', 'country_id' => '243', 'state_name' => 'al-Bayda', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4092', 'country_id' => '243', 'state_name' => 'al-Hudaydah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4093', 'country_id' => '243', 'state_name' => 'al-Jawf', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4094', 'country_id' => '243', 'state_name' => 'al-Mahrah', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4095', 'country_id' => '243', 'state_name' => 'al-Mahwit', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4096', 'country_id' => '244', 'state_name' => 'Central Serbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4097', 'country_id' => '244', 'state_name' => 'Kosovo and Metohija', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4098', 'country_id' => '244', 'state_name' => 'Montenegro', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4099', 'country_id' => '244', 'state_name' => 'Republic of Serbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4100', 'country_id' => '244', 'state_name' => 'Serbia', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4101', 'country_id' => '244', 'state_name' => 'Vojvodina', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4102', 'country_id' => '245', 'state_name' => 'Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4103', 'country_id' => '245', 'state_name' => 'Copperbelt', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4104', 'country_id' => '245', 'state_name' => 'Eastern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4105', 'country_id' => '245', 'state_name' => 'Luapala', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4106', 'country_id' => '245', 'state_name' => 'Lusaka', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4107', 'country_id' => '245', 'state_name' => 'North-Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4108', 'country_id' => '245', 'state_name' => 'Northern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4109', 'country_id' => '245', 'state_name' => 'Southern', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4110', 'country_id' => '245', 'state_name' => 'Western', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4111', 'country_id' => '246', 'state_name' => 'Bulawayo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4112', 'country_id' => '246', 'state_name' => 'Harare', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4113', 'country_id' => '246', 'state_name' => 'Manicaland', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4114', 'country_id' => '246', 'state_name' => 'Mashonaland Central', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4115', 'country_id' => '246', 'state_name' => 'Mashonaland East', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4116', 'country_id' => '246', 'state_name' => 'Mashonaland West', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4117', 'country_id' => '246', 'state_name' => 'Masvingo', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4118', 'country_id' => '246', 'state_name' => 'Matabeleland North', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4119', 'country_id' => '246', 'state_name' => 'Matabeleland South', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4120', 'country_id' => '246', 'state_name' => 'Midlands', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['state_id' => '4121', 'country_id' => '214', 'state_name' => 'Lienchiang County', 'state_status' => 1, 'created_by' => 1, 'updated_by' => 1], 
    ];
    State::insert($states);
    }
}
