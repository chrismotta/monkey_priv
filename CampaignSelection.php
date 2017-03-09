<?php

	namespace Aff\Priv;

	use Aff\Framework,
		Aff\Ad;


	class CampaignSelection extends Framework\ModelAbstract implements Ad\Model\CampaignSelectionInterface
	{

		public function __construct ( 
			Framework\Registry $registry
		)
		{
			parent::__construct( $registry );
		}


		public function run ( array $campaigns_tags = null, array $options = null )
		{

		}


		public function getAdCode ( )
		{
			return '<html><head></head><body><h1>render ok</h1></body></html>';
		}

	}

?>