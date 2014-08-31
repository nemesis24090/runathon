<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 15/8/14
 * Time: 8:26 PM
 */

class Retrive_data extends CI_Model{

    function upcomingEvents($timestamp){
        $query = $this->db->query("select event_id,header
                                   from event_details where timestamp >'$timestamp'
                                   order by timestamp limit 5");

        return $query->result();
    }

    function famousColumns(){
        $query = $this->db->query("select cd.header,cd.column_id
                                  from column_reviews cr inner join column_details cd on cr.column_id = cd.column_id
                                  where cd.status='Active'
                                  group by cd.column_id
                                  order by sum(liked)
                                  limit 5");
        return $query->result();
    }

    function retriveColumn($column_id){
        $query = $this->db->query("select cd.header,cd.timestamp,cd.content,ud.name,ud.user_id,ud.profilepic,(select sum(liked) from column_reviews where column_id='$column_id' group by column_id) as like_count
                                   from column_details cd inner join user_details ud on cd.user_id = ud.user_id
                                   where cd.column_id='$column_id'");

        return $query;
    }

    function columnComments($column_id){
        $query=$this->db->query("select user_details.user_id,timestamp,content,name,profilepic
        from column_comment inner join user_details on column_comment.user_id=user_details.user_id where column_id='$column_id' order by timestamp desc");

       return $query->result();
    }

    function columnList($user_id){
        $query=$this->db->query("select column_id from column_reviews where user_id='$user_id'");

        return $query->result();
    }

    function postComment($user_id,$content,$column_id,$time){

        $query=$this->db->query("insert into column_comment values (NULL ,'$user_id','$column_id','$time','$content')");

        return $query;
    }

    function loginCheck($user_id){
        $username=$this->db->escape($user_id);
        $query=$this->db->query("select password from login_table where user_id=$username");

        return $query->result();
    }

    function createUser($data){
        $user_id=$this->db->escape($data['user_id']);
        $name=$this->db->escape($data['name']);
        $this->db->trans_start();
        $query=$this->db->query("insert into login_table values ($user_id,'$data[password]',NULL )");
        $query1=$this->db->query("insert into user_details values ($user_id,$name,NULL ,NULL ,'A',NULL,NULL)");
        $this->db->trans_complete();
        if($query && $query1)
            return true;
        else
            return false;
    }

    function emailCheck($user_id){
        $query=$this->db->query("Select user_id from login_table where user_id='$user_id'");

        return $query->result();
    }

    function userDetails($user_id){
        $query=$this->db->query("Select name,profilepic,lastlogin from user_details where user_id='$user_id'");

        return $query->result();
    }

    function updateLike($user_id,$column_id,$time){
        $query=$this->db->query("insert into column_reviews values (NULL ,'$user_id','$column_id','$time',1)");

        return $query;
    }

    function updateUnlike($user_id,$column_id){
        $query=$this->db->query("delete from column_reviews where user_id='$user_id' and column_id='$column_id'");
        return $query;
    }
}