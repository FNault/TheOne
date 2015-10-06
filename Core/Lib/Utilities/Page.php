<?php

	class Page{
		protected $PageId;
		protected $PageName;
        protected $PageTitle;
        protected $PageContent;
        protected $PageAuthor;
        protected $PageDate;

		public function __construct($PageName){
            $this->PageName = $PageName;
		}

        public function _getPageId($Name){
            $NameFound = FALSE;
            $Pages = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages');
            foreach($Pages as $Key=>$Value) {
                    //var_dump($Pages[$Key]);
                foreach ($Pages[$Key] as $Key2 => $Value2){
                    //var_dump($Key2);
                    if($Key2 == 'name' && $Value2 == $Name){
                        $NameFound = TRUE;
                    }
                    if ($NameFound == TRUE){
                        return $Pages[$Key]['id'];
                    }
                }
            }
        }

        public function _getPageTitle($Name){
            $NameFound = FALSE;
            $Pages = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages');
            foreach($Pages as $Key=>$Value) {
                //var_dump($Pages[$Key]);
                foreach ($Pages[$Key] as $Key2 => $Value2){
                    //var_dump($Key2);
                    if($Key2 == 'name' && $Value2 == $Name){
                        $NameFound = TRUE;
                    }
                    if ($NameFound == TRUE){
                        return $Pages[$Key]['title'];
                    }
                }
            }
        }

        public function _getPageContent($Name){
            $NameFound = FALSE;
            $Pages = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages');
            foreach($Pages as $Key=>$Value) {
                //var_dump($Pages[$Key]);
                foreach ($Pages[$Key] as $Key2 => $Value2){
                    //var_dump($Key2);
                    if($Key2 == 'name' && $Value2 == $Name){
                        $NameFound = TRUE;
                    }
                    if ($NameFound == TRUE){
                        return $Pages[$Key]['content'];
                    }
                }
            }
        }

        public function _getPageAuthor($Name){
            $NameFound = FALSE;
            $Pages = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages');
            foreach($Pages as $Key=>$Value) {
                //var_dump($Pages[$Key]);
                foreach ($Pages[$Key] as $Key2 => $Value2){
                    //var_dump($Key2);
                    if($Key2 == 'name' && $Value2 == $Name){
                        $NameFound = TRUE;
                    }
                    if ($NameFound == TRUE){
                        return $Pages[$Key]['author'];
                    }
                }
            }
        }

        public function _getPageDate($Name){
            $NameFound = FALSE;
            $Pages = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages');
            foreach($Pages as $Key=>$Value) {
                //var_dump($Pages[$Key]);
                foreach ($Pages[$Key] as $Key2 => $Value2){
                    //var_dump($Key2);
                    if($Key2 == 'name' && $Value2 == $Name){
                        $NameFound = TRUE;
                    }
                    if ($NameFound == TRUE){
                        return $Pages[$Key]['date'];
                    }
                }
            }
        }

        public function _setPageAuthor($Author){
            $this->PageAuthor = $Author;
        }

        public function _setPageTitle($Title){
            $this->PageTitle = $Title;
        }

        public function _setPageContent($Content){
            $this->PageContent = $Content;
        }

        public function _setPageDate($Date){
            $this->PageDate = $Date;
        }

        public function  _postPage(){
            //$PagesId = _DatasGet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages', 'id');
            //$this->PageId = count($PagesId) + 1;
            _DataSet(HOST, DB_USER, DB_PASS, DB_NAME, 'pages', "id:NULL,name:{$this->PageName},title:{$this->PageTitle},content:{$this->PageContent},author:{$this->PageAuthor},date:{$this->PageDate}");
        }
	}

?>