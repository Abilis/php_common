<?phpinclude_once('inc/model.php');include_once('inc/C_Base.php');//// ���������� �������� ��������������.//class C_Edit extends C_Base{	private $text;	// �����	private $error;	// ��������� �� ������	//	// �����������.	//	function __construct()	{			}		//	// ����������� ���������� �������.	//	protected function OnInput()	{		parent::OnInput();		$this->title = $this->title . ' :: ��������������';				if ($this->IsPost())		{			$text = $_POST['text'];						if (strpos($text, '<') !== false)			{				// ��������� �������� �����				$this->text = $text;				$this->error = '����� �� ������ ��������� ����';			}			else						{				// ������� �������� �����				text_set($text);				header('Location: index.php');				die();					}		}		else		{					// ������ �����			$this->text = text_get();		}	}		//	// ����������� ��������� HTML.	//		protected function OnOutput()	{		$vars = array('text' => $this->text, 'error' => $this->error);			$this->content = $this->Template('theme/v_edit.php', $vars);		parent::OnOutput();	}	}