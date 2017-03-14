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
			$return = '<div style="display:none !important">';
			foreach($this->_data as $click_id){
				$return.= '<img src="https://www.linuxtotal.com.mx/img/tux.png#'.$click_id.'"/>';
			}
			$return.= '</div>';
			return $return;
		}

	}

?>
