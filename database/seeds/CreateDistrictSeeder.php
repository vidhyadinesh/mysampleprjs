<?php

use Illuminate\Database\Seeder;
use App\District;
class CreateDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::truncate();

	    $district = [
['city_id' => '1', 'country_id' => '101', 'state_id' => '1', 'city_name' => 'Bombuflat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2', 'country_id' => '101', 'state_id' => '1', 'city_name' => 'Garacharma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3', 'country_id' => '101', 'state_id' => '1', 'city_name' => 'Port Blair', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4', 'country_id' => '101', 'state_id' => '1', 'city_name' => 'Rangat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Addanki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '6', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Adivivaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '7', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Adoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '8', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Aganampudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '9', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ajjaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '10', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Akividu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '11', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Akkarampalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '12', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Akkayapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '13', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Akkireddipalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '14', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Alampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '15', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Amalapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '16', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Amudalavalasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '17', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Amur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '18', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Anakapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '19', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Anantapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '20', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Andole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '21', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Atmakur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '22', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Attili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '23', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Avanigadda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '24', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Badepalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '25', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Badvel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '26', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Balapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '27', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bandarulanka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '28', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Banganapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '29', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bapatla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '30', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bapulapadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '31', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Belampalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '32', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bestavaripeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '33', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Betamcherla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '34', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bhattiprolu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '35', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bhimavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '36', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bhimunipatnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '37', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bobbili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '38', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bombuflat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '39', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bommuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '40', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Bugganipalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '41', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Challapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '42', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '43', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chatakonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '44', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chemmumiahpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '45', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chidiga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '46', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chilakaluripet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '47', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chimakurthy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '48', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chinagadila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '49', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chinagantyada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '50', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chinnachawk', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '51', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chintalavalasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '52', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chipurupalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '53', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chirala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '54', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chittoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '55', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chodavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '56', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Choutuppal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '57', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Chunchupalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '58', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Cuddapah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '59', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Cumbum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '60', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Darnakal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '61', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dasnapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '62', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dauleshwaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '63', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dharmavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '64', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dhone', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '65', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dommara Nandyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '66', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Dowlaiswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '67', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'East Godavari Dist.', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '68', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Eddumailaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '69', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Edulapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '70', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ekambara kuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '71', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Eluru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '72', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Enikapadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '73', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Fakirtakya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '74', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Farrukhnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '75', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gaddiannaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '76', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gajapathinagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '77', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gajularega', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '78', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gajuvaka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '79', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gannavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '80', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Garacharma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '81', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Garimellapadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '82', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Giddalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '83', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Godavarikhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '84', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gopalapatnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '85', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gopalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '86', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gorrekunta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '87', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gudivada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '88', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Gudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '89', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Guntakal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '90', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Guntur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '91', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Guti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '92', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Hindupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '93', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Hukumpeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '94', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ichchapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '95', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Isnapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '96', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Jaggayyapeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '97', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Jallaram Kamanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '98', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Jammalamadugu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '99', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Jangampalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '100', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Jarjapupeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '101', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kadiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '102', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kaikalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '103', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kakinada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '104', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '105', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kalyandurg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '106', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kamalapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '107', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kamareddi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '108', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kanapaka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '109', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kanigiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '110', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kanithi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '111', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kankipadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '112', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kantabamsuguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '113', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kanuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '114', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Karnul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '115', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Katheru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '116', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kavali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '117', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kazipet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '118', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Khanapuram Haveli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '119', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kodar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '120', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kollapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '121', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kondapalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '122', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kondapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '123', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kondukur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '124', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kosgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '125', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kothavalasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '126', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kottapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '127', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kovur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '128', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kovurpalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '129', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kovvur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '130', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Krishna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '131', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '132', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kurmannapalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '133', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Kurnool', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '134', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Lakshettipet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '135', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Lalbahadur Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '136', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Machavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '137', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Macherla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '138', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Machilipatnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '139', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Madanapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '140', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Madaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '141', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Madhuravada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '142', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Madikonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '143', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Madugule', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '144', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mahabubnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '145', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mahbubabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '146', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Malkajgiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '147', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mamilapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '148', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mancheral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '149', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mandapeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '150', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mandasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '151', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mangalagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '152', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Manthani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '153', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Markapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '154', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Marturu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '155', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Metpalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '156', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mindi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '157', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mirpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '158', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Moragudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '159', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Mothugudam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '160', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nagari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '161', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nagireddipalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '162', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nandigama', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '163', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nandikotkur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '164', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nandyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '165', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narasannapeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '166', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narasapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '167', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narasaraopet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '168', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narayanavanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '169', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narsapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '170', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narsingi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '171', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Narsipatnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '172', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Naspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '173', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nathayyapalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '174', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nayudupeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '175', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nelimaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '176', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nellore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '177', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nidadavole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '178', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Nuzvid', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '179', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Omerkhan daira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '180', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ongole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '181', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Osmania University', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '182', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pakala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '183', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palakole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '184', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palakurthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '185', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '186', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palempalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '187', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palkonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '188', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Palmaner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '189', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pamur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '190', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Panjim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '191', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Papampeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '192', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Parasamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '193', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Parvatipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '194', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Patancheru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '195', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Payakaraopet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '196', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pedagantyada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '197', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pedana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '198', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Peddapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '199', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pendurthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '200', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Penugonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '201', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Penukonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '202', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Phirangipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '203', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pithapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '204', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ponnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '205', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Port Blair', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '206', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pothinamallayyapalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '207', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Prakasam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '208', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Prasadampadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '209', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Prasantinilayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '210', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Proddatur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '211', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Pulivendla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '212', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Punganuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '213', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Puttur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '214', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Qutubullapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '215', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rajahmundry', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '216', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rajamahendri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '217', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rajampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '218', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rajendranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '219', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rajoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '220', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ramachandrapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '221', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ramanayyapeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '222', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ramapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '223', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ramarajupalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '224', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ramavarappadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '225', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rameswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '226', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rampachodavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '227', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ravulapalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '228', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rayachoti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '229', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rayadrug', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '230', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Razam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '231', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Razole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '232', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Renigunta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '233', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Repalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '234', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Rishikonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '235', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Salur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '236', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Samalkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '237', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sattenapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '238', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Seetharampuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '239', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Serilungampalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '240', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Shankarampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '241', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Shar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '242', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Singarayakonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '243', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '244', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sirsilla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '245', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sompeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '246', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sriharikota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '247', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Srikakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '248', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Srikalahasti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '249', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sriramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '250', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sriramsagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '251', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Srisailam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '252', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Srisailamgudem Devasthanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '253', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Sulurpeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '254', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Suriapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '255', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Suryaraopet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '256', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tadepalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '257', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tadepalligudem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '258', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tadpatri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '259', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tallapalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '260', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tanuku', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '261', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tekkali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '262', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tenali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '263', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tigalapahad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '264', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tiruchanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '265', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tirumala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '266', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tirupati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '267', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tirvuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '268', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Trimulgherry', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '269', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Tuni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '270', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Turangi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '271', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ukkayapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '272', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Ukkunagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '273', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Uppal Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '274', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Upper Sileru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '275', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Uravakonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '276', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vadlapudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '277', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vaparala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '278', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vemalwada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '279', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Venkatagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '280', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Venkatapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '281', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vepagunta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '282', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vetapalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '283', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vijayapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '284', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vijayapuri South', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '285', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vijayawada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '286', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vinukonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '287', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Visakhapatnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '288', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vizianagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '289', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Vuyyuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '290', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Wanparti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '291', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'West Godavari Dist.', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '292', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yadagirigutta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '293', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yarada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '294', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yellamanchili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '295', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yemmiganur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '296', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yenamalakudru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '297', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yendada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '298', 'country_id' => '101', 'state_id' => '2', 'city_name' => 'Yerraguntla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '299', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Along', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '300', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Basar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '301', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Bondila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '302', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Changlang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '303', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Daporijo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '304', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Deomali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '305', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Itanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '306', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Jairampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '307', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Khonsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '308', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Naharlagun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '309', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Namsai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '310', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Pasighat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '311', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Roing', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '312', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Seppa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '313', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Tawang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '314', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Tezu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '315', 'country_id' => '101', 'state_id' => '3', 'city_name' => 'Ziro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '316', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Abhayapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '317', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Ambikapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '318', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Amguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '319', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Anand Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '320', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Badarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '321', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Badarpur Railway Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '322', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bahbari Gaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '323', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bamun Sualkuchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '324', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Barbari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '325', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Barpathar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '326', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Barpeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '327', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Barpeta Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '328', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Basugaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '329', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bihpuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '330', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bijni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '331', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bilasipara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '332', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Biswanath Chariali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '333', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bohori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '334', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bokajan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '335', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bokokhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '336', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bongaigaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '337', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Bongaigaon Petro-chemical Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '338', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Borgolai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '339', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Chabua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '340', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Chandrapur Bagicha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '341', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Chapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '342', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Chekonidhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '343', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Choto Haibor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '344', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dergaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '345', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dharapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '346', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dhekiajuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '347', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dhemaji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '348', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dhing', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '349', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dhubri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '350', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dhuburi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '351', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dibrugarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '352', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Digboi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '353', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Digboi Oil Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '354', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dimaruguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '355', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Diphu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '356', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dispur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '357', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Doboka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '358', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dokmoka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '359', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Donkamokan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '360', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Duliagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '361', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Duliajan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '362', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Duliajan No.1', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '363', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Dum Duma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '364', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Durga Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '365', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Gauripur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '366', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Goalpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '367', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Gohpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '368', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Golaghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '369', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Golakganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '370', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Gossaigaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '371', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Guwahati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '372', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Haflong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '373', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Hailakandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '374', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Hamren', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '375', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Hauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '376', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Hauraghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '377', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Hojai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '378', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Jagiroad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '379', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Jagiroad Paper Mill', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '380', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Jogighopa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '381', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Jonai Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '382', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Jorhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '383', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kampur Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '384', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kamrup', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '385', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kanakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '386', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Karimganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '387', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kharijapikon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '388', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kharupetia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '389', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kochpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '390', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kokrajhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '391', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Kumar Kaibarta Gaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '392', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lakhimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '393', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lakhipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '394', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '395', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lanka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '396', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lido Tikok', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '397', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lido Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '398', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lumding', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '399', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Lumding Railway Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '400', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Mahur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '401', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Maibong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '402', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Majgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '403', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Makum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '404', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Mangaldai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '405', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Mankachar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '406', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Margherita', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '407', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Mariani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '408', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Marigaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '409', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Moran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '410', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Moranhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '411', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Nagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '412', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Naharkatia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '413', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Nalbari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '414', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Namrup', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '415', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Naubaisa Gaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '416', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Nazira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '417', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'New Bongaigaon Railway Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '418', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Niz-Hajo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '419', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'North Guwahati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '420', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Numaligarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '421', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Palasbari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '422', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Panchgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '423', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Pathsala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '424', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Raha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '425', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Rangapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '426', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Rangia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '427', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Salakati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '428', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sapatgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '429', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sarthebari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '430', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sarupathar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '431', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sarupathar Bengali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '432', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Senchoagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '433', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sibsagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '434', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Silapathar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '435', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Silchar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '436', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Silchar Part-X', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '437', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sonari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '438', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sorbhog', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '439', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Sualkuchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '440', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Tangla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '441', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Tezpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '442', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Tihu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '443', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Tinsukia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '444', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Titabor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '445', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Udalguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '446', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Umrangso', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '447', 'country_id' => '101', 'state_id' => '4', 'city_name' => 'Uttar Krishnapur Part-I', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '448', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Amarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '449', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Ara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '450', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Araria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '451', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Areraj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '452', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Asarganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '453', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Aurangabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '454', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bagaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '455', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bahadurganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '456', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bairgania', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '457', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bakhtiyarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '458', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Banka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '459', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Banmankhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '460', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bar Bigha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '461', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Barauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '462', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Barauni Oil Township', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '463', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Barh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '464', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Barhiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '465', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bariapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '466', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Baruni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '467', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Begusarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '468', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Behea', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '469', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Belsand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '470', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bettiah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '471', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bhabua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '472', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bhagalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '473', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bhimnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '474', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bhojpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '475', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '476', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bihar Sharif', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '477', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bihariganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '478', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bikramganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '479', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Birpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '480', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Bodh Gaya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '481', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Buxar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '482', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Chakia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '483', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Chanpatia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '484', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Chhapra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '485', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Chhatapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '486', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Colgong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '487', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dalsingh Sarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '488', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Darbhanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '489', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Daudnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '490', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dehri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '491', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dhaka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '492', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dighwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '493', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dinapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '494', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dinapur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '495', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dumra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '496', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Dumraon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '497', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Fatwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '498', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Forbesganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '499', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Gaya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '500', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Gazipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '501', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Ghoghardiha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '502', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Gogri Jamalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '503', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Gopalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '504', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Habibpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '505', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Hajipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '506', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Hasanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '507', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Hazaribagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '508', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Hilsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '509', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Hisua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '510', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Islampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '511', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jagdispur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '512', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jahanabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '513', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jamalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '514', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jamhaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '515', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jamui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '516', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Janakpur Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '517', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Janpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '518', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jaynagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '519', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jha Jha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '520', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jhanjharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '521', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Jogbani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '522', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Kanti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '523', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Kasba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '524', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Kataiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '525', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Katihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '526', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Khagaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '527', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Khagaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '528', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Kharagpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '529', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Khusrupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '530', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Kishanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '531', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Koath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '532', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Koilwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '533', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Lakhisarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '534', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Lalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '535', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Lauthaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '536', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Madhepura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '537', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Madhubani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '538', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Maharajganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '539', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Mahnar Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '540', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Mairwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '541', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Makhdumpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '542', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Maner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '543', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Manihari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '544', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Marhaura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '545', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Masaurhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '546', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Mirganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '547', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Mohiuddinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '548', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Mokama', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '549', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Motihari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '550', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Motipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '551', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Munger', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '552', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Murliganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '553', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Muzaffarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '554', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Nabinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '555', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Narkatiaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '556', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Nasriganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '557', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Natwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '558', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Naugachhia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '559', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Nawada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '560', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Nirmali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '561', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Nokha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '562', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Paharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '563', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Patna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '564', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Phulwari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '565', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Piro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '566', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Purnia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '567', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Pusa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '568', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Rafiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '569', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Raghunathpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '570', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Rajgir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '571', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Ramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '572', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Raxaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '573', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Revelganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '574', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Rusera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '575', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sagauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '576', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Saharsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '577', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Samastipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '578', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sasaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '579', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Shahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '580', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Shaikhpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '581', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sherghati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '582', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Shivhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '583', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Silao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '584', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sitamarhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '585', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Siwan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '586', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sonepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '587', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Sultanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '588', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Supaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '589', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Teghra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '590', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Tekari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '591', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Thakurganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '592', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Vaishali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '593', 'country_id' => '101', 'state_id' => '5', 'city_name' => 'Waris Aliganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '594', 'country_id' => '101', 'state_id' => '6', 'city_name' => 'Chandigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '595', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Ahiwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '596', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Akaltara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '597', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Ambagarh Chauki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '598', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Ambikapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '599', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Arang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '600', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bade Bacheli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '601', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bagbahara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '602', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Baikunthpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '603', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Balod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '604', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Baloda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '605', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Baloda Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '606', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Banarsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '607', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Basna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '608', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bemetra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '609', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bhanpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '610', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bhatapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '611', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bhatgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '612', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bhilai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '613', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bilaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '614', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bilha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '615', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Birgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '616', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Bodri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '617', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Champa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '618', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Charcha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '619', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Charoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '620', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Chhuikhadan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '621', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Chirmiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '622', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dantewada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '623', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Deori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '624', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dhamdha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '625', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dhamtari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '626', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dharamjaigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '627', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dipka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '628', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Doman Hill Colliery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '629', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dongargaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '630', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Dongragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '631', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Durg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '632', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Frezarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '633', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gandai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '634', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gariaband', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '635', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gaurela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '636', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gelhapani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '637', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gharghoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '638', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gidam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '639', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gobra Nawapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '640', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Gogaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '641', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Hatkachora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '642', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Jagdalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '643', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Jamui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '644', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Jashpurnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '645', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Jhagrakhand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '646', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kanker', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '647', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Katghora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '648', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kawardha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '649', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Khairagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '650', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Khamhria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '651', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kharod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '652', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kharsia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '653', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Khonga Pani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '654', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kirandu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '655', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kirandul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '656', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kohka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '657', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kondagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '658', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Korba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '659', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Korea', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '660', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Koria Block', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '661', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '662', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kumhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '663', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kumud Katta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '664', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kurasia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '665', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Kurud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '666', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Lingiyadih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '667', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Lormi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '668', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mahasamund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '669', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mahendragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '670', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mehmand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '671', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mongra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '672', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mowa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '673', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Mungeli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '674', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Nailajanjgir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '675', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Namna Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '676', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Naya Baradwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '677', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Pandariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '678', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Patan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '679', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Pathalgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '680', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Pendra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '681', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Phunderdihari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '682', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Pithora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '683', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Raigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '684', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Raipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '685', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Rajgamar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '686', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Rajhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '687', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Rajnandgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '688', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Ramanuj Ganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '689', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Ratanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '690', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Sakti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '691', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Saraipali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '692', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Sarajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '693', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Sarangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '694', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Shivrinarayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '695', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Simga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '696', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Sirgiti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '697', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Takhatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '698', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Telgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '699', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Tildanewra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '700', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Urla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '701', 'country_id' => '101', 'state_id' => '7', 'city_name' => 'Vishrampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '702', 'country_id' => '101', 'state_id' => '8', 'city_name' => 'Amli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '703', 'country_id' => '101', 'state_id' => '8', 'city_name' => 'Silvassa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '704', 'country_id' => '101', 'state_id' => '9', 'city_name' => 'Daman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '705', 'country_id' => '101', 'state_id' => '9', 'city_name' => 'Diu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '706', 'country_id' => '101', 'state_id' => '10', 'city_name' => 'Delhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '707', 'country_id' => '101', 'state_id' => '10', 'city_name' => 'New Delhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '708', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Aldona', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '709', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Altinho', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '710', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Aquem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '711', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Arpora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '712', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Bambolim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '713', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Bandora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '714', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Bardez', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '715', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Benaulim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '716', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Betora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '717', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Bicholim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '718', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Calapor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '719', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Candolim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '720', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Caranzalem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '721', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Carapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '722', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Chicalim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '723', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Chimbel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '724', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Chinchinim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '725', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Colvale', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '726', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Corlim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '727', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Cortalim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '728', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Cuncolim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '729', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Curchorem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '730', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Curti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '731', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Davorlim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '732', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Dona Paula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '733', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Goa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '734', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Guirim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '735', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Jua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '736', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Kalangat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '737', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Kankon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '738', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Kundaim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '739', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Loutulim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '740', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Madgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '741', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Mapusa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '742', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Margao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '743', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Margaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '744', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Miramar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '745', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Morjim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '746', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Mormugao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '747', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Navelim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '748', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Pale', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '749', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Panaji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '750', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Parcem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '751', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Parra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '752', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Penha de Franca', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '753', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Pernem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '754', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Pilerne', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '755', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Pissurlem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '756', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Ponda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '757', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Porvorim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '758', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Quepem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '759', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Queula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '760', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Raia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '761', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Reis Magos', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '762', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Salcette', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '763', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Saligao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '764', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sancoale', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '765', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sanguem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '766', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sanquelim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '767', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sanvordem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '768', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sao Jose-de-Areal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '769', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sattari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '770', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Serula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '771', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Sinquerim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '772', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Siolim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '773', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Taleigao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '774', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Tivim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '775', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Valpoi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '776', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Varca', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '777', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Vasco', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '778', 'country_id' => '101', 'state_id' => '11', 'city_name' => 'Verna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '779', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Abrama', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '780', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Adalaj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '781', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Adityana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '782', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Advana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '783', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ahmedabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '784', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ahwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '785', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Alang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '786', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ambaji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '787', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ambaliyasan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '788', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Amod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '789', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Amreli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '790', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Amroli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '791', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Anand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '792', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Andada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '793', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Anjar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '794', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Anklav', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '795', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ankleshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '796', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Anklesvar INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '797', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Antaliya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '798', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Arambhada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '799', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Asarma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '800', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Atul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '801', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Babra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '802', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bag-e-Firdosh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '803', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bagasara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '804', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bahadarpar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '805', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bajipura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '806', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bajva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '807', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Balasinor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '808', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Banaskantha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '809', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bansda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '810', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bantva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '811', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bardoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '812', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Barwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '813', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bayad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '814', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bechar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '815', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bedi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '816', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Beyt', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '817', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhachau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '818', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhanvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '819', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bharuch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '820', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bharuch INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '821', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhavnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '822', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhayavadar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '823', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhestan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '824', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bhuj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '825', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bilimora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '826', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bilkha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '827', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Billimora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '828', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bodakdev', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '829', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bodeli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '830', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Bopal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '831', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Boria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '832', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Boriavi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '833', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Borsad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '834', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Botad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '835', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Cambay', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '836', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chaklasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '837', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '838', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chalala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '839', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chalthan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '840', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chanasma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '841', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chandisar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '842', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chandkheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '843', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chanod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '844', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chaya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '845', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chenpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '846', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chhapi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '847', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chhaprabhatha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '848', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chhatral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '849', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chhota Udepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '850', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chikhli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '851', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chiloda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '852', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chorvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '853', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Chotila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '854', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dabhoi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '855', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dadara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '856', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dahod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '857', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dakor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '858', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Damnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '859', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Deesa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '860', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Delvada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '861', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Devgadh Baria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '862', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Devsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '863', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhandhuka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '864', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhanera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '865', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhangdhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '866', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhansura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '867', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dharampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '868', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '869', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '870', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dholka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '871', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dholka Rural', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '872', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhoraji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '873', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhrangadhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '874', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhrol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '875', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhuva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '876', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dhuwaran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '877', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Digvijaygram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '878', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Disa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '879', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dungar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '880', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dungarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '881', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dungra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '882', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Dwarka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '883', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Flelanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '884', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'GSFC Complex', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '885', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gadhda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '886', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gandevi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '887', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gandhidham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '888', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gandhinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '889', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gariadhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '890', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ghogha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '891', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Godhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '892', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Gondal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '893', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Hajira INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '894', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Halol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '895', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Halvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '896', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Hansot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '897', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Harij', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '898', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Himatnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '899', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ichchhapor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '900', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Idar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '901', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jafrabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '902', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jalalpore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '903', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jambusar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '904', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jamjodhpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '905', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jamnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '906', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jasdan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '907', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jawaharnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '908', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jetalsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '909', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jetpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '910', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Jodiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '911', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Joshipura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '912', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Junagadh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '913', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '914', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kadodara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '915', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kalavad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '916', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '917', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kaliawadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '918', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kalol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '919', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kalol INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '920', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kandla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '921', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kanjari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '922', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kanodar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '923', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kapadwanj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '924', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Karachiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '925', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Karamsad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '926', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Karjan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '927', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kathial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '928', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kathor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '929', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Katpar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '930', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kavant', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '931', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Keshod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '932', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kevadiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '933', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Khambhaliya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '934', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Khambhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '935', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kharaghoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '936', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Khed Brahma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '937', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '938', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kheralu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '939', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kodinar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '940', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kosamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '941', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kundla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '942', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kutch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '943', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Kutiyana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '944', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Lakhtar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '945', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Lalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '946', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Lambha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '947', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Lathi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '948', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Limbdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '949', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Limla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '950', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Lunavada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '951', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Madhapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '952', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Maflipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '953', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mahemdavad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '954', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mahudha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '955', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mahuva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '956', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mahuvar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '957', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Makarba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '958', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Makarpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '959', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Makassar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '960', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Maktampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '961', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Malia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '962', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Malpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '963', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Manavadar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '964', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mandal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '965', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mandvi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '966', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mangrol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '967', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mansa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '968', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Meghraj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '969', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mehsana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '970', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mendarla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '971', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mithapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '972', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Modasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '973', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mogravadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '974', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Morbi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '975', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Morvi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '976', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Mundra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '977', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Nadiad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '978', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Naliya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '979', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Nanakvada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '980', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Nandej', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '981', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Nandesari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '982', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Nandesari INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '983', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Naroda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '984', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Navagadh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '985', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Navagam Ghed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '986', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Navsari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '987', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '988', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Okaf', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '989', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Okha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '990', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Olpad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '991', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Paddhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '992', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Padra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '993', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Palanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '994', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Palej', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '995', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Pali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '996', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Palitana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '997', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Paliyad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '998', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Pandesara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '999', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Panoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1000', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Pardi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1001', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Parnera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1002', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Parvat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1003', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Patan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1004', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Patdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1005', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Petlad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1006', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Petrochemical Complex', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1007', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Porbandar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1008', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Prantij', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1009', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Radhanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1010', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Raiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1011', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Rajkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1012', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Rajpipla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1013', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Rajula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1014', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ramod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1015', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ranavav', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1016', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ranoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1017', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Rapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1018', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sahij', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1019', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Salaya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1020', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sanand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1021', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sankheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1022', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Santrampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1023', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Saribujrang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1024', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sarigam INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1025', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1026', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sayla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1027', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Shahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1028', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Shahwadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1029', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Shapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1030', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Shivrajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1031', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Siddhapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1032', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sidhpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1033', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sihor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1034', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sika', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1035', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Singarva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1036', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sinor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1037', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sojitra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1038', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Sola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1039', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Songadh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1040', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Suraj Karadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1041', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Surat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1042', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Surendranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1043', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Talaja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1044', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Talala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1045', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Talod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1046', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Tankara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1047', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Tarsali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1048', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Thangadh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1049', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Tharad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1050', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Thasra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1051', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Udyognagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1052', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Ukai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1053', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Umbergaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1054', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Umbergaon INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1055', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Umrala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1056', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Umreth', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1057', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Un', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1058', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Una', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1059', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Unjha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1060', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Upleta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1061', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Utran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1062', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Uttarsanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1063', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'V.U. Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1064', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'V.V. Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1065', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vadia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1066', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vadla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1067', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vadnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1068', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vadodara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1069', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vaghodia INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1070', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Valbhipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1071', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vallabh Vidyanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1072', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Valsad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1073', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Valsad INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1074', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vanthali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1075', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vapi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1076', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vapi INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1077', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vartej', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1078', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vasad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1079', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vasna Borsad INA', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1080', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vaso', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1081', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Veraval', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1082', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vidyanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1083', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vijalpor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1084', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vijapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1085', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vinchhiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1086', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vinzol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1087', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Virpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1088', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Visavadar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1089', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Visnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1090', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Vyara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1091', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Wadhwan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1092', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Waghai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1093', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Waghodia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1094', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Wankaner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1095', 'country_id' => '101', 'state_id' => '12', 'city_name' => 'Zalod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1096', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ambala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1097', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ambala Cantt', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1098', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Asan Khurd', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1099', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Asandh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1100', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ateli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1101', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Babiyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1102', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Bahadurgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1103', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ballabgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1104', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Barwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1105', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Bawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1106', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Bawani Khera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1107', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Beri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1108', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Bhiwani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1109', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Bilaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1110', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Buria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1111', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Charkhi Dadri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1112', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Chhachhrauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1113', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Chita', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1114', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Dabwali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1115', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Dharuhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1116', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Dundahera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1117', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ellenabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1118', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Farakhpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1119', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Faridabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1120', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Farrukhnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1121', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Fatehabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1122', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Firozpur Jhirka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1123', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Gannaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1124', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ghraunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1125', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Gohana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1126', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Gurgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1127', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Haileymandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1128', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hansi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1129', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hasanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1130', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hathin', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1131', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hisar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1132', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hissar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1133', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Hodal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1134', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Indri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1135', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Jagadhri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1136', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Jakhal Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1137', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Jhajjar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1138', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Jind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1139', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Julana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1140', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kaithal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1141', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kalanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1142', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kalanwali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1143', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kalayat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1144', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kalka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1145', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kanina', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1146', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kansepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1147', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kardhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1148', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Karnal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1149', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kharkhoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1150', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kheri Sampla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1151', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kundli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1152', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Kurukshetra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1153', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ladrawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1154', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ladwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1155', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Loharu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1156', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Maham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1157', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Mahendragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1158', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Mustafabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1159', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Nagai Chaudhry', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1160', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Narayangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1161', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Narnaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1162', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Narnaund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1163', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Narwana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1164', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Nilokheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1165', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Nuh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1166', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Palwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1167', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Panchkula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1168', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Panipat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1169', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Panipat Taraf Ansar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1170', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Panipat Taraf Makhdum Zadgan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1171', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Panipat Taraf Rajputan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1172', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Pehowa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1173', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Pinjaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1174', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Punahana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1175', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Pundri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1176', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Radaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1177', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Raipur Rani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1178', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Rania', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1179', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ratiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1180', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Rewari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1181', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Rohtak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1182', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Ropar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1183', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sadauri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1184', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Safidon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1185', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Samalkha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1186', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sankhol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1187', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sasauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1188', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Shahabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1189', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sirsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1190', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Siwani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1191', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sohna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1192', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sonipat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1193', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Sukhrali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1194', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Taoru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1195', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Taraori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1196', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Tauru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1197', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Thanesar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1198', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Tilpat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1199', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Tohana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1200', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Tosham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1201', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Uchana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1202', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Uklana Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1203', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Uncha Siwana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1204', 'country_id' => '101', 'state_id' => '13', 'city_name' => 'Yamunanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1205', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Arki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1206', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Baddi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1207', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Bakloh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1208', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Banjar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1209', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Bhota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1210', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Bhuntar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1211', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Bilaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1212', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Chamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1213', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Chaupal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1214', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Chuari Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1215', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dagshai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1216', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dalhousie', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1217', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dalhousie Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1218', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Damtal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1219', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Daulatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1220', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dera Gopipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1221', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dhalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1222', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Dharamshala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1223', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Gagret', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1224', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Ghamarwin', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1225', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Hamirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1226', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Jawala Mukhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1227', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Jogindarnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1228', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Jubbal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1229', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Jutogh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1230', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kala Amb', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1231', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kalpa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1232', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kangra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1233', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kasauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1234', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kot Khai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1235', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kullu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1236', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Kulu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1237', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Manali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1238', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1239', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Mant Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1240', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Mehatpur Basdehra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1241', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Nadaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1242', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Nagrota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1243', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Nahan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1244', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Naina Devi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1245', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Nalagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1246', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Narkanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1247', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Nurpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1248', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Palampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1249', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Pandoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1250', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Paonta Sahib', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1251', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Parwanoo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1252', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Parwanu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1253', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Rajgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1254', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Rampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1255', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Rawalsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1256', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Rohru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1257', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sabathu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1258', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Santokhgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1259', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sarahan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1260', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sarka Ghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1261', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Seoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1262', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Shimla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1263', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sirmaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1264', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Solan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1265', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Solon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1266', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sundarnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1267', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Sundernagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1268', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Talai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1269', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Theog', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1270', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Tira Sujanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1271', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Una', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1272', 'country_id' => '101', 'state_id' => '14', 'city_name' => 'Yol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1273', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Achabal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1274', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Akhnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1275', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Anantnag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1276', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Arnia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1277', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Awantipora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1278', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Badami Bagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1279', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bandipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1280', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Banihal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1281', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Baramula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1282', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Baramulla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1283', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bari Brahmana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1284', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bashohli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1285', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Batote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1286', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bhaderwah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1287', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bijbiara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1288', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Billawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1289', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Birwah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1290', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Bishna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1291', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Budgam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1292', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Charari Sharief', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1293', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Chenani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1294', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Doda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1295', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Duru-Verinag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1296', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Gandarbat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1297', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Gho Manhasan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1298', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Gorah Salathian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1299', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Gulmarg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1300', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Hajan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1301', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Handwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1302', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Hiranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1303', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Jammu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1304', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Jammu Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1305', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Jammu Tawi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1306', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Jourian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1307', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kargil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1308', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kathua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1309', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Katra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1310', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Khan Sahib', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1311', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Khour', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1312', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Khrew', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1313', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kishtwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1314', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1315', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kukernag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1316', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kulgam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1317', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kunzer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1318', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Kupwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1319', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Lakhenpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1320', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Leh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1321', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Magam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1322', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Mattan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1323', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Naushehra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1324', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Pahalgam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1325', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Pampore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1326', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Parole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1327', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Pattan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1328', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Pulwama', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1329', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Punch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1330', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Qazigund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1331', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Rajauri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1332', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Ramban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1333', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Ramgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1334', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Ramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1335', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Ranbirsingh Pora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1336', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Reasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1337', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Rehambal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1338', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Samba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1339', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Shupiyan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1340', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Sopur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1341', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Srinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1342', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Sumbal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1343', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Sunderbani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1344', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Talwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1345', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Thanamandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1346', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Tral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1347', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Udhampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1348', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Uri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1349', 'country_id' => '101', 'state_id' => '15', 'city_name' => 'Vijaypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1350', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Adityapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1351', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Amlabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1352', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Angarpathar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1353', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1354', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Babua Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1355', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bagbahra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1356', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Baliapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1357', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Baliari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1358', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Balkundra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1359', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bandhgora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1360', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barajamda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1361', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1362', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barka Kana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1363', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barki Saraiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1364', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barughutu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1365', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Barwadih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1366', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Basaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1367', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Basukinath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1368', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bermo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1369', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bhagatdih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1370', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bhaurah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1371', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bhojudih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1372', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bhuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1373', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bokaro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1374', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Borio Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1375', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Bundu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1376', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chaibasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1377', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chaitudih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1378', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chakradharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1379', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chakulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1380', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chandaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1381', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chandil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1382', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chandrapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1383', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1384', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chatra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1385', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chhatatanr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1386', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chhotaputki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1387', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chiria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1388', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Chirkunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1389', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Churi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1390', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Daltenganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1391', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Danguwapasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1392', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1393', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Deoghar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1394', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Deorikalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1395', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Devghar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1396', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dhanbad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1397', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dhanwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1398', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dhaunsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1399', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dugda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1400', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dumarkunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1401', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Dumka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1402', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Egarkunr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1403', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gadhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1404', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Garwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1405', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ghatsila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1406', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ghorabandha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1407', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gidi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1408', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Giridih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1409', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gobindpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1410', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Godda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1411', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Godhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1412', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Golphalbari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1413', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gomoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1414', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1415', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gumia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1416', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Gumla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1417', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Haludbani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1418', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Hazaribag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1419', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Hesla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1420', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Husainabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1421', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Isri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1422', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jadugora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1423', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jagannathpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1424', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jamadoba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1425', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jamshedpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1426', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jamtara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1427', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jarangdih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1428', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jaridih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1429', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jasidih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1430', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jena', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1431', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jharia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1432', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jharia Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1433', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jhinkpani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1434', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jhumri Tilaiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1435', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jorapokhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1436', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Jugsalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1437', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kailudih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1438', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kalikapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1439', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kandra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1440', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kanke', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1441', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Katras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1442', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kedla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1443', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kenduadih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1444', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kharkhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1445', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kharsawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1446', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Khelari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1447', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Khunti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1448', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kiri Buru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1449', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kiriburu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1450', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kodarma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1451', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kuju', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1452', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kurpania', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1453', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Kustai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1454', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Lakarka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1455', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Lapanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1456', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Latehar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1457', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Lohardaga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1458', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Loiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1459', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Loyabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1460', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Madhupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1461', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mahesh Mundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1462', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Maithon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1463', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Malkera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1464', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mango', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1465', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Manoharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1466', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Marma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1467', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Meghahatuburu Forest village', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1468', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1469', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Meru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1470', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mihijam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1471', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mugma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1472', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Muri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1473', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Mushabani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1474', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Nagri Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1475', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Netarhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1476', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Nirsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1477', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Noamundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1478', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Okni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1479', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Orla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1480', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Pakaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1481', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Palamau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1482', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Palawa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1483', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Panchet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1484', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Panrra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1485', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Paratdih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1486', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Pathardih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1487', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Patratu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1488', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Phusro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1489', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Pondar Kanali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1490', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Rajmahal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1491', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ramgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1492', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ranchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1493', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Ray', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1494', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Rehla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1495', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Religara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1496', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Rohraband', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1497', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sahibganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1498', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sahnidih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1499', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Saraidhela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1500', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Saraikela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1501', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sarjamda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1502', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Saunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1503', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sewai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1504', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sijhua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1505', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sijua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1506', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Simdega', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1507', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sindari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1508', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sinduria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1509', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sini', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1510', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Sirka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1511', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Siuliban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1512', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Surubera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1513', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Tati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1514', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Tenudam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1515', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Tisra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1516', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Topa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1517', 'country_id' => '101', 'state_id' => '16', 'city_name' => 'Topchanchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1518', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Adityanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1519', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Adityapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1520', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Afzalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1521', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ajjampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1522', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Aland', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1523', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Almatti Sitimani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1524', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Alnavar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1525', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Alur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1526', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ambikanagara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1527', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Anekal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1528', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ankola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1529', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Annigeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1530', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Arkalgud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1531', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Arsikere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1532', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Athni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1533', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Aurad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1534', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Badagavettu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1535', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Badami', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1536', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bagalkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1537', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bagepalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1538', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bailhongal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1539', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Baindur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1540', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bajala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1541', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bajpe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1542', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Banavar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1543', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bangarapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1544', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bankapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1545', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1546', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bantwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1547', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Basavakalyan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1548', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Basavana Bagevadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1549', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belagula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1550', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belakavadiq', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1551', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belgaum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1552', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belgaum Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1553', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bellary', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1554', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belluru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1555', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Beltangadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1556', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1557', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Belvata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1558', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bengaluru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1559', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bhadravati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1560', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bhalki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1561', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bhatkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1562', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bhimarayanagudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1563', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bhogadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1564', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bidar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1565', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bijapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1566', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bilgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1567', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Birur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1568', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bommanahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1569', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Bommasandra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1570', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Byadgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1571', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Byatarayanapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1572', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chakranagar Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1573', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Challakere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1574', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chamrajnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1575', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chamundi Betta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1576', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Channagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1577', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Channapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1578', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Channarayapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1579', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chickballapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1580', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chik Ballapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1581', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chikkaballapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1582', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chikmagalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1583', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chiknayakanhalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1584', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chikodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1585', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chincholi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1586', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chintamani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1587', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chitaguppa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1588', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chitapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1589', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Chitradurga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1590', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Coorg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1591', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dandeli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1592', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dargajogihalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1593', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dasarahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1594', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Davangere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1595', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Devadurga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1596', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Devagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1597', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Devanhalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1598', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dharwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1599', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dhupdal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1600', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Dod Ballapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1601', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Donimalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1602', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gadag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1603', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gajendragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1604', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ganeshgudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1605', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gangawati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1606', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gangoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1607', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gauribidanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1608', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gokak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1609', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gokak Falls', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1610', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gonikoppal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1611', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gorur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1612', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gottikere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1613', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gubbi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1614', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gudibanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1615', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gulbarga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1616', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Guledgudda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1617', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gundlupet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1618', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Gurmatkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1619', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Haliyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1620', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1621', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Harihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1622', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Harpanahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1623', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hassan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1624', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1625', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hatti Gold Mines', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1626', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Haveri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1627', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hebbagodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1628', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hebbalu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1629', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hebri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1630', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Heggadadevanakote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1631', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Herohalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1632', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hidkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1633', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hindalgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1634', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hirekerur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1635', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hiriyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1636', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Holalkere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1637', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hole Narsipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1638', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Homnabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1639', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Honavar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1640', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Honnali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1641', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hosakote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1642', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hosanagara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1643', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hosangadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1644', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hosdurga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1645', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hoskote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1646', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hospet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1647', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hubli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1648', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hukeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1649', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hunasagi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1650', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hunasamaranahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1651', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hungund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1652', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Hunsur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1653', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Huvina Hadagalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1654', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ilkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1655', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Indi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1656', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Jagalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1657', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Jamkhandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1658', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Jevargi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1659', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Jog Falls', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1660', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kabini Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1661', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kadur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1662', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kalghatgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1663', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kamalapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1664', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kampli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1665', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kanakapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1666', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kangrali BK', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1667', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kangrali KH', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1668', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1669', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Karkala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1670', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Karwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1671', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kemminja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1672', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kengeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1673', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kerur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1674', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Khanapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1675', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kodigenahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1676', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kodiyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1677', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kodlipet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1678', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kolar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1679', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kollegal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1680', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Konanakunte', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1681', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Konanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1682', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Konnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1683', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Koppa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1684', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Koppal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1685', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Koratagere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1686', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kotekara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1687', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kothnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1688', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kotturu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1689', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Krishnapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1690', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Krishnarajanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1691', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Krishnarajapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1692', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Krishnarajasagara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1693', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Krishnarajpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1694', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kudchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1695', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kudligi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1696', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kudremukh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1697', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kumsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1698', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kumta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1699', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kundapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1700', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kundgol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1701', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kunigal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1702', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kurgunta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1703', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kushalnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1704', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kushtagi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1705', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Kyathanahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1706', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Lakshmeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1707', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Lingsugur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1708', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Londa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1709', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Maddur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1710', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Madhugiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1711', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Madikeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1712', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Magadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1713', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Magod Falls', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1714', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mahadeswara Hills', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1715', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mahadevapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1716', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mahalingpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1717', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Maisuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1718', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Maisuru Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1719', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Malavalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1720', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mallar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1721', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Malpe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1722', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Malur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1723', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Manchenahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1724', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mandya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1725', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mangalore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1726', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mangaluru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1727', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Manipal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1728', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Manvi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1729', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Maski', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1730', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mastikatte Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1731', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mayakonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1732', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Melukote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1733', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Molakalmuru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1734', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudalgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1735', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudbidri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1736', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Muddebihal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1737', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudgal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1738', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudhol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1739', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudigere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1740', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mudushedde', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1741', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mulbagal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1742', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mulgund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1743', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mulki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1744', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mulur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1745', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mundargi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1746', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mundgod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1747', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Munirabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1748', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Munnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1749', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Murudeshwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1750', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Mysore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1751', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nagamangala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1752', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nanjangud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1753', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Naragund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1754', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Narasimharajapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1755', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Naravi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1756', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Narayanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1757', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Naregal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1758', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Navalgund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1759', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nelmangala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1760', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nipani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1761', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nitte', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1762', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Nyamati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1763', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Padu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1764', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Pandavapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1765', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Pattanagere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1766', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Pavagada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1767', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Piriyapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1768', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ponnampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1769', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Puttur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1770', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Rabkavi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1771', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Raichur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1772', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ramanagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1773', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ramdurg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1774', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ranibennur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1775', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Raybag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1776', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Robertsonpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1777', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ron', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1778', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sadalgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1779', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1780', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sakleshpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1781', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Saligram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1782', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1783', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sanivarsante', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1784', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sankeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1785', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sargur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1786', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sathyamangala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1787', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Saundatti Yellamma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1788', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Savanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1789', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sedam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1790', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shahabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1791', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shahabad A.C.C.', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1792', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shahapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1793', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1794', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shaktinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1795', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shiggaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1796', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shikarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1797', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shimoga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1798', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shirhatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1799', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shorapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1800', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shravanabelagola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1801', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Shrirangapattana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1802', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Siddapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1803', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sidlaghatta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1804', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sindgi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1805', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sindhnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1806', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1807', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sirakoppa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1808', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sirsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1809', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Siruguppa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1810', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Someshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1811', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Somvarpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1812', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sorab', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1813', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sringeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1814', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Srinivaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1815', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Sulya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1816', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Suntikopa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1817', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Talikota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1818', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tarikera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1819', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tekkalakota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1820', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Terdal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1821', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Thokur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1822', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Thumbe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1823', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tiptur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1824', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tirthahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1825', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tirumakudal Narsipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1826', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tonse', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1827', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Tumkur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1828', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Turuvekere', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1829', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Udupi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1830', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Ullal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1831', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Uttarahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1832', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Venkatapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1833', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Vijayapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1834', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Virarajendrapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1835', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Wadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1836', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Wadi A.C.C.', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1837', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yadgir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1838', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yelahanka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1839', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yelandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1840', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yelbarga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1841', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yellapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1842', 'country_id' => '101', 'state_id' => '17', 'city_name' => 'Yenagudde', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1843', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Adimaly', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1844', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Adoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1845', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Adur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1846', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Akathiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1847', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Alangad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1848', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Alappuzha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1849', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Aluva', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1850', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ancharakandy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1851', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Angamaly', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1852', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Aroor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1853', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Arukutti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1854', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Attingal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1855', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Avinissery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1856', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Azhikode North', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1857', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Azhikode South', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1858', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Azhiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1859', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Balussery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1860', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Bangramanjeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1861', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Beypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1862', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Brahmakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1863', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1864', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chalakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1865', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Changanacheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1866', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chauwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1867', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chavakkad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1868', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chelakkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1869', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chelora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1870', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chendamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1871', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chengamanad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1872', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chengannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1873', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cheranallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1874', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cheriyakadavu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1875', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cherthala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1876', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cherukunnu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1877', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cheruthazham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1878', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cheruvannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1879', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Cheruvattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1880', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chevvur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1881', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chirakkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1882', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chittur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1883', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Chockli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1884', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Churnikkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1885', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Dharmadam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1886', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Edappal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1887', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Edathala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1888', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Elayavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1889', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Elur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1890', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Eranholi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1891', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Erattupetta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1892', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ernakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1893', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Eruvatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1894', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ettumanoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1895', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Feroke', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1896', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Guruvayur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1897', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Haripad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1898', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Hosabettu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1899', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Idukki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1900', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Iringaprom', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1901', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Irinjalakuda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1902', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Iriveri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1903', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kadachira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1904', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kadalundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1905', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kadamakkudy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1906', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kadirur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1907', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kadungallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1908', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kakkodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1909', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kalady', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1910', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kalamassery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1911', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kalliasseri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1912', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kalpetta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1913', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kanhangad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1914', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kanhirode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1915', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kanjikkuzhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1916', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kanjikode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1917', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kanjirappalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1918', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kannadiparamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1919', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kannangad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1920', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kannapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1921', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1922', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kannur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1923', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Karunagappally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1924', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Karuvamyhuruthy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1925', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kasaragod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1926', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kasargod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1927', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kattappana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1928', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kayamkulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1929', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kedamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1930', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kochi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1931', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kodamthuruthu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1932', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kodungallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1933', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Koduvally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1934', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Koduvayur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1935', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kokkothamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1936', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kolazhy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1937', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kollam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1938', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Komalapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1939', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Koothattukulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1940', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Koratty', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1941', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kothamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1942', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kottarakkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1943', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kottayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1944', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kottayam Malabar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1945', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kottuvally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1946', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Koyilandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1947', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kozhikode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1948', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kudappanakunnu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1949', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kudlu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1950', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kumarakom', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1951', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kumily', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1952', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kunnamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1953', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kunnamkulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1954', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kurikkad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1955', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kurkkanchery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1956', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kuthuparamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1957', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kuttakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1958', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kuttikkattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1959', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Kuttur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1960', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Malappuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1961', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mallappally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1962', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Manjeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1963', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Manjeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1964', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mannancherry', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1965', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mannar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1966', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mannarakkat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1967', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Maradu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1968', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Marathakkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1969', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Marutharod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1970', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mattannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1971', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mavelikara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1972', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mavilayi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1973', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1974', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Methala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1975', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Muhamma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1976', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mulavukad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1977', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Mundakayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1978', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Munderi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1979', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Munnar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1980', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Muthakunnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1981', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Muvattupuzha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1982', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Muzhappilangad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1983', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nadapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1984', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nadathara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1985', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Narath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1986', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nattakam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1987', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nedumangad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1988', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nenmenikkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1989', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'New Mahe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1990', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Neyyattinkara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1991', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Nileshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1992', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Olavanna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1993', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ottapalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1994', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ottappalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1995', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Paduvilayi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1996', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Palai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1997', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Palakkad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1998', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Palayad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '1999', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Palissery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2000', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pallikkunnu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2001', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Paluvai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2002', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Panniyannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2003', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pantalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2004', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Panthiramkavu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2005', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Panur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2006', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pappinisseri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2007', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Parassala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2008', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Paravur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2009', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pathanamthitta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2010', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pathanapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2011', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pathiriyad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2012', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pattambi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2013', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pattiom', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2014', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pavaratty', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2015', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Payyannur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2016', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Peermade', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2017', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perakam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2018', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Peralasseri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2019', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Peringathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2020', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perinthalmanna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2021', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2022', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perumanna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2023', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perumbaikadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2024', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Perumbavoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2025', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pinarayi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2026', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Piravam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2027', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ponnani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2028', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pottore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2029', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Pudukad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2030', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Punalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2031', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Puranattukara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2032', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Puthunagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2033', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Puthuppariyaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2034', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Puzhathi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2035', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Ramanattukara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2036', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Shoranur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2037', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Sultans Battery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2038', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Sulthan Bathery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2039', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Talipparamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2040', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thaikkad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2041', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thalassery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2042', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thannirmukkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2043', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Theyyalingal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2044', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thiruvalla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2045', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thiruvananthapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2046', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thiruvankulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2047', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thodupuzha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2048', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thottada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2049', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thrippunithura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2050', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Thrissur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2051', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Tirur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2052', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Udma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2053', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Vadakara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2054', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Vaikam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2055', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Valapattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2056', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Vallachira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2057', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Varam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2058', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Varappuzha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2059', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Varkala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2060', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Vayalar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2061', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Vazhakkala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2062', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Venmanad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2063', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Villiappally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2064', 'country_id' => '101', 'state_id' => '19', 'city_name' => 'Wayanad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2065', 'country_id' => '101', 'state_id' => '20', 'city_name' => 'Agethi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2066', 'country_id' => '101', 'state_id' => '20', 'city_name' => 'Amini', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2067', 'country_id' => '101', 'state_id' => '20', 'city_name' => 'Androth Island', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2068', 'country_id' => '101', 'state_id' => '20', 'city_name' => 'Kavaratti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2069', 'country_id' => '101', 'state_id' => '20', 'city_name' => 'Minicoy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2070', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Agar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2071', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ajaigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2072', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Akoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2073', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Akodia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2074', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Alampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2075', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Alirajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2076', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Alot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2077', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2078', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amarkantak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2079', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amarpatan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2080', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amarwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2081', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ambada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2082', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ambah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2083', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2084', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Amlai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2085', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Anjad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2086', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Antri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2087', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Anuppur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2088', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Aron', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2089', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ashoknagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2090', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ashta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2091', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Babai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2092', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bada Malhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2093', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2094', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badagoan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2095', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badarwas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2096', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badawada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2097', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2098', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badkuhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2099', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2100', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badnawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2101', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2102', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2103', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Badra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2104', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2105', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bagli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2106', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Baihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2107', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Baikunthpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2108', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bakswaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2109', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Balaghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2110', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Baldeogarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2111', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bamaniya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2112', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bamhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2113', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bamor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2114', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bamora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2115', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Banda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2116', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bangawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2117', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bansatar Kheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2118', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Baraily', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2119', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2120', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2121', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bargi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2122', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2123', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2124', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barwaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2125', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Barwani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2126', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Basoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2127', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Begamganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2128', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Beohari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2129', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Berasia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2130', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Betma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2131', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Betul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2132', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Betul Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2133', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhainsdehi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2134', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhamodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2135', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhander', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2136', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhanpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2137', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bharveli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2138', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhaurasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2139', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhavra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2140', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhedaghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2141', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhikangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2142', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhilakhedi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2143', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2144', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhitarwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2145', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhopal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2146', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bhuibandh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2147', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Biaora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2148', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bijawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2149', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bijeypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2150', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bijrauni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2151', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bijuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2152', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bilaua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2153', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bilpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2154', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bina Railway Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2155', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Bina-Etawa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2156', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Birsinghpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2157', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Boda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2158', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Budhni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2159', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Burhanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2160', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Burhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2161', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chachaura Binaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2162', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chakghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2163', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chandameta Butar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2164', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chanderi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2165', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chandia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2166', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chandla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2167', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chaurai Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2168', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chhatarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2169', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chhindwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2170', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chhota Chhindwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2171', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chichli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2172', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Chitrakut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2173', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Churhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2174', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Daboh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2175', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dabra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2176', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Damoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2177', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Damua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2178', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Datia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2179', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Deodara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2180', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Deori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2181', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Deori Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2182', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Depalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2183', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Devendranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2184', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Devhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2185', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dewas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2186', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dhamnod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2187', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2188', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dhanpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2189', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2190', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dharampuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2191', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dighawani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2192', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Diken', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2193', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dindori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2194', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2195', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dumar Kachhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2196', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Dungariya Chhapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2197', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gadarwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2198', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gairatganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2199', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gandhi Sagar Hydel Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2200', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ganjbasoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2201', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Garhakota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2202', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Garhi Malhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2203', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Garoth', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2204', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gautapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2205', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ghansor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2206', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ghuwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2207', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gogaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2208', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gogapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2209', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gohad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2210', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gormi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2211', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Govindgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2212', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Guna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2213', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gurh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2214', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Gwalior', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2215', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hanumana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2216', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Harda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2217', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Harpalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2218', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Harrai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2219', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Harsud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2220', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hatod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2221', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hatpipalya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2222', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hatta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2223', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hindoria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2224', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hirapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2225', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Hoshangabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2226', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ichhawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2227', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Iklehra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2228', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Indergarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2229', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Indore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2230', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Isagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2231', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Itarsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2232', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jabalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2233', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jabalpur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2234', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jabalpur G.C.F', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2235', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jaisinghnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2236', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jaithari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2237', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jaitwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2238', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jamai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2239', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jaora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2240', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jatachhapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2241', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jatara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2242', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2243', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2244', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jeronkhalsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2245', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jhabua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2246', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jhundpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2247', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jiran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2248', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jirapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2249', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Jobat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2250', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Joura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2251', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kailaras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2252', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kaimur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2253', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kakarhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2254', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kalichhapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2255', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kanad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2256', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kannod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2257', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kantaphod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2258', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kareli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2259', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Karera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2260', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2261', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Karnawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2262', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Karrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2263', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kasrawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2264', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Katangi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2265', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Katni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2266', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kelhauri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2267', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khachrod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2268', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khajuraho', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2269', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khamaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2270', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2271', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khandwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2272', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khaniyadhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2273', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khargapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2274', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khargone', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2275', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khategaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2276', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khetia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2277', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khilchipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2278', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khirkiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2279', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khujner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2280', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Khurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2281', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kolaras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2282', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kotar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2283', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kothi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2284', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kotma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2285', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kukshi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2286', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kumbhraj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2287', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Kurwai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2288', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Lahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2289', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Lakhnadon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2290', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Lateri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2291', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Laundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2292', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Lidhora Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2293', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Lodhikheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2294', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Loharda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2295', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Machalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2296', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Madhogarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2297', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Maharajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2298', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Maheshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2299', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mahidpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2300', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Maihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2301', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Majholi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2302', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Makronia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2303', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Maksi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2304', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Malaj Khand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2305', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Malanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2306', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Malhargarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2307', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Manasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2308', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Manawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2309', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mandav', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2310', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mandideep', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2311', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mandla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2312', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mandleshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2313', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mandsaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2314', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Manegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2315', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mangawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2316', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Manglaya Sadak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2317', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Manpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2318', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2319', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mauganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2320', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Meghnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2321', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mehara Gaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2322', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mehgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2323', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mhaugaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2324', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mhow', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2325', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mihona', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2326', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mohgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2327', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Morar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2328', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Morena', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2329', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Morwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2330', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Multai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2331', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2332', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Mungaoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2333', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Murwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2334', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nagda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2335', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nagod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2336', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nagri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2337', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Naigarhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2338', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nainpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2339', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nalkheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2340', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Namli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2341', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Narayangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2342', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Narsimhapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2343', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Narsingarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2344', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Narsinghpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2345', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Narwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2346', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nasrullaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2347', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Naudhia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2348', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Naugaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2349', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Naurozabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2350', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Neemuch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2351', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nepa Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2352', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Neuton Chikhli Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2353', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Nimach', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2354', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Niwari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2355', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Obedullaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2356', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Omkareshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2357', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Orachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2358', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ordinance Factory Itarsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2359', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pachmarhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2360', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pachmarhi Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2361', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pachore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2362', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Palchorai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2363', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Palda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2364', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Palera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2365', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2366', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Panagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2367', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Panara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2368', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pandaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2369', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pandhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2370', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pandhurna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2371', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Panna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2372', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pansemal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2373', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Parasia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2374', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pasan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2375', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Patan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2376', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Patharia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2377', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pawai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2378', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Petlawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2379', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Phuph Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2380', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pichhore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2381', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pipariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2382', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pipliya Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2383', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Piploda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2384', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Pithampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2385', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Polay Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2386', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Porsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2387', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Prithvipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2388', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Raghogarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2389', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rahatgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2390', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Raisen', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2391', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rajakhedi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2392', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rajgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2393', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rajnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2394', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2395', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rampur Baghelan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2396', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rampur Naikin', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2397', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rampura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2398', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ranapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2399', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ranipura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2400', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ratangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2401', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ratlam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2402', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ratlam Kasba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2403', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2404', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rehli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2405', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rehti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2406', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Rewa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2407', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sabalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2408', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2409', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sagar Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2410', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sailana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2411', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sanawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2412', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sanchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2413', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sanwer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2414', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sarangpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2415', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sardarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2416', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sarni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2417', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Satai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2418', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Satna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2419', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Satwas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2420', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sausar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2421', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sehore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2422', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Semaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2423', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sendhwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2424', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Seondha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2425', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Seoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2426', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Seoni Malwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2427', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sethia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2428', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shahdol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2429', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shahgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2430', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2431', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shahpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2432', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shajapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2433', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shamgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2434', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sheopur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2435', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shivpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2436', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Shujalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2437', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sidhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2438', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sihora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2439', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Singolo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2440', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Singrauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2441', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sinhasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2442', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sirgora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2443', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sirmaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2444', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sironj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2445', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sitamau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2446', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sohagpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2447', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sonkatch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2448', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Soyatkalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2449', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Suhagi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2450', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Sultanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2451', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Susner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2452', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Suthaliya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2453', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2454', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Talen', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2455', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tarana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2456', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Taricharkalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2457', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tekanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2458', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tendukheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2459', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Teonthar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2460', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Thandia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2461', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tikamgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2462', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Timarni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2463', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Tirodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2464', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Udaipura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2465', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ujjain', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2466', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Ukwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2467', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Umaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2468', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Unchahara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2469', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Unhel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2470', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Vehicle Factory Jabalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2471', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Vidisha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2472', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Vijayraghavgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2473', 'country_id' => '101', 'state_id' => '21', 'city_name' => 'Waraseoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2474', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Achalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2475', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Aheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2476', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ahmadnagar Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2477', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ahmadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2478', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ahmednagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2479', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ajra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2480', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Akalkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2481', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Akkalkuwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2482', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Akola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2483', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Akot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2484', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Alandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2485', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Alibag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2486', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Allapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2487', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Alore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2488', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Amalner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2489', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ambad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2490', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ambajogai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2491', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ambernath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2492', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ambivali Tarf Wankhal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2493', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Amgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2494', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Amravati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2495', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Anjangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2496', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Arvi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2497', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ashta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2498', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ashti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2499', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Aurangabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2500', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Aurangabad Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2501', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ausa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2502', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Babhulgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2503', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Badlapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2504', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Balapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2505', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ballarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2506', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Baramati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2507', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Barshi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2508', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Basmat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2509', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Beed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2510', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhadravati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2511', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhagur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2512', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhandara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2513', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhigvan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2514', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhingar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2515', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhiwandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2516', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhokhardan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2517', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2518', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhosari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2519', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2520', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bhusawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2521', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bid', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2522', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Biloli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2523', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Birwadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2524', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Boisar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2525', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Bop Khel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2526', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Brahmapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2527', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Budhgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2528', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Buldana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2529', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Buldhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2530', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Butibori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2531', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chakan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2532', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chalisgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2533', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chandrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2534', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2535', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chandur Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2536', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chandvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2537', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chicholi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2538', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chikhala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2539', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chikhaldara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2540', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chikhli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2541', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chinchani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2542', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chinchwad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2543', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chiplun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2544', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Chopda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2545', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dabhol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2546', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dahance', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2547', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dahanu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2548', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Daharu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2549', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dapoli Camp', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2550', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Darwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2551', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Daryapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2552', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dattapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2553', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Daund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2554', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Davlameti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2555', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Deglur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2556', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dehu Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2557', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Deolali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2558', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Deolali Pravara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2559', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Deoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2560', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Desaiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2561', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Deulgaon Raja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2562', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dewhadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2563', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dharangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2564', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dharmabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2565', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dharur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2566', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dhatau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2567', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dhule', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2568', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Digdoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2569', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Diglur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2570', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Digras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2571', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dombivli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2572', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dondaicha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2573', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dudhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2574', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Durgapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2575', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Dyane', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2576', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Edandol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2577', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Eklahare', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2578', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Faizpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2579', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Fekari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2580', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gadchiroli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2581', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gadhinghaj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2582', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gandhi Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2583', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ganeshpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2584', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gangakher', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2585', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gangapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2586', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gevrai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2587', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ghatanji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2588', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ghoti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2589', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ghugus', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2590', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ghulewadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2591', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Godoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2592', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Gondia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2593', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Guhagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2594', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Hadgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2595', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Harnai Beach', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2596', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Hinganghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2597', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Hingoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2598', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Hupari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2599', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ichalkaranji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2600', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Igatpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2601', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Indapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2602', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jaisinghpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2603', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jalgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2604', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jalna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2605', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jamkhed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2606', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jawhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2607', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jaysingpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2608', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jejuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2609', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Jintur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2610', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Junnar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2611', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kabnur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2612', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kagal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2613', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalamb', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2614', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalamnuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2615', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2616', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalmeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2617', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalundre', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2618', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kalyan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2619', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kamthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2620', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kamthi Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2621', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kandari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2622', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kandhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2623', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kandri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2624', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kandri II', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2625', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kanhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2626', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kankavli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2627', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kannad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2628', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2629', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karanja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2630', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karanje Tarf', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2631', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karivali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2632', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karjat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2633', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Karmala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2634', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kasara Budruk', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2635', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Katai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2636', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Katkar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2637', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Katol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2638', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2639', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khadkale', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2640', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khadki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2641', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khamgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2642', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khapa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2643', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kharadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2644', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kharakvasla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2645', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2646', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kherdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2647', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2648', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khopoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2649', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Khuldabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2650', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kinwat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2651', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kodoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2652', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kolhapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2653', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2654', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kondumal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2655', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kopargaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2656', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kopharad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2657', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Koradi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2658', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Koregaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2659', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Korochi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2660', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kudal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2661', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kundaim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2662', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kundalwadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2663', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kurandvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2664', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kurduvadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2665', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Kusgaon Budruk', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2666', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Lanja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2667', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Lasalgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2668', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Latur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2669', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Loha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2670', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Lohegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2671', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Lonar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2672', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Lonavala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2673', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Madhavnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2674', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mahabaleshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2675', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mahad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2676', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mahadula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2677', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Maindargi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2678', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Majalgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2679', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Malegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2680', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Malgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2681', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Malkapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2682', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Malwan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2683', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Manadur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2684', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Manchar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2685', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mangalvedhe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2686', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mangrul Pir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2687', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Manmad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2688', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Manor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2689', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mansar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2690', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Manwath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2691', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mapuca', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2692', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Matheran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2693', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mehkar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2694', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mhasla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2695', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mhaswad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2696', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mira Bhayandar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2697', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Miraj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2698', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mohpa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2699', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mohpada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2700', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Moram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2701', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Morshi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2702', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mowad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2703', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mudkhed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2704', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mukhed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2705', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2706', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mulshi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2707', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Mumbai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2708', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Murbad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2709', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Murgud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2710', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Murtijapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2711', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Murud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2712', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nachane', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2713', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nagardeole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2714', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nagothane', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2715', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nagpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2716', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nakoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2717', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nalasopara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2718', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Naldurg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2719', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nanded', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2720', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nandgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2721', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nandura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2722', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nandurbar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2723', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Narkhed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2724', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nashik', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2725', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Navapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2726', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Navi Mumbai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2727', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Navi Mumbai Panvel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2728', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Neral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2729', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nigdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2730', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nilanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2731', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nildoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2732', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Nimbhore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2733', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ojhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2734', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Osmanabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2735', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pachgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2736', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pachora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2737', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Padagha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2738', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Paithan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2739', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Palghar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2740', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2741', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Panchgani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2742', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pandhakarwada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2743', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pandharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2744', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Panhala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2745', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Panvel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2746', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Paranda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2747', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Parbhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2748', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Parli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2749', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Parola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2750', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Partur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2751', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pasthal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2752', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Patan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2753', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pathardi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2754', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pathri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2755', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Patur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2756', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pawni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2757', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pen', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2758', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pethumri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2759', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Phaltan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2760', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pimpri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2761', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Poladpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2762', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pulgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2763', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pune', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2764', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pune Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2765', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Purna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2766', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Purushottamnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2767', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Pusad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2768', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rahimatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2769', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rahta Pimplas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2770', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rahuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2771', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Raigad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2772', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rajapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2773', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rajgurunagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2774', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rajur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2775', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Rajura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2776', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ramtek', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2777', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ratnagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2778', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ravalgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2779', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Raver', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2780', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Revadanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2781', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Risod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2782', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Roha Ashtami', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2783', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sakri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2784', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sandor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2785', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sangamner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2786', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sangli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2787', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sangole', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2788', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sasti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2789', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sasvad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2790', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Satana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2791', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Satara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2792', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Savantvadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2793', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Savda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2794', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Savner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2795', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sawari Jawharnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2796', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Selu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2797', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shahada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2798', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shahapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2799', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2800', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shelar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2801', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shendurjana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2802', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shirdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2803', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shirgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2804', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2805', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shirur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2806', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shirwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2807', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shivatkar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2808', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shrigonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2809', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shrirampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2810', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Shrirampur Rural', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2811', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sillewada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2812', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sillod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2813', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sindhudurg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2814', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sindi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2815', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sindi Turf Hindnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2816', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sindkhed Raja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2817', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Singnapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2818', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sinnar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2819', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sirur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2820', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sitasawangi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2821', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Solapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2822', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sonai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2823', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Sonegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2824', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Soyagaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2825', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Srivardhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2826', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Surgana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2827', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Talegaon Dabhade', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2828', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Taloda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2829', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Taloja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2830', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Talwade', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2831', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tarapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2832', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tasgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2833', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tathavade', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2834', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tekadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2835', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Telhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2836', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Thane', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2837', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tirira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2838', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Totaladoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2839', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Trimbak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2840', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tuljapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2841', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Tumsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2842', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Uchgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2843', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Udgir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2844', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Ulhasnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2845', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umarga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2846', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umarkhed', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2847', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umarsara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2848', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umbar Pada Nandade', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2849', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umred', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2850', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Umri Pragane Balapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2851', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Uran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2852', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Uran Islampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2853', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Utekhol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2854', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2855', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vadgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2856', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vadgaon Kasba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2857', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vaijapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2858', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vanvadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2859', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Varangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2860', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vasai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2861', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vasantnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2862', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vashind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2863', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vengurla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2864', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Virar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2865', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Visapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2866', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vite', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2867', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Vithalwadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2868', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2869', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Waghapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2870', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2871', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wajegaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2872', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Walani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2873', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wanadongri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2874', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2875', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Wardha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2876', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Warora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2877', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Warthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2878', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Warud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2879', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Washim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2880', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Yaval', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2881', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Yavatmal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2882', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Yeola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2883', 'country_id' => '101', 'state_id' => '22', 'city_name' => 'Yerkheda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2884', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Andro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2885', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Bijoy Govinda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2886', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Bishnupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2887', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Churachandpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2888', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Heriok', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2889', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Imphal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2890', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Jiribam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2891', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Kakching', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2892', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Kakching Khunou', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2893', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Khongman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2894', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Kumbi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2895', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Kwakta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2896', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Lamai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2897', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Lamjaotongba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2898', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Lamshang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2899', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Lilong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2900', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Mayang Imphal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2901', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Moirang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2902', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Moreh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2903', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Nambol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2904', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Naoriya Pakhanglakpa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2905', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Ningthoukhong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2906', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Oinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2907', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Porompat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2908', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Samurou', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2909', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Sekmai Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2910', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Senapati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2911', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Sikhong Sekmai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2912', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Sugnu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2913', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Thongkhong Laxmi Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2914', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Thoubal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2915', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Torban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2916', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Wangjing', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2917', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Wangoi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2918', 'country_id' => '101', 'state_id' => '23', 'city_name' => 'Yairipok', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2919', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Baghmara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2920', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Cherrapunji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2921', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Jawai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2922', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Madanrting', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2923', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Mairang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2924', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Mawlai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2925', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Nongmynsong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2926', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Nongpoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2927', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Nongstoin', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2928', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Nongthymmai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2929', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Pynthorumkhrah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2930', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Resubelpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2931', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Shillong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2932', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Shillong Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2933', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Tura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2934', 'country_id' => '101', 'state_id' => '24', 'city_name' => 'Williamnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2935', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Aizawl', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2936', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Bairabi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2937', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Biate', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2938', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Champhai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2939', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Darlawn', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2940', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Hnahthial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2941', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Kawnpui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2942', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Khawhai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2943', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Khawzawl', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2944', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Kolasib', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2945', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Lengpui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2946', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Lunglei', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2947', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Mamit', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2948', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'North Vanlaiphai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2949', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Saiha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2950', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Sairang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2951', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Saitul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2952', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Serchhip', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2953', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Thenzawl', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2954', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Tlabung', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2955', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Vairengte', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2956', 'country_id' => '101', 'state_id' => '25', 'city_name' => 'Zawlnuam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2957', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Chumukedima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2958', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Dimapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2959', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Kohima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2960', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Mokokchung', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2961', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Mon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2962', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Phek', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2963', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Tuensang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2964', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Wokha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2965', 'country_id' => '101', 'state_id' => '26', 'city_name' => 'Zunheboto', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2966', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Anandapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2967', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Angul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2968', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Aska', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2969', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Athgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2970', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Athmallik', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2971', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Balagoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2972', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Balangir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2973', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Balasore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2974', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Baleshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2975', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Balimeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2976', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Balugaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2977', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Banapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2978', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bangura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2979', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Banki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2980', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Banposh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2981', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Barbil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2982', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bargarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2983', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Baripada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2984', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Barpali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2985', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Basudebpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2986', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Baudh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2987', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Belagachhia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2988', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Belaguntha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2989', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Belpahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2990', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Berhampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2991', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bhadrak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2992', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bhanjanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2993', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bhawanipatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2994', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bhuban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2995', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bhubaneswar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2996', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Binika', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2997', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Birmitrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2998', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bishama Katek', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '2999', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Bolangir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3000', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Brahmapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3001', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Brajrajnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3002', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Buguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3003', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Burla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3004', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Byasanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3005', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Champua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3006', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chandapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3007', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chandbali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3008', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chandili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3009', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Charibatia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3010', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chatrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3011', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chikitigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3012', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Chitrakonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3013', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Choudwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3014', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Cuttack', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3015', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Dadhapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3016', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Daitari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3017', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Damanjodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3018', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Deogarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3019', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Deracolliery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3020', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Dhamanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3021', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Dhenkanal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3022', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Digapahandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3023', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Dungamal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3024', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Fertilizer Corporation of Indi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3025', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Ganjam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3026', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Ghantapada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3027', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Gopalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3028', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Gudari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3029', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Gunupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3030', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Hatibandha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3031', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Hinjilikatu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3032', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Hirakud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3033', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jagatsinghapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3034', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3035', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jalda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3036', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jaleswar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3037', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jatni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3038', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jaypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3039', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jeypore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3040', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jharsuguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3041', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Jhumpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3042', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Joda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3043', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Junagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3044', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kamakhyanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3045', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kantabanji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3046', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kantilo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3047', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Karanja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3048', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kashinagara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3049', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kataka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3050', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kavisuryanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3051', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kendrapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3052', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kendujhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3053', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Keonjhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3054', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kesinga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3055', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Khaliapali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3056', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Khalikote', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3057', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Khandaparha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3058', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kharhial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3059', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kharhial Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3060', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Khatiguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3061', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Khurda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3062', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kochinda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3063', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kodala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3064', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Konark', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3065', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Koraput', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3066', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Kotaparh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3067', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Lanjigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3068', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Lattikata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3069', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Makundapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3070', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Malkangiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3071', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Mukhiguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3072', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nabarangpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3073', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nalco', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3074', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Naurangapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3075', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nayagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3076', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nilagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3077', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nimaparha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3078', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nuapada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3079', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Nuapatna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3080', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'OCL Industrialship', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3081', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Padampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3082', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Paradip', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3083', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Paradwip', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3084', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Parlakimidi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3085', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Patamundai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3086', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Patnagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3087', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Phulabani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3088', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Pipili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3089', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Polasara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3090', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Pratapsasan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3091', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Puri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3092', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Purushottampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3093', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Rairangpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3094', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Raj Gangpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3095', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Rambha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3096', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Raurkela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3097', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Raurkela Civil Township', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3098', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Rayagada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3099', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Redhakhol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3100', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Remuna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3101', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Rengali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3102', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Rourkela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3103', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sambalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3104', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sinapali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3105', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sonepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3106', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sorada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3107', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Soro', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3108', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sunabeda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3109', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Sundargarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3110', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Talcher', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3111', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Talcher Thermal Power Station ', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3112', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Tarabha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3113', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Tensa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3114', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Titlagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3115', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Udala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3116', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Udayagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3117', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Umarkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3118', 'country_id' => '101', 'state_id' => '29', 'city_name' => 'Vikrampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3119', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Ariankuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3120', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Karaikal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3121', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Kurumbapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3122', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Mahe', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3123', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Ozhukarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3124', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Pondicherry', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3125', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Villianur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3126', 'country_id' => '101', 'state_id' => '31', 'city_name' => 'Yanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3127', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Abohar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3128', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Adampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3129', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ahmedgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3130', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ajnala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3131', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Akalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3132', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Alawalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3133', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Amloh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3134', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Amritsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3135', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Amritsar Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3136', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Anandpur Sahib', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3137', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Badhni Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3138', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bagh Purana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3139', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Balachaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3140', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Banaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3141', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Banga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3142', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Banur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3143', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Baretta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3144', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bariwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3145', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Barnala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3146', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bassi Pathana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3147', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Batala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3148', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bathinda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3149', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Begowal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3150', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Behrampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3151', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhabat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3152', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhadur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3153', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhankharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3154', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bharoli Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3155', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhawanigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3156', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhikhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3157', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhikhiwind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3158', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhisiana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3159', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhogpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3160', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhuch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3161', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Bhulath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3162', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Budha Theh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3163', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Budhlada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3164', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Chima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3165', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Chohal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3166', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dasuya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3167', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Daulatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3168', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dera Baba Nanak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3169', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dera Bassi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3170', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dhanaula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3171', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dharam Kot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3172', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dhariwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3173', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dhilwan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3174', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dhuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3175', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dinanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3176', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Dirba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3177', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Doraha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3178', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Faridkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3179', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Fateh Nangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3180', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Fatehgarh Churian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3181', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Fatehgarh Sahib', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3182', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Fazilka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3183', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Firozpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3184', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Firozpur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3185', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Gardhiwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3186', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Garhshankar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3187', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ghagga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3188', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ghanaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3189', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Giddarbaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3190', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Gobindgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3191', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Goniana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3192', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Goraya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3193', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Gurdaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3194', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Guru Har Sahai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3195', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Hajipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3196', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Handiaya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3197', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Hariana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3198', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Hoshiarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3199', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Hussainpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3200', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jagraon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3201', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jaitu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3202', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jalalabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3203', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jalandhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3204', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jalandhar Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3205', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jandiala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3206', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Jugial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3207', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kalanaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3208', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kapurthala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3209', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Karoran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3210', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kartarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3211', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Khamanon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3212', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Khanauri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3213', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Khanna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3214', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kharar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3215', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Khem Karan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3216', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kot Fatta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3217', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kot Isa Khan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3218', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kot Kapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3219', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kotkapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3220', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Kurali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3221', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Lalru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3222', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Lehra Gaga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3223', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Lodhian Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3224', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Longowal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3225', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ludhiana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3226', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Machhiwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3227', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mahilpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3228', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Majitha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3229', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Makhu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3230', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Malaut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3231', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Malerkotla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3232', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Maloud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3233', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mandi Gobindgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3234', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mansa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3235', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Maur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3236', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Moga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3237', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mohali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3238', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Moonak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3239', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Morinda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3240', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mukerian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3241', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Muktsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3242', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mullanpur Dakha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3243', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Mullanpur Garibdas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3244', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Munak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3245', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Muradpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3246', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nabha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3247', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nakodar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3248', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3249', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nawashahr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3250', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Naya Nangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3251', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nehon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3252', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Nurmahal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3253', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Pathankot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3254', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Patiala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3255', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Patti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3256', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Pattran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3257', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Payal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3258', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Phagwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3259', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Phillaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3260', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Qadian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3261', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rahon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3262', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Raikot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3263', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Raja Sansi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3264', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rajpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3265', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Ram Das', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3266', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Raman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3267', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rampura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3268', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rayya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3269', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rupnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3270', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Rurki Kasba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3271', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sahnewal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3272', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Samana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3273', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Samrala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3274', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sanaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3275', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sangat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3276', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sangrur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3277', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sansarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3278', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sardulgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3279', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Shahkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3280', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sham Churasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3281', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Shekhpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3282', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sirhind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3283', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sri Hargobindpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3284', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sujanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3285', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sultanpur Lodhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3286', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Sunam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3287', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Talwandi Bhai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3288', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Talwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3289', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Tappa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3290', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Tarn Taran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3291', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Urmar Tanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3292', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Zira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3293', 'country_id' => '101', 'state_id' => '32', 'city_name' => 'Zirakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3294', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Abu Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3295', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ajmer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3296', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Aklera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3297', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Alwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3298', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Amet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3299', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Antah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3300', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Anupgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3301', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Asind', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3302', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3303', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bagru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3304', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bahror', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3305', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bakani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3306', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3307', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Balotra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3308', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bandikui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3309', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Banswara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3310', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Baran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3311', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3312', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bari Sadri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3313', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Barmer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3314', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Basi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3315', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Basni Belima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3316', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Baswa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3317', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bayana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3318', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Beawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3319', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Begun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3320', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhadasar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3321', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhadra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3322', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhalariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3323', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bharatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3324', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhasawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3325', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhawani Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3326', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhawri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3327', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhilwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3328', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhindar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3329', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhinmal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3330', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bhiwadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3331', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bijoliya Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3332', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bikaner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3333', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bilara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3334', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bissau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3335', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Borkhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3336', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Budhpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3337', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Bundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3338', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chatsu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3339', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chechat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3340', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chhabra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3341', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chhapar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3342', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chhipa Barod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3343', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chhoti Sadri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3344', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chirawa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3345', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chittaurgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3346', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chittorgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3347', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Chomun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3348', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Churu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3349', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Daosa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3350', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dariba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3351', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dausa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3352', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Deoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3353', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Deshnok', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3354', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Devgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3355', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Devli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3356', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dhariawad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3357', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dhaulpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3358', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dholpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3359', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Didwana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3360', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dig', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3361', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dungargarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3362', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Dungarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3363', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Falna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3364', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Fatehnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3365', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Fatehpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3366', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Gajsinghpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3367', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Galiakot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3368', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ganganagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3369', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Gangapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3370', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Goredi Chancha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3371', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Gothra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3372', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Govindgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3373', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Gulabpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3374', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Hanumangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3375', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Hindaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3376', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Indragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3377', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jahazpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3378', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jaipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3379', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jaisalmer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3380', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jaiselmer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3381', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jaitaran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3382', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jalore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3383', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jhalawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3384', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jhalrapatan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3385', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jhunjhunun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3386', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jobner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3387', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Jodhpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3388', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kaithun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3389', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kaman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3390', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kankroli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3391', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kanor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3392', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kapasan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3393', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kaprain', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3394', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Karanpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3395', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Karauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3396', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kekri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3397', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Keshorai Patan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3398', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kesrisinghpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3399', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Khairthal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3400', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Khandela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3401', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Khanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3402', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kherli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3403', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kherliganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3404', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kherwara Chhaoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3405', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Khetri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3406', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kiranipura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3407', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kishangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3408', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kishangarh Ranwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3409', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kolvi Rajendrapura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3410', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kot Putli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3411', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3412', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kuchaman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3413', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kuchera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3414', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kumbhalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3415', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kumbhkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3416', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kumher', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3417', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Kushalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3418', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Lachhmangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3419', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ladnun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3420', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Lakheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3421', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Lalsot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3422', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Losal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3423', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Madanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3424', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mahu Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3425', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mahwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3426', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Makrana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3427', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Malpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3428', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mandal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3429', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mandalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3430', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mandawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3431', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mandwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3432', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mangrol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3433', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Manohar Thana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3434', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Manoharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3435', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Marwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3436', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Merta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3437', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Modak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3438', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mount Abu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3439', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mukandgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3440', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Mundwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3441', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nadbai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3442', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Naenwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3443', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3444', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nagaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3445', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Napasar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3446', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Naraina', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3447', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nasirabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3448', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nathdwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3449', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nawa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3450', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nawalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3451', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Neem Ka Thana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3452', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Neemrana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3453', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Newa Talai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3454', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nimaj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3455', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nimbahera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3456', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Niwai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3457', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nohar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3458', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Nokha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3459', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'One SGM', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3460', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Padampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3461', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3462', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Partapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3463', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Parvatsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3464', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pasoond', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3465', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Phalna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3466', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Phalodi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3467', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Phulera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3468', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pilani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3469', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pilibanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3470', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pindwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3471', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pipalia Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3472', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pipar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3473', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pirawa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3474', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pokaran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3475', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pratapgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3476', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Pushkar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3477', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Raipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3478', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Raisinghnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3479', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rajakhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3480', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rajaldesar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3481', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rajgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3482', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rajsamand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3483', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ramganj Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3484', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ramgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3485', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3486', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Raniwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3487', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ratan Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3488', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ratangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3489', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rawatbhata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3490', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rawatsar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3491', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Rikhabdev', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3492', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Ringas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3493', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sadri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3494', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sadulshahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3495', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sagwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3496', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Salumbar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3497', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sambhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3498', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Samdari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3499', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sanchor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3500', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sangariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3501', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sangod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3502', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sardarshahr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3503', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sarwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3504', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Satal Kheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3505', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sawai Madhopur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3506', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sewan Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3507', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Shahpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3508', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sheoganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3509', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sikar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3510', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sirohi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3511', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Siwana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3512', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sogariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3513', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sojat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3514', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sojat Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3515', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sri Madhopur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3516', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sriganganagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3517', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sujangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3518', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Suket', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3519', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sumerpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3520', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Sunel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3521', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Surajgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3522', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Suratgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3523', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Swaroopganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3524', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Takhatgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3525', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Taranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3526', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Three STR', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3527', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Tijara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3528', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Toda Bhim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3529', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Toda Raisingh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3530', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Todra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3531', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Tonk', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3532', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Udaipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3533', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Udpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3534', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Uniara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3535', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Vanasthali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3536', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Vidyavihar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3537', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Vijainagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3538', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Viratnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3539', 'country_id' => '101', 'state_id' => '33', 'city_name' => 'Wer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3540', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Gangtok', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3541', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Gezing', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3542', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Jorethang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3543', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Mangan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3544', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Namchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3545', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Naya Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3546', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'No City', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3547', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Rangpo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3548', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Sikkim', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3549', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Singtam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3550', 'country_id' => '101', 'state_id' => '34', 'city_name' => 'Upper Tadong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3551', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Abiramam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3552', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Achampudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3553', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Acharapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3554', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Acharipallam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3555', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Achipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3556', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Adikaratti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3557', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Adiramapattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3558', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aduturai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3559', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Adyar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3560', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Agaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3561', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Agasthiswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3562', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Akkaraipettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3563', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alagappapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3564', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alagapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3565', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3566', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3567', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alanganallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3568', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alangayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3569', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alangudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3570', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alangulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3571', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alanthurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3572', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3573', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Allapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3574', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3575', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alwar Tirunagari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3576', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Alwarkurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3577', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ambasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3578', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ambur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3579', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ammainaickanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3580', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ammaparikuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3581', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ammapettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3582', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ammavarikuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3583', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ammur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3584', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Anaimalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3585', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Anaiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3586', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Anakaputhur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3587', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ananthapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3588', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Andanappettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3589', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Andipalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3590', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Andippatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3591', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Anjugramam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3592', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Annamalainagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3593', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Annavasal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3594', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Annur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3595', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Anthiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3596', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Appakudal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3597', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arachalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3598', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arakandanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3599', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arakonam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3600', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aralvaimozhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3601', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3602', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arani Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3603', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arantangi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3604', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arasiramani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3605', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aravakurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3606', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aravankadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3607', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arcot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3608', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arimalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3609', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ariyalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3610', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ariyappampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3611', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ariyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3612', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3613', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arulmigu Thirumuruganpundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3614', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arumanai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3615', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arumbavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3616', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Arumuganeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3617', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aruppukkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3618', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ashokapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3619', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Athani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3620', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Athanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3621', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Athimarapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3622', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Athipattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3623', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Athur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3624', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Attayyampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3625', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Attur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3626', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Auroville', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3627', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Avadattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3628', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Avadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3629', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Avalpundurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3630', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Avaniapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3631', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Avinashi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3632', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3633', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayanadaippu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3634', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Aygudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3635', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayothiapattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3636', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayyalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3637', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayyampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3638', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ayyampettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3639', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Azhagiapandiapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3640', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Balakrishnampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3641', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Balakrishnapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3642', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Balapallam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3643', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Balasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3644', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bargur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3645', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Belur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3646', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Berhatty', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3647', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bhavani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3648', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bhawanisagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3649', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bhuvanagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3650', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bikketti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3651', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Bodinayakkanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3652', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Brahmana Periya Agraharam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3653', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Buthapandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3654', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Buthipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3655', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chatrapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3656', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chembarambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3657', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chengalpattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3658', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chengam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3659', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chennai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3660', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chennasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3661', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chennimalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3662', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cheranmadevi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3663', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cheruvanki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3664', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chetpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3665', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chettiarpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3666', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chettipalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3667', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chettipalayam Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3668', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chettithangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3669', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cheyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3670', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cheyyar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3671', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chidambaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3672', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinalapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3673', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinna Anuppanadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3674', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinna Salem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3675', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinnakkampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3676', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinnammanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3677', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinnampalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3678', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinnasekkadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3679', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chinnavedampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3680', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chitlapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3681', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Chittodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3682', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cholapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3683', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Coimbatore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3684', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Coonoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3685', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Courtalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3686', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Cuddalore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3687', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dalavaipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3688', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Darasuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3689', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Denkanikottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3690', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Desur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3691', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devadanapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3692', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devakkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3693', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devakottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3694', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devanangurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3695', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devarshola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3696', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Devasthanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3697', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dhalavoipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3698', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dhali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3699', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dhaliyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3700', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dharapadavedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3701', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dharapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3702', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dharmapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3703', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dindigul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3704', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Dusi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3705', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Edaganasalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3706', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Edaikodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3707', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Edakalinadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3708', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Elathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3709', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Elayirampannai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3710', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Elumalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3711', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Eral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3712', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Eraniel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3713', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Eriodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3714', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Erode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3715', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Erumaipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3716', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Eruvadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3717', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ethapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3718', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ettaiyapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3719', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ettimadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3720', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ezhudesam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3721', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ganapathipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3722', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gandhi Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3723', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gangaikondan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3724', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gangavalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3725', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ganguvarpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3726', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gingi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3727', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gopalasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3728', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gopichettipalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3729', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gudalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3730', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gudiyattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3731', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Guduvanchery', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3732', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Gummidipoondi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3733', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Hanumanthampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3734', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Harur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3735', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Harveypatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3736', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Highways', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3737', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Hosur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3738', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Hubbathala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3739', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Huligal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3740', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Idappadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3741', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Idikarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3742', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ilampillai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3743', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ilanji', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3744', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Iluppaiyurani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3745', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Iluppur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3746', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Inam Karur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3747', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Injambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3748', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Irugur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3749', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jaffrabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3750', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jagathala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3751', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jalakandapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3752', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jalladiampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3753', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jambai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3754', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jayankondam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3755', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Jolarpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3756', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadambur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3757', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3758', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadayal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3759', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadayampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3760', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadayanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3761', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kadiapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3762', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalakkad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3763', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalambur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3764', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3765', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalappanaickenpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3766', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalavai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3767', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalinjur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3768', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kaliyakkavilai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3769', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kallakkurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3770', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kallakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3771', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kallidaikurichchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3772', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kallukuttam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3773', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kallupatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3774', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalpakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3775', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kalugumalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3776', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kamayagoundanpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3777', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kambainallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3778', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kambam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3779', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kamuthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3780', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanadukathan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3781', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanakkampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3782', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3783', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanchipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3784', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kandanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3785', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kangayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3786', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kangayampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3787', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kangeyanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3788', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kaniyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3789', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanjikoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3790', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannadendal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3791', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3792', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3793', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannankurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3794', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannapalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3795', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kannivadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3796', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kanyakumari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3797', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kappiyarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3798', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karaikkudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3799', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karamadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3800', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3801', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karambakkudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3802', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kariamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3803', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kariapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3804', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karugampattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3805', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karumandi Chellipalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3806', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karumathampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3807', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karumbakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3808', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karungal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3809', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karunguzhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3810', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karuppur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3811', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Karur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3812', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kasipalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3813', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kasipalayam G', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3814', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kathirvedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3815', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kathujuganapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3816', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Katpadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3817', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kattivakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3818', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kattumannarkoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3819', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kattupakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3820', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kattuputhur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3821', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kaveripakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3822', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kaveripattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3823', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kavundampalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3824', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kavundampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3825', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kayalpattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3826', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kayattar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3827', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kelamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3828', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kelambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3829', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kembainaickenpalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3830', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kethi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3831', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilakarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3832', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilampadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3833', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilkulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3834', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilkunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3835', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Killiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3836', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Killlai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3837', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilpennathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3838', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kilvelur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3839', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kinathukadavu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3840', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kiramangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3841', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kiranur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3842', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kiripatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3843', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kizhapavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3844', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kmarasamipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3845', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kochadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3846', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kodaikanal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3847', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kodambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3848', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kodavasal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3849', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kodumudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3850', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kolachal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3851', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kolappalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3852', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kolathupalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3853', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kolathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3854', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kollankodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3855', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kollankoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3856', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Komaralingam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3857', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Komarapalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3858', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kombai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3859', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Konakkarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3860', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Konavattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3861', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kondalampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3862', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Konganapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3863', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Koradacheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3864', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Korampallam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3865', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kotagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3866', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kothinallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3867', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kottaiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3868', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kottakuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3869', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kottaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3870', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kottivakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3871', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kottur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3872', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kovilpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3873', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Koyampattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3874', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Krishnagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3875', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Krishnarayapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3876', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Krishnasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3877', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuchanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3878', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuhalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3879', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kulasekarappattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3880', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kulasekarapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3881', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kulithalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3882', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kumarapalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3883', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kumarapalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3884', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kumarapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3885', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kumbakonam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3886', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kundrathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3887', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuniyamuthur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3888', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kunnathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3889', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kunur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3890', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuraikundu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3891', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3892', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kurinjippadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3893', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kurudampalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3894', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kurumbalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3895', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuthalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3896', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuthappar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3897', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuttalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3898', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuttanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3899', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Kuzhithurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3900', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Labbaikudikadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3901', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Lakkampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3902', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Lalgudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3903', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Lalpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3904', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Llayangudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3905', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3906', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3907', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madathukulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3908', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madhavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3909', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madippakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3910', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madukkarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3911', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madukkur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3912', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Madurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3913', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Maduranthakam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3914', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Maduravoyal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3915', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mahabalipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3916', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Makkinanpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3917', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mallamuppampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3918', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mallankinaru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3919', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mallapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3920', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mallasamudram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3921', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3922', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mamallapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3923', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mamsapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3924', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manachanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3925', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3926', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manalmedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3927', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manalurpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3928', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manamadurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3929', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3930', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manapparai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3931', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manavalakurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3932', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mandaikadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3933', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mandapam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3934', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mangadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3935', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3936', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mangalampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3937', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Manimutharu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3938', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mannargudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3939', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mappilaiurani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3940', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Maraimalai Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3941', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Marakkanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3942', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Maramangalathupatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3943', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Marandahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3944', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Markayankottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3945', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Marudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3946', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Marungur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3947', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Masinigudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3948', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mathigiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3949', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3950', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mayiladuthurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3951', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mecheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3952', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melacheval', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3953', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melachokkanathapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3954', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3955', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melamadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3956', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melamaiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3957', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melanattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3958', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melathiruppanthuruthi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3959', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3960', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melmananbedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3961', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melpattampakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3962', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3963', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Melvisharam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3964', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mettupalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3965', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mettur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3966', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Meyyanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3967', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Milavittan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3968', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Minakshipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3969', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Minambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3970', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Minjur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3971', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Modakurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3972', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mohanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3973', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mopperipalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3974', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mudalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3975', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mudichur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3976', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mudukulathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3977', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mukasipidariyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3978', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mukkudal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3979', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mulagumudu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3980', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mulakaraipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3981', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mulanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3982', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mullakkadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3983', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muruganpalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3984', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Musiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3985', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muthupet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3986', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muthur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3987', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muttayyapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3988', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muttupet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3989', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Muvarasampettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3990', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Myladi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3991', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Mylapore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3992', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nadukkuthagai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3993', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Naduvattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3994', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nagapattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3995', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nagavakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3996', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nagercoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3997', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nagojanahalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3998', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nallampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '3999', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4000', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Namagiripettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4001', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Namakkal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4002', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nambiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4003', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nambutalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4004', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nandambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4005', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nandivaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4006', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nangavalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4007', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nangavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4008', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nanguneri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4009', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nanjikottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4010', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nannilam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4011', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Naranammalpuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4012', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Naranapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4013', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Narasimhanaickenpalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4014', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Narasingapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4015', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Narasojipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4016', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Naravarikuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4017', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nasiyanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4018', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Natham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4019', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nathampannai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4020', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Natrampalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4021', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nattam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4022', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nattapettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4023', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nattarasankottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4024', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Navalpattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4025', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nazarethpettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4026', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nazerath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4027', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Neikkarapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4028', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Neiyyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4029', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nellikkuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4030', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nelliyalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4031', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nemili', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4032', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nemilicheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4033', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Neripperichal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4034', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nerkunram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4035', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nerkuppai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4036', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nerunjipettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4037', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Neykkarappatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4038', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Neyveli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4039', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nidamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4040', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nilagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4041', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nilakkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4042', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Nilankarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4043', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Odaipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4044', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Odaiyakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4045', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Oddanchatram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4046', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Odugathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4047', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Oggiyamduraipakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4048', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Olagadam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4049', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Omalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4050', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ooty', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4051', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Orathanadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4052', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Othakadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4053', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Othakalmandapam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4054', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ottapparai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4055', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pacode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4056', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Padaividu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4057', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Padianallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4058', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Padirikuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4059', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Padmanabhapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4060', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Padririvedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4061', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palaganangudy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4062', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palaimpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4063', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palakkodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4064', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palamedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4065', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4066', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palani Chettipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4067', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palavakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4068', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palavansathu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4069', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palayakayal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4070', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4071', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palayamkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4072', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Palladam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4073', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallapalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4074', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4075', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4076', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallavaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4077', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallikaranai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4078', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallikonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4079', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallipalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4080', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallipalaiyam Agraharam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4081', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pallipattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4082', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pammal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4083', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Panagudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4084', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Panaimarathupatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4085', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Panapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4086', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Panboli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4087', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pandamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4088', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pannaikadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4089', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pannaipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4090', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pannuratti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4091', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Panruti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4092', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Papanasam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4093', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pappankurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4094', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Papparapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4095', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pappireddipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4096', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Paramakkudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4097', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Paramankurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4098', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Paramathi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4099', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Parangippettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4100', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Paravai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4101', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pasur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4102', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pathamadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4103', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4104', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pattiviranpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4105', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pattukkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4106', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pazhugal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4107', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pennadam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4108', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pennagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4109', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pennathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4110', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Peraiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4111', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Peralam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4112', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perambalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4113', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Peranamallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4114', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Peravurani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4115', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyakodiveri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4116', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4117', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyanayakkanpalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4118', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyanegamam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4119', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4120', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Periyasemur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4121', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pernambut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4122', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perumagalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4123', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perumandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4124', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perumuchi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4125', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perundurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4126', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perungalathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4127', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perungudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4128', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perungulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4129', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4130', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Perur Chettipalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4131', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pethampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4132', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pethanaickenpalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4133', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pillanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4134', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pirkankaranai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4135', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Polichalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4136', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pollachi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4137', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Polur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4138', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ponmani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4139', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ponnamaravathi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4140', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ponnampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4141', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ponneri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4142', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Porur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4143', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pothanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4144', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pothatturpettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4145', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudukadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4146', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudukkottai Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4147', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudukottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4148', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudupalaiyam Aghraharam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4149', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudupalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4150', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudupatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4151', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudupattinam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4152', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4153', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puduvayal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4154', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pulambadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4155', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pulampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4156', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puliyampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4157', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puliyankudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4158', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puliyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4159', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Pullampadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4160', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puluvapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4161', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Punamalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4162', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Punjai Puliyampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4163', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Punjai Thottakurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4164', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Punjaipugalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4165', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puthalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4166', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Putteri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4167', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puvalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4168', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puzhal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4169', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Puzhithivakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4170', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rajapalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4171', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ramanathapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4172', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ramapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4173', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rameswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4174', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ranipet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4175', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rasipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4176', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rayagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4177', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rithapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4178', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rosalpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4179', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Rudravathi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4180', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sadayankuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4181', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Saint Thomas Mount', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4182', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Salangapalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4183', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Salem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4184', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Samalapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4185', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Samathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4186', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sambavar Vadagarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4187', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sankaramanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4188', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sankarankoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4189', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sankarapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4190', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sankari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4191', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sankarnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4192', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Saravanampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4193', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sarcarsamakulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4194', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sathiyavijayanagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4195', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sathuvachari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4196', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sathyamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4197', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sattankulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4198', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4199', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sayalgudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4200', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sayapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4201', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Seithur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4202', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sembakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4203', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Semmipalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4204', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sennirkuppam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4205', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Senthamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4206', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sentharapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4207', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Senur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4208', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sethiathoppu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4209', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sevilimedu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4210', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sevugampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4211', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Shenbakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4212', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Shencottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4213', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Shenkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4214', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sholavandan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4215', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sholinganallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4216', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sholingur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4217', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sholur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4218', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sikkarayapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4219', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Singampuneri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4220', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Singanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4221', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Singaperumalkoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4222', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sirapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4223', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sirkali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4224', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sirugamani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4225', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sirumugai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4226', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sithayankottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4227', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sithurajapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4228', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sivaganga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4229', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sivagiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4230', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sivakasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4231', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sivanthipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4232', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sivur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4233', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Soranjeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4234', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'South Kannanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4235', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'South Kodikulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4236', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Srimushnam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4237', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sriperumpudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4238', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sriramapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4239', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Srirangam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4240', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Srivaikuntam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4241', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Srivilliputtur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4242', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Suchindram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4243', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Suliswaranpatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4244', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sulur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4245', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sundarapandiam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4246', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Sundarapandiapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4247', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Surampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4248', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Surandai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4249', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Suriyampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4250', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Swamimalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4251', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'TNPL Pugalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4252', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tambaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4253', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Taramangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4254', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tattayyangarpettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4255', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tayilupatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4256', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tenkasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4257', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thadikombu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4258', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thakkolam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4259', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thalainayar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4260', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thalakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4261', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thamaraikulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4262', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thammampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4263', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thanjavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4264', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thanthoni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4265', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tharangambadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4266', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thedavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4267', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thenambakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4268', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thengampudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4269', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Theni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4270', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Theni Allinagaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4271', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thenkarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4272', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thenthamaraikulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4273', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thenthiruperai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4274', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thesur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4275', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thevaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4276', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thevur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4277', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiagadurgam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4278', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiagarajar Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4279', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thingalnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4280', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruchirapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4281', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirukarungudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4282', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirukazhukundram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4283', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirumalayampalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4284', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirumazhisai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4285', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirunagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4286', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirunageswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4287', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirunindravur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4288', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirunirmalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4289', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruparankundram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4290', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruparappu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4291', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruporur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4292', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruppanandal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4293', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thirupuvanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4294', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruthangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4295', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruthuraipundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4296', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvaivaru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4297', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4298', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvarur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4299', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvattaru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4300', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvenkatam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4301', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvennainallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4302', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thiruvithankodu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4303', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thisayanvilai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4304', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thittacheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4305', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thondamuthur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4306', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thorapadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4307', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thottipalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4308', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thottiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4309', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thudiyalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4310', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thuthipattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4311', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Thuvakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4312', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Timiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4313', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tindivanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4314', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tinnanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4315', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruchchendur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4316', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruchengode', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4317', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirukkalukkundram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4318', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirukkattuppalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4319', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirukkoyilur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4320', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirumangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4321', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirumullaivasal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4322', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirumuruganpundi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4323', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirunageswaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4324', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirunelveli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4325', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirupathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4326', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirupattur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4327', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruppuvanam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4328', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4329', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tirusulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4330', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruttani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4331', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruvallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4332', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruvannamalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4333', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruverambur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4334', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruverkadu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4335', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruvethipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4336', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruvidaimarudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4337', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tiruvottiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4338', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tittakudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4339', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tondi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4340', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Turaiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4341', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Tuticorin', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4342', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udagamandalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4343', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udagamandalam Valley', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4344', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udankudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4345', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udayarpalayam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4346', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udumalaipettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4347', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Udumalpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4348', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ullur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4349', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Ulundurpettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4350', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Unjalaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4351', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Unnamalaikadai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4352', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uppidamangalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4353', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uppiliapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4354', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Urachikkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4355', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Urapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4356', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Usilampatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4357', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uthangarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4358', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uthayendram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4359', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uthiramerur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4360', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uthukkottai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4361', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uttamapalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4362', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Uttukkuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4363', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadakarai Kizhpadugai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4364', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadakkanandal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4365', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadakku Valliyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4366', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4367', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadamadurai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4368', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadavalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4369', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadipatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4370', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vadugapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4371', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vaithiswarankoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4372', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Valangaiman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4373', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Valasaravakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4374', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Valavanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4375', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vallam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4376', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Valparai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4377', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Valvaithankoshtam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4378', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vanavasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4379', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vandalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4380', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vandavasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4381', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vandiyur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4382', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vaniputhur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4383', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vaniyambadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4384', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Varadarajanpettai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4385', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Varadharajapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4386', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vasudevanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4387', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vathirairuppu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4388', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vattalkundu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4389', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vazhapadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4390', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vedapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4391', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vedaranniyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4392', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vedasandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4393', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Velampalaiyam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4394', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Velankanni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4395', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellakinar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4396', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellakoil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4397', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellalapatti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4398', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellalur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4399', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4400', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellimalai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4401', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4402', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vellottamparappu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4403', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Velluru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4404', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vengampudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4405', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vengathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4406', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vengavasal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4407', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Venghatur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4408', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Venkarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4409', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vennanthur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4410', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Veppathur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4411', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Verkilambi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4412', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vettaikaranpudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4413', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vettavalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4414', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vijayapuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4415', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vikramasingapuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4416', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vikravandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4417', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vilangudi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4418', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vilankurichi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4419', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vilapakkam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4420', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vilathikulam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4421', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vilavur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4422', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Villukuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4423', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Villupuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4424', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Viraganur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4425', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virakeralam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4426', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virakkalpudur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4427', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virapandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4428', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virapandi Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4429', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virappanchatram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4430', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Viravanallur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4431', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virudambattu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4432', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virudhachalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4433', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virudhunagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4434', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Virupakshipuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4435', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Viswanatham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4436', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Vriddhachalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4437', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Walajabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4438', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Walajapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4439', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Wellington', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4440', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Yercaud', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4441', 'country_id' => '101', 'state_id' => '35', 'city_name' => 'Zamin Uthukuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4442', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Achampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4443', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Adilabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4444', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Armoor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4445', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Asifabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4446', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Badepally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4447', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Banswada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4448', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bellampalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4449', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bhadrachalam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4450', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bhainsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4451', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bhongir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4452', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bhupalpally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4453', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bodhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4454', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Bollaram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4455', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Devarkonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4456', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Farooqnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4457', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Gadwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4458', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Gajwel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4459', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Ghatkesar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4460', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Hyderabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4461', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Jagtial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4462', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Jangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4463', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kagaznagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4464', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kalwakurthy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4465', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kamareddy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4466', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Karimnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4467', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Khammam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4468', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kodada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4469', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Koratla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4470', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kottagudem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4471', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Kyathampalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4472', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Madhira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4473', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Mahabubabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4474', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Mahbubnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4475', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Mancherial', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4476', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Mandamarri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4477', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Manuguru', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4478', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Medak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4479', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Medchal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4480', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Miryalaguda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4481', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Nagar Karnul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4482', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Nakrekal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4483', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Nalgonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4484', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Narayanpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4485', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Narsampet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4486', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Nirmal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4487', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Nizamabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4488', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Palwancha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4489', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Peddapalli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4490', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Ramagundam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4491', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Ranga Reddy district', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4492', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Sadasivpet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4493', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Sangareddy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4494', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Sarapaka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4495', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Sathupalle', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4496', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Secunderabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4497', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Siddipet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4498', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Singapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4499', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Sircilla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4500', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Suryapet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4501', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Tandur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4502', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Vemulawada', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4503', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Vikarabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4504', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Wanaparthy', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4505', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Warangal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4506', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Yellandu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4507', 'country_id' => '101', 'state_id' => '36', 'city_name' => 'Zahirabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4508', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Agartala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4509', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Amarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4510', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Ambassa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4511', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Badharghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4512', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Belonia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4513', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Dharmanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4514', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Gakulnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4515', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Gandhigram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4516', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Indranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4517', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Jogendranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4518', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Kailasahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4519', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Kamalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4520', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Kanchanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4521', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Khowai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4522', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Kumarghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4523', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Kunjaban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4524', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Narsingarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4525', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Pratapgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4526', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Ranir Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4527', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Sabrum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4528', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Sonamura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4529', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Teliamura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4530', 'country_id' => '101', 'state_id' => '37', 'city_name' => 'Udaipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4531', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Achhalda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4532', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Achhnera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4533', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Adari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4534', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Afzalgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4535', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Agarwal Mandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4536', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Agra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4537', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Agra Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4538', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ahraura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4539', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ailum', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4540', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Air Force Area', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4541', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ajhuwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4542', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Akbarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4543', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Alapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4544', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aliganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4545', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aligarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4546', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Allahabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4547', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Allahabad Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4548', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Allahganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4549', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4550', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ambahta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4551', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amethi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4552', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4553', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amilo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4554', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aminagar Sarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4555', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aminagar Urf Bhurbaral', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4556', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amraudha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4557', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Amroha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4558', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Anandnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4559', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Anpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4560', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Antu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4561', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Anupshahr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4562', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aonla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4563', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Armapur Estate', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4564', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ashokpuram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4565', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ashrafpur Kichhauchha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4566', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Atarra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4567', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Atasu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4568', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Atrauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4569', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Atraulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4570', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Auraiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4571', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aurangabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4572', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Aurangabad Bangar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4573', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Auras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4574', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Awagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4575', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ayodhya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4576', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Azamgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4577', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Azizpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4578', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Azmatgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4579', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Babarpur Ajitmal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4580', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baberu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4581', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Babina', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4582', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Babrala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4583', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Babugarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4584', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bachhiowan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4585', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bachhraon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4586', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4587', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Badaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4588', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baghpat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4589', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4590', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bahadurganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4591', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4592', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bahjoi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4593', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bahraich', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4594', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bahsuma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4595', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bahua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4596', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bajna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4597', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bakewar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4598', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bakiabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4599', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baldeo', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4600', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ballia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4601', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Balrampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4602', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Banat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4603', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Banda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4604', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bangarmau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4605', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Banki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4606', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bansdih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4607', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bansgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4608', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bansi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4609', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barabanki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4610', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baragaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4611', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Baraut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4612', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bareilly', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4613', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bareilly Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4614', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barhalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4615', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4616', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barhapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4617', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barkhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4618', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barsana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4619', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barva Sagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4620', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Barwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4621', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Basti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4622', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Begumabad Budhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4623', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Behat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4624', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Behta Hajipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4625', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4626', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Belthara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4627', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Beniganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4628', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Beswan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4629', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bewar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4630', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhadarsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4631', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhadohi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4632', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhagwantnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4633', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bharatganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4634', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhargain', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4635', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bharthana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4636', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bharuhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4637', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bharwari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4638', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhatni Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4639', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhatpar Rani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4640', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhawan Bahadurnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4641', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhinga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4642', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhojpur Dharampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4643', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhokarhedi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4644', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhongaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4645', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bhulepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4646', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bidhuna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4647', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bighapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4648', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bijnor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4649', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bijpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4650', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bikapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4651', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4652', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4653', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4654', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilhaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4655', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4656', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilrayaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4657', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilsanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4658', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bilsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4659', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bindki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4660', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bisalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4661', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bisanda Buzurg', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4662', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bisauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4663', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bisharatganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4664', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bisokhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4665', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Biswan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4666', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bithur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4667', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Budaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4668', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bugrasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4669', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Bulandshahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4670', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Burhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4671', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chail', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4672', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chak Imam Ali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4673', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chakeri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4674', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chakia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4675', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chandauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4676', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chandausi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4677', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chandpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4678', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Charkhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4679', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Charthawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4680', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chaumuhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4681', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhaprauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4682', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhara Rafatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4683', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chharprauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4684', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4685', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhatari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4686', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhibramau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4687', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chhutmalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4688', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chilkana Sultanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4689', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chirgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4690', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chit Baragaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4691', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chitrakut Dham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4692', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chopan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4693', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Choubepur Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4694', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Chunar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4695', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Churk Ghurma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4696', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Colonelganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4697', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dadri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4698', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dalmau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4699', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dankaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4700', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dariyabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4701', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dasna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4702', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dataganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4703', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Daurala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4704', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dayal Bagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4705', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Deoband', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4706', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Deoranian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4707', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Deoria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4708', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dewa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4709', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4710', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhanauha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4711', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhanauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4712', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhanaura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4713', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dharoti Khurd', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4714', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhauratanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4715', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dhaurhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4716', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dibai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4717', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dibiyapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4718', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dildarnagar Fatehpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4719', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Do Ghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4720', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dohrighat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4721', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dostpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4722', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dudhinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4723', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dulhipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4724', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Dundwaraganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4725', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ekdil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4726', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Erich', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4727', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Etah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4728', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Etawah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4729', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faizabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4730', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faizabad Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4731', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faizganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4732', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Farah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4733', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faridnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4734', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faridpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4735', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Faridpur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4736', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fariha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4737', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Farrukhabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4738', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4739', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehganj Pashchimi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4740', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehganj Purvi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4741', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4742', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4743', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehpur Chaurasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4744', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Fatehpur Sikri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4745', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Firozabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4746', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gajraula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4747', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ganga Ghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4748', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gangapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4749', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gangoh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4750', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ganj Muradabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4751', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Garautha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4752', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Garhi Pukhta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4753', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Garhmukteshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4754', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gaura Barahaj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4755', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gauri Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4756', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gausganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4757', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4758', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghatampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4759', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghaziabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4760', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghazipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4761', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghiror', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4762', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghorawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4763', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghosi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4764', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghosia Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4765', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ghughuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4766', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gohand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4767', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gokul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4768', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gola Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4769', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gola Gokarannath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4770', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gonda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4771', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gopamau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4772', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gopiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4773', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gorakhpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4774', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gosainganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4775', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Govardhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4776', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Greater Noida', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4777', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gulaothi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4778', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gulariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4779', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gulariya Bhindara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4780', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gunnaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4781', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gursahaiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4782', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gursarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4783', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Gyanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4784', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hafizpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4785', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Haidergarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4786', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Haldaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4787', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hamirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4788', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Handia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4789', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4790', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hardoi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4791', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Harduaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4792', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hargaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4793', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hariharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4794', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Harraiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4795', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hasanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4796', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hasayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4797', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hastinapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4798', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4799', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hathras', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4800', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Hyderabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4801', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ibrahimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4802', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Iglas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4803', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ikauna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4804', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Iltifatganj Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4805', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Indian Telephone Industry Mank', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4806', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Islamnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4807', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Itaunja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4808', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Itimadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4809', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jagner', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4810', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jahanabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4811', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jahangirabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4812', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jahangirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4813', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jais', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4814', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jaithara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4815', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jalalabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4816', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jalali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4817', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jalalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4818', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jalaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4819', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jalesar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4820', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jamshila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4821', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jangipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4822', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jansath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4823', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jarwal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4824', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jasrana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4825', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jaswantnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4826', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jatari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4827', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jaunpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4828', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jewar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4829', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhalu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4830', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhansi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4831', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhansi Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4832', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhansi Railway Settlement', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4833', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhinjhak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4834', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhinjhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4835', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhusi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4836', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jhusi Kohna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4837', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jiyanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4838', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Joya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4839', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jyoti Khuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4840', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Jyotiba Phule Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4841', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kabrai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4842', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kachhauna Patseni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4843', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kachhla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4844', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kachhwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4845', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kadaura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4846', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kadipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4847', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kailashpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4848', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kaimganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4849', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kairana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4850', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kakgaina', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4851', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kakod', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4852', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kakori', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4853', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kakrala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4854', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kalinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4855', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kalpi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4856', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kamalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4857', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kampil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4858', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kandhla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4859', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kandwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4860', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kannauj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4861', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4862', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kant', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4863', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kanth', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4864', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kaptanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4865', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Karaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4866', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Karari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4867', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Karhal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4868', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Karnawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4869', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kasganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4870', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Katariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4871', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Katghar Lalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4872', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kathera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4873', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Katra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4874', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Katra Medniganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4875', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kauriaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4876', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kemri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4877', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kerakat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4878', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khadda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4879', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khaga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4880', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khailar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4881', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khair', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4882', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khairabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4883', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khairagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4884', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khalilabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4885', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khamaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4886', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4887', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kharela', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4888', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khargupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4889', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khariya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4890', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kharkhoda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4891', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khatauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4892', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khatauli Rural', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4893', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khekra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4894', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kheri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4895', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kheta Sarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4896', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khudaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4897', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khurja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4898', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Khutar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4899', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kiraoli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4900', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kiratpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4901', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kishanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4902', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kishni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4903', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kithaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4904', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Koiripur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4905', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Konch', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4906', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kopaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4907', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kora Jahanabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4908', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Korwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4909', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kosi Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4910', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4911', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kotra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4912', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kotwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4913', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kulpahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4914', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4915', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kundarki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4916', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kunwargaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4917', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kurara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4918', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kurawali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4919', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kursath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4920', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kurthi Jafarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4921', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kushinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4922', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Kusmara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4923', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Laharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4924', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lakhimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4925', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lakhna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4926', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lalganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4927', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lalitpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4928', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4929', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4930', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ledwa Mahuwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4931', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lohta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4932', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Loni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4933', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Lucknow', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4934', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Machhlishahr', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4935', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Madhoganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4936', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Madhogarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4937', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maghar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4938', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mahaban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4939', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maharajganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4940', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mahmudabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4941', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mahoba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4942', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maholi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4943', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mahona', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4944', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mahroni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4945', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mailani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4946', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mainpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4947', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Majhara Pipar Ehatmali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4948', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Majhauli Raj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4949', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Malihabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4950', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mallanwam', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4951', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mandawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4952', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Manikpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4953', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maniyar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4954', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Manjhanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4955', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mankapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4956', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Marehra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4957', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mariahu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4958', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maruadih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4959', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maswasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4960', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mataundh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4961', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mathu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4962', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mathura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4963', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mathura Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4964', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4965', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mau Aima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4966', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maudaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4967', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mauranipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4968', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Maurawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4969', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mawana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4970', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Meerut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4971', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mehnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4972', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mehndawal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4973', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mendu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4974', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Milak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4975', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Miranpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4976', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mirat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4977', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mirat Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4978', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mirganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4979', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mirzapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4980', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Misrikh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4981', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Modinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4982', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mogra Badshahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4983', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mohan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4984', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mohanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4985', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mohiuddinpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4986', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Moradabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4987', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Moth', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4988', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mubarakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4989', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mughal Sarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4990', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mughal Sarai Railway Settlemen', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4991', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Muhammadabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4992', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Muhammadi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4993', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mukrampur Khema', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4994', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mundia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4995', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mundora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4996', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Muradnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4997', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Mursan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4998', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Musafirkhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '4999', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Muzaffarnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5000', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nadigaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5001', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nagina', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5002', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nagram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5003', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nai Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5004', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nainana Jat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5005', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Najibabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5006', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nakur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5007', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nanaunta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5008', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nandgaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5009', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nanpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5010', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Naraini', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5011', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Narauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5012', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Naraura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5013', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Naugawan Sadat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5014', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nautanwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5015', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nawabganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5016', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nichlaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5017', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nidhauli Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5018', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nihtaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5019', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nindaura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5020', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Niwari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5021', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nizamabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5022', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Noida', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5023', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Northern Railway Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5024', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nurpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5025', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nyoria Husenpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5026', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Nyotini', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5027', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Obra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5028', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Oel Dhakwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5029', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Orai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5030', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Oran', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5031', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ordinance Factory Muradnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5032', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pachperwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5033', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Padrauna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5034', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pahasu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5035', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Paintepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5036', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5037', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Palia Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5038', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Parasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5039', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Parichha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5040', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Parichhatgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5041', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Parsadepur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5042', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Patala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5043', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Patiyali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5044', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Patti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5045', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pawayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5046', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Phalauda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5047', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Phaphund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5048', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Phulpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5049', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Phulwaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5050', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pihani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5051', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pilibhit', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5052', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pilkana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5053', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pilkhuwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5054', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pinahat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5055', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pipalsana Chaudhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5056', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pipiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5057', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pipraich', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5058', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pipri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5059', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pratapgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5060', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Pukhrayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5061', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Puranpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5062', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Purdil Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5063', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Purqazi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5064', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Purwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5065', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Qasimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5066', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rabupura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5067', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Radha Kund', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5068', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rae Bareilly', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5069', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Raja Ka Rampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5070', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rajapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5071', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ramkola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5072', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5073', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5074', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rampur Bhawanipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5075', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rampur Karkhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5076', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rampur Maniharan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5077', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rampura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5078', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ranipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5079', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rashidpur Garhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5080', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rasra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5081', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rasulabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5082', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5083', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Raya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5084', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Renukut', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5085', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Reoti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5086', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Richha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5087', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Risia Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5088', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rithora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5089', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Robertsganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5090', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Roza', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5091', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rudarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5092', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rudauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5093', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rudayan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5094', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5095', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Rustamnagar Sahaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5096', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sabatwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5097', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sadabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5098', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sadat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5099', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Safipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5100', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5101', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Saharanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5102', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5103', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahaswan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5104', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahawar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5105', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahibabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5106', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahjanwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5107', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sahpau', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5108', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Saidpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5109', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sainthal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5110', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Saiyadraja', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5111', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sakhanu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5112', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sakit', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5113', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Salarpur Khadar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5114', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Salimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5115', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Salon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5116', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sambhal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5117', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sambhawali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5118', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Samdhan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5119', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Samthar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5120', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5121', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sandila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5122', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sarai Mir', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5123', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sarai akil', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5124', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sarauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5125', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sardhana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5126', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sarila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5127', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sarsawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5128', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sasni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5129', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Satrikh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5130', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Saunkh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5131', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Saurikh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5132', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Seohara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5133', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sewal Khas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5134', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sewarhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5135', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5136', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5137', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5138', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahjahanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5139', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahjahanpur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5140', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shahpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5141', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shamli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5142', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shamsabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5143', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shankargarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5144', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shergarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5145', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sherkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5146', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shikarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5147', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shikohabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5148', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shisgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5149', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shivdaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5150', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shivli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5151', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shivrajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5152', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Shohratgarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5153', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Siddhanur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5154', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Siddharthnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5155', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sidhauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5156', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sidhpura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5157', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sikandarabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5158', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sikandarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5159', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sikandra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5160', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sikandra Rao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5161', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Singahi Bhiraura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5162', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sirathu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5163', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sirsa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5164', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sirsaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5165', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sirsi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5166', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sisauli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5167', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Siswa Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5168', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sitapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5169', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Siyana', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5170', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Som', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5171', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sonbhadra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5172', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Soron', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5173', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Suar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5174', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sukhmalpur Nizamabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5175', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sultanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5176', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Sumerpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5177', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Suriyawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5178', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Swamibagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5179', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5180', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Talbahat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5181', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Talgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5182', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tambaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5183', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5184', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tatarpur Lallu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5185', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tetribazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5186', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Thakurdwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5187', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Thana Bhawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5188', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Thiriya Nizamat Khan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5189', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tikaitnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5190', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tikri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5191', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tilhar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5192', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tindwari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5193', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tirwaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5194', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Titron', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5195', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tori Fatehpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5196', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tulsipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5197', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tundla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5198', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tundla Kham', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5199', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Tundla Railway Colony', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5200', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ugu', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5201', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ujhani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5202', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Ujhari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5203', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Umri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5204', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Umri Kalan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5205', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Un', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5206', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Unchahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5207', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Unnao', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5208', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Usaihat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5209', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Usawan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5210', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Utraula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5211', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Varanasi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5212', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Varanasi Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5213', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Vijaigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5214', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Vrindavan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5215', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Wazirganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5216', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Zafarabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5217', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Zaidpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5218', 'country_id' => '101', 'state_id' => '38', 'city_name' => 'Zamania', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5219', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Almora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5220', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Almora Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5221', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Badrinathpuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5222', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bageshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5223', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bah Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5224', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Banbasa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5225', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bandia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5226', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Barkot', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5227', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bazpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5228', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bhim Tal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5229', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Bhowali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5230', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Chakrata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5231', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Chamba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5232', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Chamoli and Gopeshwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5233', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Champawat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5234', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Clement Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5235', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dehra Dun Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5236', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dehradun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5237', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dehrakhas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5238', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Devaprayag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5239', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dhaluwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5240', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dhandera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5241', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dharchula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5242', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dharchula Dehat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5243', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Didihat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5244', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dineshpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5245', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Doiwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5246', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dugadda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5247', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Dwarahat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5248', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Gadarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5249', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Gangotri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5250', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Gauchar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5251', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Haldwani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5252', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Haridwar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5253', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Herbertpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5254', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Jaspur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5255', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Jhabrera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5256', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Joshimath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5257', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kachnal Gosain', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5258', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kaladungi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5259', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kalagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5260', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Karnaprayang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5261', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kashipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5262', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kashirampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5263', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kausani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5264', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kedarnath', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5265', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kelakhera', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5266', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Khatima', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5267', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kichha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5268', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kirtinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5269', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Kotdwara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5270', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Laksar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5271', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Lalkuan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5272', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Landaura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5273', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Landhaura Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5274', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Lensdaun', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5275', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Logahat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5276', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Mahua Dabra Haripura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5277', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Mahua Kheraganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5278', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Manglaur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5279', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Masuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5280', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Mohanpur Mohammadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5281', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Muni Ki Reti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5282', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Nagla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5283', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Nainital', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5284', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Nainital Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5285', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Nandaprayang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5286', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Narendranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5287', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Pauri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5288', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Pithoragarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5289', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Pratitnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5290', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Raipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5291', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Raiwala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5292', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Ramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5293', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Ranikhet', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5294', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Ranipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5295', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rishikesh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5296', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rishikesh Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5297', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Roorkee', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5298', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rudraprayag', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5299', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rudrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5300', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rurki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5301', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Rurki Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5302', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Shaktigarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5303', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Sitarganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5304', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Srinagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5305', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Sultanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5306', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Tanakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5307', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Tehri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5308', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Udham Singh Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5309', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Uttarkashi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5310', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Vikasnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5311', 'country_id' => '101', 'state_id' => '39', 'city_name' => 'Virbhadra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5312', 'country_id' => '101', 'state_id' => '41', 'city_name' => '24 Parganas (n)', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5313', 'country_id' => '101', 'state_id' => '41', 'city_name' => '24 Parganas (s)', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5314', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Adra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5315', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ahmadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5316', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Aiho', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5317', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Aistala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5318', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Alipur Duar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5319', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Alipur Duar Railway Junction', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5320', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Alpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5321', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Amalhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5322', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Amkula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5323', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Amlagora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5324', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Amodghata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5325', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Amtala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5326', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Andul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5327', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Anksa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5328', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ankurhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5329', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Anup Nagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5330', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Arambagh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5331', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Argari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5332', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Arsha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5333', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Asansol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5334', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ashoknagar Kalyangarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5335', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Aurangabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5336', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bablari Dewanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5337', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Badhagachhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5338', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baduria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5339', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baghdogra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5340', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bagnan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5341', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bagra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5342', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bagula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5343', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baharampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5344', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bahirgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5345', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bahula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5346', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baidyabati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5347', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bairatisal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5348', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baj Baj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5349', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bakreswar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5350', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Balaram Pota', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5351', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Balarampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5352', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bali Chak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5353', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ballavpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5354', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bally', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5355', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Balurghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5356', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bamunari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5357', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Banarhat Tea Garden', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5358', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bandel', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5359', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bangaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5360', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bankra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5361', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bankura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5362', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bansbaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5363', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Banshra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5364', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Banupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5365', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bara Bamonia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5366', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5367', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barakpur Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5368', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baranagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5369', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barasat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5370', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barddhaman', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5371', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barijhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5372', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barjora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5373', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barrackpore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5374', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baruihuda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5375', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baruipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5376', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Barunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5377', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Basirhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5378', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Baska', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5379', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Begampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5380', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Beldanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5381', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Beldubi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5382', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Belebathan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5383', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Beliator', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5384', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhadreswar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5385', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhandardaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5386', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhangar Raghunathpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5387', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhangri Pratham Khanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5388', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhanowara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5389', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bhatpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5390', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bholar Dabri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5391', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bidhannagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5392', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bidyadharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5393', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Biki Hakola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5394', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bilandapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5395', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bilpahari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5396', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bipra Noapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5397', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Birlapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5398', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Birnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5399', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bisarpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5400', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bishnupur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5401', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bolpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5402', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bongaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5403', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Bowali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5404', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Burdwan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5405', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Canning', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5406', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Cart Road', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5407', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chachanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5408', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chak Bankola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5409', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chak Enayetnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5410', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chak Kashipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5411', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chakalampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5412', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chakbansberia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5413', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chakdaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5414', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chakpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5415', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Champahati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5416', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Champdani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5417', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chamrail', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5418', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chandannagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5419', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chandpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5420', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chandrakona', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5421', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chapari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5422', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chapui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5423', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Char Brahmanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5424', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Char Maijdia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5425', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Charka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5426', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chata Kalikapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5427', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chauhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5428', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Checha Khata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5429', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chelad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5430', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chhora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5431', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chikrand', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5432', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Chittaranjan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5433', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Contai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5434', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Cooch Behar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5435', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dainhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5436', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dakshin Baguan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5437', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dakshin Jhapardaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5438', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dakshin Rajyadharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5439', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dakshin Raypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5440', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dalkola', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5441', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dalurband', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5442', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Darap Pur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5443', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Darjiling', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5444', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Daulatpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5445', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Debipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5446', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Defahat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5447', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Deora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5448', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Deulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5449', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhakuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5450', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhandadihi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5451', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhanyakuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5452', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dharmapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5453', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhatri Gram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5454', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhuilya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5455', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhulagari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5456', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhulian', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5457', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhupgari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5458', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dhusaripara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5459', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Diamond Harbour', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5460', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Digha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5461', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dignala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5462', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dinhata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5463', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dubrajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5464', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Dumjor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5465', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Durgapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5466', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Durllabhganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5467', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Egra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5468', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Eksara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5469', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Falakata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5470', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Farakka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5471', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Fatellapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5472', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Fort Gloster', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5473', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gabberia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5474', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gadigachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5475', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gairkata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5476', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gangarampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5477', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garalgachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5478', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garbeta Amlagora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5479', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garhbeta', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5480', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garshyamnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5481', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5482', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Garulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5483', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gayespur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5484', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ghatal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5485', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ghorsala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5486', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Goaljan', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5487', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Goasafat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5488', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gobardanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5489', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gobindapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5490', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gopalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5491', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gopinathpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5492', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gora Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5493', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Guma', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5494', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Gurdaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5495', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Guriahati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5496', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Guskhara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5497', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Habra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5498', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Haldia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5499', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Haldibari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5500', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Halisahar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5501', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Haora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5502', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Harharia Chak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5503', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Harindanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5504', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Haringhata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5505', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Haripur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5506', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Harishpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5507', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hatgachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5508', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hatsimla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5509', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hijuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5510', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hindustan Cables Town', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5511', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hooghly', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5512', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Howrah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5513', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Hugli-Chunchura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5514', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Humaipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5515', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ichha Pur Defence Estate', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5516', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ingraj Bazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5517', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Islampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5518', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jafarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5519', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jagadanandapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5520', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jagdishpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5521', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jagtaj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5522', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jala Kendua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5523', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jaldhaka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5524', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jalkhura', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5525', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jalpaiguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5526', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jamuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5527', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jangipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5528', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jaygaon', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5529', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jaynagar-Majilpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5530', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jemari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5531', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jemari Township', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5532', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jetia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5533', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jhalida', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5534', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jhargram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5535', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jhorhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5536', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jiaganj-Azimganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5537', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Joka', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5538', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Jot Kamal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5539', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kachu Pukur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5540', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kajora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5541', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kakdihi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5542', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kakdwip', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5543', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kalaikunda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5544', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kalara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5545', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kalimpong', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5546', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kaliyaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5547', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kalna', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5548', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kalyani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5549', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kamarhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5550', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kanaipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5551', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kanchrapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5552', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kandi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5553', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kanki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5554', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kankuria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5555', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kantlia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5556', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kanyanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5557', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Karimpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5558', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Karsiyang', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5559', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kasba', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5560', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kasimbazar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5561', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Katwa', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5562', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kaugachhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5563', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kenda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5564', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kendra Khottamdi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5565', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kendua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5566', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kesabpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5567', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khagrabari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5568', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khalia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5569', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khalor', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5570', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khandra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5571', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khantora', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5572', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kharagpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5573', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kharagpur Railway Settlement', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5574', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kharar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5575', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khardaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5576', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khari Mala Khagrabari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5577', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kharsarai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5578', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khatra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5579', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Khodarampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5580', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kodalia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5581', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kolaghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5582', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kolaghat Thermal Power Project', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5583', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kolkata', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5584', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Konardihi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5585', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Konnogar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5586', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Krishnanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5587', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Krishnapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5588', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kshidirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5589', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kshirpai', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5590', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kulihanda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5591', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kulti', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5592', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kunustara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5593', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Kuperskem', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5594', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Madanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5595', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Madhusudanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5596', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Madhyamgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5597', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Maheshtala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5598', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mahiari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5599', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mahikpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5600', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mahira', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5601', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mahishadal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5602', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mainaguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5603', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Makardaha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5604', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5605', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Malda', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5606', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mandarbani', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5607', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mansinhapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5608', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Masila', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5609', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Maslandapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5610', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mathabhanga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5611', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mekliganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5612', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Memari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5613', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Midnapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5614', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mirik', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5615', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Monoharpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5616', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Mrigala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5617', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Muragachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5618', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Murgathaul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5619', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Murshidabad', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5620', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nabadhai Dutta Pukur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5621', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nabagram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5622', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nabgram', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5623', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nachhratpur Katabari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5624', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nadia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5625', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Naihati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5626', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nalhati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5627', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nasra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5628', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Natibpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5629', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Naupala', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5630', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Navadwip', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5631', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nebadhai Duttapukur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5632', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'New Barrackpore', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5633', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ni Barakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5634', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nibra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5635', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Noapara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5636', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Nokpul', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5637', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'North Barakpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5638', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Odlabari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5639', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Old Maldah', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5640', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ondal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5641', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Pairagachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5642', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Palashban', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5643', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Panchla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5644', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Panchpara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5645', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Pandua', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5646', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Pangachhiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5647', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Paniara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5648', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Panihati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5649', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Panuhat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5650', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Par Beliya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5651', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Parashkol', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5652', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Parasia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5653', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Parbbatipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5654', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Parui', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5655', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Paschim Jitpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5656', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Paschim Punro Para', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5657', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Patrasaer', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5658', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Pattabong Tea Garden', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5659', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Patuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5660', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Patulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5661', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Phulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5662', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Podara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5663', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Port Blair', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5664', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Prayagpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5665', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Pujali', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5666', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Purba Medinipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5667', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Purba Tajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5668', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Purulia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5669', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghudebbati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5670', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghudebpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5671', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghunathchak', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5672', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghunathpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5673', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghunathpur-Dankuni', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5674', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raghunathpur-Magra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5675', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raigachhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5676', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raiganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5677', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5678', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Rajarhat Gopalpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5679', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Rajpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5680', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ramchandrapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5681', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ramjibanpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5682', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ramnagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5683', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Rampur Hat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5684', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ranaghat', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5685', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raniganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5686', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ratibati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5687', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Raypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5688', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Rishra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5689', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Rishra Cantonment', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5690', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ruiya', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5691', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sahajadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5692', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sahapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5693', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sainthia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5694', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Salap', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5695', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sankarpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5696', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sankrail', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5697', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Santoshpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5698', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Saontaidih', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5699', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sarenga', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5700', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sarpi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5701', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Satigachha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5702', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Serpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5703', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Shankhanagar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5704', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Shantipur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5705', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Shrirampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5706', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Siduli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5707', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Siliguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5708', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Simla', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5709', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Singur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5710', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sirsha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5711', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Siuri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5712', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sobhaganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5713', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sodpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5714', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sonamukhi', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5715', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sonatikiri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5716', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Srikantabati', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5717', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Srirampur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5718', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Sukdal', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5719', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Taherpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5720', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Taki', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5721', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Talbandha', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5722', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tamluk', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5723', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tarakeswar', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5724', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tentulberia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5725', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tentulkuli', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5726', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Thermal Power Project', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5727', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tinsukia', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5728', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Titagarh', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5729', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Tufanganj', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5730', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ukhra', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5731', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ula', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5732', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Ulubaria', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5733', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Durgapur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5734', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Goara', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5735', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Kalas', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5736', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Kamakhyaguri', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5737', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Latabari', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5738', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Mahammadpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5739', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Pirpur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5740', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttar Raypur', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['city_id' => '5741', 'country_id' => '101', 'state_id' => '41', 'city_name' => 'Uttarpara-Kotrung', 'city_status' => 1, 'created_by' => 1, 'updated_by' => 1]
    ];
    District::insert($district);
    }
}
