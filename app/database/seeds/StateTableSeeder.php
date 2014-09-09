<?php

class StateTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('states')->delete();

		State::create(array(
			'abbr' => 'AL',
			'name' => 'Alabama'
		));
		State::create(array(
			'abbr'  => 'AK',
			'name'  => 'Alaska',
		));
		State::create(array(
			'abbr'  => 'AZ',
			'name'  => 'Arizona',
		));
		State::create(array(
			'abbr'  => 'AR',
			'name'  => 'Arkansas',
		));
		State::create(array(
			'abbr'  => 'CA',
			'name'  => 'California',
		));
		State::create(array(
			'abbr'  => 'CO',
			'name'  => 'Colordo',
		));
		State::create(array(
			'abbr'  => 'CT',
			'name'  => 'Connecticut',
		));
		State::create(array(
			'abbr'  => 'DE',
			'name'  => 'Delaware',
		));
		State::create(array(
			'abbr'  => 'DC',
			'name'  => 'District of Columbia',
		));
		State::create(array(
			'abbr'  => 'FL',
			'name'  => 'Florida',
		));
		State::create(array(
			'abbr'  => 'GA',
			'name'  => 'Georgia',
		));
		State::create(array(
			'abbr'  => 'HI',
			'name'  => 'Hawaii',
		));
		State::create(array(
			'abbr'  => 'ID',
			'name'  => 'Idaho',
		));
		State::create(array(
			'abbr'  => 'IL',
			'name'  => 'Illinois',
		));
		State::create(array(
			'abbr'  => 'IN',
			'name'  => 'Indiana',
		));
		State::create(array(
			'abbr'  => 'IA',
			'name'  => 'Iowa',
		));
		State::create(array(
			'abbr'  => 'KS',
			'name'  => 'Kansas',
		));
		State::create(array(
			'abbr'  => 'KY',
			'name'  => 'Kentucky',
		));
		State::create(array(
			'abbr'  => 'LA',
			'name'  => 'Louisiana',
		));
		State::create(array(
			'abbr'  => 'ME',
			'name'  => 'Maine',
		));
		State::create(array(
			'abbr'  => 'MD',
			'name'  => 'Maryland',
		));
		State::create(array(
			'abbr'  => 'MA',
			'name'  => 'Massachusetts',
		));
		State::create(array(
			'abbr'  => 'MI',
			'name'  => 'Michigan',
		));
		State::create(array(
			'abbr'  => 'MN',
			'name'  => 'Minnesota',
		));
		State::create(array(
			'abbr'  => 'MS',
			'name'  => 'Mississippi',
		));
		State::create(array(
			'abbr'  => 'MO',
			'name'  => 'Missouri',
		));
		State::create(array(
			'abbr'  => 'MT',
			'name'  => 'Montana',
		));
		State::create(array(
			'abbr'  => 'NE',
			'name'  => 'Nebraska',
		));
		State::create(array(
			'abbr'  => 'NV',
			'name'  => 'Nevada',
		));
		State::create(array(
			'abbr'  => 'NH',
			'name'  => 'New Hampshire',
		));
		State::create(array(
			'abbr'  => 'NJ',
			'name'  => 'New Jersey',
		));
		State::create(array(
			'abbr'  => 'NM',
			'name'  => 'New Mexico',
		));
		State::create(array(
			'abbr'  => 'NY',
			'name'  => 'New York',
		));
		State::create(array(
			'abbr'  => 'NC',
			'name'  => 'North Carolina',
		));
		State::create(array(
			'abbr'  => 'ND',
			'name'  => 'North Dakota',
		));
		State::create(array(
			'abbr'  => 'OH',
			'name'  => 'Ohio',
		));
		State::create(array(
			'abbr'  => 'OK',
			'name'  => 'Oklahoma',
		));
		State::create(array(
			'abbr'  => 'OR',
			'name'  => 'Oregon',
		));
		State::create(array(
			'abbr'  => 'PA',
			'name'  => 'Pennsylvania',
		));
		State::create(array(
			'abbr'  => 'RI',
			'name'  => 'Rhode Island',
		));
		State::create(array(
			'abbr'  => 'SC',
			'name'  => 'South Carolina',
		));
		State::create(array(
			'abbr'  => 'SD',
			'name'  => 'South Dakota',
		));
		State::create(array(
			'abbr'  => 'TN',
			'name'  => 'Tennessee',
		));
		State::create(array(
			'abbr'  => 'TX',
			'name'  => 'Texas',
		));
		State::create(array(
			'abbr'  => 'UT',
			'name'  => 'Utah',
		));
		State::create(array(
			'abbr'  => 'VT',
			'name'  => 'Vermont',
		));
		State::create(array(
			'abbr'  => 'VA',
			'name'  => 'Virginia',
		));
		State::create(array(
			'abbr'  => 'WA',
			'name'  => 'Washington',
		));
		State::create(array(
			'abbr'  => 'WV',
			'name'  => 'West Virginia',
		));
		State::create(array(
			'abbr'  => 'WA',
			'name'  => 'Washington',
		));
		State::create(array(
			'abbr'  => 'WI',
			'name'  => 'Wisconsin',
		));
		State::create(array(
			'abbr'  => 'WY',
			'name'  => 'Wyoming',
		));
	}

}
