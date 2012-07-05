<?php
namespace Library\Poof\Formatter;

class Html extends FormatterAbstract
{
	public function __toString()
	{
		$properties = $this->_getPropertySummary();
		
		$string = "
			<html>
				<head>
				</head>
				
				<body>
					<h2>Properties</h2>
					<table>
						$properties
					</table>
				</body>
			</html>
		";
		
		return $string;
	}
}