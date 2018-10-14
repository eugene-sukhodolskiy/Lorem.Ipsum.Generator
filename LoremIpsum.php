<?php

class LoremIpsum{
	/**
	 * [$vocabulary array sentences]
	 *
	 * @var [array]
	 */
	private $vocabulary;

	/**
	 * [$count_sentence cache count items in vocabulary]
	 *
	 * @var [int]
	 */
	private $count_sentence;

	public function __construct(){
		$this -> vocabulary = [
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
			'Vivamus ultricies iaculis arcu, vitae bibendum tellus feugiat venenatis.'
		];

		$this -> count_sentence = count($this -> vocabulary);
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
			$currentnum = rand(0, $this -> count_sentence);
			if($currentnum == $prevnum){
				$currentnum = rand(0, $this -> count_sentence);
			}
			$li[] = $this -> vocabulary[$currentnum];
			$prevnum = $currentnum;
		}

		return $li;
	}
}