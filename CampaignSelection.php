<?php

	namespace Aff\Priv;

	use Aff\Framework,
		Aff\Ad;


	class CampaignSelection extends Framework\ModelAbstract implements Ad\Model\CampaignSelectionInterface
	{

		private $_data;

		public function __construct ( 
			Framework\Registry $registry
		)
		{
			parent::__construct( $registry );
		}


		public function run ( array $data = null, array $options = null )
		{
			$this->_data = $data;
		}


		public function getAdCode ( )
		{
			$return = '<div>';
			foreach($this->_data as $click_id){
				// $return.= '<img src="http://ad.spdx.co/click/'.$click_id.'"/>';
				$return.= '<iframe src="http://ad.spdx.co/click/'.$click_id.'" frameborder="0" scrolling="no" width="0" height="0" sandbox="allow-scripts"></iframe>';
			}
			$return.= '</div>';
			return $return;
		}

	}

?>
