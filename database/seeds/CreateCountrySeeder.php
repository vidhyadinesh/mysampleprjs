<?php

use Illuminate\Database\Seeder;
use App\Country;
class CreateCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

	    $country = [
	        ['country_id' => '1', 'country_sortname' => 'AF', 'country_name' => 'Afghanistan', 'country_phonecode' => '93', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '2', 'country_sortname' => 'AL', 'country_name' => 'Albania', 'country_phonecode' => '355', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '3', 'country_sortname' => 'DZ', 'country_name' => 'Algeria', 'country_phonecode' => '213', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '4', 'country_sortname' => 'AS', 'country_name' => 'American Samoa', 'country_phonecode' => '1684', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '5', 'country_sortname' => 'AD', 'country_name' => 'Andorra', 'country_phonecode' => '376', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '6', 'country_sortname' => 'AO', 'country_name' => 'Angola', 'country_phonecode' => '244', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '7', 'country_sortname' => 'AI', 'country_name' => 'Anguilla', 'country_phonecode' => '1264', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '8', 'country_sortname' => 'AQ', 'country_name' => 'Antarctica', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '9', 'country_sortname' => 'AG', 'country_name' => 'Antigua And Barbuda', 'country_phonecode' => '1268', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '10', 'country_sortname' => 'AR', 'country_name' => 'Argentina', 'country_phonecode' => '54', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '11', 'country_sortname' => 'AM', 'country_name' => 'Armenia', 'country_phonecode' => '374', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '12', 'country_sortname' => 'AW', 'country_name' => 'Aruba', 'country_phonecode' => '297', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '13', 'country_sortname' => 'AU', 'country_name' => 'Australia', 'country_phonecode' => '61', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '14', 'country_sortname' => 'AT', 'country_name' => 'Austria', 'country_phonecode' => '43', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '15', 'country_sortname' => 'AZ', 'country_name' => 'Azerbaijan', 'country_phonecode' => '994', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '16', 'country_sortname' => 'BS', 'country_name' => 'Bahamas The', 'country_phonecode' => '1242', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '17', 'country_sortname' => 'BH', 'country_name' => 'Bahrain', 'country_phonecode' => '973', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '18', 'country_sortname' => 'BD', 'country_name' => 'Bangladesh', 'country_phonecode' => '880', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '19', 'country_sortname' => 'BB', 'country_name' => 'Barbados', 'country_phonecode' => '1246', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '20', 'country_sortname' => 'BY', 'country_name' => 'Belarus', 'country_phonecode' => '375', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '21', 'country_sortname' => 'BE', 'country_name' => 'Belgium', 'country_phonecode' => '32', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '22', 'country_sortname' => 'BZ', 'country_name' => 'Belize', 'country_phonecode' => '501', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '23', 'country_sortname' => 'BJ', 'country_name' => 'Benin', 'country_phonecode' => '229', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '24', 'country_sortname' => 'BM', 'country_name' => 'Bermuda', 'country_phonecode' => '1441', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '25', 'country_sortname' => 'BT', 'country_name' => 'Bhutan', 'country_phonecode' => '975', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '26', 'country_sortname' => 'BO', 'country_name' => 'Bolivia', 'country_phonecode' => '591', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '27', 'country_sortname' => 'BA', 'country_name' => 'Bosnia and Herzegovina', 'country_phonecode' => '387', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '28', 'country_sortname' => 'BW', 'country_name' => 'Botswana', 'country_phonecode' => '267', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '29', 'country_sortname' => 'BV', 'country_name' => 'Bouvet Island', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '30', 'country_sortname' => 'BR', 'country_name' => 'Brazil', 'country_phonecode' => '55', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '31', 'country_sortname' => 'IO', 'country_name' => 'British Indian Ocean Territory', 'country_phonecode' => '246', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '32', 'country_sortname' => 'BN', 'country_name' => 'Brunei', 'country_phonecode' => '673', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '33', 'country_sortname' => 'BG', 'country_name' => 'Bulgaria', 'country_phonecode' => '359', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '34', 'country_sortname' => 'BF', 'country_name' => 'Burkina Faso', 'country_phonecode' => '226', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '35', 'country_sortname' => 'BI', 'country_name' => 'Burundi', 'country_phonecode' => '257', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '36', 'country_sortname' => 'KH', 'country_name' => 'Cambodia', 'country_phonecode' => '855', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '37', 'country_sortname' => 'CM', 'country_name' => 'Cameroon', 'country_phonecode' => '237', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '38', 'country_sortname' => 'CA', 'country_name' => 'Canada', 'country_phonecode' => '1', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '39', 'country_sortname' => 'CV', 'country_name' => 'Cape Verde', 'country_phonecode' => '238', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '40', 'country_sortname' => 'KY', 'country_name' => 'Cayman Islands', 'country_phonecode' => '1345', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '41', 'country_sortname' => 'CF', 'country_name' => 'Central African Republic', 'country_phonecode' => '236', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '42', 'country_sortname' => 'TD', 'country_name' => 'Chad', 'country_phonecode' => '235', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '43', 'country_sortname' => 'CL', 'country_name' => 'Chile', 'country_phonecode' => '56', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '44', 'country_sortname' => 'CN', 'country_name' => 'China', 'country_phonecode' => '86', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '45', 'country_sortname' => 'CX', 'country_name' => 'Christmas Island', 'country_phonecode' => '61', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '46', 'country_sortname' => 'CC', 'country_name' => 'Cocos (Keeling) Islands', 'country_phonecode' => '672', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '47', 'country_sortname' => 'CO', 'country_name' => 'Colombia', 'country_phonecode' => '57', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '48', 'country_sortname' => 'KM', 'country_name' => 'Comoros', 'country_phonecode' => '269', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '49', 'country_sortname' => 'CG', 'country_name' => 'Republic Of The Congo', 'country_phonecode' => '242', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '50', 'country_sortname' => 'CD', 'country_name' => 'Democratic Republic Of The Congo', 'country_phonecode' => '242', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '51', 'country_sortname' => 'CK', 'country_name' => 'Cook Islands', 'country_phonecode' => '682', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '52', 'country_sortname' => 'CR', 'country_name' => 'Costa Rica', 'country_phonecode' => '506', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '53', 'country_sortname' => 'CI', 'country_name' => "Cote D'Ivoire (Ivory Coast)", 'country_phonecode' => '225', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '54', 'country_sortname' => 'HR', 'country_name' => 'Croatia (Hrvatska)', 'country_phonecode' => '385', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '55', 'country_sortname' => 'CU', 'country_name' => 'Cuba', 'country_phonecode' => '53', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '56', 'country_sortname' => 'CY', 'country_name' => 'Cyprus', 'country_phonecode' => '357', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '57', 'country_sortname' => 'CZ', 'country_name' => 'Czech Republic', 'country_phonecode' => '420', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '58', 'country_sortname' => 'DK', 'country_name' => 'Denmark', 'country_phonecode' => '45', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '59', 'country_sortname' => 'DJ', 'country_name' => 'Djibouti', 'country_phonecode' => '253', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '60', 'country_sortname' => 'DM', 'country_name' => 'Dominica', 'country_phonecode' => '1767', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '61', 'country_sortname' => 'DO', 'country_name' => 'Dominican Republic', 'country_phonecode' => '1809', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '62', 'country_sortname' => 'TP', 'country_name' => 'East Timor', 'country_phonecode' => '670', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '63', 'country_sortname' => 'EC', 'country_name' => 'Ecuador', 'country_phonecode' => '593', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '64', 'country_sortname' => 'EG', 'country_name' => 'Egypt', 'country_phonecode' => '20', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '65', 'country_sortname' => 'SV', 'country_name' => 'El Salvador', 'country_phonecode' => '503', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '66', 'country_sortname' => 'GQ', 'country_name' => 'Equatorial Guinea', 'country_phonecode' => '240', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '67', 'country_sortname' => 'ER', 'country_name' => 'Eritrea', 'country_phonecode' => '291', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '68', 'country_sortname' => 'EE', 'country_name' => 'Estonia', 'country_phonecode' => '372', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '69', 'country_sortname' => 'ET', 'country_name' => 'Ethiopia', 'country_phonecode' => '251', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '70', 'country_sortname' => 'XA', 'country_name' => 'External Territories of Australia', 'country_phonecode' => '61', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '71', 'country_sortname' => 'FK', 'country_name' => 'Falkland Islands', 'country_phonecode' => '500', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '72', 'country_sortname' => 'FO', 'country_name' => 'Faroe Islands', 'country_phonecode' => '298', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '73', 'country_sortname' => 'FJ', 'country_name' => 'Fiji Islands', 'country_phonecode' => '679', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '74', 'country_sortname' => 'FI', 'country_name' => 'Finland', 'country_phonecode' => '358', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '75', 'country_sortname' => 'FR', 'country_name' => 'France', 'country_phonecode' => '33', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '76', 'country_sortname' => 'GF', 'country_name' => 'French Guiana', 'country_phonecode' => '594', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '77', 'country_sortname' => 'PF', 'country_name' => 'French Polynesia', 'country_phonecode' => '689', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '78', 'country_sortname' => 'TF', 'country_name' => 'French Southern Territories', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '79', 'country_sortname' => 'GA', 'country_name' => 'Gabon', 'country_phonecode' => '241', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '80', 'country_sortname' => 'GM', 'country_name' => 'Gambia The', 'country_phonecode' => '220', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '81', 'country_sortname' => 'GE', 'country_name' => 'Georgia', 'country_phonecode' => '995', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '82', 'country_sortname' => 'DE', 'country_name' => 'Germany', 'country_phonecode' => '49', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '83', 'country_sortname' => 'GH', 'country_name' => 'Ghana', 'country_phonecode' => '233', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '84', 'country_sortname' => 'GI', 'country_name' => 'Gibraltar', 'country_phonecode' => '350', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '85', 'country_sortname' => 'GR', 'country_name' => 'Greece', 'country_phonecode' => '30', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '86', 'country_sortname' => 'GL', 'country_name' => 'Greenland', 'country_phonecode' => '299', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '87', 'country_sortname' => 'GD', 'country_name' => 'Grenada', 'country_phonecode' => '1473', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '88', 'country_sortname' => 'GP', 'country_name' => 'Guadeloupe', 'country_phonecode' => '590', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '89', 'country_sortname' => 'GU', 'country_name' => 'Guam', 'country_phonecode' => '1671', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '90', 'country_sortname' => 'GT', 'country_name' => 'Guatemala', 'country_phonecode' => '502', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '91', 'country_sortname' => 'XU', 'country_name' => 'Guernsey and Alderney', 'country_phonecode' => '44', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '92', 'country_sortname' => 'GN', 'country_name' => 'Guinea', 'country_phonecode' => '224', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '93', 'country_sortname' => 'GW', 'country_name' => 'Guinea-Bissau', 'country_phonecode' => '245', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '94', 'country_sortname' => 'GY', 'country_name' => 'Guyana', 'country_phonecode' => '592', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '95', 'country_sortname' => 'HT', 'country_name' => 'Haiti', 'country_phonecode' => '509', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '96', 'country_sortname' => 'HM', 'country_name' => 'Heard and McDonald Islands', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '97', 'country_sortname' => 'HN', 'country_name' => 'Honduras', 'country_phonecode' => '504', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '98', 'country_sortname' => 'HK', 'country_name' => 'Hong Kong S.A.R.', 'country_phonecode' => '852', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '99', 'country_sortname' => 'HU', 'country_name' => 'Hungary', 'country_phonecode' => '36', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '100', 'country_sortname' => 'IS', 'country_name' => 'Iceland', 'country_phonecode' => '354', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '101', 'country_sortname' => 'IN', 'country_name' => 'India', 'country_phonecode' => '91', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '102', 'country_sortname' => 'ID', 'country_name' => 'Indonesia', 'country_phonecode' => '62', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '103', 'country_sortname' => 'IR', 'country_name' => 'Iran', 'country_phonecode' => '98', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '104', 'country_sortname' => 'IQ', 'country_name' => 'Iraq', 'country_phonecode' => '964', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '105', 'country_sortname' => 'IE', 'country_name' => 'Ireland', 'country_phonecode' => '353', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '106', 'country_sortname' => 'IL', 'country_name' => 'Israel', 'country_phonecode' => '972', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '107', 'country_sortname' => 'IT', 'country_name' => 'Italy', 'country_phonecode' => '39', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '108', 'country_sortname' => 'JM', 'country_name' => 'Jamaica', 'country_phonecode' => '1876', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '109', 'country_sortname' => 'JP', 'country_name' => 'Japan', 'country_phonecode' => '81', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '110', 'country_sortname' => 'XJ', 'country_name' => 'Jersey', 'country_phonecode' => '44', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '111', 'country_sortname' => 'JO', 'country_name' => 'Jordan', 'country_phonecode' => '962', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '112', 'country_sortname' => 'KZ', 'country_name' => 'Kazakhstan', 'country_phonecode' => '7', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '113', 'country_sortname' => 'KE', 'country_name' => 'Kenya', 'country_phonecode' => '254', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '114', 'country_sortname' => 'KI', 'country_name' => 'Kiribati', 'country_phonecode' => '686', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '115', 'country_sortname' => 'KP', 'country_name' => 'Korea North', 'country_phonecode' => '850', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '116', 'country_sortname' => 'KR', 'country_name' => 'Korea South', 'country_phonecode' => '82', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '117', 'country_sortname' => 'KW', 'country_name' => 'Kuwait', 'country_phonecode' => '965', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '118', 'country_sortname' => 'KG', 'country_name' => 'Kyrgyzstan', 'country_phonecode' => '996', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '119', 'country_sortname' => 'LA', 'country_name' => 'Laos', 'country_phonecode' => '856', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '120', 'country_sortname' => 'LV', 'country_name' => 'Latvia', 'country_phonecode' => '371', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '121', 'country_sortname' => 'LB', 'country_name' => 'Lebanon', 'country_phonecode' => '961', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '122', 'country_sortname' => 'LS', 'country_name' => 'Lesotho', 'country_phonecode' => '266', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '123', 'country_sortname' => 'LR', 'country_name' => 'Liberia', 'country_phonecode' => '231', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '124', 'country_sortname' => 'LY', 'country_name' => 'Libya', 'country_phonecode' => '218', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '125', 'country_sortname' => 'LI', 'country_name' => 'Liechtenstein', 'country_phonecode' => '423', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '126', 'country_sortname' => 'LT', 'country_name' => 'Lithuania', 'country_phonecode' => '370', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '127', 'country_sortname' => 'LU', 'country_name' => 'Luxembourg', 'country_phonecode' => '352', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '128', 'country_sortname' => 'MO', 'country_name' => 'Macau S.A.R.', 'country_phonecode' => '853', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '129', 'country_sortname' => 'MK', 'country_name' => 'Macedonia', 'country_phonecode' => '389', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '130', 'country_sortname' => 'MG', 'country_name' => 'Madagascar', 'country_phonecode' => '261', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '131', 'country_sortname' => 'MW', 'country_name' => 'Malawi', 'country_phonecode' => '265', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '132', 'country_sortname' => 'MY', 'country_name' => 'Malaysia', 'country_phonecode' => '60', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '133', 'country_sortname' => 'MV', 'country_name' => 'Maldives', 'country_phonecode' => '960', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '134', 'country_sortname' => 'ML', 'country_name' => 'Mali', 'country_phonecode' => '223', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '135', 'country_sortname' => 'MT', 'country_name' => 'Malta', 'country_phonecode' => '356', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '136', 'country_sortname' => 'XM', 'country_name' => 'Man (Isle of)', 'country_phonecode' => '44', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '137', 'country_sortname' => 'MH', 'country_name' => 'Marshall Islands', 'country_phonecode' => '692', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '138', 'country_sortname' => 'MQ', 'country_name' => 'Martinique', 'country_phonecode' => '596', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '139', 'country_sortname' => 'MR', 'country_name' => 'Mauritania', 'country_phonecode' => '222', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '140', 'country_sortname' => 'MU', 'country_name' => 'Mauritius', 'country_phonecode' => '230', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '141', 'country_sortname' => 'YT', 'country_name' => 'Mayotte', 'country_phonecode' => '269', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '142', 'country_sortname' => 'MX', 'country_name' => 'Mexico', 'country_phonecode' => '52', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '143', 'country_sortname' => 'FM', 'country_name' => 'Micronesia', 'country_phonecode' => '691', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '144', 'country_sortname' => 'MD', 'country_name' => 'Moldova', 'country_phonecode' => '373', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '145', 'country_sortname' => 'MC', 'country_name' => 'Monaco', 'country_phonecode' => '377', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '146', 'country_sortname' => 'MN', 'country_name' => 'Mongolia', 'country_phonecode' => '976', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '147', 'country_sortname' => 'MS', 'country_name' => 'Montserrat', 'country_phonecode' => '1664', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '148', 'country_sortname' => 'MA', 'country_name' => 'Morocco', 'country_phonecode' => '212', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '149', 'country_sortname' => 'MZ', 'country_name' => 'Mozambique', 'country_phonecode' => '258', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '150', 'country_sortname' => 'MM', 'country_name' => 'Myanmar', 'country_phonecode' => '95', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '151', 'country_sortname' => 'NA', 'country_name' => 'Namibia', 'country_phonecode' => '264', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '152', 'country_sortname' => 'NR', 'country_name' => 'Nauru', 'country_phonecode' => '674', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '153', 'country_sortname' => 'NP', 'country_name' => 'Nepal', 'country_phonecode' => '977', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '154', 'country_sortname' => 'AN', 'country_name' => 'Netherlands Antilles', 'country_phonecode' => '599', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '155', 'country_sortname' => 'NL', 'country_name' => 'Netherlands The', 'country_phonecode' => '31', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '156', 'country_sortname' => 'NC', 'country_name' => 'New Caledonia', 'country_phonecode' => '687', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '157', 'country_sortname' => 'NZ', 'country_name' => 'New Zealand', 'country_phonecode' => '64', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '158', 'country_sortname' => 'NI', 'country_name' => 'Nicaragua', 'country_phonecode' => '505', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '159', 'country_sortname' => 'NE', 'country_name' => 'Niger', 'country_phonecode' => '227', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '160', 'country_sortname' => 'NG', 'country_name' => 'Nigeria', 'country_phonecode' => '234', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '161', 'country_sortname' => 'NU', 'country_name' => 'Niue', 'country_phonecode' => '683', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '162', 'country_sortname' => 'NF', 'country_name' => 'Norfolk Island', 'country_phonecode' => '672', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '163', 'country_sortname' => 'MP', 'country_name' => 'Northern Mariana Islands', 'country_phonecode' => '1670', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '164', 'country_sortname' => 'NO', 'country_name' => 'Norway', 'country_phonecode' => '47', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '165', 'country_sortname' => 'OM', 'country_name' => 'Oman', 'country_phonecode' => '968', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '166', 'country_sortname' => 'PK', 'country_name' => 'Pakistan', 'country_phonecode' => '92', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '167', 'country_sortname' => 'PW', 'country_name' => 'Palau', 'country_phonecode' => '680', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '168', 'country_sortname' => 'PS', 'country_name' => 'Palestinian Territory Occupied', 'country_phonecode' => '970', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '169', 'country_sortname' => 'PA', 'country_name' => 'Panama', 'country_phonecode' => '507', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '170', 'country_sortname' => 'PG', 'country_name' => 'Papua new Guinea', 'country_phonecode' => '675', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '171', 'country_sortname' => 'PY', 'country_name' => 'Paraguay', 'country_phonecode' => '595', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '172', 'country_sortname' => 'PE', 'country_name' => 'Peru', 'country_phonecode' => '51', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '173', 'country_sortname' => 'PH', 'country_name' => 'Philippines', 'country_phonecode' => '63', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '174', 'country_sortname' => 'PN', 'country_name' => 'Pitcairn Island', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '175', 'country_sortname' => 'PL', 'country_name' => 'Poland', 'country_phonecode' => '48', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '176', 'country_sortname' => 'PT', 'country_name' => 'Portugal', 'country_phonecode' => '351', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '177', 'country_sortname' => 'PR', 'country_name' => 'Puerto Rico', 'country_phonecode' => '1787', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '178', 'country_sortname' => 'QA', 'country_name' => 'Qatar', 'country_phonecode' => '974', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '179', 'country_sortname' => 'RE', 'country_name' => 'Reunion', 'country_phonecode' => '262', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '180', 'country_sortname' => 'RO', 'country_name' => 'Romania', 'country_phonecode' => '40', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '181', 'country_sortname' => 'RU', 'country_name' => 'Russia', 'country_phonecode' => '70', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '182', 'country_sortname' => 'RW', 'country_name' => 'Rwanda', 'country_phonecode' => '250', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '183', 'country_sortname' => 'SH', 'country_name' => 'Saint Helena', 'country_phonecode' => '290', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '184', 'country_sortname' => 'KN', 'country_name' => 'Saint Kitts And Nevis', 'country_phonecode' => '1869', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '185', 'country_sortname' => 'LC', 'country_name' => 'Saint Lucia', 'country_phonecode' => '1758', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '186', 'country_sortname' => 'PM', 'country_name' => 'Saint Pierre and Miquelon', 'country_phonecode' => '508', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '187', 'country_sortname' => 'VC', 'country_name' => 'Saint Vincent And The Grenadines', 'country_phonecode' => '1784', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '188', 'country_sortname' => 'WS', 'country_name' => 'Samoa', 'country_phonecode' => '684', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '189', 'country_sortname' => 'SM', 'country_name' => 'San Marino', 'country_phonecode' => '378', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '190', 'country_sortname' => 'ST', 'country_name' => 'Sao Tome and Principe', 'country_phonecode' => '239', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '191', 'country_sortname' => 'SA', 'country_name' => 'Saudi Arabia', 'country_phonecode' => '966', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '192', 'country_sortname' => 'SN', 'country_name' => 'Senegal', 'country_phonecode' => '221', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '193', 'country_sortname' => 'RS', 'country_name' => 'Serbia', 'country_phonecode' => '381', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '194', 'country_sortname' => 'SC', 'country_name' => 'Seychelles', 'country_phonecode' => '248', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '195', 'country_sortname' => 'SL', 'country_name' => 'Sierra Leone', 'country_phonecode' => '232', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '196', 'country_sortname' => 'SG', 'country_name' => 'Singapore', 'country_phonecode' => '65', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '197', 'country_sortname' => 'SK', 'country_name' => 'Slovakia', 'country_phonecode' => '421', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '198', 'country_sortname' => 'SI', 'country_name' => 'Slovenia', 'country_phonecode' => '386', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '199', 'country_sortname' => 'XG', 'country_name' => 'Smaller Territories of the UK', 'country_phonecode' => '44', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '200', 'country_sortname' => 'SB', 'country_name' => 'Solomon Islands', 'country_phonecode' => '677', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '201', 'country_sortname' => 'SO', 'country_name' => 'Somalia', 'country_phonecode' => '252', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '202', 'country_sortname' => 'ZA', 'country_name' => 'South Africa', 'country_phonecode' => '27', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '203', 'country_sortname' => 'GS', 'country_name' => 'South Georgia', 'country_phonecode' => '0', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '204', 'country_sortname' => 'SS', 'country_name' => 'South Sudan', 'country_phonecode' => '211', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '205', 'country_sortname' => 'ES', 'country_name' => 'Spain', 'country_phonecode' => '34', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '206', 'country_sortname' => 'LK', 'country_name' => 'Sri Lanka', 'country_phonecode' => '94', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '207', 'country_sortname' => 'SD', 'country_name' => 'Sudan', 'country_phonecode' => '249', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '208', 'country_sortname' => 'SR', 'country_name' => 'Suriname', 'country_phonecode' => '597', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '209', 'country_sortname' => 'SJ', 'country_name' => 'Svalbard And Jan Mayen Islands', 'country_phonecode' => '47', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '210', 'country_sortname' => 'SZ', 'country_name' => 'Swaziland', 'country_phonecode' => '268', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '211', 'country_sortname' => 'SE', 'country_name' => 'Sweden', 'country_phonecode' => '46', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '212', 'country_sortname' => 'CH', 'country_name' => 'Switzerland', 'country_phonecode' => '41', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '213', 'country_sortname' => 'SY', 'country_name' => 'Syria', 'country_phonecode' => '963', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '214', 'country_sortname' => 'TW', 'country_name' => 'Taiwan', 'country_phonecode' => '886', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '215', 'country_sortname' => 'TJ', 'country_name' => 'Tajikistan', 'country_phonecode' => '992', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '216', 'country_sortname' => 'TZ', 'country_name' => 'Tanzania', 'country_phonecode' => '255', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '217', 'country_sortname' => 'TH', 'country_name' => 'Thailand', 'country_phonecode' => '66', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '218', 'country_sortname' => 'TG', 'country_name' => 'Togo', 'country_phonecode' => '228', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '219', 'country_sortname' => 'TK', 'country_name' => 'Tokelau', 'country_phonecode' => '690', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '220', 'country_sortname' => 'TO', 'country_name' => 'Tonga', 'country_phonecode' => '676', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '221', 'country_sortname' => 'TT', 'country_name' => 'Trinidad And Tobago', 'country_phonecode' => '1868', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '222', 'country_sortname' => 'TN', 'country_name' => 'Tunisia', 'country_phonecode' => '216', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '223', 'country_sortname' => 'TR', 'country_name' => 'Turkey', 'country_phonecode' => '90', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '224', 'country_sortname' => 'TM', 'country_name' => 'Turkmenistan', 'country_phonecode' => '7370', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '225', 'country_sortname' => 'TC', 'country_name' => 'Turks And Caicos Islands', 'country_phonecode' => '1649', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '226', 'country_sortname' => 'TV', 'country_name' => 'Tuvalu', 'country_phonecode' => '688', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '227', 'country_sortname' => 'UG', 'country_name' => 'Uganda', 'country_phonecode' => '256', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '228', 'country_sortname' => 'UA', 'country_name' => 'Ukraine', 'country_phonecode' => '380', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '229', 'country_sortname' => 'AE', 'country_name' => 'United Arab Emirates', 'country_phonecode' => '971', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '230', 'country_sortname' => 'GB', 'country_name' => 'United Kingdom', 'country_phonecode' => '44', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '231', 'country_sortname' => 'US', 'country_name' => 'United States', 'country_phonecode' => '1', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '232', 'country_sortname' => 'UM', 'country_name' => 'United States Minor Outlying Islands', 'country_phonecode' => '1', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '233', 'country_sortname' => 'UY', 'country_name' => 'Uruguay', 'country_phonecode' => '598', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '234', 'country_sortname' => 'UZ', 'country_name' => 'Uzbekistan', 'country_phonecode' => '998', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '235', 'country_sortname' => 'VU', 'country_name' => 'Vanuatu', 'country_phonecode' => '678', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '236', 'country_sortname' => 'VA', 'country_name' => 'Vatican City State (Holy See)', 'country_phonecode' => '39', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '237', 'country_sortname' => 'VE', 'country_name' => 'Venezuela', 'country_phonecode' => '58', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '238', 'country_sortname' => 'VN', 'country_name' => 'Vietnam', 'country_phonecode' => '84', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '239', 'country_sortname' => 'VG', 'country_name' => 'Virgin Islands (British)', 'country_phonecode' => '1284', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '240', 'country_sortname' => 'VI', 'country_name' => 'Virgin Islands (US)', 'country_phonecode' => '1340', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '241', 'country_sortname' => 'WF', 'country_name' => 'Wallis And Futuna Islands', 'country_phonecode' => '681', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '242', 'country_sortname' => 'EH', 'country_name' => 'Western Sahara', 'country_phonecode' => '212', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '243', 'country_sortname' => 'YE', 'country_name' => 'Yemen', 'country_phonecode' => '967', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '244', 'country_sortname' => 'YU', 'country_name' => 'Yugoslavia', 'country_phonecode' => '38', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '245', 'country_sortname' => 'ZM', 'country_name' => 'Zambia', 'country_phonecode' => '260', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 

['country_id' => '246', 'country_sortname' => 'ZW', 'country_name' => 'Zimbabwe', 'country_phonecode' => '263', 'country_status' => 1, 'created_by' => 1, 'updated_by' => 1], 
    ];
    Country::insert($country);
    }
}
