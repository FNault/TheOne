<?php

	class Post{

		protected $Author;
		protected $Content;
		protected $Type;

		public function __construct($Author, $Content){

			$this->Author  = $Author;
			$this->Content = $Content;
		}

		public function _postComment(){

		}

		public function _getAuthor(){
			return $this->Author;
		}

		public function _setAuthor($Author){
			$this->Author = $Author;
		}

		public function _getContent(){
			return $this->Content;
		}

		public function _setContent($Content){
			$this->Content = $Content;
		}

	}