<?php

class LoremIpsum{
	/**
	 * [$vocabulary array sentences]
	 *
	 * @var [array]
	 */
	private $vocabulary;

	/**
	 * [$lang Language for text]
	 * @var [string]
	 */
	public $lang;

	/**
	 * [$count_sentence cache count items in vocabulary]
	 *
	 * @var [int]
	 */
	private $count_sentence;

	/**
	 * [$names array of human names]
	 *
	 * @var [array]
	 */
	private $names;

	/**
	 * [$surnames array of human surnames]
	 *
	 * @var [array]
	 */
	private $surnames;

	private $phone_numbers;

	private $email_domen_list;

	public function __construct($lang = 'en'){
		$this -> lang = $lang;
		$this -> vocabulary = ['en' => [
			'Aenean facilisis venenatis ipsum vel aliquet.',
			'Aenean rhoncus malesuada auctor.',
			'Cras sit amet magna sit amet felis eleifend lacinia.',
			'Donec nec velit eget tellus adipiscing iaculis eu non lorem.',
			'Donec ac tellus eu tellus dignissim blandit.',
			'Donec diam dui, mollis venenatis lacinia ac, pretium id augue.',
			'Donec lectus dolor, cursus eget facilisis id, ultrices ac mauris.',
			'Duis sem quam, euismod ac rhoncus id, adipiscing sed sem.',
			'Etiam sagittis tellus sapien.',
			'In accumsan bibendum magna a egestas.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
			'Maecenas tristique magna nulla, in fringilla purus.',
			'Nulla eleifend velit faucibus eros rhoncus molestie.',
			'Nulla pellentesque dolor at metus molestie ultrices nec vitae metus.',
			'Pellentesque vel felis purus, ut dignissim erat.',
			'Pellentesque quis purus nec odio aliquet bibendum ut vitae risus.',
			'Phasellus sed felis vitae purus dictum fermentum.',
			'Praesent ac tellus dui, in euismod leo.',
			'Proin vulputate tincidunt erat id auctor.',
			'Sed non justo enim.',
			'Vestibulum imperdiet nunc id metus pellentesque eleifend.',
			'Vivamus ultricies iaculis arcu, vitae bibendum tellus feugiat venenatis.',
			'Sed ultricies mi vel aliquet eleifend.',
			'Ut egestas est id ligula gravida, quis lobortis lacus consectetur.',
			'Cras ac urna fringilla, bibendum leo sit amet, suscipit nisi.',
			'Sed gravida erat sit amet neque rutrum mattis.',
			'Integer at ex nec nunc euismod scelerisque.',
			'Nullam faucibus dui imperdiet rutrum rhoncus.',
			'Proin scelerisque sapien et augue sodales auctor.',
			'In posuere erat ut posuere mollis.',
			'Morbi lobortis ipsum eu ipsum eleifend, eu tincidunt arcu sagittis.'
		],
		'ru' => [
			'Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты.',
			'Гедонизм осмысляет дедуктивный метод. Надстройка нетривиальна.',
			'Дискретность амбивалентно транспонирует гравитационный парадокс.',
			'Смысл жизни, следовательно, творит данный закон внешнего мира.',
			'Дедуктивный метод решительно представляет собой бабувизм.',
			'Имеется спорная точка зрения, гласящая примерно следующее: элементы политического процесса, превозмогая сложившуюся непростую экономическую ситуацию, превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.',
			'Но явные признаки победы институционализации в равной степени предоставлены сами себе.',
			'В своём стремлении повысить качество жизни, они забывают, что существующая теория предоставляет широкие возможности для экономической целесообразности принимаемых решений.',
			'Не следует, однако, забывать, что глубокий уровень погружения не оставляет шанса для экспериментов, поражающих по своей масштабности и грандиозности.',
			'Сложно сказать, почему некоторые особенности внутренней политики и по сей день остаются уделом либералов, которые жаждут быть ограничены исключительно образом мышления!',
			'В целом, конечно, социально-экономическое развитие выявляет срочную потребность первоочередных требований.',
			'Каждый из нас понимает очевидную вещь: социально-экономическое развитие позволяет выполнить важные задания по разработке инновационных методов управления процессами.',
			'Предварительные выводы неутешительны: новая модель организационной деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для позиций, занимаемых участниками в отношении поставленных задач!',
			'А также элементы политического процесса преданы социально-демократической анафеме.',
			'В частности, убеждённость некоторых оппонентов предполагает независимые способы реализации глубокомысленных рассуждений.',
			'Задача организации, в особенности же консультация с широким активом позволяет выполнить важные задания по разработке системы массового участия.',
			'Таким образом, граница обучения кадров способствует подготовке и реализации переосмысления внешнеэкономических политик.',
			'Есть над чем задуматься: независимые государства формируют глобальную экономическую сеть и при этом - преданы социально-демократической анафеме.',
			'Предприниматели в сети интернет освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, преданы социально-демократической анафеме.',
			'Принимая во внимание показатели успешности, консультация с широким активом представляет собой интересный эксперимент проверки первоочередных требований.',
			'Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии, инициированные исключительно синтетически, объединены в целые кластеры себе подобных.',
			'Учитывая ключевые сценарии поведения, высококачественный прототип будущего проекта напрямую зависит от экспериментов, поражающих по своей масштабности и грандиозности.',
			'Идейные соображения высшего порядка, а также граница обучения кадров предопределяет высокую востребованность дальнейших направлений развития.',
			'В частности, постоянный количественный рост и сфера нашей активности, в своём классическом представлении, допускает внедрение приоритизации разума над эмоциями.',
			'Для современного мира курс на социально-ориентированный национальный проект обеспечивает актуальность глубокомысленных рассуждений.',
			'И нет сомнений, что некоторые особенности внутренней политики объявлены нарушающими общечеловеческие нормы этики и морали.',
			'С другой стороны, перспективное планирование представляет собой интересный эксперимент проверки анализа существующих паттернов поведения.',
			'Мы вынуждены отталкиваться от того, что реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо прогресса профессионального сообщества.',
			'Значимость этих проблем настолько очевидна, что убеждённость некоторых оппонентов представляет собой интересный эксперимент проверки экономической целесообразности принимаемых решений.',
			'Учитывая ключевые сценарии поведения, экономическая повестка сегодняшнего дня требует анализа системы массового участия.'
		]
	];

		$this -> count_sentence = count($this -> vocabulary[$this -> lang]);

		$this -> names = ['male' => [], 'female' => []];
		$this -> names['male'] = [
			'Liam', 'Noah', 'Mason', 'Ethan', 'Logan',
			'Lucas', 'Jackson', 'Aiden', 'Oliver', 'Jacob',
			'Elijah', 'Alexander', 'James', 'Benjamin', 'Jack',
			'Luke', 'William', 'Michael', 'Owen', 'Daniel',
			'Carter', 'Gabriel', 'Henry', 'Matthew', 'Wyatt',
			'Caleb', 'Jayden', 'Nathan', 'Ryan', 'Isaac'
		];
		$this -> names['female'] = [
			'Emma', 'Olivia', 'Ava', 'Sophia', 'Isabella',
			'Mia', 'Charlotte', 'Amelia', 'Emily', 'Madison',
			'Harper', 'Abigail', 'Avery', 'Lily', 'Ella',
			'Chloe', 'Evelyn', 'Sofia', 'Aria', 'Ellie',
			'Aubrey', 'Scarlett', 'Zoey', 'Hannah', 'Audrey',
			'Grace', 'Addison', 'Zoe', 'Elizabeth', 'Nora'
		];

		$this -> surnames = [
			'Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 
			'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor', 
			'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 
			'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson', 
			'Clark', 'Rodriguez', 'Lewis', 'Lee', 'Walker', 
			'Hall', 'Allen', 'Young', 'Hernandez', 'King', 
			'Wright', 'Lopez', 'Hill', 'Scott', 'Green', 
			'Adams', 'Baker', 'Gonzalez', 'Nelson', 'Carter',
			'Mitchell', 'Perez', 'Roberts', 'Turner', 'Phillips', 
			'Campbell', 'Parker', 'Evans', 'Edwards', 'Collins', 
			'Stewart', 'Sanchez', 'Morris', 'Rogers', 'Reed', 
			'Cook', 'Morgan', 'Bell', 'Murphy', 'Bailey', 
			'Rivera', 'Cooper', 'Richardson', 'Cox', 'Howard', 
			'Ward', 'Torres', 'Peterson', 'Gray', 'Ramirez', 
			'James', 'Watson', 'Brooks', 'Kelly', 'Sanders', 
			'Price', 'Bennett', 'Wood', 'Barnes', 'Ross', 
			'Henderson', 'Coleman', 'Jenkins', 'Perry', 'Powell', 
			'Long', 'Patterson', 'Flores', 'Washington', 'Hughes',
			'Butler', 'Simmons', 'Gonzales', 'Foster', 'Bryant', 
			'Alexander', 'Russell', 'Griffin', 'Diaz', 'Hayes'
		];

		$this -> phone_numbers = ['country_code' => ['+1', '+3', '+7', '+9', '+2', '+4'], 'region_code' => [
			209, 213, 310, 323, 408, 415, 424, 510, 530, 559, 562, 619, 626, 650, 661, 707, 714, 760, 805, 818, 831, 858, 909, 925, 949,
			239, 305, 321, 352, 386, 407, 561, 727, 754, 772, 786, 813, 850, 863, 904, 941, 954,
			217, 224, 309, 312, 331, 464, 618, 630, 708, 773, 779, 815, 847, 872
		]];
		$this -> phone_numbers['count_country_code'] = count($this -> phone_numbers['country_code']);
		$this -> phone_numbers['count_region_code'] = count($this -> phone_numbers['region_code']);
		$this -> email_domen_list = [
			'gmail',
			'yahoo',
			'hotmail',
			'outlook',
			'mail'
		];
	}

	/**
	 * [gen_list wrap for $this -> gen()]
	 *
	 * @param  [int] $count_items [count items]
	 *
	 * @return [array] [array width result]
	 */
	public function gen_list($count_items){
		return $this -> gen($count_items);
	}

	/**
	 * [gen_words generate preset words]
	 *
	 * @param  [int] $count_words [count words]
	 *
	 * @return [string] [words]
	 */
	public function gen_words($count_words){
		$max_count = 30;
		if($count_words > $max_count) $count_words = $max_count;
		list($paragraph) = $this -> gen_paragraphs(1, 10, 20);
		$paragraph = explode(' ', $paragraph);
		$words = [];
		for($i=0; $i<$count_words; $i++){
			$words[] = $paragraph[$i];
		}
		$words = implode(' ', $words);
		$words = trim($words, ',');
		return $words;
	}

	/**
	 * [gen_paragraphs generate preset count paragraphs]
	 *
	 * @param  int $count_p [count paragraphs]
	 * 
	 * @param  int $min_len [min length for one paragraph]
	 * 
	 * @param  int $max_len [max length for one paragraph]
	 *
	 * @return [array] [random paragraph list]
	 */
	public function gen_paragraphs($count_p, $min_len = 1, $max_len = 30){
		$p = [];
		for($i=0; $i<$count_p; $i++){
			$paragraphy_len = rand($min_len, $max_len);
			$p[] = implode(' ', $this -> gen($paragraphy_len));
		}

		return $p;
	}

	/**
	 * [gen_paragraph generate one paragraph]
	 *
	 * @param  int $count_sentence [count sentence]
	 *
	 * @return [string] [random paragraph]
	 */
	public function gen_paragraph($count_sentence = false){
		if(!$count_sentence) $count_sentence = rand(1, 30);
		$p = implode(' ', $this -> gen($count_sentence));
		return $p;
	}

	/**
	 * [gen Generated base list width random sentence]
	 *
	 * @param  [int] $count [count items]
	 *
	 * @return [array] [array width result]
	 */
	private function gen($count){
		$prevnum = -1;
		$li = [];
		for($i=0; $i<$count; $i++){
			$currentnum = rand(0, $this -> count_sentence - 1);
			if($currentnum == $prevnum){
				$currentnum = rand(0, $this -> count_sentence - 1);
			}
			$li[] = $this -> vocabulary[$this -> lang][$currentnum];
			$prevnum = $currentnum;
		}

		return $li;
	}

	// ---- NAMES ---- //
	
	/**
	 * [get_name generate and return random eng name]
	 *
	 * @param  [string] $sex [man or woman or if $sex == null, then random]
	 *
	 * @return [string] [name]
	 */
	public function get_name($sex = null){
		if(is_null($sex)){
			$sex = rand(0, 1);
			$sex = $sex ? 'male' : 'female';
		}
		$count_names = count($this -> names[$sex]);
		return $this -> names[$sex][rand(0, $count_names - 1)];
	}

	/**
	 * [get_female_name wrapper for get_name func]
	 *
	 * @return [string] [female name]
	 */
	public function get_female_name(){
		return $this -> get_name('female');
	}

	/**
	 * [get_male_name wrapper for get_name func]
	 *
	 * @return [string] [male name]
	 */
	public function get_male_name(){
		return $this -> get_name('male');
	}

	/**
	 * [get_surname description]
	 *
	 * @return [string] [return surname]
	 */
	public function get_surname(){
		$count_surnames = count($this -> surnames);
		return $this -> surnames[rand(0, $count_surnames - 1)];
	}

	/**
	 * [get_full_name_to_str return name and surname with separator space]
	 *
	 * @return [string] [return name and surname with separator space]
	 */
	public function get_full_name_to_str(){
		return $this -> get_name() . ' ' . $this -> get_surname();
	}

	/**
	 * [get_full_name_to_arr return name and surname in array]
	 *
	 * @return [array] [return name and surname in array]
	 */
	public function get_full_name_to_arr(){
		return ['name' => $this -> get_name(), 'surname' => $this -> get_surname()];
	}

	// ---- PHONE NUMBERS ---- //
	
	/**
	 * [get_phone_number get phone number]
	 *
	 * @return [string] [formated phone number]
	 */
	public function get_phone_number(){
		$count_country_code = $this -> phone_numbers['count_country_code'] - 1;
		$count_region_code = $this -> phone_numbers['count_region_code'] - 1;
		$country_code = $this -> phone_numbers['country_code'][ rand(0, $count_country_code) ];
		$region_code = $this -> phone_numbers['region_code'][ rand(0, $count_region_code) ];
		$phone_number = $country_code . ' ' . $region_code . '-' . rand(100, 999) . '-' . rand(1000, 9999);
		return $phone_number;
	}

	// ---- EMAIL ---- //

	/**
	 * [get_email email address]
	 *
	 * @param  string $name [user name]
	 * @param  string $surname [user surname]
	 *
	 * @return [string] [email]
	 */
	public function get_email($name = false, $surname = false){
		$count = count($this -> email_domen_list) - 1;
		$name = $name ? $name : $this -> get_name();
		$surname = $surname ? $surname : $this -> get_surname();
		$sep_arr = ['.', '_', ''];
		$sep = $sep_arr[ rand(0, count($sep_arr) - 1) ];
		$host = $this -> email_domen_list[ rand(0, $count) ];
		$email = strtolower($name) . $sep . strtolower($surname) . '@' . $host . '.com';
		return $email;
	}

	// ---- USER ---- //

	/**
	 * [get_user_card data about one random user]
	 *
	 * @param  [string] $sex [male or female]
	 *
	 * @return [array] [user card in assoc array]
	 */
	public function get_user_card($sex = null){
		if(is_null($sex)){
			$sex = rand(0, 1);
			$sex = $sex ? 'male' : 'female';
		}
		$name = $this -> get_name($sex);
		$surname = $this -> get_surname();
		$user = [
			'name' => $name,
			'surname' => $surname,
			'sex' => $sex,
			'phone' => $this -> get_phone_number(),
			'email' => $this -> get_email($name, $surname)
		];

		return $user;
	}
}