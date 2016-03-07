<?php
		ob_start();
		function mysql_prep($value)
		{
			$magic_quotes_active = get_magic_quotes_gpc();
			$new_enough_php = function_exists("mysql_real_escape_string");
			
			if($new_enough_php)
			{
				//undo magic quotes effect
				if($magic_quotes_active)
				{
				$value = stripslashes($value);
				}
				$value = mysql_real_escape_string($value);
			}
			else
			{
				if(!$magic_quotes_active)//add slashes manually
				{
					$value = addslashes($value);
				}
			}
			return $value;
		}
		
		function confirm_query($result_set)
		{
					
					if(!$result_set)
					{
						die("Could not query.. " . mysql_error());
					}
		
		}
		
		
		function get_query_answers()
		{
			$query = "SELECT * FROM quiz ORDER BY id DESC";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		
		function get_notifications()
		{
		
			$query = "SELECT * FROM notifications ORDER BY id DESC";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		
		function get_poll_results()
		{
			$query = "SELECT * FROM poll";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		function get_poll_questions()
		{
			$query = "SELECT * FROM poll_questions ORDER BY id DESC";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		function get_poll_result_by_id($id)
		{
			$query = "SELECT * FROM previous_polls WHERE id = '$id' LIMIT 1";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		
		function get_msg_by_id($id)
		{
			$query = "SELECT * FROM messages WHERE reciever = '$id' ORDER BY id DESC";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		
		function get_current_question()
		{
			$query = "SELECT * FROM poll_questions ORDER BY id DESC LIMIT 1";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			return $result_set;
		}
		function get_article_by_id($article_id)
		{
			$query = "SELECT *"; 
			$query .= " FROM articles ";
			
			$query .= " WHERE id = $article_id";
			$query .= " LIMIT 1";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			if($article = mysql_fetch_array($article_set))
			{
				return $article;
			}
			
		}
		function get_notice_by_id($notice_id)
		{
			$query = "SELECT *"; 
			$query .= " FROM event ";
			
			$query .= " WHERE id = $notice_id";
			$query .= " LIMIT 1";
			$notice_set = mysql_query($query) ;
			confirm_query($notice_set);
			if($notice = mysql_fetch_array($notice_set))
			{
				return $notice;
			}
			
		}
		function  get_buyer_list()
		{
			$query = "SELECT *"; 
			$query .= " FROM buyers ";
			$query .= "";
			
					
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_feedback()
		{
			$query = "SELECT *"; 
			$query .= " FROM feedback ";
			$query .= "";
			
					
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_articles_sorted($genre)
		{
			$query = "SELECT *"; 
			$query .= " FROM articles ";
			$query .= " WHERE genre ='{$genre}' ";

			/*if($public == 1)
			{
				$query .= " WHERE visible = 1 AND genre = '{$genre}' ";
			}
			else
			{
				$query .= " WHERE genre ='{$genre}' ";
			}*/
					
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_articles()
		{
			$query = "SELECT *"; 
			$query .= " FROM articles ";
			$query .= " WHERE visible = 1 ";
			
					
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		
		function get_proxy_members($group)
		{
			$query = "SELECT *"; 
			$query .= " FROM proxymen";
			
				$query .= " WHERE username = '{$group}' ";
			
	
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		}
		function check_proxyman($username, $proxy)
		{
			$query = "SELECT * FROM proxymen
						WHERE username = '{$proxy}' AND proxyman = '{$username}' ";
						$subject_set = mysql_query($query) ;
				echo mysql_error();
			if($subject = mysql_fetch_array($subject_set))
			{
				echo $subject['proxyman'];
				//
			}
			else
			{
				redirect_to("view_attendence.php");
			}

						
		}
		function get_whose_proxyman($username)
		{
			$query = "SELECT *"; 
			$query .= " FROM proxymen";
			
				$query .= " WHERE proxyman = '{$username}' ";
			
	
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		}
		function get_notices()
		{
			$query = "SELECT * FROM event WHERE visible = '1' ORDER BY id DESC ";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function check_email($group)
		{
			$query = "SELECT *"; 
			$query .= " FROM users";
			
				$query .= " WHERE email = '{$group}' ";
			
	
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		}
		
		function get_blogs_sorted($genre)
		{
			$query = "SELECT *"; 
			$query .= " FROM articles WHERE visible = '1' ";
			
			if($genre != 'all')
			$query .= "  AND genre ='{$genre}' ";
			
					
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_blogs()
		{
			$query = "SELECT *"; 
			$query .= " FROM articles WHERE visible = '0' ";
				
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_moments()
		{
			$query = "SELECT *"; 
			$query .= " FROM articles WHERE genre = 'batch' ";
				
			$query .= " ORDER BY id DESC";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			return $article_set;
		}
		function get_blog_by_id($id)
		{
			$query = "SELECT *"; 
			$query .= " FROM articles ";
			
			$query .= " WHERE id = '$id'";
			$query .= " LIMIT 1";
			$article_set = mysql_query($query) ;
			confirm_query($article_set);
			if($article = mysql_fetch_array($article_set))
			{
				return $article;
			}
		}
		
		function get_users()
		{
			$query = "SELECT *"; 
			$query .= " FROM users ORDER BY id DESC";
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		
		}
		function get_user_by_id($user_id)
		{
			$query = "SELECT *"; 
			$query .= " FROM users WHERE id = '{$user_id}' LIMIT 1";
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		
		}
		function get_notices_all()
		{
			$query = "SELECT * FROM event ORDER BY id DESC ";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_tweets()
		{
			$query = "SELECT * FROM bakar ORDER BY id DESC ";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_trends()
		{
			$query = "SELECT * FROM trend WHERE visible = '1'  ORDER BY id DESC LIMIT 3";
			$trend = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $trend;
			
		}
		function  get_notices_public()
		{
			$query = "SELECT * FROM news ORDER BY id DESC";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_second_pro_details()
		{
			$query = "SELECT * FROM product ORDER BY id DESC";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function  get_all_products_not_edited()
		{
			$query = "SELECT * FROM product WHERE edited = '0' ORDER BY id DESC ";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_sec_product_by_id($id)
		{
			$query = "SELECT *"; 
			$query .= " FROM product ";
			
			$query .= " WHERE id = $id";
			$query .= " LIMIT 1";
			$notice_set = mysql_query($query) ;
			confirm_query($notice_set);
			if($notice = mysql_fetch_array($notice_set))
			{
				return $notice;
			}
		}
		function  get_news()
		{
			$query = "SELECT * FROM news  ORDER BY id DESC LIMIT 10";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_questions()
		{
			$query = "SELECT * FROM ask  ORDER BY id DESC LIMIT 10";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_question_by_id($id)
		{
			$query = "SELECT * FROM ask  WHERE id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_answer_by_id($id)
		{
			$query = "SELECT * FROM scg_answers  WHERE que_id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_topics()
		{
			$query = "SELECT * FROM shout ORDER BY id DESC LIMIT 10";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_topic_by_id($id)
		{
			$query = "SELECT * FROM shout  WHERE id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_bakar_by_id($id)
		{
			$query = "SELECT * FROM bakar  WHERE id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_comments_by_id($id)
		{
			$query = "SELECT * FROM comments  WHERE shout_id = '{$id}' ORDER BY id DESC";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_comments_of_bakar_by_id($id)
		{
			$query = "SELECT * FROM bakar_comments  WHERE bakar_id = '{$id}' ORDER BY id DESC";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_admin_questions()
		{
			$query = "SELECT * FROM ask  WHERE answer = 0 ORDER BY id DESC LIMIT 10";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function  get_items()
		{
			$query = "SELECT * FROM item";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_details_of_brand($x, $y)
		{
			$query = "SELECT * FROM brand WHERE brand = '{$y}' AND category = '{$x}'";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_price($x, $y, $z)
		{
			$query = "SELECT * FROM brand WHERE brand = '{$y}' AND category = '{$x}' AND quantity = '{$z}'";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_orders()
		{
			$query = "SELECT * FROM orders";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_items_in_cart($x)
		{
			$query = "SELECT * FROM cart WHERE session_id = '{$x}' ORDER BY id DESC LIMIT 5";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
			
		}
		function get_start_list()
		{
			$query = "SELECT * FROM start";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		function get_start_details($id)
		{
			$query = "SELECT * FROM start_name WHERE start_id = '{$id}' ";
			$notice = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $notice;
		}
		
		
		
		function get_brands_for_product($x)
		{
		
			$query = "SELECT *"; 
			$query .=" FROM brand"; 
			$query .= " WHERE category = '{$x}'";
			
		
			$page_set = mysql_query($query) ;
			confirm_query($page_set);
			return $page_set;
							
						
		}
		
		function  get_newsfeed()
		{
			$query = "SELECT * FROM event  ORDER BY id DESC";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_attendence($username)
		{
			$query = "SELECT * FROM attendene_given WHERE student = '{$username}' ";
			
			$subject_set = mysql_query($query) ;
			echo mysql_error();
			confirm_query($query);
			return $subject_set;
		}
		
		function get_submitted_days($username)
		{
			$query = "SELECT * FROM attendence_days WHERE user = '{$username}' ";
			
			$subject_set = mysql_query($query) ;
			echo mysql_error();
			confirm_query($query);
			return $subject_set;
			
		}
		function check_members($name)
		{
			$query = "SELECT *"; 
			$query .= " FROM attendene_given";
			
			$query .= " WHERE student = '{$name}' LIMIT 1 ";
			
	
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			if($members = mysql_fetch_array($subject_set))
			{
				//$group = $members['student'];
				redirect_to("attendence_index.php");
			}
			
		}
		

		
		
		function get_all_subjects($public = true)
		{
			$query = "SELECT *"; 
			$query .= " FROM subjects";
			if($public)
			{
				$query .= " WHERE visible = 1";
			}
			$query .= " ORDER BY position ASC";
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		}
		
		function get_subjects_for_member($group)
		{
			$query = "SELECT *"; 
			$query .= " FROM attendence";
			
				$query .= " WHERE student = '{$group}' LIMIT 1" ;
			
	
			$subject_set = mysql_query($query) ;
			confirm_query($subject_set);
			return $subject_set;
		}
		
			
		function get_all_pages()
		{
			$query = "SELECT * 
					  FROM pages
					  ORDER BY position ASC";
			$page_set = mysql_query($query) ;
			confirm_query($page_set);
			return $page_set;
		}
		
		function get_all_tickets()
		{
			$query = "SELECT * 
					  FROM rail
					  ORDER BY id DESC";
			$ticket_set = mysql_query($query) ;
			confirm_query($ticket_set);
			return $ticket_set;
		}
		
		function get_all_products($category, $filter)
		{
			$query = "SELECT * 
					  FROM product WHERE visible = '1' ";
			if($category != 'all')
			{
				$query .= " AND category = '{$category}'";
			}
			if($filter == 'up')
			{
					$query .=" ORDER BY price ASC ";
			}
			elseif($filter == 'down' )
			{
					$query .=" ORDER BY price DESC ";
			}
					 //$query .=" WHERE visible = '1' ";
			$product_set = mysql_query($query) ;
			confirm_query($product_set);
			return $product_set;
		}
		function get_products()
		{
				$query = "SELECT * FROM product WHERE visible = '0' ORDER BY id DESC";
				$product_set = mysql_query($query) ;
				confirm_query($product_set);
				return $product_set;
		}
		function get_books()
		{
				$query = "SELECT * FROM book WHERE visible = '0' ORDER BY id DESC";
				$product_set = mysql_query($query) ;
				confirm_query($product_set);
				return $product_set;
		}
		function get_product_by_id($id)
		{
			$query = "SELECT * FROM product  WHERE id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_book_by_id($id)
		{
			$query = "SELECT * FROM book  WHERE id = '{$id}' LIMIT 1";
			$news = mysql_query($query);
			echo mysql_error();
			confirm_query($query);
			return $news;
		}
		function get_all_books($genre, $filter)
		{
			$query = "SELECT * 
					  FROM book WHERE visible = 1 ";
			if($genre != 'all')
			{
				$query .= "AND genre = '{$genre}' ";
			}
			if($filter == 'up')
			{
					$query .="ORDER BY price ASC ";
			}
			elseif($filter == 'down' )
			{
					$query .="ORDER BY price DESC ";
			}
			$book_set = mysql_query($query) ;
			confirm_query($book_set);
			return $book_set;
		}
		
		function get_all_messages()
		{
			$query = "SELECT * FROM discuss ORDER BY id DESC";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		
		function get_all_queries_field($field)
		{
			$query = "SELECT * FROM experts WHERE field = '{$field}' ORDER BY id DESC ";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		
		
		function get_all_user_details($name)
		{
			$query = "SELECT * FROM experts WHERE name = '{$name}' LIMIT 1";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		
		function get_profile_details($name, $email)
		{
			$query = "SELECT * FROM users WHERE name = '{$name}' AND email = '{$email}' LIMIT 1";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		function get_profile_by_id($id)
		{
			$query = "SELECT * FROM users WHERE id = '{$id}' LIMIT 1 ";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
		}
		
		function get_all_queries()
		{
			$query = "SELECT * FROM experts ORDER BY id DESC ";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		
		function get_messages($to, $by)
		{
			$query = "SELECT * FROM messages
						WHERE (reciever = '{$to}' OR   reciever = '{$by}')
						AND (sender = '{$to}' OR sender = '{$by}') 
						ORDER BY id DESC";
				$result = mysql_query($query);
				confirm_query($result);
				return $result;
		}
		
		function get_messages_from_all($by)
		{
			$query = "SELECT * FROM messages
						WHERE (reciever = '{$by}' OR sender = '{$by}')
						
						ORDER BY id DESC";
				$result = mysql_query($query);
				confirm_query($result);
				return $result;
		}
		
		function get_all_users()
		{
			$query = "SELECT * FROM users ORDER BY id DESC ";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			return $msg_set;
			
		}
		
		function get_user_details_by_name($name)
		{
			$query = "SELECT * FROM users
						WHERE name = '{$name}'
						LIMIT 1 ";
			$msg_set = mysql_query($query);
			confirm_query($msg_set);
			while($user = mysql_fetch_array($msg_set))
			{
				$pic = $user['image_name'];
			}
			return $pic;
			
		}
		function get_profile_set($user)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM users ";
			$query .= " WHERE username = '{$user}'";
			//$query .= "$user";
			$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			if($query = mysql_fetch_array($result_set))
			{
				return $query;
			}
			else
			{
			return NULL;
			}
		}
		
		function get_query_by_id($query_id)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM experts ";
			$query .= "WHERE id=" . $query_id;
			$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			if($query = mysql_fetch_array($result_set))
			{
				return $query;
			}
			else
			{
			return NULL;
			}
		}
		
		function get_your_queries($name)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM experts ";
			$query .= "WHERE name =" . '{$name}' . '"';
			$result = mysql_query($query);
			confirm_query($result);
			return $result;
			
		}
		
		function if_expert($id)
		{
			
			$query = "SELECT * FROM expert_ans WHERE query_id = '$id' AND expert = 1";
			$result = mysql_query($query);
			confirm_query($result);
			return $result;
			
		}
		
		
		
		function get_answers_for_query($query_id)
		{
			$query = "SELECT *"; 
			$query .=" FROM answers"; 
			$query .= " WHERE query_id = {$query_id}";
			
			$query .= "	ORDER BY id DESC ";
			$query_set = mysql_query($query) ;
			confirm_query($query_set);
			return $query_set;
							
						
		}
		
		function get_pages_for_subjects($subject_id, $public = true)
		{
		
			$query = "SELECT *"; 
			$query .=" FROM pages"; 
			$query .= " WHERE subject_id = {$subject_id}";
			if($public)
			{
				$query .= " AND visible = 1";
			}
			$query .= "	ORDER BY position ASC ";
			$page_set = mysql_query($query) ;
			confirm_query($page_set);
			return $page_set;
							
						
		}
		
		function get_query_ans_by_id($query_id)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM expert_ans ";
			$query .= "WHERE query_id=" . $query_id;
			$query .= " ORDER BY id DESC";

			//SSSS$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			return $result_set;
		}
		function check_online()
		{
					$query="SELECT * FROM user_online WHERE session_id = $user_id LIMIT 1";

		}
		
		function get_total_ans($query_id)
		{	
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM expert_ans ";
			$query .= "WHERE query_id=" . $query_id;

			//SSSS$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			return $result_set;
		}
		

		function get_subject_by_id($subject_id)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM subjects ";
			$query .= "WHERE id=" . $subject_id;
			//SSSS$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			if($subject = mysql_fetch_array($result_set))
			{
				return $subject;
			}
			else
			{
			return NULL;
			}
		}
		
		function get_page_by_id($page_id)
		{
			global $connection;
			$query = "SELECT * ";
			$query .= "FROM pages ";
			$query .= "WHERE id=" . $page_id;
			//SSSS$query .= " LIMIT 1";
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			if($page = mysql_fetch_array($result_set))
			{
				return $page;
			}
			else
			{
			return NULL;
			}
		}
		function get_default_page($subject_id)
		{
			$page_set = get_pages_for_subjects($subject_id, true);
			
				if($first_page = mysql_fetch_array($page_set))
				{
					return $first_page;
				}
				else
				{
					return NULL;
				}
				
		}
		function find_selected_page()
		{
			global $sel_subject;
			global $sel_page;
			
			
			if(isset($_GET['subj']))
			{

				$sel_subject = get_subject_by_id($_GET['subj']);
				$sel_page = get_default_page($sel_subject['id']);;

			}elseif(isset($_GET['page']))
			{
				$sel_subject = NULL;
				$sel_page = get_page_by_id($_GET['page']);
			}

				
			else{
				
				$sel_subject = NULL;
				$sel_page = NULL;

				}
		}

		function navigation($sel_subject, $sel_page, $public = false)
		{
		
					$output =  "<ul class=\"subjects\">";

						$subject_set = get_all_subjects($public);
						while($subject = mysql_fetch_array($subject_set))
						{
							$output .= "<li";
							if($subject["id"] == $sel_subject['id'])
							{
							$output .= " class=\"selected\"";
							}
							$output .= "><a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) . "\" > {$subject["menu_name"]} </a></li> ";
							$page_set = get_pages_for_subjects($subject["id"], $public);
							$output .= "<ul class = \"pages\">";
							
							while($page = mysql_fetch_array($page_set))
							{
								$output .= "<li ";
								if($page["id"] == $sel_page['id'])
								{
								$output .= " class=\"selected\"";	
								}
								$output .= "><a href=\"content.php?page=" . urlencode($page["id"]) . "\" >{$page["menu_name"]}</a></li> ";
							}
							$output .= "</ul>";
							
						}
						return $output;
						

		}
		
		function public_navigation($sel_subject, $sel_page, $public = true)
		{
		
					$output =  "<ul class=\"subjects\">";

						$subject_set = get_all_subjects($public);
						while($subject = mysql_fetch_array($subject_set))
						{
							$output .= "<li";
							if($subject["id"] == $sel_subject['id'])
							{
							$output .= " class=\"selected\"";
							}
							$output .= "><a href=\"index.php?subj=" . urlencode($subject["id"]) . "\" > {$subject["menu_name"]} </a></li> ";
							
							if(($subject["id"]  == $sel_subject['id']) || ($sel_page['subject_id'] == $subject["id"]) )
							{
								$page_set = get_pages_for_subjects($subject["id"], $public);
								$output .= "<ul class = \"pages\">";
								
								while($page = mysql_fetch_array($page_set))
								{
									$output .= "<li ";
									if($page["id"] == $sel_page['id'])
									{
									$output .= " class=\"selected\"";	
									}
									$output .= "><a href=\"index.php?page=" . urlencode($page["id"]) . "\" >{$page["menu_name"]}</a></li> ";
								}
								$output .= "</ul>";
							}
							
						}
						return $output;
						

		}
		
		function redirect_to($location = NULL)
		{
			if($location!=NULL)
			{
				header("Location: {$location}");
				echo "You are being redirected to $location, if not use this link <a href='$location'>$location</a>";
				exit;
			}
		}
?>