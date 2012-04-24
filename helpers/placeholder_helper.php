<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Generates a placeholder image
 *
 * @access	public
 * @param 	mixed  	width as integer or array of params
 * @param 	integer	height
 * @param 	string 	text
 * @param 	string 	background color
 * @param 	string 	foreground color
 * @return	string 	HTML
 */
if(!function_exists('placeholder'))
{
	function placeholder($width, $height = NULL, $text = NULL, $background = NULL, $foreground = NULL)
	{
		$params = array();

		if(is_array($width))
		{
			$params = $width;
		}
		else
		{
			$params['width']     	= $width;
			$params['height']    	= $height;
			$params['text']      	= $text;
			$params['background']	= $background;
			$params['foreground']	= $foreground;
		}

		$params['height']    	= (empty($params['height'])) ? $params['width'] : $params['height'];
		$params['text']      	= (empty($params['text'])) ? $params['width'] . ' x '. $params['height'] : $params['text'];
		$params['background']	= (empty($params['background'])) ? 'CCCCCC' : $params['height'];
		$params['foreground']	= (empty($params['foreground'])) ? '969696' : $params['foreground'];

		return '<img src="http://placehold.it/'. $params['width'] . 'x'. $params['height'] . '/' . $params['background'] . '/' . $params['foreground'] . '&text='. $params['text'] . '" alt="Placeholder">';
	}
}


if(!function_exists('placeholder'))
{
	function lipsum($type='paragraphs', $count=3, $html=false, $list_open='<ul>', $list_close='</ul>')
	{
		$string = '';
		$index  = 0;

		if($type=='paragraphs')
		{
			$paragraph[] =' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique orci in ligula dignissim gravida. Donec luctus, lectus vitae iaculis sollicitudin, neque massa facilisis mi, sit amet condimentum sem augue quis justo. Vivamus est risus, laoreet at sodales vel, imperdiet eget quam. Aenean quis magna quis sapien lacinia eleifend non placerat augue. Cras rutrum, lectus vel tristique interdum, lorem tortor vestibulum erat, pretium eleifend lacus lectus et arcu. Nullam id diam orci, sit amet consequat enim. Donec ultrices lacus vel tortor scelerisque facilisis. Curabitur turpis eros, venenatis quis feugiat at, posuere quis erat. Curabitur quis metus a eros varius rhoncus. ';
			$paragraph[] =' Proin id tempor ligula. Aliquam erat volutpat. Suspendisse metus augue, interdum sed blandit et, faucibus sed ligula. Mauris placerat magna in lorem imperdiet sit amet eleifend nisi suscipit. Duis mattis, metus non tristique tempus, nunc arcu fermentum ante, eu mattis eros risus ut elit. Nam nec odio non libero feugiat dapibus et et metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed adipiscing, tortor eu pharetra pellentesque, lectus augue consequat ipsum, ut ornare nibh turpis id tortor. Donec vestibulum pulvinar nisl ullamcorper euismod. ';
			$paragraph[] =' Fusce pulvinar condimentum libero, quis suscipit arcu pretium vitae. Aenean tellus purus, dapibus lacinia mollis id, fermentum id turpis. Cras in lorem vel libero rutrum congue. Fusce tortor ante, cursus quis laoreet sit amet, cursus sed ligula. Praesent felis arcu, vestibulum nec aliquet vel, tincidunt ut quam. Curabitur fermentum est non dolor accumsan sodales. Nullam euismod nunc vitae justo malesuada tristique. Nulla quis justo enim, et pharetra eros. Quisque ornare leo vel odio volutpat sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed nisl lectus, quis bibendum lacus. Maecenas sodales semper interdum. Nam viverra egestas velit volutpat tristique. ';
			$paragraph[] =' Morbi blandit, mauris sit amet ultricies tincidunt, dui nisi adipiscing ipsum, non eleifend massa tellus id ipsum. Fusce lectus ligula, scelerisque quis porta nec, congue vitae ipsum. Vestibulum interdum consectetur diam, lobortis rhoncus enim euismod vitae. Etiam posuere, purus non ullamcorper tristique, purus est tincidunt dolor, sed ullamcorper magna nibh in dui. Pellentesque vehicula augue sed massa elementum ac ornare lectus feugiat. Etiam eget turpis urna. Aliquam egestas turpis vitae diam vulputate at feugiat est ullamcorper. Proin id neque lorem. Proin enim sapien, congue at porttitor ac, sollicitudin ut odio. Aenean at scelerisque erat.  ';
			$paragraph[] =' Donec ac urna enim, quis tempor tortor. Duis sit amet odio id mauris sollicitudin rutrum ut sed elit. Quisque cursus massa eget nisl euismod quis posuere enim consectetur. Sed nec ipsum quam, id rhoncus leo. Etiam commodo sem sit amet libero viverra quis iaculis felis pretium. Etiam in velit a purus porta cursus. Sed ut est tincidunt nulla ultrices suscipit. ';
			$paragraph[] =' Nunc porta interdum erat, in cursus lectus venenatis id. Sed imperdiet, odio vitae dictum sodales, nisl odio sollicitudin lorem, et faucibus metus augue in eros. Curabitur dapibus est sed justo feugiat adipiscing non ac tellus. Praesent posuere, lorem malesuada faucibus mollis, mi nulla placerat justo, sit amet molestie risus metus et lectus. Integer ante quam, dignissim vitae molestie sed, fringilla placerat mauris. In hac habitasse platea dictumst. Praesent porta libero in massa volutpat convallis gravida est consequat. Nulla quis mi id sapien porttitor porta vitae vitae nisi. Integer adipiscing dictum consectetur. Vivamus id leo sit amet lorem interdum egestas. Cras volutpat scelerisque ligula elementum vehicula. Donec id tortor ut sapien aliquet varius at ut dolor. ';
	
			for($i=0; $i<$count; $i++)
			{	
				if($html == true) $string .= '<p>';
				$string .= $paragraph[$index];
				if($html == true) $string .= '</p>';
		
				$string .= "\r\n\r\n";
		
				$index++;
				if($index >= count($paragraph)) //if we've run out of $paragraph items
				{
					$index = 0; //reset which array item to grab once we've exceeded how much we actually have.
				}
			}
			return $string;
		}

		if($type=='words')
		{
			$words = array('Lorem','ipsum','dolor','sit','amet','consectetur','adipiscing','elit','Nunc','tristique','orci','in','ligula','dignissim','gravida','Donec','luctus','lectus','vitae','iaculis','sollicitudin','neque','massa','facilisis','mi','sit','amet','condimentum','sem','augue','quis','justo','Vivamus','est','risus','laoreet','at','sodales','vel','imperdiet','eget','quam','Aenean','quis','magna','quis','sapien','lacinia','eleifend','non','placerat','augue','Cras','rutrum','lectus','vel','tristique','interdum','lorem','tortor','vestibulum','erat','pretium','eleifend','lacus','lectus','et','arcu','Nullam','id','diam','orci','sit','amet','consequat','enim','Donec','ultrices','lacus','vel','tortor','scelerisque','facilisis','Curabitur','turpis','eros','venenatis','quis','feugiat','at','posuere','quis','erat','Curabitur','quis','metus','a','eros','varius','rhoncus','','Proin','id','tempor','ligula','Aliquam','erat','volutpat','Suspendisse','metus','augue','interdum','sed','blandit','et','faucibus','sed','ligula','Mauris','placerat','magna','in','lorem','imperdiet','sit','amet','eleifend','nisi','suscipit','Duis','mattis','metus','non','tristique','tempus','nunc','arcu','fermentum','ante','eu','mattis','eros','risus','ut','elit','Nam','nec','odio','non','libero','feugiat','dapibus','et','et','metus','Vestibulum','ante','ipsum','primis','in','faucibus','orci','luctus','et','ultrices','posuere','cubilia','Curae;','Sed','adipiscing','tortor','eu','pharetra','pellentesque','lectus','augue','consequat','ipsum','ut','ornare','nibh','turpis','id','tortor','Donec','vestibulum','pulvinar','nisl','ullamcorper','euismod','','Fusce','pulvinar','condimentum','libero','quis','suscipit','arcu','pretium','vitae','Aenean','tellus','purus','dapibus','lacinia','mollis','id','fermentum','id','turpis','Cras','in','lorem','vel','libero','rutrum','congue','Fusce','tortor','ante','cursus','quis','laoreet','sit','amet','cursus','sed','ligula','Praesent','felis','arcu','vestibulum','nec','aliquet','vel','tincidunt','ut','quam','Curabitur','fermentum','est','non','dolor','accumsan','sodales','Nullam','euismod','nunc','vitae','justo','malesuada','tristique','Nulla','quis','justo','enim','et','pharetra','eros','Quisque','ornare','leo','vel','odio','volutpat','sodales','Class','aptent','taciti','sociosqu','ad','litora','torquent','per','conubia','nostra','per','inceptos','himenaeos','Morbi','sed','nisl','lectus','quis','bibendum','lacus','Maecenas','sodales','semper','interdum','Nam','viverra','egestas','velit','volutpat','tristique','','Morbi','blandit','mauris','sit','amet','ultricies','tincidunt','dui','nisi','adipiscing','ipsum','non','eleifend','massa','tellus','id','ipsum','Fusce','lectus','ligula','scelerisque','quis','porta','nec','congue','vitae','ipsum','Vestibulum','interdum','consectetur','diam','lobortis','rhoncus','enim','euismod','vitae','Etiam','posuere','purus','non','ullamcorper','tristique','purus','est','tincidunt','dolor','sed','ullamcorper','magna','nibh','in','dui','Pellentesque','vehicula','augue','sed','massa','elementum','ac','ornare','lectus','feugiat','Etiam','eget','turpis','urna','Aliquam','egestas','turpis','vitae','diam','vulputate','at','feugiat','est','ullamcorper','Proin','id','neque','lorem','Proin','enim','sapien','congue','at','porttitor','ac','sollicitudin','ut','odio','Aenean','at','scelerisque','erat','','Donec','ac','urna','enim','quis','tempor','tortor','Duis','sit','amet','odio','id','mauris','sollicitudin','rutrum','ut','sed','elit','Quisque','cursus','massa','eget','nisl','euismod','quis','posuere','enim','consectetur','Sed','nec','ipsum','quam','id','rhoncus','leo','Etiam','commodo','sem','sit','amet','libero','viverra','quis','iaculis','felis','pretium','Etiam','in','velit','a','purus','porta','cursus','Sed','ut','est','tincidunt','nulla','ultrices','suscipit','','Nunc','porta','interdum','erat','in','cursus','lectus','venenatis','id','Sed','imperdiet','odio','vitae','dictum','sodales','nisl','odio','sollicitudin','lorem','et','faucibus','metus','augue','in','eros','Curabitur','dapibus','est','sed','justo','feugiat','adipiscing','non','ac','tellus','Praesent','posuere','lorem','malesuada','faucibus','mollis','mi','nulla','placerat','justo','sit','amet','molestie','risus','metus','et','lectus','Integer','ante','quam','dignissim','vitae','molestie','sed','fringilla','placerat','mauris','In','hac','habitasse','platea','dictumst','Praesent','porta','libero','in','massa','volutpat','convallis','gravida','est','consequat','Nulla','quis','mi','id','sapien','porttitor','porta','vitae','vitae','nisi','Integer','adipiscing','dictum','consectetur','Vivamus','id','leo','sit','amet','lorem','interdum','egestas','Cras','volutpat','scelerisque','ligula','elementum','vehicula','Donec','id','tortor','ut','sapien','aliquet','varius','at','ut','dolor');
	
			for($i=0; $i<$count; $i++)
			{
				$string .= $words[$index].' ';
		
				$index++;
				if($index >= count($words))
				{
					$index = 0;
				}
			}
			return $string;
		}

		if($type=='bytes')
		{
			$words = array('Lorem','ipsum','dolor','sit','amet','consectetur','adipiscing','elit','Nunc','tristique','orci','in','ligula','dignissim','gravida','Donec','luctus','lectus','vitae','iaculis','sollicitudin','neque','massa','facilisis','mi','sit','amet','condimentum','sem','augue','quis','justo','Vivamus','est','risus','laoreet','at','sodales','vel','imperdiet','eget','quam','Aenean','quis','magna','quis','sapien','lacinia','eleifend','non','placerat','augue','Cras','rutrum','lectus','vel','tristique','interdum','lorem','tortor','vestibulum','erat','pretium','eleifend','lacus','lectus','et','arcu','Nullam','id','diam','orci','sit','amet','consequat','enim','Donec','ultrices','lacus','vel','tortor','scelerisque','facilisis','Curabitur','turpis','eros','venenatis','quis','feugiat','at','posuere','quis','erat','Curabitur','quis','metus','a','eros','varius','rhoncus','','Proin','id','tempor','ligula','Aliquam','erat','volutpat','Suspendisse','metus','augue','interdum','sed','blandit','et','faucibus','sed','ligula','Mauris','placerat','magna','in','lorem','imperdiet','sit','amet','eleifend','nisi','suscipit','Duis','mattis','metus','non','tristique','tempus','nunc','arcu','fermentum','ante','eu','mattis','eros','risus','ut','elit','Nam','nec','odio','non','libero','feugiat','dapibus','et','et','metus','Vestibulum','ante','ipsum','primis','in','faucibus','orci','luctus','et','ultrices','posuere','cubilia','Curae;','Sed','adipiscing','tortor','eu','pharetra','pellentesque','lectus','augue','consequat','ipsum','ut','ornare','nibh','turpis','id','tortor','Donec','vestibulum','pulvinar','nisl','ullamcorper','euismod','','Fusce','pulvinar','condimentum','libero','quis','suscipit','arcu','pretium','vitae','Aenean','tellus','purus','dapibus','lacinia','mollis','id','fermentum','id','turpis','Cras','in','lorem','vel','libero','rutrum','congue','Fusce','tortor','ante','cursus','quis','laoreet','sit','amet','cursus','sed','ligula','Praesent','felis','arcu','vestibulum','nec','aliquet','vel','tincidunt','ut','quam','Curabitur','fermentum','est','non','dolor','accumsan','sodales','Nullam','euismod','nunc','vitae','justo','malesuada','tristique','Nulla','quis','justo','enim','et','pharetra','eros','Quisque','ornare','leo','vel','odio','volutpat','sodales','Class','aptent','taciti','sociosqu','ad','litora','torquent','per','conubia','nostra','per','inceptos','himenaeos','Morbi','sed','nisl','lectus','quis','bibendum','lacus','Maecenas','sodales','semper','interdum','Nam','viverra','egestas','velit','volutpat','tristique','','Morbi','blandit','mauris','sit','amet','ultricies','tincidunt','dui','nisi','adipiscing','ipsum','non','eleifend','massa','tellus','id','ipsum','Fusce','lectus','ligula','scelerisque','quis','porta','nec','congue','vitae','ipsum','Vestibulum','interdum','consectetur','diam','lobortis','rhoncus','enim','euismod','vitae','Etiam','posuere','purus','non','ullamcorper','tristique','purus','est','tincidunt','dolor','sed','ullamcorper','magna','nibh','in','dui','Pellentesque','vehicula','augue','sed','massa','elementum','ac','ornare','lectus','feugiat','Etiam','eget','turpis','urna','Aliquam','egestas','turpis','vitae','diam','vulputate','at','feugiat','est','ullamcorper','Proin','id','neque','lorem','Proin','enim','sapien','congue','at','porttitor','ac','sollicitudin','ut','odio','Aenean','at','scelerisque','erat','','Donec','ac','urna','enim','quis','tempor','tortor','Duis','sit','amet','odio','id','mauris','sollicitudin','rutrum','ut','sed','elit','Quisque','cursus','massa','eget','nisl','euismod','quis','posuere','enim','consectetur','Sed','nec','ipsum','quam','id','rhoncus','leo','Etiam','commodo','sem','sit','amet','libero','viverra','quis','iaculis','felis','pretium','Etiam','in','velit','a','purus','porta','cursus','Sed','ut','est','tincidunt','nulla','ultrices','suscipit','','Nunc','porta','interdum','erat','in','cursus','lectus','venenatis','id','Sed','imperdiet','odio','vitae','dictum','sodales','nisl','odio','sollicitudin','lorem','et','faucibus','metus','augue','in','eros','Curabitur','dapibus','est','sed','justo','feugiat','adipiscing','non','ac','tellus','Praesent','posuere','lorem','malesuada','faucibus','mollis','mi','nulla','placerat','justo','sit','amet','molestie','risus','metus','et','lectus','Integer','ante','quam','dignissim','vitae','molestie','sed','fringilla','placerat','mauris','In','hac','habitasse','platea','dictumst','Praesent','porta','libero','in','massa','volutpat','convallis','gravida','est','consequat','Nulla','quis','mi','id','sapien','porttitor','porta','vitae','vitae','nisi','Integer','adipiscing','dictum','consectetur','Vivamus','id','leo','sit','amet','lorem','interdum','egestas','Cras','volutpat','scelerisque','ligula','elementum','vehicula','Donec','id','tortor','ut','sapien','aliquet','varius','at','ut','dolor');
	
			for($i=0; $i<$count; $i++)
			{
				$string .= $words[$index].' ';
		
				$index++;
				if($index >= count($words))
				{
					$index=0;
				}
		
				if(strlen($string) > $count)
				{
					$string = substr($string,0,$count);
				}
			}
			return $string;
		}

		if($type=='list')
		{
			$words = array('Lorem','ipsum','dolor','sit','amet','consectetur','adipiscing','elit','Nunc','tristique','orci','in','ligula','dignissim','gravida','Donec','luctus','lectus','vitae','iaculis','sollicitudin','neque','massa','facilisis','mi','sit','amet','condimentum','sem','augue','quis','justo','Vivamus','est','risus','laoreet','at','sodales','vel','imperdiet','eget','quam','Aenean','quis','magna','quis','sapien','lacinia','eleifend','non','placerat','augue','Cras','rutrum','lectus','vel','tristique','interdum','lorem','tortor','vestibulum','erat','pretium','eleifend','lacus','lectus','et','arcu','Nullam','id','diam','orci','sit','amet','consequat','enim','Donec','ultrices','lacus','vel','tortor','scelerisque','facilisis','Curabitur','turpis','eros','venenatis','quis','feugiat','at','posuere','quis','erat','Curabitur','quis','metus','a','eros','varius','rhoncus','','Proin','id','tempor','ligula','Aliquam','erat','volutpat','Suspendisse','metus','augue','interdum','sed','blandit','et','faucibus','sed','ligula','Mauris','placerat','magna','in','lorem','imperdiet','sit','amet','eleifend','nisi','suscipit','Duis','mattis','metus','non','tristique','tempus','nunc','arcu','fermentum','ante','eu','mattis','eros','risus','ut','elit','Nam','nec','odio','non','libero','feugiat','dapibus','et','et','metus','Vestibulum','ante','ipsum','primis','in','faucibus','orci','luctus','et','ultrices','posuere','cubilia','Curae;','Sed','adipiscing','tortor','eu','pharetra','pellentesque','lectus','augue','consequat','ipsum','ut','ornare','nibh','turpis','id','tortor','Donec','vestibulum','pulvinar','nisl','ullamcorper','euismod','','Fusce','pulvinar','condimentum','libero','quis','suscipit','arcu','pretium','vitae','Aenean','tellus','purus','dapibus','lacinia','mollis','id','fermentum','id','turpis','Cras','in','lorem','vel','libero','rutrum','congue','Fusce','tortor','ante','cursus','quis','laoreet','sit','amet','cursus','sed','ligula','Praesent','felis','arcu','vestibulum','nec','aliquet','vel','tincidunt','ut','quam','Curabitur','fermentum','est','non','dolor','accumsan','sodales','Nullam','euismod','nunc','vitae','justo','malesuada','tristique','Nulla','quis','justo','enim','et','pharetra','eros','Quisque','ornare','leo','vel','odio','volutpat','sodales','Class','aptent','taciti','sociosqu','ad','litora','torquent','per','conubia','nostra','per','inceptos','himenaeos','Morbi','sed','nisl','lectus','quis','bibendum','lacus','Maecenas','sodales','semper','interdum','Nam','viverra','egestas','velit','volutpat','tristique','','Morbi','blandit','mauris','sit','amet','ultricies','tincidunt','dui','nisi','adipiscing','ipsum','non','eleifend','massa','tellus','id','ipsum','Fusce','lectus','ligula','scelerisque','quis','porta','nec','congue','vitae','ipsum','Vestibulum','interdum','consectetur','diam','lobortis','rhoncus','enim','euismod','vitae','Etiam','posuere','purus','non','ullamcorper','tristique','purus','est','tincidunt','dolor','sed','ullamcorper','magna','nibh','in','dui','Pellentesque','vehicula','augue','sed','massa','elementum','ac','ornare','lectus','feugiat','Etiam','eget','turpis','urna','Aliquam','egestas','turpis','vitae','diam','vulputate','at','feugiat','est','ullamcorper','Proin','id','neque','lorem','Proin','enim','sapien','congue','at','porttitor','ac','sollicitudin','ut','odio','Aenean','at','scelerisque','erat','','Donec','ac','urna','enim','quis','tempor','tortor','Duis','sit','amet','odio','id','mauris','sollicitudin','rutrum','ut','sed','elit','Quisque','cursus','massa','eget','nisl','euismod','quis','posuere','enim','consectetur','Sed','nec','ipsum','quam','id','rhoncus','leo','Etiam','commodo','sem','sit','amet','libero','viverra','quis','iaculis','felis','pretium','Etiam','in','velit','a','purus','porta','cursus','Sed','ut','est','tincidunt','nulla','ultrices','suscipit','','Nunc','porta','interdum','erat','in','cursus','lectus','venenatis','id','Sed','imperdiet','odio','vitae','dictum','sodales','nisl','odio','sollicitudin','lorem','et','faucibus','metus','augue','in','eros','Curabitur','dapibus','est','sed','justo','feugiat','adipiscing','non','ac','tellus','Praesent','posuere','lorem','malesuada','faucibus','mollis','mi','nulla','placerat','justo','sit','amet','molestie','risus','metus','et','lectus','Integer','ante','quam','dignissim','vitae','molestie','sed','fringilla','placerat','mauris','In','hac','habitasse','platea','dictumst','Praesent','porta','libero','in','massa','volutpat','convallis','gravida','est','consequat','Nulla','quis','mi','id','sapien','porttitor','porta','vitae','vitae','nisi','Integer','adipiscing','dictum','consectetur','Vivamus','id','leo','sit','amet','lorem','interdum','egestas','Cras','volutpat','scelerisque','ligula','elementum','vehicula','Donec','id','tortor','ut','sapien','aliquet','varius','at','ut','dolor');
	
			for($i=0; $i<$count; $i++)
			{
				$string .= '<li>';
				$string .= strtolower($words[rand(0,count($words))].' '.$words[rand(0,count($words))].' '.$words[rand(0,count($words))]); #yes, this was faster than my nested loop method
				$string .= '</li>';
			}
	
			return $list_open.$string.$list_close;
		}
	}
}
/* End of file placeholder_helper.php */