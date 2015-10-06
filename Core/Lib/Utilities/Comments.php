<?php

	class Comment{

		protected $AuthorId;
		protected $Content;
		protected $ArticleId;
		protected $Date;
		protected $Id;

		public function __construct($AuthorId, $Content, $ArticleId){

			$this->AuthorId      = $AuthorId;
			$this->Content       = $Content;
			$this->ArticleId     = $ArticleId;
		}

		public function _PostComment($Comment){
			_DataSet(HOST, DB_USER, DB_PASS, DB_NAME, 'comments', "id:null,author_id:$Comment->AuthorId,content:$Comment->Content,article_id:$Comment->ArticleId");
		}

		public function _getAuthorId(){
			return $this->AuthorId;
		}

		public function _setAuthorId($AuthorId){
			$this->AuthorId = $AuthorId;
		}

		public function _getArticleId(){
			return $this->AuthorId;
		}

		public function _setArticleId($ArticleId){
			$this->ArticleId = $ArticleId;
		}

		public function _getContent(){
			return $this->Content;
		}

		public function _setContent($Content){
			$this->Content = $Content;
		}

	}